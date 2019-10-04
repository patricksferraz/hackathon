# -*- coding: utf8 -*-

"""
Você deve fazer um programa que apresente a sequencia conforme o exemplo
abaixo.
I=0 J=1
I=0 J=2
I=0 J=3
I=0.2 J=1.2
I=0.2 J=2.2
I=0.2 J=3.2
.....
I=2 J=?
I=2 J=?
I=2 J=?
"""
i = 0
n = [1, 2, 3]

while i <= 2:
    aux = round(i, 1)
    prec = 0 if aux == int(aux) else 1

    for j in n:
        print("I={:.{prec}f} J={:.{prec}f}".format(i, j, prec=prec))
    n = list(map(lambda x: x + 0.20, n))
    i += 0.20
