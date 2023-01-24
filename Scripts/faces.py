from face_detection import crop_faces
import cv2,sys,time

try:
    while True:
        print("\n\n***NOVA CAPTURA DE IMAGEM *** :)")
        print("\nPrima ESC na janela grafica para capturar a face")
        print("Prima CTRL+C na linha de comando para terminar o programa")
        fa=crop_faces()
        print("A gravar a imagem faces.jpg")
        cv2.imwrite('face.jpg', fa)
        print("A aguardar 5 segundos até nova captura ou CTRL+C para terminar")
        time.sleep(5)

except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
    print("Programa terminado pelo utilizador")

except: # caso haja um erro qualquer
    print("Ocorreu um erro:", sys.exc_info() )
    
finally: # executa sempre, independentemente se ocorreu exception
    print("Fim do programa")
    cv2.destroyAllWindows()