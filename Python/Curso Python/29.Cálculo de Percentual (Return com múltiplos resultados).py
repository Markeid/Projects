# Início do código

meta = 10000
vendas = {
    'João': 15000,
    'Julia': 27000,
    'Marcus': 9900,
    'Maria': 3750,
    'Ana': 10300,
    'Alon': 7870,
}

# Function
def calculo_meta(meta, vendas):
    meta_batida = []
    for vendedor in vendas:
        if vendas[vendedor] >= meta:
            meta_batida.append(vendedor)
    meta_batida_perc = len(meta_batida) / len(vendas)
    return meta_batida, meta_batida_perc

# Resultado da function
print(calculo_meta(meta, vendas))

# Resultado da function versão 2

perc_meta, vendedores = calculo_meta(meta, vendas)
print(perc_meta)
print(vendedores)