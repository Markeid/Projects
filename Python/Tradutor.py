from translate import Translator

x = Translator(from_lang='english', to_lang='Spanish')

res = x.translate('This is where the fun begins')
print(res)