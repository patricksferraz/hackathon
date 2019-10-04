# -*- coding: utf8 -*-

"""
Este programa deve ler uma variável inteira X inúmeras vezes (deve parar quando
o valor no arquivo de entrada for igual a zero). Para cada valor lido imprima a
sequência de 1 até X, com um espaço entre cada número e seu sucessor.

Obs: cuide para não deixar espaço em branco após o último valor apresentado na
linha ou você receberá Presentation Error.
"""

x = 1
while x:
    x = int(input())

    for i in range(1, x + 1):
        print(i) if i == x else print(i, end=" ")
