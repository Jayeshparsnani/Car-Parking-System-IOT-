import RPi.GPIO as GPIO
import requests#Import GPIO library
import time
GPIO.setmode(GPIO.BCM)

TRIG4 = 13                                 #Associate pin 23 to TRIG
ECHO4 = 19                                  #Associate pin 24 to ECHO


GPIO.setup(TRIG4,GPIO.OUT)                  #Set pin as GPIO out
GPIO.setup(ECHO4,GPIO.IN)                   #Set pin as GPIO in


def slot3():
    GPIO.setmode(GPIO.BCM)
    TRIG4 = 13                                 #Associate pin 23 to TRIG
    ECHO4 = 19                                  #Associate pin 24 to ECHO
    GPIO.setup(TRIG4,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO4,GPIO.IN)                   #Set pin as GPIO in

    status=0
    #print ("Distance measurement in progress")



    GPIO.output(TRIG4, False)                 #Set TRIG as LOW
    #print ("Waitng For Sensor To Settle")
    time.sleep(2)                            #Delay of 2 seconds

    GPIO.output(TRIG4, True)                  #Set TRIG as HIGH
    time.sleep(0.00001)                      #Delay of 0.00001 seconds
    GPIO.output(TRIG4, False)                 #Set TRIG as LOW

    while GPIO.input(ECHO4)==0:               #Check whether the ECHO is LOW
        pulse_start = time.time()              #Saves the last known time of LOW pulse

    while GPIO.input(ECHO4)==1:               #Check whether the ECHO is HIGH
        pulse_end = time.time()                #Saves the last known time of HIGH pulse 

    pulse_duration = pulse_end - pulse_start #Get pulse duration to a variable

    distance = pulse_duration * 17150        #Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)            #Round to two decimal points

      #Check whether the distance is within range
    #print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range
    if distance < 20:
        GPIO.cleanup()
        n={'slot3':'1'}
        r=requests.post('http://192.168.137.227:80/carparking/checking_slot.php',data=n)
        slot33()
        
    else:
        #return status
        slot3()
    
def slot33():
    GPIO.setmode(GPIO.BCM)
    TRIG4 = 13                                 #Associate pin 23 to TRIG
    ECHO4 = 19                                  #Associate pin 24 to ECHO
    GPIO.setup(TRIG4,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO4,GPIO.IN)                   #Set pin as GPIO in

    status=1
    #print ("Distance measurement in progress")



    GPIO.output(TRIG4, False)                 #Set TRIG as LOW
    #print ("Waitng For Sensor To Settle")
    time.sleep(2)                            #Delay of 2 seconds

    GPIO.output(TRIG4, True)                  #Set TRIG as HIGH
    time.sleep(0.00001)                      #Delay of 0.00001 seconds
    GPIO.output(TRIG4, False)                 #Set TRIG as LOW

    while GPIO.input(ECHO4)==0:               #Check whether the ECHO is LOW
        pulse_start = time.time()              #Saves the last known time of LOW pulse

    while GPIO.input(ECHO4)==1:               #Check whether the ECHO is HIGH
        pulse_end = time.time()                #Saves the last known time of HIGH pulse 

    pulse_duration = pulse_end - pulse_start #Get pulse duration to a variable

    distance = pulse_duration * 17150        #Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)            #Round to two decimal points

      #Check whether the distance is within range
    #print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range
    if distance > 20:
        GPIO.cleanup()
        
        n={'empty3':'slot3'}
        r=requests.post('http://192.168.137.227:80/carparking/slot.php',data=n)
        n={'slot33':'0'}
        r=requests.post('http://192.168.137.227:80/carparking/checking_slot.php',data=n)
        
        slot3()
        
    else:
        slot33()

slot3()
GPIO.cleanup()
