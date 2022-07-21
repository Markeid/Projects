meta = 1000
vendas_produtos = [1500, 150, 2100, 1950]
produtos = ['vinho', 'cafeiteira', 'microondas', 'iphone']

# Utilizando o For

acima_meta = []

for x, produto in enumerate(produtos):
    if vendas_produtos[x] > meta:
        acima_meta.append(produto)
        
print (acima_meta)


# List Comprehension

acima_meta = [produto for x, produto in enumerate(produtos) if vendas_produtos [x] > meta]
print (acima_meta)