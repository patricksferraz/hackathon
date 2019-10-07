# -*- coding: utf-8 -*-

"""
Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o
valor unitário de cada peça 1, o código de uma peça 2, o número de peças 2 e o
valor unitário de cada peça 2. Após, calcule e mostre o valor a ser pago.
"""

parts_1 = input().split()
parts_2 = input().split()

print(
    "VALOR A PAGAR: R$ {:.2f}".format(
        int(parts_1[1]) * float(parts_1[2])
        + int(parts_2[1]) * float(parts_2[2])
    )
)
