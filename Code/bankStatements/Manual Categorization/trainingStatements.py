
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.naive_bayes import MultinomialNB
from sklearn.metrics import accuracy_score

# Load CSV
df = pd.read_csv('trainingStatements.csv')

# Categories and keywords
categories = {
    'DINING': ["DUTCH", "IN N OUT BURGER", "LEVELUPSMOOTHIEKING01", "LEVELUPSMOOTHIEKING26", "IBI*FABLETICS.COM", "PP*DUTCHBROSLL", "MCDONALD’S", "DP DOUGH", "CHICK-FIL-A", "WWW.DOORDASH.", "DINING", "FUZZYS", "LEVELUPSMOOTHIEKING","LEVELUPSMOOTHIEKING91", "DOMINO’S", "JIMMY JOHNS", "RAISING CANES", "LEVELUPSMOOTHIEKING", "McDonalds", "ALBERTACOS", "MCDONALD'S", "STARBUCKS", "KFC", "SUBWAY", "BURGER KING", "DOMINO'S", "PIZZA HUT", "TACO BELL", "CHICK-FIL-A", "DUNKIN'", "TIM HORTONS", "PANERA BREAD", "CHIPOTLE", "WENDY'S", "PAPA JOHN'S", "OLIVE GARDEN", "ARBY'S", "DAIRY QUEEN", "LITTLE CAESARS", "IHOP", "HARDEE'S", "FIVE GUYS", "RED LOBSTER", "POPEYES", "JACK IN THE BOX", "SONIC DRIVE-IN", "BUFFALO WILD WINGS", "CHILI'S", "T.G.I. FRIDAY'S", "APPLEBEE'S", "CARL'S JR.", "CULVER'S", "PANDA EXPRESS", "CRACKER BARREL", "OUTBACK STEAKHOUSE", "LONGHORN STEAKHOUSE", "WHITE CASTLE", "JIMMY JOHN'S", "RUBY TUESDAY", "PERKINS", "TEXAS ROADHOUSE", "GOLDEN CORRAL", "DEL TACO", "BOB EVANS", "JAMBA", "JERSEY MIKE'S", "ZAXBY'S", "WAFFLE HOUSE", "CHEESECAKE FACTORY", "BJ'S RESTAURANT", "RUTH'S CHRIS", "MORTON'S", "CHICKEN EXPRESS", "AUNTIE ANNE'S", "CHECKERS", "RALLY'S", "SIZZLER", "CARRABBA'S", "MIMI'S CAFE", "LOGAN'S ROADHOUSE", "BASKIN-ROBBINS", "CICI'S PIZZA", "EL POLLO LOCO", "QDOBA", "WINGSTOP", "BONEFISH GRILL", "NOODLES & COMPANY", "PIZZA RANCH", "TORCHYS", "GOOD TIMES BURGERS & FROZEN CUSTARD", "SMASHBURGER", "LARKBURGER", "SANTIAGO'S", "ILLEGAL PETE'S", "BIG CITY BURRITO", "MAD GREENS", "NATIVE FOODS", "PHO 95", "FAT SULLY'S", "LOLA COASTAL MEXICAN", "PARK BURGER", "MOUNTAIN SUN PUB & BREWERY", "SNARF'S SANDWICHES", "OZO COFFEE", "THE SINK"],
    'GROCERIES': ["TRADER JOE", "KING SOOPERS", "SAFEWAY", "ALBERTSONS", "CITY MARKET", "TRADER JOE'S", "WHOLE FOODS MARKET", "SPROUTS FARMERS MARKET", "NATURAL GROCERS", "COSTCO", "WALMART SUPERCENTER", "SAM'S CLUB", "FRESH THYME", "LUCKY'S MARKET", "ALDI", "SAVE-A-LOT", "TONY'S MARKET", "MARCZYK FINE FOODS", "LEEVERS SUPERMARKETS", "MILE HIGH ORGANICS", "PETE'S FRUITS & VEGETABLES", "VITAMIN COTTAGE", "EL RANCHO SUPERMARKET", "ASIAN PACIFIC MARKET", "PACIFIC OCEAN MARKETPLACE", "SEABELL INTERNATIONAL CO", "INDIA'S GROCERY", "LA PRADERA MEAT MARKET", "CARNICERIA TARAHUMARA"],
    'SHOPPING': ["BOOTBARN.COM", "Boot Barn", "*Steam", "ZALES", "DICK’S", "Amzn.com/bill", "ULTA", "LOWES", "LOWE’S", "Amazon.com", "AMZN", "WALMART", "TARGET", "BEST BUY", "MACY'S", "KOHL'S", "JC PENNEY", "SEARS", "DILLARD'S", "NORDSTROM", "BLOOMINGDALE'S", "ROSS", "MARSHALLS", "TJ MAXX", "BED BATH & BEYOND", "BARNES & NOBLE", "GAP", "OLD NAVY", "H&M", "ZARA", "FOREVER 21", "IKEA", "LOWE'S", "THE HOME DEPOT", "MICHAELS", "JOANN FABRICS", "ACE HARDWARE", "AUTOZONE", "O'REILLY AUTO PARTS", "PETSMART", "PETCO", "GAMESTOP", "STAPLES", "OFFICE DEPOT", "DICK'S SPORTING GOODS", "BIG 5 SPORTING GOODS", "CABELA'S", "BASS PRO SHOPS", "TOYS 'R' US", "HOT TOPIC", "ULTA BEAUTY", "SEPHORA", "REI", "VICTORIA'S SECRET", "BATH & BODY WORKS", "AMERICAN EAGLE OUTFITTERS", "HOLLISTER", "EXPRESS", "AEROPOSTALE", "JOURNEYS", "FOOTACTION", "PAYLESS SHOESOURCE", "DSW", "STEIN MART", "WORLD MARKET", "FRONTGATE", "LANDS' END", "LL BEAN", "FREE PEOPLE", "ANTHROPOLOGIE", "URBAN OUTFITTERS", "BANANA REPUBLIC", "ANN TAYLOR", "LOFT", "CHICO'S", "WHITE HOUSE BLACK MARKET", "CARTER'S", "THE CHILDREN'S PLACE", "BUILD-A-BEAR WORKSHOP", "CLAIRE'S", "SALLY BEAUTY SUPPLY", "GNC", "VITAMIN WORLD", "HARBOR FREIGHT TOOLS", "TRADER JOE'S", "LUSH", "A&W", "AARON'S", "ABERCROMBIE & FITCH", "ADIDAS", "ALDO", "ALFRED ANGELO", "ALLSAINTS", "AMAZON", "APPLE STORE", "ARC'TERYX", "ARMANI EXCHANGE", "ASHLEY STEWART", "ASICS", "ATHLETA", "AT&T", "AUNTIE ANNE'S", "AVENUE", "BANANA REPUBLIC", "BARE ESCENTUALS", "BARNES & NOBLE", "BASKIN ROBBINS", "BATH & BODY WORKS", "BEACH BUNNY", "BEALL'S", "BEAUTY BRANDS", "BED BATH & BEYOND", "BELK", "BEST BUY", "BEST BUY MOBILE", "BIG LOTS", "BJ'S RESTAURANT AND BREWHOUSE", "BJ'S WHOLESALE CLUB", "BLACKLION", "BLOOMINGDALE'S", "BOB EVANS", "BODY CENTRAL", "BON-TON", "BONEFISH GRILL", "BOSE", "BOSTON MARKET", "BOSTONIAN", "BROOKS BROTHERS", "BUFFALO WILD WINGS", "BUILD-A-BEAR WORKSHOP", "BURGER KING", "BURKES OUTLET", "BURLINGTON", "CABELA'S", "CACHE", "CALIFORNIA PIZZA KITCHEN", "CALVIN KLEIN", "CARA'S BOUTIQUE", "CARTER'S", "CARTIER", "CATHERINES", "CB2", "CHANEL", "CHANEL BOUTIQUE", "CHARLES DAVID", "CHARLOTTE RUSSE", "CHICK-FIL-A", "CHICO'S", "CHINESE GOURMET EXPRESS", "CHIPOTLE MEXICAN GRILL", "CHURCH'S CHICKEN", "CINNABON", "CITI TRENDS", "CITIBANK", "CLARKS", "CLUB MONACO", "COACH", "COLE HAAN", "COLD STONE CREAMERY", "COLDWATER CREEK", "COLE HAAN", "COLOMBIA SPORTSWEAR", "COMCAST", "CONVERSE", "COST PLUS WORLD MARKET", "CRACKER BARREL", "CRAZY 8", "CROCS", "CRUNCH", "CVS", "DAIRY QUEEN", "DAVID'S BRIDAL", "DAVID YURMAN", "DEL TACO", "DELIA'S", "DHL", "DICK'S SPORTING GOODS", "DIESEL", "DILLARD'S", "DINING: OLIVE GARDEN", "DISNEY STORE", "DKNY", "DOCKERS", "DOLLAR GENERAL", "DOLLAR TREE", "DOMINO'S PIZZA", "DRESSBARN", "DSW", "DUNKIN' DONUTS", "DUANE READE", "ECCO", "EDDIE BAUER", "EILEEN FISHER", "EL POLLO LOCO", "ETRO", "EXPRESS", "FAO SCHWARZ", "FARM FRESH", "FENDI", "FIFTH THIRD BANK", "FILSON", "FINISH LINE", "FOOT LOCKER", "FOOTACTION", "FOREVER 21", "FORNARINA", "FREE PEOPLE", "FRESH & EASY", "FRIENDLY'S", "FRYE", "GAMESTOP", "GAP", "GNC", "GODIVA CHOCOLATIER", "GOLD'S GYM", "GOLF GALAXY", "GOODWILL", "GORDMANS", "GUESS", "GYMBOREE", "HAAGEN-DAZS", "HALLMARK", "HANES", "HANNA ANDERSSON", "HARDEE'S", "HARLEY DAVIDSON", "HERMES", "HOLLISTER CO.", "HOLLYWOOD TANS", "HOME DEPOT", "HOME GOODS", "HOOTERS", "HOT TOPIC", "HSBC", "HUGO BOSS", "IHOP", "IKEA", "IN-N-OUT BURGER", "J. CREW", "J. JILL", "J.C. PENNEY", "JACK IN THE BOX", "JAMBA JUICE", "JANIE AND JACK", "JARED THE GALLERIA OF JEWELRY", "JASON'S DELI", "JCP SALON", "JERSEY MIKE'S SUBS", "JIMMY CHOO", "JIMMY JOHN'S", "JOANN FABRICS AND CRAFTS", "JOE'S JEANS", "JOHNNY ROCKETS", "JOHN VARVATOS", "JOIE", "JONES NEW YORK", "JOS. A. BANK", "JOURNEYS", "JOURNEYS KIDZ", "JUSTICE", "KARL LAGERFELD", "KATE SPADE", "KAY JEWELERS", "KENNETH COLE", "KFC", "KIDROBOT", "KIPLING", "KIRKLAND'S", "KMART", "KOHL'S", "KRISPY KREME", "KROGER", "L'EGGS HANES BALI PLAYTEX", "L.L. BEAN", "LACOSTE", "LANE BRYANT", "LEGO STORE", "LENSCRAFTERS", "LEVI'S", "LIDS", "LITTLE CAESARS", "LONG JOHN SILVER'S", "LONGHORN STEAKHOUSE", "LORD & TAYLOR", "LOUIS VUITTON", "LOVE CULTURE", "LULULEMON ATHLETICA", "LUXOTTICA", "MAC COSMETICS", "MACY'S", "MADISON", "MAGGIANO'S", "MARBLE SLAB CREAMERY", "MARIE CALLENDER'S", "MARKETPLACE", "MARSHALLS", "MAX MARA", "MCALISTER'S DELI", "MCDONALD'S", "MENCHIE'S", "MEN'S WEARHOUSE", "MEXX", "MICHAEL KORS", "MICHAELS", "MICRO CENTER", "MICROSOFT STORE", "MISS SELFRIDGE", "MISS SIXTY", "MODA", "MOE'S SOUTHWEST GRILL", "MONTBLANC", "MOTHERHOOD MATERNITY", "NEIMAN MARCUS", "NEW BALANCE", "NEW YORK & COMPANY", "NIKE", "NINE WEST", "NORDSTROM", "O'CHARLEY'S", "OFF BROADWAY SHOES", "OLD NAVY", "OLIVE GARDEN", "OLYMPIA SPORTS", "OMEGA", "ORIGINS", "OXYGEN", "PACIFIC SUNWEAR", "PANDA EXPRESS", "PANERA BREAD", "PAPA JOHN'S", "PARTY CITY", "PAYLESS SHOESOURCE", "PENHALIGON'S", "PEP BOYS", "PETCO", "PETSMART", "P.F. CHANG'S", "PIER 1 IMPORTS", "PIZZA HUT", "PLANET FITNESS", "PLANET SMOOTHIE", "PLAY IT AGAIN SPORTS", "PNC BANK", "POTTERY BARN", "POTTERY BARN KIDS", "PRADA", "PUMA", "QDOBA MEXICAN GRILL", "RADIO SHACK", "RAG & BONE", "RAINBOW", "RALPH LAUREN", "RAY-BAN", "RED LOBSTER", "RED MANGO", "RED ROBIN", "REEBOK", "REGAL CINEMAS", "REGIS SALON", "RENT-A-CENTER", "RITE AID", "RIVER ISLAND", "ROBERT WAYNE FOOTWEAR", "ROCKPORT", "ROCKY MOUNTAIN CHOCOLATE FACTORY", "ROLEX", "ROSS", "SACKS FIFTH AVENUE OFF 5TH", "SAKS FIFTH AVENUE", "SALLY BEAUTY SUPPLY", "SALVATORE FERRAGAMO", "SAM'S CLUB", "SAM ASH MUSIC STORE", "SAMSUNG", "SANDRO", "SAUCONY", "SAVE-A-LOT", "SEARS", "SEPHORA", "SHAKE SHACK", "SHERWIN-WILLIAMS", "SHOE CARNIVAL", "SHOPRITE", "SHRIMP BOAT", "SKECHERS", "SMASHBURGER", "SMOOTHIE KING", "SONIC", "SONY", "SOULCYCLE", "SPENCER'S", "SPERRY", "SPORTS AUTHORITY", "SPRINT", "STANFORD'S", "STARBUCKS", "STEVE MADDEN", "STEVEN ALAN", "SUBWAY", "SUPERDRY", "SUPERCUTS", "SUPREME", "SWAROVSKI", "SWATCH", "T-MOBILE", "TACO BELL", "TACO BUENO", "TALBOTS", "TARGET", "TED BAKER", "TEXAS ROADHOUSE", "THE ART OF SHAVING", "THE BODY SHOP", "THE CHILDREN'S PLACE", "THE CONTAINER STORE", "THE COSMETICS COMPANY STORE", "THE FRESH MARKET", "THE NORTH FACE", "THEORY", "TIMBERLAND", "TISSOT", "T.J. MAXX", "T-MOBILE", "TOMMY BAHAMA", "TOMMY HILFIGER", "TOPSHOP", "TORY BURCH", "TOUS", "TOYS R US", "TRADER JOE'S", "TRUE RELIGION", "TUMI", "UGG AUSTRALIA", "ULTA BEAUTY", "UNDER ARMOUR", "VAN HEUSEN", "VANS", "VERA BRADLEY", "VERIZON WIRELESS", "VICTORIA'S SECRET", "VINCE", "VINCE CAMUTO", "VINEYARD VINES", "VITAMIN SHOPPE", "VITAMIN WORLD", "VIVIENNE TAM", "WALGREENS", "WALMART", "WATCH STATION", "WATERFORD WEDGWOOD ROYAL DOULTON", "WEGMANS", "WELLS FARGO", "WET SEAL", "WHOLE FOODS MARKET", "WILLIAMS-SONOMA", "WILSONS LEATHER", "YANKEE CANDLE", "ZARA", "ZUMIEZ"],
    'INCOME/SALARY': ["CO:"],
    'TRANSFERS': ["WITHDRAWAL", "Share", "VENMO*Hodges", "TRANSFER", "VENMO", "VENMO*"],
    'GYM': ["VILLA",'VASA'],
    'YIELD': ['YIELD'],
    'GAS STATION': ["MAVERIK", "KUM&GO","SHELL", "EXXON", "CHEVRON", "BP", "MOBIL", "TOTAL", "SUNOCO", "CONOCO", "PHILLIPS 66", "ARCO", "QUIKTRIP", "7-ELEVEN", "MARATHON", "VALERO", "RACETRAC", "SPEEDWAY", "CITGO", "LUKOIL", "CUMBERLAND FARMS", "WAWA", "CASEY'S GENERAL STORE", "LOVE'S", "FLYING J", "PILOT", "SHEETZ", "HOLIDAY STATIONSTORES", "KUM & GO", "KWIK TRIP", "MAPCO", "ROYAL FARMS", "BUC-EE'S", "MURPHY USA", "CIRCLE K", "AMOCO", "GULF", "TESORO", "ANDERSONS", "TEXACO", "76", "ALLSUP'S", "KROGER", "BJ's", "COSTCO GASOLINE", "SAM'S CLUB"],
    'ENTERTAINMENT': ["GOLF", "CINEMAS","MOVIES", "CINEMA", "THEATER", "CONCERT", "MUSEUM", "GALLERY", "AMUSEMENT PARK", "ZOO", "AQUARIUM", "BOWLING", "ARCADE", "MINI-GOLF", "ESCAPE ROOM", "LASER TAG", "CARNIVAL", "FESTIVAL", "CIRCUS", "MAGIC SHOW", "COMEDY CLUB", "NIGHTCLUB", "KARAOKE", "LIVE MUSIC", "BALLET", "OPERA", "PLAY", "MUSICAL", "SPORTING EVENT", "RACE TRACK", "CASINO", "POOL HALL", "DANCE CLUB", "ROLLER SKATING", "ICE SKATING", "PLANETARIUM", "GAME NIGHT", "TRIVIA NIGHT", "THEME PARK", "WATER PARK", "FAIR", "RODEO", "HORSE SHOW", "CRAFT SHOW", "STAND-UP", "IMAX", "3D MOVIE", "DRIVE-IN", "DINNER THEATER", "VIRTUAL REALITY", "VR ARCADE", "BOARD GAMES", "TRAMPOLINE PARK"],
    'RECURRING PAYMENTS': ["SEI", "COOKBOOK", "Bill", "APPLE.COM/BILL", "ADOBE", "SUBSCRIPTION", "MEMBERSHIP", "NETFLIX", "SPOTIFY", "AMAZON PRIME", "HBO", "DISNEY+", "HULU", "GYM FEE", "MORTGAGE", "RENT", "UTILITY BILL", "WATER BILL", "ELECTRICITY", "GAS BILL", "PHONE BILL", "INTERNET", "CABLE", "INSURANCE", "CAR LOAN", "STUDENT LOAN", "CREDIT CARD PAYMENT", "HEALTH INSURANCE", "LIFE INSURANCE", "MAGAZINE", "NEWSPAPER", "SOFTWARE LICENSE", "SECURITY ALARM", "TRASH COLLECTION", "SEWER", "LANDSCAPING", "PEST CONTROL", "CLOUD STORAGE", "VPN", "AUDIOBOOK", "STREAMING SERVICE", "DOMAIN NAME", "WEB HOSTING", "DATA BACKUP", "APPS", "MAILBOX RENTAL", "CLUB DUES", "ASSOCIATION FEE", "TIRES", "MAINTENANCE", "LEASE", "FINANCING"],
}

def categorize_transaction(description):
    category_found = None
    for category, keywords in categories.items():
        for keyword in keywords:
            if (' ' + keyword.lower() + ' ') in (' ' + description.lower() + ' '):
                category_found = category
                break
        if category_found:
            break
            
    return category_found if category_found else 'Others' 


def transaction_type(amount):
    if isinstance(amount, str):
        amount = float(amount.replace(",", ""))
    return 'Deposit' if amount > 0 else 'Withdrawal'

df['Category'] = df['TransactionDescription'].apply(categorize_transaction)
df['Type'] = df['Amount'].apply(transaction_type)
df.to_csv('correctlyCategorized.csv', index=False)