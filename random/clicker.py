import pyautogui
import time

# Determine screen width
screen_width, screen_height = pyautogui.size()

# Calculate the intervals
X_INTERVAL = screen_width / 6
Y_COORD = 2 * screen_height / 3  # Starting 2/3 up the screen

# Amount of pixel movement per scroll event (this is an estimate, adjust as necessary)
PIXELS_PER_SCROLL = 50
SCROLL_AMOUNT = -224  # Reduced by about 30% from previous value

# Time delay to give you time to place the mouse where needed
time.sleep(5)

# Store the initial mouse position
initial_x, initial_y = pyautogui.position()

# Counter for clicks
click_count = 0

while True:  # Infinite loop
    if click_count >= 250:  # Stop after 250 clicks
        break

    for col in range(6):  # 6 clicks in a line
        x = (col + 0.5) * X_INTERVAL  # click the center of each section
        pyautogui.click(x, Y_COORD)
        time.sleep(0.1)  # Small delay between each click

        click_count += 1
        if click_count >= 250:  # Stop after 250 clicks
            break

    # Scroll down
    pyautogui.scroll(SCROLL_AMOUNT)

    # Adjust the initial position based on the scroll amount
    initial_y += PIXELS_PER_SCROLL * abs(SCROLL_AMOUNT)  # adjust the y-coordinate
    pyautogui.moveTo(initial_x, initial_y)
    
    # 6-second delay before the next set of clicks
    time.sleep(.15)
