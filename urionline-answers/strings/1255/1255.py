# -*- coding: utf8 -*-

"""
Neste problema estamos interessados na frequência das letras em uma dada linha
de texto.

Especificamente, deseja-se saber qual(is) a(s) letra(s) de maior frequência do
texto, ignorando o “case sensitive”, ou seja maiúsculas ou minúsculas (sendo
mais claro, “letras” referem-se precisamente às 26 letras do alfabeto).
"""

n = int(input())
letter = {}
more = {"value": None, "count": 0}

for _ in range(n):
    word = input()

    for i in word:
        i = i.lower()
        if i.isalpha():
            letter[i] = letter.get(i, 0) + 1
            if letter[i] > more.get("count"):
                more["value"] = i
                more["count"] = letter[i]

    # letter = sorted(letter)
    letter = sorted(letter.items(), key=lambda kv: (kv[1], kv[0]))

    print("".join([x[0] for x in letter if x[1] >= more["count"]]))
    letter = {}
    more = {"value": None, "count": 0}
