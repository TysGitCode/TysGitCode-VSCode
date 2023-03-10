@ECHO OFF
Start-Process PowerShell -ArgumentList "Set-ExecutionPolicy Restricted -Force" -Verb RunAs
PowerShell.exe -Command "D:\Mailroom_Left.ps1"
PAUSE