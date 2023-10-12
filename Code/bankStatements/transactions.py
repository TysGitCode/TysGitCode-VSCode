import pdfplumber
import pandas as pd
import re

def extract_transactions_from_pdf(pdf_path):

    with pdfplumber.open(pdf_path) as pdf:
        text = '\n'.join(page.extract_text() for page in pdf.pages)


    pattern = re.compile(r'(\d{2}/\d{2})(?:\s+(\d{2}/\d{2}))?\s+(.+?)\s+([\-\d,]+\.\d{2})\s+([\d,]+\.\d{2})')
    matches = pattern.findall(text)


    df = pd.DataFrame(matches, columns=["TransDate", "EffDate", "TransactionDescription", "Amount", "Balance"])
    return df

pdf_path_Apr2023 = 'Code/bankStatements/Statements/Apr2023Statement-2023-04.pdf'
Apr2023_df = extract_transactions_from_pdf(pdf_path_Apr2023)
print(Apr2023_df)

pdf_path_Aug2023 = 'Code/bankStatements/Statements/Aug2023Statement-2023-08.pdf'
Aug2023_df = extract_transactions_from_pdf(pdf_path_Aug2023)
print(Aug2023_df)

pdf_path_Jul2023 = 'Code/bankStatements/Statements/Jul2023Statement-2023-07.pdf'
Jul2023_df = extract_transactions_from_pdf(pdf_path_Jul2023)
print(Jul2023_df)

pdf_path_Jun2023 = 'Code/bankStatements/Statements/Jun2023Statement-2023-06.pdf'
Jun2023_df = extract_transactions_from_pdf(pdf_path_Jun2023)
print(Jun2023_df)

pdf_path_Mar2023 = 'Code/bankStatements/Statements/Mar2023Statement-2023-03.pdf'
Mar2023_df = extract_transactions_from_pdf(pdf_path_Mar2023)
print(Mar2023_df)

pdf_path_May2023 = 'Code/bankStatements/Statements/May2023Statement-2023-05.pdf'
May2023_df = extract_transactions_from_pdf(pdf_path_May2023)
print(May2023_df)

pdf_path_Sep2023 = 'Code/bankStatements/Statements/Sep2023Statement-2023-09.pdf'
Sep2023_df = extract_transactions_from_pdf(pdf_path_Sep2023)
print(Sep2023_df)

pass

pdf_paths = {
    "Apr2023": 'Code/bankStatements/Statements/Apr2023Statement-2023-04.pdf',
    "Aug2023": 'Code/bankStatements/Statements/Aug2023Statement-2023-08.pdf',
    "Jul2023": 'Code/bankStatements/Statements/Jul2023Statement-2023-07.pdf',
    "Jun2023": 'Code/bankStatements/Statements/Jun2023Statement-2023-06.pdf',
    "Mar2023": 'Code/bankStatements/Statements/Mar2023Statement-2023-03.pdf',
    "May2023": 'Code/bankStatements/Statements/May2023Statement-2023-05.pdf',
    "Sep2023": 'Code/bankStatements/Statements/Sep2023Statement-2023-09.pdf'
}

# Extract data from PDF paths and store in DataFrames
dfs = {}
for month, path in pdf_paths.items():
    df = extract_transactions_from_pdf(path)
    dfs[month] = df
    print(f"{month} DataFrame:\n", df)

# Combine DataFrames
combined_df = pd.concat(dfs.values(), ignore_index=True)

# Save combined DataFrame into a CSV file
combined_df.to_csv('combined_statements_2023.csv', index=False)