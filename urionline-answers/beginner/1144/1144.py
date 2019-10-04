# -*- coding: utf8 -*-

"""
Escreva um programa que leia um valor inteiro N. N * 2 linhas de saída serão
apresentadas na execução do programa, seguindo a lógica do exemplo abaixo. Para
valores com mais de 6 dígitos, todos os dígitos devem ser apresentados.
"""

n = int(input())

value = 1
for i in range(n):
    squared = value ** 2
    cubed = value ** 3

    print("{} {} {}".format(value, squared, cubed))
    print("{} {} {}".format(value, squared + 1, cubed + 1))
    value += 1
