# -*- coding: utf8 -*-

"""
Leia um valor inteiro N que é a quantidade de casos de teste que vem a seguir.
Cada caso de teste consiste de dois inteiros X e Y. Você deve apresentar a soma
de todos os ímpares existentes entre X e Y.
"""

n = int(input())

for i in range(n):
    x, y = input().split()
    x = int(x)
    y = int(y)
    x, y = (x + 1, y) if x <= y else (y + 1, x)

    amount = 0
    for i in range(x, y):
        if i % 2 != 0:
            amount += i

    print(amount)
