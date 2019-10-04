# -*- coding: utf8 -*-

"""
Leia 2 valores inteiros X e Y. A seguir, calcule e mostre a soma dos números
impares entre eles.
"""

x = int(input())
y = int(input())
amount = 0

initial, final = (x, y) if x < y else (y, x)

for i in range(initial + 1, final):
    if i % 2 != 0:
        amount += i

print(amount)
