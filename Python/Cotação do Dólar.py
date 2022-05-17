from urllib import response
import requests

#Link público com o valor do dólar atualmente
url = 'http://economia.awesomeapi.com.br/all/USD-BRL'

#Buscando os dados
response = requests.get(url)

#Se deu certo, mostrará o valor
if response.status_code == 200:
    dv = response.json()['USD']['low']
    print(f'O valor do Dólar é R$ {dv}')
else:
    print('Erro na busca do valor do Dólar')