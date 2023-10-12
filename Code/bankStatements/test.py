import re

import parse
import pdfplumber
import pandas as pd
from collections import namedtuple

#  The string used to test different values
str1 = 'AccountNumber 1159412 StatementPeriod04/01/23thru04/30/23 Page 1 of 10'

#  Find any string of 7 numbers fromthe line
number_pattern = r'\d{7}'

# Finds any string that matches "Account Number"
account_pattern = r'AccountNumber'

# Finds anywhere that says "StatementPeriod"
statement_period_pattern = r'StatementPeriod'

# Finds the date for Statement Perdiod formatted as MM/DD/YY
statement_date_pattern = r'(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])/(\d{2})'

# Recompiles the patterns as matches
number_match = re.compile(number_pattern)
string_match = re.compile(account_pattern)
statement_period_match = re.compile(statement_period_pattern)
statement_date_match = re.compile(statement_date_pattern)

# Looks for all the results of the matches in the string
string_result = string_match.findall(str1)
print(string_result)

number_result = number_match.findall(str1)
print(number_result)

statement_period_result = statement_period_match.findall(str1)
print(statement_period_result)

statement_date_result = statement_date_match.findall(str1)
print(statement_date_result)



