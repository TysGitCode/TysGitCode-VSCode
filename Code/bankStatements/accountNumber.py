import pandas as pd
import re
import pdfplumber

# Path to the PDF file
pdf_path = 'Code/bankStatements/Apr2023Statement-2023-04.pdf'

# RE pattern to find the headers for the account number, statement period, and page number
# Everything surrounded in () is part of a group which can be called on later
pattern = r"AccountNumber\s(\d+)\sStatementPeriod(\d{2}/\d{2}/\d{2})thru(\d{2}/\d{2}/\d{2})\sPage\s(\d+)\sof\s(\d+)"

# opens the pdf with pdfpumber as the variable pdf
with pdfplumber.open(pdf_path) as pdf:
    text = ""
    # for every page in the pdf add the variable "text" which is empty to the text of each page
    for page in pdf.pages:
        text += page.extract_text()

# Search for the RE pattern we defined earlier in the "text" variable
match = re.search(pattern, text)

# If it looks through the "text" variable and finds the headers for the account number header than make a pandas data frame
if match:
    # Sets "data" = to all of the groups
    data = {
        # The different groups we created in the first pattern
        'AccountNumber': [match.group(1)],
        'StatementStart': [match.group(2)],
        'StatementEnd': [match.group(3)],
        'CurrentPage': [match.group(4)],
        'TotalPages': [match.group(5)]
    }
    df = pd.DataFrame(data)
    # prints the data frame
    print(df)
else:
    print("Pattern not found in the text!")