<?php

/**
 * @Route("/concepts/create", name="create_concept")
 */
public function create() {
    $loc = json_decode(

    '{
        "terms": [{
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060196",
            "preferred": "Academic librarians",
            "alternate": [
                "College librarians",
                "Community college librarians",
                "University librarians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060050",
            "preferred": "Accountants",
            "alternate": [
                "Certified public accountants",
                "Chartered accountants",
                "Public accountants"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [
                "dg2015060859"
            ],
            "id": "dg2015060362",
            "preferred": "African Americans",
            "alternate": [
                "Afro-Americans",
                "Americans, African",
                "Americans, Afro-"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060384"
            ],
            "related": [],
            "id": "dg2015060275",
            "preferred": "African Methodist Episcopal Church members",
            "alternate": [
                "A.M.E. Church members",
                "AME Church members"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060319",
            "preferred": "Africans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060053",
            "preferred": "Air pilots",
            "alternate": [
                "Airline pilots",
                "Airplane pilots",
                "Aviators",
                "Pilots, Airplane"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060016",
            "preferred": "Alabamians",
            "alternate": [
                "Alabamans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060017",
            "preferred": "Alaskans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060227",
            "preferred": "Albertans",
            "alternate": [
                "Albertains"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060068"
            ],
            "related": [],
            "id": "dg2015060069",
            "preferred": "Ambassadors",
            "alternate": [
                "Commissioners, High (Ambassadors)",
                "High commissioners (Ambassadors)",
                "Ministers (Ambassadors)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060266"
            ],
            "related": [],
            "id": "dg2015060271",
            "preferred": "American Baptists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001",
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060139",
            "preferred": "American Samoans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060331"
            ],
            "related": [],
            "id": "dg2015060001",
            "preferred": "Americans",
            "alternate": [
                "United States residents"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060273",
            "preferred": "Anglicans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060352",
            "preferred": "Angolans",
            "alternate": [
                "Angolanos",
                "Angolenses"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060131",
            "preferred": "Anthropologists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060242",
            "preferred": "Apache (North American people)",
            "alternate": [
                "Apache Indians"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060315",
            "preferred": "Arab Americans",
            "alternate": [
                "Americans, Arab"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060316",
            "preferred": "Arabs",
            "alternate": [
                "Arabians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060019",
            "preferred": "Arizonans",
            "alternate": [
                "Arizonians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060020",
            "preferred": "Arkansans",
            "alternate": [
                "Arkansians",
                "Arkansawyans",
                "Arkansawyers"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060307",
            "preferred": "Armenian Americans",
            "alternate": [
                "Americans, Armenian"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060379",
            "preferred": "Armenian Canadians",
            "alternate": [
                "Arme\u0301nienne, Canadiens d\'origine",
                "Canadians, Armenian",
                "Canadiens d\'origine arme\u0301nienne"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060345",
            "preferred": "Armenians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060132",
            "preferred": "Artists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060308",
            "preferred": "Asian Americans",
            "alternate": [
                "Americans, Asian"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060380",
            "preferred": "Asian Canadians",
            "alternate": [
                "Asiatique, Canadiens d\'origine",
                "Canadians, Asian",
                "Canadiens d\'origine asiatique"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060335",
            "preferred": "Asians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060173",
            "preferred": "Athletes"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060356",
            "preferred": "Australians",
            "alternate": [
                "Aussies",
                "Ozzies"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060252",
            "preferred": "Bahais",
            "alternate": [
                "Bahai Faith adherents",
                "Bahaists"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060266",
            "preferred": "Baptists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060067",
            "preferred": "Barbers",
            "alternate": [
                "Hair stylists",
                "Stylists, Hair"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060340"
            ],
            "related": [],
            "id": "dg2015060341",
            "preferred": "Bavarians",
            "alternate": [
                "Bayern"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060098",
            "preferred": "Bay Staters",
            "alternate": [
                "Massachusettsans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060076",
            "preferred": "Boaters"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060054",
            "preferred": "Bombardiers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060060"
            ],
            "related": [],
            "id": "dg2015060061",
            "preferred": "Bomber pilots"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2015060367",
            "preferred": "Brazilians",
            "alternate": [
                "Brasileiros",
                "Brasilians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060224",
            "preferred": "British Columbians",
            "alternate": [
                "Britanno-Colombiens",
                "British Colombiens",
                "Britto-Colombiens",
                "Colombains",
                "Colombie-Britanniquois",
                "Colombiens",
                "Colombiens-Britanniques",
                "Ne\u0301o-Colombiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060373",
            "preferred": "Britons",
            "alternate": [
                "British",
                "Britishers",
                "Brits"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060246",
            "preferred": "Buddhists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060021",
            "preferred": "Californians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060331"
            ],
            "related": [],
            "id": "dg2015060002",
            "preferred": "Canadians",
            "alternate": [
                "Canadiens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060147",
            "preferred": "Caregivers",
            "alternate": [
                "Care givers",
                "Carers",
                "Family caregivers",
                "Home health caregivers",
                "Informal caregivers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060320",
            "preferred": "Carolinians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060385",
            "preferred": "Cartoonists",
            "alternate": [
                "Caricaturists",
                "Cartoon artists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060194",
            "preferred": "Catalogers",
            "alternate": [
                "Catalog librarians",
                "Cataloging librarians",
                "Catalogue librarians",
                "Cataloguers",
                "Library catalogers",
                "Library cataloguers"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060259",
            "preferred": "Catholics",
            "alternate": [
                "Roman Catholics"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060333",
            "preferred": "Central Americans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060337",
            "preferred": "Central Europeans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060390",
            "preferred": "Chess players"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2015060369",
            "preferred": "Chileans",
            "alternate": [
                "Chilenos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060372",
            "preferred": "Chinese"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060244",
            "preferred": "Choctaw (North American people)",
            "alternate": [
                "Choctaw Indians"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060383",
            "preferred": "Choso\u0306njok",
            "alternate": [
                "Chaoxian zu",
                "Chaoxianzu",
                "Joseonjok"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060258",
            "preferred": "Christians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2015060368",
            "preferred": "Colombians",
            "alternate": [
                "Colombianos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060022",
            "preferred": "Coloradans",
            "alternate": [
                "Coloradoans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2015060391",
            "preferred": "Composers",
            "alternate": [
                "Songwriters"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060350",
            "preferred": "Congolese (Brazzaville)",
            "alternate": [
                "Congolais (Brazzaville)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060351",
            "preferred": "Congolese (Democratic Republic)",
            "alternate": [
                "Belges congolais",
                "Congolais belges",
                "Congolais (Democratic Republic)",
                "Zai\u0308ro-Congolais",
                "Zai\u0308rois"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060260",
            "preferred": "Congregationalists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060026",
            "preferred": "Connecticut residents",
            "alternate": [
                "Connecticuters",
                "Connecticotians",
                "Connecticutensians",
                "Nutmeggers"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060266"
            ],
            "related": [],
            "id": "dg2015060270",
            "preferred": "Conservative Baptists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060243",
            "preferred": "Cree (North American people)",
            "alternate": [
                "Ayisiniwok (North American people)",
                "Cree Indians",
                "Iyiniwok (North American people)",
                "Nehiyawok (North American people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060317",
            "preferred": "Dakotans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060083",
            "preferred": "Delawareans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060068",
            "preferred": "Diplomats",
            "alternate": [
                "Attache\u0301s"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060172"
            ],
            "related": [],
            "id": "dg2015060171",
            "preferred": "Divers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060060"
            ],
            "related": [],
            "id": "dg2015060063",
            "preferred": "Drone aircraft pilots",
            "alternate": [
                "Drone pilots"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060338",
            "preferred": "Eastern Europeans",
            "alternate": [
                "East Europeans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060324",
            "preferred": "Easterners (United States)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060614"
            ],
            "related": [],
            "id": "dg2015060365",
            "preferred": "Endocrinologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060178",
            "preferred": "Engineers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373"
            ],
            "related": [],
            "id": "dg2015060386",
            "preferred": "English"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060273"
            ],
            "related": [],
            "id": "dg2015060274",
            "preferred": "Episcopalians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060334",
            "preferred": "Europeans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060079",
            "preferred": "Farmers",
            "alternate": [
                "Farm operators",
                "Operators, Farm",
                "Planters (Farmers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060060"
            ],
            "related": [],
            "id": "dg2015060062",
            "preferred": "Fighter pilots"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060309",
            "preferred": "Finnish Americans",
            "alternate": [
                "Americans, Finnish"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060377",
            "preferred": "Finnish Canadians",
            "alternate": [
                "Canadians, Finnish",
                "Canadiens d\'origine finlandaise",
                "Finlandaise, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060346",
            "preferred": "Finns",
            "alternate": [
                "Finlanders",
                "Suomalaiset"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060070"
            ],
            "related": [],
            "id": "dg2015060071",
            "preferred": "Fire fighters",
            "alternate": [
                "Firefighters"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060070",
            "preferred": "First responders"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060055",
            "preferred": "Flight attendants",
            "alternate": [
                "Air hostesses",
                "Air stewardesses",
                "Air stewards",
                "Airline hostesses",
                "Airline stewardesses",
                "Airline stewards",
                "Hostesses, Air",
                "Stewardesses, Air",
                "Stewards, Air"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060056",
            "preferred": "Flight engineers",
            "alternate": [
                "Engineers, Flight"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060057",
            "preferred": "Flight navigators",
            "alternate": [
                "Navigators, Flight"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060058"
            ],
            "related": [],
            "id": "dg2015060059",
            "preferred": "Flight radio operators"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060084",
            "preferred": "Floridians",
            "alternate": [
                "Floridans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060182",
            "preferred": "Folklorists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060183",
            "preferred": "Fur traders",
            "alternate": [
                "Traders, Fur"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060080",
            "preferred": "Gardeners"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060266"
            ],
            "related": [],
            "id": "dg2015060269",
            "preferred": "General Baptists",
            "alternate": [
                "Arminian Baptists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060355",
            "preferred": "Georgians (Republic of Georgia)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060085",
            "preferred": "Georgians (State of Georgia)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060340",
            "preferred": "Germans",
            "alternate": [
                "Deutschen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060053"
            ],
            "related": [],
            "id": "dg2015060064",
            "preferred": "Glider pilots",
            "alternate": [
                "Hang glider pilots"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060149",
            "preferred": "Guamanians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2015060371",
            "preferred": "Guatemalans",
            "alternate": [
                "Guatemaltecos"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060250"
            ],
            "related": [],
            "id": "dg2015060251",
            "preferred": "Hare Krishnas"
        },
        {
            "categories": [
                "religion",
                "ethnicity"
            ],
            "broader": [
                "dg2015060254"
            ],
            "related": [],
            "id": "dg2015060255",
            "preferred": "Hasidim",
            "alternate": [
                "Chasidim",
                "Hassidim"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060086",
            "preferred": "Hawaii residents",
            "alternate": [
                "Hawaiians (Hawaii residents)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060376",
            "preferred": "Hawaiians (Polynesian people)",
            "alternate": [
                "Hawaiians (Polynesians)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060250",
            "preferred": "Hindus"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060310",
            "preferred": "Hispanic Americans",
            "alternate": [
                "Americans, Hispanic",
                "Americans, Latino",
                "Hispanics (Hispanic Americans)",
                "Latino Americans",
                "Latinos (Hispanic Americans)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060264",
            "preferred": "Holiness church members",
            "alternate": [
                "Holiness body members"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060089",
            "preferred": "Idahoans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060090",
            "preferred": "Illinoisians",
            "alternate": [
                "Illinoians",
                "Illinoisans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060133",
            "preferred": "Illustrators"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060091",
            "preferred": "Indianans",
            "alternate": [
                "Hoosiers",
                "Indianians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060191",
            "preferred": "Information scientists",
            "alternate": [
                "Information managers",
                "Information specialists",
                "Knowledge managers",
                "Scientists, Information"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060092",
            "preferred": "Iowans",
            "alternate": [
                "Hawkeyes"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060311",
            "preferred": "Italian Americans",
            "alternate": [
                "Americans, Italian"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060381",
            "preferred": "Italian Canadians",
            "alternate": [
                "Canadians, Italian",
                "Canadiens d\'origine italienne",
                "Italienne, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060253",
            "preferred": "Jains",
            "alternate": [
                "Jainas",
                "Jainists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060347",
            "preferred": "Japanese"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060312",
            "preferred": "Japanese Americans",
            "alternate": [
                "Americans, Japanese"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060382",
            "preferred": "Japanese Canadians",
            "alternate": [
                "Canadians, Japanese",
                "Canadiens d\'origine japonaise",
                "Japonaise, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060261",
            "preferred": "Jehovah\'s Witnesses"
        },
        {
            "categories": [
                "ethnicity",
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060254",
            "preferred": "Jews",
            "alternate": [
                "Hebrews",
                "Israelites",
                "Jewish people",
                "Jewry",
                "Judaic people",
                "Judaists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060093",
            "preferred": "Kansans",
            "alternate": [
                "Jayhawkers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060094",
            "preferred": "Kentuckians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060397",
            "preferred": "Koreans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060393",
            "preferred": "Labradorians",
            "alternate": [
                "Labradorais",
                "Labradore\u0301ens",
                "Labradoriens",
                "Labradorites",
                "Labradormen",
                "Newfoundland and Labrador residents",
                "Terre-Neuviens et Labradoriens"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060241",
            "preferred": "Lakota (North American people)",
            "alternate": [
                "Lakota Sioux (North American people)",
                "Lakota Indians",
                "Lakotah (North American people)",
                "Teton (North American people)",
                "Teton Sioux (North American people)",
                "Thi\u0301tunwan (North American people)",
                "Titunwan (North American people)",
                "Western Sioux (North American people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060078",
            "preferred": "Lawyers",
            "alternate": [
                "Advocates (Lawyers)",
                "Attorneys",
                "Barristers",
                "Jurists (Lawyers)",
                "Solicitors"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060349",
            "preferred": "Lebanese"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060314",
            "preferred": "Lebanese Americans",
            "alternate": [
                "Americans, Lebanese"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060191",
                "dg2015060193"
            ],
            "related": [],
            "id": "dg2015060192",
            "preferred": "Librarians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060193",
            "preferred": "Library employees",
            "alternate": [
                "Library personnel",
                "Library staff"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060197",
            "preferred": "Linguists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060095",
            "preferred": "Louisianians",
            "alternate": [
                "Louisianans"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060262",
            "preferred": "Lutherans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060392",
            "preferred": "Lyricists",
            "alternate": [
                "Lyric writers",
                "Song writers",
                "Songwriters"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060096",
            "preferred": "Mainers",
            "alternate": [
                "Down Easters",
                "Downeasters",
                "Maine Staters",
                "State of Mainers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060223",
            "preferred": "Manitobans",
            "alternate": [
                "Manitobains",
                "Manitobiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060327",
            "preferred": "Maritimers",
            "alternate": [
                "Maritimiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060097",
            "preferred": "Marylanders"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060082",
            "preferred": "Mathematicians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060198",
            "preferred": "Medical personnel",
            "alternate": [
                "Health care personnel",
                "Health care professionals",
                "Health personnel",
                "Health professionals",
                "Health sciences personnel",
                "Health services personnel",
                "Healthcare professionals"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060342",
            "preferred": "Melanesians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060075"
            ],
            "related": [],
            "id": "dg2015060077",
            "preferred": "Merchant mariners"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060384",
            "preferred": "Methodists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060306",
            "preferred": "Mexican Americans",
            "alternate": [
                "Americans, Mexican",
                "Chicanos",
                "Hispanos"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060378",
            "preferred": "Mexican Canadians",
            "alternate": [
                "Canadians, Mexican",
                "Canadiens d\'origine mexicaine",
                "Mexicaine, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060331"
            ],
            "related": [],
            "id": "dg2015060329",
            "preferred": "Mexicans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060099",
            "preferred": "Michiganders",
            "alternate": [
                "Michiganians",
                "Michiganites"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060343",
            "preferred": "Micronesians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060336",
            "preferred": "Middle Easterners",
            "alternate": [
                "Mideasterners"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060328",
            "preferred": "Midwesterners",
            "alternate": [
                "Middle Westerners"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060053"
            ],
            "related": [],
            "id": "dg2015060060",
            "preferred": "Military air pilots"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060064",
                "dg2015060060"
            ],
            "related": [],
            "id": "dg2015060065",
            "preferred": "Military glider pilots"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060204",
            "preferred": "Miners"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060100",
            "preferred": "Minnesotans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060101",
            "preferred": "Mississippians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060102",
            "preferred": "Missourians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060205",
            "preferred": "Monks"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060103",
            "preferred": "Montanans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060212",
            "preferred": "Musicians"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060256",
            "preferred": "Muslims",
            "alternate": [
                "Moslems"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060104",
            "preferred": "Nebraskans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060105",
            "preferred": "Nevadans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060222",
            "preferred": "New Brunswickers",
            "alternate": [
                "Brunswickiens",
                "Brunswickois",
                "Ne\u0301o-Brunswickois",
                "New-Brunswickais",
                "New-Brunswickois",
                "Nouveau-Brunswickiens",
                "Nouveau-Brunswickois"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060321",
            "preferred": "New Englanders",
            "alternate": [
                "Yankees"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060106",
            "preferred": "New Hampshirites"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060107",
            "preferred": "New Jerseyans",
            "alternate": [
                "Jerseyans (New Jersey)",
                "Jerseyites (New Jersey)",
                "New Jerseyites"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060108",
            "preferred": "New Mexicans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060109",
            "preferred": "New Yorkers (New York State)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060357",
            "preferred": "New Zealanders",
            "alternate": [
                "Kiwis"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060228",
            "preferred": "Newfoundlanders",
            "alternate": [
                "Newfies",
                "Newlanders",
                "Newfoundland and Labrador residents",
                "Terre-Neuviens",
                "Terre-Neuviens et Labradoriens",
                "Terreneuviens",
                "Terreneuviers"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060246"
            ],
            "related": [],
            "id": "dg2015060248",
            "preferred": "Nichiren Buddhists",
            "alternate": [
                "Nichirens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060354",
            "preferred": "Nigerians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060353",
            "preferred": "Nigeriens",
            "alternate": [
                "Nigerois"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060331",
            "preferred": "North Americans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060110",
            "preferred": "North Carolinians",
            "alternate": [
                "Tar Heels"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060111",
            "preferred": "North Dakotans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060162",
            "preferred": "Northern Marianans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060323",
            "preferred": "Northerners (United States)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060231",
            "preferred": "Nor\'Westers",
            "alternate": [
                "Northwest Territorians",
                "Northwesters",
                "Te\u0301nois",
                "Territoriens (Northwest Territories)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060221",
            "preferred": "Nova Scotians",
            "alternate": [
                "Ne\u0301o-E\u0301cossais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060240",
            "preferred": "Nunavummiut",
            "alternate": [
                "Nunavumiut",
                "Nunavutians",
                "Nunavois",
                "Nunavutiens",
                "Nunavutois",
                "Territoriens (Nunavut)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060206",
            "preferred": "Nuns",
            "alternate": [
                "Sisters (Nuns)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198"
            ],
            "related": [],
            "id": "dg2015060207",
            "preferred": "Nurses",
            "alternate": [
                "Registered nurses",
                "RNs (Registered nurses)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060330",
            "preferred": "Pacific Islanders",
            "alternate": [
                "Oceanians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060112",
            "preferred": "Ohioans",
            "alternate": [
                "Buckeyes"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060113",
            "preferred": "Oklahomans",
            "alternate": [
                "Oklahomians",
                "Sooners"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060188",
            "preferred": "Ontarians",
            "alternate": [
                "Ontariens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060114",
            "preferred": "Oregonians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060326",
            "preferred": "Ozarkers",
            "alternate": [
                "Ozarkians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060134",
            "preferred": "Painters"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2015060370",
            "preferred": "Panamanians",
            "alternate": [
                "Panamen\u0303os"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060070"
            ],
            "related": [],
            "id": "dg2015060073",
            "preferred": "Peace officers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060115",
            "preferred": "Pennsylvanians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198",
                "dg2015060614"
            ],
            "related": [],
            "id": "dg2015060199",
            "preferred": "Physicians",
            "alternate": [
                "Allopathic doctors",
                "Doctors",
                "Doctors of medicine",
                "MDs (Physicians)",
                "Medical doctors",
                "Medical professionals"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060348",
            "preferred": "Poles",
            "alternate": [
                "Polish people"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060073"
            ],
            "related": [],
            "id": "dg2015060072",
            "preferred": "Police",
            "alternate": [
                "Cops",
                "Gendarmes",
                "Law enforcement officers",
                "Officers, Law enforcement",
                "Officers, Police",
                "Police officers",
                "Policemen"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060313",
            "preferred": "Polish Americans",
            "alternate": [
                "Americans, Polish"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060363",
            "preferred": "Politicians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060344",
            "preferred": "Polynesians"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060245",
            "preferred": "Powhatan (North American people)",
            "alternate": [
                "Powhatan Indians"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060263",
            "preferred": "Presbyterians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060225",
            "preferred": "Prince Edward Islanders",
            "alternate": [
                "E\u0301douardais (Prince Edward Island)",
                "E\u0301douardiens (Prince Edward Island)",
                "Prince-E\u0301douardiens",
                "Prince-Edwardiens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060389",
            "preferred": "Psychologists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060166",
            "preferred": "Puerto Ricans",
            "alternate": [
                "Puertorriquen\u0303os"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060189",
            "preferred": "Quebeckers",
            "alternate": [
                "Quebecers",
                "Que\u0301be\u0301cois"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060058",
            "preferred": "Radio operators",
            "alternate": [
                "Wireless operators"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060195",
            "preferred": "Reference librarians",
            "alternate": [
                "User services librarians"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060266"
            ],
            "related": [],
            "id": "dg2015060267",
            "preferred": "Reformed Baptists",
            "alternate": [
                "Particular Baptists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060116",
            "preferred": "Rhode Islanders",
            "alternate": [
                "Rhodeans (Rhode Island)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2015060211",
            "preferred": "Rock musicians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060076"
            ],
            "related": [],
            "id": "dg2015060075",
            "preferred": "Sailors",
            "alternate": [
                "Mariners",
                "Naval personnel"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060226",
            "preferred": "Saskatchewanians",
            "alternate": [
                "Saskatchewanais",
                "Saskatchewannais",
                "Saskatchewaners"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060215",
            "preferred": "School employees",
            "alternate": [
                "School personnel"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060081",
            "preferred": "Scientists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373"
            ],
            "related": [],
            "id": "dg2015060374",
            "preferred": "Scots"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060256"
            ],
            "related": [],
            "id": "dg2015060257",
            "preferred": "Shiites",
            "alternate": [
                "Shia Muslims",
                "Shiah Muslims",
                "Shiahs",
                "Shias",
                "Shiite Muslims"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060246"
            ],
            "related": [],
            "id": "dg2015060249",
            "preferred": "Shin Buddhists",
            "alternate": [
                "Shin-shu Buddhists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060087",
            "preferred": "Social workers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060088",
            "preferred": "Soldiers",
            "alternate": [
                "Armed Forces personnel",
                "Members of the Armed Forces",
                "Military personnel",
                "Military service members",
                "Military servicemen",
                "Service members, Military",
                "Servicemen, Military"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060318",
            "preferred": "Sotho (African people)",
            "alternate": [
                "Basotho (African people)",
                "Basuto (African people)",
                "Suto (African people)",
                "Suthu (African people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060332",
            "preferred": "South Americans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060117",
            "preferred": "South Carolinians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060118",
            "preferred": "South Dakotans"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060266"
            ],
            "related": [],
            "id": "dg2015060268",
            "preferred": "Southern Baptists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060322",
            "preferred": "Southerners (United States)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060364",
            "preferred": "Statesmen"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060256"
            ],
            "related": [],
            "id": "dg2015060265",
            "preferred": "Sunnites",
            "alternate": [
                "Sunni Muslims",
                "Sunnis"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060172",
            "preferred": "Swimmers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060375",
            "preferred": "Swiss",
            "alternate": [
                "Helve\u0300tes",
                "Helve\u0301tiens",
                "Helve\u0301tiques",
                "Schweizer",
                "Suisses",
                "Svizzeri",
                "Svizzers",
                "Switzerland residents"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060272",
            "preferred": "Taoists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060215"
            ],
            "related": [],
            "id": "dg2015060216",
            "preferred": "Teachers",
            "alternate": [
                "Educators",
                "Faculty (Teachers)",
                "Instructors",
                "School teachers",
                "Schoolteachers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060119",
            "preferred": "Tennesseans",
            "alternate": [
                "Tennesseeans",
                "Volunteers (Tennesseans)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060120",
            "preferred": "Texans",
            "alternate": [
                "Tejanos",
                "Texians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060121",
            "preferred": "Utahns",
            "alternate": [
                "Utahans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060122",
            "preferred": "Vermonters"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060170",
            "preferred": "Virgin Islanders"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060123",
            "preferred": "Virginians",
            "alternate": [
                "Dominionites"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060135",
            "preferred": "Washingtonians (District of Columbia)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060124",
            "preferred": "Washingtonians (Washington State)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060125",
            "preferred": "West Virginians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060339",
            "preferred": "Western Europeans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060325",
            "preferred": "Westerners (United States)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060126",
            "preferred": "Wisconsinites",
            "alternate": [
                "Cheeseheads"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001"
            ],
            "related": [],
            "id": "dg2015060127",
            "preferred": "Wyomingites"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2015060235",
            "preferred": "Yukoners",
            "alternate": [
                "Territoriens (Yukon)",
                "Yukonais",
                "Yukoniens",
                "Yukonnais"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060246"
            ],
            "related": [],
            "id": "dg2015060247",
            "preferred": "Zen Buddhists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060465",
            "preferred": "Administrative assistants"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060485"
            ],
            "related": [],
            "id": "dg2015060488",
            "preferred": "Administrative law judges",
            "alternate": [
                "Adjudicators (Administrative law judges)",
                "Examiners, Trial",
                "Examiners, Hearing",
                "Hearing examiners",
                "Hearing officers",
                "Judges, Administrative law",
                "Officers, Hearing",
                "Trial examiners"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060566",
            "preferred": "Adventists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060532",
            "preferred": "Afghan Americans",
            "alternate": [
                "Americans, Afghan"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060628",
            "preferred": "Afghans (Afghanistan)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060709",
            "preferred": "Algerians",
            "alternate": [
                "Alge\u0301riens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198"
            ],
            "related": [],
            "id": "dg2015060708",
            "preferred": "Allied health personnel",
            "alternate": [
                "Paramedical personnel"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060525",
            "preferred": "Anesthesiologists",
            "alternate": [
                "Anaesthesiologists",
                "Anesthetists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060767",
            "preferred": "Architects"
        },
        {
            "categories": [
                "ethnicity",
                "religion"
            ],
            "broader": [
                "dg2015060254"
            ],
            "related": [],
            "id": "dg2015060580",
            "preferred": "Ashkenazim",
            "alternate": [
                "Ashkenazi Jews",
                "Ashkenazic Jews"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060494",
            "preferred": "Australian football players"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060747"
            ],
            "related": [],
            "id": "dg2015060748",
            "preferred": "Ballet dancers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060710",
            "preferred": "Bangladeshis"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060778",
            "preferred": "Bank employees"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060624",
            "preferred": "Bards"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060490",
            "preferred": "Baseball players",
            "alternate": [
                "Baseballers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060491",
            "preferred": "Basketball players",
            "alternate": [
                "Basketballers"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060711",
            "preferred": "Basques (European people)",
            "alternate": [
                "Euskaldunak (European people)",
                "Euskotarak (European people)",
                "Euzkadi (European people)",
                "Vascos (European people)",
                "Vascongados (European people)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [
                "dg2015060316"
            ],
            "related": [],
            "id": "dg2015060440",
            "preferred": "Bedouins",
            "alternate": [
                "Bedouin Arabs",
                "Badw",
                "Beduins"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060724",
            "preferred": "Belgians",
            "alternate": [
                "Belgen",
                "Belges"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060713",
            "preferred": "Bengali (South Asian people)",
            "alternate": [
                "Bangla (South Asian people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060727",
            "preferred": "Beninese",
            "alternate": [
                "Be\u0301niniens",
                "Be\u0301ninois",
                "Dahome\u0301ens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060613",
            "preferred": "Biologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060668",
            "preferred": "Bishops"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [
                "dg2015060362"
            ],
            "id": "dg2015060859",
            "preferred": "Blacks"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060518",
            "preferred": "Book editors",
            "alternate": [
                "Editors, Book",
                "Editors, Literary",
                "Literary editors"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060400",
            "preferred": "Bookstore employees"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060340"
            ],
            "related": [],
            "id": "dg2015060652",
            "preferred": "Brandenburgers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060724"
            ],
            "related": [],
            "id": "dg2015060830",
            "preferred": "Brussels Capital Region, Belgium, residents",
            "alternate": [
                "Brusselaar",
                "Bruxellois"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060728",
            "preferred": "Burkinabe",
            "alternate": [
                "Burkina-Fassiens",
                "Burkinabais",
                "Burkinabe\u0301s",
                "Burkinais",
                "Upper Voltans",
                "Voltai\u0308ques"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060729",
            "preferred": "Burundians",
            "alternate": [
                "Burundais",
                "Burundiens",
                "Urundais",
                "Urundiens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060460"
            ],
            "related": [],
            "id": "dg2015060462",
            "preferred": "Butlers",
            "alternate": [
                "Manservants"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060744",
            "preferred": "Calligraphers",
            "alternate": [
                "Handwriting artists"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060441",
            "preferred": "Calvinists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060730",
            "preferred": "Cameroonians",
            "alternate": [
                "Camerounais"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060526",
            "preferred": "Cardiologists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060533",
            "preferred": "Caribbean Americans",
            "alternate": [
                "Americans, Caribbean"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060718"
            ],
            "related": [],
            "id": "dg2015060714",
            "preferred": "Catalans",
            "alternate": [
                "Catalonians"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060831",
            "preferred": "Celts (European people)",
            "alternate": [
                "Kelts (European people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060731",
            "preferred": "Central Africans (Central African Republic)",
            "alternate": [
                "Centrafricains (Central African Republic)",
                "Centre-Africains (Central African Republic)",
                "Oubangais",
                "Oubanguiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060732",
            "preferred": "Chadians",
            "alternate": [
                "Tchadiens"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060574",
            "preferred": "Chaldean Catholics"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060587",
            "preferred": "Chemists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060743",
            "preferred": "Cherokee (North American people)",
            "alternate": [
                "Ahniyvwiya (North American people)",
                "Aniyunwiya (North American people)",
                "Aniyuwiya (North American people)",
                "Aniyvwiya (North American people)",
                "Chalaque (North American people)",
                "Cheraqui (North American people)",
                "Cheroqui (North American people)",
                "Jalagi (North American people)",
                "Tsa-la-gi (North American people)",
                "Tsalagi (North American people)",
                "Tsa\'ragi\' (North American people)",
                "Tslagi (North American people)",
                "Yunwiya (North American people)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060534",
            "preferred": "Chinese Americans",
            "alternate": [
                "Americans, Chinese"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060442",
            "preferred": "Christian Scientists"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060273"
            ],
            "related": [],
            "id": "dg2015060571",
            "preferred": "Church of Englanders"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060263"
            ],
            "related": [],
            "id": "dg2015060569",
            "preferred": "Church of Scotland members"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060401",
            "preferred": "Clergy",
            "alternate": [
                "Clergy members",
                "Members of the clergy",
                "Ministers (Clergy)",
                "Ordained clergy",
                "Ordained ministers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132",
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060745",
            "preferred": "Commercial artists",
            "alternate": [
                "Commercial designers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060733",
            "preferred": "Comorans",
            "alternate": [
                "Comoriens",
                "Comoris",
                "Comorois"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060746",
            "preferred": "Computer artists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060702",
            "preferred": "Computer industry employees"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060703",
            "preferred": "Construction industry employees"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060564",
            "preferred": "Copts",
            "alternate": [
                "Coptic Orthodox Church members"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060523",
            "preferred": "Copy editors",
            "alternate": [
                "Editors, Copy"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060479",
            "preferred": "Corporate lawyers",
            "alternate": [
                "Company lawyers",
                "Corporate counsel",
                "Counsel, Corporate",
                "Counsel, In-house",
                "In-house counsel"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060770",
            "preferred": "Costume designers",
            "alternate": [
                "Costumers, Theatrical",
                "Theatrical costumers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060405",
            "preferred": "Cowboys",
            "alternate": [
                "Buckaroos",
                "Buckeroos",
                "Cowhands",
                "Cowmen",
                "Cowpokes",
                "Cowpunchers",
                "Waddies (Cowboys)",
                "Wranglers (Cowboys)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060475",
            "preferred": "Criminal defense lawyers"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060535",
            "preferred": "Cuban Americans",
            "alternate": [
                "Americans, Cuban"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060635",
            "preferred": "Cubans",
            "alternate": [
                "Cubanos"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060536",
            "preferred": "Czech Americans",
            "alternate": [
                "Americans, Czech"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060537",
            "preferred": "Czechoslovak Americans",
            "alternate": [
                "Americans, Czechoslovak"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060625",
            "preferred": "Czechoslovaks",
            "alternate": [
                "Czechoslovakians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060626",
            "preferred": "Czechs"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060747",
            "preferred": "Dancers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060672",
            "preferred": "Deacons (Clergy)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060708"
            ],
            "related": [],
            "id": "dg2015060704",
            "preferred": "Dental hygienists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198"
            ],
            "related": [],
            "id": "dg2015060584",
            "preferred": "Dentists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060769",
            "preferred": "Designers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060414",
            "preferred": "Dictators",
            "alternate": [
                "Tyrants"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060735",
            "preferred": "Djiboutians",
            "alternate": [
                "Djiboutiens",
                "Djiboutis"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060832",
            "preferred": "Dravidians (Indic people)"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060256"
            ],
            "related": [],
            "id": "dg2015060443",
            "preferred": "Druzes",
            "alternate": [
                "Darazis",
                "Druses",
                "Druzim",
                "Duru\u0304z",
                "Muwah\u0323h\u0323idu\u0304n (Druzes)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060538",
            "preferred": "Eastern European Americans",
            "alternate": [
                "Americans, Eastern European"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060471"
            ],
            "related": [],
            "id": "dg2015060473",
            "preferred": "Embroiderers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198"
            ],
            "related": [],
            "id": "dg2015060528",
            "preferred": "Emergency medical technicians",
            "alternate": [
                "Emergency paramedics",
                "EMTs (Emergency medical technicians)",
                "Paramedics, Emergency"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060529",
            "preferred": "Emergency physicians",
            "alternate": [
                "Emergency medicine physicians",
                "Emergency room physicians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060408",
            "preferred": "Emperors",
            "alternate": [
                "Czars",
                "Monarchs",
                "Sovereigns (Rulers)",
                "Tsars",
                "Tzars"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060409",
            "preferred": "Empresses",
            "alternate": [
                "Monarchs",
                "Sovereigns (Rulers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060481",
            "preferred": "Environmental lawyers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060736",
            "preferred": "Equatorial Guineans",
            "alternate": [
                "Ecuatoguineanos",
                "E\u0301quato-Guine\u0301ens",
                "Equatoguineans",
                "E\u0301quatoguine\u0301ens",
                "Guine\u0301ens-E\u0301quatorial"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060751"
            ],
            "related": [],
            "id": "dg2015060752",
            "preferred": "Etchers"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060573",
            "preferred": "Ethiopian Orthodox Tewahedo Church members",
            "alternate": [
                "Abyssinians (Ethiopian Orthodox Tewahedo Church members)",
                "Ethiopian Orthodox Church members",
                "Tewahdo members"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060484",
            "preferred": "Family lawyers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060771",
            "preferred": "Fashion designers",
            "alternate": [
                "Clothes designers",
                "Couturiers (Designers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060762"
            ],
            "related": [],
            "id": "dg2015060763",
            "preferred": "Fashion photographers"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060539",
            "preferred": "Filipino Americans",
            "alternate": [
                "Americans, Filipino"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060630",
            "preferred": "Filipinos",
            "alternate": [
                "Philippines residents"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060456",
            "preferred": "Fishers",
            "alternate": [
                "Anglers",
                "Fishermen"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060724"
            ],
            "related": [],
            "id": "dg2015060726",
            "preferred": "Flemings",
            "alternate": [
                "Flamands",
                "Vlamingen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060753",
            "preferred": "Folk artists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060492",
            "preferred": "Football players"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060737",
            "preferred": "French",
            "alternate": [
                "Franc\u0327ais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2015060784",
            "preferred": "French Guianese",
            "alternate": [
                "French Guianans",
                "Guianans, French",
                "Guianese, French",
                "Guyanais (French Guiana)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060785",
            "preferred": "French Polynesians",
            "alternate": [
                "Francopolyne\u0301siens",
                "Polyne\u0301siens (French Polynesia)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060786",
            "preferred": "Gabonese",
            "alternate": [
                "Gabonais"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060496",
            "preferred": "Gaelic football players"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060588",
            "preferred": "General practitioners (Physicians)",
            "alternate": [
                "General practice physicians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060134"
            ],
            "related": [],
            "id": "dg2015060759",
            "preferred": "Genre painters"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060698",
            "preferred": "Geologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060527",
            "preferred": "Geriatricians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477",
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060476",
            "preferred": "Government attorneys",
            "alternate": [
                "Government counsels",
                "Government lawyers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060477",
            "preferred": "Government employees",
            "alternate": [
                "Government officials",
                "Officials, Government"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060412",
            "preferred": "Governors"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060754"
            ],
            "related": [],
            "id": "dg2015060755",
            "preferred": "Graffiti artists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060757",
            "preferred": "Graphic artists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060772",
            "preferred": "Graphic designers"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060540",
            "preferred": "Greek Americans",
            "alternate": [
                "Americans, Greek"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060638",
            "preferred": "Greeks",
            "alternate": [
                "Helle\u0304nes"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060788",
            "preferred": "Guadeloupians",
            "alternate": [
                "Gouadeloupe\u0301ens",
                "Guadeloupe\u0301ens"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060855",
            "preferred": "Guarani\u0301 (South American people)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060787",
            "preferred": "Guernsey residents",
            "alternate": [
                "Channel Islanders",
                "Guernesiais",
                "Guernesyais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060789",
            "preferred": "Guineans",
            "alternate": [
                "Guine\u0301ens"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060853",
            "preferred": "Haida (North American people)",
            "alternate": [
                "Haidah (North American people)",
                "Haidai (North American people)",
                "Hidery (North American people)",
                "Hydah (North American people)",
                "Hyder (North American people)",
                "Kaigini (North American people)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060541",
            "preferred": "Haitian Americans",
            "alternate": [
                "Americans, Haitian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060631",
            "preferred": "Haitians",
            "alternate": [
                "Hai\u0308tiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060340"
            ],
            "related": [],
            "id": "dg2015060649",
            "preferred": "Hessians"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060554",
            "preferred": "Hmong Americans",
            "alternate": [
                "Americans, Hmong"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060553",
            "preferred": "Hmong (Asian people)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060486",
            "preferred": "Horse show judges",
            "alternate": [
                "Judges, Horse show"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060700",
            "preferred": "Hotel employees"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060460",
            "preferred": "Household employees",
            "alternate": [
                "Domestic employees",
                "Household staff",
                "Household workers",
                "Servants"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060460"
            ],
            "related": [],
            "id": "dg2015060461",
            "preferred": "Housekeepers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060715",
            "preferred": "Hungarians",
            "alternate": [
                "Magyarok"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060451",
            "preferred": "Hunters"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060716",
            "preferred": "Icelanders"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060712",
            "preferred": "Indians (India)",
            "alternate": [
                "East Indians",
                "Indians, East"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060773",
            "preferred": "Industrial designers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060483",
            "preferred": "Intellectual property lawyers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060776",
            "preferred": "Interior designers"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060543",
            "preferred": "Iranian Americans",
            "alternate": [
                "Americans, Iranian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060637",
            "preferred": "Iranians",
            "alternate": [
                "Iranis",
                "Persians"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060544",
            "preferred": "Irish Americans",
            "alternate": [
                "Americans, Irish"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060633",
            "preferred": "Irish (Republic of Ireland)",
            "alternate": [
                "E\u0301ireannaigh (Republic of Ireland)",
                "Ireland residents (Republic of Ireland)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060667",
            "preferred": "Italians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060734",
            "preferred": "Ivoirians",
            "alternate": [
                "Co\u0302te-d\'Ivoire residents",
                "Ivoiriens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060790",
            "preferred": "Jerseyans (Jersey)",
            "alternate": [
                "Channel Islanders",
                "Jersais",
                "Jerse\u0301ens",
                "Jerseyais",
                "Jerseyens",
                "Jerseyites (Jersey)",
                "Jersiais"
            ]
        },
        {
            "categories": [
                "ethnicity",
                "religion"
            ],
            "broader": [
                "dg2015060258",
                "dg2015060254"
            ],
            "related": [],
            "id": "dg2015060717",
            "preferred": "Jewish Christians",
            "alternate": [
                "Christian Jews",
                "Hebrew Christians",
                "Messianic Jews"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060521",
            "preferred": "Journalists",
            "alternate": [
                "Columnists",
                "Commentators (Journalists)",
                "Correspondents (Journalists)",
                "News analysts",
                "News writers",
                "Newspersons",
                "Newswriters",
                "Pressmen (Journalists)",
                "Reporters (Journalists)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477"
            ],
            "related": [],
            "id": "dg2015060485",
            "preferred": "Judges",
            "alternate": [
                "Chief justices",
                "Chief magistrates",
                "Justices",
                "Magistrate judges",
                "Magistrates"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060485"
            ],
            "related": [],
            "id": "dg2015060487",
            "preferred": "Justices of the peace",
            "alternate": [
                "Peace, Justices of the"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060406",
            "preferred": "Kings",
            "alternate": [
                "Czars",
                "Monarchs",
                "Tsars",
                "Tzars"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060471"
            ],
            "related": [],
            "id": "dg2015060472",
            "preferred": "Knitters"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060545",
            "preferred": "Korean Americans",
            "alternate": [
                "Americans, Korean"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060444",
            "preferred": "Kurds"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060833",
            "preferred": "Kyrgyz (Central Asian people)",
            "alternate": [
                "Khirgese (Central Asian people)",
                "Kirghis (Central Asian people)",
                "Kirghiz (Central Asian people)",
                "Kirgiz (Central Asian people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060863",
            "preferred": "Kyrgyzstanis"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060354"
            ],
            "related": [],
            "id": "dg2015060665",
            "preferred": "Lagos, Nigeria, residents"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060669",
            "preferred": "Lamas"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060866",
            "preferred": "Lamba (Congolese (Democratic Republic) and Zambian people)",
            "alternate": [
                "Balamba (African people)",
                "Chilamba (African people)",
                "Ichilamba (African people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060767",
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060768",
            "preferred": "Landscape architects",
            "alternate": [
                "Garden architects",
                "Landscape designers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060777",
            "preferred": "Landscape artists",
            "alternate": [
                "Landscapists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060701",
            "preferred": "Landscaping industry employees"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060617",
            "preferred": "Law librarians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060480",
            "preferred": "Legal-aid lawyers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060489",
            "preferred": "Legal assistants",
            "alternate": [
                "Paralegals"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477"
            ],
            "related": [],
            "id": "dg2015060417",
            "preferred": "Legislative employees"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060418",
            "preferred": "Legislators",
            "alternate": [
                "Lawgivers",
                "Lawmakers",
                "Members of parliaments",
                "Parliaments, Members of",
                "Solons"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060774",
            "preferred": "Lighting designers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060791",
            "preferred": "Luxembourgers",
            "alternate": [
                "Grand-Ducaux",
                "Luxembourgeois"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060792",
            "preferred": "Madagascans",
            "alternate": [
                "Made\u0301casses",
                "Malagasies",
                "Malagasy",
                "Malgaches"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060246"
            ],
            "related": [],
            "id": "dg2015060577",
            "preferred": "Mahayanists",
            "alternate": [
                "Madhayana Buddhists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319",
                "dg2015060737"
            ],
            "related": [],
            "id": "dg2015060795",
            "preferred": "Mahorais",
            "alternate": [
                "Mayotte residents",
                "Mayottais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060793",
            "preferred": "Malians",
            "alternate": [
                "Maliens"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060834",
            "preferred": "Maori (New Zealand people)",
            "alternate": [
                "Maoris (New Zealand people)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060835",
            "preferred": "Maratha (Indic people)",
            "alternate": [
                "Mahrati (Indic people)",
                "Mahratta (Indic people)",
                "Marathas (Indic people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060088"
            ],
            "related": [],
            "id": "dg2015060606",
            "preferred": "Marines"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060563",
            "preferred": "Maronites"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060794",
            "preferred": "Martinicans",
            "alternate": [
                "Martiniquais"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060858",
            "preferred": "Maya (Central American people)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060618",
            "preferred": "Medical librarians",
            "alternate": [
                "Health sciences librarians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060614",
            "preferred": "Medical scientists"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060562",
            "preferred": "Melchites",
            "alternate": [
                "Melkites"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060445",
            "preferred": "Mennonites"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2015060697",
            "preferred": "Meteorologists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060857",
            "preferred": "Mi\u0301skito (Central American people)",
            "alternate": [
                "Marquito (Central American people)",
                "Mi\u0301skitu (Central American people)",
                "Miskuto (Central American people)",
                "Mi\u0301squito (Central American people)",
                "Mosquito (Central American people)",
                "Mostique (Central American people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060811",
            "preferred": "Monegasques",
            "alternate": [
                "Monacans",
                "Monaco residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060836",
            "preferred": "Mongolians"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060446",
            "preferred": "Mormons",
            "alternate": [
                "Church of Jesus Christ of Latter-Day Saints members",
                "Latter-Day Saints"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060812",
            "preferred": "Moroccans",
            "alternate": [
                "Magha\u0304ribah",
                "Marocains"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060758",
            "preferred": "Mosaicists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060519",
            "preferred": "Motion picture editors",
            "alternate": [
                "Editors, Film",
                "Editors, Motion picture",
                "Film editors"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060134"
            ],
            "related": [],
            "id": "dg2015060754",
            "preferred": "Muralists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060750",
            "preferred": "Muscogee (North American people)",
            "alternate": [
                "Creek (North American people)",
                "Este Mvskokvlke (North American people)",
                "Lower Muscogee (North American people)",
                "Muscogee Creek (North American people)",
                "Muscogulge (North American people)",
                "Muskogee (North American people)",
                "Upper Muscogee (North American people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2015060779",
            "preferred": "Musicologists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060851",
            "preferred": "Navajo (North American people)",
            "alternate": [
                "Dine\u0301 (North American people)",
                "Navaho (North American people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060471",
            "preferred": "Needleworkers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060813",
            "preferred": "New Caledonians",
            "alternate": [
                "Cale\u0301doniens",
                "Ne\u0301o-Cale\u0301doniens",
                "Ne\u0301ocale\u0301doniens"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060521"
            ],
            "related": [],
            "id": "dg2015060520",
            "preferred": "Newspaper editors",
            "alternate": [
                "Editors, Newspaper"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060826",
            "preferred": "Ni-Vanuatu",
            "alternate": [
                "Ne\u0301o-He\u0301bridais",
                "Ne\u0301ohe\u0301bridais",
                "Vanouatais",
                "Vanuatais",
                "Vanuatuans"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060854",
            "preferred": "Nipissing (North Amercian people)",
            "alternate": [
                "Nipissing Algonquin (North American people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373"
            ],
            "related": [],
            "id": "dg2015060865",
            "preferred": "Northern Irish",
            "alternate": [
                "E\u0301ireannaigh (Northern Ireland)",
                "Irish (Northern Ireland)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060546",
            "preferred": "Norwegian Americans",
            "alternate": [
                "Americans, Norwegian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060634",
            "preferred": "Norwegians",
            "alternate": [
                "Nordmenn"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060207"
            ],
            "related": [],
            "id": "dg2015060585",
            "preferred": "Nurse practitioners"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060612"
            ],
            "related": [],
            "id": "dg2015060611",
            "preferred": "Nutritionists",
            "alternate": [
                "Dieticians",
                "Dietitians",
                "Dietists"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060837",
            "preferred": "Orthodox Eastern Church members",
            "alternate": [
                "Eastern Orthodox Church members",
                "Greek Orthodox Church members",
                "Orthodox Catholic Church members"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060852",
            "preferred": "Otomi\u0301 (North American people)"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060547",
            "preferred": "Pacific Islander Americans",
            "alternate": [
                "Americans, Pacific Islander"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060839"
            ],
            "related": [],
            "id": "dg2015060838",
            "preferred": "Parsis",
            "alternate": [
                "Parsees"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060842",
            "preferred": "Pashtuns (Asian people)",
            "alternate": [
                "Afghans (Asian people)",
                "Pakhtuns (Asian people)",
                "Pashtoons (Asian people)",
                "Pathans (Asian people)",
                "Pushtuns (Asian people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060860",
            "preferred": "Pastors"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060531",
            "preferred": "Pediatricians",
            "alternate": [
                "Paediatricians",
                "Pediatrists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060761",
            "preferred": "Performance artists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060522",
            "preferred": "Periodical editors",
            "alternate": [
                "Editors, Literary",
                "Editors, Magazine",
                "Editors, Periodical",
                "Literary editors",
                "Magazine editors"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060780",
            "preferred": "Personnel department employees",
            "alternate": [
                "Human resource professionals",
                "Human resources personnel"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060198"
            ],
            "related": [],
            "id": "dg2015060586",
            "preferred": "Pharmacists",
            "alternate": [
                "Apothecaries",
                "Chemists (Pharmacists)",
                "Clinical pharmacists",
                "Druggists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060762",
            "preferred": "Photographers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060708"
            ],
            "related": [],
            "id": "dg2015060575",
            "preferred": "Physical therapists",
            "alternate": [
                "Physiotherapists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613",
                "dg2015060614"
            ],
            "related": [],
            "id": "dg2015060612",
            "preferred": "Physiologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060597",
            "preferred": "Political scientists",
            "alternate": [
                "Scientists, Political"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060670",
            "preferred": "Popes"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060639",
            "preferred": "Portuguese",
            "alternate": [
                "Portugueses"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060556",
            "preferred": "Portuguese Americans",
            "alternate": [
                "Americans, Portuguese"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477"
            ],
            "related": [],
            "id": "dg2015060607",
            "preferred": "Postal service employees",
            "alternate": [
                "Carriers, Letter",
                "Carriers, Mail",
                "Clerks, Mail",
                "Clerks, Postal",
                "Letter carriers",
                "Mail carriers",
                "Mail clerks",
                "Mailmen",
                "Postal clerks",
                "Postal employees",
                "Postmen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060764",
            "preferred": "Potters",
            "alternate": [
                "Pottery makers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060415",
            "preferred": "Presidents (Rulers)",
            "alternate": [
                "Presidents"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060474",
            "preferred": "Press agents",
            "alternate": [
                "Publicists (Press agents)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060402",
            "preferred": "Priests"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060416",
            "preferred": "Prime ministers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060751",
            "preferred": "Printmakers"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060570",
            "preferred": "Protestant Church in the Netherlands members",
            "alternate": [
                "Nederlands Gereformeerde Kerken members",
                "Protestantse Kerk in Nederland members"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060447",
            "preferred": "Protestants"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060475",
                "dg2015060476"
            ],
            "related": [],
            "id": "dg2015060478",
            "preferred": "Public defenders",
            "alternate": [
                "Defenders, Public"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2015060616",
            "preferred": "Public librarians"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060246"
            ],
            "related": [],
            "id": "dg2015060576",
            "preferred": "Pure Land Buddhists"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060756",
            "preferred": "Pure\u0301pecha (North American people)",
            "alternate": [
                "Porhe\u0301 (North American people)",
                "P\'orhe\u0301pecha (North American people)",
                "P\'urhe (North American people)",
                "Phorhe\u0301pecha (North American people)",
                "P\'urhe\u0301pecha (North American people)",
                "Tarascan (North American people)",
                "Tarasco (North American people)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060448",
            "preferred": "Puritans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [
                "dg2015060858"
            ],
            "related": [],
            "id": "dg2015060856",
            "preferred": "Q\u02beeqchi\u02be (Central American people)",
            "alternate": [
                "Cacch\u02be (Central American people)",
                "Cacche\u0301 (Central American people)",
                "Kekchi\u02be (Central American people)",
                "Ketchi\u02be (Central American people)",
                "Quecchi\u02be (Central American people)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060449",
            "preferred": "Quakers",
            "alternate": [
                "Friends (Quakers)",
                "Friends Church members",
                "Religious Society of Friends members",
                "Society of Friends members"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2015060407",
            "preferred": "Queens",
            "alternate": [
                "Monarchs",
                "Sovereigns (Rulers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060471"
            ],
            "related": [],
            "id": "dg2015060470",
            "preferred": "Quiltmakers",
            "alternate": [
                "Quilt makers",
                "Quilters"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401",
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2015060403",
            "preferred": "Rabbis"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060567",
            "preferred": "Rastafarians",
            "alternate": [
                "Ras Tafaris",
                "Rastas"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060466",
            "preferred": "Receptionists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2015060861",
            "preferred": "Rectors"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060699",
            "preferred": "Restaurant employees"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319",
                "dg2015060737"
            ],
            "related": [],
            "id": "dg2015060816",
            "preferred": "Re\u0301unionese",
            "alternate": [
                "Bourbonnais",
                "Re\u0301unionais",
                "Re\u0301unionnais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060367"
            ],
            "related": [],
            "id": "dg2015060661",
            "preferred": "Fluminense",
            "alternate": [
                "Rio de Janeiro, Brazil, residents"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060572",
            "preferred": "Romanian Orthodox Church members",
            "alternate": [
                "Orthodox Church of Romania members"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060843",
            "preferred": "Romanians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060495",
            "preferred": "Rugby players",
            "alternate": [
                "Rugby football players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060413",
            "preferred": "Rulers",
            "alternate": [
                "Heads of state",
                "State, Heads of"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060568",
            "preferred": "Russian Orthodox Church members"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060814",
            "preferred": "Russians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060817",
            "preferred": "Rwandans",
            "alternate": [
                "Ruandais",
                "Rwandais",
                "Rwandese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060818",
            "preferred": "Saint-Barths",
            "alternate": [
                "Barthe\u0301lemois",
                "Saint-Babaths\u2019",
                "Saint-Barthiens",
                "Saint-Barthois",
                "Saint-Barts"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2015060819",
            "preferred": "Saint-Martinois (Collectivity of Saint Martin)",
            "alternate": [
                "Saintmartinois (Collectivity of Saint Martin)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060331"
            ],
            "related": [],
            "id": "dg2015060820",
            "preferred": "Saint-Pierrais et Miquelonnais",
            "alternate": [
                "Miquelonnais",
                "Saint-Pierrets"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060404",
            "preferred": "Scholars"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192",
                "dg2015060215"
            ],
            "related": [],
            "id": "dg2015060615",
            "preferred": "School librarians",
            "alternate": [
                "Media specialists (School librarians)",
                "School media specialists"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060548",
            "preferred": "Scottish Americans",
            "alternate": [
                "Americans, Scots",
                "Americans, Scottish",
                "Scots Americans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060765",
            "preferred": "Sculptors"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060464",
            "preferred": "Secretaries"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060821",
            "preferred": "Senegalese",
            "alternate": [
                "Se\u0301ne\u0301galais",
                "Se\u0301ne\u0301galiens"
            ]
        },
        {
            "categories": [
                "ethnicity",
                "religion"
            ],
            "broader": [
                "dg2015060254"
            ],
            "related": [],
            "id": "dg2015060581",
            "preferred": "Sephardim",
            "alternate": [
                "Sefardic Jews",
                "Sefardim",
                "Sephardic Jews"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060769"
            ],
            "related": [],
            "id": "dg2015060775",
            "preferred": "Set designers",
            "alternate": [
                "Scenographers (Set designers)",
                "Scenic designers",
                "Stage designers"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060566"
            ],
            "related": [],
            "id": "dg2015060565",
            "preferred": "Seventh-Day Adventists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060822",
            "preferred": "Seychellois"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060258"
            ],
            "related": [],
            "id": "dg2015060555",
            "preferred": "Shakers",
            "alternate": [
                "United Society of Believers in Christ\u2019s Second Appearing members"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060578",
            "preferred": "Shintoists"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060579",
            "preferred": "Sikhs",
            "alternate": [
                "Gurmat members"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060844",
            "preferred": "Sindhi (South Asian people)",
            "alternate": [
                "Sindis (South Asian people)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060549",
            "preferred": "Slovak Americans",
            "alternate": [
                "Americans, Slovak"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060632",
            "preferred": "Slovaks"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060640",
            "preferred": "Slovenes",
            "alternate": [
                "Slovenians"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060557",
            "preferred": "Slovenian Americans",
            "alternate": [
                "Americans, Slovene",
                "Americans, Slovenian",
                "Slovene Americans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2015060493",
            "preferred": "Soccer players",
            "alternate": [
                "Association football players",
                "English football players",
                "European football players",
                "Football players (Soccer players)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060829",
            "preferred": "South Africans",
            "alternate": [
                "Suid-Afrikaners"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060550",
            "preferred": "South Asian Americans",
            "alternate": [
                "Americans, South Asian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060627",
            "preferred": "South Asians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060815",
            "preferred": "Soviets"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060718",
            "preferred": "Spaniards",
            "alternate": [
                "Spanish"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060524",
            "preferred": "Story editors",
            "alternate": [
                "Editors, Story"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2015060530",
            "preferred": "Surgeons"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060250"
            ],
            "related": [],
            "id": "dg2015060845",
            "preferred": "Swami\u2013Narayanis",
            "alternate": [
                "Swaminarayanas"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060078"
            ],
            "related": [],
            "id": "dg2015060482",
            "preferred": "Tax lawyers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2015060766",
            "preferred": "Textile artists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060824",
            "preferred": "Togolese",
            "alternate": [
                "Togois",
                "Togolais"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060467"
            ],
            "related": [],
            "id": "dg2015060469",
            "preferred": "Tour guides (Persons)",
            "alternate": [
                "Cicerones",
                "Docents",
                "Escorts, Tourist",
                "Guides, Tourist",
                "Tour escorts",
                "Tourist escorts",
                "Tourist guides (Persons)",
                "Tourists\' guides (Persons)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060467",
            "preferred": "Tourism industry employees",
            "alternate": [
                "Tourism employees"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060451"
            ],
            "related": [],
            "id": "dg2015060452",
            "preferred": "Trappers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060467"
            ],
            "related": [],
            "id": "dg2015060468",
            "preferred": "Travel agents"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060825",
            "preferred": "Tunisians",
            "alternate": [
                "Ifrikiens",
                "Ifrikiyens",
                "Tunisiens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060847",
            "preferred": "Turkmen"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060846",
            "preferred": "Turks"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060667"
            ],
            "related": [],
            "id": "dg2015060655",
            "preferred": "Tuscans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060749",
            "preferred": "Tzotzil (North American people)",
            "alternate": [
                "Batsil K\'op (North American people)",
                "Tsotsil (North American people)",
                "Tzotsil (North American people)",
                "Tzotzil Maya (North American people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2015060848",
            "preferred": "Ukrainians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060460"
            ],
            "related": [],
            "id": "dg2015060463",
            "preferred": "Valets",
            "alternate": [
                "Manservants"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060455",
            "preferred": "Veterinarians",
            "alternate": [
                "Animal doctors",
                "Doctors, Animal"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060412"
            ],
            "related": [],
            "id": "dg2015060411",
            "preferred": "Viceroys"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2015060636",
            "preferred": "Vietnamese"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060551",
            "preferred": "Vietnamese Americans",
            "alternate": [
                "Americans, Vietnamese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737",
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2015060827",
            "preferred": "Wallis and Futuna Islanders",
            "alternate": [
                "Futunans",
                "Futuniens",
                "Wallisians",
                "Wallisiens",
                "Wallisiens et Futuniens"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060724"
            ],
            "related": [],
            "id": "dg2015060725",
            "preferred": "Walloons",
            "alternate": [
                "Waals",
                "Wallons"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060134"
            ],
            "related": [],
            "id": "dg2015060760",
            "preferred": "Watercolorists",
            "alternate": [
                "Water-colorists",
                "Water-colourists",
                "Watercolor painters",
                "Watercolour painters",
                "Watercolourists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373"
            ],
            "related": [],
            "id": "dg2015060849",
            "preferred": "Welsh",
            "alternate": [
                "Welch"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060552",
            "preferred": "West Indian Americans",
            "alternate": [
                "Americans, West Indian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060629",
            "preferred": "West Indians",
            "alternate": [
                "Caribbean Islanders",
                "Caribbean residents"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060456"
            ],
            "related": [],
            "id": "dg2015060457",
            "preferred": "Whalers"
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060583",
            "preferred": "Wiccans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060850",
            "preferred": "Yoruba (African people)",
            "alternate": [
                "Ede-Yoruba (African people)",
                "Yariba (African people)",
                "Yooba (African people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2015060867",
            "preferred": "Zambians",
            "alternate": [
                "Northern Rhodesians",
                "Rhodesians (Zambians)"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [],
            "related": [],
            "id": "dg2015060839",
            "preferred": "Zoroastrians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060028",
            "preferred": "Argentines",
            "alternate": [
                "Argentineans",
                "Argentinians",
                "Argentinos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060004",
            "preferred": "Burmese",
            "alternate": [
                "Myanmarese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060013",
            "preferred": "Danes",
            "alternate": [
                "Danskere",
                "Danskerne"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060026",
            "preferred": "Greek Australians",
            "alternate": [
                "Australians, Greek"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060001",
            "preferred": "Inuit (North American people)",
            "alternate": [
                "Innuit (North American people)",
                "Innuits (North American people)",
                "Inuits (North American people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060032",
            "preferred": "Kenyans",
            "alternate": [
                "Wakenya"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060011",
            "preferred": "Mi\u02bckmaq (North American people)",
            "alternate": [
                "Einu (North American people)",
                "L\u02bcnu (North American people)",
                "Mickmak (North American people)",
                "Mickmakis (North American people)",
                "Micmac (North American people)",
                "Migmac (North American people)",
                "Migmagi (North American people)",
                "Migmaq (North American people)",
                "Miigmaq (North American people)",
                "Miikmaq (North American people)",
                "Mikmakiques (North American people)",
                "Mikmaque (North American people)",
                "Mi\u2019kmaw (North American people)",
                "Souriquois (North American people)",
                "Taqamkukewa\u2019q (North American people)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060021",
            "preferred": "Music teachers",
            "alternate": [
                "Music educators",
                "Music pedagogues"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060010",
            "preferred": "New South Welshmen"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060019",
            "preferred": "Percussion teachers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060003",
            "preferred": "Singaporeans"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060030",
            "preferred": "Tanzanians",
            "alternate": [
                "Watanzania"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060005",
            "preferred": "Tasmanians",
            "alternate": [
                "Tassies",
                "Taswegians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060006",
            "preferred": "Thai",
            "alternate": [
                "Siamese",
                "Thais"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060031",
            "preferred": "Ugandans",
            "alternate": [
                "Waganda"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060027",
            "preferred": "Venezuelans",
            "alternate": [
                "Venezolanos"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060192"
            ],
            "related": [],
            "id": "dg2016060012",
            "preferred": "Young adult librarians",
            "alternate": [
                "Teen librarians",
                "Teen services librarians",
                "Young adult services librarians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060029",
            "preferred": "Zimbabweans",
            "alternate": [
                "Rhodesians (Zimbabweans)",
                "Southern Rhodesians",
                "Zimbabwe Rhodesians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060132"
            ],
            "related": [],
            "id": "dg2016060063",
            "preferred": "Actors",
            "alternate": [
                "Actresses",
                "Impersonators (Actors)",
                "Mummers (Actors)",
                "Play actors",
                "Players (Actors)",
                "Stage actors",
                "Thespians",
                "Thesps",
                "Troupers (Actors)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060068",
            "preferred": "Anthropology teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2016060041",
            "preferred": "Archaeologists",
            "alternate": [
                "Archeologists"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060065",
            "preferred": "Asian Australians",
            "alternate": [
                "Australians, Asian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060072",
            "preferred": "Austrians",
            "alternate": [
                "O\u0308sterreicher"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060329"
            ],
            "related": [],
            "id": "dg2016060036",
            "preferred": "Baja Californians (Baja California Peninsula)",
            "alternate": [
                "Bajacalifornianos (Baja California Peninsula)",
                "Canchanillas"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060329"
            ],
            "related": [],
            "id": "dg2016060037",
            "preferred": "Baja Californians (State of Baja California)",
            "alternate": [
                "Bajacalifornianos (State of Baja California)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060039",
            "preferred": "Balts",
            "alternate": [
                "Baltic States residents"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060017",
            "preferred": "Band directors",
            "alternate": [
                "Band leaders",
                "Bandleaders",
                "Directors, Band"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060094",
            "preferred": "Batswana",
            "alternate": [
                "Botswana residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060097",
            "preferred": "Bhutanese"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060081",
            "preferred": "Bolivians",
            "alternate": [
                "Bolivianos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060046",
            "preferred": "Bosnians",
            "alternate": [
                "Bosanci",
                "Bosnian-Herzegovinians",
                "Bosnians and Herzegovinians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060110",
            "preferred": "Bruneians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2016060069",
            "preferred": "Classicists",
            "alternate": [
                "Classical scholars",
                "Classicalists",
                "Classics scholars"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060087",
            "preferred": "Comics writers",
            "alternate": [
                "Comic book writers",
                "Comic strip writers",
                "Comicbook writers",
                "Graphic novel writers",
                "Graphic novelists",
                "Novel writers, Graphic",
                "Novelists, Graphic"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060022",
            "preferred": "Conductors (Music)",
            "alternate": [
                "Band leaders",
                "Bandleaders",
                "Maestri (Conductors)",
                "Maestros (Conductors)",
                "Music conductors"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060131"
            ],
            "related": [],
            "id": "dg2016060067",
            "preferred": "Cultural anthropologists",
            "alternate": [
                "Ethnologists",
                "Social anthropologists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060080",
            "preferred": "Dutch",
            "alternate": [
                "Dutchmen",
                "Hollanders",
                "Nederlanders"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060075",
            "preferred": "Economics teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060108",
            "preferred": "Environmental historians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060007",
            "preferred": "Estonians",
            "alternate": [
                "Eestlased",
                "Esthonians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060085",
            "preferred": "Fifth grade teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2016060098",
            "preferred": "Figure skaters",
            "alternate": [
                "Skaters, Figure"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060091",
            "preferred": "Film teachers",
            "alternate": [
                "Cinema studies teachers",
                "Film production teachers",
                "Film studies teachers",
                "Video studies teachers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060108"
            ],
            "related": [],
            "id": "dg2016060107",
            "preferred": "Fire historians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060038",
            "preferred": "Fisheries scientists",
            "alternate": [
                "Fishery scientists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060105",
            "preferred": "Food historians",
            "alternate": [
                "Cookery historians",
                "Cooking historians",
                "Culinary historians",
                "Foodways historians",
                "Gastronomical historians",
                "Gastronomy historians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060712"
            ],
            "related": [],
            "id": "dg2016060057",
            "preferred": "Goans",
            "alternate": [
                "Goanese",
                "Goenkars"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060066",
            "preferred": "Guyanese",
            "alternate": [
                "British Guianans",
                "British Guianese",
                "Guianans, British",
                "Guianese, British"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060047",
            "preferred": "Herzegovinians",
            "alternate": [
                "Bosnian-Herzegovinians",
                "Bosnians and Herzegovinians",
                "Hercegovci"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2016060077",
            "preferred": "Historians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060106",
            "preferred": "Historians of science",
            "alternate": [
                "Science historians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2016060100",
            "preferred": "Hockey players",
            "alternate": [
                "Ice hockey players"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060372"
            ],
            "related": [],
            "id": "dg2016060092",
            "preferred": "Hong Kongers",
            "alternate": [
                "Hong Kong Chinese",
                "Hong Kongese",
                "Hongkongese",
                "Xianggang ren"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060061",
            "preferred": "Indian Ocean Region residents",
            "alternate": [
                "Indian Ocean Rim residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060212",
            "preferred": "Irish"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060051",
            "preferred": "Israelis",
            "alternate": [
                "Yis\u0301re\u02bcelim"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060101",
            "preferred": "Jamaicans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060060",
            "preferred": "Japanese Peruvians",
            "alternate": [
                "Japoneses-peruanos",
                "Nipo-peruanos",
                "Peruanos japoneses",
                "Peruvians, Japanese"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060055",
            "preferred": "Lao (Asian people)",
            "alternate": [
                "Laos (Asian people)",
                "Laotian Tai (Asian people)",
                "Phou Lao (Asian people)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060054",
            "preferred": "Laotians",
            "alternate": [
                "Lao (Laotians)",
                "Laos (Laotians)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060009",
            "preferred": "Latvians",
            "alternate": [
                "Latvies\u030ci",
                "Lettish"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060008",
            "preferred": "Lithuanians",
            "alternate": [
                "Lietuviai"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060058",
            "preferred": "Macedonians",
            "alternate": [
                "Makedoncite",
                "Maqedonasit"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060044",
            "preferred": "Malawians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060052",
            "preferred": "Malaysians",
            "alternate": [
                "Rakyat Malaysia"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060104",
            "preferred": "Medievalists",
            "alternate": [
                "Mediaevalists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060050",
            "preferred": "Motion picture directors",
            "alternate": [
                "Directors, Film",
                "Directors, Motion picture",
                "Directors, Movie",
                "Film directors",
                "Filmmakers",
                "Movie directors",
                "Moviemakers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060111",
            "preferred": "Nepali",
            "alternate": [
                "Nepalese",
                "Nepalians",
                "Nepalis"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060071",
            "preferred": "North Koreans",
            "alternate": [
                "Koreans, North",
                "Pukchoso\u0306n inmindu\u0306l",
                "Pukhan saramdu\u0306l"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060329"
            ],
            "related": [],
            "id": "dg2016060053",
            "preferred": "Oaxacans",
            "alternate": [
                "Oaxaquen\u0303os"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060023",
            "preferred": "Orchestra directors",
            "alternate": [
                "Directors, Orchestra"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060001",
                "dg2015060002"
            ],
            "related": [],
            "id": "dg2016060064",
            "preferred": "Pacific Northwesterners",
            "alternate": [
                "Northwesterners, Pacific"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060020",
            "preferred": "Percussionists",
            "alternate": [
                "Percussion instrument players",
                "Percussion instrumentalists",
                "Percussion players"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060059",
            "preferred": "Peruvians",
            "alternate": [
                "Peruanos"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060045",
            "preferred": "Philosophy teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060048",
            "preferred": "Psychology teachers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060084",
            "preferred": "Queenslanders"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060372"
            ],
            "related": [],
            "id": "dg2016060070",
            "preferred": "Sichuanese",
            "alternate": [
                "Bashu ren",
                "Chuan ren",
                "Shu ren",
                "Sichuan ren",
                "Szechuanese",
                "Szechwanese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060095",
            "preferred": "Sierra Leoneans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060014",
            "preferred": "Singers",
            "alternate": [
                "Vocalists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060033",
            "preferred": "Sociologists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060096",
            "preferred": "Somalis",
            "alternate": [
                "Somalians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060073",
            "preferred": "South Koreans",
            "alternate": [
                "Koreans, South",
                "Namchoso\u0306n inmindu\u0306l",
                "Namhan saramdu\u0306l"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060086",
            "preferred": "South Vietnamese",
            "alternate": [
                "Vietnamese, South"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060043",
            "preferred": "Southern Africans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060103",
            "preferred": "Sri Lankan Canadians",
            "alternate": [
                "Canadians, Ceylonese",
                "Canadians, Sri Lankan",
                "Canadiens d\'origine sri-lankaise",
                "Ceylonese Canadians",
                "Sri-lankaise, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060056",
            "preferred": "Sri Lankans",
            "alternate": [
                "Ceylonese",
                "Lankans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060082",
            "preferred": "Sub-Saharan Africans",
            "alternate": [
                "Subsaharan Africans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060074",
            "preferred": "Swedes",
            "alternate": [
                "Svenskar",
                "Swedish"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060083",
            "preferred": "Taiwanese",
            "alternate": [
                "Formosans",
                "Taiwan ren"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060089",
            "preferred": "Ugandan Canadians",
            "alternate": [
                "Canadians, Ugandan",
                "Canadiens d\'origine ougandaise",
                "Ougandaise, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060078",
            "preferred": "Ulster Scots",
            "alternate": [
                "Albanaigh Uladh",
                "Scotch Irish",
                "Scots Irish",
                "Scots, Ulster",
                "Uladh-Albanaigh",
                "Ulster Irish",
                "Ulster-Scotch"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2016060212"
            ],
            "related": [],
            "id": "dg2016060079",
            "preferred": "Ulstermen",
            "alternate": [
                "Ulsterites",
                "Ultonians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060024",
            "preferred": "University and college faculty members",
            "alternate": [
                "Academicians",
                "Academics (University and college faculty members)",
                "College and university faculty members",
                "College teachers",
                "Faculty members, University and college",
                "Higher education teachers",
                "Lectors (University and college faculty members)",
                "Lecturers (University and college faculty members)",
                "Post-secondary teachers",
                "Postsecondary teachers",
                "Professors (University and college faculty members)",
                "University teachers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060062",
            "preferred": "Uruguayans",
            "alternate": [
                "Uruguayos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060090",
            "preferred": "Victorians (State of Victoria)",
            "alternate": [
                "Cabbage Gardeners (State of Victoria)",
                "Cabbage Patchers (State of Victoria)",
                "Cabbage Staters (State of Victoria)",
                "Gumsuckers (State of Victoria)",
                "Yabbies (State of Victoria)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060093",
            "preferred": "Vietnamese Australians",
            "alternate": [
                "Australians, Vietnamese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060165",
            "preferred": "Bahamians",
            "alternate": [
                "Bahamans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2016060112"
            ],
            "related": [],
            "id": "dg2016060159",
            "preferred": "Balinese"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060156",
            "preferred": "Barbadians",
            "alternate": [
                "Bajans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060712"
            ],
            "related": [],
            "id": "dg2016060164",
            "preferred": "Bihari"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060162",
            "preferred": "Montserratians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060667"
            ],
            "related": [],
            "id": "dg2016060138",
            "preferred": "Sicilians",
            "alternate": [
                "Siciliani"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060125",
            "preferred": "South Australians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2016060118",
            "preferred": "Theologians",
            "alternate": [
                "Theologists"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060155",
            "preferred": "Barbadian Canadians",
            "alternate": [
                "Bajan Canadians",
                "Barbadienne, Canadiens d\'origine",
                "Canadians, Bajan",
                "Canadians, Barbadian",
                "Canadiens d\'origine barbadienne"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2016060148",
            "preferred": "Belizeans",
            "alternate": [
                "Beliceans",
                "British Hondurans"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060149",
            "preferred": "Dominican Americans",
            "alternate": [
                "Americans, Dominican"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060112",
            "preferred": "Indonesians",
            "alternate": [
                "Orang Indonesia"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060163",
            "preferred": "Jamaican Canadians",
            "alternate": [
                "Canadians, Jamaican",
                "Canadiens d\'origine jamai\u0308quaine",
                "Jamai\u0308quaine, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "religion"
            ],
            "broader": [
                "dg2015060256"
            ],
            "related": [],
            "id": "dg2016060143",
            "preferred": "Sufis"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060137",
            "preferred": "Tobagonians",
            "alternate": [
                "Trinbagonians",
                "Trinibagonians",
                "Trinidad and Tobago residents",
                "Trinidadians and Tobagonians",
                "Trinis"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060130",
            "preferred": "Trinidadians",
            "alternate": [
                "Trinbagonians",
                "Trinibagonians",
                "Trinidad and Tobago residents",
                "Trinidadians and Tobagonians",
                "Trinis"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060347"
            ],
            "related": [],
            "id": "dg2016060310",
            "preferred": "Kansaijin",
            "alternate": [
                "Kansai-jin",
                "Kansaites"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060033"
            ],
            "related": [],
            "id": "dg2016060311",
            "preferred": "Medical sociologists",
            "alternate": [
                "Health sociologists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060119",
            "preferred": "Kentishmen",
            "alternate": [
                "Kent, England, residents",
                "Kentish men",
                "Men of Kent"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060160",
            "preferred": "Kittitians",
            "alternate": [
                "Kittitians and Nevisians",
                "Kitts\/Nevis Islanders",
                "Saint Christopher Islanders",
                "Saint Kitts and Nevis residents",
                "Saint Kitts Islanders",
                "St. Christopher Islanders",
                "St. Kitts Islanders"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060161",
            "preferred": "Nevisians",
            "alternate": [
                "Kittitians and Nevisians",
                "Kitts\/Nevis Islanders",
                "Nevis Islanders",
                "Saint Kitts and Nevis residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060147",
            "preferred": "Saint Lucians",
            "alternate": [
                "Lucians",
                "Saint Lucia Islanders",
                "Saint-Luciens",
                "St. Lucia Islanders",
                "St. Lucians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060151",
            "preferred": "Saint Martiners",
            "alternate": [
                "Saint Martin Islanders",
                "Sint Maarten Islanders",
                "Sint Maarteners",
                "St. Maarten Islanders",
                "St. Maarteners",
                "St. Martin Islanders",
                "St. Martiners"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060356"
            ],
            "related": [],
            "id": "dg2016060142",
            "preferred": "Western Australians",
            "alternate": [
                "West Australians",
                "Westralians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060718"
            ],
            "related": [],
            "id": "dg2016060365",
            "preferred": "Balearic Islanders",
            "alternate": [
                "Baleares",
                "Balearicos",
                "Balears",
                "Gimnesienses",
                "Islen\u0303os (Balearic Islands, Spain)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2016060288",
            "preferred": "Costa Ricans",
            "alternate": [
                "Costaricans",
                "Costarricenses",
                "Ticos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060246",
            "preferred": "Devonians",
            "alternate": [
                "Devonites"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060243",
            "preferred": "East Anglians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060180",
            "preferred": "Ecuadorians",
            "alternate": [
                "Ecuadorans",
                "Ecuadoreans",
                "Ecuatorianos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060239",
            "preferred": "Gambians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060233",
            "preferred": "Ghanaians",
            "alternate": [
                "Ghanians",
                "Gold Coasters (Ghanians)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060712"
            ],
            "related": [],
            "id": "dg2016060364",
            "preferred": "Keralites",
            "alternate": [
                "Malayalams (Keralites)",
                "Malayalees (Keralites)",
                "Malayalim (Keralites)",
                "Malayalis (Keralites)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060351",
            "preferred": "Kosovans",
            "alternate": [
                "Kosovacs",
                "Kosovars"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060265",
            "preferred": "Lancastrians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060245",
            "preferred": "Liberians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060374",
            "preferred": "Liechtensteiners"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060712"
            ],
            "related": [],
            "id": "dg2016060373",
            "preferred": "Maharashtrians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060355",
            "preferred": "Manx",
            "alternate": [
                "Isle of Man residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060263",
            "preferred": "Midlanders (England)"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2016060182",
            "preferred": "Nicaraguans",
            "alternate": [
                "Nicaragu\u0308enses"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060199",
            "preferred": "Paraguayans",
            "alternate": [
                "Paraguayos"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060333"
            ],
            "related": [],
            "id": "dg2016060188",
            "preferred": "Salvadorans",
            "alternate": [
                "El Salvador residents",
                "Salvadoreans",
                "Salvadoren\u0303os",
                "Salvadorians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060357"
            ],
            "related": [],
            "id": "dg2016060206",
            "preferred": "South Islanders",
            "alternate": [
                "Mainlanders (New Zealand)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060332"
            ],
            "related": [],
            "id": "dg2016060318",
            "preferred": "Surinamers",
            "alternate": [
                "Surinamese"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060712"
            ],
            "related": [],
            "id": "dg2016060372",
            "preferred": "Telanganites",
            "alternate": [
                "Telanganans",
                "Telanganians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060264",
            "preferred": "Yorkshiremen",
            "alternate": [
                "Tykes (Yorkshiremen)",
                "Yorkies (Yorkshiremen)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2016060325",
            "preferred": "Allergists",
            "alternate": [
                "Allergologists",
                "Allergy specialists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060272",
            "preferred": "Antiguans",
            "alternate": [
                "Antigua and Barbuda residents",
                "Antigua Islanders"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060321",
            "preferred": "Astronomers",
            "alternate": [
                "Astronomists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060357"
            ],
            "related": [],
            "id": "dg2016060207",
            "preferred": "Aucklanders"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060358",
            "preferred": "Azerbaijanis",
            "alternate": [
                "Azerbaidzhanis",
                "Azerbaijanians",
                "Azeries",
                "Azeris"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060273",
            "preferred": "Barbudans",
            "alternate": [
                "Antigua and Barbuda residents",
                "Barbuda Islanders"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060279",
            "preferred": "Basotho",
            "alternate": [
                "Lesothans",
                "Lesothoans"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060357"
            ],
            "related": [],
            "id": "dg2016060205",
            "preferred": "Cantabrians (New Zealand)",
            "alternate": [
                "Cantabs (New Zealand)",
                "Canterbury, New Zealand, residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060630"
            ],
            "related": [],
            "id": "dg2016060117",
            "preferred": "Cebuanos",
            "alternate": [
                "Cebu, Philippines, residents",
                "Cebuans",
                "Sugbuanons",
                "Sugbuhanons"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477"
            ],
            "related": [],
            "id": "dg2016060447",
            "preferred": "Culture ministers",
            "alternate": [
                "Arts ministers",
                "Cultural ministers",
                "Cultural secretaries",
                "Culture secretaries",
                "Heritage ministers",
                "Ministers of arts",
                "Ministers of culture",
                "Ministers of heritage",
                "Secretaries of culture"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060330"
            ],
            "related": [],
            "id": "dg2016060214",
            "preferred": "Fijians",
            "alternate": [
                "Fiji Islanders"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060521"
            ],
            "related": [],
            "id": "dg2016060443",
            "preferred": "Foreign correspondents"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060088"
            ],
            "related": [],
            "id": "dg2016060391",
            "preferred": "Generals"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060315",
            "preferred": "Geophysicists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060178"
            ],
            "related": [],
            "id": "dg2016060332",
            "preferred": "Geotechnical engineers",
            "alternate": [
                "Geotechs"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2016060185",
            "preferred": "Gynecologists",
            "alternate": [
                "Gynaecologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060439",
            "preferred": "Language teachers",
            "alternate": [
                "Foreign language teachers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060267",
            "preferred": "Maldivians",
            "alternate": [
                "Maldive Islanders"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060200",
            "preferred": "Mozambicans",
            "alternate": [
                "Moc\u0327ambicanos"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060530"
            ],
            "related": [],
            "id": "dg2016060441",
            "preferred": "Neurosurgeons",
            "alternate": [
                "Neurological surgeons"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060356",
            "preferred": "Pakistanis"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060294",
            "preferred": "Physicists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060321"
            ],
            "related": [],
            "id": "dg2016060322",
            "preferred": "Planetary scientists",
            "alternate": [
                "Planetary astronomers",
                "Planetologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060199"
            ],
            "related": [],
            "id": "dg2016060338",
            "preferred": "Psychiatrists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060211"
            ],
            "related": [],
            "id": "dg2016060271",
            "preferred": "Punk rock musicians"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060357",
            "preferred": "Southeast Asians",
            "alternate": [
                "South East Asians",
                "South Eastern Asians",
                "Southeastern Asians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060413"
            ],
            "related": [],
            "id": "dg2016060362",
            "preferred": "Sultans",
            "alternate": [
                "Sovereigns (Rulers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060444",
            "preferred": "Tabla players"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060521"
            ],
            "related": [],
            "id": "dg2016060446",
            "preferred": "Television journalists",
            "alternate": [
                "Broadcast journalists, Television",
                "Newscasters, Television",
                "Television broadcast journalists",
                "Television newscasters"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060357"
            ],
            "related": [],
            "id": "dg2016060213",
            "preferred": "Wellingtonians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060347",
            "preferred": "Art collectors",
            "alternate": [
                "Collectors, Art"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060255",
            "preferred": "Art critics",
            "alternate": [
                "Critics, Art"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060341",
            "preferred": "Art historians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060304"
            ],
            "related": [],
            "id": "dg2016060342",
            "preferred": "Art history teachers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2016060080",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060368",
            "preferred": "Arubans",
            "alternate": [
                "Arubanen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060430",
            "preferred": "Astronauts",
            "alternate": [
                "Cosmonauts"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060134",
            "preferred": "Aviation historians",
            "alternate": [
                "Aeronautical historians"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2016060247",
            "preferred": "Berkshiremen"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060394",
            "preferred": "Botanists",
            "alternate": [
                "Plant biologists",
                "Plant scientists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060370",
            "preferred": "Cheesemakers",
            "alternate": [
                "Cheese makers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060345",
            "preferred": "Conservationists",
            "alternate": [
                "Conservation scientists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060079"
            ],
            "related": [],
            "id": "dg2016060369",
            "preferred": "Dairy farmers",
            "alternate": [
                "Dairymen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060379",
            "preferred": "Dance historians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060452",
            "preferred": "Disc jockeys",
            "alternate": [
                "Deejays",
                "Disk jockeys",
                "DJs (Disc jockeys)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060201",
            "preferred": "Ecologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060240",
            "preferred": "Economists",
            "alternate": [
                "Analysts, Economic",
                "Economic analysts"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060192"
            ],
            "related": [],
            "id": "dg2016060197",
            "preferred": "Entomologists",
            "alternate": [
                "Insect biologists",
                "Insect scientists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060298",
            "preferred": "Entomology teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060240"
            ],
            "related": [],
            "id": "dg2016060283",
            "preferred": "Environmental economists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060192"
            ],
            "related": [],
            "id": "dg2016060196",
            "preferred": "Ethologists",
            "alternate": [
                "Animal behaviorists",
                "Animal behaviourists",
                "Behavioral scientists, Animal",
                "Behaviorists, Animal",
                "Behavioural scientists, Animal"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060334",
            "preferred": "Expert witnesses",
            "alternate": [
                "Skilled witnesses",
                "Witnesses, Expert",
                "Witnesses, Skilled"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060319",
            "preferred": "Figure skating coaches",
            "alternate": [
                "Coaches, Figure skating"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060381",
            "preferred": "First grade teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060178"
            ],
            "related": [],
            "id": "dg2016060331",
            "preferred": "Forensic engineers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060216",
            "preferred": "Genealogists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060383",
            "preferred": "Geography teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2016060302",
            "preferred": "Germanists",
            "alternate": [
                "German studies specialists"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060175",
            "preferred": "Grenadians",
            "alternate": [
                "Grenadans"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060192"
            ],
            "related": [],
            "id": "dg2016060191",
            "preferred": "Herpetologists",
            "alternate": [
                "Amphibian biologists",
                "Reptile biologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060304",
            "preferred": "History teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173",
                "dg2015060747"
            ],
            "related": [],
            "id": "dg2016060135",
            "preferred": "Ice dancers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060633"
            ],
            "related": [],
            "id": "dg2016060204",
            "preferred": "Leitrimers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060227",
            "preferred": "Linguistics teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060237",
            "preferred": "Literary agents",
            "alternate": [
                "Agents, Authors\'",
                "Agents, Literary",
                "Authors\' agents",
                "Representatives, Writers\'",
                "Writers\' representatives"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060241",
            "preferred": "Literature teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060434",
            "preferred": "Marimbists",
            "alternate": [
                "Marimba players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060286",
            "preferred": "Marine biologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060041"
            ],
            "related": [],
            "id": "dg2016060174",
            "preferred": "Maritime archaeologists",
            "alternate": [
                "Marine archaeologists",
                "Nautical archaeologists",
                "Shipwreck archaeologists",
                "Underwater archaeologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060468",
            "preferred": "Microbiologists"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060277",
            "preferred": "Military historians",
            "alternate": [
                "War historians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060300",
            "preferred": "Missionaries",
            "alternate": [
                "Missioners"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060344",
            "preferred": "Naturalists",
            "alternate": [
                "Historians, Natural",
                "Natural historians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060077"
            ],
            "related": [],
            "id": "dg2016060278",
            "preferred": "Naval historians",
            "alternate": [
                "Navy historians",
                "War historians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060285",
            "preferred": "Oceanographers",
            "alternate": [
                "Marine scientists",
                "Ocean scientists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060192"
            ],
            "related": [],
            "id": "dg2016060203",
            "preferred": "Ornithologists",
            "alternate": [
                "Avian biologists",
                "Bird biologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060363",
            "preferred": "Oud players",
            "alternate": [
                "Oudists",
                "\u02bbU\u0304d players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060222",
            "preferred": "Political science teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060252"
            ],
            "related": [],
            "id": "dg2016060253",
            "preferred": "Provosts (University and college administrators)",
            "alternate": [
                "College and university provosts",
                "College provosts",
                "University provosts"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060450",
            "preferred": "Rappers",
            "alternate": [
                "Emcees (Rap musicians)",
                "Hip-hop musicians",
                "M.C.s (Rap musicians)",
                "MCs (Rap musicians)",
                "Rap musicians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060173"
            ],
            "related": [],
            "id": "dg2016060217",
            "preferred": "Roller derby skaters",
            "alternate": [
                "Players, Roller derby",
                "Roller derby players",
                "Skaters, Roller derby"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060150",
            "preferred": "Saint Vincentians",
            "alternate": [
                "Grenadine Islanders",
                "Saint Vincent Islanders",
                "St. Vincent Islanders",
                "St. Vincentians",
                "Vincentians"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060186",
            "preferred": "Sociology teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060081"
            ],
            "related": [],
            "id": "dg2016060266",
            "preferred": "Soil scientists",
            "alternate": [
                "Pedologists (Soil scientists)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060244",
            "preferred": "South Sudanese",
            "alternate": [
                "South Sudanis",
                "Southern Sudanese",
                "Southern Sudanis"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060216"
            ],
            "related": [],
            "id": "dg2016060382",
            "preferred": "Third grade teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060252",
            "preferred": "University and college administrators",
            "alternate": [
                "Administrators, University and college",
                "College administrators",
                "College and university administrators",
                "College and university officials",
                "College officials",
                "Officials, University and college",
                "University administrators",
                "University and college officials",
                "University officials"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060340"
            ],
            "related": [],
            "id": "dg2016060366",
            "preferred": "Westphalians",
            "alternate": [
                "Westfalen"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060192",
            "preferred": "Zoologists",
            "alternate": [
                "Animal biologists",
                "Wildlife biologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060525",
            "preferred": "Double bassists",
            "alternate": [
                "Bass players",
                "Bass viol players",
                "Bass violists",
                "Bassists",
                "Contrabass players",
                "Contrabassists",
                "Double bass players",
                "Stand-up bass players",
                "Stand-up bassists",
                "String bass players",
                "String bassists",
                "Upright bass players",
                "Upright bassists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060530",
            "preferred": "Plucked instrument players",
            "alternate": [
                "Fretted instrument players",
                "Plectral instrument players",
                "Plucked string instrument players",
                "Plucked stringed instrument players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060529",
            "preferred": "Plucked instrument teachers",
            "alternate": [
                "Fretted instrument teachers",
                "Plectral instrument teachers",
                "Plucked string instrument teachers",
                "Plucked stringed instrument teachers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060526",
            "preferred": "Sitar teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060524",
            "preferred": "Sitarists",
            "alternate": [
                "Sitar players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060527",
            "preferred": "Banjoists",
            "alternate": [
                "Banjo pickers",
                "Banjo players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060512",
            "preferred": "Baryton players",
            "alternate": [
                "Bariton players",
                "Barydon players",
                "Barytonists",
                "Lyra bastarda players",
                "Paradon players",
                "Paridon players",
                "Pariton players",
                "Viola di bordone players",
                "Viola paradon players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060477"
            ],
            "related": [],
            "id": "dg2016060476",
            "preferred": "Bass guitarists",
            "alternate": [
                "Bass guitar players",
                "Bass players (Guitarists)",
                "Bassists (Guitarists)",
                "Electric bass guitar players",
                "Electric bass guitarists",
                "Electric bassists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060613"
            ],
            "related": [],
            "id": "dg2016060132",
            "preferred": "Cell biologists",
            "alternate": [
                "Cytologists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060510",
            "preferred": "Cellists",
            "alternate": [
                "Bass violin players",
                "Cello players",
                "Violoncellists",
                "Violoncello players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2017060009",
            "preferred": "Clarinetists",
            "alternate": [
                "Clarinet players",
                "Clarinettists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060517",
            "preferred": "Clavichord teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060519",
            "preferred": "Clavichordists",
            "alternate": [
                "Clavichord players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2017060018",
            "preferred": "Drummers",
            "alternate": [
                "Drum players",
                "Drummists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060428",
            "preferred": "English horn players",
            "alternate": [
                "Cor anglais players",
                "English hornists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060391"
            ],
            "related": [],
            "id": "dg2016060417",
            "preferred": "Film composers",
            "alternate": [
                "Cinema composers",
                "Film score composers",
                "Film scorers",
                "Motion picture composers",
                "Movie composers",
                "Scorers, Film"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2017060017",
            "preferred": "Flute teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060422",
            "preferred": "Flutists",
            "alternate": [
                "Flautists",
                "Flute players",
                "Fluters (Musicians)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060014"
            ],
            "related": [],
            "id": "dg2016060423",
            "preferred": "Folk singers",
            "alternate": [
                "Folksingers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060391"
            ],
            "related": [],
            "id": "dg2016060516",
            "preferred": "Game music composers",
            "alternate": [
                "Computer game composers",
                "Computer game scorers (Composers)",
                "Game composers",
                "Game scorers (Composers)",
                "Game sound composers",
                "Scorers, Computer game (Composers)",
                "Scorers, Game (Composers)",
                "Scorers, Video game (Composers)",
                "Video game composers",
                "Video game scorers (Composers)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060477",
            "preferred": "Guitarists",
            "alternate": [
                "Guitar players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060420",
            "preferred": "Jazz musicians"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2017060019",
            "preferred": "Letterers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060427",
            "preferred": "Oboe teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060426",
            "preferred": "Oboists",
            "alternate": [
                "Oboe players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060014"
            ],
            "related": [],
            "id": "dg2016060424",
            "preferred": "Opera singers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060409",
            "preferred": "Pianists",
            "alternate": [
                "Forte-pianists",
                "Fortepianists",
                "Piano players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060421",
            "preferred": "Saxophonists",
            "alternate": [
                "Alto saxophonists",
                "Baritone saxophonists",
                "Saxophone players",
                "Soprano saxophonists",
                "Tenor saxophonists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060014"
            ],
            "related": [],
            "id": "dg2016060425",
            "preferred": "Sopranos (Singers)",
            "alternate": [
                "Sopranists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060491",
            "preferred": "Trombonists",
            "alternate": [
                "Trombone players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060521",
            "preferred": "Trumpeters",
            "alternate": [
                "Trumpet players",
                "Trumpetists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2016060511",
            "preferred": "Viol players",
            "alternate": [
                "Gamba players",
                "Gambists",
                "Viola da gamba players",
                "Violists da gamba",
                "Violists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2017060010",
            "preferred": "Viola players",
            "alternate": [
                "Violists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2017060011",
            "preferred": "Viola teachers"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060021"
            ],
            "related": [],
            "id": "dg2016060411",
            "preferred": "Violin teachers"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060346"
            ],
            "related": [],
            "id": "dg2017060062",
            "preferred": "A\u030alanders",
            "alternate": [
                "Ahvenanmaa Islanders",
                "A\u030aland Islanders"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373",
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2017060061",
            "preferred": "Anguillans"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060191"
            ],
            "related": [],
            "id": "dg2016060230",
            "preferred": "Archivists"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060373",
                "dg2015060331"
            ],
            "related": [],
            "id": "dg2017060063",
            "preferred": "Bermudians",
            "alternate": [
                "Bermuda Islanders",
                "Bermudans",
                "Onions (Bermuda Islands)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060404"
            ],
            "related": [],
            "id": "dg2017060050",
            "preferred": "Biblical scholars",
            "alternate": [
                "Bible scholars",
                "Biblicists (Biblical scholars)"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060737"
            ],
            "related": [],
            "id": "dg2017060064",
            "preferred": "Bretons",
            "alternate": [
                "Bretonants",
                "Bretonnes"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060484",
            "preferred": "Businesspeople",
            "alternate": [
                "Business people",
                "Business persons",
                "Businessmen",
                "Businesspersons",
                "Businesswomen",
                "Entrepreneurs"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2017060051",
            "preferred": "Korean Canadians",
            "alternate": [
                "Canadians, Korean",
                "Canadiens d\'origine core\u0301enne",
                "Core\u0301enne, Canadiens d\'origine"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060194",
            "preferred": "Museum curators",
            "alternate": [
                "Curators, Museum"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060386"
            ],
            "related": [],
            "id": "dg2017060046",
            "preferred": "Oxfordshiremen",
            "alternate": [
                "Oxfordshire men",
                "Oxonians (Oxfordshire, England)"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2017060057",
            "preferred": "Pi pa players",
            "alternate": [
                "Chinese lute players",
                "Pipa players",
                "Pipaists"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060474",
            "preferred": "Public safety dispatchers",
            "alternate": [
                "9-1-1 call takers",
                "9-1-1 dispatchers",
                "9-1-1 operators",
                "911 call takers",
                "911 dispatchers",
                "911 operators",
                "Ambulance dispatchers",
                "Dispatchers, Ambulance",
                "Dispatchers, Emergency",
                "Dispatchers, Fire",
                "Dispatchers, Law enforcement",
                "Dispatchers, Police",
                "Dispatchers, Police radio",
                "Dispatchers, Public safety",
                "Emergency communications operators",
                "Emergency dispatchers",
                "Fire dispatchers",
                "Law enforcement dispatchers",
                "Operators, Emergency communications",
                "Police dispatchers",
                "Police radio dispatchers"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060212"
            ],
            "related": [],
            "id": "dg2017060059",
            "preferred": "Santur players",
            "alternate": [
                "Sadouri players",
                "Santir players",
                "Santoor players",
                "Santoorists",
                "Santour players",
                "Santouri players",
                "Santuri players",
                "Santurists",
                "Sintir players (Santur)",
                "Tsintsila players"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060401"
            ],
            "related": [],
            "id": "dg2016060466",
            "preferred": "Vicars"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060205"
            ],
            "related": [],
            "id": "dg2016060513",
            "preferred": "Abbots"
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060350",
            "preferred": "Albanians",
            "alternate": [
                "Shqiptare\u0308t"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060154",
            "preferred": "Antiguan Americans",
            "alternate": [
                "Americans, Antiguan"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060376",
            "preferred": "Armenian Cypriots",
            "alternate": [
                "Cypriots, Armenian"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060340",
            "preferred": "Bangladeshi Americans",
            "alternate": [
                "Americans, Bangladeshi"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060467",
            "preferred": "Bosnian Swedes",
            "alternate": [
                "Swedes, Bosnian"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060259",
            "preferred": "Canadian Americans",
            "alternate": [
                "Americans, Canadian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335",
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060353",
            "preferred": "Cypriots",
            "alternate": [
                "Cyprians",
                "Cypriotes",
                "K\u0131br\u0131sl\u0131lar",
                "Kyprioi"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060157",
            "preferred": "Dominicans (Dominica)",
            "alternate": [
                "Dominica Islanders"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060629"
            ],
            "related": [],
            "id": "dg2016060153",
            "preferred": "Dominicans (Dominican Republic)",
            "alternate": [
                "Dominican Republicans",
                "Dominicanos (Dominican Republic)"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060235",
            "preferred": "Ethiopian Americans",
            "alternate": [
                "Americans, Ethiopian"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2017060029",
            "preferred": "Franks"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060260",
            "preferred": "German Americans",
            "alternate": [
                "Americans, German"
            ]
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060339",
            "preferred": "Lebanese French",
            "alternate": [
                "French, Lebanese"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060418"
            ],
            "related": [],
            "id": "dg2017060031",
            "preferred": "Senators",
            "alternate": [
                "Senate members"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060152",
            "preferred": "Serbs",
            "alternate": [
                "Serbians",
                "Srbi",
                "Srbijanci"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060477"
            ],
            "related": [],
            "id": "dg2016060515",
            "preferred": "Vice presidents (Government employees)"
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [],
            "related": [],
            "id": "dg2016060532",
            "preferred": "Weavers",
            "alternate": [
                "Hand-loom weavers",
                "Hand weavers",
                "Handloom weavers",
                "Handweavers"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060169",
            "preferred": "Bahrainis",
            "alternate": [
                "Bah\u0323rayni\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319",
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060168",
            "preferred": "Egyptians",
            "alternate": [
                "Mis\u0323ri\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060232",
            "preferred": "Emiratis",
            "alternate": [
                "Emirians",
                "Emiris",
                "Ima\u0304ra\u0304ti\u0304yu\u0304n",
                "United Arab Emirates residents"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060236",
            "preferred": "Eritreans",
            "alternate": [
                "Iritri\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060173",
            "preferred": "Jerusalemites",
            "alternate": [
                "Maqdisi\u0304yu\u0304n",
                "Yerushalmim"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060335",
            "preferred": "Kuwaitis",
            "alternate": [
                "Kuwayti\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2016060229",
            "preferred": "Maltese",
            "alternate": [
                "Maltin"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060184",
            "preferred": "Qataris",
            "alternate": [
                "Kataris",
                "Qat\u0323ari\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060166",
            "preferred": "Saudis",
            "alternate": [
                "Saudi Arabians",
                "Sa\u02bbu\u0304di\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060319"
            ],
            "related": [],
            "id": "dg2016060183",
            "preferred": "Sudanese",
            "alternate": [
                "Su\u0304da\u0304ni\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060171",
            "preferred": "Syrians",
            "alternate": [
                "Su\u0304ri\u0304yu\u0304n"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060335"
            ],
            "related": [],
            "id": "dg2016060195",
            "preferred": "Yemenis",
            "alternate": [
                "Yamani\u0304yu\u0304n",
                "Yemenites"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2016060484"
            ],
            "related": [],
            "id": "dg2017060276",
            "preferred": "Sports executives",
            "alternate": [
                "Executives, Sports"
            ]
        },
        {
            "categories": [
                "nationality"
            ],
            "broader": [
                "dg2015060334"
            ],
            "related": [],
            "id": "dg2017060182",
            "preferred": "Andorrans"
        },
        {
            "categories": [
                "ethnicity"
            ],
            "broader": [],
            "related": [],
            "id": "dg2017060284",
            "preferred": "Cambodian French",
            "alternate": [
                "Cambodgienne, Franc\u0327ais d\'origine",
                "Franc\u0327ais d\'origine cambodgienne",
                "French, Cambodian"
            ]
        },
        {
            "categories": [
                "occupation"
            ],
            "broader": [
                "dg2015060178"
            ],
            "related": [],
            "id": "dg2017060286",
            "preferred": "Industrial engineers"
        }
    ]}'
, true);

    $em = $this->getDoctrine()->getManager();
    $concepts = $this->getDoctrine()->getRepository(Concept::class);
    $conceptSources = $this->getDoctrine()->getRepository(ConceptSource::class);
    $categories = $this->getDoctrine()->getRepository(Category::class);
    $terms = $this->getDoctrine()->getRepository(Term::class);



// First Pass
//     Create concept
    foreach ($loc['terms'] as $concept) {
        $newConcept = new Concept();

        //Create preferred term
        $term = new Term();
        $term->setTermText($concept['preferred']);
        $term->setPreferred(true);
        $newConcept->addTerm($term);
        $em->persist($term);

        //create alternate terms
        $concept['alternate'] = $concept['alternate'] ?? [];
        foreach ($concept['alternate'] as $alternate) {
            $term = new Term();
            $term->setTermText($alternate);
            $term->setPreferred(false);
            $newConcept->addTerm($term);
            $em->persist($term);
        }

        // add concept-source with LoC_id as url
        $source = new ConceptSource();
        $source->setUrl($concept['id']);
        $newConcept->addConceptSource($source);
        $em->persist($newConcept);
        $em->persist($source);
    }

    // Second Pass
    foreach ($loc['terms'] as $lc_concept) {
        // find concept by concept-source
        $concept = $conceptSources
            ->findOneBy(['url' => $lc_concept['id']])
            ->getConcept();

        // Add Broader concepts
            foreach ($lc_concept['broader'] as $lc_id) {
                $broader = $conceptSources->findOneBy(['url' => $lc_id])->getConcept();
                $concept->addBroaderConcept($broader);
                $em->persist($broader);
            }

        // Add Related Concepts
            foreach ($lc_concept['related'] as $lc_id) {
                $related = $conceptSources
                    ->findOneBy(['url' => $lc_id])
                    ->getConcept();

                $concept->addRelatedConcept($related);
                $em->persist($related);
            }

        // Add Categories
            foreach ($lc_concept['categories'] as $lc_cat) {
                $category = $categories->findOneBy(['value' => $lc_cat]);

                $concept->addConceptCategory($category);
                $em->persist($category);
            }
            $em->persist($concept);
    }

    $em->flush();


/////////////
    return $this->json([
        'message' => 'Welcome to the concept creation API!',
        'path' => 'src/Controller/ConceptController.php',
    ]);
}
