# -*- coding: utf8 -*-

"""
Escreva um programa que repita a leitura de uma senha até que ela seja válida.
Para cada leitura de senha incorreta informada, escrever a mensagem "Senha
Invalida". Quando a senha for informada corretamente deve ser impressa a
mensagem "Acesso Permitido" e o algoritmo encerrado. Considere que a senha
correta é o valor 2002.
"""

i = 1
while i:
    password = int(input())

    if password == 2002:
        print("Acesso Permitido")
        i = 0
    else:
        print("Senha Invalida")
