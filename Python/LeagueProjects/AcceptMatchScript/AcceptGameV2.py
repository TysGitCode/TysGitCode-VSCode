import pyautogui
import time
import keyboard
import random
import win32api, win32con

x = 1

def click(x, y):
        win32api.SetCursorPos((x, y))
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTDOWN, 0, 0)
        time.sleep(0.01)
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTUP, 0, 0)


while (x < 1) != True:

        if pyautogui.locateOnScreen('AcceptMatch.png', confidence=.7) != None:

                print("I can see it")
                time.sleep(2)
                AcceptBtnLocation = pyautogui.locateOnScreen('D:/TysGitCode-VSCode/Python/LeagueProjects/AcceptMatchScript/AcceptButton.png', confidence=.7)
                pyautogui.click(AcceptBtnLocation)

        else: 
                print("I am unable to see it")
                time.sleep(2)
