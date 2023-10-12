import re

import parse
import pdfplumber
import pandas as pd
from collections import namedtuple

# Sets the Tuple that will be used for the data frame headers
Line = namedtuple('Line', 'Trans_Date, Eff_Date, Transaction_Description, Amount, Balance')



company_re = re.compile(r'(V\d+) (.*) Phone:')
line_re = re.compile(r'\d{2}/\d{2}/\d{4} \d{2}/\d{2}/\d{4}')
file = 'C:/Users/xsnot/TysGitCode-VSCode/Code/bankStatements/Apr2023Statement-2023-04.pdf'
lines = []
total_check = 0



with pdfplumber.open(file) as pdf:
    pages = pdf.pages
    for page in pdf.pages:
        text = page.extract_text()
        for line in text.split('\n'):
            print(line)
            comp = company_re.search(line)
            if comp:
                vend_no, vend_name = comp.group(1), comp.group(2)

            elif line.startswith('INVOICES'):
                doctype = 'INVOICE'

            elif line.startswith('CREDITNOTES'):
                doctype = 'CREDITNOTE'

            elif line_re.search(line):
                items = line.split()
                lines.append(Line(vend_no, vend_name, doctype, *items))