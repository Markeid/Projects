import time

# Segundos
# Utilizando time

segundos = time.time()
print (segundos)


# Data atual
# Utilizando ctime que retorna texto em formato UTC

data_hoje = time.ctime()
print (data_hoje)


# Utilizando time para verificar o tempo que foi rodado o programa #

tempo_inicial = time.time()
for x in range(100000000):
    pass
tempo_final = time.time()
duracao = tempo_final - tempo_inicial
print (f'O programa levou {duracao} segundos para rodar')


# Encerrando o programa após um período

print ('Iniciando')
time.sleep(5)
print ('Rodou em 05 segundos')


# Pegando as informações detalhadamente de dias, hora, minutos, segundos com gmtime() e gmtime().parametro

data_atual = time.gmtime()
print (data_atual)


# Os objetos armazenados em parâmetros diferentes

ano = data_atual.tm_year
mes = data_atual.tm_mon
dia = data_atual.tm_mday
hora = data_atual.tm_hour
dia_da_semana = data_atual.tm_wday

print (f'Hoje é dia {dia}/{mes}/{ano}')