# -*- coding: utf-8 -*-

"""
Escreva um programa que leia três valores com ponto flutuante de dupla
precisão:
A, B e C. Em seguida, calcule e mostre:
a) a área do triângulo retângulo que tem A por base e C por altura.
b) a área do círculo de raio C. (pi = 3.14159)
c) a área do trapézio que tem A e B por bases e C por altura.
d) a área do quadrado que tem lado B.
e) a área do retângulo que tem lados A e B.
"""

PI = 3.14159


def triangleArea(a, c):
    return (a * c) / 2


def circleArea(c):
    return PI * (c ** 2)


def trapezeArea(a, b, c):
    return ((a + b) * c) / 2


def squareArea(b):
    return b * b


def rectangleArea(a, b):
    return a * b


a, b, c = input().split()

a = float(a)
b = float(b)
c = float(c)

print(
    "TRIANGULO: {:.3f}\n"
    "CIRCULO: {:.3f}\n"
    "TRAPEZIO: {:.3f}\n"
    "QUADRADO: {:.3f}\n"
    "RETANGULO: {:.3f}".format(
        triangleArea(a, c),
        circleArea(c),
        trapezeArea(a, b, c),
        squareArea(b),
        rectangleArea(a, b),
    )
)
