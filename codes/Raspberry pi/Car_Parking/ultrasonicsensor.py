import RPi.GPIO as GPIO                    #Import GPIO library
import time
GPIO.setmode(GPIO.BCM)                     #Set GPIO pin numbering 


TRIG1 = 4                                 #Associate pin 23 to TRIG
ECHO1 = 17                                  #Associate pin 24 to ECHO
TRIG3 = 5                                 #Associate pin 23 to TRIG
ECHO3 = 6                                  #Associate pin 24 to ECHO
TRIG4 = 13                                 #Associate pin 23 to TRIG
ECHO4 = 19                                  #Associate pin 24 to ECHO


GPIO.setup(TRIG1,GPIO.OUT)                  #Set pin as GPIO out
GPIO.setup(ECHO1,GPIO.IN)                   #Set pin as GPIO in
GPIO.setup(TRIG3,GPIO.OUT)                  #Set pin as GPIO out
GPIO.setup(ECHO3,GPIO.IN)                   #Set pin as GPIO in
GPIO.setup(TRIG4,GPIO.OUT)                  #Set pin as GPIO out
GPIO.setup(ECHO4,GPIO.IN)                   #Set pin as GPIO in

def slot1():
    GPIO.setmode(GPIO.BCM)
    TRIG1 = 4                                 #Associate pin 23 to TRIG
    ECHO1 = 17                                  #Associate pin 24 to ECHO
    GPIO.setup(TRIG1,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO1,GPIO.IN)                   #Set pin as GPIO in

    
    #print ("Distance measurement in progress")

    GPIO.output(TRIG1, False)                 #Set TRIG as LOW
    #print ("Waitng For Sensor To Settle")
    time.sleep(2)                            #Delay of 2 seconds

    GPIO.output(TRIG1, True)                  #Set TRIG as HIGH
    time.sleep(0.00001)                      #Delay of 0.00001 seconds
    GPIO.output(TRIG1, False)                 #Set TRIG as LOW

    while GPIO.input(ECHO1)==0:               #Check whether the ECHO is LOW
        pulse_start = time.time()              #Saves the last known time of LOW pulse

    while GPIO.input(ECHO1)==1:               #Check whether the ECHO is HIGH
        pulse_end = time.time()                #Saves the last known time of HIGH pulse 

    pulse_duration = pulse_end - pulse_start #Get pulse duration to a variable

    distance = pulse_duration * 17150        #Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)            #Round to two decimal points

      #Check whether the distance is within range
    print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range

    if distance < 20:
        GPIO.cleanup()
        status=1
        return status
        
    else:
        status=0
        return status
        
        





def slot2():
    GPIO.setmode(GPIO.BCM)
    TRIG3 = 5                                 #Associate pin 23 to TRIG
    ECHO3 = 6
    
    GPIO.setup(TRIG3,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO3,GPIO.IN)                   #Set pin as GPIO in
#Associate pin 24 to ECHO
    
    
    #print ("Distance measurement in progress")



    GPIO.output(TRIG3, False)                 #Set TRIG as LOW
    #print ("Waitng For Sensor To Settle")
    time.sleep(2)                            #Delay of 2 seconds

    GPIO.output(TRIG3, True)                  #Set TRIG as HIGH
    time.sleep(0.00001)                      #Delay of 0.00001 seconds
    GPIO.output(TRIG3, False)                 #Set TRIG as LOW

    while GPIO.input(ECHO3)==0:               #Check whether the ECHO is LOW
        pulse_start = time.time()              #Saves the last known time of LOW pulse

    while GPIO.input(ECHO3)==1:               #Check whether the ECHO is HIGH
        pulse_end = time.time()                #Saves the last known time of HIGH pulse 

    pulse_duration = pulse_end - pulse_start #Get pulse duration to a variable

    distance = pulse_duration * 17150        #Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)            #Round to two decimal points

      #Check whether the distance is within range
    #print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range

    if distance < 20:
        GPIO.cleanup()
        status=1
        return status
        
    else:
        status=0
        return status
        
    

def slot3():
    GPIO.setmode(GPIO.BCM)
    TRIG4 = 13                                 #Associate pin 23 to TRIG
    ECHO4 = 19                                  #Associate pin 24 to ECHO
    GPIO.setup(TRIG4,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO4,GPIO.IN)                   #Set pin as GPIO in

    
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
        status=1
        return status
        
    else:
        status=0
        return status
        
    

GPIO.cleanup()
