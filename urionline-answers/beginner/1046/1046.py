# -*- coding: utf8 -*-

"""
Leia a hora inicial e a hora final de um jogo. A seguir calcule a duração do
jogo, sabendo que o mesmo pode começar em um dia e terminar em outro, tendo uma
duração mínima de 1 hora e máxima de 24 horas.
"""

HOUR_DAY = 24

hours = input().split()

hours[0] = int(hours[0])
hours[1] = int(hours[1])

if hours[1] > hours[0]:
    result = hours[1] - hours[0]
else:
    result = HOUR_DAY - hours[0] + hours[1]

print("O JOGO DUROU {} HORA(S)".format(result))
