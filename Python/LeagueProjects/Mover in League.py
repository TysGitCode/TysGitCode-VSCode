import time
import pyautogui
import win32api
import win32con
import pyautogui as pag

pag.FAILSAFE = True


while 1 == 1:
    # This is the method to click the button
    def click(x, y):
        win32api.SetCursorPos((x, y))
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTDOWN, 0, 0)
        time.sleep(0.01)
        win32api.mouse_event(win32con.MOUSEEVENTF_LEFTUP, 0, 0)

    click(800, 764)
    time.sleep(5)
    click(1400, 764)
    time.sleep(5)
