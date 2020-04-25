# -*- coding: utf-8 -*-
import hashlib

palavra = "263bce650e68ab4e23f28263760b9fa5"
print("Hash a descobrir: {}".format(palavra))
arquivo = open('word2.txt', 'r')

for i in arquivo:
    print(i.rstrip())
    z = hashlib.md5(i.rstrip().encode('utf-8')) # sem encode no header
    # z = hashlib.md5(i.rstrip()) # encode no header linha de comando
    if (palavra == z.hexdigest()):
        print("O hash de {} é: {}.".format(palavra, i))
        break

arquivo.close
