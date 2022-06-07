vendas = [
    ['maçã', 5],
    ['banana', 15],
    ['azeite', 1],
    ['vinho', 3],
]

vendas = []

while True:
    produto = input('Qual é o produto? ')
    if not produto:
        break
    qtde = input('Qual a quantidade? ')
    vendas.append([produto, qtde])
    
print(vendas)