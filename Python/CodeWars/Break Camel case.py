# Função para colocar espaços entre palavras #

def solution(s):
    return ''.join([' ' + x if x.isupper() else x for x in s])