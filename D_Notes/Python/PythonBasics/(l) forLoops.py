import time

# Counts up 1-10
# for i in range(10):
#     print(i+1)

# Counts up to 98 by 3s from 50
# for i in range(50, 101, 3):
#     print(i)

# prints a letter from name one at a time
# for i in "Ty Mitchell":
#     print(i)

# Counts down from 10 and says happy new years
for seconds in range(10, 0, -1):
    print(seconds)
    time.sleep(1)
print("Happy new year!")
