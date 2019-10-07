# -*- coding: utf8 -*-

"""
Leia um valor inteiro N. Este valor será a quantidade de valores inteiros X que
serão lidos em seguida.
Mostre quantos destes valores X estão dentro do intervalo [10,20] e quantos
estão fora do intervalo, mostrando essas informações.
"""

n = int(input())

values = []
amountIn = 0
amountOut = 0

for i in range(n):
    values.append(int(input()))

for i in values:
    if 10 <= i <= 20:
        amountIn += 1
    else:
        amountOut += 1

print("{} in\n{} out".format(amountIn, amountOut))
