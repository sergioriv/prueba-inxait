<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deps =
        [
            [
                "code" => "05",
                "name" => "Antioquia",
                "cities" => [
                    [
                        "code" => "001", "name" => "Medellin"
                    ],
                    [
                        "code" => "002", "name" => "Abejorral"
                    ],
                    [
                        "code" => "004", "name" => "Abriaqui"
                    ],
                    [
                        "code" => "021", "name" => "Alejandria"
                    ],
                    [
                        "code" => "030", "name" => "Amaga"
                    ],
                    [
                        "code" => "031", "name" => "Amalfi"
                    ],
                    [
                        "code" => "034", "name" => "Andes"
                    ],
                    [
                        "code" => "036", "name" => "Angelopolis"
                    ],
                    [
                        "code" => "038", "name" => "Angostura"
                    ],
                    [
                        "code" => "040", "name" => "Anori"
                    ],
                    [
                        "code" => "042", "name" => "Antioquia"
                    ],
                    [
                        "code" => "044", "name" => "Anza"
                    ],
                    [
                        "code" => "045", "name" => "Apartado"
                    ],
                    [
                        "code" => "051", "name" => "Arboletes"
                    ],
                    [
                        "code" => "055", "name" => "Argelia"
                    ],
                    [
                        "code" => "059", "name" => "Armenia"
                    ],
                    [
                        "code" => "079", "name" => "Barbosa"
                    ],
                    [
                        "code" => "086", "name" => "Belmira"
                    ],
                    [
                        "code" => "088", "name" => "Bello"
                    ],
                    [
                        "code" => "091", "name" => "Betania"
                    ],
                    [
                        "code" => "093", "name" => "Betulia"
                    ],
                    [
                        "code" => "101", "name" => "Bolivar"
                    ],
                    [
                        "code" => "107", "name" => "Briceño"
                    ],
                    [
                        "code" => "113", "name" => "Buritica"
                    ],
                    [
                        "code" => "120", "name" => "Caceres"
                    ],
                    [
                        "code" => "125", "name" => "Caicedo"
                    ],
                    [
                        "code" => "129", "name" => "Caldas"
                    ],
                    [
                        "code" => "134", "name" => "Campamento"
                    ],
                    [
                        "code" => "138", "name" => "Cañasgordas"
                    ],
                    [
                        "code" => "142", "name" => "Caracoli"
                    ],
                    [
                        "code" => "145", "name" => "Caramanta"
                    ],
                    [
                        "code" => "147", "name" => "Carepa"
                    ],
                    [
                        "code" => "148", "name" => "Carmen de viboral"
                    ],
                    [
                        "code" => "150", "name" => "Carolina"
                    ],
                    [
                        "code" => "154", "name" => "Caucasia"
                    ],
                    [
                        "code" => "172", "name" => "Chigorodo"
                    ],
                    [
                        "code" => "190", "name" => "Cisneros"
                    ],
                    [
                        "code" => "197", "name" => "Cocorna"
                    ],
                    [
                        "code" => "206", "name" => "Concepcion"
                    ],
                    [
                        "code" => "209", "name" => "Concordia"
                    ],
                    [
                        "code" => "212", "name" => "Copacabana"
                    ],
                    [
                        "code" => "234", "name" => "Dabeiba"
                    ],
                    [
                        "code" => "237", "name" => "Don matias"
                    ],
                    [
                        "code" => "240", "name" => "Ebejico"
                    ],
                    [
                        "code" => "250", "name" => "El bagre"
                    ],
                    [
                        "code" => "264", "name" => "Entrerrios"
                    ],
                    [
                        "code" => "266", "name" => "Envigado"
                    ],
                    [
                        "code" => "282", "name" => "Fredonia"
                    ],
                    [
                        "code" => "284", "name" => "Frontino"
                    ],
                    [
                        "code" => "306", "name" => "Giraldo"
                    ],
                    [
                        "code" => "308", "name" => "Girardota"
                    ],
                    [
                        "code" => "310", "name" => "Gomez plata"
                    ],
                    [
                        "code" => "313", "name" => "Granada"
                    ],
                    [
                        "code" => "315", "name" => "Guadalupe"
                    ],
                    [
                        "code" => "318", "name" => "Guarne"
                    ],
                    [
                        "code" => "321", "name" => "Guatape"
                    ],
                    [
                        "code" => "347", "name" => "Heliconia"
                    ],
                    [
                        "code" => "353", "name" => "Hispania"
                    ],
                    [
                        "code" => "360", "name" => "Itagui"
                    ],
                    [
                        "code" => "361", "name" => "Ituango"
                    ],
                    [
                        "code" => "364", "name" => "Jardin"
                    ],
                    [
                        "code" => "368", "name" => "Jerico"
                    ],
                    [
                        "code" => "376", "name" => "La ceja"
                    ],
                    [
                        "code" => "380", "name" => "La estrella"
                    ],
                    [
                        "code" => "390", "name" => "La pintada"
                    ],
                    [
                        "code" => "400", "name" => "La union"
                    ],
                    [
                        "code" => "411", "name" => "Liborina"
                    ],
                    [
                        "code" => "425", "name" => "Maceo"
                    ],
                    [
                        "code" => "440", "name" => "Marinilla"
                    ],
                    [
                        "code" => "467", "name" => "Montebello"
                    ],
                    [
                        "code" => "475", "name" => "Murindo"
                    ],
                    [
                        "code" => "480", "name" => "Mutata"
                    ],
                    [
                        "code" => "483", "name" => "Nariño"
                    ],
                    [
                        "code" => "490", "name" => "Necocli"
                    ],
                    [
                        "code" => "495", "name" => "Nechi"
                    ],
                    [
                        "code" => "501", "name" => "Olaya"
                    ],
                    [
                        "code" => "541", "name" => "Peñol"
                    ],
                    [
                        "code" => "543", "name" => "Peque"
                    ],
                    [
                        "code" => "576", "name" => "Pueblorrico"
                    ],
                    [
                        "code" => "579", "name" => "Puerto berrio"
                    ],
                    [
                        "code" => "585", "name" => "Puerto nare (la magdalena)"
                    ],
                    [
                        "code" => "591", "name" => "Puerto triunfo"
                    ],
                    [
                        "code" => "604", "name" => "Remedios"
                    ],
                    [
                        "code" => "607", "name" => "Retiro"
                    ],
                    [
                        "code" => "615", "name" => "Rionegro"
                    ],
                    [
                        "code" => "628", "name" => "Sabanalarga"
                    ],
                    [
                        "code" => "631", "name" => "Sabaneta"
                    ],
                    [
                        "code" => "642", "name" => "Salgar"
                    ],
                    [
                        "code" => "647", "name" => "San andres"
                    ],
                    [
                        "code" => "649", "name" => "San carlos"
                    ],
                    [
                        "code" => "652", "name" => "San francisco"
                    ],
                    [
                        "code" => "656", "name" => "San jeronimo"
                    ],
                    [
                        "code" => "658", "name" => "San jose de la montaña"
                    ],
                    [
                        "code" => "659", "name" => "San juan de uraba"
                    ],
                    [
                        "code" => "660", "name" => "San luis"
                    ],
                    [
                        "code" => "664", "name" => "San pedro"
                    ],
                    [
                        "code" => "665", "name" => "San pedro de uraba"
                    ],
                    [
                        "code" => "667", "name" => "San rafael"
                    ],
                    [
                        "code" => "670", "name" => "San roque"
                    ],
                    [
                        "code" => "674", "name" => "San vicente"
                    ],
                    [
                        "code" => "679", "name" => "Santa barbara"
                    ],
                    [
                        "code" => "686", "name" => "Santa rosa de osos"
                    ],
                    [
                        "code" => "690", "name" => "Santo domingo"
                    ],
                    [
                        "code" => "697", "name" => "Santuario"
                    ],
                    [
                        "code" => "736", "name" => "Segovia"
                    ],
                    [
                        "code" => "756", "name" => "Sonson"
                    ],
                    [
                        "code" => "761", "name" => "Sopetran"
                    ],
                    [
                        "code" => "789", "name" => "Tamesis"
                    ],
                    [
                        "code" => "790", "name" => "Taraza"
                    ],
                    [
                        "code" => "792", "name" => "Tarso"
                    ],
                    [
                        "code" => "809", "name" => "Titiribi"
                    ],
                    [
                        "code" => "819", "name" => "Toledo"
                    ],
                    [
                        "code" => "837", "name" => "Turbo"
                    ],
                    [
                        "code" => "842", "name" => "Uramita"
                    ],
                    [
                        "code" => "847", "name" => "Urrao"
                    ],
                    [
                        "code" => "854", "name" => "Valdivia"
                    ],
                    [
                        "code" => "856", "name" => "Valparaiso"
                    ],
                    [
                        "code" => "858", "name" => "Vegachi"
                    ],
                    [
                        "code" => "861", "name" => "Venecia"
                    ],
                    [
                        "code" => "873", "name" => "Vigia del fuerte"
                    ],
                    [
                        "code" => "885", "name" => "Yali"
                    ],
                    [
                        "code" => "887", "name" => "Yarumal"
                    ],
                    [
                        "code" => "890", "name" => "Yolombo"
                    ],
                    [
                        "code" => "893", "name" => "Yondo"
                    ],
                    [
                        "code" => "895", "name" => "Zaragoza"
                    ]
                ]
            ],
            [
                "code" => "08",
                "name" => "Atlantico",
                "cities" => [
                    [
                        "code" => "001", "name" => "Barranquilla"
                    ],
                    [
                        "code" => "078", "name" => "Baranoa"
                    ],
                    [
                        "code" => "137", "name" => "Campo de la cruz"
                    ],
                    [
                        "code" => "141", "name" => "Candelaria"
                    ],
                    [
                        "code" => "296", "name" => "Galapa"
                    ],
                    [
                        "code" => "372", "name" => "Juan de acosta"
                    ],
                    [
                        "code" => "421", "name" => "Luruaco"
                    ],
                    [
                        "code" => "433", "name" => "Malambo"
                    ],
                    [
                        "code" => "436", "name" => "Manati"
                    ],
                    [
                        "code" => "520", "name" => "Palmar de varela"
                    ],
                    [
                        "code" => "549", "name" => "Piojo"
                    ],
                    [
                        "code" => "558", "name" => "Polo nuevo"
                    ],
                    [
                        "code" => "560", "name" => "Ponedera"
                    ],
                    [
                        "code" => "573", "name" => "Puerto colombia"
                    ],
                    [
                        "code" => "606", "name" => "Repelon"
                    ],
                    [
                        "code" => "634", "name" => "Sabanagrande"
                    ],
                    [
                        "code" => "638", "name" => "Sabanalarga"
                    ],
                    [
                        "code" => "675", "name" => "Santa lucia"
                    ],
                    [
                        "code" => "685", "name" => "Santo tomas"
                    ],
                    [
                        "code" => "758", "name" => "Soledad"
                    ],
                    [
                        "code" => "770", "name" => "Suan"
                    ],
                    [
                        "code" => "832", "name" => "Tubara"
                    ],
                    [
                        "code" => "849", "name" => "Usiacuri"
                    ]
                ]
            ],
            [
                "code" => "11",
                "name" => "Bogotá",
                "cities" => [
                    [
                        "code" => "001", "name" => "Bogotá d.c."
                    ],
                    [
                        "code" => "001", "name" => "Usaquen"
                    ],
                    [
                        "code" => "002", "name" => "Chapinero"
                    ],
                    [
                        "code" => "003", "name" => "Santa fe"
                    ],
                    [
                        "code" => "004", "name" => "San cristobal"
                    ],
                    [
                        "code" => "005", "name" => "Usme"
                    ],
                    [
                        "code" => "006", "name" => "Tunjuelito"
                    ],
                    [
                        "code" => "007", "name" => "Bosa"
                    ],
                    [
                        "code" => "008", "name" => "Kennedy"
                    ],
                    [
                        "code" => "009", "name" => "Fontibon"
                    ],
                    [
                        "code" => "010", "name" => "Engativa"
                    ],
                    [
                        "code" => "011", "name" => "Suba"
                    ],
                    [
                        "code" => "012", "name" => "Barrios unidos"
                    ],
                    [
                        "code" => "013", "name" => "Teusaquillo"
                    ],
                    [
                        "code" => "014", "name" => "Martires"
                    ],
                    [
                        "code" => "015", "name" => "Antonio nariño"
                    ],
                    [
                        "code" => "016", "name" => "Puente aranda"
                    ],
                    [
                        "code" => "017", "name" => "Candelaria"
                    ],
                    [
                        "code" => "018", "name" => "Rafael uribe"
                    ],
                    [
                        "code" => "019", "name" => "Ciudad bolivar"
                    ],
                    [
                        "code" => "020", "name" => "Sumapaz"
                    ]
                ]
            ],
            [
                "code" => "13",
                "name" => "Bolivar",
                "cities" => [
                    [
                        "code" => "001", "name" => "Cartagena"
                    ],
                    [
                        "code" => "006", "name" => "Achi"
                    ],
                    [
                        "code" => "030", "name" => "Altos del rosario"
                    ],
                    [
                        "code" => "042", "name" => "Arenal"
                    ],
                    [
                        "code" => "052", "name" => "Arjona"
                    ],
                    [
                        "code" => "062", "name" => "Arroyohondo"
                    ],
                    [
                        "code" => "074", "name" => "Barranco de loba"
                    ],
                    [
                        "code" => "140", "name" => "Calamar"
                    ],
                    [
                        "code" => "160", "name" => "Cantagallo"
                    ],
                    [
                        "code" => "188", "name" => "Cicuco"
                    ],
                    [
                        "code" => "212", "name" => "Cordoba"
                    ],
                    [
                        "code" => "222", "name" => "Clemencia"
                    ],
                    [
                        "code" => "244", "name" => "El carmen de bolivar"
                    ],
                    [
                        "code" => "248", "name" => "El guamo"
                    ],
                    [
                        "code" => "268", "name" => "El peñon"
                    ],
                    [
                        "code" => "300", "name" => "Hatillo de loba"
                    ],
                    [
                        "code" => "430", "name" => "Magangue"
                    ],
                    [
                        "code" => "433", "name" => "Mahates"
                    ],
                    [
                        "code" => "440", "name" => "Margarita"
                    ],
                    [
                        "code" => "442", "name" => "Maria la baja"
                    ],
                    [
                        "code" => "458", "name" => "Montecristo"
                    ],
                    [
                        "code" => "468", "name" => "Mompos"
                    ],
                    [
                        "code" => "473", "name" => "Morales"
                    ],
                    [
                        "code" => "549", "name" => "Pinillos"
                    ],
                    [
                        "code" => "580", "name" => "Regidor"
                    ],
                    [
                        "code" => "600", "name" => "Rio viejo"
                    ],
                    [
                        "code" => "620", "name" => "San cristobal"
                    ],
                    [
                        "code" => "647", "name" => "San estanislao"
                    ],
                    [
                        "code" => "650", "name" => "San fernando"
                    ],
                    [
                        "code" => "654", "name" => "San jacinto"
                    ],
                    [
                        "code" => "655", "name" => "San jacinto del cauca"
                    ],
                    [
                        "code" => "657", "name" => "San juan nepomuceno"
                    ],
                    [
                        "code" => "667", "name" => "San martin de loba"
                    ],
                    [
                        "code" => "670", "name" => "San pablo"
                    ],
                    [
                        "code" => "673", "name" => "Santa catalina"
                    ],
                    [
                        "code" => "683", "name" => "Santa rosa"
                    ],
                    [
                        "code" => "688", "name" => "Santa rosa del sur"
                    ],
                    [
                        "code" => "744", "name" => "Simiti"
                    ],
                    [
                        "code" => "760", "name" => "Soplaviento"
                    ],
                    [
                        "code" => "780", "name" => "Talaigua nuevo"
                    ],
                    [
                        "code" => "810", "name" => "Tiquisio (puerto rico)"
                    ],
                    [
                        "code" => "836", "name" => "Turbaco"
                    ],
                    [
                        "code" => "838", "name" => "Turbana"
                    ],
                    [
                        "code" => "873", "name" => "Villanueva"
                    ],
                    [
                        "code" => "894", "name" => "Zambrano"
                    ]
                ]
            ],
            [
                "code" => "15",
                "name" => "Boyaca",
                "cities" => [
                    [
                        "code" => "001", "name" => "Tunja"
                    ],
                    [
                        "code" => "022", "name" => "Almeida"
                    ],
                    [
                        "code" => "047", "name" => "Aquitania"
                    ],
                    [
                        "code" => "051", "name" => "Arcabuco"
                    ],
                    [
                        "code" => "087", "name" => "Belen"
                    ],
                    [
                        "code" => "090", "name" => "Berbeo"
                    ],
                    [
                        "code" => "092", "name" => "Beteitiva"
                    ],
                    [
                        "code" => "097", "name" => "Boavita"
                    ],
                    [
                        "code" => "104", "name" => "Boyaca"
                    ],
                    [
                        "code" => "106", "name" => "Briceño"
                    ],
                    [
                        "code" => "109", "name" => "Buenavista"
                    ],
                    [
                        "code" => "114", "name" => "Busbanza"
                    ],
                    [
                        "code" => "131", "name" => "Caldas"
                    ],
                    [
                        "code" => "135", "name" => "Campohermoso"
                    ],
                    [
                        "code" => "162", "name" => "Cerinza"
                    ],
                    [
                        "code" => "172", "name" => "Chinavita"
                    ],
                    [
                        "code" => "176", "name" => "Chiquinquira"
                    ],
                    [
                        "code" => "180", "name" => "Chiscas"
                    ],
                    [
                        "code" => "183", "name" => "Chita"
                    ],
                    [
                        "code" => "185", "name" => "Chitaraque"
                    ],
                    [
                        "code" => "187", "name" => "Chivata"
                    ],
                    [
                        "code" => "189", "name" => "Cienega"
                    ],
                    [
                        "code" => "204", "name" => "Combita"
                    ],
                    [
                        "code" => "212", "name" => "Coper"
                    ],
                    [
                        "code" => "215", "name" => "Corrales"
                    ],
                    [
                        "code" => "218", "name" => "Covarachia"
                    ],
                    [
                        "code" => "223", "name" => "Cubara"
                    ],
                    [
                        "code" => "224", "name" => "Cucaita"
                    ],
                    [
                        "code" => "226", "name" => "Cuitiva"
                    ],
                    [
                        "code" => "232", "name" => "Chiquiza"
                    ],
                    [
                        "code" => "236", "name" => "Chivor"
                    ],
                    [
                        "code" => "238", "name" => "Duitama"
                    ],
                    [
                        "code" => "244", "name" => "El cocuy"
                    ],
                    [
                        "code" => "248", "name" => "El espino"
                    ],
                    [
                        "code" => "272", "name" => "Firavitoba"
                    ],
                    [
                        "code" => "276", "name" => "Floresta"
                    ],
                    [
                        "code" => "293", "name" => "Gachantiva"
                    ],
                    [
                        "code" => "296", "name" => "Gameza"
                    ],
                    [
                        "code" => "299", "name" => "Garagoa"
                    ],
                    [
                        "code" => "317", "name" => "Guacamayas"
                    ],
                    [
                        "code" => "322", "name" => "Guateque"
                    ],
                    [
                        "code" => "325", "name" => "Guayata"
                    ],
                    [
                        "code" => "332", "name" => "Guican"
                    ],
                    [
                        "code" => "362", "name" => "Iza"
                    ],
                    [
                        "code" => "367", "name" => "Jenesano"
                    ],
                    [
                        "code" => "368", "name" => "Jerico"
                    ],
                    [
                        "code" => "377", "name" => "Labranzagrande"
                    ],
                    [
                        "code" => "380", "name" => "La capilla"
                    ],
                    [
                        "code" => "401", "name" => "La victoria"
                    ],
                    [
                        "code" => "403", "name" => "La uvita"
                    ],
                    [
                        "code" => "407", "name" => "Villa de leiva"
                    ],
                    [
                        "code" => "425", "name" => "Macanal"
                    ],
                    [
                        "code" => "442", "name" => "Maripi"
                    ],
                    [
                        "code" => "455", "name" => "Miraflores"
                    ],
                    [
                        "code" => "464", "name" => "Mongua"
                    ],
                    [
                        "code" => "466", "name" => "Mongui"
                    ],
                    [
                        "code" => "469", "name" => "Moniquira"
                    ],
                    [
                        "code" => "476", "name" => "Motavita"
                    ],
                    [
                        "code" => "480", "name" => "Muzo"
                    ],
                    [
                        "code" => "491", "name" => "Nobsa"
                    ],
                    [
                        "code" => "494", "name" => "Nuevo colon"
                    ],
                    [
                        "code" => "500", "name" => "Oicata"
                    ],
                    [
                        "code" => "507", "name" => "Otanche"
                    ],
                    [
                        "code" => "511", "name" => "Pachavita"
                    ],
                    [
                        "code" => "514", "name" => "Paez"
                    ],
                    [
                        "code" => "516", "name" => "Paipa"
                    ],
                    [
                        "code" => "518", "name" => "Pajarito"
                    ],
                    [
                        "code" => "522", "name" => "Panqueba"
                    ],
                    [
                        "code" => "531", "name" => "Pauna"
                    ],
                    [
                        "code" => "533", "name" => "Paya"
                    ],
                    [
                        "code" => "537", "name" => "Paz del rio"
                    ],
                    [
                        "code" => "542", "name" => "Pesca"
                    ],
                    [
                        "code" => "550", "name" => "Pisba"
                    ],
                    [
                        "code" => "572", "name" => "Puerto boyaca"
                    ],
                    [
                        "code" => "580", "name" => "Quipama"
                    ],
                    [
                        "code" => "599", "name" => "Ramiriqui"
                    ],
                    [
                        "code" => "600", "name" => "Raquira"
                    ],
                    [
                        "code" => "621", "name" => "Rondon"
                    ],
                    [
                        "code" => "632", "name" => "Saboya"
                    ],
                    [
                        "code" => "638", "name" => "Sachica"
                    ],
                    [
                        "code" => "646", "name" => "Samaca"
                    ],
                    [
                        "code" => "660", "name" => "San eduardo"
                    ],
                    [
                        "code" => "664", "name" => "San jose de pare"
                    ],
                    [
                        "code" => "667", "name" => "San luis de gaceno"
                    ],
                    [
                        "code" => "673", "name" => "San mateo"
                    ],
                    [
                        "code" => "676", "name" => "San miguel de sema"
                    ],
                    [
                        "code" => "681", "name" => "San pablo de borbur"
                    ],
                    [
                        "code" => "686", "name" => "Santana"
                    ],
                    [
                        "code" => "690", "name" => "Santa maria"
                    ],
                    [
                        "code" => "693", "name" => "Santa rosa de viterbo"
                    ],
                    [
                        "code" => "696", "name" => "Santa sofia"
                    ],
                    [
                        "code" => "720", "name" => "Sativanorte"
                    ],
                    [
                        "code" => "723", "name" => "Sativasur"
                    ],
                    [
                        "code" => "740", "name" => "Siachoque"
                    ],
                    [
                        "code" => "753", "name" => "Soata"
                    ],
                    [
                        "code" => "755", "name" => "Socota"
                    ],
                    [
                        "code" => "757", "name" => "Socha"
                    ],
                    [
                        "code" => "759", "name" => "Sogamoso"
                    ],
                    [
                        "code" => "761", "name" => "Somondoco"
                    ],
                    [
                        "code" => "762", "name" => "Sora"
                    ],
                    [
                        "code" => "763", "name" => "Sotaquira"
                    ],
                    [
                        "code" => "764", "name" => "Soraca"
                    ],
                    [
                        "code" => "774", "name" => "Susacon"
                    ],
                    [
                        "code" => "776", "name" => "Sutamarchan"
                    ],
                    [
                        "code" => "778", "name" => "Sutatenza"
                    ],
                    [
                        "code" => "790", "name" => "Tasco"
                    ],
                    [
                        "code" => "798", "name" => "Tenza"
                    ],
                    [
                        "code" => "804", "name" => "Tibana"
                    ],
                    [
                        "code" => "806", "name" => "Tibasosa"
                    ],
                    [
                        "code" => "808", "name" => "Tinjaca"
                    ],
                    [
                        "code" => "810", "name" => "Tipacoque"
                    ],
                    [
                        "code" => "814", "name" => "Toca"
                    ],
                    [
                        "code" => "816", "name" => "Togui"
                    ],
                    [
                        "code" => "820", "name" => "Topaga"
                    ],
                    [
                        "code" => "822", "name" => "Tota"
                    ],
                    [
                        "code" => "832", "name" => "Tunungua"
                    ],
                    [
                        "code" => "835", "name" => "Turmeque"
                    ],
                    [
                        "code" => "837", "name" => "Tuta"
                    ],
                    [
                        "code" => "839", "name" => "Tutasa"
                    ],
                    [
                        "code" => "842", "name" => "Umbita"
                    ],
                    [
                        "code" => "861", "name" => "Ventaquemada"
                    ],
                    [
                        "code" => "879", "name" => "Viracacha"
                    ],
                    [
                        "code" => "897", "name" => "Zetaquira"
                    ]
                ]
            ],
            [
                "code" => "17",
                "name" => "Caldas",
                "cities" => [
                    [
                        "code" => "001", "name" => "Manizales"
                    ],
                    [
                        "code" => "013", "name" => "Aguadas"
                    ],
                    [
                        "code" => "042", "name" => "Anserma"
                    ],
                    [
                        "code" => "050", "name" => "Aranzazu"
                    ],
                    [
                        "code" => "088", "name" => "Belalcazar"
                    ],
                    [
                        "code" => "174", "name" => "Chinchina"
                    ],
                    [
                        "code" => "272", "name" => "Filadelfia"
                    ],
                    [
                        "code" => "380", "name" => "La dorada"
                    ],
                    [
                        "code" => "388", "name" => "La merced"
                    ],
                    [
                        "code" => "433", "name" => "Manzanares"
                    ],
                    [
                        "code" => "442", "name" => "Marmato"
                    ],
                    [
                        "code" => "444", "name" => "Marquetalia"
                    ],
                    [
                        "code" => "446", "name" => "Marulanda"
                    ],
                    [
                        "code" => "486", "name" => "Neira"
                    ],
                    [
                        "code" => "495", "name" => "Norcasia"
                    ],
                    [
                        "code" => "513", "name" => "Pacora"
                    ],
                    [
                        "code" => "524", "name" => "Palestina"
                    ],
                    [
                        "code" => "541", "name" => "Pensilvania"
                    ],
                    [
                        "code" => "614", "name" => "Riosucio"
                    ],
                    [
                        "code" => "616", "name" => "Risaralda"
                    ],
                    [
                        "code" => "653", "name" => "Salamina"
                    ],
                    [
                        "code" => "662", "name" => "Samana"
                    ],
                    [
                        "code" => "665", "name" => "San jose"
                    ],
                    [
                        "code" => "777", "name" => "Supia"
                    ],
                    [
                        "code" => "867", "name" => "Victoria"
                    ],
                    [
                        "code" => "873", "name" => "Villamaria"
                    ],
                    [
                        "code" => "877", "name" => "Viterbo"
                    ]
                ]
            ],
            [
                "code" => "18",
                "name" => "Caqueta",
                "cities" => [
                    [
                        "code" => "001", "name" => "Florencia"
                    ],
                    [
                        "code" => "029", "name" => "Albania"
                    ],
                    [
                        "code" => "094", "name" => "Belen de los andaquies"
                    ],
                    [
                        "code" => "150", "name" => "Cartagena del chaira"
                    ],
                    [
                        "code" => "205", "name" => "Curillo"
                    ],
                    [
                        "code" => "247", "name" => "El doncello"
                    ],
                    [
                        "code" => "256", "name" => "El paujil"
                    ],
                    [
                        "code" => "410", "name" => "La montañita"
                    ],
                    [
                        "code" => "460", "name" => "Milan"
                    ],
                    [
                        "code" => "479", "name" => "Morelia"
                    ],
                    [
                        "code" => "592", "name" => "Puerto rico"
                    ],
                    [
                        "code" => "610", "name" => "San jose de fragua"
                    ],
                    [
                        "code" => "753", "name" => "San  vicente del caguan"
                    ],
                    [
                        "code" => "756", "name" => "Solano"
                    ],
                    [
                        "code" => "785", "name" => "Solita"
                    ],
                    [
                        "code" => "860", "name" => "Valparaiso"
                    ]
                ]
            ],
            [
                "code" => "19",
                "name" => "Cauca",
                "cities" => [
                    [
                        "code" => "001", "name" => "Popayan"
                    ],
                    [
                        "code" => "022", "name" => "Almaguer"
                    ],
                    [
                        "code" => "050", "name" => "Argelia"
                    ],
                    [
                        "code" => "075", "name" => "Balboa"
                    ],
                    [
                        "code" => "100", "name" => "Bolivar"
                    ],
                    [
                        "code" => "110", "name" => "Buenos aires"
                    ],
                    [
                        "code" => "130", "name" => "Cajibio"
                    ],
                    [
                        "code" => "137", "name" => "Caldono"
                    ],
                    [
                        "code" => "142", "name" => "Caloto"
                    ],
                    [
                        "code" => "212", "name" => "Corinto"
                    ],
                    [
                        "code" => "256", "name" => "El tambo"
                    ],
                    [
                        "code" => "290", "name" => "Florencia"
                    ],
                    [
                        "code" => "318", "name" => "Guapi"
                    ],
                    [
                        "code" => "355", "name" => "Inza"
                    ],
                    [
                        "code" => "364", "name" => "Jambalo"
                    ],
                    [
                        "code" => "392", "name" => "La sierra"
                    ],
                    [
                        "code" => "397", "name" => "La vega"
                    ],
                    [
                        "code" => "418", "name" => "Lopez (micay)"
                    ],
                    [
                        "code" => "450", "name" => "Mercaderes"
                    ],
                    [
                        "code" => "455", "name" => "Miranda"
                    ],
                    [
                        "code" => "473", "name" => "Morales"
                    ],
                    [
                        "code" => "513", "name" => "Padilla"
                    ],
                    [
                        "code" => "517", "name" => "Paez (belalcazar)"
                    ],
                    [
                        "code" => "532", "name" => "Patia (el bordo)"
                    ],
                    [
                        "code" => "533", "name" => "Piamonte"
                    ],
                    [
                        "code" => "548", "name" => "Piendamo"
                    ],
                    [
                        "code" => "573", "name" => "Puerto tejada"
                    ],
                    [
                        "code" => "585", "name" => "Purace (coconuco)"
                    ],
                    [
                        "code" => "622", "name" => "Rosas"
                    ],
                    [
                        "code" => "693", "name" => "San sebastian"
                    ],
                    [
                        "code" => "698", "name" => "Santander de quilichao"
                    ],
                    [
                        "code" => "701", "name" => "Santa rosa"
                    ],
                    [
                        "code" => "743", "name" => "Silvia"
                    ],
                    [
                        "code" => "760", "name" => "Sotara (paispamba)"
                    ],
                    [
                        "code" => "780", "name" => "Suarez"
                    ],
                    [
                        "code" => "807", "name" => "Timbio"
                    ],
                    [
                        "code" => "809", "name" => "Timbiqui"
                    ],
                    [
                        "code" => "821", "name" => "Toribio"
                    ],
                    [
                        "code" => "824", "name" => "Totoro"
                    ],
                    [
                        "code" => "845", "name" => "Villarica"
                    ]
                ]
            ],
            [
                "code" => "20",
                "name" => "Cesar",
                "cities" => [
                    [
                        "code" => "001", "name" => "Valledupar"
                    ],
                    [
                        "code" => "011", "name" => "Aguachica"
                    ],
                    [
                        "code" => "013", "name" => "Agustin codazzi"
                    ],
                    [
                        "code" => "032", "name" => "Astrea"
                    ],
                    [
                        "code" => "045", "name" => "Becerril"
                    ],
                    [
                        "code" => "060", "name" => "Bosconia"
                    ],
                    [
                        "code" => "175", "name" => "Chimichagua"
                    ],
                    [
                        "code" => "178", "name" => "Chiriguana"
                    ],
                    [
                        "code" => "228", "name" => "Curumani"
                    ],
                    [
                        "code" => "238", "name" => "El copey"
                    ],
                    [
                        "code" => "250", "name" => "El paso"
                    ],
                    [
                        "code" => "295", "name" => "Gamarra"
                    ],
                    [
                        "code" => "310", "name" => "Gonzalez"
                    ],
                    [
                        "code" => "383", "name" => "La gloria"
                    ],
                    [
                        "code" => "400", "name" => "La jagua ibirico"
                    ],
                    [
                        "code" => "443", "name" => "Manaure"
                    ],
                    [
                        "code" => "517", "name" => "Pailitas"
                    ],
                    [
                        "code" => "550", "name" => "Pelaya"
                    ],
                    [
                        "code" => "570", "name" => "Pueblo bello"
                    ],
                    [
                        "code" => "614", "name" => "Rio de oro"
                    ],
                    [
                        "code" => "621", "name" => "La paz (robles)"
                    ],
                    [
                        "code" => "710", "name" => "San alberto"
                    ],
                    [
                        "code" => "750", "name" => "San diego"
                    ],
                    [
                        "code" => "770", "name" => "San martin"
                    ],
                    [
                        "code" => "787", "name" => "Tamalameque"
                    ]
                ]
            ],
            [
                "code" => "23",
                "name" => "Córdoba",
                "cities" => [
                    [
                        "code" => "001", "name" => "Monteria"
                    ],
                    [
                        "code" => "068", "name" => "Ayapel"
                    ],
                    [
                        "code" => "079", "name" => "Buenavista"
                    ],
                    [
                        "code" => "090", "name" => "Canalete"
                    ],
                    [
                        "code" => "162", "name" => "Cerete"
                    ],
                    [
                        "code" => "168", "name" => "Chima"
                    ],
                    [
                        "code" => "182", "name" => "Chinu"
                    ],
                    [
                        "code" => "189", "name" => "Cienaga de oro"
                    ],
                    [
                        "code" => "300", "name" => "Cotorra"
                    ],
                    [
                        "code" => "350", "name" => "La apartada"
                    ],
                    [
                        "code" => "417", "name" => "Lorica"
                    ],
                    [
                        "code" => "419", "name" => "Los cordobas"
                    ],
                    [
                        "code" => "464", "name" => "Momil"
                    ],
                    [
                        "code" => "466", "name" => "Montelibano"
                    ],
                    [
                        "code" => "500", "name" => "Moñitos"
                    ],
                    [
                        "code" => "555", "name" => "Planeta rica"
                    ],
                    [
                        "code" => "570", "name" => "Pueblo nuevo"
                    ],
                    [
                        "code" => "574", "name" => "Puerto escondido"
                    ],
                    [
                        "code" => "580", "name" => "Puerto libertador"
                    ],
                    [
                        "code" => "586", "name" => "Purisima"
                    ],
                    [
                        "code" => "660", "name" => "Sahagun"
                    ],
                    [
                        "code" => "670", "name" => "San andres sotavento"
                    ],
                    [
                        "code" => "672", "name" => "San antero"
                    ],
                    [
                        "code" => "675", "name" => "San bernardo del viento"
                    ],
                    [
                        "code" => "678", "name" => "San carlos"
                    ],
                    [
                        "code" => "686", "name" => "San pelayo"
                    ],
                    [
                        "code" => "807", "name" => "Tierralta"
                    ],
                    [
                        "code" => "855", "name" => "Valencia"
                    ]
                ]
            ],
            [
                "code" => "25",
                "name" => "Cundinamarca",
                "cities" => [
                    [
                        "code" => "001", "name" => "Agua de dios"
                    ],
                    [
                        "code" => "019", "name" => "Alban"
                    ],
                    [
                        "code" => "035", "name" => "Anapoima"
                    ],
                    [
                        "code" => "040", "name" => "Anolaima"
                    ],
                    [
                        "code" => "053", "name" => "Arbelaez"
                    ],
                    [
                        "code" => "086", "name" => "Beltran"
                    ],
                    [
                        "code" => "095", "name" => "Bituima"
                    ],
                    [
                        "code" => "099", "name" => "Bojaca"
                    ],
                    [
                        "code" => "120", "name" => "Cabrera"
                    ],
                    [
                        "code" => "123", "name" => "Cachipay"
                    ],
                    [
                        "code" => "126", "name" => "Cajica"
                    ],
                    [
                        "code" => "148", "name" => "Caparrapi"
                    ],
                    [
                        "code" => "151", "name" => "Caqueza"
                    ],
                    [
                        "code" => "154", "name" => "Carmen de carupa"
                    ],
                    [
                        "code" => "168", "name" => "Chaguani"
                    ],
                    [
                        "code" => "175", "name" => "Chia"
                    ],
                    [
                        "code" => "178", "name" => "Chipaque"
                    ],
                    [
                        "code" => "181", "name" => "Choachi"
                    ],
                    [
                        "code" => "183", "name" => "Choconta"
                    ],
                    [
                        "code" => "200", "name" => "Cogua"
                    ],
                    [
                        "code" => "214", "name" => "Cota"
                    ],
                    [
                        "code" => "224", "name" => "Cucunuba"
                    ],
                    [
                        "code" => "245", "name" => "El colegio"
                    ],
                    [
                        "code" => "258", "name" => "El peñon"
                    ],
                    [
                        "code" => "260", "name" => "El rosal"
                    ],
                    [
                        "code" => "269", "name" => "Facatativa"
                    ],
                    [
                        "code" => "279", "name" => "Fomeque"
                    ],
                    [
                        "code" => "281", "name" => "Fosca"
                    ],
                    [
                        "code" => "286", "name" => "Funza"
                    ],
                    [
                        "code" => "288", "name" => "Fuquene"
                    ],
                    [
                        "code" => "290", "name" => "Fusagasuga"
                    ],
                    [
                        "code" => "293", "name" => "Gachala"
                    ],
                    [
                        "code" => "295", "name" => "Gachancipa"
                    ],
                    [
                        "code" => "297", "name" => "Gacheta"
                    ],
                    [
                        "code" => "299", "name" => "Gama"
                    ],
                    [
                        "code" => "307", "name" => "Girardot"
                    ],
                    [
                        "code" => "312", "name" => "Granada"
                    ],
                    [
                        "code" => "317", "name" => "Guacheta"
                    ],
                    [
                        "code" => "320", "name" => "Guaduas"
                    ],
                    [
                        "code" => "322", "name" => "Guasca"
                    ],
                    [
                        "code" => "324", "name" => "Guataqui"
                    ],
                    [
                        "code" => "326", "name" => "Guatavita"
                    ],
                    [
                        "code" => "328", "name" => "Guayabal de siquima"
                    ],
                    [
                        "code" => "335", "name" => "Guayabetal"
                    ],
                    [
                        "code" => "339", "name" => "Gutierrez"
                    ],
                    [
                        "code" => "368", "name" => "Jerusalen"
                    ],
                    [
                        "code" => "372", "name" => "Junin"
                    ],
                    [
                        "code" => "377", "name" => "La calera"
                    ],
                    [
                        "code" => "386", "name" => "La mesa"
                    ],
                    [
                        "code" => "394", "name" => "La palma"
                    ],
                    [
                        "code" => "398", "name" => "La peña"
                    ],
                    [
                        "code" => "402", "name" => "La vega"
                    ],
                    [
                        "code" => "407", "name" => "Lenguazaque"
                    ],
                    [
                        "code" => "426", "name" => "Macheta"
                    ],
                    [
                        "code" => "430", "name" => "Madrid"
                    ],
                    [
                        "code" => "436", "name" => "Manta"
                    ],
                    [
                        "code" => "438", "name" => "Medina"
                    ],
                    [
                        "code" => "473", "name" => "Mosquera"
                    ],
                    [
                        "code" => "483", "name" => "Nariño"
                    ],
                    [
                        "code" => "486", "name" => "Nemocon"
                    ],
                    [
                        "code" => "488", "name" => "Nilo"
                    ],
                    [
                        "code" => "489", "name" => "Nimaima"
                    ],
                    [
                        "code" => "491", "name" => "Nocaima"
                    ],
                    [
                        "code" => "506", "name" => "Venecia (ospina perez)"
                    ],
                    [
                        "code" => "513", "name" => "Pacho"
                    ],
                    [
                        "code" => "518", "name" => "Paime"
                    ],
                    [
                        "code" => "524", "name" => "Pandi"
                    ],
                    [
                        "code" => "530", "name" => "Paratebueno"
                    ],
                    [
                        "code" => "535", "name" => "Pasca"
                    ],
                    [
                        "code" => "572", "name" => "Puerto salgar"
                    ],
                    [
                        "code" => "580", "name" => "Puli"
                    ],
                    [
                        "code" => "592", "name" => "Quebradanegra"
                    ],
                    [
                        "code" => "594", "name" => "Quetame"
                    ],
                    [
                        "code" => "596", "name" => "Quipile"
                    ],
                    [
                        "code" => "599", "name" => "Apulo (rafael reyes)"
                    ],
                    [
                        "code" => "612", "name" => "Ricaurte"
                    ],
                    [
                        "code" => "645", "name" => "San  antonio del tequendama"
                    ],
                    [
                        "code" => "649", "name" => "San bernardo"
                    ],
                    [
                        "code" => "653", "name" => "San cayetano"
                    ],
                    [
                        "code" => "658", "name" => "San francisco"
                    ],
                    [
                        "code" => "662", "name" => "San juan de rioseco"
                    ],
                    [
                        "code" => "718", "name" => "Sasaima"
                    ],
                    [
                        "code" => "736", "name" => "Sesquile"
                    ],
                    [
                        "code" => "740", "name" => "Sibate"
                    ],
                    [
                        "code" => "743", "name" => "Silvania"
                    ],
                    [
                        "code" => "745", "name" => "Simijaca"
                    ],
                    [
                        "code" => "754", "name" => "Soacha"
                    ],
                    [
                        "code" => "758", "name" => "Sopo"
                    ],
                    [
                        "code" => "769", "name" => "Subachoque"
                    ],
                    [
                        "code" => "772", "name" => "Suesca"
                    ],
                    [
                        "code" => "777", "name" => "Supata"
                    ],
                    [
                        "code" => "779", "name" => "Susa"
                    ],
                    [
                        "code" => "781", "name" => "Sutatausa"
                    ],
                    [
                        "code" => "785", "name" => "Tabio"
                    ],
                    [
                        "code" => "793", "name" => "Tausa"
                    ],
                    [
                        "code" => "797", "name" => "Tena"
                    ],
                    [
                        "code" => "799", "name" => "Tenjo"
                    ],
                    [
                        "code" => "805", "name" => "Tibacuy"
                    ],
                    [
                        "code" => "807", "name" => "Tibirita"
                    ],
                    [
                        "code" => "815", "name" => "Tocaima"
                    ],
                    [
                        "code" => "817", "name" => "Tocancipa"
                    ],
                    [
                        "code" => "823", "name" => "Topaipi"
                    ],
                    [
                        "code" => "839", "name" => "Ubala"
                    ],
                    [
                        "code" => "841", "name" => "Ubaque"
                    ],
                    [
                        "code" => "843", "name" => "Ubate"
                    ],
                    [
                        "code" => "845", "name" => "Une"
                    ],
                    [
                        "code" => "851", "name" => "Utica"
                    ],
                    [
                        "code" => "862", "name" => "Vergara"
                    ],
                    [
                        "code" => "867", "name" => "Viani"
                    ],
                    [
                        "code" => "871", "name" => "Villagomez"
                    ],
                    [
                        "code" => "873", "name" => "Villapinzon"
                    ],
                    [
                        "code" => "875", "name" => "Villeta"
                    ],
                    [
                        "code" => "878", "name" => "Viota"
                    ],
                    [
                        "code" => "885", "name" => "Yacopi"
                    ],
                    [
                        "code" => "898", "name" => "Zipacon"
                    ],
                    [
                        "code" => "899", "name" => "Zipaquira"
                    ]
                ]
            ],
            [
                "code" => "27",
                "name" => "Choco",
                "cities" => [
                    [
                        "code" => "001", "name" => "Quibdo (san francisco de quibdo)"
                    ],
                    [
                        "code" => "006", "name" => "Acandi"
                    ],
                    [
                        "code" => "025", "name" => "Alto baudo (pie de pato)"
                    ],
                    [
                        "code" => "050", "name" => "Atrato"
                    ],
                    [
                        "code" => "073", "name" => "Bagado"
                    ],
                    [
                        "code" => "075", "name" => "Bahia solano (mutis)"
                    ],
                    [
                        "code" => "077", "name" => "Bajo baudo (pizarro)"
                    ],
                    [
                        "code" => "099", "name" => "Bojaya (bellavista)"
                    ],
                    [
                        "code" => "135", "name" => "Canton de san pablo (managru)"
                    ],
                    [
                        "code" => "205", "name" => "Condoto"
                    ],
                    [
                        "code" => "245", "name" => "El carmen de atrato"
                    ],
                    [
                        "code" => "250", "name" => "Litoral del bajo san juan (santa genoveva de docordo)"
                    ],
                    [
                        "code" => "361", "name" => "Istmina"
                    ],
                    [
                        "code" => "372", "name" => "Jurado"
                    ],
                    [
                        "code" => "413", "name" => "Lloro"
                    ],
                    [
                        "code" => "425", "name" => "Medio atrato"
                    ],
                    [
                        "code" => "430", "name" => "Medio baudo"
                    ],
                    [
                        "code" => "491", "name" => "Novita"
                    ],
                    [
                        "code" => "495", "name" => "Nuqui"
                    ],
                    [
                        "code" => "600", "name" => "Rioquito"
                    ],
                    [
                        "code" => "615", "name" => "Riosucio"
                    ],
                    [
                        "code" => "660", "name" => "San jose del palmar"
                    ],
                    [
                        "code" => "745", "name" => "Sipi"
                    ],
                    [
                        "code" => "787", "name" => "Tado"
                    ],
                    [
                        "code" => "800", "name" => "Unguia"
                    ],
                    [
                        "code" => "810", "name" => "Union panamericana"
                    ]
                ]
            ],
            [
                "code" => "41",
                "name" => "Huila",
                "cities" => [
                    [
                        "code" => "001", "name" => "Neiva"
                    ],
                    [
                        "code" => "006", "name" => "Acevedo"
                    ],
                    [
                        "code" => "013", "name" => "Agrado"
                    ],
                    [
                        "code" => "016", "name" => "Aipe"
                    ],
                    [
                        "code" => "020", "name" => "Algeciras"
                    ],
                    [
                        "code" => "026", "name" => "Altamira"
                    ],
                    [
                        "code" => "078", "name" => "Baraya"
                    ],
                    [
                        "code" => "132", "name" => "Campoalegre"
                    ],
                    [
                        "code" => "206", "name" => "Colombia"
                    ],
                    [
                        "code" => "244", "name" => "Elias"
                    ],
                    [
                        "code" => "298", "name" => "Garzon"
                    ],
                    [
                        "code" => "306", "name" => "Gigante"
                    ],
                    [
                        "code" => "319", "name" => "Guadalupe"
                    ],
                    [
                        "code" => "349", "name" => "Hobo"
                    ],
                    [
                        "code" => "357", "name" => "Iquira"
                    ],
                    [
                        "code" => "359", "name" => "Isnos (san jose de isnos)"
                    ],
                    [
                        "code" => "378", "name" => "La argentina"
                    ],
                    [
                        "code" => "396", "name" => "La plata"
                    ],
                    [
                        "code" => "483", "name" => "Nataga"
                    ],
                    [
                        "code" => "503", "name" => "Oporapa"
                    ],
                    [
                        "code" => "518", "name" => "Paicol"
                    ],
                    [
                        "code" => "524", "name" => "Palermo"
                    ],
                    [
                        "code" => "530", "name" => "Palestina"
                    ],
                    [
                        "code" => "548", "name" => "Pital"
                    ],
                    [
                        "code" => "551", "name" => "Pitalito"
                    ],
                    [
                        "code" => "615", "name" => "Rivera"
                    ],
                    [
                        "code" => "660", "name" => "Saladoblanco"
                    ],
                    [
                        "code" => "668", "name" => "San agustin"
                    ],
                    [
                        "code" => "676", "name" => "Santa maria"
                    ],
                    [
                        "code" => "770", "name" => "Suaza"
                    ],
                    [
                        "code" => "791", "name" => "Tarqui"
                    ],
                    [
                        "code" => "797", "name" => "Tesalia"
                    ],
                    [
                        "code" => "799", "name" => "Tello"
                    ],
                    [
                        "code" => "801", "name" => "Teruel"
                    ],
                    [
                        "code" => "807", "name" => "Timana"
                    ],
                    [
                        "code" => "872", "name" => "Villavieja"
                    ],
                    [
                        "code" => "885", "name" => "Yaguara"
                    ]
                ]
            ],
            [
                "code" => "44",
                "name" => "La Guajira",
                "cities" => [
                    [
                        "code" => "001", "name" => "Riohacha"
                    ],
                    [
                        "code" => "078", "name" => "Barrancas"
                    ],
                    [
                        "code" => "090", "name" => "Dibulla"
                    ],
                    [
                        "code" => "098", "name" => "Distraccion"
                    ],
                    [
                        "code" => "110", "name" => "El molino"
                    ],
                    [
                        "code" => "279", "name" => "Fonseca"
                    ],
                    [
                        "code" => "378", "name" => "Hatonuevo"
                    ],
                    [
                        "code" => "420", "name" => "La jagua del pilar"
                    ],
                    [
                        "code" => "430", "name" => "Maicao"
                    ],
                    [
                        "code" => "560", "name" => "Manaure"
                    ],
                    [
                        "code" => "650", "name" => "San juan del cesar"
                    ],
                    [
                        "code" => "847", "name" => "Uribia"
                    ],
                    [
                        "code" => "855", "name" => "Urumita"
                    ],
                    [
                        "code" => "874", "name" => "Villanueva"
                    ]
                ]
            ],
            [
                "code" => "47",
                "name" => "Magdalena",
                "cities" => [
                    [
                        "code" => "001", "name" => "Santa marta"
                    ],
                    [
                        "code" => "030", "name" => "Algarrobo"
                    ],
                    [
                        "code" => "053", "name" => "Aracataca"
                    ],
                    [
                        "code" => "058", "name" => "Ariguani (el dificil)"
                    ],
                    [
                        "code" => "161", "name" => "Cerro san antonio"
                    ],
                    [
                        "code" => "170", "name" => "Chivolo"
                    ],
                    [
                        "code" => "189", "name" => "Cienaga"
                    ],
                    [
                        "code" => "205", "name" => "Concordia"
                    ],
                    [
                        "code" => "245", "name" => "El banco"
                    ],
                    [
                        "code" => "258", "name" => "El piñon"
                    ],
                    [
                        "code" => "268", "name" => "El reten"
                    ],
                    [
                        "code" => "288", "name" => "Fundacion"
                    ],
                    [
                        "code" => "318", "name" => "Guamal"
                    ],
                    [
                        "code" => "541", "name" => "Pedraza"
                    ],
                    [
                        "code" => "545", "name" => "Pijiño del carmen (pijiño)"
                    ],
                    [
                        "code" => "551", "name" => "Pivijay"
                    ],
                    [
                        "code" => "555", "name" => "Plato"
                    ],
                    [
                        "code" => "570", "name" => "Puebloviejo"
                    ],
                    [
                        "code" => "605", "name" => "Remolino"
                    ],
                    [
                        "code" => "660", "name" => "Sabanas de san angel"
                    ],
                    [
                        "code" => "675", "name" => "Salamina"
                    ],
                    [
                        "code" => "692", "name" => "San sebastian de buenavista"
                    ],
                    [
                        "code" => "703", "name" => "San zenon"
                    ],
                    [
                        "code" => "707", "name" => "Santa ana"
                    ],
                    [
                        "code" => "745", "name" => "Sitionuevo"
                    ],
                    [
                        "code" => "798", "name" => "Tenerife"
                    ]
                ]
            ],
            [
                "code" => "50",
                "name" => "Meta",
                "cities" => [
                    [
                        "code" => "001", "name" => "Villavicencio"
                    ],
                    [
                        "code" => "006", "name" => "Acacias"
                    ],
                    [
                        "code" => "110", "name" => "Barranca de upia"
                    ],
                    [
                        "code" => "124", "name" => "Cabuyaro"
                    ],
                    [
                        "code" => "150", "name" => "Castilla la nueva"
                    ],
                    [
                        "code" => "223", "name" => "San luis de cubarral"
                    ],
                    [
                        "code" => "226", "name" => "Cumaral"
                    ],
                    [
                        "code" => "245", "name" => "El calvario"
                    ],
                    [
                        "code" => "251", "name" => "El castillo"
                    ],
                    [
                        "code" => "270", "name" => "El dorado"
                    ],
                    [
                        "code" => "287", "name" => "Fuente de oro"
                    ],
                    [
                        "code" => "313", "name" => "Granada"
                    ],
                    [
                        "code" => "318", "name" => "Guamal"
                    ],
                    [
                        "code" => "325", "name" => "Mapiripan"
                    ],
                    [
                        "code" => "330", "name" => "Mesetas"
                    ],
                    [
                        "code" => "350", "name" => "La macarena"
                    ],
                    [
                        "code" => "370", "name" => "La uribe"
                    ],
                    [
                        "code" => "400", "name" => "Lejanias"
                    ],
                    [
                        "code" => "450", "name" => "Puerto concordia"
                    ],
                    [
                        "code" => "568", "name" => "Puerto gaitan"
                    ],
                    [
                        "code" => "573", "name" => "Puerto lopez"
                    ],
                    [
                        "code" => "577", "name" => "Puerto lleras"
                    ],
                    [
                        "code" => "590", "name" => "Puerto rico"
                    ],
                    [
                        "code" => "606", "name" => "Restrepo"
                    ],
                    [
                        "code" => "680", "name" => "San carlos de guaroa"
                    ],
                    [
                        "code" => "683", "name" => "San  juan de arama"
                    ],
                    [
                        "code" => "686", "name" => "San juanito"
                    ],
                    [
                        "code" => "689", "name" => "San martin"
                    ],
                    [
                        "code" => "711", "name" => "Vistahermosa"
                    ]
                ]
            ],
            [
                "code" => "52",
                "name" => "Nariño",
                "cities" => [
                    [
                        "code" => "001", "name" => "Pasto (san juan de pasto)"
                    ],
                    [
                        "code" => "019", "name" => "Alban (san jose)"
                    ],
                    [
                        "code" => "022", "name" => "Aldana"
                    ],
                    [
                        "code" => "036", "name" => "Ancuya"
                    ],
                    [
                        "code" => "051", "name" => "Arboleda (berruecos)"
                    ],
                    [
                        "code" => "079", "name" => "Barbacoas"
                    ],
                    [
                        "code" => "083", "name" => "Belen"
                    ],
                    [
                        "code" => "110", "name" => "Buesaco"
                    ],
                    [
                        "code" => "203", "name" => "Colon (genova)"
                    ],
                    [
                        "code" => "207", "name" => "Consaca"
                    ],
                    [
                        "code" => "210", "name" => "Contadero"
                    ],
                    [
                        "code" => "215", "name" => "Cordoba"
                    ],
                    [
                        "code" => "224", "name" => "Cuaspud (carlosama)"
                    ],
                    [
                        "code" => "227", "name" => "Cumbal"
                    ],
                    [
                        "code" => "233", "name" => "Cumbitara"
                    ],
                    [
                        "code" => "240", "name" => "Chachagui"
                    ],
                    [
                        "code" => "250", "name" => "El charco"
                    ],
                    [
                        "code" => "254", "name" => "El peñol"
                    ],
                    [
                        "code" => "256", "name" => "El rosario"
                    ],
                    [
                        "code" => "258", "name" => "El tablon"
                    ],
                    [
                        "code" => "260", "name" => "El tambo"
                    ],
                    [
                        "code" => "287", "name" => "Funes"
                    ],
                    [
                        "code" => "317", "name" => "Guachucal"
                    ],
                    [
                        "code" => "320", "name" => "Guaitarilla"
                    ],
                    [
                        "code" => "323", "name" => "Gualmatan"
                    ],
                    [
                        "code" => "352", "name" => "Iles"
                    ],
                    [
                        "code" => "354", "name" => "Imues"
                    ],
                    [
                        "code" => "356", "name" => "Ipiales"
                    ],
                    [
                        "code" => "378", "name" => "La cruz"
                    ],
                    [
                        "code" => "381", "name" => "La florida"
                    ],
                    [
                        "code" => "385", "name" => "La llanada"
                    ],
                    [
                        "code" => "390", "name" => "La tola"
                    ],
                    [
                        "code" => "399", "name" => "La union"
                    ],
                    [
                        "code" => "405", "name" => "Leiva"
                    ],
                    [
                        "code" => "411", "name" => "Linares"
                    ],
                    [
                        "code" => "418", "name" => "Los andes (sotomayor)"
                    ],
                    [
                        "code" => "427", "name" => "Magui (payan)"
                    ],
                    [
                        "code" => "435", "name" => "Mallama (piedrancha)"
                    ],
                    [
                        "code" => "473", "name" => "Mosquera"
                    ],
                    [
                        "code" => "490", "name" => "Olaya herrera (bocas de satinga)"
                    ],
                    [
                        "code" => "506", "name" => "Ospina"
                    ],
                    [
                        "code" => "520", "name" => "Francisco pizarro (salahonda)"
                    ],
                    [
                        "code" => "540", "name" => "Policarpa"
                    ],
                    [
                        "code" => "560", "name" => "Potosi"
                    ],
                    [
                        "code" => "565", "name" => "Providencia"
                    ],
                    [
                        "code" => "573", "name" => "Puerres"
                    ],
                    [
                        "code" => "585", "name" => "Pupiales"
                    ],
                    [
                        "code" => "612", "name" => "Ricaurte"
                    ],
                    [
                        "code" => "621", "name" => "Roberto payan (san jose)"
                    ],
                    [
                        "code" => "678", "name" => "Samaniego"
                    ],
                    [
                        "code" => "683", "name" => "Sandona"
                    ],
                    [
                        "code" => "685", "name" => "San bernardo"
                    ],
                    [
                        "code" => "687", "name" => "San lorenzo"
                    ],
                    [
                        "code" => "693", "name" => "San pablo"
                    ],
                    [
                        "code" => "694", "name" => "San pedro de cartago"
                    ],
                    [
                        "code" => "696", "name" => "Santa barbara (iscuande)"
                    ],
                    [
                        "code" => "699", "name" => "Santa cruz (guachaves)"
                    ],
                    [
                        "code" => "720", "name" => "Sapuyes"
                    ],
                    [
                        "code" => "786", "name" => "Taminango"
                    ],
                    [
                        "code" => "788", "name" => "Tangua"
                    ],
                    [
                        "code" => "835", "name" => "Tumaco"
                    ],
                    [
                        "code" => "838", "name" => "Tuquerres"
                    ],
                    [
                        "code" => "885", "name" => "Yacuanquer"
                    ]
                ]
            ],
            [
                "code" => "54",
                "name" => "Norte de Santander",
                "cities" => [
                    [
                        "code" => "001", "name" => "Cucuta"
                    ],
                    [
                        "code" => "003", "name" => "Abrego"
                    ],
                    [
                        "code" => "051", "name" => "Arboledas"
                    ],
                    [
                        "code" => "099", "name" => "Bochalema"
                    ],
                    [
                        "code" => "109", "name" => "Bucarasica"
                    ],
                    [
                        "code" => "125", "name" => "Cacota"
                    ],
                    [
                        "code" => "128", "name" => "Cachira"
                    ],
                    [
                        "code" => "172", "name" => "Chinacota"
                    ],
                    [
                        "code" => "174", "name" => "Chitaga"
                    ],
                    [
                        "code" => "206", "name" => "Convencion"
                    ],
                    [
                        "code" => "223", "name" => "Cucutilla"
                    ],
                    [
                        "code" => "239", "name" => "Durania"
                    ],
                    [
                        "code" => "245", "name" => "El carmen"
                    ],
                    [
                        "code" => "250", "name" => "El tarra"
                    ],
                    [
                        "code" => "261", "name" => "El zulia"
                    ],
                    [
                        "code" => "313", "name" => "Gramalote"
                    ],
                    [
                        "code" => "344", "name" => "Hacari"
                    ],
                    [
                        "code" => "347", "name" => "Herran"
                    ],
                    [
                        "code" => "377", "name" => "Labateca"
                    ],
                    [
                        "code" => "385", "name" => "La esperanza"
                    ],
                    [
                        "code" => "398", "name" => "La playa"
                    ],
                    [
                        "code" => "405", "name" => "Los patios"
                    ],
                    [
                        "code" => "418", "name" => "Lourdes"
                    ],
                    [
                        "code" => "480", "name" => "Mutiscua"
                    ],
                    [
                        "code" => "498", "name" => "Ocaña"
                    ],
                    [
                        "code" => "518", "name" => "Pamplona"
                    ],
                    [
                        "code" => "520", "name" => "Pamplonita"
                    ],
                    [
                        "code" => "553", "name" => "Puerto santander"
                    ],
                    [
                        "code" => "599", "name" => "Ragonvalia"
                    ],
                    [
                        "code" => "660", "name" => "Salazar"
                    ],
                    [
                        "code" => "670", "name" => "San calixto"
                    ],
                    [
                        "code" => "673", "name" => "San cayetano"
                    ],
                    [
                        "code" => "680", "name" => "Santiago"
                    ],
                    [
                        "code" => "720", "name" => "Sardinata"
                    ],
                    [
                        "code" => "743", "name" => "Silos"
                    ],
                    [
                        "code" => "800", "name" => "Teorama"
                    ],
                    [
                        "code" => "810", "name" => "Tibu"
                    ],
                    [
                        "code" => "820", "name" => "Toledo"
                    ],
                    [
                        "code" => "871", "name" => "Villacaro"
                    ],
                    [
                        "code" => "874", "name" => "Villa del rosario"
                    ]
                ]
            ],
            [
                "code" => "63",
                "name" => "Quindio",
                "cities" => [
                    [
                        "code" => "001", "name" => "Armenia"
                    ],
                    [
                        "code" => "111", "name" => "Buenavista"
                    ],
                    [
                        "code" => "130", "name" => "Calarca"
                    ],
                    [
                        "code" => "190", "name" => "Circasia"
                    ],
                    [
                        "code" => "212", "name" => "Cordoba"
                    ],
                    [
                        "code" => "272", "name" => "Filandia"
                    ],
                    [
                        "code" => "302", "name" => "Genova"
                    ],
                    [
                        "code" => "401", "name" => "La tebaida"
                    ],
                    [
                        "code" => "470", "name" => "Montenegro"
                    ],
                    [
                        "code" => "548", "name" => "Pijao"
                    ],
                    [
                        "code" => "594", "name" => "Quimbaya"
                    ],
                    [
                        "code" => "690", "name" => "Salento"
                    ]
                ]
            ],
            [
                "code" => "66",
                "name" => "Risaralda",
                "cities" => [
                    [
                        "code" => "001", "name" => "Pereira"
                    ],
                    [
                        "code" => "045", "name" => "Apia"
                    ],
                    [
                        "code" => "075", "name" => "Balboa"
                    ],
                    [
                        "code" => "088", "name" => "Belen de umbria"
                    ],
                    [
                        "code" => "170", "name" => "Dos quebradas"
                    ],
                    [
                        "code" => "318", "name" => "Guatica"
                    ],
                    [
                        "code" => "383", "name" => "La celia"
                    ],
                    [
                        "code" => "400", "name" => "La virginia"
                    ],
                    [
                        "code" => "440", "name" => "Marsella"
                    ],
                    [
                        "code" => "456", "name" => "Mistrato"
                    ],
                    [
                        "code" => "572", "name" => "Pueblo rico"
                    ],
                    [
                        "code" => "594", "name" => "Quinchia"
                    ],
                    [
                        "code" => "682", "name" => "Santa rosa de cabal"
                    ],
                    [
                        "code" => "687", "name" => "Santuario"
                    ]
                ]
            ],
            [
                "code" => "68",
                "name" => "Santander",
                "cities" => [
                    [
                        "code" => "001", "name" => "Bucaramanga"
                    ],
                    [
                        "code" => "013", "name" => "Aguada"
                    ],
                    [
                        "code" => "020", "name" => "Albania"
                    ],
                    [
                        "code" => "051", "name" => "Aratoca"
                    ],
                    [
                        "code" => "077", "name" => "Barbosa"
                    ],
                    [
                        "code" => "079", "name" => "Barichara"
                    ],
                    [
                        "code" => "081", "name" => "Barrancabermeja"
                    ],
                    [
                        "code" => "092", "name" => "Betulia"
                    ],
                    [
                        "code" => "101", "name" => "Bolivar"
                    ],
                    [
                        "code" => "121", "name" => "Cabrera"
                    ],
                    [
                        "code" => "132", "name" => "California"
                    ],
                    [
                        "code" => "147", "name" => "Capitanejo"
                    ],
                    [
                        "code" => "152", "name" => "Carcasi"
                    ],
                    [
                        "code" => "160", "name" => "Cepita"
                    ],
                    [
                        "code" => "162", "name" => "Cerrito"
                    ],
                    [
                        "code" => "167", "name" => "Charala"
                    ],
                    [
                        "code" => "169", "name" => "Charta"
                    ],
                    [
                        "code" => "176", "name" => "Chima"
                    ],
                    [
                        "code" => "179", "name" => "Chipata"
                    ],
                    [
                        "code" => "190", "name" => "Cimitarra"
                    ],
                    [
                        "code" => "207", "name" => "Concepcion"
                    ],
                    [
                        "code" => "209", "name" => "Confines"
                    ],
                    [
                        "code" => "211", "name" => "Contratacion"
                    ],
                    [
                        "code" => "217", "name" => "Coromoro"
                    ],
                    [
                        "code" => "229", "name" => "Curiti"
                    ],
                    [
                        "code" => "235", "name" => "El carmen de chucury"
                    ],
                    [
                        "code" => "245", "name" => "El guacamayo"
                    ],
                    [
                        "code" => "250", "name" => "El peñon"
                    ],
                    [
                        "code" => "255", "name" => "El playon"
                    ],
                    [
                        "code" => "264", "name" => "Encino"
                    ],
                    [
                        "code" => "266", "name" => "Enciso"
                    ],
                    [
                        "code" => "271", "name" => "Florian"
                    ],
                    [
                        "code" => "276", "name" => "Floridablanca"
                    ],
                    [
                        "code" => "296", "name" => "Galan"
                    ],
                    [
                        "code" => "298", "name" => "Gambita"
                    ],
                    [
                        "code" => "307", "name" => "Giron"
                    ],
                    [
                        "code" => "318", "name" => "Guaca"
                    ],
                    [
                        "code" => "320", "name" => "Guadalupe"
                    ],
                    [
                        "code" => "322", "name" => "Guapota"
                    ],
                    [
                        "code" => "324", "name" => "Guavata"
                    ],
                    [
                        "code" => "327", "name" => "Guepsa"
                    ],
                    [
                        "code" => "344", "name" => "Hato"
                    ],
                    [
                        "code" => "368", "name" => "Jesus maria"
                    ],
                    [
                        "code" => "370", "name" => "Jordan"
                    ],
                    [
                        "code" => "377", "name" => "La belleza"
                    ],
                    [
                        "code" => "385", "name" => "Landazuri"
                    ],
                    [
                        "code" => "397", "name" => "La paz"
                    ],
                    [
                        "code" => "406", "name" => "Lebrija"
                    ],
                    [
                        "code" => "418", "name" => "Los santos"
                    ],
                    [
                        "code" => "425", "name" => "Macaravita"
                    ],
                    [
                        "code" => "432", "name" => "Malaga"
                    ],
                    [
                        "code" => "444", "name" => "Matanza"
                    ],
                    [
                        "code" => "464", "name" => "Mogotes"
                    ],
                    [
                        "code" => "468", "name" => "Molagavita"
                    ],
                    [
                        "code" => "498", "name" => "Ocamonte"
                    ],
                    [
                        "code" => "500", "name" => "Oiba"
                    ],
                    [
                        "code" => "502", "name" => "Onzaga"
                    ],
                    [
                        "code" => "522", "name" => "Palmar"
                    ],
                    [
                        "code" => "524", "name" => "Palmas del socorro"
                    ],
                    [
                        "code" => "533", "name" => "Paramo"
                    ],
                    [
                        "code" => "547", "name" => "Piedecuesta"
                    ],
                    [
                        "code" => "549", "name" => "Pinchote"
                    ],
                    [
                        "code" => "572", "name" => "Puente nacional"
                    ],
                    [
                        "code" => "573", "name" => "Puerto parra"
                    ],
                    [
                        "code" => "575", "name" => "Puerto wilches"
                    ],
                    [
                        "code" => "615", "name" => "Rionegro"
                    ],
                    [
                        "code" => "655", "name" => "Sabana de torres"
                    ],
                    [
                        "code" => "669", "name" => "San andres"
                    ],
                    [
                        "code" => "673", "name" => "San benito"
                    ],
                    [
                        "code" => "679", "name" => "San gil"
                    ],
                    [
                        "code" => "682", "name" => "San joaquin"
                    ],
                    [
                        "code" => "684", "name" => "San jose de miranda"
                    ],
                    [
                        "code" => "686", "name" => "San miguel"
                    ],
                    [
                        "code" => "689", "name" => "San vicente de chucuri"
                    ],
                    [
                        "code" => "705", "name" => "Santa barbara"
                    ],
                    [
                        "code" => "720", "name" => "Santa helena del opon"
                    ],
                    [
                        "code" => "745", "name" => "Simacota"
                    ],
                    [
                        "code" => "755", "name" => "Socorro"
                    ],
                    [
                        "code" => "770", "name" => "Suaita"
                    ],
                    [
                        "code" => "773", "name" => "Sucre"
                    ],
                    [
                        "code" => "780", "name" => "Surata"
                    ],
                    [
                        "code" => "820", "name" => "Tona"
                    ],
                    [
                        "code" => "855", "name" => "Valle san jose"
                    ],
                    [
                        "code" => "861", "name" => "Velez"
                    ],
                    [
                        "code" => "867", "name" => "Vetas"
                    ],
                    [
                        "code" => "872", "name" => "Villanueva"
                    ],
                    [
                        "code" => "895", "name" => "Zapatoca"
                    ]
                ]
            ],
            [
                "code" => "70",
                "name" => "Sucre",
                "cities" => [
                    [
                        "code" => "001", "name" => "Sincelejo"
                    ],
                    [
                        "code" => "110", "name" => "Buenavista"
                    ],
                    [
                        "code" => "124", "name" => "Caimito"
                    ],
                    [
                        "code" => "204", "name" => "Coloso (ricaurte)"
                    ],
                    [
                        "code" => "215", "name" => "Corozal"
                    ],
                    [
                        "code" => "230", "name" => "Chalan"
                    ],
                    [
                        "code" => "235", "name" => "Galeras (nueva granada)"
                    ],
                    [
                        "code" => "265", "name" => "Guaranda"
                    ],
                    [
                        "code" => "400", "name" => "La union"
                    ],
                    [
                        "code" => "418", "name" => "Los palmitos"
                    ],
                    [
                        "code" => "429", "name" => "Majagual"
                    ],
                    [
                        "code" => "473", "name" => "Morroa"
                    ],
                    [
                        "code" => "508", "name" => "Ovejas"
                    ],
                    [
                        "code" => "523", "name" => "Palmito"
                    ],
                    [
                        "code" => "670", "name" => "Sampues"
                    ],
                    [
                        "code" => "678", "name" => "San benito abad"
                    ],
                    [
                        "code" => "702", "name" => "San juan de betulia"
                    ],
                    [
                        "code" => "708", "name" => "San marcos"
                    ],
                    [
                        "code" => "713", "name" => "San onofre"
                    ],
                    [
                        "code" => "717", "name" => "San pedro"
                    ],
                    [
                        "code" => "742", "name" => "Since"
                    ],
                    [
                        "code" => "771", "name" => "Sucre"
                    ],
                    [
                        "code" => "820", "name" => "Tolu"
                    ],
                    [
                        "code" => "823", "name" => "Toluviejo"
                    ]
                ]
            ],
            [
                "code" => "73",
                "name" => "Tolima",
                "cities" => [
                    [
                        "code" => "001", "name" => "Ibague"
                    ],
                    [
                        "code" => "024", "name" => "Alpujarra"
                    ],
                    [
                        "code" => "026", "name" => "Alvarado"
                    ],
                    [
                        "code" => "030", "name" => "Ambalema"
                    ],
                    [
                        "code" => "043", "name" => "Anzoategui"
                    ],
                    [
                        "code" => "055", "name" => "Armero (guayabal)"
                    ],
                    [
                        "code" => "067", "name" => "Ataco"
                    ],
                    [
                        "code" => "124", "name" => "Cajamarca"
                    ],
                    [
                        "code" => "148", "name" => "Carmen apicala"
                    ],
                    [
                        "code" => "152", "name" => "Casabianca"
                    ],
                    [
                        "code" => "168", "name" => "Chaparral"
                    ],
                    [
                        "code" => "200", "name" => "Coello"
                    ],
                    [
                        "code" => "217", "name" => "Coyaima"
                    ],
                    [
                        "code" => "226", "name" => "Cunday"
                    ],
                    [
                        "code" => "236", "name" => "Dolores"
                    ],
                    [
                        "code" => "268", "name" => "Espinal"
                    ],
                    [
                        "code" => "270", "name" => "Falan"
                    ],
                    [
                        "code" => "275", "name" => "Flandes"
                    ],
                    [
                        "code" => "283", "name" => "Fresno"
                    ],
                    [
                        "code" => "319", "name" => "Guamo"
                    ],
                    [
                        "code" => "347", "name" => "Herveo"
                    ],
                    [
                        "code" => "349", "name" => "Honda"
                    ],
                    [
                        "code" => "352", "name" => "Icononzo"
                    ],
                    [
                        "code" => "408", "name" => "Lerida"
                    ],
                    [
                        "code" => "411", "name" => "Libano"
                    ],
                    [
                        "code" => "443", "name" => "Mariquita"
                    ],
                    [
                        "code" => "449", "name" => "Melgar"
                    ],
                    [
                        "code" => "461", "name" => "Murillo"
                    ],
                    [
                        "code" => "483", "name" => "Natagaima"
                    ],
                    [
                        "code" => "504", "name" => "Ortega"
                    ],
                    [
                        "code" => "520", "name" => "Palocabildo"
                    ],
                    [
                        "code" => "547", "name" => "Piedras"
                    ],
                    [
                        "code" => "555", "name" => "Planadas"
                    ],
                    [
                        "code" => "563", "name" => "Prado"
                    ],
                    [
                        "code" => "585", "name" => "Purificacion"
                    ],
                    [
                        "code" => "616", "name" => "Rioblanco"
                    ],
                    [
                        "code" => "622", "name" => "Roncesvalles"
                    ],
                    [
                        "code" => "624", "name" => "Rovira"
                    ],
                    [
                        "code" => "671", "name" => "Saldaña"
                    ],
                    [
                        "code" => "675", "name" => "San antonio"
                    ],
                    [
                        "code" => "678", "name" => "San luis"
                    ],
                    [
                        "code" => "686", "name" => "Santa isabel"
                    ],
                    [
                        "code" => "770", "name" => "Suarez"
                    ],
                    [
                        "code" => "854", "name" => "Valle de san juan"
                    ],
                    [
                        "code" => "861", "name" => "Venadillo"
                    ],
                    [
                        "code" => "870", "name" => "Villahermosa"
                    ],
                    [
                        "code" => "873", "name" => "Villarrica"
                    ]
                ]
            ],
            [
                "code" => "76",
                "name" => "Valle",
                "cities" => [
                    [
                        "code" => "001", "name" => "Cali (santiago de cali)"
                    ],
                    [
                        "code" => "020", "name" => "Alcala"
                    ],
                    [
                        "code" => "036", "name" => "Andalucia"
                    ],
                    [
                        "code" => "041", "name" => "Ansermanuevo"
                    ],
                    [
                        "code" => "054", "name" => "Argelia"
                    ],
                    [
                        "code" => "100", "name" => "Bolivar"
                    ],
                    [
                        "code" => "109", "name" => "Buenaventura"
                    ],
                    [
                        "code" => "111", "name" => "Buga"
                    ],
                    [
                        "code" => "113", "name" => "Bugalagrande"
                    ],
                    [
                        "code" => "122", "name" => "Caicedonia"
                    ],
                    [
                        "code" => "126", "name" => "Calima (darien)"
                    ],
                    [
                        "code" => "130", "name" => "Candelaria"
                    ],
                    [
                        "code" => "147", "name" => "Cartago"
                    ],
                    [
                        "code" => "233", "name" => "Dagua"
                    ],
                    [
                        "code" => "243", "name" => "El aguila"
                    ],
                    [
                        "code" => "246", "name" => "El cairo"
                    ],
                    [
                        "code" => "248", "name" => "El cerrito"
                    ],
                    [
                        "code" => "250", "name" => "El dovio"
                    ],
                    [
                        "code" => "275", "name" => "Florida"
                    ],
                    [
                        "code" => "306", "name" => "Ginebra"
                    ],
                    [
                        "code" => "318", "name" => "Guacari"
                    ],
                    [
                        "code" => "364", "name" => "Jamundi"
                    ],
                    [
                        "code" => "377", "name" => "La cumbre"
                    ],
                    [
                        "code" => "400", "name" => "La union"
                    ],
                    [
                        "code" => "403", "name" => "La victoria"
                    ],
                    [
                        "code" => "497", "name" => "Obando"
                    ],
                    [
                        "code" => "520", "name" => "Palmira"
                    ],
                    [
                        "code" => "563", "name" => "Pradera"
                    ],
                    [
                        "code" => "606", "name" => "Restrepo"
                    ],
                    [
                        "code" => "616", "name" => "Riofrio"
                    ],
                    [
                        "code" => "622", "name" => "Roldanillo"
                    ],
                    [
                        "code" => "670", "name" => "San pedro"
                    ],
                    [
                        "code" => "736", "name" => "Sevilla"
                    ],
                    [
                        "code" => "823", "name" => "Toro"
                    ],
                    [
                        "code" => "828", "name" => "Trujillo"
                    ],
                    [
                        "code" => "834", "name" => "Tulua"
                    ],
                    [
                        "code" => "845", "name" => "Ulloa"
                    ],
                    [
                        "code" => "863", "name" => "Versalles"
                    ],
                    [
                        "code" => "869", "name" => "Vijes"
                    ],
                    [
                        "code" => "890", "name" => "Yotoco"
                    ],
                    [
                        "code" => "892", "name" => "Yumbo"
                    ],
                    [
                        "code" => "895", "name" => "Zarzal"
                    ]
                ]
            ],
            [
                "code" => "81",
                "name" => "Arauca",
                "cities" => [
                    [
                        "code" => "001", "name" => "Arauca"
                    ],
                    [
                        "code" => "065", "name" => "Arauquita"
                    ],
                    [
                        "code" => "220", "name" => "Cravo norte"
                    ],
                    [
                        "code" => "300", "name" => "Fortul"
                    ],
                    [
                        "code" => "591", "name" => "Puerto rondon"
                    ],
                    [
                        "code" => "736", "name" => "Saravena"
                    ],
                    [
                        "code" => "794", "name" => "Tame"
                    ]
                ]
            ],
            [
                "code" => "85",
                "name" => "Casanare",
                "cities" => [
                    [
                        "code" => "001", "name" => "Yopal"
                    ],
                    [
                        "code" => "010", "name" => "Aguazul"
                    ],
                    [
                        "code" => "015", "name" => "Chameza"
                    ],
                    [
                        "code" => "125", "name" => "Hato corozal"
                    ],
                    [
                        "code" => "136", "name" => "La salina"
                    ],
                    [
                        "code" => "139", "name" => "Mani"
                    ],
                    [
                        "code" => "162", "name" => "Monterrey"
                    ],
                    [
                        "code" => "225", "name" => "Nunchia"
                    ],
                    [
                        "code" => "230", "name" => "Orocue"
                    ],
                    [
                        "code" => "250", "name" => "Paz de ariporo"
                    ],
                    [
                        "code" => "263", "name" => "Pore"
                    ],
                    [
                        "code" => "279", "name" => "Recetor"
                    ],
                    [
                        "code" => "300", "name" => "Sabanalarga"
                    ],
                    [
                        "code" => "315", "name" => "Sacama"
                    ],
                    [
                        "code" => "325", "name" => "San luis de palenque"
                    ],
                    [
                        "code" => "400", "name" => "Tamara"
                    ],
                    [
                        "code" => "410", "name" => "Tauramena"
                    ],
                    [
                        "code" => "430", "name" => "Trinidad"
                    ],
                    [
                        "code" => "440", "name" => "Villanueva"
                    ]
                ]
            ],
            [
                "code" => "86",
                "name" => "Putumayo",
                "cities" => [
                    [
                        "code" => "001", "name" => "Mocoa"
                    ],
                    [
                        "code" => "219", "name" => "Colon"
                    ],
                    [
                        "code" => "320", "name" => "Orito"
                    ],
                    [
                        "code" => "568", "name" => "Puerto asis"
                    ],
                    [
                        "code" => "569", "name" => "Puerto caicedo"
                    ],
                    [
                        "code" => "571", "name" => "Puerto guzman"
                    ],
                    [
                        "code" => "573", "name" => "Puerto leguizamo"
                    ],
                    [
                        "code" => "749", "name" => "Sibundoy"
                    ],
                    [
                        "code" => "755", "name" => "San francisco"
                    ],
                    [
                        "code" => "757", "name" => "San miguel (la dorada)"
                    ],
                    [
                        "code" => "760", "name" => "Santiago"
                    ],
                    [
                        "code" => "865", "name" => "La hormiga (valle del guamuez)"
                    ],
                    [
                        "code" => "885", "name" => "Villagarzon"
                    ]
                ]
            ],
            [
                "code" => "88",
                "name" => "San Andrés",
                "cities" => [
                    [
                        "code" => "001", "name" => "San andres"
                    ],
                    [
                        "code" => "564", "name" => "Providencia"
                    ]
                ]
            ],
            [
                "code" => "91",
                "name" => "Amazonas",
                "cities" => [
                    [
                        "code" => "001", "name" => "Leticia"
                    ],
                    [
                        "code" => "263", "name" => "El encanto"
                    ],
                    [
                        "code" => "405", "name" => "La chorrera"
                    ],
                    [
                        "code" => "407", "name" => "La pedrera"
                    ],
                    [
                        "code" => "430", "name" => "La victoria"
                    ],
                    [
                        "code" => "460", "name" => "Miriti-parana"
                    ],
                    [
                        "code" => "530", "name" => "Puerto alegria"
                    ],
                    [
                        "code" => "536", "name" => "Puerto arica"
                    ],
                    [
                        "code" => "540", "name" => "Puerto nariño"
                    ],
                    [
                        "code" => "669", "name" => "Puerto santander"
                    ],
                    [
                        "code" => "798", "name" => "Tarapaca"
                    ]
                ]
            ],
            [
                "code" => "94",
                "name" => "Guainia",
                "cities" => [
                    [
                        "code" => "001", "name" => "Puerto inirida"
                    ],
                    [
                        "code" => "343", "name" => "Barranco minas"
                    ],
                    [
                        "code" => "883", "name" => "San felipe"
                    ],
                    [
                        "code" => "884", "name" => "Puerto colombia"
                    ],
                    [
                        "code" => "885", "name" => "La guadalupe"
                    ],
                    [
                        "code" => "886", "name" => "Cacahual"
                    ],
                    [
                        "code" => "887", "name" => "Pana pana (campo alegre)"
                    ],
                    [
                        "code" => "888", "name" => "Morichal (morichal nuevo)"
                    ]
                ]
            ],
            [
                "code" => "95",
                "name" => "Guaviare",
                "cities" => [
                    [
                        "code" => "001", "name" => "San jose del guaviare"
                    ],
                    [
                        "code" => "015", "name" => "Calamar"
                    ],
                    [
                        "code" => "025", "name" => "El retorno"
                    ],
                    [
                        "code" => "200", "name" => "Miraflores"
                    ]
                ]
            ],
            [
                "code" => "97",
                "name" => "Vaupes",
                "cities" => [
                    [
                        "code" => "001", "name" => "Mitu"
                    ],
                    [
                        "code" => "161", "name" => "Caruru"
                    ],
                    [
                        "code" => "511", "name" => "Pacoa"
                    ],
                    [
                        "code" => "666", "name" => "Taraira"
                    ],
                    [
                        "code" => "777", "name" => "Papunaua (morichal)"
                    ],
                    [
                        "code" => "889", "name" => "Yavarate"
                    ]
                ]
            ],
            [
                "code" => "99",
                "name" => "Vichada",
                "cities" => [
                    [
                        "code" => "001", "name" => "Puerto carreño"
                    ],
                    [
                        "code" => "524", "name" => "La primavera"
                    ],
                    [
                        "code" => "572", "name" => "Santa rita"
                    ],
                    [
                        "code" => "666", "name" => "Santa rosalia"
                    ],
                    [
                        "code" => "760", "name" => "San jose de ocune"
                    ],
                    [
                        "code" => "773", "name" => "Cumaribo"
                    ]
                ]
            ]
        ];

        foreach ($deps as $dep) {
            $newDep = \App\Models\Department::create([
                'code' => $dep['code'],
                'name' => $dep['name']
            ]);

            $newCities = array_map(function ($city) use ($newDep) {
                return [...$city, 'department_id' => $newDep['id']];
            }, $dep['cities']);

            $newDep->cities()->insert($newCities);
        }
    }
}
