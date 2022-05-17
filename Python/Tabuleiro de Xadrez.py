#Importando bibliotecas
import matplotlib.pyplot as plt
import numpy as np
from matplotlib.colors import ListedColormap

tabuleiro = np.tile([1, 0], [8, 4])

for x in range (tabuleiro.shape[0]):
    tabuleiro[x] = np.roll(tabuleiro[x], x % 2)

mapa_de_cores = ListedColormap(['#000000', '#ffffff'])
plt.matshow(tabuleiro, cmap=mapa_de_cores)
plt.xticks([])
plt.yticks([])
plt.show()