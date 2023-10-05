import re
from pdfminer.high_level import extract_pages, extract_text
from pdfminer.layout import LTTextBox
from pdfminer.layout import LTText
from pdfminer.layout import LTChar

for page_layout in extract_pages("C:/Users/tmitche5/TysGitCode-VSCode/Code/Testing/Images/Nov2022Statement-2022-11.pdf"):
    for element in page_layout:
        if isinstance(element, LTTextBox):
            for text_line in element:
                re.findall("''", text_line)