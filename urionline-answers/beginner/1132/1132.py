# -*- coding: utf8 -*-

"""
Escreva um algoritmo que leia 2 valores inteiros X e Y calcule a soma dos
números que não são múltiplos de 13 entre X e Y, incluindo ambos.
"""

amount = 0

x = int(input())
y = int(input())

x, y = (x, y) if x <= y else (y, x)

for i in range(x, y + 1):
    if i % 13 != 0:
        amount += i

print(amount)
