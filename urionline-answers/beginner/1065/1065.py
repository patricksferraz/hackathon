# -*- coding: utf8 -*-

"""
Faça um programa que leia 5 valores inteiros. Conte quantos destes valores
digitados são pares e mostre esta informação.
"""

value = []
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))

pairs = [i for i in value if i % 2 == 0]
print("{} valores pares".format(len(pairs)))
