# -*- coding: utf8 -*-

"""
João quer montar um painel de leds contendo diversos números. Ele não possui
muitos leds, e não tem certeza se conseguirá montar o número desejado.
Considerando a configuração dos leds dos números abaixo, faça um algoritmo que
ajude João a descobrir a quantidade de leds necessário para montar o valor.
"""
# 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
leds_number = (6, 2, 5, 5, 4, 5, 6, 3, 7, 6)

n = int(input())

for i in range(n):
    number = str(input())

    leds = 0
    for j in range(len(number)):
        leds += leds_number[int(number[j])]

    print("{} leds".format(leds))
