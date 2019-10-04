# -*- coding: utf8 -*-

"""
Textos podem conter mensagens ocultas. Neste problema a mensagem oculta em um
texto é composto pelas primeiras letras de cada palavra do texto, na ordem em
que aparecem.

É dado um texto composto apenas por letras minúsculas ou espaços. Pode haver
mais de um espaço entre as palavras. O texto pode iniciar ou terminar em
espaços, ou mesmo conter somente espaços.
"""

n = int(input())

for _ in range(n):
    line = input().split()

    result = list(map(lambda x: x[0], line))

    print("".join(result))
