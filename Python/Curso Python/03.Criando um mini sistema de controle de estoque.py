# - alimentos -> Estoque mínimo: 50
# - bebidas -> Estoque mínimo: 75
# - limpeza -> Estoque mínimo: 30

produto = input('Qual o produto?')
categoria = input('Qual a categoria do produto?')
qtde = input('Qual a quantidade atual do produto?')

if produto and categoria and qtde:
    qtde = int(qtde)
    if categoria == 'bebidas':
        if qtde < 75:
            print(f'Solicitar {produto} à equipe de compras, temos apenas {qtde} unidades em estoque')
    elif categoria == 'limpeza':
        if qtde < 30:
            print(f'Solicitar {produto} à equipe de compras, temos apenas {qtde} unidades em estoque')
    else:
        if qtde < 50:
            print(f'Solicitar {produto} à equipe de compras, temos apenas {qtde} unidades em estoque')
else:
    print('Preencha todas as informações')
