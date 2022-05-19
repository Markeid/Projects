def Pitagoras(co, ca):
    hipotenusa = (co ** 2 + ca **2) ** (1/2)
    print(f'\nO valor da Hipotenusa é ->: {hipotenusa}')
    
if __name__ == '__main__':
    while True:
        print('Calculando a Hipotenusa\n')
        
        co = float(input('Digite o valor do Cateto Oposto ->: '))
        ca = float(input('Digite o valor do Cateto Ajacente ->: '))
        
        Pitagoras(co, ca)
        
        continua = input('\nDeseja sair? Digite x ou Enter para continuar: \n')
        if (continua == 'x'):
            break
        