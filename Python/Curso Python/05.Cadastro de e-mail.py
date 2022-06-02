nome = input('Digite seu nome: ')
email = input('Digite seu e-mail: ')

print(email.find('@'))

if nome and email:
    pos_a = email.find('@')
    servidor = email[pos_a:]
    if pos_a != -1 and '.' in servidor:
        print('Cadastro concluído')
    else:
        print('E-mail inválido')
else:
        print('Digite seu nome e seu e-mail corretamente')