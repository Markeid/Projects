# Importando as Libs
from ast import For, In
import numpy as np
import colorama
from colorama import Fore, Back

colorama.init(autoreset=True)

# Criando a Matriz
matriz = np.arange(40).reshape(8, 5)
matriz[0:8, 2] = 0
matriz[0, 0:5] = 0
matriz[0, 0] = 99

# Controle dos assentos
assentos_vendidos = []

#Lista de assentos vazios
assentos_vazios = np.empty_like(matriz)
assentos_vazios[:] = matriz
assentos_vazios = assentos_vazios.reshape(1, 40)
assentos_vazios = np.setdiff1d(assentos_vazios, 0, ) # Remove os 0 do corredor
assentos_vazios = np.setdiff1d(assentos_vazios, 99) # Cadeira do motorista

# Criando a lista de assentos
def exibicao():
    for x in range(0, 8):
        for y in range(0, 5):
            if matriz [x][y] == 99:
                print(f'\033[33;43m {matriz[x][y]:^4}\033[m', end='')
            if matriz [x][y] == 0:
                print(f'\033[37;47m {matriz[x][y]:^4}\033[m', end='')
            if matriz [x][y] in assentos_vazios and matriz[x][y] <= 39:
                print(f'\033[0;42m {matriz[x][y]:^4}\033[m', end='')
            if matriz [x][y] in assentos_vendidos:
                print(f'\033[0;41m {matriz[x][y]:^4}\033[m', end='')
    print()
    
# Correndo pela matriz e exibindo os assentos e suas cores
##############################################################

#Criação dos menus
def menu():
    
    print ('\n********** SISTEMA POCCOBUS **********')
    op = int(input(Fore.BLUE + '[1] Comprar Assento \n[2] Visualizar Assentos Disponíveis \n[3] Sair \n[#] Escolha uma opção'))
    
    if op > 3 or op < 1:
        print(Fore.RED + '\nOpção Inválida!')
        menu()
        
    if op == 1:
        print('\n' * 5)
        comprar_cadeira()
    if op == 2:
        print('\n\n')
        print(Fore.GREEN + 'Assentos Disponíveis')
        exibicao()
        op = int(input(Fore.GREEN + '\n[1] Comprar o assento \n[2] Voltar ao menu \n Escolha uma das opções: '))
        if op< 1 or op > 3:
            print(Fore.RED + 'Opção Inválida...')
            menu()
        if op == 1:
            comprar_cadeira()
        if op == 2:
            print('\n\n\n\n\n')
            menu()
    if op == 3:
        print(Fore.YELLOW + 'Saindo...')
        arquivo()
        
        
def arquivo():
    lista_vazios = str(assentos_vazios)
    lista_vendas = str(assentos_vazios)
    parquivo = open('Poccobus.txt', 'w')
    parquivo.write(f'Assentos Disponíveis: {lista_vazios}\n')
    parquivo.write(f'Assentos Vendidos {lista_vendas}')
    
    parquivo.close()
    
    print(Fore.GREEN + ' Relatório de Vendas')
    exit()
    
    
# Função de compra das cadeiras
def comprar_cadeira():
    global assentos_vazios
    global assentos_vendidos
    
    if len(assentos_vendidos) >= 28:
        print(Fore.RED + 'Assentos Esgotados...')
        menu()
    print('-----')
    exibicao()
    assento = int(input(Fore.YELLOW + '\nEscolha o seu assento.'))
    
    
    if assento not in assentos_vazios:
        print(Fore.RED + '\nAssento não está disponível, escolha outro...')
        comprar_cadeira()
        
        
    elif assento !=0 and 5 <= assento < 40:
        assentos_vendidos.append(assento)
        print(Fore.GREEN + '\nAssento foi reservado...')
        assentos_vazios = np.setdiff1d(assentos_vazios, assento)
        print('-----')
        exibicao()
        
        
    opcao = int(input(Fore.YELLOW + '[1] Comprar outra passagem \n[2] Retornar ao menu \n[3] Sair \n Opção:'))
    if opcao < 1 or opcao > 3:
        print(Fore.RED + 'Opção Inválida...')
        menu()
    if opcao == 1:
        comprar_cadeira()
    if opcao == 2:
        print('\n\n\n\n\n')
        menu()
    if opcao == 3:
        print('\nSaindo...')
        arquivo() 