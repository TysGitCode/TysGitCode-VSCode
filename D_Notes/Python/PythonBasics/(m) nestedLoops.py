#  Prints however many rows you want with however many columns and whatever key
rows = int(input("How many rows?"))
columns = int(input("How many columns?"))
symbol = input("Enter a symbol to use")

for i in range(rows):
    for j in range(columns):
        print(symbol, end="")  # end = "" makes the cursor stay on the current line
    print()
