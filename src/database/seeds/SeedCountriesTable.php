<?php

use Illuminate\Database\Seeder;
use Albertgpdev\SpainProvinceSeeder\Models\Country;

class SeedCountriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        $countries = array(
            ['Afganistán','AFGANA','AFG'],
            ['Albania','ALBANESA','ALB'],
            ['Alemania','ALEMANA','DEU'],
            ['Andorra','ANDORRANA','AND'],
            ['Angola','ANGOLEÑA','AGO'],
            ['Antiguay Barbuda','ANTIGUANA','ATG'],
            ['Arabia Saudita','SAUDÍ','SAU'],
            ['Argelia','ARGELINA','DZA'],
            ['Argentina','ARGENTINA','ARG'],
            ['Armenia','ARMENIA','ARM'],
            ['Aruba','ARUBEÑA','ABW'],
            ['Australia','AUSTRALIANA','AUS'],
            ['Austria','AUSTRIACA','AUT'],
            ['Azerbaiyán','AZERBAIYANA','AZE'],
            ['Bahamas','BAHAMEÑA','BHS'],
            ['Bangladés','BANGLADESÍ','BGD'],
            ['Barbados','BARBADENSE','BRB'],
            ['Baréin','BAREINÍ','BHR'],
            ['Bélgica','BELGA','BEL'],
            ['Belice','BELICEÑA','BLZ'],
            ['Benín','BENINÉSA','BEN'],
            ['Bielorrusia','BIELORRUSA','BLR'],
            ['Birmania','BIRMANA','MMR'],
            ['Bolivia','BOLIVIANA','BOL'],
            ['Bosniay Herzegovina','BOSNIA','BIH'],
            ['Botsuana','BOTSUANA','BWA'],
            ['Brasil','BRASILEÑA','BRA'],
            ['Brunéi','BRUNEANA','BRN'],
            ['Bulgaria','BÚLGARA','BGR'],
            ['Burkina Faso','BURKINÉS','BFA'],
            ['Burundi','BURUNDÉSA','BDI'],
            ['Bután','BUTANÉSA','BTN'],
            ['Cabo Verde','CABOVERDIANA','CPV'],
            ['Camboya','CAMBOYANA','KHM'],
            ['Camerún','CAMERUNESA','CMR'],
            ['Canadá','CANADIENSE','CAN'],
            ['Catar','CATARÍ','QAT'],
            ['Chad','CHADIANA','TCD'],
            ['Chile','CHILENA','CHL'],
            ['China','CHINA','CHN'],
            ['Chipre','CHIPRIOTA','CYP'],
            ['Ciudad del Vaticano','VATICANA','VAT'],
            ['Colombia','COLOMBIANA','COL'],
            ['Comoras','COMORENSE','COM'],
            ['Corea del Norte','NORCOREANA','PRK'],
            ['Corea del Sur','SURCOREANA','KOR'],
            ['Costa de Marfil','MARFILEÑA','CIV'],
            ['Costa Rica','COSTARRICENSE','CRI'],
            ['Croacia','CROATA','HRV'],
            ['Cuba','CUBANA','CUB'],
            ['Dinamarca','DANÉSA','DNK'],
            ['Dominica','DOMINIQUÉS','DMA'],
            ['Ecuador','ECUATORIANA','ECU'],
            ['Egipto','EGIPCIA','EGY'],
            ['El Salvador','SALVADOREÑA','SLV'],
            ['Emiratos Árabes Unidos','EMIRATÍ','ARE'],
            ['Eritrea','ERITREA','ERI'],
            ['Eslovaquia','ESLOVACA','SVK'],
            ['Eslovenia','ESLOVENA','SVN'],
            ['España','ESPAÑOLA','ESP'],
            ['Estados Unidos','ESTADOUNIDENSE','USA'],
            ['Estonia','ESTONIA','EST'],
            ['Etiopía','ETÍOPE','ETH'],
            ['Filipinas','FILIPINA','PHL'],
            ['Finlandia','FINLANDÉSA','FIN'],
            ['Fiyi','FIYIANA','FJI'],
            ['Francia','FRANCÉSA','FRA'],
            ['Gabón','GABONÉSA','GAB'],
            ['Gambia','GAMBIANA','GMB'],
            ['Georgia','GEORGIANA','GEO'],
            ['Gibraltar','GIBRALTAREÑA','GIB'],
            ['Ghana','GHANÉSA','GHA'],
            ['Granada','GRANADINA','GRD'],
            ['Grecia','GRIEGA','GRC'],
            ['Groenlandia','GROENLANDÉSA','GRL'],
            ['Guatemala','GUATEMALTECA','GTM'],
            ['Guineaecuatorial','ECUATOGUINEANA','GNQ'],
            ['Guinea','GUINEANA','GIN'],
            ['Guinea-Bisáu','GUINEANA','GNB'],
            ['Guyana','GUYANESA','GUY'],
            ['Haití','HAITIANA','HTI'],
            ['Honduras','HONDUREÑA','HND'],
            ['Hungría','HÚNGARA','HUN'],
            ['India','HINDÚ','IND'],
            ['Indonesia','INDONESIA','IDN'],
            ['Irak','IRAQUÍ','IRQ'],
            ['Irán','IRANÍ','IRN'],
            ['Irlanda','IRLANDÉSA','IRL'],
            ['Islandia','ISLANDÉSA','ISL'],
            ['Islas Cook','COOKIANA','COK'],
            ['Islas Marshall','MARSHALÉSA','MHL'],
            ['Islas Salomón','SALOMONENSE','SLB'],
            ['Israel','ISRAELÍ','ISR'],
            ['Italia','ITALIANA','ITA'],
            ['Jamaica','JAMAIQUINA','JAM'],
            ['Japón','JAPONÉSA','JPN'],
            ['Jordania','JORDANA','JOR'],
            ['Kazajistán','KAZAJA','KAZ'],
            ['Kenia','KENIATA','KEN'],
            ['Kirguistán','KIRGUISA','KGZ'],
            ['Kiribati','KIRIBATIANA','KIR'],
            ['Kuwait','KUWAITÍ','KWT'],
            ['Laos','LAOSIANA','LAO'],
            ['Lesoto','LESOTENSE','LSO'],
            ['Letonia','LETÓNA','LVA'],
            ['Líbano','LIBANÉSA','LBN'],
            ['Liberia','LIBERIANA','LBR'],
            ['Libia','LIBIA','LBY'],
            ['Liechtenstein','LIECHTENSTEINIANA','LIE'],
            ['Lituania','LITUANA','LTU'],
            ['Luxemburgo','LUXEMBURGUÉSA','LUX'],
            ['Madagascar','MALGACHE','MDG'],
            ['Malasia','MALASIA','MYS'],
            ['Malaui','MALAUÍ','MWI'],
            ['Maldivas','MALDIVA','MDV'],
            ['Malí','MALIENSE','MLI'],
            ['Malta','MALTÉSA','MLT'],
            ['Marruecos','MARROQUÍ','MAR'],
            ['Martinica','MARTINIQUÉS','MTQ'],
            ['Mauricio','MAURICIANA','MUS'],
            ['Mauritania','MAURITANA','MRT'],
            ['México','MEXICANA','MEX'],
            ['Micronesia','MICRONESIA','FSM'],
            ['Moldavia','MOLDAVA','MDA'],
            ['Mónaco','MONEGASCA','MCO'],
            ['Mongolia','MONGOLA','MNG'],
            ['Montenegro','MONTENEGRINA','MNE'],
            ['Mozambique','MOZAMBIQUEÑA','MOZ'],
            ['Namibia','NAMIBIA','NAM'],
            ['Nauru','NAURUANA','NRU'],
            ['Nepal','NEPALÍ','NPL'],
            ['Nicaragua','NICARAGÜENSE','NIC'],
            ['Níger','NIGERINA','NER'],
            ['Nigeria','NIGERIANA','NGA'],
            ['Noruega','NORUEGA','NOR'],
            ['Nueva Zelanda','NEOZELANDÉSA','NZL'],
            ['Omán','OMANÍ','OMN'],
            ['Países Bajos','NEERLANDÉSA','NLD'],
            ['Pakistán','PAKISTANÍ','PAK'],
            ['Palaos','PALAUANA','PLW'],
            ['Palestina','PALESTINA','PSE'],
            ['Panamá','PANAMEÑA','PAN'],
            ['Papúa Nueva Guinea','PAPÚ','PNG'],
            ['Paraguay','PARAGUAYA','PRY'],
            ['Perú','PERUANA','PER'],
            ['Polonia','POLACA','POL'],
            ['Portugal','PORTUGUÉSA','PRT'],
            ['Puerto Rico','PUERTORRIQUEÑA','PRI'],
            ['Reino Unido','BRITÁNICA','GBR'],
            ['República Centroafricana','CENTROAFRICANA','CAF'],
            ['República Checa','CHECA','CZE'],
            ['República de Macedonia','MACEDONIA','MKD'],
            ['República del Congo','CONGOLEÑA','COG'],
            ['República Democrática del Congo','CONGOLEÑA','COD'],
            ['República Dominicana','DOMINICANA','DOM'],
            ['República Sudafricana','SUDAFRICANA','ZAF'],
            ['Ruanda','RUANDÉSA','RWA'],
            ['Rumanía','RUMANA','ROU'],
            ['Rusia','RUSA','RUS'],
            ['Samoa','SAMOANA','WSM'],
            ['San Cristóbal y Nieves','CRISTOBALEÑA','KNA'],
            ['San Marino','SANMARINENSE','SMR'],
            ['San Vicente y las Granadinas','SANVICENTINA','VCT'],
            ['Santa Lucía','SANTALUCENSE','LCA'],
            ['Santo Toméy Príncipe','SANTOTOMENSE','STP'],
            ['Senegal','SENEGALÉSA','SEN'],
            ['Serbia','SERBIA','SRB'],
            ['Seychelles','SEYCHELLENSE','SYC'],
            ['SierraLeona','SIERRALEONÉSA','SLE'],
            ['Singapur','SINGAPURENSE','SGP'],
            ['Siria','SIRIA','SYR'],
            ['Somalia','SOMALÍ','SOM'],
            ['SriLanka','CEILANÉSA','LKA'],
            ['Suazilandia','SUAZI','SWZ'],
            ['Sudán del Sur','SURSUDANÉSA','SSD'],
            ['Sudán','SUDANÉSA','SDN'],
            ['Suecia','SUECA','SWE'],
            ['Suiza','SUIZA','CHE'],
            ['Surinam','SURINAMESA','SUR'],
            ['Tailandia','TAILANDÉSA','THA'],
            ['Tanzania','TANZANA','TZA'],
            ['Tayikistán','TAYIKA','TJK'],
            ['Timor Oriental','TIMORENSE','TLS'],
            ['Togo','TOGOLÉSA','TGO'],
            ['Tonga','TONGANA','TON'],
            ['Trinidady Tobago','TRINITENSE','TTO'],
            ['Túnez','TUNECINA','TUN'],
            ['Turkmenistán','TURCOMANA','TKM'],
            ['Turquía','TURCA','TUR'],
            ['Tuvalu','TUVALUANA','TUV'],
            ['Ucrania','UCRANIANA','UKR'],
            ['Uganda','UGANDÉSA','UGA'],
            ['Uruguay','URUGUAYA','URY'],
            ['Uzbekistán','UZBEKA','UZB'],
            ['Vanuatu','VANUATUENSE','VUT'],
            ['Venezuela','VENEZOLANA','VEN'],
            ['Vietnam','VIETNAMITA','VNM'],
            ['Yemen','YEMENÍ','YEM'],
            ['Yibuti','YIBUTIANA','DJI'],
            ['Zambia','ZAMBIANA','ZMB'],
            ['Zimbabue','ZIMBABUENSE','ZWE']
        );

        // Create Spanish countries
        foreach ($countries as $key => $country) {
            Country::create([
                'slug' => str_slug($country[0]),
                'name' => $country[0],
                'demonym' => $country[1],
                'iso_code' => $country[2]

            ]);
        }
        
    }
}
