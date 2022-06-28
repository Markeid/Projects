def digital_root(n):
    return n if n < 10 else digital_root(sum([int(sum) for num in str(n)]))

# 2ª solução #
def digital_root(n):
    somas = soma([int(num) for num in str(n)])
    if len(str(somas)) >= 2:
        somas = digital_root(somas)
    return somas

# 3ª solução #
def digital_root(n):
    return n % 9 or n and 9

# digital_root(16)
# => 1 + 6
# => 7

# digital_root(942)
# => 9 + 4 + 2
# => 15 ...
# => 1 + 5
# => 6

# digital_root(132189)
# => 1 + 3 + 2 + 1 + 8 + 9
# => 24 ...
# => 2 + 4
# => 6

# digital_root(493193)
# => 4 + 9 + 3 + 1 + 9 + 3
# => 29 ...
# => 2 + 9
# => 11 ...
# => 1 + 1
# => 2