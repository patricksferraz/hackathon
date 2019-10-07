# -*- coding: utf-8 -*-

"""
Faça um programa que calcule e mostre o volume de uma esfera sendo fornecido o
valor de seu raio (R). A fórmula para calcular o volume é: (4/3) * pi * R3.
Considere (atribua) para pi o valor 3.14159.

Dica: Ao utilizar a fórmula, procure usar (4/3.0) ou (4.0/3), pois algumas
linguagens (dentre elas o C++), assumem que o resultado da divisão entre dois
inteiros é outro inteiro.
"""

PI = 3.14159


def volume(r):
    return (4 / 3) * PI * (r ** 3)


radius = int(input())
vol = round(volume(radius), 3)

print("VOLUME = {}".format(vol))
