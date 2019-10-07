# -*- coding: utf8 -*-

"""
Leia 3 valores inteiros e ordene-os em ordem crescente. No final, mostre os
valores em ordem crescente, uma linha em branco e em seguida, os valores na
sequência como foram lidos.
"""

values = input().split()

values[0] = int(values[0])
values[1] = int(values[1])
values[2] = int(values[2])

result = values.copy()
values.sort()

print(
    "{}\n{}\n{}\n\n{}\n{}\n{}".format(
        values[0], values[1], values[2], result[0], result[1], result[2]
    )
)
