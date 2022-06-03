# 1. Faturamento do Melhor e do Pior Mês do Ano

meses = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez']
vendas_1sem = [25000, 29000, 22200, 17750, 15870, 19900]
vendas_2sem = [19850, 20120, 17540, 15555, 49051, 9650]

vendas_1sem.extend(vendas_2sem)
maior_valor = max(vendas_1sem)
menor_valor = min(vendas_1sem)
print(maior_valor)
print(menor_valor)
print(vendas_1sem)

# 2. Continuação

i_maior_valor = vendas_1sem.index(maior_valor)
i_menor_valor = vendas_1sem.index(menor_valor)

print(f'O melhor mês do ano foi {meses[i_maior_valor]} com {maior_valor} vendas')
print(f'O pior mês do ano foi {meses[i_menor_valor]} com {menor_valor} vendas')

fat_total = sum(vendas_1sem)
print(f'Faturamento Total: R${fat_total:,}')

percentual = maior_valor / fat_total
print(f'O melhor mês representou {percentual:.1%} das vendas do ano todo')

# 3. Criar uma lista com o top 3 valores de vendas do ano

top3 = []

print(vendas_1sem)
maior_valor = max(vendas_1sem)
top3.append(maior_valor)

vendas_1sem.remove(maior_valor)

maior_valor = max(vendas_1sem)
top3.append(maior_valor)
vendas_1sem.remove(maior_valor)
maior_valor = max(vendas_1sem)
top3.append(maior_valor)
print(top3)