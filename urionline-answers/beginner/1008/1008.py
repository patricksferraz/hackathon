# -*- coding: utf-8 -*-

"""
Escreva um programa que leia o número de um funcionário, seu número de horas
trabalhadas, o valor que recebe por hora e calcula o salário desse funcionário.
A seguir, mostre o número e o salário do funcionário, com duas casas decimais.
"""

number = int(input())
hours = int(input())
value = float(input())

print("NUMBER = {:d}\nSALARY = U$ {:.2f}".format(number, hours * value))
