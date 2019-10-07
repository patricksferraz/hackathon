# -*- coding: utf8 -*-

"""
Leia 1 valor inteiro N, que representa o número de casos de teste que vem a
seguir. Cada caso de teste consiste de 3 valores reais, cada um deles com uma
casa decimal. Apresente a média ponderada para cada um destes conjuntos de 3
valores, sendo que o primeiro valor tem peso 2, o segundo valor tem peso 3 e o
terceiro valor tem peso 5.
"""

n = int(input())

for i in range(n):
    values = input().split()
    values[0] = float(values[0])
    values[1] = float(values[1])
    values[2] = float(values[2])

    print("{:.1f}".format((values[0] * 2 + values[1] * 3 + values[2] * 5) / 10))
