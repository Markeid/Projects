cpf = input('Insira seu CPF')

#tirar espaços no inicio e no final
cpf = cpf.strip()
#tirar os . (pontos)
cpf = cpf.replace('.', '')
#tirar os traços (-)
cpf = cpf.replace('-', '')

if len(cpf) == 11 and cpf.isnumeric():
    print(cpf)
else:
    print('Digite seu CPF corretamente e digite apenas números')