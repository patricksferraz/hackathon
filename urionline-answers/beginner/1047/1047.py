# -*- coding: utf8 -*-

"""
Leia a hora inicial, minuto inicial, hora final e minuto final de um jogo. A
seguir calcule a duração do jogo.

Obs: O jogo tem duração mínima de um (1) minuto e duração máxima de 24 horas.
"""

MINUTES_HOUR = 60
MINUTES_DAY = 1440

iHour, iMinute, fHour, fMinute = input().split()

iHour = int(iHour) * MINUTES_HOUR + int(iMinute)
fHour = int(fHour) * MINUTES_HOUR + int(fMinute)

if fHour > iHour:
    time = fHour - iHour
else:
    time = MINUTES_DAY - iHour + fHour

print(
    "O JOGO DUROU {} HORA(S) E {} MINUTO(S)".format(
        time // MINUTES_HOUR, time % MINUTES_HOUR
    )
)
