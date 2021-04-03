import RPi.GPIO as GPIO                    #Import GPIO library
import time
from picamera import PiCamera,Color
import time
from time import sleep
import cv2
import imutils
import numpy as np
import pytesseract
from PIL import Image

def camera():
    camera = PiCamera()
#camera.start_preview()
    sleep(5)
    camera.capture('/home/pi/Desktop/Car_Parking/beach.png')
    camera.stop_preview()
    camera.close()
    distance1()



def distance1():
    GPIO.setmode(GPIO.BCM)                     #Set GPIO pin numbering 

    TRIG2 = 27                                 #Associate pin 23 to TRIG
    ECHO2 = 22                                  #Associate pin 24 to ECHO

    print ("Distance measurement in progress")

    GPIO.setup(TRIG2,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO2,GPIO.IN)                   #Set pin as GPIO in

    GPIO.output(TRIG2, False)                 #Set TRIG as LOW
    print ("Waitng For Sensor To Settle")
    time.sleep(2)                            #Delay of 2 seconds

    GPIO.output(TRIG2, True)                  #Set TRIG as HIGH
    time.sleep(0.00001)                      #Delay of 0.00001 seconds
    GPIO.output(TRIG2, False)                 #Set TRIG as LOW

    while GPIO.input(ECHO2)==0:               #Check whether the ECHO is LOW
        pulse_start = time.time()              #Saves the last known time of LOW pulse

    while GPIO.input(ECHO2)==1:               #Check whether the ECHO is HIGH
        pulse_end = time.time()                #Saves the last known time of HIGH pulse 

    pulse_duration = pulse_end - pulse_start #Get pulse duration to a variable

    distance = pulse_duration * 17150        #Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)            #Round to two decimal points

      #Check whether the distance is within range
    print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range
    
    if distance < 20:
        camera()
    else:
        distance1()
    
   
    GPIO.cleanup()    
distance1()
