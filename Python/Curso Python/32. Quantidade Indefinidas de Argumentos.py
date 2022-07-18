# Vesrão 1

def minha_soma(*numeros):
    print (numeros)
    soma = 0
    for numero in numeros:
        soma += numero
    return soma

print (minha_soma(10, 11, 34, 7, 89, 23))

# Versão 2

def preco_final(preco, **adicionais):
    print (adicionais)
    if 'desconto' in adicionais:
        preco *= (1 - adicionais['desconto'])
    if 'garantia_extra' in adicionais:
        preco += adicionais['garantia_extra']
    if 'imposto' in adicionais:
        preco *= (1 + adicionais['imposto'])
    return preco

print (preco_final(1500, desconto= 0.25, garantia_extra= 75, imposto= 0.3))
