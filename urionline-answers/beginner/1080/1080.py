# -*- coding: utf8 -*-

"""
Leia 100 valores inteiros. Apresente então o maior valor lido e a posição
dentre os 100 valores lidos.
"""

index = 1
bigger = int(input())

for i in range(2, 101):
    value = int(input())
    if value > bigger:
        bigger = value
        index = i

print("{}\n{}".format(bigger, index))
