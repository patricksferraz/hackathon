# -*- coding: utf8 -*-

"""
Leia 3 valores reais (A, B e C) e verifique se eles formam ou não um triângulo.
Em caso positivo, calcule o perímetro do triângulo e apresente a mensagem:

Perimetro = XX.X

Condições para ser triângulo
| b - c | < a < b + c
| a - c | < b < a + c
| a - b | < c < a + b

Em caso negativo, calcule a área do trapézio que tem A e B como base e C como
altura, mostrando a mensagem

Area = XX.X
"""


def area(a, b, c):
    return ((a + b) / 2) * c


def perimeter(a, b, c):
    return a + b + c


a, b, c = input().split()

a = float(a)
b = float(b)
c = float(c)

if abs(b - c) < a < b + c or abs(a - c) < b < a + c or abs(a - b) < c < a + b:
    print("Perimetro = {:.1f}".format(perimeter(a, b, c)))
else:
    print("Area = {:.1f}".format(area(a, b, c)))
