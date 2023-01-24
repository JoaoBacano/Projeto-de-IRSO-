import sys
import cv2 as cv2

from requests import (post,get)

camera = cv2.VideoCapture(0)
delay=5000
url='http://127.0.0.1/ti/upload.php'
url2='http://127.0.0.1/ti/api/api.php?nome=temperatura'

def send_file(file):
    print("A enviar ficheiro para a web...")
    r = post(url, files=file)
    print(r.status_code, "---", r.text)

try:
    print("Prima CTRL+C para terminar")
    while True:
        resposta=get=(url2)
        print("\n\nTemperatura: ", float(resposta.text))
        if(resposta.status_code ==200):
            if(float(resposta.text) > 20):
                print("------------------------------")
                print("A capturar imagem")
                ret, imagem = camera.read()
                print("Resultado da Camera=" + str(ret))
                print("A gravar imagem em disco")
                cv.imwrite('webcam.jpg', image)
                file = {'imagem' : open('webcam.jpg', 'rb')}
                send_file(file)
        print("Próxima captura de imagem dentro de " + str(delay/1000) + " segundos...")
        cv.waitKey(delay)

except KeyboardInterrupt:
    print("Programa terminado pelo utilizador")

except:
    print("Ocorreu um erro", sys.exc_info())

finally:
    print("Fim do programa")
    camera.realease()
    cv.destroyAllWindows()
    