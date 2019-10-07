# -*- coding: utf8 -*-

"""
Maria acabou de iniciar seu curso de graduação na faculdade de medicina e
precisa de sua ajuda para organizar os experimentos de um laboratório o qual
ela é responsável. Ela quer saber no final do ano, quantas cobaias foram
utilizadas no laboratório e o percentual de cada tipo de cobaia utilizada.

Este laboratório em especial utiliza três tipos de cobaias: sapos, ratos e
coelhos. Para obter estas informações, ela sabe exatamente o número de
experimentos que foram realizados, o tipo de cobaia utilizada e a quantidade de
cobaias utilizadas em cada experimento.
"""

guineaPigs = {"R": 0, "S": 0, "C": 0}
amount = 0

n = int(input())

for i in range(n):
    values = input().split()
    count = int(values[0])
    guineaPig = values[1]

    amount += count
    guineaPigs[guineaPig] += count

base = 100 / amount

print(
    "Total: {} cobaias\n"
    "Total de coelhos: {}\n"
    "Total de ratos: {}\n"
    "Total de sapos: {}\n"
    "Percentual de coelhos: {:.2f} %\n"
    "Percentual de ratos: {:.2f} %\n"
    "Percentual de sapos: {:.2f} %".format(
        amount,
        guineaPigs["C"],
        guineaPigs["R"],
        guineaPigs["S"],
        guineaPigs["C"] * base,
        guineaPigs["R"] * base,
        guineaPigs["S"] * base,
    )
)
