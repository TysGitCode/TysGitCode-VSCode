import pyautogui
import time

# Get screen width and height
screen_width, screen_height = pyautogui.size()

# Adjustments to start and end drag farther in
start_offset = screen_width * 0.1  # starting 10% in from the left
end_offset = screen_width * 0.9  # ending 10% in from the right

counter = 0  # to keep track of the number of iterations

# Loop indefinitely
while True:
    # Move to the adjusted position on the left
    pyautogui.moveTo(start_offset, screen_height/2)
    # Click and hold
    pyautogui.mouseDown()
    
    # Drag to the adjusted position on the right
    pyautogui.moveTo(end_offset, screen_height/2, duration=0.15)
    
    # Release click
    pyautogui.mouseUp()

    # Increment counter
    counter += 1
    
    # If it's the 5th iteration, sleep for 4 seconds
    if counter % 50 == 0:
        time.sleep(6)
    
    # Pause for a bit before looping again
    time.sleep(.0025)
