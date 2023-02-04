# uses hashing to access info quickly can be changed while program is running

capitals = {'USA': 'Washington DC',
            'India': 'New Dehli'}

# print(capitals['USA'])
print(capitals.get('Berut'))
print(capitals.values())

for key, value in capitals.items():
    print(key, value)





