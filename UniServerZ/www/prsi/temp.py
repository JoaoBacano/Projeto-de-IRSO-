import sys, time, requests
import simpleaudio

def PlaySound(file):
    print("Tocou ficheiro alarm")
    wave_obj = simpleaudio.WaveObject.from_wave_file(file)
    play_obj = wave_obj.play()
    play_obj.wait_done()
    # pygame.mixer.init()
    # my_sound = pygame.mixer.Sound(file)
    # my_sound.play()
    # pygame.time.wait(int(my_sound.get_length() * 1000))

try:
    print("Prima CTRL+C para terminar")
    while True: # ciclo para o programa executar sem parar...
        r=requests.get("http://127.0.0.1/prsi/api/api.php?nome=temperatura")
        if(r.status_code == 200):
            if(float(r.text)>20):
                print("Temperatura High: ", r.text)
                PlaySound("C:\Users\FiercePC\Documents\GitHub\Projeto-de-IRSO-\Scripts\Alarm.wav")
            # print("OK: GET realizado com sucesso!")
            # print("Status Code: " + str(r.status_code))
            # print("Valor: " + r.text, "ºC")
            else:
                print("Temperatura Low: ", r.text)
        else:
            print("ERRO: Nao foi possivel realizar o pedido")
            print("Status Code: " + str(r.status_code))
        time.sleep(2)
        print("\n")

except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
    print("Programa terminado pelo utilizador")

except: # caso haja um erro qualquer
    print("Ocorreu um erro:", sys.exc_info() )
    
finally: # executa sempre, independentemente se ocorreu exception
    print("Fim do programa")

