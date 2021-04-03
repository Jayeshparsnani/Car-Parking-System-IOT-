from tkinter import *
import tkinter.messagebox
import requests

import math as m
import random as r

class Login1(Frame):
    def __init__(self, root):
        Frame.__init__(self, root)
        self.f = Frame(root, height=1000, width=1400, bg="black")
        self.f.propagate(0)
        self.f.pack()

        self.l3 = Label(self.f, width=50, height=20,borderwidth=2)
        self.l0 = Label(self.f, text="Enter Details",font=("bold", 20))
        self.l1 = Label(self.f, text="Phone No:")
        self.l2 = Label(self.f, text="Email:")
        
        self.e1 = Entry(self.f,bg="white", fg="black",width=25, font=("Arial", 14))
        self.e2 = Entry(self.f, bg="white", fg="black",width=25, font=("Arial", 14))

        self.l0.place(x=600, y=250)
        self.l1.place(x=525, y=330)
        self.l2.place(x=525, y=390)
        self.l3.place(x=500, y=225)
        self.e1.place(x=600, y=330,height=25,width=200)
        self.e2.place(x=600, y=390,height=25,width=200)

        self.b = Button(self.f, text="Next",command=self.checklogin, width="10", height="1",activebackground='blue',activeforeground='white',bg='yellow',fg='black',font=('bold',18))

        self.b.place(x=605, y=450)
#b1 = Button(self.f, text='BACK', height=2, width=20, command=self.home, bg='red')
        #b1.place(x=670, y=380)
    def checklogin(self):
        Phone = self.e1.get()
        Email = self.e2.get()

        if Phone == "" or Email == "":
            tkinter.messagebox.showerror("Error", "PLEASE FILL ALL THE CREDENTIALS")

        else:
            otp=self.OTPgen()
            print(otp)
            from carparking import numberplate
            number=numberplate()
            import ultrasonicsensor
            slot1=ultrasonicsensor.slot1()
        #print(slot1)
        
            slot2=ultrasonicsensor.slot2()
        #print(slot2)
            slot3=ultrasonicsensor.slot3()
        #print(slot1)
            if slot1==0:
                ans="slot1"
                
                n={'number':number,'phone':Phone,'email':Email,'otp':otp,'slot':ans}
                r=requests.post('http://192.168.137.227:80/carparking/data.php',data=n)          
                self.slot()
            else:
                if slot2 == 0:
                    ans="slot2"
                    
                    n={'number':number,'phone':Phone,'email':Email,'otp':otp,'slot':ans}
                    r=requests.post('http://192.168.137.227:80/carparking/data.php',data=n)          
                    self.slot()
                else:
                    if slot3 ==0:
                        ans="slot3"
                        
                        n={'number':number,'phone':Phone,'email':Email,'otp':otp,'slot':ans}
                        r=requests.post('http://192.168.137.227:80/carparking/data.php',data=n)          
                        self.slot()
                    else:
                        self.slot()
                        
            
            #if int(Phone) != 10:
    def slot(self):
        import slot
        self.f.destroy()
        slot.Return(self.master)
    
    
    def OTPgen(self) : 
  
    # Declare a string variable   
    # which stores all alpha-numeric characters 
        string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
        OTP = "" 
        varlen= len(string) 
        for i in range(6) : 
            OTP += string[m.floor(r.random() * varlen)] 
  
        return (OTP) 
  

            #else:
            #    tkinter.messagebox.showerror("Wrong Credentials!", "INVALID EMAIL OR PASSWORD")

