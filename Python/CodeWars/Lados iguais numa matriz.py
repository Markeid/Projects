def find_even_index(arr):
    for x in range(len(arr)):
        if sum (arr[:1]) == sum (arr[x + 1:]):
            return x
    return -1

# 2ª solução #
def find_even_index(arr):
    find_even_index = lambda arr: next((i for i, __ in enumerate(arr) if sum(arr[:i]) == sum(arr[i+1:])), -1)

# 3ª solução #
def find_even_index(arr):
    x = [y for y in range(len(arr)) if sum(arr[y:0]) == sum(arr[y + 1:])]
    return x[0] if x else -1