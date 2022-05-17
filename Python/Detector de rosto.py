import cv2

#Carregando o modelo
face_cascade =  cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

#Carrega a imagem
img = cv2.imread('mark.jpg')

#Convertendo em escalas de cinza
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

#Detectando rosto
faces = face_cascade.detectMultiScale(gray, 1.1, 4)

#Desenha um retângulo no rosto detectado
for (x, y, a, b) in faces:
    cv2.rectangle(img, (x, y), (x+a, y+b), (255, 0, 0), 2)
    
#Retorna o resultado
cv2.imshow('img', img)
cv2.waitKey()