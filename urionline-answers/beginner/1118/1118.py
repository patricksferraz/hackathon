# -*- coding: utf8 -*-

"""
Escreva um programa para ler as notas da primeira e a segunda avaliação de um
aluno. Calcule e imprima a média semestral. O programa só deverá aceitar notas
válidas (uma nota válida deve pertencer ao intervalo [0,10]). Cada nota deve
ser validada separadamente.

No final deve ser impressa a mensagem “novo calculo (1-sim 2-nao)”, solicitando
ao usuário que informe um código (1 ou 2) indicando se ele deseja ou não
executar o algoritmo novamente, (aceitar apenas os código 1 ou 2). Se for
informado o código 1 deve ser repetida a execução de todo o programa para
permitir um novo cálculo, caso contrário o programa deve ser encerrado.
"""

validNotes = []
i = 1
while i != 2:

    if i == 1:
        note = float(input())
        if 0 <= note <= 10:
            validNotes.append(note)
        else:
            print("nota invalida")

        if len(validNotes) == 2:
            print("media = {:.2f}".format((validNotes[0] + validNotes[1]) / 2))
            validNotes.clear()
            i = int(input("novo calculo (1-sim 2-nao)\n"))
    else:
        i = int(input("novo calculo (1-sim 2-nao)\n"))
