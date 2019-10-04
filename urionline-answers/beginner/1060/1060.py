# -*- coding: utf8 -*-

"""
Faça um programa que leia 6 valores. Estes valores serão somente negativos ou
positivos (desconsidere os valores nulos). A seguir, mostre a quantidade de
valores positivos digitados.
"""

value = []
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))

positive = [i for i in value if i > 0]
print("{} valores positivos".format(len(positive)))
