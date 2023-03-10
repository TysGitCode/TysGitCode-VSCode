@ECHO OFF
Start-Process PowerShell -ArgumentList "Set-ExecutionPolicy Restricted -Force" -Verb RunAs
PowerShell.exe -Command "D:\Mailroom_Right.ps1"
PAUSE