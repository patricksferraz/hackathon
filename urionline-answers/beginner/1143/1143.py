# -*- coding: utf8 -*-

"""
Escreva um programa que leia um valor inteiro N (1 < N < 1000). Este N é a
quantidade de linhas de saída que serão apresentadas na execução do programa.
"""

n = int(input())

value = 1
for i in range(n):
    print("{} {} {}".format(value, value ** 2, value ** 3))
    value += 1
