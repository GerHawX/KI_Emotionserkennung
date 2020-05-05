# Import der benötigten Module
import numpy as np
from tensorflow.keras.models import load_model
from keras.preprocessing.image import load_img, img_to_array
import cv2
import json
import dlib
from flask import Flask, request
import urllib.request

app = Flask(__name__)


def getImageFromUrl(pic_url):
    #Downloaden des angeforderten Bildes
    print("Downloading Image...")
    req = urllib.request.urlopen(pic_url)
    arr = np.asarray(bytearray(req.read()), dtype=np.uint8)
    img = cv2.imdecode(arr, -1)
    img = cv2.cvtColor(img, cv2.COLOR_RGB2BGR)
    print("URL: " + pic_url)
    print("Image erfolgreich geladen")
    return img

def rgb2gray(rgb):
    #Umwandeln des Bildes in Graustufen
    return np.dot(rgb[...,:3], [0.299, 0.587, 0.114])

def getEmotion(model, face, emotion_labels):
  # Auslesen der Emotionen
  face = img_to_array(face)
  face = np.resize(face,(48,48,1))
  face = face.reshape(1,48,48,1)
  face = face/255
  pred = model.predict(face)
  return emotion_labels[np.argmax(pred)], np.amax(pred)

def myconverter(obj):
  if isinstance(obj, np.integer):
      return int(obj)
  elif isinstance(obj, np.floating):
      return float(obj)
  elif isinstance(obj, np.ndarray):
      return obj.tolist()
  elif isinstance(obj, datetime.datetime):
      return obj.__str__()

@app.route('/', methods=['POST'])
# Die Funktion "Work" wird aufgerufen, sobald eine Anfrage an den Flask-Server ohne Parameter gestellt wird.
def work():
    print("Anfrage eingetroffen!")

    print("Lade Model!")
    model = load_model("model_weights_accuracy_0.6843.h5")
    print("Model geladen!")

    emotion_labels = ['Angry', 'Disgust', 'Fear', 'Happy', 'Sad', 'Surprise', 'Neutral']

    print("Lade FaceDetector...")
    dnnFaceDetector = dlib.cnn_face_detection_model_v1("mmod_human_face_detector.dat")
    print("FaceDetector geladen!")

    print("Bild wird eingelesen...")
    pic_url = request.data.decode()
    image_raw = getImageFromUrl(pic_url)
    print("Bild eingelesen!")

    print("Bild wird konvertiert...")
    image = np.array(rgb2gray(image_raw), dtype='uint8')
    print("Konvertierung erfolgreich!")

    result=[]

    print("Starte Gesichtserkennung...")
    rects = dnnFaceDetector(image, 1)
    print("Gesichtserkennung abgeschlossen!")
    for (i, rect) in enumerate(rects):
        x1 = rect.rect.left()
        y1 = rect.rect.top()
        x2 = rect.rect.right()
        y2 = rect.rect.bottom()
        face = image[y1:y2, x1:x2]
        print("Starte Emotionserkennung!")
        emotion, percentage = getEmotion(model, face, emotion_labels)
        result.append({"emotion":emotion, "x1":x1, "y1":y1, "x2":x2, "y2":y2})
        print("Emotionserkennung beendet!")

        #cv2.rectangle(image_raw, (x1, y1), (x2, y2), (0,0,0), 2)
        #cv2.putText(image_raw,emotion, (x1,y1-5), cv2.FONT_HERSHEY_SIMPLEX , 0.4, (0,0,0),2)

    result_json = json.loads(json.dumps(result, default=myconverter))
    return json.dumps(result_json)

# Führe die Datei beim aufrufen als Python-Script aus
if __name__ == '__main__':
    app.run()