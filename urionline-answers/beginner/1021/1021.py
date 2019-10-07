# -*- coding: utf8 -*-

"""
Leia um valor de ponto flutuante com duas casas decimais. Este valor representa
um valor monetário. A seguir, calcule o menor número de notas e moedas
possíveis no qual o valor pode ser decomposto. As notas consideradas são de
100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e
0.01. A seguir mostre a relação de notas necessárias.
"""

value = float(input())

print("NOTAS:")
print("%d nota(s) de R$ 100.00" % (value / 100))
value %= 100
print("%d nota(s) de R$ 50.00" % (value / 50))
value %= 50
print("%d nota(s) de R$ 20.00" % (value / 20))
value %= 20
print("%d nota(s) de R$ 10.00" % (value / 10))
value %= 10
print("%d nota(s) de R$ 5.00" % (value / 5))
value %= 5
print("%d nota(s) de R$ 2.00" % (value / 2))
value %= 2

print("MOEDAS:")
print("%d moeda(s) de R$ 1.00" % value)
value %= 1
value *= 100
print("%d moeda(s) de R$ 0.50" % (value / 50))
value %= 50
print("%d moeda(s) de R$ 0.25" % (value / 25))
value %= 25
print("%d moeda(s) de R$ 0.10" % (value / 10))
value %= 10
print("%d moeda(s) de R$ 0.05" % (value / 5))
value %= 5
print("%d moeda(s) de R$ 0.01" % value)
