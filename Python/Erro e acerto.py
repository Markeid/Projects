# Joguinho de erros e acertos #

palavra_secreta = 'Shiranui'
palpite = ''
contador = 0
limite = 3
sair = False

while palpite != palavra_secreta and not (sair):
    if contador < limite:
        palpite = input('Digite seu palpite ->: ')
        contador += 1
    else:
        sair = True
        
if sair == True:
    print('Você perdeu!!!')
else:
    print('Você venceu')