preco_produtos = [100, 150, 300, 5500]
produtos = ['vinho', 'cafeiteira', 'microondas', 'iphone']

# Utilizando For

impostos = []
for item in preco_produtos:
    impostos.append(item * 0.3)
print (impostos)


# Utilizando list comprehension

impostos = [preco * 0.3 for preco in preco_produtos]
print (impostos)


# Utilizando list comprehension com uma function

def calcular_imposto(preco, imposto):
    return preco * imposto

impostos = [calcular_imposto(preco, 0.3) for preco in preco_produtos]
print (impostos)