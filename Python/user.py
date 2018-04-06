import random #importar módulo para números aleatorios

charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
id_length = 20 #tamaño de id del usuario
user_id = "".join(random.sample(charset, id_length)) #creación de id con tamaño 20
print(user_id)