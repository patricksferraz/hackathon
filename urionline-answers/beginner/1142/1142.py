# -*- coding: utf8 -*-

"""
Escreva um programa que leia um valor inteiro N. Este N é a quantidade de
linhas de saída que serão apresentadas na execução do programa.
"""

n = int(input())

value = 1
for i in range(n):
    for j in range(4):
        if value % 4 == 0:
            print("PUM")
        else:
            print(value, end=" ")
        value += 1
