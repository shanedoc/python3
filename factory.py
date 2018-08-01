#code=utf-8
#简单工厂模式
class MathBase(object):
    def Calc(self,x,y):
        return 0

class MathAdd(MathBase):
    def Calc(self,x,y):
        return x+y

class MathSub(MathBase):
    def Calc(self,x,y):
        return x-y

class MathMult(MathBase):
    def Calc(self,x,y):
        return x*y

class MathDiv(MathBase):
    def Calc(self,x,y):
        try:
            return x/y
        except:
            print('error:divided by zero')
            return 0

class MathFactory():
    @staticmethod
    def createMath(operate):
        math_dict = {r'+':MathAdd,
        r'-':MathSub,
        r'*':MathMult,
        r'/':MathDiv,}
        math_object = MathBase()
        if operate in math_dict:
            math_object = math_dict[operate]()
        return math_object

def Calc(operate,x,y):
    calc_object = MathFactory.createMath(operate)
    return calc_object.Calc(x,y)

if __name__ == "__main__":
    while True:
        operate = input("请输入操作方法+-*/中的一个")
        number1 = input("请输入参数1")
        number2 = input("请输入参数2")
        print(Calc(operate,int(number1),int(number2)))
