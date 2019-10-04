# -*- coding: utf8 -*-

"""
Você deve fazer um programa que apresente a sequencia conforme o exemplo
abaixo.
I=1 J=7
I=1 J=6
I=1 J=5
I=3 J=9
I=3 J=8
I=3 J=7
...
I=9 J=15
I=9 J=14
I=9 J=13
"""

initial = 7
final = 4
for i in range(1, 10, 2):
    for j in range(initial, final, -1):
        print("I={} J={}".format(i, j))
    initial += 2
    final += 2
