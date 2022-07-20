# Importando o matplotlib e o numpy
import matplotlib.pyplot as plt
import numpy as np


# Gráfico de linha

vendas = np.random.randint(1000, 3000, 50)
meses = np.arange(1, 51)
print (meses)

# Plotando o Gráfico de linhas

plt.plot(meses, vendas)
plt.axis([0, 50, 0, max(vendas) + 200])
plt.xlabel('Meses')
plt.ylabel('Vendas')
plt.show()

# Editando os gráfico de linhas

plt.plot(meses, vendas, color='red')
plt.axis([0, 50, 0, max(vendas) + 200])
plt.xlabel('Meses')
plt.ylabel('Vendas')
plt.show()


# Gráfico de Dispersão

plt.scatter(meses, vendas)
plt.show()


# Gráfico de Barras

plt.bar(meses, vendas)
plt.show()


# Printando os 3 gráficos juntos

plt.figure(1, figsize=(15, 3))
plt.subplot(1, 3, 1)
plt.plot(meses, vendas, color='red')
plt.subplot(1, 3, 2)
plt.scatter(meses, vendas)
plt.subplot(1, 3, 3)
plt.bar(meses, vendas)
plt.show()