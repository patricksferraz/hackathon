# -*- coding: utf-8 -*-

"""
Calcule o consumo médio de um automóvel sendo fornecidos a distância total
percorrida (em Km) e o total de combustível gasto (em litros).
"""

distance = int(input())
consumption = float(input())

print("{:.3f} km/l".format(distance / consumption))
