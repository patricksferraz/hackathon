# -*- coding: utf8 -*-

"""
Com base na tabela abaixo, escreva um programa que leia o código de um item e a
quantidade deste item. A seguir, calcule e mostre o valor da conta a pagar.
COD |  ESPECIFICAÇÃO  | PREÇO
1   | Cachorro quente | R$ 4.00
2   | X-Salada        | R$ 4.50
3   | X-Bacon         | R$ 5.00
4   | Torrada simples | R$ 2.00
5   | Refrigerante    | R$ 1.50
"""

products = {1: 4.0, 2: 4.5, 3: 5.0, 4: 2.0, 5: 1.5}

cod, count = input().split()

cod = int(cod)
count = int(count)

print("Total: R$ {:.2f}".format(products[cod] * count))
