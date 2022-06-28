def tower_builder(n_floors):
    x = []
    for y in range (1, n_floors + 1):
        x.append(' ' * (n_floors - y) + '*' * (2 * y - 1) + ' ' * (n_floors - y))
    return x

# 2ª solução #
def tower_builder(n_floors):
    return [('*' * (x * 2 - 1)). center(n_floors - x) for x in range(1, n_floors + 1)]