# -*- coding: utf8 -*-

"""
Leia um valor inteiro N. Apresente o quadrado de cada um dos valores pares, de
1 até N, inclusive N, se for o caso.
"""

n = int(input())

for i in range(1, n + 1):
    if i % 2 == 0:
        print("{}^2 = {}".format(i, i ** 2))
