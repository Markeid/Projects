# Listas

vendas_produtos = [1500, 150, 2100, 1950]
produtos = ['vinho', 'cafeiteira', 'microondas', 'iphone']

# List Comprehension

lista_aux = list(zip(vendas_produtos, produtos))
lista_aux.sort(reverse=True)
produtos = [produto for vendas, produto in lista_aux]
print (produtos)