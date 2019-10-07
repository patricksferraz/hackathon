# -*- coding: utf8 -*-

from math import sqrt

"""
Leia 3 valores de ponto flutuante e efetue o cálculo das raízes da equação de
Bhaskara. Se não for possível calcular as raízes, mostre a mensagem
correspondente “Impossivel calcular”, caso haja uma divisão por 0 ou raiz
de numero negativo.
"""


def delta(a, b, c):
    return b ** 2 - 4 * a * c


def bhaskara(delta, a, b, c):
    return (-b + sqrt(delta)) / (2 * a), (-b - sqrt(delta)) / (2 * a)


a, b, c = input().split()

a = float(a)
b = float(b)
c = float(c)
d = delta(a, b, c)

if a == 0 or d < 0:
    print("Impossivel calcular")
else:
    r1, r2 = bhaskara(d, a, b, c)
    print("R1 = {:.5f}\nR2 = {:.5f}".format(r1, r2))
