meta = 10000
vendas = [
    ['João', 15000],
    ['Julia', 27000],
    ['Marcus', 9900],
    ['Maria', 3750],
    ['Ana', 10300],
    ['Alon', 7870],
]

for item in vendas:
    if item[1] >= meta:
        print(f'Vendedor {item[0]} bateu a meta. Fez {item[1]} vendas')
