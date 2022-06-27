def order(sentence):
    palavras = []
    for x in range(1, 10):
        if palavras in sentence.split():
            if str(x) in palavra:
                palavras.append(palavra)
    return ' '.join(palavras)

# 2ª solução #

def order(sentence):
    return ' '.join(sorted(sentence.split(), key=lambda x: int(filter(str.isdigit, x))))