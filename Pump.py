import RPi.GPIO as GPIO
import time

pin = 35 
GPIO.setmode(GPIO.BOARD)
GPIO.setup(pin,GPIO.OUT)
GPIO.output(pin, GPIO.LOW)

time.sleep(10)

GPIO.output(pin, GPIO.HIGH)

state = GPIO.gpio_function(pin)
print(state)
