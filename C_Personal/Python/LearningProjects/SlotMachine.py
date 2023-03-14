# This is how python detects constant variables
MAX_LINES = 3
MAX_BET = 100
MIN_BET = 1

# Defines the deposit function we will use to ask how much the user would like to deposit.
def deposit():
    while True:
        amount = input("What would you like to deposit? $")
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


# Defines the main function that will be used to run our program
def main():
    balance = deposit()
    lines = get_number_of_lines()
    print(balance, lines)

# Calls the main function
main()