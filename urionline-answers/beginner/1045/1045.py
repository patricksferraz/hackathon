# -*- coding: utf8 -*-

"""
Leia 3 valores de ponto flutuante A, B e C e ordene-os em ordem decrescente,
de modo que o lado A representa o maior dos 3 lados. A seguir, determine o tipo
de triângulo que estes três lados formam, com base nos seguintes casos, sempre
escrevendo uma mensagem adequada:

se A ≥ B+C, apresente a mensagem: NAO FORMA TRIANGULO
se A^2 = B^2 + C^2, apresente a mensagem: TRIANGULO RETANGULO
se A^2 > B^2 + C^2, apresente a mensagem: TRIANGULO OBTUSANGULO
se A^2 < B^2 + C^2, apresente a mensagem: TRIANGULO ACUTANGULO
se os três lados forem iguais, apresente a mensagem: TRIANGULO EQUILATERO
se apenas dois dos lados forem iguais, apresente a mensagem:
TRIANGULO ISOSCELES
"""

values = input().split()

values[0] = float(values[0])
values[1] = float(values[1])
values[2] = float(values[2])

values.sort(reverse=True)

a, b, c = values

if a >= b + c:
    print("NAO FORMA TRIANGULO")
else:
    if a ** 2 == b ** 2 + c ** 2:
        print("TRIANGULO RETANGULO")
    if a ** 2 > b ** 2 + c ** 2:
        print("TRIANGULO OBTUSANGULO")
    if a ** 2 < b ** 2 + c ** 2:
        print("TRIANGULO ACUTANGULO")
    if a == b == c:
        print("TRIANGULO EQUILATERO")
    if a == b != c or b == c != a or a == c != b:
        print("TRIANGULO ISOSCELES")
