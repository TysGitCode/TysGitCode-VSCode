import pyautogui
import time
import win32api, win32con

#Sets Variable x = 1
x = 1
pyautogui.FAILSAFE = False

#Defines the function we will use to click
def click(x, y):
        win32api.SetCursorPos((x, y))
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTDOWN, 0, 0)
        time.sleep(0.01)
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTUP, 0, 0)

#as long as x is not less than 1 this program will run (Always)
while (x < 1) != True:

        #If the results of locating accept match are not null that means it can see it
        if pyautogui.locateOnScreen('AcceptMatch.png', confidence=.7) != None:

                #Prints to the console that the message can be seen and sleeps for 2 seconds so it doesnt spam
                print("I can see it")

                #Stores the location on the screen of the accept match button
                AcceptBtnLocation = pyautogui.locateOnScreen('D:/TysGitCode-VSCode/Python/LeagueProjects/AcceptMatchScript/AcceptButton.png', confidence=.7)

                #clicks the stored location of the accept match button
                pyautogui.move(AcceptBtnLocation)
                pyautogui.click(AcceptBtnLocation)
                time.sleep(8)

        else: 
                #Prints that the image cannot be seen and sleeps for 2 seconds so that it does not spam
                print("I am unable to see it")
                time.sleep(2)
