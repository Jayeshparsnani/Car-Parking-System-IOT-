from tkinter import *
import time
class Return(Frame):
    def __init__(self,root):
        Frame.__init__(self,root)
        self.f = Frame(root, height=1000, width=1400, bd=8, relief="raise", bg="black")
        self.f.propagate(0)
        self.f.pack()
        
        import ultrasonicsensor
        slot1=ultrasonicsensor.slot1()
        #print(slot1)
        
        slot2=ultrasonicsensor.slot2()
        #print(slot2)
        slot3=ultrasonicsensor.slot3()
        #print(slot1)
        if slot1==0:
            ans="Park to slot1"
        else:
            if slot2 == 0:
                ans="park to slot2"
            else:
                if slot3 ==0:
                    ans="park to slot3"
                else:
                    ans="parking not empty"
                
        
        
        
        self.l3 = Label(self.f, width=50, height=20,borderwidth=2)
        self.choose=Label(self.f, text=ans, padx=20, font=('arial', 18, 'bold'),bg="white",fg="black")
        self.choose.place(x=575, y=350)
        self.f.after(10000,self.home)
        self.f.pack()
        
        
    def home(self):
        import home
        self.f.destroy()
        home.Home(self.master)
