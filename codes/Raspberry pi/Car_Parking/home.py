from tkinter import *
import sys
from tkinter import Tk, Label
import requests
import json
from PIL import ImageTk,Image

class Home(Frame):
    def __init__(self, root):
        Frame.__init__(self, root)
        self.f = Frame(root, height=1000, width=1400,bg='black')
        self.f.propagate(0)
        self.f.pack()
        self.master = root
        #carparking.distance1()
        l1 = Label(self.f, text="Welcome To Smart Parking", fg='red', height=10, width=66, font=('bold', 18),bg='black')
        l1.place(x=720, y=175)
        b1 = Button(self.f, text='Next', command=self.login,height=1, width=10,activebackground='blue',activeforeground='white',bg='red',fg='white',font=('bold',18))
        b1.place(x=1115, y=375)

        img=ImageTk.PhotoImage(Image.open("car.jpg"))
        my_image = Label(root, image=img, height=805, width=1000)
        my_image.image=img
        my_image.place(x=0,y=-10)
        
        

    #def checknumberplate(self):
            #from carparking import numberplate
            #number=numberplate()
            #n={"number":number}
           # r=requests.post('http://192.168.43.103:80/car/index1.php',data=n)
            #self.login()
            #print(number)
            #print(r.text)
            
            #try:
                #=requests.get('http://192.168.43.103:80/car/index1.php')
                #request=urllib.request.url("http://192.168.43.103:80/car/index1.php")
            #except Exception as e:
               # print("Excepion Occured",e)
                
            #print(type(g))
            #print(g.content)
            #print(json.load(g.text))
            #print(g.text)
            
            
            #with open("data.json","w") as write:
                #json.dump(g,write)
            
            #loaded_jsojson.loads(g.text)
            #for x in loaded_json:
                  #print("%s: %d" % (x, loaded_json[x]))
            #print(json.loads(g))
           

            
    def login(self):
            import login
            self.f.destroy()
            login.Login1(self.master)


