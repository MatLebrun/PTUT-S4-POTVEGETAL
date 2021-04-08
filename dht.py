import sys

import Adafruit_DHT
import mysql.connector


sensor = Adafruit_DHT.DHT22


humidity, temperature = Adafruit_DHT.read_retry(sensor, 4)


db = mysql.connector.connect(host="mysql-ptut-pot.alwaysdata.net", user="ptut-pot", passwd="aaabbbccc1", db="ptut-pot_db")


cursor = db.cursor()
print(cursor)
request = "INSERT INTO data (id, humidity, temperature, wsensor) VALUES (NULL, %s, %s, %s)"
data = (humidity, temperature, None)
cursor.execute(request, data)

print(cursor)
db.commit()



if humidity is not None and temperature is not None:
    print('Temp={0:0.1f}*  Humidity={1:0.1f}%'.format(temperature, humidity))
else:
    print('Failed to get reading. Try again!')
    sys.exit(1)
