from turtle import *

bgcolor('black')
speed(1000)
fillcolor('#1da1f2')
pencolor('white')
width(10)
begin_fill()
penup()
goto(50, 80)
left(100)
pendown()

# Head Start #
for x in range(150):
    forward(0.8)
    right(1)
left(70)

# Head End #
# Leaps Start #
for x in range(55):
    forward(0.5)
    left(0.5)
right(135)
for x in range(55):
    forward(0.5)
    right(1)
left(160)
forward(20)
right(135)