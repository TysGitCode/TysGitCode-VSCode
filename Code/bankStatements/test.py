import re

import parse
import pdfplumber
import pandas as pd
from collections import namedtuple

str1 = 'AccountNumber 1159412 StatementPeriod04/01/23thru04/30/23 Page 1 of 10'

string_pattern = r'\d{7}'

regex_pattern = re.compile(string_pattern)

result = regex_pattern.findall(str1)
print(result)




