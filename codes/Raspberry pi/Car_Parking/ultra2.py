import RPi.GPIO as GPIO
import requests#Import GPIO library
import time
GPIO.setmode(GPIO.BCM)
TRIG3 = 5                                 #Associate pin 23 to TRIG
ECHO3 = 6                                  #Associate pin 24 to ECHO

GPIO.setup(TRIG3,GPIO.OUT)                  #Set pin as GPIO out
GPIO.setup(ECHO3,GPIO.IN)                   #Set pin as GPIO in

def slot2():
    GPIO.setmode(GPIO.BCM)
    TRIG3 = 5                                 #Associate pin 23 to TRIG
    ECHO3 = 6
    
    GPIO.setup(TRIG3,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO3,GPIO.IN)                   #Set pin as GPIO in
#Associate pin 24 to ECHO
    
    status=0
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
    print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibrat                #display out of range

    if distance < 20:
        GPIO.cleanup()
        n={'slot2':'1'}
        r=requests.post('http://192.168.137.227:80/carparking/checking_slot.php',data=n)
        print(r)
        slot22()
        
    else:
        #return status
        slot2()
    
def slot22():
    GPIO.setmode(GPIO.BCM)
    TRIG3 = 5                                 #Associate pin 23 to TRIG
    ECHO3 = 6
    
    GPIO.setup(TRIG3,GPIO.OUT)                  #Set pin as GPIO out
    GPIO.setup(ECHO3,GPIO.IN)                   #Set pin as GPIO in
#Ass
    status=1
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

    if distance > 20:
        GPIO.cleanup()
        
        n={'empty2':'slot2'}
        r=requests.post('http://192.168.137.227:80/carparking/slot.php',data=n)
        n={'slot22':'0'}
        r=requests.post('http://192.168.137.227:80/carparking/checking_slot.php',data=n)
        
        slot2()
        
    else:

        slot22()
    
slot2()
GPIO.cleanup()



