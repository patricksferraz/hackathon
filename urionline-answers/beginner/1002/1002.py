# -*- coding: utf-8 -*-

"""
A fórmula para calcular a área de uma circunferência é: area = π . raio2.
Considerando para este problema que π = 3.14159:
- Efetue o cálculo da área, elevando o valor de raio ao quadrado e
multiplicando por π.
"""

pi = 3.14159

raio = float(input())

print("A={:.4f}".format(pi * (raio ** 2)))
