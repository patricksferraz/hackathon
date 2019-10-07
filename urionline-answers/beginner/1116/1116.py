# -*- coding: utf8 -*-

"""
Escreva um algoritmo que leia 2 números e imprima o resultado da divisão do
primeiro pelo segundo. Caso não for possível mostre a mensagem “divisao
impossivel” para os valores em questão.
"""

n = int(input())

for i in range(n):
    x, y = input().split()
    x = int(x)
    y = int(y)

    if y == 0:
        print("divisao impossivel")
    else:
        print("{:.1f}".format(x / y))
