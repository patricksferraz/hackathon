# -*- coding: utf8 -*-

"""
Júlio César usava um sistema de criptografia, agora conhecido como Cifra de
César, que trocava cada letra pelo equivalente em duas posições à Esquerda no
alfabeto (por exemplo, 'C' vira 'A', 'T' vira 'R', etc.). Ao começo do alfabeto
nós voltamos para o fim, isto é 'A' vira 'Y'. Nós podemos, é claro, tentar
trocar as letras com quaisquer número de posições.
"""

from itertools import repeat

_ALPHABET = (
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z",
)
_ALPHABET_SIZE = len(_ALPHABET)


def decrypt(l, key):
    aux = _ALPHABET.index(l) - key
    return _ALPHABET[aux] if aux >= 0 else _ALPHABET[aux + _ALPHABET_SIZE]


n = int(input())

for _ in range(n):
    word = input()
    key = int(input())

    word = list(map(decrypt, word, repeat(key)))

    print("".join(word))
