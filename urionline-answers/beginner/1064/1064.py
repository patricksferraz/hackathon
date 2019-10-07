# -*- coding: utf8 -*-

"""
Leia 6 valores. Em seguida, mostre quantos destes valores digitados foram
positivos. Na próxima linha, deve-se mostrar a média de todos os valores
positivos digitados, com um dígito após o ponto decimal.
"""

value = []
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))

positive = [i for i in value if i > 0]
amount = len(positive)

print("{} valores positivos\n{:.1f}".format(amount, sum(positive) / amount))
