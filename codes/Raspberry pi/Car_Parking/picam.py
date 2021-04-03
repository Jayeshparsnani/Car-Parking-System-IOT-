from picamera import PiCamera,Color
import time
from time import sleep

camera = PiCamera()
#camera.start_preview()
sleep(5)
camera.capture('/home/pi/Desktop/sunlight.jpg')
sleep(5)
camera.capture('/home/pi/Desktop/beach.jpg')
camera.stop_preview()
camera.close