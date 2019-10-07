# -*- coding: utf8 -*-

"""
Leia um valor inteiro N. Apresente todos os números entre 1 e 10000 que
divididos por N dão resto igual a 2.
"""

n = int(input())

[print(i) for i in range(1, 10001) if i % n == 2]
