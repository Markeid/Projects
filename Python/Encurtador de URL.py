import pyshorteners

# URL original #
url = 'https://www.youtube.com/'

# Carregando a biblioteca #
x = pyshorteners.Shortener()

# Gerando URL encurtada #
shortURL = x.tinyurl.short(url)

# Imprime Resultado #
print(f'URL Encurtada: {shortURL}')