# -*- coding: utf8 -*-

"""
Leia um valor inteiro X. Em seguida apresente os 6 valores ímpares consecutivos
a partir de X, um valor por linha, inclusive o X ser for o caso.
"""

amount = 6
value = int(input())

while amount:
    if value % 2 != 0:
        print(value)
        amount -= 1
    value += 1
