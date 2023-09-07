# This is how python detects constant variables
import random


MAX_LINES = 3
MAX_BET = 100
MIN_BET = 1

ROWS = 3
COLS = 3

symbol_count = {
    "A": 2,
    "B": 4,
    "C": 6,
    "D": 8, 
}

#TODO make sure to add the stuff before the while True statement.

# Gets all of the letters out of symbol_count
def get_slot_machine_spin(rows, cols, symbols):
    all_symbols = []
    # This makes it so we get the values for all the items in the symbol_count dictionary. 
    for symbols, symbol_count in symbols.items():
        #for everything in the range of symbol_count
        for _ in range(symbol_count):
            # Append everything into symbols part of the function
            all_symbols.append(symbols)

    # Sets Columns equal to an empty list 
    columns = [[], [], []]
    # For the cols in the get slot machine function 
    for _ in range(cols):
        column = []
        # Uses a slice "[:]" in order to copy the all_symbols table
        current_symbols = all_symbols[:]
        for _ in range(rows):
            # Picks a random number from the current_symbols copy of all_symbols
            value = random.choice(current_symbols)
            # Removes the value so we do not choose the exact same one again. (doesnt mean if you get d  you wont get it again but it means that you cant get 9 d's as there is only 8)
            current_symbols.remove(value)
            # Appends everyting to column where we will store all of the chosen values
            column.append(value)

        columns.append(column)

        return columns

# Defines the deposit function we will use to ask how much the user would like to deposit.
def deposit():
    while True:
        amount = input("how much money do you have? $")
        #Only Runs if the data input by the user is a number
        if amount.isdigit():
            amount = int(amount)
            if amount > 0:
                break
            else:
                print("Amount must be greater than 0.")
        else:
            print("Please enter a number.")
    # Returns the $ amount the user wishes to deposit as a bet   
    return amount


# Defines the deposit function we will use to ask how many lines the user would like to bet on.
def get_number_of_lines():

    while True:
        # Asks the user how many lines they would like to bet on and adds the value MAX_Lines in between as a string so the user knows what their options are.
        lines = input("Enter the number of lines you would like to bet on (1-" + str(MAX_LINES) + ")? ")
        # The number of lines must be a number
        if lines.isdigit():
            lines = int(lines)
            # This checks if the user input number is between 1 (The minimum) & MAX_LINES (The maximum)
            if 1 <= lines <= MAX_LINES:
                break
            else:
                print("Amount must be greater than 0.")
        else:
            print("Please enter a number.")
        
    return lines


def get_bet():
    while True:
        amount = input("How much would you like to deposit? $")
        #Only Runs if the data input by the user is a number
        if amount.isdigit():
            amount = int(amount)
            if MIN_BET <= amount <= MAX_BET:
                break
            else:
                    # Use an f inside the print statement to insert values
                    print(f"Amount must be between {MIN_BET} - {MAX_BET}.")
        else:
                print("Please enter a number.")
    # Returns the $ amount the user wishes to deposit as a bet   
    return amount

# Uses transposing because this is technically a mattrix and we need to make it look pretty
def print_slot_machine(columns):
    for row in range(len(columns[0])):
        # this counts the columns
        for i, column in enumerate(columns):
            # if I is not equal to the maximum index do not print the | as we only want this in between to seperate
            if i != len(columns -1):
                print(column[row], "|")
            else:
                print(column[row])
    
# Defines the main function that will be used to run our program
def main():
    balance = deposit()
    lines = get_number_of_lines()

    while True:
        bet = get_bet()
        total_bet = bet * lines

        if total_bet > balance:
            print(f"you do not have enough to bet that amount, your current balance is: ${balance} ")
        else:
            break
        

    print(f"you are betting ${bet} on {lines} lines. Total bet is equal to: ${total_bet}")

    slots = get_slot_machine_spin(ROWS, COLS, symbol_count)
    print_slot_machine(slots)   


# Calls the main function
main()