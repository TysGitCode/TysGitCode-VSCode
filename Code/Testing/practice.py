import re
from pdfminer.high_level import extract_pages, extract_text

for page_layout in extract_pages("D:/TysGitCode-VSCode/Code/Testing/Images/Nov2022Statement-2022-11.pdf"):
    for element in page_layout:
        print(element)