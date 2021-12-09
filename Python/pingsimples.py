import os

print('#' * 60)

ip_ou_host = input('Digite IP ou Host para verificação: ')
print('-' * 60)
os.system('ping -n 6 {}'.format(ip_ou_host))
print('-' * 60)
