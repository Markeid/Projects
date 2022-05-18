import pandas as pd

Gibis = {
    'Selo':['Marvel', 'DC', 'Nacional'],
    'Título': ['Imortal Hulk', 'Lanterna Verde', 'Quack'],
    'Ano': ['2018', '2019', '2015'],
}

dataframe = pd.DataFrame(Gibis)
dataframe.to_excel('./gibis.xlsx')
