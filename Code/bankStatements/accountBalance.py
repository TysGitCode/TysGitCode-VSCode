import pandas as pd
import re
import pdfplumber

pdf_path = 'Code/bankStatements/Apr2023Statement-2023-04.pdf'

pattern = r"(\w+)\s+\(\d+\)\.+\s+(\d+,\d+\.\d{2})"

with pdfplumber.open(pdf_path) as pdf:
    text = ""
    for page in pdf.pages:
        text += page.extract_text()

matches = re.findall(pattern, text)

if matches:
    data = {
        'AccountType': [match[0] for match in matches],
        'Balance': [match[1] for match in matches]
    }
    df = pd.DataFrame(data)
    print(df)
else:
    print("No matches found in the text!")
