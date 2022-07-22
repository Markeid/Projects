# Lista 

produtos = ['coca', 'pepsi', 'guarana', 'skol', 'brahma', 'agua', 'del valle', 'dolly', 'red bull', 'cachaça', 'vinho tinto', 'vodka', 'vinho branco', 'tequila', 'champagne', 'gin', 'guaracamp', 'matte', 'leite de castanha', 'leite', 'jurupinga', 'sprite', 'fanta']
vendas = [1200, 300, 800, 1500, 1900, 2750, 400, 20, 23, 70, 90, 80, 1100, 999, 900, 880, 870, 50, 1111, 120, 300, 450, 800]
top5 = ['agua', 'brahma', 'skol', 'coca', 'leite de castanha']


# Utilizando For

total_top5 = 0

for x, produto in enumerate(produtos):
    if produto in top5:
        total_top5 += vendas[x]
        
print (total_top5)
print (f'Top % represntou {total_top5/sum(vendas):0.1%} das vendas.')


# Utilizando List Comprehension

total_top5 = sum(vendas [x] for x, produto in enumerate (produtos) if produto in top5)
print (total_top5)
print (f'Top % represntou {total_top5/sum(vendas):0.1%} das vendas.')