age = int(input("How old are you?: "))

if age > 100:
    print("I dont think you are telling the truth! ")
elif age > 21:
    print("You are older than me! ")
elif age == 21:
    print("We are the same age!")
else:
    print("You are younger than me!")
