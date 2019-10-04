# -*- coding: utf8 -*-

"""
Leia 5 valores Inteiros. A seguir mostre quantos valores digitados foram pares,
quantos valores digitados foram ímpares, quantos valores digitados foram
positivos e quantos valores digitados foram negativos.
"""

AMOUNT = 5

value = []
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))
value.append(float(input()))

even = 0
odd = 0
positive = 0
negative = 0

for i in value:
    if i % 2 == 0:
        even += 1
    else:
        odd += 1

    if i > 0:
        positive += 1
    elif i < 0:
        negative += 1

print(
    "{} valor(es) par(es)\n"
    "{} valor(es) impar(es)\n"
    "{} valor(es) positivo(s)\n"
    "{} valor(es) negativo(s)".format(even, odd, positive, negative)
)
