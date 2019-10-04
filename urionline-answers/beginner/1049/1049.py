# -*- coding: utf8 -*-

"""
Neste problema, você deverá ler 3 palavras que definem o tipo de animal
possível segundo o esquema abaixo, da esquerda para a direita.  Em seguida
conclua qual dos animais seguintes foi escolhido, através das três palavras
fornecidas.

                    -- carnivoro -- aguia
            -- ave --
            -       -- onivoro -- pomba
vertebrado --
            -            -- onivoro -- homem
            -- mamifero --
                         -- herbivoro -- vaca

                         -- hematofago -- pulga
              -- inseto --
              -          -- herbivoro -- lagarta
invertebrado --
              -            -- hematofago -- sanguessuga
              -- anelideo --
                           -- onivoro -- minhoca
"""

animals = {
    "vertebrado": {
        "ave": {"carnivoro": "aguia", "onivoro": "pomba"},
        "mamifero": {"onivoro": "homem", "herbivoro": "vaca"},
    },
    "invertebrado": {
        "inseto": {"hematofago": "pulga", "herbivoro": "lagarta"},
        "anelideo": {"hematofago": "sanguessuga", "onivoro": "minhoca"},
    },
}

trait_1 = input()
trait_2 = input()
trait_3 = input()

print(animals[trait_1][trait_2][trait_3])
