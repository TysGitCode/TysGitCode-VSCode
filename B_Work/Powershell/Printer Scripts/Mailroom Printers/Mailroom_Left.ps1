#This adds the driver to the driver directory
pnputil.exe -a "E:\XeroxWorkCentre7970_6.159.10.0_PCL6_x64\*.inf"

#This will get the print driver from the C Drive (Make Sure to copy it from bender first)
Add-PrinterDriver -name "Xerox WorkCentre 7970 V4 PCL6"

#This will make the printer port
Add-PrinterPort -name "Mailroom_Left" -PrinterHostAddress "128.198.67.52"

#This adds the printer to your machine
Add-Printer -DriverName "Xerox WorkCentre 7970 V4 PCL6" -Name "Mailroom_Left" -PortName "Mailroom_Left"