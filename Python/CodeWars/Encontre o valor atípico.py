def valor_atipico (integers):
    chances = [x for x in integers if x % 2 != 0]
    pares = [ x for x in integers if x %2 == 0]
    return chances[0] if len(chances) == 1 else pares[0]