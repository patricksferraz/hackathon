# -*- coding: utf8 -*-

"""
Faça um programa que mostre os números pares entre 1 e 100, inclusive.
"""

pairs = [i for i in range(1, 101) if i % 2 == 0]

for pair in pairs:
    print(pair)
