import pyautogui
import time

# Get screen width and height
screen_width, screen_height = pyautogui.size()

# Loop indefinitely
while True:
    # Move to the left of the screen (let's say at y-coordinate in the middle of the screen)
    pyautogui.moveTo(0, screen_height/2)
    # Click and hold
    pyautogui.mouseDown()
    
    # Drag to the right of the screen
    pyautogui.moveTo(screen_width, screen_height/2, duration=1)  # Duration is the time taken to drag
    
    # Release click
    pyautogui.mouseUp()
    
    # Pause for a bit before looping again
    time.sleep(2)
