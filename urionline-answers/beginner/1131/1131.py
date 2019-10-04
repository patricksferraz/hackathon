# -*- coding: utf8 -*-

"""
A Federação Gaúcha de Futebol contratou você para escrever um programa para
fazer uma estatística do resultado de vários GRENAIS. Escreva um programa para
ler o número de gols marcados pelo Inter e pelo Grêmio em um GRENAL. Logo após
escrever a mensagem "Novo grenal (1-sim 2-nao)" e solicitar uma resposta. Se a
resposta for 1, o algoritmo deve ser executado novamente solicitando o número
de gols marcados pelos times em uma nova partida, caso contrário deve ser
encerrado imprimindo:

- Quantos GRENAIS fizeram parte da estatística.
- O número de vitórias do Inter.
- O número de vitórias do Grêmio.
- O número de Empates.
- Uma mensagem indicando qual o time que venceu o maior número de GRENAIS (ou
"Nao houve vencedor", caso termine empatado).
"""

results = {"Inter": 0, "Gremio": 0, "Empates": 0}
grenais = 0
i = 1

while i != 2:

    if i == 1:
        score = input().split()
        score[0] = int(score[0])
        score[1] = int(score[1])

        grenais += 1

        if score[0] == score[1]:
            results["Empates"] += 1
        elif score[0] > score[1]:
            results["Inter"] += 1
        else:
            results["Gremio"] += 1

    i = int(input("Novo grenal (1-sim 2-nao)\n"))

if results["Inter"] == results["Gremio"]:
    winner = "Nao houve vencedor"
elif results["Inter"] > results["Gremio"]:
    winner = "Inter venceu mais"
elif results["Gremio"] > results["Inter"]:
    winner = "Gremio venceu mais"

print(
    "{} grenais\n"
    "Inter:{}\n"
    "Gremio:{}\n"
    "Empates:{}\n"
    "{}".format(
        grenais, results["Inter"], results["Gremio"], results["Empates"], winner
    )
)
