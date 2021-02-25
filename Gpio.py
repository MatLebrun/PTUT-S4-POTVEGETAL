import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
DIGIOUT = 3
GPIO.setup(DIGIOUT, GPIO.IN)

print('[Press CTRL + C to end the script!]')
try: # Main program loop
    for i in range(0,10):
        print(GPIO.input(DIGIOUT))
        time.sleep(2)
        
except KeyboardInterrupt:
    print('\nScript end!')
finally:
    GPIO.cleanup()
