# -*- coding: utf-8 -*-

"""
Faça um programa que leia três valores e apresente o maior dos três valores
lidos seguido da mensagem “eh o maior”. Utilize a fórmula:
(a+b + abs(a-b))/2

Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b).
Um segundo passo, portanto é necessário para chegar no resultado esperado.
"""


def max(a, b):
    return (a + b + abs(a - b)) / 2


a, b, c = input().split()

a = int(a)
b = int(b)
c = int(c)

print("%d eh o maior" % max(max(a, b), c))
