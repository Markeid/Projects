def disemvowel(string):
    vogais = ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U')
    lista = list(string)
    for x in lista:
        if x in vogais:
            lista.remove(x)
    string = ''.join(lista)
    return string