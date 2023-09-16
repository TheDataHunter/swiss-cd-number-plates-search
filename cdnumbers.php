<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD NUMBERS</title>
    <style>
        body {
            margin: 0;
            font-family: 'Tahoma';
            background-color: black;
            color: White;
            max-width: 700px;
            margin: 0 auto !important;
            float: none !important;
        }

        header {
            background-color: #10a08c;
            color: white;
            padding: 24px 10%;
            font-size: 24px;
            text-align: center;
        }

        .header-info {
            font-size: 24px;
            align-self: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 10%;
        }

        .cdinput {
            display: flex;
            flex-direction: row;
            gap: 12px;
            padding: 10%;
        }

        input[type='number'] {
            width: 100%;
        }

        #resultContainer {
            font-size: 24px;
            text-align: center;
        }

        button {
            background-color: #10a08c;
            color: white;
            padding: 16px;
            border: unset;
            cursor: pointer;
            text-transform: uppercase;
        }

        .cdimg {
            width: 80%;
            align-self: center;
            border: 5px solid black;
        }

        .cd-sign {
            background-color: #10a08c;
            color: white;
            font-size: larger;
        }
    </style>
</head>

<body>
    <header>CD Numbers Search</header>

    <form onsubmit="calculate(); return false;">
        <span class="header-info">Search for your CD car plate numbers.</span>
        <img class="cdimg" src="/example_cd_plate.jpg">

        <div class="cdinput">
            <nobr><span class="cd-sign">CD</span> XX </nobr>
            <input name="firstnum" type="number" min="0" max="999" placeholder="Rank number">
            •
            <input name="secondnum" required type="number" min="0" max="999" placeholder="Country number">
        </div>

        <button>Search</button>

        <div id="resultContainer">
            <?php

            $cd_ar = array(
                1 => 'Vatican City',
                2 => 'Canada',
                3 => 'Sri Lanka',
                4 => 'Australia',
                5 => 'Iran',
                6 => 'Spain',
                7 => 'Israel',
                8 => 'Kuwait',
                9 => 'USA',
                10 => 'Brazil',
                11 => 'Mexico',
                12 => 'Ireland',
                13 => 'Japan',
                14 => 'New Zealand',
                15 => 'Liechtenstein',
                16 => 'Monaco',
                17 => 'South Africa',
                18 => 'Egypt',
                19 => 'Syria',
                20 => 'Algeria',
                21 => 'Argentina',
                22 => 'Austria',
                23 => 'Bolivia',
                24 => 'Chile',
                25 => 'Colombia',
                26 => 'South Korea',
                27 => 'Costa Rica',
                28 => 'Ivory Coast',
                29 => 'Cuba',
                30 => 'Ecuador',
                31 => 'Finland',
                32 => 'France',
                33 => 'Ghana',
                34 => 'Guatemala',
                35 => 'Haiti',
                36 => 'India',
                37 => 'Indonesia',
                38 => 'Iraq',
                39 => 'Italy',
                40 => 'Lebanon',
                41 => 'Panama',
                42 => 'Peru',
                43 => 'Philippines',
                44 => 'Portugal',
                45 => 'Tunisia',
                46 => 'Turkey',
                47 => 'Uruguay',
                48 => 'Venezuela',
                49 => 'Vietnam',
                50 => 'Democratic Republic of the Congo',
                51 => 'Germany',
                52 => 'Nigeria',
                53 => 'Pakistan',
                54 => 'Bulgaria',
                55 => 'People\'s Republic of China',
                56 => 'Hungary',
                57 => 'Poland',
                58 => 'Romania',
                59 => 'Serbia and Montenegro',
                60 => 'Czech Republic',
                61 => 'Saudi Arabia',
                62 => 'Belgium',
                63 => 'Denmark',
                64 => 'Greece',
                65 => 'Libya',
                66 => 'Morocco',
                67 => 'Norway',
                68 => 'Netherlands',
                69 => 'Sweden',
                70 => 'Thailand',
                71 => 'Jordan',
                72 => 'United Kingdom',
                73 => 'Russia',
                74 => 'Luxembourg',
                75 => 'Ethiopia',
                76 => 'Dominican Republic',
                77 => 'Paraguay',
                78 => 'El Salvador',
                79 => 'Taiwan',
                80 => 'Jamaica',
                81 => 'San Marino',
                82 => 'Trinidad and Tobago',
                83 => 'Yemen',
                84 => 'Gabon',
                85 => 'Malaysia',
                86 => 'Liberia',
                87 => 'Sudan',
                88 => 'Mongolia',
                89 => 'Malta',
                90 => 'Belarus',
                91 => 'Ukraine',
                92 => 'Iceland',
                93 => 'Democratic Republic of the Congo',
                94 => 'Chad',
                95 => 'Myanmar',
                96 => 'Senegal',
                97 => 'Nicaragua',
                98 => 'Fiji',
                99 => 'Honduras',
                100 => 'Bangladesh',
                101 => 'Cambodia',
                102 => 'North Korea',
                103 => 'Benin',
                104 => 'Cyprus',
                105 => 'Singapore',
                106 => 'Central African Republic',
                107 => 'Qatar',
                108 => 'Oman',
                109 => 'Cameroon',
                110 => 'Madagascar',
                111 => 'Kenya',
                112 => 'Somalia',
                113 => 'United Arab Emirates',
                114 => 'Tanzania',
                115 => 'Burundi',
                116 => 'Democratic Republic of Yemen (until 1990)',
                117 => 'Nepal',
                118 => 'Bahrain',
                119 => 'Afghanistan',
                120 => 'Rwanda',
                121 => 'Bhutan',
                122 => 'Republic of Guinea',
                123 => 'Zimbabwe',
                124 => 'Hong Kong',
                125 => 'Albania',
                126 => 'Brunei',
                127 => 'Dominica',
                128 => 'Sao Tome and Principe',
                129 => 'Equatorial Guinea',
                130 => 'Belize',
                131 => 'Mauritius',
                132 => 'Kyrgyzstan',
                133 => 'Slovenia',
                134 => 'Croatia',
                135 => 'Zambia',
                136 => 'Bosnia and Herzegovina',
                137 => 'Slovakia',
                138 => 'Lithuania',
                139 => 'Latvia',
                140 => 'Jordan (special)',
                141 => 'Angola',
                142 => 'North Macedonia',
                143 => 'The Gambia',
                144 => 'Armenia',
                145 => 'Estonia',
                146 => 'Uganda',
                147 => 'Kazakhstan',
                148 => 'Eritrea',
                149 => 'Georgia',
                150 => 'Mauritania',
                151 => 'Moldova',
                152 => 'Azerbaijan',
                153 => 'Lesotho',
                154 => 'Barbados',
                155 => 'Cape Verde',
                156 => 'Mozambique',
                157 => 'Andorra',
                158 => 'Botswana',
                159 => 'Mali',
                160 => 'Uzbekistan',
                161 => 'Burkina Faso',
                162 => 'Namibia',
                163 => 'Timor-Leste',
                164 => 'Saint Kitts and Nevis',
                165 => 'Swaziland',
                166 => 'Djibouti',
                167 => 'Maldives',
                168 => 'Montenegro',
                169 => 'Grenada',
                170 => 'Niger',
                171 => 'Tajikistan',
                172 => 'Unknown',
                173 => 'Kosovo',
                174 => 'Palestine',
                175 => 'Togo',
                176 => 'Comoros',
                177 => 'Turkmenistan',
                178 => 'Unknown',
                179 => 'Sierra Leone',
                180 => 'Unknown',
                181 => 'South Sudan',
                '01 ' => 'UN. Office Geneva (also UNHCR Members) (GE, VD, VS, ZH)',
                '02 ' => 'I.L.O. (GE, VD)',
                '03 ' => 'W.H.O. (GE, VD)',
                '04 ' => 'W.M.O. (GE, VD)',
                '05 ' => 'International Telecommunications Union (GE, VD)',
                '06 ' => 'World Intellectual Property Organization (GE, VD)',
                '07 ' => 'CERN (EU Org for Nuclear Research) (GE, VD)',
                '08 ' => 'W.T.O. (GE, VD)',
                '09 ' => 'E.F.T.A. (GE, VD)',
                '010 ' => 'I.O.M. (GE, VD)',
                '011 ' => 'International Bureau of Education (GE)',
                '012 ' => 'Inter-Parliamentary Union (GE, VD)',
                '013 ' => 'OIPC: International Civil Protection Organization (GE)',
                '014 ' => 'Association of Iron Ore Exporting Countries (?)',
                '015 ' => 'Universal Postal Union (BE, VD)',
                '016 ' => 'Intergovernmental Organization for International Carriage by Rail (BE)',
                '017 ' => 'A.D.B. (BS)',
                '018 ' => 'Independent Commission on Humanitarian Issues (?)',
                '019 ' => 'World Commission on Environment and Development (GE)',
                '020 ' => 'Bank for International Settlements (BL, BS)',
                '021 ' => 'ITCB: International Textiles and Clothing Bureau (GE)',
                '022 ' => 'South Commission, The (GE)',
                '023 ' => 'International Law Commission (?)',
                '024 ' => 'Agence de cooperation culturelle et technique (?)',
                '025 ' => 'New Independent Commission (?)',
                '026 ' => 'I.C.R.C. (International Committee of the Red Cross) (GE)',
                '027 ' => '? (GE, VD)',
                '028 ' => '? (GE)',
                '029 ' => 'ACICI: Cooperation and Information Agency for International Trade (GE)',
                '030 ' => 'International Federation of Red Cross and Red Crescent (GE, VD)',
                '031 ' => 'Advisory Center on WTO Law',
                '032 ' => 'OSCE Court: Organization for Security and Co-operation in Europe',
                '033 ' => 'CMIM: World Commission on International Migration',
                '035 ' => 'GFATM: Global Fund to Fight AIDS, Tuberculosis and Malaria',
                201 => 'European Union (GE, VD)',
                202 => 'Organization of American States',
                203 => 'Organization of Central American Economic Integration',
                204 => 'International Voluntary Service Secretariat (GE)',
                205 => 'African Groundnut Council',
                206 => 'AU (OAU) (GE)',
                207 => 'Commonwealth (GE)',
                208 => 'Arab League (GE)',
                209 => 'American Transportation Organization (GE, VE)',
                210 => 'Independent Development Commission (?)',
                211 => 'Organization of the Islamic Conference (GE, VD)',
                212 => 'G-15 (?)',
                213 => 'International Organization of the Francophonie (GE)',
                214 => 'International Bank for Reconstruction and Development Office in the UN and WTO (GE)',
                215 => 'African, Caribbean and Pacific Group (GE)',
                216 => 'Macau Economic and Trade Office to the WTO (GE)',
                217 => 'Permanent Delegation of the Pacific Islands Forum (GE)',
                250 => 'SALT (Strategic Arms Limitation Talks): USSR (GE)',
                251 => 'SALT (Strategic Arms Limitation Talks): USA (GE)',
                252 => 'SALT (Strategic Arms Limitation Talks): China (GE)',
                253 => '? (GE)',
                254 => 'Separate Customs Territories of Taiwan, Penghu, Kinmen and Matsu to the WTO (GE, VD)',
                302 => 'Canada (GE) 300/400 = international disarmament talks',
                304 => 'Australia (GE) 300/400 = international disarmament talks',
                309 => 'USA (GE) 300/400 = international disarmament talks',
                310 => 'Brazil (GE) 300/400 = international disarmament talks',
                313 => 'Japan (GE) 300/400 = international disarmament talks',
                324 => 'Chile (GE) 300/400 = international disarmament talks',
                331 => 'Finland (GE) 300/400 = international disarmament talks',
                332 => 'France (GE) 300/400 = international disarmament talks',
                336 => 'India (GE) 300/400 = international disarmament talks',
                339 => 'Italy (GE) 300/400 = international disarmament talks',
                351 => 'Germany (GE) 300/400 = international disarmament talks',
                355 => 'China (GE) 300/400 = international disarmament talks',
                362 => 'Belgium (GE) 300/400 = international disarmament talks',
                368 => 'Netherlands (GE) 300/400 = international disarmament talks',
                372 => 'United Kingdom (GE) 300/400 = international disarmament talks',
                373 => 'Russia (GE) 300/400 = international disarmament talks',
                500 => 'CH EDA Agents of WTO (GE) 500/600/700 W.T.O.',
                502 => 'Canada (GE) 500/600/700 W.T.O.',
                504 => 'Australia (GE) 500/600/700 W.T.O.',
                509 => 'USA (GE) 500/600/700 W.T.O.',
                510 => 'Brazil (GE) 500/600/700 W.T.O.',
                511 => 'Brazil (GE) 500/600/700 W.T.O.',
                514 => 'New Zealand (GE) 500/600/700 W.T.O.',
                524 => 'Chile (GE) 500/600/700 W.T.O.',
                525 => 'Colombia (GE) 500/600/700 W.T.O.',
                527 => 'Costa Rica (GE) 500/600/700 W.T.O.',
                530 => 'Ecuador (GE) 500/600/700 W.T.O.',
                534 => 'Guatemala (GE) 500/600/700 W.T.O.',
                535 => 'Haiti (GE) 500/600/700 W.T.O.',
                536 => 'India (GE) 500/600/700 W.T.O.',
                541 => 'Panama (GE) 500/600/700 W.T.O.',
                543 => 'Philippines (GE) 500/600/700 W.T.O.',
                546 => 'Turkey (GE) 500/600/700 W.T.O.',
                547 => 'Uruguay (GE) 500/600/700 W.T.O.',
                553 => 'Pakistan (GE) 500/600/700 W.T.O.',
                554 => 'Bulgaria (GE) 500/600/700 W.T.O.',
                555 => 'China (GE) 500/600/700 W.T.O.',
                556 => 'Hungary (GE) 500/600/700 W.T.O.',
                563 => 'Denmark (GE) 500/600/700 W.T.O.',
                564 => 'Greece (GE) 500/600/700 W.T.O.',
                567 => 'Norway (GE) 500/600/700 W.T.O.',
                570 => 'Thailand (GE) 500/600/700 W.T.O.',
                573 => 'Russia (GE) 500/600/700 W.T.O.',
                576 => 'Dominican Republic (GE) 500/600/700 W.T.O.',
                578 => 'El Salvador (GE) 500/600/700 W.T.O.',
                581 => 'San Marino (GE) 500/600/700 W.T.O.',
                585 => 'Malaysia (GE) 500/600/700 W.T.O.',
                599 => 'Honduras (GE) 500/600/700 W.T.O.',
                605 => 'Singapore (GE) 500/600/700 W.T.O.',
                662 => 'Namibia (GE) 500/600/700 W.T.O.',
                664 => 'Saint Kitts and Nevis (GE) 500/600/700 W.T.O.',
                701 => 'European Union (GE) 500/600/700 W.T.O.',
            );

            function log_search($firstnum, $country)
            {
                $file = 'cd_numbers_search_log.txt';
                $date = date('Y-m-d H:i:s');
                $ip_address = $_SERVER["REMOTE_ADDR"];
                $user_agent = $_SERVER["HTTP_USER_AGENT"];

                // Get IP geolocation data using an API
                $geo_data = json_decode(file_get_contents("http://ip-api.com/json/{$ip_address}?fields=country,city"), true);
                $geo_country = $geo_data['country'] ?? 'Unknown';
                $geo_city = $geo_data['city'] ?? 'Unknown';

                $data = $date . " | Country/Organization: " . $country . " | Diplomatic Corp Rank: " . $firstnum . " | IP Address: " . $ip_address . " | User Agent: " . $user_agent . " | Country: " . $geo_country . " | City: " . $geo_city . PHP_EOL;
                file_put_contents($file, $data, FILE_APPEND);

                return true;
            }

            if (isset($_GET['secondnum']) && $_GET['secondnum'] !== '') {
                $firstnum = intval($_GET['firstnum']);
                $secondnum = intval($_GET['secondnum']);

                if (array_key_exists($secondnum, $cd_ar)) {
                    $country = $cd_ar[$secondnum];
                    echo "Country/Organization: " . $country . " ";
                    echo "<br>";
                    if (empty($firstnum)) {
                        echo "Diplomatic Corp Rank: NO INPUT! ";
                    } else {
                        echo "Diplomatic Corp Rank: " . $firstnum;
                    }

                } else {
                    echo "Sorry no entry found!";
                }
                log_search($firstnum, $country);
            }

            ?>
        </div>
    </form>
</body>

</html>