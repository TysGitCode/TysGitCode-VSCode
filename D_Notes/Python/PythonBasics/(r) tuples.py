# collection which is ordered and unchangeable used to group together related data

student = ("Ty", 21, "male")  # this is the tuple
print(student.count(21))
print(student.index("male"))

# Prints everything in the tuple
for x in student:
    print(x)

# Asks what you want to do if certain parameters exist in the tuple
if "male" in student:
    print("Its a boy!")
