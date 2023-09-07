import pyautogui
import time
import win32api
import win32con

# TODO add a python gui

# TODO make it so you can ban / pick champions and fully automate
# Might be able to do this by making champion search bar variable and asking what it should type in for the pick and ban

pyautogui.FAILSAFE = False

# Contains everything the function needs to accept the match
def Accept_Match():

    # If the results of locating accept match are not null that means it can see it
    if pyautogui.locateOnScreen('D:/TysGitCode-VSCode/C_Personal/Python/LeagueProjects/AcceptMatchScript/AcceptMatch.png', confidence=.7) != None:

            # Prints to the console that the message can be seen and sleeps for 2 seconds so it doesnt spam
            print("I can see the Accept Match Screen")

            # Stores the location on the screen of the accept match button
            AcceptBtnLocation = pyautogui.locateOnScreen('D:/TysGitCode-VSCode/C_Personal/Python/LeagueProjects/AcceptMatchScript/AcceptButton.png', confidence=.7)

            # clicks the stored location of the accept match button
            pyautogui.move(AcceptBtnLocation)
            pyautogui.click(AcceptBtnLocation)
            time.sleep(8)

    else:
            # Prints that the image cannot be seen and sleeps for 2 seconds so that it does not spam
            print("I am unable to see the Accept Match Screen")
            time.sleep(2)


def lock_in_pick():

    # If the results of locating the lock in button are not null the program can see the button
    if pyautogui.locateOnScreen('D:/TysGitCode-VSCode/C_Personal/Python/LeagueProjects/AcceptMatchScript/LockInButton.PNG', confidence=.7) != None:

        # Prints to the console that the message can be seen and sleeps for 2 seconds so there is no spam
        print('I can see the Lock In Screen')

        # Stores the location on the screen of the LockIn button
        AcceptLockInLocation = pyautogui.locateOnScreen('D:/TysGitCode-VSCode/C_Personal/Python/LeagueProjects/AcceptMatchScript/LockInButton.PNG', confidence=.9)

        # Clicks the stored location of the Lockin button
        pyautogui.move(AcceptLockInLocation)
        pyautogui.click(AcceptLockInLocation)
        time.sleep(8)

    else:
        # Prints that the image cannot be seen and sleeps for 2 seconds so that it does not spam
        print('I am unable to see the Lock In Button')
        time.sleep(2)