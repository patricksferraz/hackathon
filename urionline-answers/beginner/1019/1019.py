# -*- coding: utf8 -*-

"""
Leia um valor inteiro, que é o tempo de duração em segundos de um determinado
evento em uma fábrica, e informe-o expresso no formato horas:minutos:segundos.
"""

seconds = int(input())

minutes = seconds // 60
seconds %= 60
hours = minutes // 60
minutes %= 60

print("%d:%d:%d" % (hours, minutes, seconds))
