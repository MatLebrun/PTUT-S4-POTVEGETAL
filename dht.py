import sys
from subprocess import call 
import Adafruit_DHT
import mysql.connector
import time
from datetime import datetime

from board import SCL, SDA
import busio

from adafruit_seesaw.seesaw import Seesaw

i2c_bus = busio.I2C(SCL,SDA)

ss = Seesaw(i2c_bus, addr = 0x36)

moisture = (ss.moisture_read() / 10)

temp_ground = round(ss.get_temp(), 1)

sensor = Adafruit_DHT.DHT22

date = datetime.now()

humidity, temperature = Adafruit_DHT.read_retry(sensor, 4)

hum = round(humidity, 1 )
temp = round(temperature, 1)


db = mysql.connector.connect(host="mysql-potvegetal.alwaysdata.net", user="232268", passwd="potvegetal20212021", db="potvegetal_s4")


cursor = db.cursor()
print(cursor)
request = "INSERT INTO Ptuts4 (id_pot, humidity, temperature, temp_ground, moisture, date) VALUES (NULL, %s, %s, %s, %s, %s ) "
data = (hum, temp, temp_ground, moisture,date)
cursor.execute(request, data)

print(cursor)
db.commit()



if humidity is not None and temperature is not None:
    print('Temp={0:0.1f}*  Humidity={1:0.1f}%'.format(temperature, humidity))
else:
    print('Failed to get reading. Try again!')
    sys.exit(1)


if moisture < 60:
    rc = call("./pump_crone")
    
    
