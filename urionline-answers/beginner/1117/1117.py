# -*- coding: utf8 -*-

"""
Faça um programa que leia as notas referentes às duas avaliações de um aluno.
Calcule e imprima a média semestral. Faça com que o algoritmo só aceite notas
válidas (uma nota válida deve pertencer ao intervalo [0,10]). Cada nota deve
ser validada separadamente.
"""

validNotes = []
i = 1
while i:
    note = float(input())

    if 0 <= note <= 10:
        validNotes.append(note)
    else:
        print("nota invalida")

    if len(validNotes) == 2:
        print("media = {:.2f}".format((validNotes[0] + validNotes[1]) / 2))
        i = 0
