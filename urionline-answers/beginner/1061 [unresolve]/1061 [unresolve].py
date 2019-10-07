# -*- coding: utf8 -*-

"""
Pedrinho está organizando um evento em sua Universidade. O evento deverá ser no
mês de Abril, iniciando e terminando dentro do mês. O problema é que Pedrinho
quer calcular o tempo que o evento vai durar, uma vez que ele sabe quando
inicia e quando termina o evento.

Sabendo que o evento pode durar de poucos segundos a vários dias, você deverá
ajudar Pedrinho a calcular a duração deste evento.
Entrada

Como entrada, na primeira linha vai haver a descrição “Dia”, seguido de um
espaço e o dia do mês no qual o evento vai começar. Na linha seguinte, será
informado o momento no qual o evento vai iniciar, no formato hh : mm : ss. Na
terceira e quarta linha de entrada haverá outra informação no mesmo formato das
duas primeiras linhas, indicando o término do evento.
Saída

Na saída, deve ser apresentada a duração do evento, no seguinte formato:

W dia(s)
X hora(s)
Y minuto(s)
Z segundo(s)

Obs: Considere que o evento do caso de teste para o problema tem duração mínima
de 1 minuto.
"""

SECONDS_MINUTE = 60
SECONDS_HOUR = 3600
SECONDS_DAY = 86400

iDay = int(input()[-1:])
iTime = input().split(" : ")
fDay = int(input()[-1:])
fTime = input().split(" : ")

iHour = int(iTime[0])
iMinute = int(iTime[1])
iSecond = int(iTime[2])

fHour = int(fTime[0])
fMinute = int(fTime[1])
fSecond = int(fTime[2])

iTime = iHour * SECONDS_HOUR + iMinute * SECONDS_MINUTE + iSecond
fTime = fHour * SECONDS_HOUR + fMinute * SECONDS_MINUTE + fSecond

if iDay == fDay:
    time = fTime - iTime
else:
    days = fDay - iDay + 1
    time = days * SECONDS_DAY - (iTime + (SECONDS_DAY - fTime))

print("{:d} dia(s)".format(time // SECONDS_DAY))
time %= SECONDS_DAY
print("{:d} hora(s)".format(time // SECONDS_HOUR))
time %= SECONDS_HOUR
print("{:d} minuto(s)".format(time // SECONDS_MINUTE))
time %= SECONDS_MINUTE
print("{:d} segundo(s)".format(time))
