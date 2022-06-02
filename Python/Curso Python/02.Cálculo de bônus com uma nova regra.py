vendas_funcionario1 = 1000
vendas_funcionario2 = 770
vendas_funcionario3 = 2700

if vendas_funcionario1 >= 1000:
    if vendas_funcionario1 >= 2000:
        bonus = 0.15 * vendas_funcionario1
    else:
        bonus = 0.1 * vendas_funcionario1
else:
    bonus = 0
print(f'O funcionário 1 ganhou {bonus} de bônus')

if vendas_funcionario2 >= 2000:
    bonus = 0.15 * vendas_funcionario2
elif vendas_funcionario2 >= 1000:
    bonus = 0.1 * vendas_funcionario2
else:
    bonus = 0
print(f'O funcionário 2 ganhou {bonus} de bônus')

if vendas_funcionario3 >= 1000:
    if vendas_funcionario3 >= 2000:
        bonus = 0.15 * vendas_funcionario3
    else:
        bonus = 0.1 * vendas_funcionario3
else:
    bonus = 0
print(f'O funcionário 3 ganhou {bonus} de bônus')