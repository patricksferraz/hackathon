# -*- coding: utf8 -*-

"""
Leia um número inteiro que representa um código de DDD para discagem
interurbana. Em seguida, informe à qual cidade o DDD pertence, considerando a
tabela abaixo:

DDD | DESTINATION
61  | Brasilia
71  | Salvador
11  | Sao Paulo
21  | Rio de Janeiro
32  | Juiz de Fora
19  | Campinas
27  | Vitoria
31  | Belo Horizonte

Se a entrada for qualquer outro DDD que não esteja presente na tabela acima, o
programa deverá informar:
DDD nao cadastrado
"""

ddds = {
    61: "Brasilia",
    71: "Salvador",
    11: "Sao Paulo",
    21: "Rio de Janeiro",
    32: "Juiz de Fora",
    19: "Campinas",
    27: "Vitoria",
    31: "Belo Horizonte",
}

ddd = int(input())

print(ddds.get(ddd, "DDD nao cadastrado"))
