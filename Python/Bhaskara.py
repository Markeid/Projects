def Bhaskara (a, b, c):
    delta = (b ** 2) - (4 * a * c)
    print(delta)
    
    x1 = (- b + delta ** (1/2)) / (2 * a)
    x2 = (- b - delta ** (1/2)) / (2 * a)
    
    print(f'O valor de x1 é -> {x1}')
    print(f'O valor de x2 é -> {x2}')
    
if __name__ == '__main__':
    while True:
        print('Calculando as raízes da equação\n')
        
        a = float(input('Digite o valor de a ->: '))
        b = float(input('Digite o valor de b ->: '))
        c = float(input('Digite o valor de c ->: '))
        
        Bhaskara(a, b, c)
        
        continua = input('\n Se deseja sair digite x ou Enter para fazer um novo cálculo: \n')
        if (continua == x):
            break