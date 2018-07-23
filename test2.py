# coding=utf-8
# 计算面积
from math import pi 
class Calculate:
  
  def __init__(self,a,b,c=0):
          self.a=a
          self.b=b
          self.c=c
          self.p=3.14

  def calculatesjx(self,c):
          l=(self.a+self.b+c)/2
          area = l*(l-self.a)*(l-self.b)*(l-self.c)
          return area;

  def calculatecfx(self):
          area = self.a * self.b
          return area;

  def calculatecyx(self):
          area = self.p * self.a * self.a
          return area;


x=Calculate(3,2)
print(x.calculatecyx())
print(x.calculatesjx(5))
