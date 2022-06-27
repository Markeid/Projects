def encontre_impar(seq):
    return min([x for x in seq if seq.count(x) % 2 != 0])

# 2ª solução #

def find_it(seq):
    return [x for x in seq if seq.count(x) % 2 != 0][0]