import pdfplumber
import pandas as pd
import re

def extract_transactions(text):
    lines = text.split("\n")
    transactions = []
    current_transaction = None

    for line in lines:
        match = re.search(r"(\d{2}/\d{2})\s(.*?)([-]?\d{1,3}(?:,\d{3})*\.\d{2})\s+(\d{1,3}(?:,\d{3})*\.\d{2})", line)
        if match:
            if current_transaction:
                transactions.append(current_transaction)
            current_transaction = match.groups()
        elif current_transaction and not re.search(r"^\d{2}/\d{2}", line):  
            current_transaction = (current_transaction[0], current_transaction[1] + " " + line.strip(), current_transaction[2], current_transaction[3])
        else:
            continue
    
    if current_transaction:
        transactions.append(current_transaction)

    return transactions

def extract_transactions_from_pdf(pdf_path):
    with pdfplumber.open(pdf_path) as pdf:
        text = '\n'.join(page.extract_text() for page in pdf.pages)

    transactions = extract_transactions(text)
    df = pd.DataFrame(transactions, columns=["TransDate", "TransactionDescription", "Amount", "Balance"])
    return df

pdf_paths = {
    "Apr2023": 'Code/bankStatements/Statements/Apr2023Statement-2023-04.pdf',
    "Aug2023": 'Code/bankStatements/Statements/Aug2023Statement-2023-08.pdf',
    "Jul2023": 'Code/bankStatements/Statements/Jul2023Statement-2023-07.pdf',
    "Jun2023": 'Code/bankStatements/Statements/Jun2023Statement-2023-06.pdf',
    "Mar2023": 'Code/bankStatements/Statements/Mar2023Statement-2023-03.pdf',
    "May2023": 'Code/bankStatements/Statements/May2023Statement-2023-05.pdf',
    "Sep2023": 'Code/bankStatements/Statements/Sep2023Statement-2023-09.pdf'
}

dfs = {}
for month, path in pdf_paths.items():
    df = extract_transactions_from_pdf(path)
    dfs[month] = df
    print(f"{month} DataFrame:\n", df)

combined_df = pd.concat(dfs.values(), ignore_index=True)
combined_df.to_csv('combined_statements_2023.csv', index=False)
