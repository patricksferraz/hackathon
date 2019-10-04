# -*- coding: utf8 -*-

"""
Solicitaram para que você construisse um programa simples de criptografia. Este
programa deve possibilitar enviar mensagens codificadas sem que alguém consiga
lê-las. O processo é muito simples. São feitas três passadas em todo o texto.

Na primeira passada, somente caracteres que sejam letras minúsculas e
maiúsculas devem ser deslocadas 3 posições para a direita, segundo a tabela
ASCII: letra 'a' deve virar letra 'd', letra 'y' deve virar caractere '|' e
assim sucessivamente. Na segunda passada, a linha deverá ser invertida. Na
terceira e última passada, todo e qualquer caractere a partir da metade em
diante (truncada) devem ser deslocados uma posição para a esquerda na tabela
ASCII. Neste caso, 'b' vira 'a' e 'a' vira '`'.

Por exemplo, se a entrada for “Texto #3”, o primeiro processamento sobre esta
entrada deverá produzir “Wh{wr #3”. O resultado do segundo processamento
inverte os caracteres e produz “3# rw{hW”. Por último, com o deslocamento dos
caracteres da metade em diante, o resultado final deve ser “3# rvzgV”.
"""

n = int(input())

for i in range(n):
    stringIn = list(input())
    half = int(len(stringIn) / 2)

    for i in range(len(stringIn)):
        if stringIn[i].isalpha():
            stringIn[i] = chr(ord(stringIn[i]) + 3)

    stringIn = list(reversed(stringIn))

    for i in range(half, len(stringIn)):
        stringIn[i] = chr(ord(stringIn[i]) - 1)

    print("".join(stringIn))
