# -*- coding: utf8 -*-

"""
A empresa ABC resolveu conceder um aumento de salários a seus funcionários de
acordo com a tabela abaixo:

      SALÁRIO       | PERCENTUAL DE REAJUSTE
      0 - 400.00    |          15%
 400.01 - 800.00    |          12%
 800.01 - 1200.00   |          10%
1200.01 - 2000.00   |           7%
  ACIMA DE 2000.00  |           4%

Leia o salário do funcionário e calcule e mostre o novo salário, bem como o
valor de reajuste ganho e o índice reajustado, em percentual.
"""


def adjust(salary, percent):
    adjust = salary * percent
    return (
        "Novo salario: {:.2f}\n"
        "Reajuste ganho: {:.2f}\n"
        "Em percentual: {:.0f} %"
    ).format(salary + adjust, adjust, percent * 100)


salary = float(input())

if 0 <= salary <= 400.00:
    percent = 0.15
elif 400.01 <= salary <= 800.00:
    percent = 0.12
elif 800.01 <= salary <= 1200.00:
    percent = 0.10
elif 1200.01 <= salary <= 2000.00:
    percent = 0.07
elif 2000.00 < salary:
    percent = 0.04

print(adjust(salary, percent))
