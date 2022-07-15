# Sem try, execpt

def descobrir_servidor(email):
    posicao_a = email.index('@')
    servidor = email[posicao_a:]
    if 'gmail' in servidor:
        return 'gmail'
    elif 'hotmail' in servidor or 'outlook' in servidor or 'live' in servidor:
        return 'hotmail'
    elif 'yahoo' in servidor:
        return 'yahoo'
    elif 'uol' in servidor or 'bol' in servidor:
        return 'uol'
    else:
        return 'não determinado'
    
email = input('Qual o seu e-mail?')
print(descobrir_servidor(email))

# Com try, execpt
def descobrir_servidor(email):
    try:
        posicao_a = email.index('@')
    except:
        raise ValueError('Email digitado não tem @, digite novamente')
    else:
        servidor = email[posicao_a:]
        if 'gmail' in servidor:
            return 'gmail'
        elif 'hotmail' in servidor or 'outlook' in servidor or 'live' in servidor:
            return 'hotmail'
        elif 'yahoo' in servidor:
            return 'yahoo'
        elif 'uol' in servidor or 'bol' in servidor:
            return 'uol'
        else:
            return 'não determinado'
        
email = input('Qual o seu e-mail?')
print(descobrir_servidor(email))
