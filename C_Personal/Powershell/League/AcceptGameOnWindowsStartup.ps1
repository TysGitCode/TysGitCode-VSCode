#Creates $y variable
$y = 'y'

#Creates $n variable
$n = 'n'
 
#Reads the users input
$WindowHidden = Read-Host -Prompt "Would you like to run this window hidden?", "`ny = yes n = no"

#If the user said yes then run the window hidden
if ($WindowHidden -eq $y)

 {
#Runs the window hidden
PowerShell.exe -WindowStyle hidden {

 #Goes to drive location
 cd D:

 #Goes to script location in vs code
 cd D:\TysGitCode-VSCode\C_Personal\Python\LeagueProjects\AcceptMatchScript

 #Imports pywin32
 pip install pywin32
 #Imports Pyautogui
 pip install pyautogui
 #Imports Time
 pip install Time
 #Imports open cv
 pip install opencv-python

 #Runs Python file
 python AcceptGameV2.py

 }
}
 elseif ($WindowHidden -eq $n)

 {
 #Goes to drive location
 cd D:

 #Goes to script location in vs code
 cd D:\TysGitCode-VSCode\C_Personal\Python\LeagueProjects\AcceptMatchScript

 #Imports pywin32
 pip install pywin32
 #Imports Pyautogui
 pip install pyautogui
 #Imports Time
 pip install Time
 #Imports open cv
 pip install opencv-python

 #Runs Python file
 python AcceptGameV2.py
 }

 else {
 Write-Host "Please input y for yes or n for no `n Try again"
 }
