# first phyton code
one = "Welcome"
two = "George"
three = 3
four = {'aaa','bbb','ccc'}
five = {1:'aaa', 2:'bbb', 3:'ccc'}

# print(one, two, three)
# print(type(one))
# print(type(three))
# print(type(four))
# print(type(five))

def summ(x,y):
    return x+y

# print(summ(3, 23))
# print(summ(int("3"), 15))
# print(summ("3", "23"))

# 
a = "Hello, Home!"
# print(a.replace("H", "J"))
# print(a.split(","))


# 
def greet(name,msg):
    print("Hello", name+",", msg)
# greet("Yura","Good morning!")

# 
def ret_function(x):
  return 5 * x
# print(ret_function(3))
# print( ret_function(3) + 10 )


thistuple1 = ["apple", "banana", "cherry"]
thistuple2 = ("mango", "lime", "raisins")
thistuple3 = {"kiwi", "strawberry", "pineapple"}
# print(thistuple1.index("cherry"))
thistuple3.update(["orange","apple"])
# print(thistuple3)

x = {'a':1, 'b':2, 'c':3}
if (x['a'] < x['b'] and x['c'] > x['a']):
  print("Both conditions are True")