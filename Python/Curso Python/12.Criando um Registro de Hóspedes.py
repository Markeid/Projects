qtde_pessoas = int(input('Quantas pessoas terão no quarto?'))
quarto = []

for i in range(qtde_pessoas):
    nome = input('Nome: ')
    CPF = input('CPF: ')
    hospede = (nome, f'{CPF}')
    quarto.append(hospede)
    
print(quarto)