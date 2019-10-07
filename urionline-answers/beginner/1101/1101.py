# -*- coding: utf8 -*-

"""
Leia um conjunto não determinado de pares de valores M e N (parar quando algum
dos valores for menor ou igual a zero). Para cada par lido, mostre a sequência
do menor até o maior e a soma dos inteiros consecutivos entre eles (incluindo
o N e M).
"""

while 1:
    x, y = input().split()
    x = int(x)
    y = int(y)

    if x <= 0 or y <= 0:
        exit()

    x, y = (x, y) if x <= y else (y, x)

    amount = 0
    for i in range(x, y + 1):
        print(i, end=" ")
        amount += i

    print("Sum={}".format(amount))
