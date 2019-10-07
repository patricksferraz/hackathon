# -*- coding: utf8 -*-

"""
Escreva um programa que leia dois valores X e Y. A seguir, mostre uma sequência
de 1 até Y, passando para a próxima linha a cada X números.
1 2 3
4 5 6
7 8 9
10 11 12
...
97 98 99
"""

x, y = input().split()
x = int(x)
y = int(y)

endLine = 1
for i in range(1, y + 1):
    if endLine < x:
        print(i, end=" ")
        endLine += 1
    else:
        endLine = 1
        print(i)
