import time


from board import SCL, SDA
import busio

from adafruit_seesaw.seesaw import Seesaw

i2c_bus = busio.I2C(SCL,SDA)

ss = Seesaw(i2c_bus, addr = 0x36)

while True:

    moisture = ss.moisture_read()

    temp_ground = ss.get_temp()

    print("Température : " + str(temp_ground) + " °C " + " Humidité : " + str(moisture/10) + " %")

    time.sleep(1)
