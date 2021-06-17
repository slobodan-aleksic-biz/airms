<?php

use Illuminate\Database\Seeder;
use App\Airport;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        factory(Airport::class)-> create([

            'name' => '  \'t Harde',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.406503,
            'longitude' => 5.898492,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1670,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aachen HBF',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.7667,
            'longitude' => 6.1,
            'altitude_m' => 873,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aalborg',
            'iata_code' => 'AAL',
            'icao_code' => 'EKYT',


            'latitude' => 57.092789,
            'longitude' => 9.849164,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 2,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aarhus',
            'iata_code' => 'AAR',
            'icao_code' => 'EKAH',


            'latitude' => 56.300017,
            'longitude' => 10.619008,
            'altitude_m' => 82,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 3,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abakan',
            'iata_code' => 'ABA',
            'icao_code' => 'UNAA',


            'latitude' => 53.74,
            'longitude' => 91.385,
            'altitude_m' => 831,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Krasnoyarsk',

            'city_id' => 4,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abando',
            'iata_code' => '',
            'icao_code' => 'BLBO',


            'latitude' => 43.25947,
            'longitude' => -2.929017,
            'altitude_m' => 62,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 258,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abbeville',
            'iata_code' => 'XAB',
            'icao_code' => 'LFOI',


            'latitude' => 50.143492,
            'longitude' => 1.831892,
            'altitude_m' => 220,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 5,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abbotsford',
            'iata_code' => 'YXX',
            'icao_code' => 'CYXX',


            'latitude' => 49.025278,
            'longitude' => -122.360556,
            'altitude_m' => 195,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 6,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abdul Rachman Saleh',
            'iata_code' => 'MLG',
            'icao_code' => 'WARA',


            'latitude' => -7.926556,
            'longitude' => 112.714514,
            'altitude_m' => 1726,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 1364,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aberdeen Harbour',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 57.13967,
            'longitude' => -2.07467,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 7,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aberdeen Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 57.1436,
            'longitude' => -2.0985,
            'altitude_m' => 1,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 7,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abha',
            'iata_code' => 'AHB',
            'icao_code' => 'OEAB',


            'latitude' => 18.240367,
            'longitude' => 42.656625,
            'altitude_m' => 6858,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 8,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abraham Gonzalez Intl',
            'iata_code' => 'CJS',
            'icao_code' => 'MMCS',


            'latitude' => 31.636133,
            'longitude' => -106.428667,
            'altitude_m' => 3904,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 488,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Abu Dhabi Intl',
            'iata_code' => 'AUH',
            'icao_code' => 'OMAA',


            'latitude' => 24.432972,
            'longitude' => 54.651138,
            'altitude_m' => 88,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 9,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Acadiana Rgnl',
            'iata_code' => 'ARA',
            'icao_code' => 'KARA',


            'latitude' => 30.037758,
            'longitude' => -91.883896,
            'altitude_m' => 24,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1316,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Achmad Yani',
            'iata_code' => 'SRG',
            'icao_code' => 'WARS',


            'latitude' => -6.971447,
            'longitude' => 110.374122,
            'altitude_m' => 13,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2085,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adams Fld',
            'iata_code' => 'LIT',
            'icao_code' => 'KLIT',


            'latitude' => 34.729444,
            'longitude' => -92.224306,
            'altitude_m' => 262,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1294,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adana',
            'iata_code' => 'ADA',
            'icao_code' => 'LTAF',


            'latitude' => 36.982166,
            'longitude' => 35.280388,
            'altitude_m' => 65,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 14,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adana-Incirlik Airbase',
            'iata_code' => 'UAB',
            'icao_code' => 'KUAB',


            'latitude' => 37.00028,
            'longitude' => 35.41833,
            'altitude_m' => 500,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 14,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adelaide Intl',
            'iata_code' => 'ADL',
            'icao_code' => 'YPAD',


            'latitude' => -34.945,
            'longitude' => 138.530556,
            'altitude_m' => 20,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Adelaide',

            'city_id' => 16,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adelaide Parafield',
            'iata_code' => '',
            'icao_code' => 'YPPF',


            'latitude' => -34.793333,
            'longitude' => 138.633056,
            'altitude_m' => 57,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Adelaide',

            'city_id' => 16,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aden Adde International Airport',
            'iata_code' => 'MGQ',
            'icao_code' => 'HCMM',


            'latitude' => 2.01444,
            'longitude' => 45.3047,
            'altitude_m' => 29,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Mogadishu',

            'city_id' => 1483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adi Sutjipto',
            'iata_code' => 'JOG',
            'icao_code' => 'WARJ',


            'latitude' => -7.788181,
            'longitude' => 110.431758,
            'altitude_m' => 350,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2528,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adirondack Regional Airport',
            'iata_code' => 'SLK',
            'icao_code' => 'KSLK',


            'latitude' => 44.3853,
            'longitude' => -74.2062,
            'altitude_m' => 1663,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2063,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adiyaman Airport',
            'iata_code' => 'ADF',
            'icao_code' => 'LTCP',


            'latitude' => 37.7314,
            'longitude' => 38.4689,
            'altitude_m' => 2216,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 17,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Adnan Menderes',
            'iata_code' => 'ADB',
            'icao_code' => 'LTBJ',


            'latitude' => 38.292392,
            'longitude' => 27.156953,
            'altitude_m' => 412,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeritalia',
            'iata_code' => '',
            'icao_code' => 'LIMA',


            'latitude' => 45.086353,
            'longitude' => 7.603375,
            'altitude_m' => 943,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 2326,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroclub Cioca',
            'iata_code' => 'CIO',
            'icao_code' => 'LRT2',


            'latitude' => 45.471009,
            'longitude' => 21.111967,
            'altitude_m' => 280,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 2268,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroclub Deva',
            'iata_code' => 'DVA',
            'icao_code' => '',


            'latitude' => 45.5153,
            'longitude' => 22.5813,
            'altitude_m' => 615,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 599,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroclub Ghimbav',
            'iata_code' => '',
            'icao_code' => 'LRBG',


            'latitude' => 45.4153,
            'longitude' => 25.3137,
            'altitude_m' => 1743,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 310,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroclub Mures',
            'iata_code' => '',
            'icao_code' => 'LRMS',


            'latitude' => 46.3201,
            'longitude' => 24.3157,
            'altitude_m' => 1000,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 2229,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroclube de Nova Iguacu',
            'iata_code' => 'QNV',
            'icao_code' => 'SDNY',


            'latitude' => -22.7453,
            'longitude' => -43.4603,
            'altitude_m' => 164,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1633,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aerodrom Cioca',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 46.436,
            'longitude' => 24.4445,
            'altitude_m' => 280,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 2268,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroparque Jorge Newbery',
            'iata_code' => 'AEP',
            'icao_code' => 'SABE',


            'latitude' => -34.559175,
            'longitude' => -58.415606,
            'altitude_m' => 18,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 343,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroport',
            'iata_code' => '',
            'icao_code' => 'ARPT',


            'latitude' => 41.288436,
            'longitude' => 2.072409,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 191,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroporto Estadual Arthur Siqueira',
            'iata_code' => 'BJP',
            'icao_code' => 'SBBP',


            'latitude' => -22.979167,
            'longitude' => -46.5375,
            'altitude_m' => 3,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 302,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroporto Prefeito Octavio de Almeida Neves',
            'iata_code' => 'JDR',
            'icao_code' => '',


            'latitude' => -21.0864,
            'longitude' => -44.2258,
            'altitude_m' => 3120,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2058,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeroporto de Porto Seguro',
            'iata_code' => 'BPS',
            'icao_code' => 'SBPS',


            'latitude' => -16.438611,
            'longitude' => -39.080833,
            'altitude_m' => 167,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 1850,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeropuerto Internacional Valle del Conlara',
            'iata_code' => 'RLO',
            'icao_code' => '',


            'latitude' => -32.349803,
            'longitude' => -65.179932,
            'altitude_m' => 100,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1443,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aeropuerto de Rafaela',
            'iata_code' => 'RAF',
            'icao_code' => '',


            'latitude' => -31.282072,
            'longitude' => -61.501594,
            'altitude_m' => 100,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1909,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Afonso Pena',
            'iata_code' => 'CWB',
            'icao_code' => 'SBCT',


            'latitude' => -25.528475,
            'longitude' => -49.175775,
            'altitude_m' => 2988,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 564,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Agartala',
            'iata_code' => 'IXA',
            'icao_code' => 'VEAT',


            'latitude' => 23.886978,
            'longitude' => 91.24045,
            'altitude_m' => 46,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 19,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Agra',
            'iata_code' => 'AGR',
            'icao_code' => 'VIAG',


            'latitude' => 27.155831,
            'longitude' => 77.960892,
            'altitude_m' => 551,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 21,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Agra Cantonment Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 27.1578,
            'longitude' => 77.98993,
            'altitude_m' => 571,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 21,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Agri Airport',
            'iata_code' => 'AJI',
            'icao_code' => 'LTCO',


            'latitude' => 39.6546,
            'longitude' => 43.0271,
            'altitude_m' => 5462,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 22,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aguas Claras',
            'iata_code' => 'OCV',
            'icao_code' => 'SKOC',


            'latitude' => 8.315061,
            'longitude' => -73.358331,
            'altitude_m' => 3850,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1649,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ahmedabad',
            'iata_code' => 'AMD',
            'icao_code' => 'VAAH',


            'latitude' => 23.077242,
            'longitude' => 72.63465,
            'altitude_m' => 189,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 24,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ain Arnat Airport',
            'iata_code' => 'QSF',
            'icao_code' => 'DAAS',


            'latitude' => 36.1781,
            'longitude' => 5.32449,
            'altitude_m' => 3360,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 2089,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Air Base',
            'iata_code' => 'ZIN',
            'icao_code' => 'LSMI',


            'latitude' => 46.6766,
            'longitude' => 7.87908,
            'altitude_m' => 1893,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1001,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Airport',
            'iata_code' => 'VDS',
            'icao_code' => 'ENVD',


            'latitude' => 70.065,
            'longitude' => 29.844,
            'altitude_m' => 127,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 2365,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aix Les Bains',
            'iata_code' => 'CMF',
            'icao_code' => 'LFLB',


            'latitude' => 45.63805,
            'longitude' => 5.880225,
            'altitude_m' => 779,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 436,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akhisar',
            'iata_code' => '',
            'icao_code' => 'LTBT',


            'latitude' => 38.808887,
            'longitude' => 27.83386,
            'altitude_m' => 263,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 26,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akinci',
            'iata_code' => '',
            'icao_code' => 'LTAE',


            'latitude' => 40.078919,
            'longitude' => 32.565625,
            'altitude_m' => 2767,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 88,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akita',
            'iata_code' => 'AXT',
            'icao_code' => 'RJSK',


            'latitude' => 39.615556,
            'longitude' => 140.218611,
            'altitude_m' => 313,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 27,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aksu Airport',
            'iata_code' => 'AKU',
            'icao_code' => 'ZWAK',


            'latitude' => 41.2625,
            'longitude' => 80.2917,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 28,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aktio',
            'iata_code' => 'PVK',
            'icao_code' => 'LGPZ',


            'latitude' => 38.925467,
            'longitude' => 20.765311,
            'altitude_m' => 11,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1867,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akure',
            'iata_code' => 'AKR',
            'icao_code' => 'DNAK',


            'latitude' => 7.246739,
            'longitude' => 5.301008,
            'altitude_m' => 1100,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 29,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akureyri',
            'iata_code' => 'AEY',
            'icao_code' => 'BIAR',


            'latitude' => 65.659994,
            'longitude' => -18.072703,
            'altitude_m' => 6,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Atlantic/Reykjavik',

            'city_id' => 30,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Akwa Ibom International Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 5.05,
            'longitude' => 7.933333,
            'altitude_m' => 500,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 2364,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Al Ain International Airport',
            'iata_code' => 'AAN',
            'icao_code' => 'OMAL',


            'latitude' => 24.261667,
            'longitude' => 55.609167,
            'altitude_m' => 869,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 31,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Al Dhafra',
            'iata_code' => '',
            'icao_code' => 'OMAM',


            'latitude' => 24.248249,
            'longitude' => 54.547722,
            'altitude_m' => 77,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 9,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Al Udeid AB',
            'iata_code' => 'IUD',
            'icao_code' => 'OTBH',


            'latitude' => 25.1174,
            'longitude' => 51.3228,
            'altitude_m' => 130,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Qatar',

            'city_id' => 615,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alamogordo White Sands Regional Airport',
            'iata_code' => 'ALM',
            'icao_code' => 'KALM',


            'latitude' => 32.8399,
            'longitude' => -105.991,
            'altitude_m' => 4200,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 33,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albacete',
            'iata_code' => 'ABC',
            'icao_code' => 'LEAB',


            'latitude' => 38.948528,
            'longitude' => -1.863517,
            'altitude_m' => 2302,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 36,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albany Airport',
            'iata_code' => 'ALH',
            'icao_code' => 'YABA',


            'latitude' => -34.9433,
            'longitude' => 117.809,
            'altitude_m' => 233,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 37,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albenga',
            'iata_code' => 'ALL',
            'icao_code' => 'LIMG',


            'latitude' => 44.050608,
            'longitude' => 8.127428,
            'altitude_m' => 148,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 38,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albert Whitted',
            'iata_code' => 'SPG',
            'icao_code' => 'KSPG',


            'latitude' => 27.765111,
            'longitude' => -82.626972,
            'altitude_m' => 7,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2156,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alberto Carnevalli',
            'iata_code' => 'MRD',
            'icao_code' => 'SVMD',


            'latitude' => 8.582294,
            'longitude' => -71.161186,
            'altitude_m' => 5007,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1441,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albuquerque International Sunport',
            'iata_code' => 'ABQ',
            'icao_code' => 'KABQ',


            'latitude' => 35.0402222,
            'longitude' => -106.6091944,
            'altitude_m' => 5355,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 41,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Albury',
            'iata_code' => 'ABX',
            'icao_code' => 'YMAY',


            'latitude' => -36.067778,
            'longitude' => 146.958056,
            'altitude_m' => 539,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 42,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alcantarilla',
            'iata_code' => '',
            'icao_code' => 'LERI',


            'latitude' => 37.951111,
            'longitude' => -1.230319,
            'altitude_m' => 250,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1534,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aleksandrowice',
            'iata_code' => '',
            'icao_code' => 'EPBA',


            'latitude' => 49.84997,
            'longitude' => 19.020193,
            'altitude_m' => 860,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 251,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alexander Field South Wood County Airport',
            'iata_code' => 'ISW',
            'icao_code' => 'KISW',


            'latitude' => 44.3606456,
            'longitude' => -89.8381412,
            'altitude_m' => 1021,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2492,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alexandria Intl',
            'iata_code' => 'ALY',
            'icao_code' => 'HEAX',


            'latitude' => 31.183903,
            'longitude' => 29.948889,
            'altitude_m' => -6,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 45,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alfonso Bonilla Aragon Intl',
            'iata_code' => 'CLO',
            'icao_code' => 'SKCL',


            'latitude' => 3.543222,
            'longitude' => -76.381583,
            'altitude_m' => 3162,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 375,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alfonso Lopez Pumarejo',
            'iata_code' => 'VUP',
            'icao_code' => 'SKVP',


            'latitude' => 10.435042,
            'longitude' => -73.249506,
            'altitude_m' => 456,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 2376,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alfredo Vasquez Cobo',
            'iata_code' => 'LET',
            'icao_code' => 'SKLT',


            'latitude' => -4.193549,
            'longitude' => -69.943163,
            'altitude_m' => 277,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1268,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alghero',
            'iata_code' => 'AHO',
            'icao_code' => 'LIEA',


            'latitude' => 40.632133,
            'longitude' => 8.290772,
            'altitude_m' => 87,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 46,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alicante',
            'iata_code' => 'ALC',
            'icao_code' => 'LEAL',


            'latitude' => 38.282169,
            'longitude' => -.558156,
            'altitude_m' => 142,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 47,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alice Intl',
            'iata_code' => 'ALI',
            'icao_code' => 'KALI',


            'latitude' => 27.740889,
            'longitude' => -98.026944,
            'altitude_m' => 178,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 48,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alice Springs',
            'iata_code' => 'ASP',
            'icao_code' => 'YBAS',


            'latitude' => -23.806667,
            'longitude' => 133.902222,
            'altitude_m' => 1789,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Australia/Darwin',

            'city_id' => 49,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aliwal North',
            'iata_code' => '',
            'icao_code' => 'FAAN',


            'latitude' => -30.683333,
            'longitude' => 26.733333,
            'altitude_m' => 4361,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 50,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'All Airports',
            'iata_code' => 'LON',
            'icao_code' => '',


            'latitude' => 51.508056,
            'longitude' => -.127778,
            'altitude_m' => 66,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'All Airports',
            'iata_code' => 'PAR',
            'icao_code' => '',


            'latitude' => 48.856389,
            'longitude' => 2.352222,
            'altitude_m' => 107,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'All Airports',
            'iata_code' => 'BJS',
            'icao_code' => '',


            'latitude' => 39.904167,
            'longitude' => 116.407222,
            'altitude_m' => 171,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'All Airports',
            'iata_code' => 'MIL',
            'icao_code' => '',


            'latitude' => 45.463611,
            'longitude' => 9.188056,
            'altitude_m' => 402,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1455,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allahabad',
            'iata_code' => 'IXD',
            'icao_code' => 'VIAL',


            'latitude' => 25.440064,
            'longitude' => 81.733872,
            'altitude_m' => 322,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 51,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allama Iqbal Intl',
            'iata_code' => 'LHE',
            'icao_code' => 'OPLA',


            'latitude' => 31.521564,
            'longitude' => 74.403594,
            'altitude_m' => 712,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1223,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allegheny County Airport',
            'iata_code' => 'AGC',
            'icao_code' => 'KAGC',


            'latitude' => 40.3544,
            'longitude' => -79.9302,
            'altitude_m' => 1252,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1804,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allen Aaf',
            'iata_code' => 'BIG',
            'icao_code' => 'PABI',


            'latitude' => 63.994547,
            'longitude' => -145.721642,
            'altitude_m' => 1291,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 592,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allendorf Eder',
            'iata_code' => '',
            'icao_code' => 'EDFQ',


            'latitude' => 51.034878,
            'longitude' => 8.680839,
            'altitude_m' => 1164,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 52,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Allgau',
            'iata_code' => 'FMM',
            'icao_code' => 'EDJA',


            'latitude' => 47.988758,
            'longitude' => 10.2395,
            'altitude_m' => 2077,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1436,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alma Airport',
            'iata_code' => 'YTF',
            'icao_code' => 'CYTF',


            'latitude' => 48.508611,
            'longitude' => -71.641389,
            'altitude_m' => 449,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 53,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Almeria',
            'iata_code' => 'LEI',
            'icao_code' => 'LEAM',


            'latitude' => 36.843936,
            'longitude' => -2.370097,
            'altitude_m' => 70,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 54,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alpha',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.400377,
            'longitude' => -7.901464,
            'altitude_m' => 100,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => '\N',

            'city_id' => 526,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alpha offshore platform',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.400377,
            'longitude' => -7.901464,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => '\N',

            'city_id' => 526,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alpnach',
            'iata_code' => '',
            'icao_code' => 'LSMA',


            'latitude' => 46.943889,
            'longitude' => 8.284167,
            'altitude_m' => 1460,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 57,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alta',
            'iata_code' => 'ALF',
            'icao_code' => 'ENAT',


            'latitude' => 69.976111,
            'longitude' => 23.371667,
            'altitude_m' => 9,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 58,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alta Floresta',
            'iata_code' => 'AFL',
            'icao_code' => 'SBAT',


            'latitude' => -9.866092,
            'longitude' => -56.106206,
            'altitude_m' => 947,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 59,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Altamira',
            'iata_code' => 'ATM',
            'icao_code' => 'SBHT',


            'latitude' => -3.253906,
            'longitude' => -52.253978,
            'altitude_m' => 368,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 60,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Altay Airport',
            'iata_code' => 'AAT',
            'icao_code' => 'ZWAT',


            'latitude' => 47.866667,
            'longitude' => 88.116667,
            'altitude_m' => 2491,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 61,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Altenburg Nobitz',
            'iata_code' => 'AOC',
            'icao_code' => 'EDAC',


            'latitude' => 50.981817,
            'longitude' => 12.506361,
            'altitude_m' => 640,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 62,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Altus Afb',
            'iata_code' => 'LTS',
            'icao_code' => 'KLTS',


            'latitude' => 34.667067,
            'longitude' => -99.266681,
            'altitude_m' => 1382,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 63,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alvarado Transportation Center',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 35.0826,
            'longitude' => -106.6474,
            'altitude_m' => 4970,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 41,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Alykel',
            'iata_code' => 'NSK',
            'icao_code' => 'UOOO',


            'latitude' => 69.311053,
            'longitude' => 87.332183,
            'altitude_m' => 595,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Krasnoyarsk',

            'city_id' => 1622,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amakusa Airfield',
            'iata_code' => 'AXJ',
            'icao_code' => 'RJDA',


            'latitude' => 32.482222,
            'longitude' => 130.158889,
            'altitude_m' => 340,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 64,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amami',
            'iata_code' => 'ASJ',
            'icao_code' => 'RJKA',


            'latitude' => 28.430633,
            'longitude' => 129.712542,
            'altitude_m' => 27,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 65,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amarais Airport',
            'iata_code' => 'CPQ',
            'icao_code' => 'SDAM',


            'latitude' => -22.8592,
            'longitude' => -47.1082,
            'altitude_m' => 2008,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 388,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ambler Airport',
            'iata_code' => 'ABL',
            'icao_code' => 'PAFM',


            'latitude' => 67.106389,
            'longitude' => -157.8575,
            'altitude_m' => 334,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 69,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ambouli International Airport',
            'iata_code' => 'JIB',
            'icao_code' => 'HDAM',


            'latitude' => 11.5472,
            'longitude' => 43.1594,
            'altitude_m' => 49,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Djibouti',

            'city_id' => 613,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ambrosio L V Taravella',
            'iata_code' => 'COR',
            'icao_code' => 'SACO',


            'latitude' => -31.323619,
            'longitude' => -64.207953,
            'altitude_m' => 1604,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 524,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Americana',
            'iata_code' => '',
            'icao_code' => 'SDAI',


            'latitude' => -22.7558,
            'longitude' => -47.269402,
            'altitude_m' => 2085,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 70,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amigdhaleon',
            'iata_code' => '',
            'icao_code' => 'LGKM',


            'latitude' => 40.972775,
            'longitude' => 24.341417,
            'altitude_m' => 203,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1107,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ampugnano',
            'iata_code' => 'SAY',
            'icao_code' => 'LIQS',


            'latitude' => 43.256286,
            'longitude' => 11.255036,
            'altitude_m' => 634,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 2113,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amritsar',
            'iata_code' => 'ATQ',
            'icao_code' => 'VIAR',


            'latitude' => 31.709594,
            'longitude' => 74.797264,
            'altitude_m' => 756,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 72,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amsterdam Amstel Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.3466365905,
            'longitude' => 4.9178140173,
            'altitude_m' => 21,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 73,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Amsterdam Zuid WTC',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.338841,
            'longitude' => 4.871471,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 73,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anaco',
            'iata_code' => 'AAO',
            'icao_code' => 'SVAN',


            'latitude' => 9.430225,
            'longitude' => -64.470725,
            'altitude_m' => 721,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 74,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anacortes Airport',
            'iata_code' => 'OTS',
            'icao_code' => '',


            'latitude' => 48.498889,
            'longitude' => -122.6625,
            'altitude_m' => 241,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 75,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anapolis Military Airbase',
            'iata_code' => '',
            'icao_code' => 'SBAN',


            'latitude' => -16.23,
            'longitude' => -48.966,
            'altitude_m' => 3731,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 78,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ancenis',
            'iata_code' => '',
            'icao_code' => 'LFFI',


            'latitude' => 47.408056,
            'longitude' => -1.1775,
            'altitude_m' => 111,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 79,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anchorage Rail Depot',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 61.1318,
            'longitude' => -149.5326,
            'altitude_m' => 102,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 80,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Andrews Afb',
            'iata_code' => 'ADW',
            'icao_code' => 'KADW',


            'latitude' => 38.810806,
            'longitude' => -76.867028,
            'altitude_m' => 280,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 383,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angads',
            'iata_code' => 'OUD',
            'icao_code' => 'GMFO',


            'latitude' => 34.78715,
            'longitude' => -1.923986,
            'altitude_m' => 1535,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 1704,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angel Albino Corzo',
            'iata_code' => 'TGZ',
            'icao_code' => 'MMTG',


            'latitude' => 16.561822,
            'longitude' => -93.026081,
            'altitude_m' => 1491,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2329,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angel S Adami',
            'iata_code' => '',
            'icao_code' => 'SUAA',


            'latitude' => -34.789208,
            'longitude' => -56.264703,
            'altitude_m' => 174,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Montevideo',

            'city_id' => 1501,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angelina Co',
            'iata_code' => 'LFK',
            'icao_code' => 'KLFK',


            'latitude' => 31.234014,
            'longitude' => -94.75,
            'altitude_m' => 296,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1322,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angers St Laud',
            'iata_code' => 'QXG',
            'icao_code' => '',


            'latitude' => 47.464714,
            'longitude' => -.556405,
            'altitude_m' => 300,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 82,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Angoon Seaplane Base',
            'iata_code' => 'AGN',
            'icao_code' => 'PAGN',


            'latitude' => 57.503611,
            'longitude' => -134.585,
            'altitude_m' => 0,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 85,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ankang Airport',
            'iata_code' => 'AKA',
            'icao_code' => 'ZLAK',


            'latitude' => 32.7081,
            'longitude' => 108.931,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 87,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ankeny Regl Airport',
            'iata_code' => 'IKV',
            'icao_code' => 'KIKV',


            'latitude' => 41.691389,
            'longitude' => -93.566389,
            'altitude_m' => 910,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 89,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anklam',
            'iata_code' => 'QKQ',
            'icao_code' => 'EDCA',


            'latitude' => 53.8327,
            'longitude' => 13.669131,
            'altitude_m' => 18,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 90,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ann Arbor Municipal Airport',
            'iata_code' => 'ARB',
            'icao_code' => 'KARB',


            'latitude' => 42.132274,
            'longitude' => -83.444418,
            'altitude_m' => 839,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 91,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Annaba',
            'iata_code' => 'AAE',
            'icao_code' => 'DABB',


            'latitude' => 36.822225,
            'longitude' => 7.809167,
            'altitude_m' => 16,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 92,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Annemasse',
            'iata_code' => 'QNJ',
            'icao_code' => 'LFLI',


            'latitude' => 46.191972,
            'longitude' => 6.268386,
            'altitude_m' => 1620,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 94,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anniston Metro',
            'iata_code' => 'ANB',
            'icao_code' => 'KANB',


            'latitude' => 33.588167,
            'longitude' => -85.858111,
            'altitude_m' => 612,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 95,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anoka County Blaine Airport',
            'iata_code' => '',
            'icao_code' => 'KANE',


            'latitude' => 45.1448889,
            'longitude' => -93.2101944,
            'altitude_m' => 912,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 96,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Anqing Airport',
            'iata_code' => 'AQG',
            'icao_code' => 'ZSAQ',


            'latitude' => 30.5822,
            'longitude' => 117.0502,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 97,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antalya',
            'iata_code' => 'AYT',
            'icao_code' => 'LTAI',


            'latitude' => 36.898731,
            'longitude' => 30.800461,
            'altitude_m' => 177,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 99,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antique',
            'iata_code' => 'SJI',
            'icao_code' => 'RPVS',


            'latitude' => 10.766044,
            'longitude' => 121.933439,
            'altitude_m' => 23,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 2026,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antonio Jose De Sucre',
            'iata_code' => 'CUM',
            'icao_code' => 'SVCU',


            'latitude' => 10.450333,
            'longitude' => -64.130472,
            'altitude_m' => 25,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 561,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antonio Juarbe Pol Airport',
            'iata_code' => 'ARE',
            'icao_code' => 'TJAB',


            'latitude' => 18.451111,
            'longitude' => -66.675556,
            'altitude_m' => 23,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 118,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antonio Narino',
            'iata_code' => 'PSO',
            'icao_code' => 'SKPS',


            'latitude' => 1.396247,
            'longitude' => -77.291478,
            'altitude_m' => 5951,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1752,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Antonio Roldan Betancourt',
            'iata_code' => '',
            'icao_code' => 'SKLC',


            'latitude' => 7.811956,
            'longitude' => -76.716428,
            'altitude_m' => 46,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 403,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aomori',
            'iata_code' => 'AOJ',
            'icao_code' => 'RJSA',


            'latitude' => 40.734722,
            'longitude' => 140.690833,
            'altitude_m' => 664,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 103,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aosta Airport',
            'iata_code' => 'AOT',
            'icao_code' => 'LIMW',


            'latitude' => 45.738456,
            'longitude' => 7.368719,
            'altitude_m' => 1791,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 104,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Apalachicola Regional Airport',
            'iata_code' => 'AAF',
            'icao_code' => 'KAAF',


            'latitude' => 29.7276066,
            'longitude' => -85.0274416,
            'altitude_m' => 20,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 105,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Apopka',
            'iata_code' => 'X04',
            'icao_code' => '',


            'latitude' => 28.707222,
            'longitude' => -81.581667,
            'altitude_m' => 143,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1684,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aracatuba',
            'iata_code' => 'ARU',
            'icao_code' => 'SBAU',


            'latitude' => -21.141342,
            'longitude' => -50.424722,
            'altitude_m' => 1361,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 110,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arad',
            'iata_code' => 'ARW',
            'icao_code' => 'LRAR',


            'latitude' => 46.17655,
            'longitude' => 21.262022,
            'altitude_m' => 352,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 111,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Araguaina Airport',
            'iata_code' => 'AUX',
            'icao_code' => 'SWGN',


            'latitude' => -7.228333,
            'longitude' => -48.240833,
            'altitude_m' => 771,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 112,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arar',
            'iata_code' => 'RAE',
            'icao_code' => 'OERR',


            'latitude' => 30.906589,
            'longitude' => 41.138217,
            'altitude_m' => 1813,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 113,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Araxa Airport',
            'iata_code' => 'AAX',
            'icao_code' => 'SBAX',


            'latitude' => -19.563056,
            'longitude' => -46.960278,
            'altitude_m' => 3276,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 115,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Araxos',
            'iata_code' => 'GPA',
            'icao_code' => 'LGRX',


            'latitude' => 38.151111,
            'longitude' => 21.425556,
            'altitude_m' => 46,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1755,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arboga',
            'iata_code' => '',
            'icao_code' => 'ESQO',


            'latitude' => 59.386585,
            'longitude' => 15.924055,
            'altitude_m' => 33,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 116,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aristotelis',
            'iata_code' => 'KSO',
            'icao_code' => 'LGKA',


            'latitude' => 40.446294,
            'longitude' => 21.282186,
            'altitude_m' => 2167,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1101,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arkansas Intl',
            'iata_code' => 'BYH',
            'icao_code' => 'KBYH',


            'latitude' => 35.964347,
            'longitude' => -89.943956,
            'altitude_m' => 254,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 275,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arlanda',
            'iata_code' => 'ARN',
            'icao_code' => 'ESSA',


            'latitude' => 59.651944,
            'longitude' => 17.918611,
            'altitude_m' => 137,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2170,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Armidale',
            'iata_code' => 'ARM',
            'icao_code' => 'YARM',


            'latitude' => -30.528056,
            'longitude' => 151.617222,
            'altitude_m' => 3556,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 123,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Armilla',
            'iata_code' => '',
            'icao_code' => 'LEGA',


            'latitude' => 37.133222,
            'longitude' => -3.635694,
            'altitude_m' => 2297,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 837,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Armstrong',
            'iata_code' => 'YYW',
            'icao_code' => 'CYYW',


            'latitude' => 50.290279,
            'longitude' => -88.909721,
            'altitude_m' => 1058,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 124,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arnage',
            'iata_code' => 'LME',
            'icao_code' => 'LFRM',


            'latitude' => 47.948611,
            'longitude' => .201667,
            'altitude_m' => 194,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1252,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arnold Palmer Regional Airport',
            'iata_code' => 'LBE',
            'icao_code' => 'KLBE',


            'latitude' => 40.2759,
            'longitude' => -79.4048,
            'altitude_m' => 1185,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1244,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arnsberg Menden',
            'iata_code' => 'ZCA',
            'icao_code' => 'EDLA',


            'latitude' => 51.483333,
            'longitude' => 7.899333,
            'altitude_m' => 794,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 126,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aro',
            'iata_code' => 'MOL',
            'icao_code' => 'ENML',


            'latitude' => 62.744722,
            'longitude' => 7.2625,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1486,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Artigues De Lussac',
            'iata_code' => '',
            'icao_code' => 'LFDI',


            'latitude' => 44.982498,
            'longitude' => -.134722,
            'altitude_m' => 157,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1272,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arturo Merino Benitez Intl',
            'iata_code' => 'SCL',
            'icao_code' => 'SCEL',


            'latitude' => -33.392975,
            'longitude' => -70.785803,
            'altitude_m' => 1555,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 2052,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arturo Michelena Intl',
            'iata_code' => 'VLN',
            'icao_code' => 'SVVA',


            'latitude' => 10.149733,
            'longitude' => -67.9284,
            'altitude_m' => 1417,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 2369,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arusha',
            'iata_code' => 'ARK',
            'icao_code' => 'HTAR',


            'latitude' => -3.367794,
            'longitude' => 36.633333,
            'altitude_m' => 4550,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Dar_es_Salaam',

            'city_id' => 127,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arvidsjaur',
            'iata_code' => 'AJR',
            'icao_code' => 'ESNX',


            'latitude' => 65.590278,
            'longitude' => 19.281944,
            'altitude_m' => 1245,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 128,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Arvika',
            'iata_code' => '',
            'icao_code' => 'ESKV',


            'latitude' => 59.675856,
            'longitude' => 12.639442,
            'altitude_m' => 237,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 129,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Asahikawa',
            'iata_code' => 'AKJ',
            'icao_code' => 'RJEC',


            'latitude' => 43.670833,
            'longitude' => 142.4475,
            'altitude_m' => 721,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 130,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Asheville Regional Airport',
            'iata_code' => 'AVL',
            'icao_code' => 'KAVL',


            'latitude' => 35.436194,
            'longitude' => -82.541806,
            'altitude_m' => 2165,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 131,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Asmara Intl',
            'iata_code' => 'ASM',
            'icao_code' => 'HHAS',


            'latitude' => 15.291853,
            'longitude' => 38.910667,
            'altitude_m' => 7661,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Asmera',

            'city_id' => 132,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aspen Pitkin County Sardy Field',
            'iata_code' => 'ASE',
            'icao_code' => 'KASE',


            'latitude' => 39.2232,
            'longitude' => -106.869,
            'altitude_m' => 7820,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 133,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Assis',
            'iata_code' => '',
            'icao_code' => 'SBAS',


            'latitude' => -22.638564,
            'longitude' => -50.455914,
            'altitude_m' => 1850,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 134,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Astrakhan',
            'iata_code' => 'ASF',
            'icao_code' => 'URWA',


            'latitude' => 46.283333,
            'longitude' => 48.006278,
            'altitude_m' => -65,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 135,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Asturias',
            'iata_code' => 'OVD',
            'icao_code' => 'LEAS',


            'latitude' => 43.563567,
            'longitude' => -6.034622,
            'altitude_m' => 416,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 155,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aswan Intl',
            'iata_code' => 'ASW',
            'icao_code' => 'HESN',


            'latitude' => 23.964356,
            'longitude' => 32.819975,
            'altitude_m' => 662,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 137,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Asyut International Airport',
            'iata_code' => 'ATZ',
            'icao_code' => 'HEAT',


            'latitude' => 27.046508,
            'longitude' => 31.011983,
            'altitude_m' => 772,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 138,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ataturk',
            'iata_code' => 'IST',
            'icao_code' => 'LTBA',


            'latitude' => 40.976922,
            'longitude' => 28.814606,
            'altitude_m' => 163,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1023,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Athen Helenikon Airport',
            'iata_code' => 'HEW',
            'icao_code' => '',


            'latitude' => 37.8933,
            'longitude' => 23.7261,
            'altitude_m' => 69,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 139,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atikokan Muni',
            'iata_code' => 'YIB',
            'icao_code' => 'CYIB',


            'latitude' => 48.773888,
            'longitude' => -91.638611,
            'altitude_m' => 1408,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Coral_Harbour',

            'city_id' => 140,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atlantic City Intl',
            'iata_code' => 'ACY',
            'icao_code' => 'KACY',


            'latitude' => 39.457583,
            'longitude' => -74.577167,
            'altitude_m' => 75,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 141,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atocha',
            'iata_code' => '',
            'icao_code' => 'MDAT',


            'latitude' => 40.4075,
            'longitude' => -3.691667,
            'altitude_m' => 2188,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atqasuk Edward Burnell Sr Memorial Airport',
            'iata_code' => 'ATK',
            'icao_code' => 'PATQ',


            'latitude' => 70.4673,
            'longitude' => -157.436,
            'altitude_m' => 96,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 142,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atsugi Naf',
            'iata_code' => '',
            'icao_code' => 'RJTA',


            'latitude' => 35.454611,
            'longitude' => 139.450167,
            'altitude_m' => 205,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 143,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Atyrau',
            'iata_code' => 'GUW',
            'icao_code' => 'UATG',


            'latitude' => 47.121944,
            'longitude' => 51.821389,
            'altitude_m' => 0,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Oral',

            'city_id' => 144,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Auckland Intl',
            'iata_code' => 'AKL',
            'icao_code' => 'NZAA',


            'latitude' => -37.008056,
            'longitude' => 174.791667,
            'altitude_m' => 23,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 146,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Augsburg',
            'iata_code' => 'AGB',
            'icao_code' => 'EDMA',


            'latitude' => 48.425158,
            'longitude' => 10.931764,
            'altitude_m' => 1515,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 147,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Augsburg HBF',
            'iata_code' => 'AUB',
            'icao_code' => 'AUGS',


            'latitude' => 48.3655,
            'longitude' => 10.886,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 147,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Augsburg Railway',
            'iata_code' => 'ZAU',
            'icao_code' => '',


            'latitude' => 48.3655,
            'longitude' => 10.8863,
            'altitude_m' => 500,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 147,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Augusto Severo',
            'iata_code' => 'NAT',
            'icao_code' => 'SBNT',


            'latitude' => -5.911417,
            'longitude' => -35.247717,
            'altitude_m' => 169,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 1570,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aurangabad',
            'iata_code' => 'IXU',
            'icao_code' => 'VAAU',


            'latitude' => 19.862728,
            'longitude' => 75.398114,
            'altitude_m' => 1911,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 148,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aurel Vlaicu',
            'iata_code' => 'BBU',
            'icao_code' => 'LRBS',


            'latitude' => 44.503194,
            'longitude' => 26.102111,
            'altitude_m' => 297,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 335,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aurillac',
            'iata_code' => 'AUR',
            'icao_code' => 'LFLW',


            'latitude' => 44.891388,
            'longitude' => 2.421944,
            'altitude_m' => 2096,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 149,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Austin Straubel Intl',
            'iata_code' => 'GRB',
            'icao_code' => 'KGRB',


            'latitude' => 44.485072,
            'longitude' => -88.129589,
            'altitude_m' => 695,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 847,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Auvergne',
            'iata_code' => 'CFE',
            'icao_code' => 'LFLC',


            'latitude' => 45.786661,
            'longitude' => 3.169169,
            'altitude_m' => 1090,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 494,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Aviano Ab',
            'iata_code' => 'AVB',
            'icao_code' => 'LIPA',


            'latitude' => 46.031889,
            'longitude' => 12.596472,
            'altitude_m' => 410,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 153,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'BLABU',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.7946,
            'longitude' => 11.0183,
            'altitude_m' => 551,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 271,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'BWKAM',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.43,
            'longitude' => 11.8,
            'altitude_m' => 500,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 68,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Babice',
            'iata_code' => '',
            'icao_code' => 'EPBC',


            'latitude' => 52.268494,
            'longitude' => 20.911047,
            'altitude_m' => 352,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 2444,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Babimost',
            'iata_code' => 'IEG',
            'icao_code' => 'EPZG',


            'latitude' => 52.138517,
            'longitude' => 15.798556,
            'altitude_m' => 194,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 2556,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bacacheri',
            'iata_code' => 'BFH',
            'icao_code' => 'SBBI',


            'latitude' => -25.405078,
            'longitude' => -49.232036,
            'altitude_m' => 3057,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 564,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bacau',
            'iata_code' => 'BCM',
            'icao_code' => 'LRBC',


            'latitude' => 46.521946,
            'longitude' => 26.910278,
            'altitude_m' => 607,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 157,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bacolod',
            'iata_code' => 'BCD',
            'icao_code' => 'RPVB',


            'latitude' => 10.642511,
            'longitude' => 122.929617,
            'altitude_m' => 25,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 158,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baguio',
            'iata_code' => 'BAG',
            'icao_code' => 'RPUB',


            'latitude' => 16.375103,
            'longitude' => 120.619636,
            'altitude_m' => 4251,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 162,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bahawalpur Airport',
            'iata_code' => 'BHV',
            'icao_code' => 'OPBW',


            'latitude' => 29.3481,
            'longitude' => 71.717981,
            'altitude_m' => 392,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 163,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bahia San Lucas',
            'iata_code' => '',
            'icao_code' => 'CABO',


            'latitude' => 22.880854,
            'longitude' => -109.902117,
            'altitude_m' => 0,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 357,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bailian Airport',
            'iata_code' => 'LZH',
            'icao_code' => 'ZGZH',


            'latitude' => 24.2075,
            'longitude' => 109.391,
            'altitude_m' => 295,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1295,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baillif Airport',
            'iata_code' => 'BBR',
            'icao_code' => 'TFFB',


            'latitude' => 16.0133,
            'longitude' => -61.7422,
            'altitude_m' => 59,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guadeloupe',

            'city_id' => 203,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bairnsdale Airport',
            'iata_code' => 'BSJ',
            'icao_code' => 'YBNS',


            'latitude' => -37.8875,
            'longitude' => 147.567778,
            'altitude_m' => 165,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 166,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baita Airport',
            'iata_code' => 'HET',
            'icao_code' => 'ZBHH',


            'latitude' => 40.851422,
            'longitude' => 111.824103,
            'altitude_m' => 3556,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 956,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baiyun Intl',
            'iata_code' => 'CAN',
            'icao_code' => 'ZGGG',


            'latitude' => 23.392436,
            'longitude' => 113.298786,
            'altitude_m' => 50,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 865,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baker Lake',
            'iata_code' => 'YBK',
            'icao_code' => 'CYBK',


            'latitude' => 64.298889,
            'longitude' => -96.077778,
            'altitude_m' => 59,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 169,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Balakovo Airport',
            'iata_code' => 'BWO',
            'icao_code' => 'UWSB',


            'latitude' => 51.8583,
            'longitude' => 47.7456,
            'altitude_m' => 95,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 170,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Balandino',
            'iata_code' => 'CEK',
            'icao_code' => 'USCC',


            'latitude' => 55.305836,
            'longitude' => 61.503333,
            'altitude_m' => 769,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 456,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bale Mulhouse',
            'iata_code' => 'MLH',
            'icao_code' => 'LFSB',


            'latitude' => 47.589583,
            'longitude' => 7.529914,
            'altitude_m' => 885,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1529,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bali Ngurah Rai',
            'iata_code' => 'DPS',
            'icao_code' => 'WADD',


            'latitude' => -8.748169,
            'longitude' => 115.167172,
            'altitude_m' => 14,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Makassar',

            'city_id' => 594,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Balice',
            'iata_code' => 'KRK',
            'icao_code' => 'EPKK',


            'latitude' => 50.077731,
            'longitude' => 19.784836,
            'altitude_m' => 791,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1180,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Balikesir',
            'iata_code' => 'BZI',
            'icao_code' => 'LTBF',


            'latitude' => 39.619258,
            'longitude' => 27.925958,
            'altitude_m' => 340,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 171,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ballarat',
            'iata_code' => '',
            'icao_code' => 'YBLT',


            'latitude' => -37.511667,
            'longitude' => 143.791111,
            'altitude_m' => 1433,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 173,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bamberg Aaf',
            'iata_code' => '',
            'icao_code' => 'ETEJ',


            'latitude' => 49.920433,
            'longitude' => 10.914233,
            'altitude_m' => 823,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 175,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bamberg BF',
            'iata_code' => 'BAM',
            'icao_code' => 'BAMB',


            'latitude' => 49.911,
            'longitude' => 10.9,
            'altitude_m' => 800,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 175,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bamberg County Airport',
            'iata_code' => '99N',
            'icao_code' => '',


            'latitude' => 33.3045278,
            'longitude' => -81.1084167,
            'altitude_m' => 231,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 176,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bandaranaike Intl Colombo',
            'iata_code' => 'CMB',
            'icao_code' => 'VCBI',


            'latitude' => 7.180756,
            'longitude' => 79.884117,
            'altitude_m' => 30,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Colombo',

            'city_id' => 509,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bandirma',
            'iata_code' => 'BDM',
            'icao_code' => 'LTBG',


            'latitude' => 40.317972,
            'longitude' => 27.977694,
            'altitude_m' => 170,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 179,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bangkok',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 13.9126,
            'longitude' => 100.607,
            'altitude_m' => 9,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Bangkok',

            'city_id' => 181,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bangkok Intl closed',
            'iata_code' => '',
            'icao_code' => 'BKKX',


            'latitude' => 13.91111,
            'longitude' => 100.60611,
            'altitude_m' => 5,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Bangkok',

            'city_id' => 181,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Banja Luka International Airport',
            'iata_code' => 'BNX',
            'icao_code' => 'LQBK',


            'latitude' => 44.941444,
            'longitude' => 17.297501,
            'altitude_m' => 400,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Sarajevo',

            'city_id' => 182,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Banks Airport',
            'iata_code' => 'ME5',
            'icao_code' => '',


            'latitude' => 44.1653889,
            'longitude' => -68.4281667,
            'altitude_m' => 100,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2196,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baoan Intl',
            'iata_code' => 'SZX',
            'icao_code' => 'ZGSZ',


            'latitude' => 22.639258,
            'longitude' => 113.810664,
            'altitude_m' => 13,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2100,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baoshan Airport',
            'iata_code' => 'BSD',
            'icao_code' => 'ZPBS',


            'latitude' => 25.053333,
            'longitude' => 99.168333,
            'altitude_m' => 500,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 184,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baotou Airport',
            'iata_code' => 'BAV',
            'icao_code' => 'ZBOW',


            'latitude' => 40.56,
            'longitude' => 109.997,
            'altitude_m' => 3321,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 185,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baraboo Wisconsin Dells Airport',
            'iata_code' => 'DLL',
            'icao_code' => 'KDLL',


            'latitude' => 43.5217843,
            'longitude' => -89.7709266,
            'altitude_m' => 979,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 187,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baracoa',
            'iata_code' => 'MGN',
            'icao_code' => 'SKMG',


            'latitude' => 9.284739,
            'longitude' => -74.846092,
            'altitude_m' => 178,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1351,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barajas',
            'iata_code' => 'MAD',
            'icao_code' => 'LEMD',


            'latitude' => 40.493556,
            'longitude' => -3.566764,
            'altitude_m' => 2000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barataevka',
            'iata_code' => 'ULV',
            'icao_code' => 'UWLL',


            'latitude' => 54.268299,
            'longitude' => 48.2267,
            'altitude_m' => 463,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2347,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barberey',
            'iata_code' => 'QYR',
            'icao_code' => 'LFQB',


            'latitude' => 48.322136,
            'longitude' => 4.016703,
            'altitude_m' => 388,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2313,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barberton Airport',
            'iata_code' => '',
            'icao_code' => 'FABR',


            'latitude' => -25.7175,
            'longitude' => 30.975,
            'altitude_m' => 2260,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 189,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barcelona',
            'iata_code' => 'BCN',
            'icao_code' => 'LEBL',


            'latitude' => 41.297078,
            'longitude' => 2.078464,
            'altitude_m' => 12,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 191,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barcelona Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.358901,
            'longitude' => 2.178447,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 191,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bareilly',
            'iata_code' => '',
            'icao_code' => 'VIBY',


            'latitude' => 28.422061,
            'longitude' => 79.450842,
            'altitude_m' => 580,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 192,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bari',
            'iata_code' => 'BRI',
            'icao_code' => 'LIBD',


            'latitude' => 41.138856,
            'longitude' => 16.760594,
            'altitude_m' => 177,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 193,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barinas',
            'iata_code' => 'BNS',
            'icao_code' => 'SVBI',


            'latitude' => 8.619575,
            'longitude' => -70.220825,
            'altitude_m' => 666,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 194,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barkarby',
            'iata_code' => '',
            'icao_code' => 'ESKB',


            'latitude' => 59.418694,
            'longitude' => 17.890694,
            'altitude_m' => 50,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2170,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barksdale Afb',
            'iata_code' => 'BAD',
            'icao_code' => 'KBAD',


            'latitude' => 32.50182,
            'longitude' => -93.662674,
            'altitude_m' => 166,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2107,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barnaul',
            'iata_code' => 'BAX',
            'icao_code' => 'UNBB',


            'latitude' => 53.363775,
            'longitude' => 83.538533,
            'altitude_m' => 838,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Omsk',

            'city_id' => 195,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barnstable Muni Boardman Polando Fld',
            'iata_code' => 'HYA',
            'icao_code' => 'KHYA',


            'latitude' => 41.669336,
            'longitude' => -70.280356,
            'altitude_m' => 55,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 196,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barquisimeto Intl',
            'iata_code' => 'BRM',
            'icao_code' => 'SVBM',


            'latitude' => 10.042747,
            'longitude' => -69.358619,
            'altitude_m' => 2042,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 197,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barreiras Airport',
            'iata_code' => 'BRA',
            'icao_code' => 'SNBR',


            'latitude' => -12.083333,
            'longitude' => -45,
            'altitude_m' => 1356,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 200,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Barrow County Airport',
            'iata_code' => 'WDR',
            'icao_code' => 'KWDR',


            'latitude' => 33.9828611,
            'longitude' => -83.6674167,
            'altitude_m' => 943,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2485,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Base Aerea De Santos',
            'iata_code' => 'SSZ',
            'icao_code' => 'SBST',


            'latitude' => -23.925206,
            'longitude' => -46.2875,
            'altitude_m' => 10,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2054,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Basel SBB',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 47.547531,
            'longitude' => 7.58977,
            'altitude_m' => 800,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 202,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bassatine',
            'iata_code' => 'MEK',
            'icao_code' => 'GMFM',


            'latitude' => 33.879067,
            'longitude' => -5.515125,
            'altitude_m' => 1890,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 1432,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Basseterre Port',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 17.290464,
            'longitude' => -62.709473,
            'altitude_m' => 0,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/St_Kitts',

            'city_id' => 204,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bassillac',
            'iata_code' => 'PGX',
            'icao_code' => 'LFBX',


            'latitude' => 45.198055,
            'longitude' => .815556,
            'altitude_m' => 328,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1776,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bateen',
            'iata_code' => 'AZI',
            'icao_code' => 'OMAD',


            'latitude' => 24.428333,
            'longitude' => 54.458084,
            'altitude_m' => 16,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 9,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bathurst Airport',
            'iata_code' => 'BHS',
            'icao_code' => 'YBTH',


            'latitude' => -33.4094,
            'longitude' => 149.652,
            'altitude_m' => 2435,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 207,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bathurst Airport',
            'iata_code' => 'ZBF',
            'icao_code' => 'CZBF',


            'latitude' => 47.6297,
            'longitude' => -65.7389,
            'altitude_m' => 193,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Halifax',

            'city_id' => 208,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Batman',
            'iata_code' => 'BAL',
            'icao_code' => 'LTCJ',


            'latitude' => 37.928969,
            'longitude' => 41.116583,
            'altitude_m' => 1822,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 209,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Batna Airport',
            'iata_code' => 'BLJ',
            'icao_code' => 'DABT',


            'latitude' => 35.752106,
            'longitude' => 6.308589,
            'altitude_m' => 2697,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 210,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baton Rouge Metro Ryan Fld',
            'iata_code' => 'BTR',
            'icao_code' => 'KBTR',


            'latitude' => 30.533167,
            'longitude' => -91.149639,
            'altitude_m' => 70,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 211,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Batsfjord',
            'iata_code' => 'BJF',
            'icao_code' => 'ENBS',


            'latitude' => 70.600278,
            'longitude' => 29.6925,
            'altitude_m' => 490,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 212,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Batumi',
            'iata_code' => 'BUS',
            'icao_code' => 'UGSB',


            'latitude' => 41.610278,
            'longitude' => 41.599694,
            'altitude_m' => 105,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tbilisi',

            'city_id' => 213,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Baudette Intl',
            'iata_code' => 'BDE',
            'icao_code' => 'KBDE',


            'latitude' => 48.728444,
            'longitude' => -94.612222,
            'altitude_m' => 1086,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 214,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bauru',
            'iata_code' => 'BAU',
            'icao_code' => 'SBBU',


            'latitude' => -22.345042,
            'longitude' => -49.0538,
            'altitude_m' => 2025,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 215,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bauru-Arealva',
            'iata_code' => 'JTC',
            'icao_code' => 'SJTC',


            'latitude' => -22.157778,
            'longitude' => -49.068333,
            'altitude_m' => 594,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 215,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bautzen',
            'iata_code' => 'BBJ',
            'icao_code' => 'EDAB',


            'latitude' => 51.193531,
            'longitude' => 14.519747,
            'altitude_m' => 568,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 216,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bayreuth',
            'iata_code' => 'BYU',
            'icao_code' => 'EDQD',


            'latitude' => 49.984428,
            'longitude' => 11.638569,
            'altitude_m' => 1601,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 217,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beauvechain',
            'iata_code' => '',
            'icao_code' => 'EBBE',


            'latitude' => 50.75861,
            'longitude' => 4.768333,
            'altitude_m' => 370,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 220,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beaver Falls',
            'iata_code' => 'BFP',
            'icao_code' => 'KBFP',


            'latitude' => 40.7724722,
            'longitude' => -80.3914444,
            'altitude_m' => 1253,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 221,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beech Factory Airport',
            'iata_code' => 'BEC',
            'icao_code' => 'KBEC',


            'latitude' => 37.6939167,
            'longitude' => -97.2149167,
            'altitude_m' => 1409,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2476,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Begishevo',
            'iata_code' => 'NBC',
            'icao_code' => 'UWKE',


            'latitude' => 55.34,
            'longitude' => 52.06,
            'altitude_m' => 50,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1613,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beihai Airport',
            'iata_code' => 'BHY',
            'icao_code' => 'ZGBH',


            'latitude' => 21.5394,
            'longitude' => 109.294,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 224,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beijing Nanyuan Airport',
            'iata_code' => 'NAY',
            'icao_code' => 'ZBBB',


            'latitude' => 39.7825,
            'longitude' => 116.387778,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beijing Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.5408,
            'longitude' => 116.2516,
            'altitude_m' => 143,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beijing South Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.5157,
            'longitude' => 116.2235,
            'altitude_m' => 144,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beijing West Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.8955463,
            'longitude' => 116.3201722,
            'altitude_m' => 167,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beira',
            'iata_code' => 'BEW',
            'icao_code' => 'FQBR',


            'latitude' => -19.796419,
            'longitude' => 34.907556,
            'altitude_m' => 33,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Maputo',

            'city_id' => 226,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Belfast City',
            'iata_code' => 'BHD',
            'icao_code' => 'EGAC',


            'latitude' => 54.618056,
            'longitude' => -5.8725,
            'altitude_m' => 15,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 228,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Belfast Intl',
            'iata_code' => 'BFS',
            'icao_code' => 'EGAA',


            'latitude' => 54.6575,
            'longitude' => -6.215833,
            'altitude_m' => 268,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 228,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Belgorod International Airport',
            'iata_code' => 'EGO',
            'icao_code' => 'UUOB',


            'latitude' => 50.6438,
            'longitude' => 36.5901,
            'altitude_m' => 735,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 230,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bella Bella Airport',
            'iata_code' => 'ZEL',
            'icao_code' => 'CYJQ',


            'latitude' => 52.139722,
            'longitude' => -128.063611,
            'altitude_m' => 162,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 231,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Belleau Airport',
            'iata_code' => '',
            'icao_code' => 'LFFH',


            'latitude' => 49.066944,
            'longitude' => 3.356111,
            'altitude_m' => 719,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 450,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bellegarde',
            'iata_code' => 'LIG',
            'icao_code' => 'LFBL',


            'latitude' => 45.862778,
            'longitude' => 1.179444,
            'altitude_m' => 1300,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1283,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bellevue',
            'iata_code' => '',
            'icao_code' => 'LFQF',


            'latitude' => 46.967283,
            'longitude' => 4.260572,
            'altitude_m' => 997,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 150,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Belorussky Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.7764,
            'longitude' => 37.5803,
            'altitude_m' => 400,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bemidji Regional Airport',
            'iata_code' => 'BJI',
            'icao_code' => 'KBJI',


            'latitude' => 47.510722,
            'longitude' => -94.934722,
            'altitude_m' => 1391,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 233,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bend Municipal Airport',
            'iata_code' => '',
            'icao_code' => 'KBDN',


            'latitude' => 44.0945556,
            'longitude' => -121.2002222,
            'altitude_m' => 3460,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 234,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bendigo Airport',
            'iata_code' => '',
            'icao_code' => 'YBDG',


            'latitude' => -36.7394,
            'longitude' => 144.33,
            'altitude_m' => 705,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 235,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Benito Salas',
            'iata_code' => 'NVA',
            'icao_code' => 'SKNV',


            'latitude' => 2.95015,
            'longitude' => -75.294,
            'altitude_m' => 1464,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1578,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Benson Airstrip',
            'iata_code' => '',
            'icao_code' => '2XS8',


            'latitude' => 29.229405,
            'longitude' => -99.823947,
            'altitude_m' => 929,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2363,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Beppu Airport',
            'iata_code' => 'BPU',
            'icao_code' => '',


            'latitude' => 33.3,
            'longitude' => 131.5333,
            'altitude_m' => 197,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 239,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bergamo Orio Al Serio',
            'iata_code' => 'BGY',
            'icao_code' => 'LIME',


            'latitude' => 45.673889,
            'longitude' => 9.704166,
            'altitude_m' => 782,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 240,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bergstrasse Airport',
            'iata_code' => '',
            'icao_code' => 'EDGZ',


            'latitude' => 49.567222,
            'longitude' => 8.611389,
            'altitude_m' => 319,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2457,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Berlin Brandenburg Willy Brandt',
            'iata_code' => 'BER',
            'icao_code' => 'EDDB',


            'latitude' => 52.366667,
            'longitude' => 13.503333,
            'altitude_m' => 154,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Berlin Gatow',
            'iata_code' => 'GWW',
            'icao_code' => '',


            'latitude' => 52.475,
            'longitude' => 13.139,
            'altitude_m' => 160,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Berlin Hauptbahnhof',
            'iata_code' => 'QPP',
            'icao_code' => '',


            'latitude' => 52.52493,
            'longitude' => 13.36963,
            'altitude_m' => 110,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bern Belp',
            'iata_code' => 'BRN',
            'icao_code' => 'LSZB',


            'latitude' => 46.9141,
            'longitude' => 7.497153,
            'altitude_m' => 1674,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 244,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bethlehem',
            'iata_code' => '',
            'icao_code' => 'FABM',


            'latitude' => -28.248392,
            'longitude' => 28.336125,
            'altitude_m' => 5561,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 245,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bhisho',
            'iata_code' => 'BIY',
            'icao_code' => 'FABE',


            'latitude' => -32.89715,
            'longitude' => 27.279111,
            'altitude_m' => 1950,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 267,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bhopal',
            'iata_code' => 'BHO',
            'icao_code' => 'VABP',


            'latitude' => 23.287467,
            'longitude' => 77.337375,
            'altitude_m' => 1719,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 247,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bhubaneshwar',
            'iata_code' => 'BBI',
            'icao_code' => 'VEBS',


            'latitude' => 20.244364,
            'longitude' => 85.817781,
            'altitude_m' => 138,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 248,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bhuj',
            'iata_code' => 'BHJ',
            'icao_code' => 'VABJ',


            'latitude' => 23.287828,
            'longitude' => 69.670147,
            'altitude_m' => 268,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 249,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Biard',
            'iata_code' => 'PIS',
            'icao_code' => 'LFBI',


            'latitude' => 46.587745,
            'longitude' => .306666,
            'altitude_m' => 423,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1816,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bicycle Lake Aaf',
            'iata_code' => 'BYS',
            'icao_code' => 'KBYS',


            'latitude' => 35.280531,
            'longitude' => -116.630031,
            'altitude_m' => 2350,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 741,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bielefeld',
            'iata_code' => 'BFE',
            'icao_code' => 'EDLI',


            'latitude' => 51.964833,
            'longitude' => 8.544833,
            'altitude_m' => 454,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 250,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bienenfarm Airport',
            'iata_code' => '',
            'icao_code' => 'EDOI',


            'latitude' => 52.6617,
            'longitude' => 12.7458,
            'altitude_m' => 131,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1571,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Big Bear City',
            'iata_code' => 'L35',
            'icao_code' => '',


            'latitude' => 34.2637778,
            'longitude' => -116.8560278,
            'altitude_m' => 6725,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 252,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Big Timber Airport',
            'iata_code' => '6S0',
            'icao_code' => 'K6S0',


            'latitude' => 45.8063889,
            'longitude' => -109.9811111,
            'altitude_m' => 4492,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 253,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Big Trout Lake Airport',
            'iata_code' => 'YTL',
            'icao_code' => 'CYTL',


            'latitude' => 53.8178,
            'longitude' => -89.8969,
            'altitude_m' => 729,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 254,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bijie Feixiong Airport',
            'iata_code' => 'BFJ',
            'icao_code' => '',


            'latitude' => 27.253,
            'longitude' => 105.426,
            'altitude_m' => 5250,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 255,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bilaspur',
            'iata_code' => 'PAB',
            'icao_code' => 'VABI',


            'latitude' => 21.9884,
            'longitude' => 82.110983,
            'altitude_m' => 899,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 257,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bilbao',
            'iata_code' => 'BIO',
            'icao_code' => 'LEBB',


            'latitude' => 43.301097,
            'longitude' => -2.910608,
            'altitude_m' => 138,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 258,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Billings field',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.199,
            'longitude' => -82.465,
            'altitude_m' => 650,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 696,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Billund',
            'iata_code' => 'BLL',
            'icao_code' => 'EKBI',


            'latitude' => 55.740322,
            'longitude' => 9.151778,
            'altitude_m' => 247,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 259,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Binghamton Bus Terminal',
            'iata_code' => '',
            'icao_code' => 'BING',


            'latitude' => 42.101438,
            'longitude' => -75.910431,
            'altitude_m' => 850,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 261,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bingol',
            'iata_code' => 'BGG',
            'icao_code' => 'LTCU',


            'latitude' => 38.86111,
            'longitude' => 40.5925,
            'altitude_m' => 3490,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 262,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Binhai',
            'iata_code' => 'TSN',
            'icao_code' => 'ZBTJ',


            'latitude' => 39.124353,
            'longitude' => 117.346183,
            'altitude_m' => 10,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2263,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bintulu',
            'iata_code' => 'BTU',
            'icao_code' => 'WBGB',


            'latitude' => 3.12385,
            'longitude' => 113.020472,
            'altitude_m' => 74,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 263,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Biratnagar',
            'iata_code' => 'BIR',
            'icao_code' => 'VNVT',


            'latitude' => 26.481453,
            'longitude' => 87.264036,
            'altitude_m' => 236,

            'time_zone_offset' => 5.75,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Katmandu',

            'city_id' => 264,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Birmingham',
            'iata_code' => 'BHX',
            'icao_code' => 'EGBB',


            'latitude' => 52.453856,
            'longitude' => -1.748028,
            'altitude_m' => 327,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 265,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Birsa Munda',
            'iata_code' => 'IXR',
            'icao_code' => 'VERC',


            'latitude' => 23.31425,
            'longitude' => 85.321675,
            'altitude_m' => 2148,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1916,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bishop International',
            'iata_code' => 'FNT',
            'icao_code' => 'KFNT',


            'latitude' => 42.965424,
            'longitude' => -83.743629,
            'altitude_m' => 782,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 722,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Biskra',
            'iata_code' => 'BSK',
            'icao_code' => 'DAUB',


            'latitude' => 34.793289,
            'longitude' => 5.738231,
            'altitude_m' => 289,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 268,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Biysk Airport',
            'iata_code' => '',
            'icao_code' => 'UNBI',


            'latitude' => 52.466667,
            'longitude' => 85.35,
            'altitude_m' => 620,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Omsk',

            'city_id' => 269,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Blackpool',
            'iata_code' => 'BLK',
            'icao_code' => 'EGNH',


            'latitude' => 53.771667,
            'longitude' => -3.028611,
            'altitude_m' => 34,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 270,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Blagnac',
            'iata_code' => 'TLS',
            'icao_code' => 'LFBO',


            'latitude' => 43.629075,
            'longitude' => 1.363819,
            'altitude_m' => 499,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2293,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bloemfontein Intl',
            'iata_code' => 'BFN',
            'icao_code' => 'FABL',


            'latitude' => -29.092722,
            'longitude' => 26.302444,
            'altitude_m' => 4458,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 273,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Blomberg 3GGW',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.930401,
            'longitude' => 9.094285,
            'altitude_m' => 200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 274,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boa Vista',
            'iata_code' => 'BVB',
            'icao_code' => 'SBBV',


            'latitude' => 2.846311,
            'longitude' => -60.690069,
            'altitude_m' => 276,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 276,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bob Sikes',
            'iata_code' => 'CEW',
            'icao_code' => 'KCEW',


            'latitude' => 30.778833,
            'longitude' => -86.522111,
            'altitude_m' => 213,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 548,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boca Raton',
            'iata_code' => 'BCT',
            'icao_code' => 'KBCT',


            'latitude' => 26.3785,
            'longitude' => -80.107694,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 277,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boccadifalco',
            'iata_code' => '',
            'icao_code' => 'LICP',


            'latitude' => 38.110833,
            'longitude' => 13.313333,
            'altitude_m' => 345,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1720,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bochum HBF',
            'iata_code' => 'BOX',
            'icao_code' => 'BOCH',


            'latitude' => 51.478506,
            'longitude' => 7.2222,
            'altitude_m' => 1000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 278,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bochum Railway',
            'iata_code' => 'EBO',
            'icao_code' => '',


            'latitude' => 51.478506,
            'longitude' => 7.222781,
            'altitude_m' => 45,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 278,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bodo',
            'iata_code' => 'BOO',
            'icao_code' => 'ENBO',


            'latitude' => 67.269167,
            'longitude' => 14.365278,
            'altitude_m' => 42,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 279,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bodrum - Milas',
            'iata_code' => 'BJV',
            'icao_code' => 'LTFE',


            'latitude' => 37.249,
            'longitude' => 27.667,
            'altitude_m' => 19,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 280,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boeing Fld King Co Intl',
            'iata_code' => 'BFI',
            'icao_code' => 'KBFI',


            'latitude' => 47.53,
            'longitude' => -122.301947,
            'altitude_m' => 21,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2081,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boise Air Terminal',
            'iata_code' => 'BOI',
            'icao_code' => 'KBOI',


            'latitude' => 43.564361,
            'longitude' => -116.222861,
            'altitude_m' => 2871,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 283,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bole Intl',
            'iata_code' => 'ADD',
            'icao_code' => 'HAAB',


            'latitude' => 8.977889,
            'longitude' => 38.799319,
            'altitude_m' => 7656,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Addis_Ababa',

            'city_id' => 15,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bologna',
            'iata_code' => 'BLQ',
            'icao_code' => 'LIPE',


            'latitude' => 44.535444,
            'longitude' => 11.288667,
            'altitude_m' => 123,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 285,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bolshoe Gryzlovo',
            'iata_code' => '',
            'icao_code' => 'UUDG',


            'latitude' => 54.786667,
            'longitude' => 37.649167,
            'altitude_m' => 797,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2177,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bolshoye Savino',
            'iata_code' => 'PEE',
            'icao_code' => 'USPP',


            'latitude' => 57.914517,
            'longitude' => 56.021214,
            'altitude_m' => 404,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1777,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bolzano',
            'iata_code' => 'BZO',
            'icao_code' => 'LIPB',


            'latitude' => 46.460194,
            'longitude' => 11.326383,
            'altitude_m' => 789,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 286,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bom Futuro Airport',
            'iata_code' => 'LVR',
            'icao_code' => 'SWFE',


            'latitude' => -13.05,
            'longitude' => -55.910833,
            'altitude_m' => 500,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 1320,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bonaventure Airport',
            'iata_code' => 'YVB',
            'icao_code' => 'CYVB',


            'latitude' => 48.0711,
            'longitude' => -65.4603,
            'altitude_m' => 123,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bonnyville Airport',
            'iata_code' => 'YBY',
            'icao_code' => 'CYBF',


            'latitude' => 54.304722,
            'longitude' => -110.741111,
            'altitude_m' => 1839,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 289,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Borg El Arab Intl',
            'iata_code' => 'HBE',
            'icao_code' => 'HEBA',


            'latitude' => 30.917669,
            'longitude' => 29.696408,
            'altitude_m' => 177,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 45,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Borisoglebskoe',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.86067,
            'longitude' => 49.10099,
            'altitude_m' => 384,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1109,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Borlange',
            'iata_code' => 'BLE',
            'icao_code' => 'ESSD',


            'latitude' => 60.422017,
            'longitude' => 15.515211,
            'altitude_m' => 503,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 292,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bornholm Ronne',
            'iata_code' => 'RNN',
            'icao_code' => 'EKRN',


            'latitude' => 55.063267,
            'longitude' => 14.759558,
            'altitude_m' => 52,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1975,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Borovaya Airfield',
            'iata_code' => '',
            'icao_code' => 'UMMB',


            'latitude' => 53.57,
            'longitude' => 27.39,
            'altitude_m' => 0,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Minsk',

            'city_id' => 1468,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Borrego Valley Airport',
            'iata_code' => 'BXS',
            'icao_code' => 'KBXS',


            'latitude' => 33.2590278,
            'longitude' => -116.3209722,
            'altitude_m' => 520,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 293,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boryspil Intl',
            'iata_code' => 'KBP',
            'icao_code' => 'UKBB',


            'latitude' => 50.345,
            'longitude' => 30.894722,
            'altitude_m' => 427,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1129,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Botucatu',
            'iata_code' => 'QCJ',
            'icao_code' => 'SDBK',


            'latitude' => -22.938,
            'longitude' => -48.467,
            'altitude_m' => 3012,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 294,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Boulder City Municipal Airport',
            'iata_code' => 'BLD',
            'icao_code' => 'KBVU',


            'latitude' => 35.5651,
            'longitude' => -114.514,
            'altitude_m' => 2201,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 295,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bourges',
            'iata_code' => 'BOU',
            'icao_code' => 'LFLD',


            'latitude' => 47.058056,
            'longitude' => 2.370278,
            'altitude_m' => 529,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 296,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bournemouth',
            'iata_code' => 'BOH',
            'icao_code' => 'EGHH',


            'latitude' => 50.78,
            'longitude' => -1.8425,
            'altitude_m' => 38,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 297,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bourscheid',
            'iata_code' => '',
            'icao_code' => 'LFQP',


            'latitude' => 48.76625,
            'longitude' => 7.200519,
            'altitude_m' => 1017,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1791,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bowerman Field',
            'iata_code' => 'HQM',
            'icao_code' => '',


            'latitude' => 46.9711944,
            'longitude' => -123.9365556,
            'altitude_m' => 18,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 964,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Braceville Airport',
            'iata_code' => '41N',
            'icao_code' => '',


            'latitude' => 41.2111675,
            'longitude' => -80.9692572,
            'altitude_m' => 900,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 299,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brackett Field',
            'iata_code' => 'POC',
            'icao_code' => 'KPOC',


            'latitude' => 34.0916667,
            'longitude' => -117.7817778,
            'altitude_m' => 1014,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1216,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bradley Intl',
            'iata_code' => 'BDL',
            'icao_code' => 'KBDL',


            'latitude' => 41.938889,
            'longitude' => -72.683222,
            'altitude_m' => 173,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2488,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Braga',
            'iata_code' => 'BGZ',
            'icao_code' => 'LPBR',


            'latitude' => 41.587058,
            'longitude' => -8.445139,
            'altitude_m' => 247,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 300,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Braganca',
            'iata_code' => 'BGC',
            'icao_code' => 'LPBG',


            'latitude' => 41.8578,
            'longitude' => -6.707125,
            'altitude_m' => 2241,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 301,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brainerd Lakes Rgnl',
            'iata_code' => 'BRD',
            'icao_code' => 'KBRD',


            'latitude' => 46.398308,
            'longitude' => -94.138078,
            'altitude_m' => 1226,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 303,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brakpan',
            'iata_code' => '',
            'icao_code' => 'FABB',


            'latitude' => -26.23865,
            'longitude' => 28.301769,
            'altitude_m' => 5300,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 304,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brampton Airport',
            'iata_code' => '',
            'icao_code' => 'CNC3',


            'latitude' => 43.7603,
            'longitude' => -79.875,
            'altitude_m' => 935,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Branches',
            'iata_code' => 'AUF',
            'icao_code' => 'LFLA',


            'latitude' => 47.850193,
            'longitude' => 3.497111,
            'altitude_m' => 523,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 151,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brandon Muni',
            'iata_code' => 'YBR',
            'icao_code' => 'CYBR',


            'latitude' => 49.91,
            'longitude' => -99.951944,
            'altitude_m' => 1343,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 306,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Branson LLC',
            'iata_code' => 'BKG',
            'icao_code' => 'KBBG',


            'latitude' => 36.531994,
            'longitude' => -93.200556,
            'altitude_m' => 1302,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 307,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brantford',
            'iata_code' => 'YFD',
            'icao_code' => 'CYFD',


            'latitude' => 43.131389,
            'longitude' => -80.3425,
            'altitude_m' => 815,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 308,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bratislava Hlavna Stanica',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 48.08,
            'longitude' => 17.06,
            'altitude_m' => 1,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 311,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bratislava hl. st.',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -48.158263,
            'longitude' => 17.105839,
            'altitude_m' => 430,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => '\N',

            'city_id' => 311,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bratsk',
            'iata_code' => 'BTK',
            'icao_code' => 'UIBB',


            'latitude' => 56.370556,
            'longitude' => 101.698331,
            'altitude_m' => 1610,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Irkutsk',

            'city_id' => 312,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bray',
            'iata_code' => '',
            'icao_code' => 'LFAQ',


            'latitude' => 49.971531,
            'longitude' => 2.697661,
            'altitude_m' => 364,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 39,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bremerhaven',
            'iata_code' => 'BRV',
            'icao_code' => 'EDWB',


            'latitude' => 53.507081,
            'longitude' => 8.572878,
            'altitude_m' => 11,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 314,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bremerton National',
            'iata_code' => 'PWT',
            'icao_code' => 'KPWT',


            'latitude' => 47.490244,
            'longitude' => -122.764814,
            'altitude_m' => 444,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 315,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bremerton Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 47.5619,
            'longitude' => -122.625,
            'altitude_m' => 7,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 315,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brenoux',
            'iata_code' => 'MEN',
            'icao_code' => 'LFNB',


            'latitude' => 44.502108,
            'longitude' => 3.532819,
            'altitude_m' => 3362,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1437,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brest',
            'iata_code' => 'BQT',
            'icao_code' => 'UMBB',


            'latitude' => 52.06,
            'longitude' => 23.53,
            'altitude_m' => 468,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 318,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Breves Airport',
            'iata_code' => 'BVS',
            'icao_code' => 'SNVS',


            'latitude' => -1.681944,
            'longitude' => -50.48,
            'altitude_m' => 131,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 319,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bricy',
            'iata_code' => 'ORE',
            'icao_code' => 'LFOJ',


            'latitude' => 47.987778,
            'longitude' => 1.760556,
            'altitude_m' => 412,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1685,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brie Champniers',
            'iata_code' => 'ANG',
            'icao_code' => 'LFBU',


            'latitude' => 45.729247,
            'longitude' => .221456,
            'altitude_m' => 436,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 86,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brigham City',
            'iata_code' => 'BMC',
            'icao_code' => 'KBMC',


            'latitude' => 41.552,
            'longitude' => -112.062,
            'altitude_m' => 4229,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 320,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brilon Hochsauerlandkreis Airport',
            'iata_code' => '',
            'icao_code' => 'EDKO',


            'latitude' => 51.4025,
            'longitude' => 8.64167,
            'altitude_m' => 1509,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 321,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brisbane Archerfield',
            'iata_code' => '',
            'icao_code' => 'YBAF',


            'latitude' => -27.570278,
            'longitude' => 153.008056,
            'altitude_m' => 63,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 323,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brisbane Intl',
            'iata_code' => 'BNE',
            'icao_code' => 'YBBN',


            'latitude' => -27.384167,
            'longitude' => 153.1175,
            'altitude_m' => 13,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 323,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bristol',
            'iata_code' => 'BRS',
            'icao_code' => 'EGGD',


            'latitude' => 51.382669,
            'longitude' => -2.719089,
            'altitude_m' => 622,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 324,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bristol Filton',
            'iata_code' => 'FZO',
            'icao_code' => 'EGTG',


            'latitude' => 51.519444,
            'longitude' => -2.590833,
            'altitude_m' => 226,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 324,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brockville Megabus Stop',
            'iata_code' => '',
            'icao_code' => 'BRKM',


            'latitude' => 44.6003,
            'longitude' => -75.7039,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 326,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brockville VIA Station',
            'iata_code' => '',
            'icao_code' => 'BRKV',


            'latitude' => 44.5919,
            'longitude' => -75.693343,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 326,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Broken Hill Airport',
            'iata_code' => 'BHQ',
            'icao_code' => 'YBHI',


            'latitude' => -32.0014,
            'longitude' => 141.472,
            'altitude_m' => 958,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Adelaide',

            'city_id' => 327,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bromma',
            'iata_code' => 'BMA',
            'icao_code' => 'ESSB',


            'latitude' => 59.354372,
            'longitude' => 17.94165,
            'altitude_m' => 47,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2170,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bromont Airport',
            'iata_code' => 'ZBM',
            'icao_code' => 'CZBM',


            'latitude' => 45.290833,
            'longitude' => -72.741944,
            'altitude_m' => 374,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 328,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bron',
            'iata_code' => 'LYN',
            'icao_code' => 'LFLY',


            'latitude' => 45.727172,
            'longitude' => 4.944275,
            'altitude_m' => 659,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1336,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Broome',
            'iata_code' => 'BME',
            'icao_code' => 'YPBR',


            'latitude' => -17.8,
            'longitude' => 122.2,
            'altitude_m' => 56,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 329,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brough',
            'iata_code' => '',
            'icao_code' => 'EGNB',


            'latitude' => 53.719667,
            'longitude' => -.566333,
            'altitude_m' => 12,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 330,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brunei Intl',
            'iata_code' => 'BWN',
            'icao_code' => 'WBSB',


            'latitude' => 4.9442,
            'longitude' => 114.928353,
            'altitude_m' => 73,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Brunei',

            'city_id' => 178,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brussels Gare Centrale',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.84548,
            'longitude' => 4.357174,
            'altitude_m' => 43,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brussels Gare du Midi',
            'iata_code' => 'ZYR',
            'icao_code' => '',


            'latitude' => 50.8,
            'longitude' => 4.4,
            'altitude_m' => 180,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brussels Natl',
            'iata_code' => 'BRU',
            'icao_code' => 'EBBR',


            'latitude' => 50.901389,
            'longitude' => 4.484444,
            'altitude_m' => 184,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Brussels South',
            'iata_code' => 'CRL',
            'icao_code' => 'EBCI',


            'latitude' => 50.459197,
            'longitude' => 4.453817,
            'altitude_m' => 614,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 448,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bruxelles-Central',
            'iata_code' => '',
            'icao_code' => 'FBCL',


            'latitude' => 50.8411,
            'longitude' => 4.3564,
            'altitude_m' => 43,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bryansk',
            'iata_code' => 'BZK',
            'icao_code' => 'UUBP',


            'latitude' => 53.214194,
            'longitude' => 34.176447,
            'altitude_m' => 663,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 333,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buchloe BF',
            'iata_code' => 'BUH',
            'icao_code' => 'BUCH',


            'latitude' => 48.0411,
            'longitude' => 10.715,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 336,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buckeburg',
            'iata_code' => '',
            'icao_code' => 'ETHB',


            'latitude' => 52.279764,
            'longitude' => 9.079843,
            'altitude_m' => 200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 337,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buckeye Municipal Airport',
            'iata_code' => 'BXK',
            'icao_code' => 'KBXK',


            'latitude' => 33.420417,
            'longitude' => -112.68618,
            'altitude_m' => 1033,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 338,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buckland Airport',
            'iata_code' => 'BKC',
            'icao_code' => 'PABL',


            'latitude' => 65.981667,
            'longitude' => -161.149167,
            'altitude_m' => 31,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 339,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buckley Afb',
            'iata_code' => 'BKF',
            'icao_code' => 'KBKF',


            'latitude' => 39.701668,
            'longitude' => -104.75166,
            'altitude_m' => 5662,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 340,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Budapest Keleti pu.',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -47.500278,
            'longitude' => -160.916111,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => '\N',

            'city_id' => 341,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Budapest Keteli',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 47.500497,
            'longitude' => 19.085484,
            'altitude_m' => 100,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Budapest',

            'city_id' => 341,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Budel',
            'iata_code' => '',
            'icao_code' => 'EHBD',


            'latitude' => 51.25528,
            'longitude' => 5.601389,
            'altitude_m' => 114,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 2452,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Budiarto',
            'iata_code' => '',
            'icao_code' => 'WICB',


            'latitude' => -6.293169,
            'longitude' => 106.5699,
            'altitude_m' => 151,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2221,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buffalo Narrows',
            'iata_code' => 'YVT',
            'icao_code' => 'CYVT',


            'latitude' => 55.841944,
            'longitude' => -108.4175,
            'altitude_m' => 1444,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 344,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buffalo-Depew Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.9074,
            'longitude' => -78.7266,
            'altitude_m' => 676,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 595,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bundaberg',
            'iata_code' => 'BDB',
            'icao_code' => 'YBUD',


            'latitude' => -24.903889,
            'longitude' => 152.318611,
            'altitude_m' => 107,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 346,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bundaberg Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -24.867837,
            'longitude' => 152.349416,
            'altitude_m' => 100,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 346,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buochs',
            'iata_code' => 'BXO',
            'icao_code' => 'LSZC',


            'latitude' => 46.974914,
            'longitude' => 8.39915,
            'altitude_m' => 1475,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 347,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buochs Airport',
            'iata_code' => 'BXO',
            'icao_code' => 'LSZC',


            'latitude' => 46.9725,
            'longitude' => 8.398611,
            'altitude_m' => 1464,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 347,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Burgos Airport',
            'iata_code' => 'RGS',
            'icao_code' => 'LEBG',


            'latitude' => 42.357628,
            'longitude' => -3.620764,
            'altitude_m' => 2945,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Burlington Airpark',
            'iata_code' => '',
            'icao_code' => 'CZBA',


            'latitude' => 43.4425,
            'longitude' => -79.850833,
            'altitude_m' => 602,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 349,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Burlington GO Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.3408282,
            'longitude' => -79.8093881,
            'altitude_m' => 243,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 349,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Burrello-Mechanicville Airport',
            'iata_code' => 'K27',
            'icao_code' => '',


            'latitude' => 42.893133,
            'longitude' => -73.66845,
            'altitude_m' => 195,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1426,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bursa Airport',
            'iata_code' => 'BTZ',
            'icao_code' => 'LTBE',


            'latitude' => 40.2332993,
            'longitude' => 29.0091991,
            'altitude_m' => 772,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 350,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Burswood Park Helipad',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -31.952,
            'longitude' => 115.859,
            'altitude_m' => 25,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 1780,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bus',
            'iata_code' => '',
            'icao_code' => 'PNMP',


            'latitude' => 11.561716,
            'longitude' => 104.914276,
            'altitude_m' => 0,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Phnom_Penh',

            'city_id' => 1792,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Butterworth',
            'iata_code' => '',
            'icao_code' => 'WMKB',


            'latitude' => 5.465917,
            'longitude' => 100.391167,
            'altitude_m' => 11,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 352,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Buttonville Muni',
            'iata_code' => 'YKZ',
            'icao_code' => 'CYKZ',


            'latitude' => 43.862221,
            'longitude' => -79.37,
            'altitude_m' => 650,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 2287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Butts Aaf',
            'iata_code' => 'FCS',
            'icao_code' => 'KFCS',


            'latitude' => 38.678394,
            'longitude' => -104.756581,
            'altitude_m' => 5838,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 734,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bydgoszcz Ignacy Jan Paderewski Airport',
            'iata_code' => 'BZG',
            'icao_code' => 'EPBY',


            'latitude' => 53.0968,
            'longitude' => 17.9777,
            'altitude_m' => 235,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 353,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Bykovo',
            'iata_code' => 'BKA',
            'icao_code' => 'UUBB',


            'latitude' => 55.617222,
            'longitude' => 38.059999,
            'altitude_m' => 427,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Byron Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 28.383504,
            'longitude' => 153.365447,
            'altitude_m' => 10,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => '\N',

            'city_id' => 354,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'C P A Carlos Rovirosa Intl',
            'iata_code' => 'VSA',
            'icao_code' => 'MMVA',


            'latitude' => 17.997,
            'longitude' => -92.817361,
            'altitude_m' => 46,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2414,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'CNC4',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.563889,
            'longitude' => -80.196111,
            'altitude_m' => 1100,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 871,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ca Mau',
            'iata_code' => 'CAH',
            'icao_code' => 'VVCM',


            'latitude' => 9.188049,
            'longitude' => 105.174721,
            'altitude_m' => 50,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 355,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cabo Frio International Airport',
            'iata_code' => 'CFB',
            'icao_code' => 'SBCB',


            'latitude' => -22.921667,
            'longitude' => -42.074167,
            'altitude_m' => 14,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 356,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cabo San Lucas International Airport',
            'iata_code' => '',
            'icao_code' => 'MMSL',


            'latitude' => 22.9475,
            'longitude' => -109.937081,
            'altitude_m' => 459,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 357,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cadete Guillermo Del Castillo Paredes',
            'iata_code' => 'TPP',
            'icao_code' => 'SPST',


            'latitude' => -6.508742,
            'longitude' => -76.373247,
            'altitude_m' => 869,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Lima',

            'city_id' => 2225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cadiz Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 36.534821,
            'longitude' => -6.290649,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 359,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cadjehoun',
            'iata_code' => 'COO',
            'icao_code' => 'DBBB',


            'latitude' => 6.357228,
            'longitude' => 2.384353,
            'altitude_m' => 19,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Porto-Novo',

            'city_id' => 536,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caernarfon Airport',
            'iata_code' => '',
            'icao_code' => 'EGCK',


            'latitude' => 53.104167,
            'longitude' => -4.340278,
            'altitude_m' => 14,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 361,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cairns Intl',
            'iata_code' => 'CNS',
            'icao_code' => 'YBCS',


            'latitude' => -16.885833,
            'longitude' => 145.755278,
            'altitude_m' => 10,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 364,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cairo Intl',
            'iata_code' => 'CAI',
            'icao_code' => 'HECA',


            'latitude' => 30.121944,
            'longitude' => 31.405556,
            'altitude_m' => 382,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 365,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cairo West',
            'iata_code' => '',
            'icao_code' => 'HECW',


            'latitude' => 30.116362,
            'longitude' => 30.915445,
            'altitude_m' => 550,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 365,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calabar',
            'iata_code' => 'CBQ',
            'icao_code' => 'DNCA',


            'latitude' => 4.976019,
            'longitude' => 8.347197,
            'altitude_m' => 210,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 367,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calabozo',
            'iata_code' => '',
            'icao_code' => 'SVCL',


            'latitude' => 8.924656,
            'longitude' => -67.417094,
            'altitude_m' => 328,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 368,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calais Dunkerque',
            'iata_code' => 'CQF',
            'icao_code' => 'LFAC',


            'latitude' => 50.962097,
            'longitude' => 1.954764,
            'altitude_m' => 12,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 369,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caldas Novas',
            'iata_code' => 'CLV',
            'icao_code' => 'SBCN',


            'latitude' => -17.7267,
            'longitude' => -48.6114,
            'altitude_m' => 2247,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 371,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caleta Olivia',
            'iata_code' => 'CVI',
            'icao_code' => '',


            'latitude' => -46.4333,
            'longitude' => -67.5333,
            'altitude_m' => 124,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 372,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calexico Intl',
            'iata_code' => 'CXL',
            'icao_code' => 'KCXL',


            'latitude' => 32.669502,
            'longitude' => -115.51333,
            'altitude_m' => 4,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 373,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calgary Intl',
            'iata_code' => 'YYC',
            'icao_code' => 'CYYC',


            'latitude' => 51.113888,
            'longitude' => -114.020278,
            'altitude_m' => 3557,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 374,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calgary Springbank Airport',
            'iata_code' => 'YBW',
            'icao_code' => 'CYBW',


            'latitude' => 51.1031,
            'longitude' => -114.374,
            'altitude_m' => 3939,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 374,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Calvinia',
            'iata_code' => '',
            'icao_code' => 'FACV',


            'latitude' => -31.500278,
            'longitude' => 19.725897,
            'altitude_m' => 3250,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 377,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cam Ranh Airport',
            'iata_code' => 'CXR',
            'icao_code' => 'VVCR',


            'latitude' => 11.998153,
            'longitude' => 109.219372,
            'altitude_m' => 40,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 1603,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Camarillo Amtrak',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 34.2164,
            'longitude' => -119.0335,
            'altitude_m' => 140,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 378,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cambridge',
            'iata_code' => 'CBG',
            'icao_code' => 'EGSC',


            'latitude' => 52.205,
            'longitude' => .175,
            'altitude_m' => 47,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 380,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cambridge Bay',
            'iata_code' => 'YCB',
            'icao_code' => 'CYCB',


            'latitude' => 69.108055,
            'longitude' => -105.138333,
            'altitude_m' => 90,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 381,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Camilo Daza',
            'iata_code' => 'CUC',
            'icao_code' => 'SKCC',


            'latitude' => 7.927567,
            'longitude' => -72.511547,
            'altitude_m' => 1096,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 555,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Campbell Aaf',
            'iata_code' => 'HOP',
            'icao_code' => 'KHOP',


            'latitude' => 36.668567,
            'longitude' => -87.496183,
            'altitude_m' => 573,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 963,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Campbell River',
            'iata_code' => 'YBL',
            'icao_code' => 'CYBL',


            'latitude' => 49.950832,
            'longitude' => -125.270833,
            'altitude_m' => 346,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 384,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Campbeltown Airport',
            'iata_code' => 'CAL',
            'icao_code' => 'EGEC',


            'latitude' => 55.4372,
            'longitude' => -5.68639,
            'altitude_m' => 42,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 385,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Campo Dell Oro',
            'iata_code' => 'AJA',
            'icao_code' => 'LFKJ',


            'latitude' => 41.923637,
            'longitude' => 8.802917,
            'altitude_m' => 18,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 25,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Campo Grande',
            'iata_code' => 'CGR',
            'icao_code' => 'SBCG',


            'latitude' => -20.468667,
            'longitude' => -54.6725,
            'altitude_m' => 1833,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 389,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canadian Rockies Intl',
            'iata_code' => 'YXC',
            'icao_code' => 'CYXC',


            'latitude' => 49.612222,
            'longitude' => -115.781944,
            'altitude_m' => 3084,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 545,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canakkale Airport',
            'iata_code' => 'CKZ',
            'icao_code' => 'LTBH',


            'latitude' => 40.137722,
            'longitude' => 26.426777,
            'altitude_m' => 23,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 391,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canal Bajo Carlos Hott Siebert',
            'iata_code' => 'ZOS',
            'icao_code' => 'SCJO',


            'latitude' => -40.611208,
            'longitude' => -73.061042,
            'altitude_m' => 187,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1695,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canberra',
            'iata_code' => 'CBR',
            'icao_code' => 'YSCB',


            'latitude' => -35.306944,
            'longitude' => 149.195,
            'altitude_m' => 1886,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 392,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cancun Intl',
            'iata_code' => 'CUN',
            'icao_code' => 'MMUN',


            'latitude' => 21.036528,
            'longitude' => -86.877083,
            'altitude_m' => 20,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 393,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canoas',
            'iata_code' => '',
            'icao_code' => 'SBCO',


            'latitude' => -29.945944,
            'longitude' => -51.144367,
            'altitude_m' => 26,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1848,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Canyonlands Field',
            'iata_code' => 'CNY',
            'icao_code' => 'KCNY',


            'latitude' => 38.755,
            'longitude' => -109.754722,
            'altitude_m' => 4555,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1480,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cape Dorset',
            'iata_code' => 'YTE',
            'icao_code' => 'CYTE',


            'latitude' => 64.23,
            'longitude' => -76.526667,
            'altitude_m' => 164,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 395,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cape Girardeau Regional Airport',
            'iata_code' => 'CGI',
            'icao_code' => 'KCGI',


            'latitude' => 37.2253,
            'longitude' => -89.5708,
            'altitude_m' => 342,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 396,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cape Town Intl',
            'iata_code' => 'CPT',
            'icao_code' => 'FACT',


            'latitude' => -33.964806,
            'longitude' => 18.601667,
            'altitude_m' => 151,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 397,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Capital Intl',
            'iata_code' => 'PEK',
            'icao_code' => 'ZBAA',


            'latitude' => 40.080111,
            'longitude' => 116.584556,
            'altitude_m' => 116,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Capitan Fap Guillermo Concha Iberico',
            'iata_code' => 'PIU',
            'icao_code' => 'SPUR',


            'latitude' => -5.20575,
            'longitude' => -80.616444,
            'altitude_m' => 120,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Lima',

            'city_id' => 1805,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Capodichino',
            'iata_code' => 'NAP',
            'icao_code' => 'LIRN',


            'latitude' => 40.886033,
            'longitude' => 14.290781,
            'altitude_m' => 294,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1568,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Captain Rogelio Castillo National Airport',
            'iata_code' => 'CYW',
            'icao_code' => 'MMCY',


            'latitude' => 20.545994,
            'longitude' => -100.88655,
            'altitude_m' => 5709,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 428,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carajas Airport',
            'iata_code' => 'CKS',
            'icao_code' => 'SBCJ',


            'latitude' => -6.11781,
            'longitude' => -50.0035,
            'altitude_m' => 2064,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1738,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caransebes',
            'iata_code' => 'CSB',
            'icao_code' => 'LRCS',


            'latitude' => 45.42,
            'longitude' => 22.253333,
            'altitude_m' => 866,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 399,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carbon County Regional-Buck Davis Field',
            'iata_code' => 'PUC',
            'icao_code' => 'KPUC',


            'latitude' => 39.609722,
            'longitude' => -110.75278,
            'altitude_m' => 5957,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1869,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cardak',
            'iata_code' => 'DNZ',
            'icao_code' => 'LTAY',


            'latitude' => 37.785567,
            'longitude' => 29.701297,
            'altitude_m' => 2795,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 593,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cardiff',
            'iata_code' => 'CWL',
            'icao_code' => 'EGFF',


            'latitude' => 51.396667,
            'longitude' => -3.343333,
            'altitude_m' => 220,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 401,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caribou Muni',
            'iata_code' => 'CAR',
            'icao_code' => 'KCAR',


            'latitude' => 46.8715,
            'longitude' => -68.017917,
            'altitude_m' => 626,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 404,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caritat',
            'iata_code' => '',
            'icao_code' => 'LFMO',


            'latitude' => 44.140481,
            'longitude' => 4.866717,
            'altitude_m' => 197,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1678,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carlisle',
            'iata_code' => 'CAX',
            'icao_code' => 'EGNC',


            'latitude' => 54.9375,
            'longitude' => -2.809167,
            'altitude_m' => 190,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 405,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carlos Alberto da Costa Neves Airport',
            'iata_code' => 'CFC',
            'icao_code' => 'SBCD',


            'latitude' => -26.788333,
            'longitude' => -50.939722,
            'altitude_m' => 3376,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 358,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carlos Ibanez Del Campo Intl',
            'iata_code' => 'PUQ',
            'icao_code' => 'SCCI',


            'latitude' => -53.002642,
            'longitude' => -70.854586,
            'altitude_m' => 139,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1889,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carora',
            'iata_code' => '',
            'icao_code' => 'SVCO',


            'latitude' => 10.175603,
            'longitude' => -70.065214,
            'altitude_m' => 1437,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 406,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carpentras',
            'iata_code' => '',
            'icao_code' => 'LFNH',


            'latitude' => 44.029847,
            'longitude' => 5.078058,
            'altitude_m' => 394,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 407,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carpiquet',
            'iata_code' => 'CFR',
            'icao_code' => 'LFRK',


            'latitude' => 49.173333,
            'longitude' => -.45,
            'altitude_m' => 256,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 360,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carrasco Intl',
            'iata_code' => 'MVD',
            'icao_code' => 'SUMU',


            'latitude' => -34.838417,
            'longitude' => -56.030806,
            'altitude_m' => 105,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Montevideo',

            'city_id' => 1501,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carriel Sur Intl',
            'iata_code' => 'CCP',
            'icao_code' => 'SCIE',


            'latitude' => -36.77265,
            'longitude' => -73.063106,
            'altitude_m' => 26,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carroll Avenue NICTD Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.7133,
            'longitude' => -86.8677,
            'altitude_m' => 630,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1450,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cartersville Airport',
            'iata_code' => 'VPC',
            'icao_code' => 'KVPC',


            'latitude' => 34.1231475,
            'longitude' => -84.8487067,
            'altitude_m' => 759,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 409,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Carthage',
            'iata_code' => 'TUN',
            'icao_code' => 'DTTA',


            'latitude' => 36.851033,
            'longitude' => 10.227217,
            'altitude_m' => 22,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Africa/Tunis',

            'city_id' => 2324,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caruaru Airport',
            'iata_code' => 'CAU',
            'icao_code' => 'SNRU',


            'latitude' => -8.28239,
            'longitude' => -36.0135,
            'altitude_m' => 1891,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 410,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Casa Central',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -34.90278,
            'longitude' => -56.213781,
            'altitude_m' => 105,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Montevideo',

            'city_id' => 1501,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Casa De Campo Intl',
            'iata_code' => 'LRM',
            'icao_code' => 'MDLR',


            'latitude' => 18.450711,
            'longitude' => -68.911833,
            'altitude_m' => 240,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Santo_Domingo',

            'city_id' => 1213,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Casa Grande Municipal Airport',
            'iata_code' => 'CGZ',
            'icao_code' => 'KCGZ',


            'latitude' => 32.954889,
            'longitude' => -111.766832,
            'altitude_m' => 1464,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 412,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Casablanca Harbor',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 33.604737,
            'longitude' => -7.611337,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 413,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Casale',
            'iata_code' => 'BDS',
            'icao_code' => 'LIBR',


            'latitude' => 40.657633,
            'longitude' => 17.947033,
            'altitude_m' => 47,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 322,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cascais',
            'iata_code' => '',
            'icao_code' => 'LPCS',


            'latitude' => 38.725025,
            'longitude' => -9.355231,
            'altitude_m' => 326,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 414,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cascavel',
            'iata_code' => 'CAC',
            'icao_code' => 'SBCA',


            'latitude' => -25.000339,
            'longitude' => -53.500764,
            'altitude_m' => 2473,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 415,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caslav',
            'iata_code' => '',
            'icao_code' => 'LKCV',


            'latitude' => 49.939653,
            'longitude' => 15.381808,
            'altitude_m' => 794,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 416,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Castle',
            'iata_code' => 'MER',
            'icao_code' => 'KMER',


            'latitude' => 37.380481,
            'longitude' => -120.568189,
            'altitude_m' => 189,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1440,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Castlegar',
            'iata_code' => 'YCG',
            'icao_code' => 'CYCG',


            'latitude' => 49.296389,
            'longitude' => -117.6325,
            'altitude_m' => 1624,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 419,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cataloi',
            'iata_code' => 'TCE',
            'icao_code' => 'LRTC',


            'latitude' => 45.062486,
            'longitude' => 28.714311,
            'altitude_m' => 200,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 2319,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Catamarca',
            'iata_code' => 'CTC',
            'icao_code' => 'SANC',


            'latitude' => -28.593214,
            'longitude' => -65.750925,
            'altitude_m' => 1522,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 421,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Catania Fontanarossa',
            'iata_code' => 'CTA',
            'icao_code' => 'LICC',


            'latitude' => 37.466781,
            'longitude' => 15.0664,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 422,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Caumont',
            'iata_code' => 'AVN',
            'icao_code' => 'LFMV',


            'latitude' => 43.9073,
            'longitude' => 4.901831,
            'altitude_m' => 124,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 154,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cedar City Rgnl',
            'iata_code' => 'CDC',
            'icao_code' => 'KCDC',


            'latitude' => 37.700967,
            'longitude' => -113.098847,
            'altitude_m' => 5622,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 425,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Celle',
            'iata_code' => 'ZCN',
            'icao_code' => 'ETHC',


            'latitude' => 52.5912,
            'longitude' => 10.022133,
            'altitude_m' => 129,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 429,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Celle-Arloh Airport',
            'iata_code' => '',
            'icao_code' => 'EDVC',


            'latitude' => 52.6872,
            'longitude' => 10.1114,
            'altitude_m' => 207,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 429,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Centraal',
            'iata_code' => 'QRH',
            'icao_code' => '',


            'latitude' => 51.924444,
            'longitude' => 4.469444,
            'altitude_m' => 7,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1985,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Centraal',
            'iata_code' => 'ZWE',
            'icao_code' => '',


            'latitude' => 51.217222,
            'longitude' => 4.421111,
            'altitude_m' => 51,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 102,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Central',
            'iata_code' => 'RTW',
            'icao_code' => 'UWSS',


            'latitude' => 51.334366,
            'longitude' => 46.022952,
            'altitude_m' => 152,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2066,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Central',
            'iata_code' => 'ZGH',
            'icao_code' => '',


            'latitude' => 55.672778,
            'longitude' => 12.564444,
            'altitude_m' => 16,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 521,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Central Railway Station',
            'iata_code' => 'YMY',
            'icao_code' => '',


            'latitude' => 45.499722,
            'longitude' => -73.566111,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1505,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Central Station',
            'iata_code' => 'ZGG',
            'icao_code' => '',


            'latitude' => 55.858,
            'longitude' => -4.258,
            'altitude_m' => 25,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 820,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Centre-Piedmont-Cherokee County Regional Airport',
            'iata_code' => 'PYP',
            'icao_code' => 'KPYP',


            'latitude' => 34.0899167,
            'longitude' => -85.6100833,
            'altitude_m' => 595,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 430,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cerro Moreno Intl',
            'iata_code' => 'ANF',
            'icao_code' => 'SCFA',


            'latitude' => -23.444478,
            'longitude' => -70.4451,
            'altitude_m' => 455,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 101,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cervia',
            'iata_code' => '',
            'icao_code' => 'LIPC',


            'latitude' => 44.224175,
            'longitude' => 12.307203,
            'altitude_m' => 18,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 431,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ceske Budejovice',
            'iata_code' => '',
            'icao_code' => 'LKCS',


            'latitude' => 48.946381,
            'longitude' => 14.427464,
            'altitude_m' => 1417,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 432,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cessnock Airport',
            'iata_code' => 'CES',
            'icao_code' => 'YCNK',


            'latitude' => -32.7875,
            'longitude' => 151.342,
            'altitude_m' => 211,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 433,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ceuta Heliport',
            'iata_code' => 'JCU',
            'icao_code' => 'GECT',


            'latitude' => 35.8969,
            'longitude' => -5.29908,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 434,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chabeuil',
            'iata_code' => 'VAF',
            'icao_code' => 'LFLU',


            'latitude' => 44.921594,
            'longitude' => 4.9699,
            'altitude_m' => 525,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2368,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chacalluta',
            'iata_code' => 'ARI',
            'icao_code' => 'SCAR',


            'latitude' => -18.348531,
            'longitude' => -70.338742,
            'altitude_m' => 167,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 120,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chachoan',
            'iata_code' => 'ATF',
            'icao_code' => 'SEAM',


            'latitude' => -1.212067,
            'longitude' => -78.574636,
            'altitude_m' => 8502,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guayaquil',

            'city_id' => 67,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chadron Municipal Airport',
            'iata_code' => 'CDR',
            'icao_code' => 'KCDR',


            'latitude' => 42.8375,
            'longitude' => -103.095556,
            'altitude_m' => 3297,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 435,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chaklala',
            'iata_code' => 'ISB',
            'icao_code' => 'OPRN',


            'latitude' => 33.616653,
            'longitude' => 73.099233,
            'altitude_m' => 1668,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1020,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Challanges',
            'iata_code' => '',
            'icao_code' => 'LFGF',


            'latitude' => 47.005886,
            'longitude' => 4.893425,
            'altitude_m' => 656,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 218,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Challes Les Eaux',
            'iata_code' => '',
            'icao_code' => 'LFLE',


            'latitude' => 45.56105,
            'longitude' => 5.975761,
            'altitude_m' => 973,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 436,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chamartin Station',
            'iata_code' => '',
            'icao_code' => 'MADC',


            'latitude' => 40.472272,
            'longitude' => -3.68215,
            'altitude_m' => 2188,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Champagne',
            'iata_code' => 'RHE',
            'icao_code' => 'LFSR',


            'latitude' => 49.31,
            'longitude' => 4.05,
            'altitude_m' => 312,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1932,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Champaign',
            'iata_code' => 'CMI',
            'icao_code' => 'KCMI',


            'latitude' => 40.03925,
            'longitude' => -88.278056,
            'altitude_m' => 754,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 437,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chan Gurney',
            'iata_code' => 'YKN',
            'icao_code' => 'KYKN',


            'latitude' => 42.8711,
            'longitude' => -97.3969,
            'altitude_m' => 1200,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2519,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chandigarh',
            'iata_code' => 'IXC',
            'icao_code' => 'VICG',


            'latitude' => 30.673469,
            'longitude' => 76.788542,
            'altitude_m' => 1012,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 438,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changbaishan Airport',
            'iata_code' => 'NBS',
            'icao_code' => '',


            'latitude' => 42.088056,
            'longitude' => 127.548889,
            'altitude_m' => 2762,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 168,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changbei Intl',
            'iata_code' => 'KHN',
            'icao_code' => 'ZSCN',


            'latitude' => 28.865,
            'longitude' => 115.9,
            'altitude_m' => 143,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1556,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changchun',
            'iata_code' => 'CGQ',
            'icao_code' => 'ZYCC',


            'latitude' => 43.5412,
            'longitude' => 125.1201,
            'altitude_m' => 227,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 439,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changde Airport',
            'iata_code' => 'CGD',
            'icao_code' => 'ZGCD',


            'latitude' => 28.9189,
            'longitude' => 111.64,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 440,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changzhi Airport',
            'iata_code' => 'CIH',
            'icao_code' => 'ZBCZ',


            'latitude' => 36.2475,
            'longitude' => 113.126,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 442,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changzhou',
            'iata_code' => 'CZX',
            'icao_code' => 'ZSCG',


            'latitude' => 31.941667,
            'longitude' => 119.711667,
            'altitude_m' => 39,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 443,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Changzhoudao Airport',
            'iata_code' => 'WUZ',
            'icao_code' => 'ZGWZ',


            'latitude' => 23.4567,
            'longitude' => 111.248,
            'altitude_m' => 89,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2507,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chaoyang Airport',
            'iata_code' => 'CHG',
            'icao_code' => 'ZYCY',


            'latitude' => 41.5381,
            'longitude' => 120.435,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 445,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chapais Airport',
            'iata_code' => 'YMT',
            'icao_code' => 'CYMT',


            'latitude' => 49.7719,
            'longitude' => -74.5281,
            'altitude_m' => 1270,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 462,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chapeco',
            'iata_code' => 'XAP',
            'icao_code' => 'SBCH',


            'latitude' => -27.134219,
            'longitude' => -52.656553,
            'altitude_m' => 2146,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 446,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chapleau',
            'iata_code' => 'YLD',
            'icao_code' => 'CYLD',


            'latitude' => 47.82,
            'longitude' => -83.346667,
            'altitude_m' => 1470,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 447,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charles De Gaulle',
            'iata_code' => 'CDG',
            'icao_code' => 'LFPG',


            'latitude' => 49.012779,
            'longitude' => 2.55,
            'altitude_m' => 392,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charles Prince',
            'iata_code' => '',
            'icao_code' => 'FVCP',


            'latitude' => -17.751561,
            'longitude' => 30.924706,
            'altitude_m' => 4845,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Harare',

            'city_id' => 911,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charlotte County-Punta Gorda Airport',
            'iata_code' => 'PGD',
            'icao_code' => 'KPGD',


            'latitude' => 26.919722,
            'longitude' => -81.990556,
            'altitude_m' => 26,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1890,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charlottetown',
            'iata_code' => 'YYG',
            'icao_code' => 'CYYG',


            'latitude' => 46.290001,
            'longitude' => -63.121111,
            'altitude_m' => 160,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Halifax',

            'city_id' => 449,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charmeil',
            'iata_code' => 'VHY',
            'icao_code' => 'LFLV',


            'latitude' => 46.169689,
            'longitude' => 3.403736,
            'altitude_m' => 817,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2401,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Charnay',
            'iata_code' => 'QNX',
            'icao_code' => 'LFLM',


            'latitude' => 46.295103,
            'longitude' => 4.795767,
            'altitude_m' => 728,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1345,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chateaubernard',
            'iata_code' => 'CNG',
            'icao_code' => 'LFBG',


            'latitude' => 45.658333,
            'longitude' => -.3175,
            'altitude_m' => 102,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 501,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chateaudun',
            'iata_code' => '',
            'icao_code' => 'LFOC',


            'latitude' => 48.058142,
            'longitude' => 1.376625,
            'altitude_m' => 433,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 451,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chatham Seaplane Base',
            'iata_code' => 'CYM',
            'icao_code' => '',


            'latitude' => 57.515,
            'longitude' => -134.946111,
            'altitude_m' => 0,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 2126,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cheboksary Airport',
            'iata_code' => 'CSY',
            'icao_code' => 'UWKS',


            'latitude' => 56.0903,
            'longitude' => 47.3473,
            'altitude_m' => 558,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 454,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cheddi Jagan Intl',
            'iata_code' => 'GEO',
            'icao_code' => 'SYCJ',


            'latitude' => 6.498553,
            'longitude' => -58.254119,
            'altitude_m' => 95,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guyana',

            'city_id' => 806,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chehalis-Centralia',
            'iata_code' => 'CLS',
            'icao_code' => 'KCLS',


            'latitude' => 46.4062,
            'longitude' => -122.5897,
            'altitude_m' => 177,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 455,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chengde Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.965755,
            'longitude' => 117.954019,
            'altitude_m' => 1083,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 457,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cheremshanka',
            'iata_code' => '',
            'icao_code' => 'UNKM',


            'latitude' => 56.179,
            'longitude' => 92.54265,
            'altitude_m' => 1000,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Krasnoyarsk',

            'city_id' => 1183,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cherepovets Airport',
            'iata_code' => 'CEE',
            'icao_code' => 'ULBC',


            'latitude' => 59.2736,
            'longitude' => 38.0158,
            'altitude_m' => 377,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 459,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chernobayevka Airport',
            'iata_code' => 'KHE',
            'icao_code' => 'UKOH',


            'latitude' => 46.6758,
            'longitude' => 32.5064,
            'altitude_m' => 148,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1127,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cherry Capital Airport',
            'iata_code' => 'TVC',
            'icao_code' => 'KTVC',


            'latitude' => 44.741445,
            'longitude' => -85.582235,
            'altitude_m' => 624,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2301,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chertovitskoye',
            'iata_code' => 'VOZ',
            'icao_code' => 'UUOO',


            'latitude' => 51.814211,
            'longitude' => 39.229589,
            'altitude_m' => 514,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2430,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chetumal Intl',
            'iata_code' => 'CTM',
            'icao_code' => 'MMCM',


            'latitude' => 18.504667,
            'longitude' => -88.326847,
            'altitude_m' => 39,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 461,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chhatrapati Shivaji Intl',
            'iata_code' => 'BOM',
            'icao_code' => 'VABB',


            'latitude' => 19.088686,
            'longitude' => 72.867919,
            'altitude_m' => 37,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1531,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chicago Midway Intl',
            'iata_code' => 'MDW',
            'icao_code' => 'KMDW',


            'latitude' => 41.785972,
            'longitude' => -87.752417,
            'altitude_m' => 620,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chicago Millennium Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.8837,
            'longitude' => -87.623,
            'altitude_m' => 620,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chicago Ohare Intl',
            'iata_code' => 'ORD',
            'icao_code' => 'KORD',


            'latitude' => 41.978603,
            'longitude' => -87.904842,
            'altitude_m' => 668,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chicago Union Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.8791966,
            'longitude' => -87.6388507,
            'altitude_m' => 581,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chico Muni',
            'iata_code' => 'CIC',
            'icao_code' => 'KCIC',


            'latitude' => 39.795383,
            'longitude' => -121.858422,
            'altitude_m' => 238,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 464,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chievres Ab',
            'iata_code' => '',
            'icao_code' => 'EBCV',


            'latitude' => 50.575833,
            'longitude' => 3.831,
            'altitude_m' => 193,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 465,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chifeng Airport',
            'iata_code' => 'CIF',
            'icao_code' => 'ZBCF',


            'latitude' => 42.235,
            'longitude' => 118.908,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 466,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Childress Muni',
            'iata_code' => 'CDS',
            'icao_code' => 'KCDS',


            'latitude' => 34.433781,
            'longitude' => -100.287992,
            'altitude_m' => 1954,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 468,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chileka Intl',
            'iata_code' => 'BLZ',
            'icao_code' => 'FWCL',


            'latitude' => -15.679053,
            'longitude' => 34.974014,
            'altitude_m' => 2555,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Blantyre',

            'city_id' => 272,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chilliwack',
            'iata_code' => 'YCW',
            'icao_code' => 'CYCW',


            'latitude' => 49.152779,
            'longitude' => -121.93889,
            'altitude_m' => 32,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 470,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chilpancingo',
            'iata_code' => '',
            'icao_code' => 'MMCH',


            'latitude' => 17.573767,
            'longitude' => -99.514339,
            'altitude_m' => 4199,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 471,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'China Lake Naws',
            'iata_code' => 'NID',
            'icao_code' => 'KNID',


            'latitude' => 35.685422,
            'longitude' => -117.692039,
            'altitude_m' => 2283,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 473,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chinle Municipal Airport',
            'iata_code' => 'E91',
            'icao_code' => '',


            'latitude' => 36.1108806,
            'longitude' => -109.5754222,
            'altitude_m' => 5547,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 474,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chisholm Hibbing',
            'iata_code' => 'HIB',
            'icao_code' => 'KHIB',


            'latitude' => 47.3866,
            'longitude' => -92.838994,
            'altitude_m' => 1353,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 940,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chisinau Intl',
            'iata_code' => 'KIV',
            'icao_code' => 'LUKK',


            'latitude' => 46.927744,
            'longitude' => 28.930978,
            'altitude_m' => 399,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Chisinau',

            'city_id' => 475,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chitose',
            'iata_code' => 'SPK',
            'icao_code' => 'RJCJ',


            'latitude' => 42.794475,
            'longitude' => 141.666447,
            'altitude_m' => 87,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 477,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chkalovsky Airport',
            'iata_code' => 'CKL',
            'icao_code' => 'UUMU',


            'latitude' => 55.878333,
            'longitude' => 38.061667,
            'altitude_m' => 152,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2097,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chojna Air Base',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.9394,
            'longitude' => 14.4217,
            'altitude_m' => 187,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 478,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chris Hadfield',
            'iata_code' => 'YZR',
            'icao_code' => 'CYZR',


            'latitude' => 42.999444,
            'longitude' => -82.308889,
            'altitude_m' => 594,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 2068,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Christchurch Intl',
            'iata_code' => 'CHC',
            'icao_code' => 'NZCH',


            'latitude' => -43.489358,
            'longitude' => 172.532225,
            'altitude_m' => 123,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 481,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Christmas Valley Airport',
            'iata_code' => '',
            'icao_code' => 'K62S',


            'latitude' => 43.2365314,
            'longitude' => -120.6660967,
            'altitude_m' => 4317,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 482,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chubu Centrair Intl',
            'iata_code' => 'NGO',
            'icao_code' => 'RJGG',


            'latitude' => 34.858414,
            'longitude' => 136.805408,
            'altitude_m' => 15,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1547,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Chulman',
            'iata_code' => 'CNN',
            'icao_code' => 'UELL',


            'latitude' => 56.9139,
            'longitude' => 124.914,
            'altitude_m' => 2812,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yakutsk',

            'city_id' => 1581,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ciampino',
            'iata_code' => 'CIA',
            'icao_code' => 'LIRA',


            'latitude' => 41.799361,
            'longitude' => 12.594936,
            'altitude_m' => 427,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1972,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cibeureum',
            'iata_code' => '',
            'icao_code' => 'WICM',


            'latitude' => -7.346603,
            'longitude' => 108.246092,
            'altitude_m' => 1148,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2232,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cigli',
            'iata_code' => 'IGL',
            'icao_code' => 'LTBL',


            'latitude' => 38.513022,
            'longitude' => 27.010053,
            'altitude_m' => 16,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cincinnati Muni Lunken Fld',
            'iata_code' => 'LUK',
            'icao_code' => 'KLUK',


            'latitude' => 39.103333,
            'longitude' => -84.418611,
            'altitude_m' => 483,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cincinnati Northern Kentucky Intl',
            'iata_code' => 'CVG',
            'icao_code' => 'KCVG',


            'latitude' => 39.048836,
            'longitude' => -84.667822,
            'altitude_m' => 896,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cincinnati Union Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.109961,
            'longitude' => -84.537074,
            'altitude_m' => 497,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Circle City Airport',
            'iata_code' => 'IRC',
            'icao_code' => 'PACR',


            'latitude' => 65.827778,
            'longitude' => -144.076111,
            'altitude_m' => 613,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 484,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'City',
            'iata_code' => 'LCY',
            'icao_code' => 'EGLC',


            'latitude' => 51.505278,
            'longitude' => .055278,
            'altitude_m' => 19,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'City Centre',
            'iata_code' => 'YTZ',
            'icao_code' => 'CYTZ',


            'latitude' => 43.627499,
            'longitude' => -79.396167,
            'altitude_m' => 251,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 2287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'City Of Colorado Springs Muni',
            'iata_code' => 'COS',
            'icao_code' => 'KCOS',


            'latitude' => 38.805805,
            'longitude' => -104.700778,
            'altitude_m' => 6187,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 510,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'City of Derry',
            'iata_code' => 'LDY',
            'icao_code' => 'EGAE',


            'latitude' => 55.042778,
            'longitude' => -7.161111,
            'altitude_m' => 22,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1307,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ciudad Acuna Intl New',
            'iata_code' => '',
            'icao_code' => 'MMCC',


            'latitude' => 29.333917,
            'longitude' => -101.100892,
            'altitude_m' => 1410,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 486,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ciudad Bolivar',
            'iata_code' => 'CBL',
            'icao_code' => 'SVCB',


            'latitude' => 8.121898,
            'longitude' => -63.537353,
            'altitude_m' => 197,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 487,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ciudad Obregon Intl',
            'iata_code' => 'CEN',
            'icao_code' => 'MMCN',


            'latitude' => 27.392639,
            'longitude' => -109.833111,
            'altitude_m' => 205,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Hermosillo',

            'city_id' => 489,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ciudad Real Central Airport',
            'iata_code' => 'CQM',
            'icao_code' => 'LERL',


            'latitude' => 38.856389,
            'longitude' => -3.97,
            'altitude_m' => 636,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 490,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Civitavecchia',
            'iata_code' => '',
            'icao_code' => 'LIQJ',


            'latitude' => 42.6,
            'longitude' => 11.48,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 492,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Clemson',
            'iata_code' => 'CEU',
            'icao_code' => 'KCEU',


            'latitude' => 34.6722222,
            'longitude' => -82.8858889,
            'altitude_m' => 891,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 493,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Clow International Airport',
            'iata_code' => '1CS',
            'icao_code' => '',


            'latitude' => 41.6959744,
            'longitude' => -88.1292306,
            'altitude_m' => 670,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 284,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Clyde River',
            'iata_code' => 'YCY',
            'icao_code' => 'CYCY',


            'latitude' => 70.486111,
            'longitude' => -68.516667,
            'altitude_m' => 87,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 495,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coari Airport',
            'iata_code' => 'CIZ',
            'icao_code' => 'SWKO',


            'latitude' => -4.085,
            'longitude' => -63.140833,
            'altitude_m' => 33,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 496,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cochin',
            'iata_code' => 'COK',
            'icao_code' => 'VOCI',


            'latitude' => 10.155556,
            'longitude' => 76.391389,
            'altitude_m' => 8,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1161,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cochrane',
            'iata_code' => 'YCN',
            'icao_code' => 'CYCN',


            'latitude' => 49.106667,
            'longitude' => -81.015278,
            'altitude_m' => 852,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 497,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coimbatore',
            'iata_code' => 'CJB',
            'icao_code' => 'VOCB',


            'latitude' => 11.030031,
            'longitude' => 77.043383,
            'altitude_m' => 1324,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 502,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cold Lake',
            'iata_code' => 'YOD',
            'icao_code' => 'CYOD',


            'latitude' => 54.404999,
            'longitude' => -110.279444,
            'altitude_m' => 1775,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 503,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Colima',
            'iata_code' => 'CLQ',
            'icao_code' => 'MMIA',


            'latitude' => 19.277011,
            'longitude' => -103.577397,
            'altitude_m' => 2467,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 504,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Collingwood',
            'iata_code' => '',
            'icao_code' => 'CNY3',


            'latitude' => 44.449167,
            'longitude' => -80.158333,
            'altitude_m' => 730,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 506,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cologne Railway',
            'iata_code' => 'QKL',
            'icao_code' => '',


            'latitude' => 50.9425,
            'longitude' => 6.958056,
            'altitude_m' => 100,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 508,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Colombo Ratmalana',
            'iata_code' => 'RML',
            'icao_code' => 'VCCC',


            'latitude' => 6.821994,
            'longitude' => 79.886208,
            'altitude_m' => 22,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Colombo',

            'city_id' => 509,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Columbia Gorge Regional - The Dalles Municipal Airport',
            'iata_code' => '',
            'icao_code' => 'KDLS',


            'latitude' => 45.6185556,
            'longitude' => -121.1673333,
            'altitude_m' => 247,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2253,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Comandante Espora',
            'iata_code' => 'BHI',
            'icao_code' => 'SAZB',


            'latitude' => -38.724967,
            'longitude' => -62.169317,
            'altitude_m' => 246,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 164,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Comandante Gustavo Kraemer',
            'iata_code' => 'BGX',
            'icao_code' => 'SBBG',


            'latitude' => -31.390528,
            'longitude' => -54.112244,
            'altitude_m' => 600,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 161,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Como Water AD',
            'iata_code' => '',
            'icao_code' => 'LILY',


            'latitude' => 45.4853,
            'longitude' => 9.0411,
            'altitude_m' => 663,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 511,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Comodoro Rivadavia',
            'iata_code' => 'CRD',
            'icao_code' => 'SAVC',


            'latitude' => -45.785347,
            'longitude' => -67.465508,
            'altitude_m' => 190,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 512,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Comox',
            'iata_code' => 'YQQ',
            'icao_code' => 'CYQQ',


            'latitude' => 49.710833,
            'longitude' => -124.886667,
            'altitude_m' => 84,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 513,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Conakry',
            'iata_code' => 'CKY',
            'icao_code' => 'GUCY',


            'latitude' => 9.576889,
            'longitude' => -13.611961,
            'altitude_m' => 72,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Conakry',

            'city_id' => 514,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Concordia Airport',
            'iata_code' => 'CCI',
            'icao_code' => 'SSCK',


            'latitude' => -27.180556,
            'longitude' => -52.052778,
            'altitude_m' => 2461,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 516,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Congonhas',
            'iata_code' => 'CGH',
            'icao_code' => 'SBSP',


            'latitude' => -23.626692,
            'longitude' => -46.655375,
            'altitude_m' => 2631,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2060,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Conington',
            'iata_code' => '',
            'icao_code' => 'EGSF',


            'latitude' => 52.468056,
            'longitude' => -.251111,
            'altitude_m' => 26,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1786,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Copiapo',
            'iata_code' => 'CPO',
            'icao_code' => 'SCHA',


            'latitude' => -27,
            'longitude' => -70,
            'altitude_m' => 1000,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 522,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coral Creek',
            'iata_code' => '',
            'icao_code' => 'FA54',


            'latitude' => 26.8537417,
            'longitude' => -82.2526028,
            'altitude_m' => 8,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1806,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cordoba',
            'iata_code' => 'ODB',
            'icao_code' => 'LEBA',


            'latitude' => 37.842006,
            'longitude' => -4.848878,
            'altitude_m' => 297,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 525,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cordoba Station',
            'iata_code' => '',
            'icao_code' => 'CRDB',


            'latitude' => 37.888573,
            'longitude' => -4.789177,
            'altitude_m' => 390,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 525,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cork',
            'iata_code' => 'ORK',
            'icao_code' => 'EICK',


            'latitude' => 51.841269,
            'longitude' => -8.491111,
            'altitude_m' => 502,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 526,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cormeilles En Vexin',
            'iata_code' => 'POX',
            'icao_code' => 'LFPT',


            'latitude' => 49.096647,
            'longitude' => 2.040833,
            'altitude_m' => 325,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1828,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cornwall Regional Airport',
            'iata_code' => 'YCC',
            'icao_code' => 'CYCC',


            'latitude' => 45.092778,
            'longitude' => -74.567778,
            'altitude_m' => 175,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 528,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coronel Fap Alfredo Mendivil Duarte',
            'iata_code' => 'AYP',
            'icao_code' => 'SPHO',


            'latitude' => -13.154819,
            'longitude' => -74.204417,
            'altitude_m' => 8917,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Lima',

            'city_id' => 156,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Corpus Christi Intl',
            'iata_code' => 'CRP',
            'icao_code' => 'KCRP',


            'latitude' => 27.770361,
            'longitude' => -97.501222,
            'altitude_m' => 44,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 531,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Corpus Christi NAS',
            'iata_code' => 'NGP',
            'icao_code' => 'KNGP',


            'latitude' => 27.692701,
            'longitude' => -97.290376,
            'altitude_m' => 18,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 531,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Corrientes',
            'iata_code' => 'CNQ',
            'icao_code' => 'SARC',


            'latitude' => -27.445503,
            'longitude' => -58.761864,
            'altitude_m' => 203,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 532,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Corte',
            'iata_code' => '',
            'icao_code' => 'LFKT',


            'latitude' => 42.29361,
            'longitude' => 9.193055,
            'altitude_m' => 1132,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 533,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cortez Muni',
            'iata_code' => 'CEZ',
            'icao_code' => 'KCEZ',


            'latitude' => 37.303,
            'longitude' => -108.628056,
            'altitude_m' => 5918,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 534,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Corumba Intl',
            'iata_code' => 'CMG',
            'icao_code' => 'SBCR',


            'latitude' => -19.011931,
            'longitude' => -57.673053,
            'altitude_m' => 461,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 535,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cote D  \'Azur',
            'iata_code' => 'NCE',
            'icao_code' => 'LFMN',


            'latitude' => 43.658411,
            'longitude' => 7.215872,
            'altitude_m' => 12,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1607,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cottbus Drewitz',
            'iata_code' => '',
            'icao_code' => 'EDCD',


            'latitude' => 51.889475,
            'longitude' => 14.531986,
            'altitude_m' => 274,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 537,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cotulla Lasalle Co',
            'iata_code' => 'COT',
            'icao_code' => 'KCOT',


            'latitude' => 28.456694,
            'longitude' => -99.220294,
            'altitude_m' => 474,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 538,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Council Airport',
            'iata_code' => 'CIL',
            'icao_code' => '',


            'latitude' => 64.897778,
            'longitude' => -163.703333,
            'altitude_m' => 85,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 540,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'County',
            'iata_code' => 'OBE',
            'icao_code' => 'KOBE',


            'latitude' => 27.265833,
            'longitude' => -80.851111,
            'altitude_m' => 34,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1662,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Courcelles',
            'iata_code' => '',
            'icao_code' => 'LFSM',


            'latitude' => 47.487,
            'longitude' => 6.790536,
            'altitude_m' => 1041,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1496,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coventry',
            'iata_code' => 'CVT',
            'icao_code' => 'EGBE',


            'latitude' => 52.369722,
            'longitude' => -1.479722,
            'altitude_m' => 267,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 541,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Covilha',
            'iata_code' => 'COV',
            'icao_code' => 'LPCV',


            'latitude' => 40.264772,
            'longitude' => -7.479958,
            'altitude_m' => 1572,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 542,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Coweta County Airport',
            'iata_code' => 'CCO',
            'icao_code' => 'KCCO',


            'latitude' => 33.3115656,
            'longitude' => -84.7697554,
            'altitude_m' => 970,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1601,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Craiova',
            'iata_code' => 'CRA',
            'icao_code' => 'LRCV',


            'latitude' => 44.318139,
            'longitude' => 23.888611,
            'altitude_m' => 626,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 544,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cranfield',
            'iata_code' => '',
            'icao_code' => 'EGTC',


            'latitude' => 52.072222,
            'longitude' => -.616667,
            'altitude_m' => 358,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 546,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Craven Co Rgnl',
            'iata_code' => 'EWN',
            'icao_code' => 'KEWN',


            'latitude' => 35.072972,
            'longitude' => -77.042944,
            'altitude_m' => 18,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1588,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Creech Afb',
            'iata_code' => 'INS',
            'icao_code' => 'KINS',


            'latitude' => 36.587183,
            'longitude' => -115.673353,
            'altitude_m' => 3133,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 995,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Creil',
            'iata_code' => 'CSF',
            'icao_code' => 'LFPC',


            'latitude' => 49.253547,
            'longitude' => 2.519139,
            'altitude_m' => 291,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 547,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Creil-Meaux Esbly Airport',
            'iata_code' => '',
            'icao_code' => 'LFPE',


            'latitude' => 48.928611,
            'longitude' => 2.833056,
            'altitude_m' => 210,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1425,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Crisp County Cordele Airport',
            'iata_code' => 'CKF',
            'icao_code' => 'KCKF',


            'latitude' => 31.9888333,
            'longitude' => -83.7739167,
            'altitude_m' => 310,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 523,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Croisette Heliport',
            'iata_code' => 'JCA',
            'icao_code' => '',


            'latitude' => 43.536,
            'longitude' => 7.03736,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 394,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Croismare',
            'iata_code' => '',
            'icao_code' => 'LFQC',


            'latitude' => 48.593275,
            'longitude' => 6.543456,
            'altitude_m' => 790,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1325,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cross City',
            'iata_code' => 'CTY',
            'icao_code' => 'KCTY',


            'latitude' => 29.6355278,
            'longitude' => -83.10475,
            'altitude_m' => 42,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 550,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Crotone',
            'iata_code' => 'CRV',
            'icao_code' => 'LIBC',


            'latitude' => 38.997225,
            'longitude' => 17.080169,
            'altitude_m' => 521,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 551,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cruise Ship Dock',
            'iata_code' => '',
            'icao_code' => 'RSAU',


            'latitude' => 15.296416,
            'longitude' => -61.38781,
            'altitude_m' => 0,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Dominica',

            'city_id' => 1980,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cruzeiro do Sul',
            'iata_code' => 'CZS',
            'icao_code' => 'SBCZ',


            'latitude' => -7.599906,
            'longitude' => -72.769489,
            'altitude_m' => 637,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Rio_Branco',

            'city_id' => 552,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Crystal Airport',
            'iata_code' => 'MIC',
            'icao_code' => 'KMIC',


            'latitude' => 45.0343,
            'longitude' => -93.2114,
            'altitude_m' => 869,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 553,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Crystal River',
            'iata_code' => 'CGC',
            'icao_code' => 'KCGC',


            'latitude' => 28.8676111,
            'longitude' => -82.5741111,
            'altitude_m' => 9,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 554,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cuatro Vientos',
            'iata_code' => '',
            'icao_code' => 'LEVS',


            'latitude' => 40.370678,
            'longitude' => -3.785144,
            'altitude_m' => 2267,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Culiacan Intl',
            'iata_code' => 'CUL',
            'icao_code' => 'MMCL',


            'latitude' => 24.764547,
            'longitude' => -107.474717,
            'altitude_m' => 108,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 560,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Cuxhaven Airport',
            'iata_code' => 'NDZ',
            'icao_code' => 'KNDZ',


            'latitude' => 53.768612,
            'longitude' => 8.644722,
            'altitude_m' => 75,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 565,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dachuan Airport',
            'iata_code' => 'DAX',
            'icao_code' => 'ZUDX',


            'latitude' => 31.3,
            'longitude' => 107.5,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 584,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dalaman',
            'iata_code' => 'DLM',
            'icao_code' => 'LTBS',


            'latitude' => 36.713056,
            'longitude' => 28.7925,
            'altitude_m' => 20,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 567,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dalat',
            'iata_code' => 'DLI',
            'icao_code' => 'VVDL',


            'latitude' => 11.75,
            'longitude' => 108.367,
            'altitude_m' => 3156,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 568,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dalhart Muni',
            'iata_code' => 'DHT',
            'icao_code' => 'KDHT',


            'latitude' => 36.022586,
            'longitude' => -102.547278,
            'altitude_m' => 3991,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 569,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dali',
            'iata_code' => 'DLU',
            'icao_code' => 'ZPDL',


            'latitude' => 25.649444,
            'longitude' => 100.319444,
            'altitude_m' => 6978,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 570,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Damme Airport',
            'iata_code' => '',
            'icao_code' => 'EDWC',


            'latitude' => 52.4875,
            'longitude' => 8.18556,
            'altitude_m' => 151,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 573,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dandong',
            'iata_code' => 'DDG',
            'icao_code' => 'ZYDD',


            'latitude' => 40.0255,
            'longitude' => 124.2866,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 574,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Daqing Saertu Airport',
            'iata_code' => 'DAQ',
            'icao_code' => '',


            'latitude' => 46.583333,
            'longitude' => 125,
            'altitude_m' => 1020,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 576,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dare County Regional',
            'iata_code' => 'MQI',
            'icao_code' => 'KMQI',


            'latitude' => 35.5514,
            'longitude' => -75.4173,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1381,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Darsena Norte',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -34.5978,
            'longitude' => -58.367841,
            'altitude_m' => 46,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 343,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Darwin Intl',
            'iata_code' => 'DRW',
            'icao_code' => 'YPDN',


            'latitude' => -12.4083333,
            'longitude' => 130.87266,
            'altitude_m' => 103,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Australia/Darwin',

            'city_id' => 577,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Datong Airport',
            'iata_code' => 'DAT',
            'icao_code' => 'ZBDT',


            'latitude' => 40.0603,
            'longitude' => 113.482,
            'altitude_m' => 3442,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 578,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dauphin Barker',
            'iata_code' => 'YDN',
            'icao_code' => 'CYDN',


            'latitude' => 51.100834,
            'longitude' => -100.0525,
            'altitude_m' => 999,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 579,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Davis Fld',
            'iata_code' => 'MKO',
            'icao_code' => 'KMKO',


            'latitude' => 35.656489,
            'longitude' => -95.366656,
            'altitude_m' => 612,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1541,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Davis Monthan Afb',
            'iata_code' => 'DMA',
            'icao_code' => 'KDMA',


            'latitude' => 32.166467,
            'longitude' => -110.883144,
            'altitude_m' => 2704,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 2315,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dawson City',
            'iata_code' => 'YDA',
            'icao_code' => 'CYDA',


            'latitude' => 64.043056,
            'longitude' => -139.127778,
            'altitude_m' => 1215,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 581,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dawson Community Airport',
            'iata_code' => 'GDV',
            'icao_code' => 'KGDV',


            'latitude' => 47.138611,
            'longitude' => -104.807222,
            'altitude_m' => 749,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 821,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dawson Creek',
            'iata_code' => 'YDQ',
            'icao_code' => 'CYDQ',


            'latitude' => 55.742333,
            'longitude' => -120.183,
            'altitude_m' => 2148,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Dawson_Creek',

            'city_id' => 582,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dawu',
            'iata_code' => 'LLV',
            'icao_code' => '',


            'latitude' => 37.683333,
            'longitude' => 111.142778,
            'altitude_m' => 3020,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Daytona Beach Intl',
            'iata_code' => 'DAB',
            'icao_code' => 'KDAB',


            'latitude' => 29.179917,
            'longitude' => -81.058056,
            'altitude_m' => 34,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 583,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'De La Independencia',
            'iata_code' => '',
            'icao_code' => 'SCRG',


            'latitude' => -34.173694,
            'longitude' => -70.775694,
            'altitude_m' => 1446,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1915,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'De Peel Air Base',
            'iata_code' => '',
            'icao_code' => 'EHDP',


            'latitude' => 51.5173,
            'longitude' => 5.85572,
            'altitude_m' => 98,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 598,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'DeFuniak Springs Airport',
            'iata_code' => '54J',
            'icao_code' => '',


            'latitude' => 30.7311111,
            'longitude' => -86.1537778,
            'altitude_m' => 289,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 585,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'DeLand Municipal Airport',
            'iata_code' => '',
            'icao_code' => 'KDED',


            'latitude' => 29.066944,
            'longitude' => -81.283889,
            'altitude_m' => 79,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 586,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deaux',
            'iata_code' => '',
            'icao_code' => 'LFMS',


            'latitude' => 44.069656,
            'longitude' => 4.142122,
            'altitude_m' => 668,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 43,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Debrecen',
            'iata_code' => 'DEB',
            'icao_code' => 'LHDC',


            'latitude' => 47.488917,
            'longitude' => 21.615333,
            'altitude_m' => 359,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Budapest',

            'city_id' => 588,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deerfield Beach Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 26.316944,
            'longitude' => -80.122222,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 589,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deering Airport',
            'iata_code' => 'DRG',
            'icao_code' => 'PADE',


            'latitude' => 66.0696,
            'longitude' => -162.766,
            'altitude_m' => 21,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 590,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Del Caribe Intl Gen Santiago Marino',
            'iata_code' => 'PMV',
            'icao_code' => 'SVMG',


            'latitude' => 10.912926,
            'longitude' => -63.967581,
            'altitude_m' => 74,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1833,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Del Norte Intl',
            'iata_code' => 'NTR',
            'icao_code' => 'MMAN',


            'latitude' => 25.865572,
            'longitude' => -100.237239,
            'altitude_m' => 1476,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1499,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Delaware County Airport',
            'iata_code' => 'MIE',
            'icao_code' => '',


            'latitude' => 40.2424722,
            'longitude' => -85.39575,
            'altitude_m' => 937,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1532,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Delft Central',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.006667,
            'longitude' => 4.356667,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 591,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Delta County Airport',
            'iata_code' => 'ESC',
            'icao_code' => 'KESC',


            'latitude' => 45.722778,
            'longitude' => -87.093611,
            'altitude_m' => 609,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 692,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Denain',
            'iata_code' => '',
            'icao_code' => 'LFAV',


            'latitude' => 50.325808,
            'longitude' => 3.461264,
            'altitude_m' => 177,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2371,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Denali Rail',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 63.7306,
            'longitude' => -148.9137333333,
            'altitude_m' => 1730,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 930,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deols',
            'iata_code' => 'CHR',
            'icao_code' => 'LFLX',


            'latitude' => 46.862194,
            'longitude' => 1.730667,
            'altitude_m' => 529,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 452,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Depati Amir',
            'iata_code' => 'PGK',
            'icao_code' => 'WIPK',


            'latitude' => -2.1622,
            'longitude' => 106.139064,
            'altitude_m' => 109,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 1729,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deputado Luis Eduardo Magalhaes',
            'iata_code' => 'SSA',
            'icao_code' => 'SBSV',


            'latitude' => -12.910994,
            'longitude' => -38.331044,
            'altitude_m' => 64,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 2010,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dera Ghazi Khan Airport',
            'iata_code' => 'DEA',
            'icao_code' => 'OPDG',


            'latitude' => 29.961011,
            'longitude' => 70.485925,
            'altitude_m' => 492,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Desert Aire',
            'iata_code' => 'M94',
            'icao_code' => 'KM94',


            'latitude' => 46.4124,
            'longitude' => -119.5518,
            'altitude_m' => 586,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1415,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Destin',
            'iata_code' => 'DTS',
            'icao_code' => 'KDTS',


            'latitude' => 30.4000611,
            'longitude' => -86.4714772,
            'altitude_m' => 23,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 597,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Deurne',
            'iata_code' => 'ANR',
            'icao_code' => 'EBAW',


            'latitude' => 51.189444,
            'longitude' => 4.460278,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 102,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Devi Ahilyabai Holkar',
            'iata_code' => 'IDR',
            'icao_code' => 'VAID',


            'latitude' => 22.721786,
            'longitude' => 75.801086,
            'altitude_m' => 1850,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 997,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Devils Lake Regional Airport',
            'iata_code' => 'DVL',
            'icao_code' => 'KDVL',


            'latitude' => 48.114444,
            'longitude' => -98.908611,
            'altitude_m' => 1445,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 601,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Devonport Airport',
            'iata_code' => 'DPO',
            'icao_code' => 'YDPO',


            'latitude' => -41.1697,
            'longitude' => 146.43,
            'altitude_m' => 33,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Melbourne',

            'city_id' => 602,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dhanbad',
            'iata_code' => 'DBD',
            'icao_code' => 'VEDB',


            'latitude' => 23.834044,
            'longitude' => 86.425261,
            'altitude_m' => 847,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 604,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diamantina Airport',
            'iata_code' => 'DTI',
            'icao_code' => 'SNDT',


            'latitude' => -18.231944,
            'longitude' => -43.650278,
            'altitude_m' => 4446,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 605,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dibrugarh Airport',
            'iata_code' => 'DIB',
            'icao_code' => '',


            'latitude' => 27.4839,
            'longitude' => 95.0169,
            'altitude_m' => 362,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 606,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diego Aracena Intl',
            'iata_code' => 'IQQ',
            'icao_code' => 'SCDA',


            'latitude' => -20.535222,
            'longitude' => -70.181275,
            'altitude_m' => 155,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1012,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diego Jimenez Torres',
            'iata_code' => 'FAJ',
            'icao_code' => 'TJFA',


            'latitude' => 18.308889,
            'longitude' => -65.661861,
            'altitude_m' => 64,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 705,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diepholz',
            'iata_code' => '',
            'icao_code' => 'ETND',


            'latitude' => 52.585514,
            'longitude' => 8.341014,
            'altitude_m' => 127,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 608,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dieppe Ferry Port',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.933616,
            'longitude' => 1.088039,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 609,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dinslaken Schwarze-Heide',
            'iata_code' => '',
            'icao_code' => 'EDLD',


            'latitude' => 51.3659,
            'longitude' => 6.5155,
            'altitude_m' => 198,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 612,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diori Hamani',
            'iata_code' => 'NIM',
            'icao_code' => 'DRRN',


            'latitude' => 13.481547,
            'longitude' => 2.183614,
            'altitude_m' => 732,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Niamey',

            'city_id' => 1606,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Diwopu',
            'iata_code' => 'URC',
            'icao_code' => 'ZWWW',


            'latitude' => 43.907106,
            'longitude' => 87.474244,
            'altitude_m' => 2125,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2357,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dix Sept Rosado Airport',
            'iata_code' => 'MVF',
            'icao_code' => 'SBMW',


            'latitude' => -5.20192,
            'longitude' => -37.3643,
            'altitude_m' => 76,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 1517,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dodge City Regional Airport',
            'iata_code' => 'DDC',
            'icao_code' => 'KDDC',


            'latitude' => 37.7634,
            'longitude' => -99.9656,
            'altitude_m' => 2594,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 614,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Doha Free Zone Airport',
            'iata_code' => 'XOZ',
            'icao_code' => '',


            'latitude' => 24.8333,
            'longitude' => 50.9166,
            'altitude_m' => 0,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Qatar',

            'city_id' => 615,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Doha Intl',
            'iata_code' => 'DOH',
            'icao_code' => 'OTBD',


            'latitude' => 25.261125,
            'longitude' => 51.565056,
            'altitude_m' => 35,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Qatar',

            'city_id' => 615,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Domerat',
            'iata_code' => 'MCU',
            'icao_code' => 'LFLT',


            'latitude' => 46.352525,
            'longitude' => 2.570486,
            'altitude_m' => 771,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1503,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Domodedovo',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.442,
            'longitude' => 37.763,
            'altitude_m' => 207,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Domododevo',
            'iata_code' => 'DME',
            'icao_code' => 'UUDD',


            'latitude' => 55.408611,
            'longitude' => 37.906111,
            'altitude_m' => 588,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Don Miguel Hidalgo Y Costilla Intl',
            'iata_code' => 'GDL',
            'icao_code' => 'MMGL',


            'latitude' => 20.5218,
            'longitude' => -103.311167,
            'altitude_m' => 5016,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 859,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Don Muang Intl',
            'iata_code' => 'DMK',
            'icao_code' => 'VTBD',


            'latitude' => 13.912583,
            'longitude' => 100.60675,
            'altitude_m' => 9,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Bangkok',

            'city_id' => 181,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Donaueschingen Villingen',
            'iata_code' => 'ZQL',
            'icao_code' => 'EDTD',


            'latitude' => 47.973331,
            'longitude' => 8.522223,
            'altitude_m' => 2231,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 617,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Donetsk Intl',
            'iata_code' => 'DOK',
            'icao_code' => 'UKCC',


            'latitude' => 48.073611,
            'longitude' => 37.739722,
            'altitude_m' => 791,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 618,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dong Tac',
            'iata_code' => 'TBB',
            'icao_code' => 'VVTH',


            'latitude' => 13.04955,
            'longitude' => 109.333706,
            'altitude_m' => 20,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 2330,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dongying Airport',
            'iata_code' => 'DOY',
            'icao_code' => 'ZSDY',


            'latitude' => 37.2716,
            'longitude' => 118.2819,
            'altitude_m' => 86,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 619,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Door County Cherryland Airport',
            'iata_code' => 'SUE',
            'icao_code' => '',


            'latitude' => 44.8436667,
            'longitude' => -87.4215556,
            'altitude_m' => 725,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2178,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dortmund',
            'iata_code' => 'DTM',
            'icao_code' => 'EDLW',


            'latitude' => 51.518314,
            'longitude' => 7.612242,
            'altitude_m' => 425,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 620,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dorval Railway Station',
            'iata_code' => 'XAX',
            'icao_code' => '',


            'latitude' => 45.448611,
            'longitude' => -73.74111,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 621,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dothan Rgnl',
            'iata_code' => 'DHN',
            'icao_code' => 'KDHN',


            'latitude' => 31.321339,
            'longitude' => -85.449628,
            'altitude_m' => 401,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 622,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dourados Airport',
            'iata_code' => 'DOU',
            'icao_code' => 'SSDO',


            'latitude' => -22.220833,
            'longitude' => -54.805833,
            'altitude_m' => 1433,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 623,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dowagiac Municipal Airport',
            'iata_code' => 'C91',
            'icao_code' => '',


            'latitude' => 41.9929342,
            'longitude' => -86.1280125,
            'altitude_m' => 748,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 625,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Downsview',
            'iata_code' => 'YZD',
            'icao_code' => 'CYZD',


            'latitude' => 43.7425,
            'longitude' => -79.465556,
            'altitude_m' => 652,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 2287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dr Ambedkar Intl',
            'iata_code' => 'NAG',
            'icao_code' => 'VANP',


            'latitude' => 21.092192,
            'longitude' => 79.047183,
            'altitude_m' => 1033,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1548,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dr Antonio Nicolas Briceno',
            'iata_code' => 'VLV',
            'icao_code' => 'SVVL',


            'latitude' => 9.340797,
            'longitude' => -70.584089,
            'altitude_m' => 1893,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 2372,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Drachten',
            'iata_code' => '',
            'icao_code' => 'EHDR',


            'latitude' => 53.119167,
            'longitude' => 6.129722,
            'altitude_m' => 14,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 626,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dresden',
            'iata_code' => 'DRS',
            'icao_code' => 'EDDC',


            'latitude' => 51.132767,
            'longitude' => 13.767161,
            'altitude_m' => 755,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 627,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dryden Rgnl',
            'iata_code' => 'YHD',
            'icao_code' => 'CYHD',


            'latitude' => 49.831667,
            'longitude' => -92.744167,
            'altitude_m' => 1354,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 628,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubai Al Maktoum',
            'iata_code' => 'DWC',
            'icao_code' => 'OMDW',


            'latitude' => 24.55056,
            'longitude' => 55.103174,
            'altitude_m' => 170,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 629,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubai Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 25.274193,
            'longitude' => 55.28311,
            'altitude_m' => 0,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 629,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubai Intl',
            'iata_code' => 'DXB',
            'icao_code' => 'OMDB',


            'latitude' => 25.252778,
            'longitude' => 55.364444,
            'altitude_m' => 62,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dubai',

            'city_id' => 629,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubbo',
            'iata_code' => 'DBO',
            'icao_code' => 'YSDU',


            'latitude' => -32.216667,
            'longitude' => 148.574722,
            'altitude_m' => 935,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 630,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubendorf',
            'iata_code' => '',
            'icao_code' => 'LSMD',


            'latitude' => 47.398644,
            'longitude' => 8.648231,
            'altitude_m' => 1470,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 631,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dublin',
            'iata_code' => 'DUB',
            'icao_code' => 'EIDW',


            'latitude' => 53.421333,
            'longitude' => -6.270075,
            'altitude_m' => 242,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 632,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dubrovnik',
            'iata_code' => 'DBV',
            'icao_code' => 'LDDU',


            'latitude' => 42.561353,
            'longitude' => 18.268244,
            'altitude_m' => 527,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zagreb',

            'city_id' => 633,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dumaguete',
            'iata_code' => 'DGT',
            'icao_code' => 'RPVD',


            'latitude' => 9.333714,
            'longitude' => 123.300472,
            'altitude_m' => 15,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 634,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dundee',
            'iata_code' => 'DND',
            'icao_code' => 'EGPN',


            'latitude' => 56.452499,
            'longitude' => -3.025833,
            'altitude_m' => 17,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 636,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dunedin',
            'iata_code' => 'DUD',
            'icao_code' => 'NZDN',


            'latitude' => -45.928055,
            'longitude' => 170.198333,
            'altitude_m' => 4,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 637,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dupage',
            'iata_code' => 'DPA',
            'icao_code' => 'KDPA',


            'latitude' => 41.907778,
            'longitude' => -88.248611,
            'altitude_m' => 758,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2465,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Durango Intl',
            'iata_code' => 'DGO',
            'icao_code' => 'MMDO',


            'latitude' => 24.124194,
            'longitude' => -104.528014,
            'altitude_m' => 6104,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 638,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Durango La Plata Co',
            'iata_code' => 'DRO',
            'icao_code' => 'KDRO',


            'latitude' => 37.151516,
            'longitude' => -107.75377,
            'altitude_m' => 6685,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 639,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Durban Intl',
            'iata_code' => 'DUR',
            'icao_code' => 'FADN',


            'latitude' => -29.970089,
            'longitude' => 30.950519,
            'altitude_m' => 33,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 640,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dushanbe',
            'iata_code' => 'DYU',
            'icao_code' => 'UTDD',


            'latitude' => 38.543333,
            'longitude' => 68.825,
            'altitude_m' => 2575,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Dushanbe',

            'city_id' => 641,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dusseldorf Hauptbahnhof',
            'iata_code' => 'QDU',
            'icao_code' => '',


            'latitude' => 51.220278,
            'longitude' => 6.792778,
            'altitude_m' => 125,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 642,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dyce',
            'iata_code' => 'ABZ',
            'icao_code' => 'EGPD',


            'latitude' => 57.201944,
            'longitude' => -2.197778,
            'altitude_m' => 215,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 7,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Dzemgi',
            'iata_code' => '',
            'icao_code' => 'UHKD',


            'latitude' => 50.605,
            'longitude' => 137.08167,
            'altitude_m' => 82,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 1167,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'E T Joshua',
            'iata_code' => 'SVD',
            'icao_code' => 'TVSV',


            'latitude' => 13.144306,
            'longitude' => -61.210861,
            'altitude_m' => 66,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/St_Vincent',

            'city_id' => 1140,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eagle River',
            'iata_code' => 'EGV',
            'icao_code' => 'KEGV',


            'latitude' => 45.932333,
            'longitude' => -89.268283,
            'altitude_m' => 1642,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 643,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'East 34th Street Heliport',
            'iata_code' => 'TSS',
            'icao_code' => 'NONE',


            'latitude' => 40.7425,
            'longitude' => -73.971944,
            'altitude_m' => 10,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'East London',
            'iata_code' => 'ELS',
            'icao_code' => 'FAEL',


            'latitude' => -33.035569,
            'longitude' => 27.825939,
            'altitude_m' => 435,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 645,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'East Troy Municipal Airport',
            'iata_code' => '57C',
            'icao_code' => 'K57C',


            'latitude' => 42.7971667,
            'longitude' => -88.3726111,
            'altitude_m' => 860,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 648,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eastern Slopes Regional',
            'iata_code' => 'IZG',
            'icao_code' => 'KIZG',


            'latitude' => 43.9911389,
            'longitude' => -70.9478889,
            'altitude_m' => 455,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 774,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Easterwood Fld',
            'iata_code' => 'CLL',
            'icao_code' => 'KCLL',


            'latitude' => 30.588583,
            'longitude' => -96.363833,
            'altitude_m' => 321,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 505,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eastleigh',
            'iata_code' => '',
            'icao_code' => 'HKRE',


            'latitude' => -1.277267,
            'longitude' => 36.862339,
            'altitude_m' => 5380,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1549,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Edinburgh',
            'iata_code' => 'EDI',
            'icao_code' => 'EGPH',


            'latitude' => 55.95,
            'longitude' => -3.3725,
            'altitude_m' => 135,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 651,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Edinburgh Waverly Station',
            'iata_code' => 'ZXE',
            'icao_code' => '',


            'latitude' => 55.952,
            'longitude' => -3.189,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 651,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Edmonton City Centre',
            'iata_code' => 'YXD',
            'icao_code' => 'CYXD',


            'latitude' => 53.5725,
            'longitude' => -113.520556,
            'altitude_m' => 2200,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 652,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Edmonton Intl',
            'iata_code' => 'YEG',
            'icao_code' => 'CYEG',


            'latitude' => 53.309723,
            'longitude' => -113.579722,
            'altitude_m' => 2373,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 652,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Edson',
            'iata_code' => 'YET',
            'icao_code' => 'CYET',


            'latitude' => 53.578888,
            'longitude' => -116.465,
            'altitude_m' => 3041,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 653,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eduardo Gomes Intl',
            'iata_code' => 'MAO',
            'icao_code' => 'SBEG',


            'latitude' => -3.038611,
            'longitude' => -60.049721,
            'altitude_m' => 264,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1372,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eelde',
            'iata_code' => 'GRQ',
            'icao_code' => 'EHGG',


            'latitude' => 53.11972,
            'longitude' => 6.579444,
            'altitude_m' => 17,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 855,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Efes',
            'iata_code' => '',
            'icao_code' => 'LTFB',


            'latitude' => 37.950747,
            'longitude' => 27.329014,
            'altitude_m' => 10,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Egal Intl',
            'iata_code' => 'HGA',
            'icao_code' => 'HCMH',


            'latitude' => 9.518167,
            'longitude' => 44.088758,
            'altitude_m' => 4423,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Mogadishu',

            'city_id' => 913,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eggenfelden',
            'iata_code' => '',
            'icao_code' => 'EDME',


            'latitude' => 48.396167,
            'longitude' => 12.723667,
            'altitude_m' => 1342,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 654,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Egilsstadir',
            'iata_code' => 'EGS',
            'icao_code' => 'BIEG',


            'latitude' => 65.283333,
            'longitude' => -14.401389,
            'altitude_m' => 76,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Atlantic/Reykjavik',

            'city_id' => 655,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eielson Afb',
            'iata_code' => 'EIL',
            'icao_code' => 'PAEI',


            'latitude' => 64.665667,
            'longitude' => -147.1015,
            'altitude_m' => 548,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 702,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eindhoven',
            'iata_code' => 'EIN',
            'icao_code' => 'EHEH',


            'latitude' => 51.450139,
            'longitude' => 5.374528,
            'altitude_m' => 74,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 656,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eisenach Kindel',
            'iata_code' => '',
            'icao_code' => 'EDGE',


            'latitude' => 50.992797,
            'longitude' => 10.472711,
            'altitude_m' => 1101,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 657,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El AlcaravÃ¡n Airport',
            'iata_code' => 'EYP',
            'icao_code' => 'SKYP',


            'latitude' => 5.319114,
            'longitude' => -72.383975,
            'altitude_m' => 1028,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 2531,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Bosque',
            'iata_code' => '',
            'icao_code' => 'SCBQ',


            'latitude' => -33.5618,
            'longitude' => -70.6884,
            'altitude_m' => 1844,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 2052,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Calafate',
            'iata_code' => 'FTE',
            'icao_code' => 'SAWC',


            'latitude' => -50.280322,
            'longitude' => -72.053103,
            'altitude_m' => 669,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 659,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Carano',
            'iata_code' => 'UIB',
            'icao_code' => 'SKUI',


            'latitude' => 5.690758,
            'longitude' => -76.641181,
            'altitude_m' => 204,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1903,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Centro Naf',
            'iata_code' => 'NJK',
            'icao_code' => 'KNJK',


            'latitude' => 32.829222,
            'longitude' => -115.671667,
            'altitude_m' => -42,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 660,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Eden',
            'iata_code' => 'AXM',
            'icao_code' => 'SKAR',


            'latitude' => 4.452775,
            'longitude' => -75.766447,
            'altitude_m' => 3990,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 122,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Libertador Ab',
            'iata_code' => '',
            'icao_code' => 'SVBL',


            'latitude' => 10.183375,
            'longitude' => -67.557319,
            'altitude_m' => 1450,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1386,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Loa',
            'iata_code' => 'CJC',
            'icao_code' => 'SCCF',


            'latitude' => -22.498175,
            'longitude' => -68.903575,
            'altitude_m' => 7543,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 370,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Palomar',
            'iata_code' => '',
            'icao_code' => 'SADP',


            'latitude' => -34.609939,
            'longitude' => -58.612592,
            'altitude_m' => 59,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 661,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Plumerillo',
            'iata_code' => 'MDZ',
            'icao_code' => 'SAME',


            'latitude' => -32.831717,
            'longitude' => -68.792856,
            'altitude_m' => 2310,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1438,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Salvador Intl',
            'iata_code' => 'SAL',
            'icao_code' => 'MSLP',


            'latitude' => 13.440947,
            'longitude' => -89.055728,
            'altitude_m' => 101,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/El_Salvador',

            'city_id' => 2034,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Tari',
            'iata_code' => 'KOE',
            'icao_code' => 'WATT',


            'latitude' => -10.171583,
            'longitude' => 123.671136,
            'altitude_m' => 335,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Makassar',

            'city_id' => 1199,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Tehuelche',
            'iata_code' => 'PMY',
            'icao_code' => 'SAVY',


            'latitude' => -42.759161,
            'longitude' => -65.102725,
            'altitude_m' => 426,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1883,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Tepual Intl',
            'iata_code' => 'PMC',
            'icao_code' => 'SCTE',


            'latitude' => -41.438886,
            'longitude' => -73.093953,
            'altitude_m' => 294,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1884,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'El Toro',
            'iata_code' => 'NZJ',
            'icao_code' => 'KNZJ',


            'latitude' => 33.676132,
            'longitude' => -117.731164,
            'altitude_m' => 383,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2041,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elazig',
            'iata_code' => 'EZS',
            'icao_code' => 'LTCA',


            'latitude' => 38.606925,
            'longitude' => 39.291417,
            'altitude_m' => 2927,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 662,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eldorado Intl',
            'iata_code' => 'BOG',
            'icao_code' => 'SKBO',


            'latitude' => 4.701594,
            'longitude' => -74.146947,
            'altitude_m' => 8361,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 281,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eldoret Intl',
            'iata_code' => 'EDL',
            'icao_code' => 'HKEL',


            'latitude' => .404458,
            'longitude' => 35.238928,
            'altitude_m' => 6941,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 663,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eleftherios Venizelos Intl',
            'iata_code' => 'ATH',
            'icao_code' => 'LGAV',


            'latitude' => 37.936358,
            'longitude' => 23.944467,
            'altitude_m' => 308,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 139,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elesmes',
            'iata_code' => '',
            'icao_code' => 'LFQJ',


            'latitude' => 50.310467,
            'longitude' => 4.033119,
            'altitude_m' => 452,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1418,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elista Airport',
            'iata_code' => 'ESL',
            'icao_code' => 'URWI',


            'latitude' => 46.3739,
            'longitude' => 44.3309,
            'altitude_m' => 501,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 664,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elizabeth City Cgas Rgnl',
            'iata_code' => 'ECG',
            'icao_code' => 'KECG',


            'latitude' => 36.260581,
            'longitude' => -76.174572,
            'altitude_m' => 12,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 665,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elizabethton Municipal Airport',
            'iata_code' => '0A9',
            'icao_code' => '',


            'latitude' => 36.3712222,
            'longitude' => -82.1734167,
            'altitude_m' => 1593,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 666,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elkins Randolph Co Jennings Randolph',
            'iata_code' => 'EKN',
            'icao_code' => 'KEKN',


            'latitude' => 38.889444,
            'longitude' => -79.857139,
            'altitude_m' => 1987,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 667,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elko Regional Airport',
            'iata_code' => 'EKO',
            'icao_code' => 'KEKO',


            'latitude' => 40.8249,
            'longitude' => -115.792,
            'altitude_m' => 5140,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 668,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ellinikon International Airport',
            'iata_code' => '',
            'icao_code' => 'LGAT',


            'latitude' => 37.5354,
            'longitude' => 23.4346,
            'altitude_m' => 68,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 139,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elmas',
            'iata_code' => 'CAG',
            'icao_code' => 'LIEE',


            'latitude' => 39.251469,
            'longitude' => 9.054283,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 362,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elmendorf Afb',
            'iata_code' => 'EDF',
            'icao_code' => 'PAED',


            'latitude' => 61.250986,
            'longitude' => -149.806503,
            'altitude_m' => 212,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 80,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eloy Alfaro Intl',
            'iata_code' => 'MEC',
            'icao_code' => 'SEMT',


            'latitude' => -.946078,
            'longitude' => -80.678808,
            'altitude_m' => 48,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guayaquil',

            'city_id' => 1380,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Elstree',
            'iata_code' => 'ETR',
            'icao_code' => 'EGTR',


            'latitude' => 51.4807,
            'longitude' => -.00093,
            'altitude_m' => 250,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 670,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emanuel Co',
            'iata_code' => 'SBO',
            'icao_code' => 'KSBO',


            'latitude' => 32.609139,
            'longitude' => -82.369944,
            'altitude_m' => 327,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2042,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Embraer Unidade Gaviao Peixoto',
            'iata_code' => '',
            'icao_code' => 'SBGP',


            'latitude' => -21.773683,
            'longitude' => -48.405078,
            'altitude_m' => 1998,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1338,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emden',
            'iata_code' => 'EME',
            'icao_code' => 'EDWE',


            'latitude' => 53.391186,
            'longitude' => 7.227408,
            'altitude_m' => 2,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 672,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emelyanovo',
            'iata_code' => 'KJA',
            'icao_code' => 'UNKL',


            'latitude' => 56.18,
            'longitude' => 92.475,
            'altitude_m' => 940,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Krasnoyarsk',

            'city_id' => 1183,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emerald',
            'iata_code' => 'EMD',
            'icao_code' => 'YEML',


            'latitude' => -23.5675,
            'longitude' => 148.179167,
            'altitude_m' => 624,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 673,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emeryville Amtrak Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 37.8405149,
            'longitude' => -122.29134,
            'altitude_m' => 23,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 674,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Emmen',
            'iata_code' => '',
            'icao_code' => 'LSME',


            'latitude' => 47.092369,
            'longitude' => 8.305117,
            'altitude_m' => 1400,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 675,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Enrique Malek Intl',
            'iata_code' => 'DAV',
            'icao_code' => 'MPDA',


            'latitude' => 8.391003,
            'longitude' => -82.434992,
            'altitude_m' => 89,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Panama',

            'city_id' => 580,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ensenada',
            'iata_code' => 'ESE',
            'icao_code' => 'MMES',


            'latitude' => 31.795281,
            'longitude' => -116.602772,
            'altitude_m' => 66,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Tijuana',

            'city_id' => 679,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ensenada Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 31.855945,
            'longitude' => -116.624186,
            'altitude_m' => 0,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Tijuana',

            'city_id' => 679,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Enshi Airport',
            'iata_code' => 'ENH',
            'icao_code' => 'ZHES',


            'latitude' => 30.3203,
            'longitude' => 109.485,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 680,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Entrammes',
            'iata_code' => 'LVA',
            'icao_code' => 'LFOV',


            'latitude' => 48.031361,
            'longitude' => -.742986,
            'altitude_m' => 330,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1249,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Entzheim',
            'iata_code' => 'SXB',
            'icao_code' => 'LFST',


            'latitude' => 48.538319,
            'longitude' => 7.628233,
            'altitude_m' => 505,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2174,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Enugu',
            'iata_code' => 'ENU',
            'icao_code' => 'DNEN',


            'latitude' => 6.474272,
            'longitude' => 7.561961,
            'altitude_m' => 466,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 681,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Enumclaw Airport',
            'iata_code' => '',
            'icao_code' => 'WA77',


            'latitude' => 47.1956569,
            'longitude' => -122.0220561,
            'altitude_m' => 738,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 682,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ephraim-Gibraltar Airport',
            'iata_code' => '3D2',
            'icao_code' => '',


            'latitude' => 45.1354167,
            'longitude' => -87.1879444,
            'altitude_m' => 773,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 683,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Epinoy',
            'iata_code' => '',
            'icao_code' => 'LFQI',


            'latitude' => 50.221814,
            'longitude' => 3.154236,
            'altitude_m' => 257,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 379,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eppley Afld',
            'iata_code' => 'OMA',
            'icao_code' => 'KOMA',


            'latitude' => 41.303167,
            'longitude' => -95.894069,
            'altitude_m' => 984,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1675,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ercan International Airport',
            'iata_code' => 'ECN',
            'icao_code' => 'LCEN',


            'latitude' => 35.1547,
            'longitude' => 33.4961,
            'altitude_m' => 404,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Nicosia',

            'city_id' => 1608,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erding',
            'iata_code' => '',
            'icao_code' => 'ETSE',


            'latitude' => 48.322333,
            'longitude' => 11.948667,
            'altitude_m' => 1515,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 685,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erechim Airport',
            'iata_code' => 'ERM',
            'icao_code' => 'SSER',


            'latitude' => -27.6619,
            'longitude' => -52.2683,
            'altitude_m' => 2498,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 686,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erfurt',
            'iata_code' => 'ERF',
            'icao_code' => 'EDDE',


            'latitude' => 50.979811,
            'longitude' => 10.958106,
            'altitude_m' => 1036,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 687,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erhac',
            'iata_code' => 'MLX',
            'icao_code' => 'LTAT',


            'latitude' => 38.435347,
            'longitude' => 38.091006,
            'altitude_m' => 2828,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1365,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erie-Ottawa Regional Airport',
            'iata_code' => 'PCW',
            'icao_code' => 'KPCW',


            'latitude' => 41.5162703,
            'longitude' => -82.8694868,
            'altitude_m' => 590,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1835,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erkilet',
            'iata_code' => 'ASR',
            'icao_code' => 'LTAU',


            'latitude' => 38.770386,
            'longitude' => 35.495428,
            'altitude_m' => 3463,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1108,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ermelo',
            'iata_code' => '',
            'icao_code' => 'FAEO',


            'latitude' => -26.495644,
            'longitude' => 29.979764,
            'altitude_m' => 5700,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 688,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ernesto Cortissoz',
            'iata_code' => 'BAQ',
            'icao_code' => 'SKBQ',


            'latitude' => 10.889589,
            'longitude' => -74.780819,
            'altitude_m' => 98,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 199,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eros Airport',
            'iata_code' => 'ERS',
            'icao_code' => 'FYWE',


            'latitude' => -22.6122,
            'longitude' => 17.0804,
            'altitude_m' => 5575,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'Africa/Windhoek',

            'city_id' => 2486,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erzincan',
            'iata_code' => 'ERC',
            'icao_code' => 'LTCD',


            'latitude' => 39.710203,
            'longitude' => 39.527003,
            'altitude_m' => 3783,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 689,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Erzurum',
            'iata_code' => 'ERZ',
            'icao_code' => 'LTCE',


            'latitude' => 39.956501,
            'longitude' => 41.170166,
            'altitude_m' => 5763,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 690,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Esbjerg',
            'iata_code' => 'EBJ',
            'icao_code' => 'EKEB',


            'latitude' => 55.525942,
            'longitude' => 8.553403,
            'altitude_m' => 97,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 691,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Escuela Mariscal Sucre Airport',
            'iata_code' => 'MYC',
            'icao_code' => 'SVBS',


            'latitude' => 10.249978,
            'longitude' => -67.649419,
            'altitude_m' => 1338,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1387,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Esenboga',
            'iata_code' => 'ESB',
            'icao_code' => 'LTAC',


            'latitude' => 40.128082,
            'longitude' => 32.995083,
            'altitude_m' => 3125,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 88,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eskilstuna',
            'iata_code' => 'EKT',
            'icao_code' => 'ESSU',


            'latitude' => 59.351078,
            'longitude' => 16.7084,
            'altitude_m' => 139,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 693,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eskisehir',
            'iata_code' => 'ESK',
            'icao_code' => 'LTBI',


            'latitude' => 39.784138,
            'longitude' => 30.582111,
            'altitude_m' => 2581,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 694,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Essen HBF',
            'iata_code' => 'ESX',
            'icao_code' => 'ESSE',


            'latitude' => 51.451389,
            'longitude' => 7.0138,
            'altitude_m' => 1000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 695,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Essen Mulheim',
            'iata_code' => 'ESS',
            'icao_code' => 'EDLE',


            'latitude' => 51.402333,
            'longitude' => 6.937333,
            'altitude_m' => 424,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 695,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Essen Railway',
            'iata_code' => 'ZES',
            'icao_code' => '',


            'latitude' => 51.451389,
            'longitude' => 7.013889,
            'altitude_m' => 200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 695,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Essey',
            'iata_code' => 'ENC',
            'icao_code' => 'LFSN',


            'latitude' => 48.692069,
            'longitude' => 6.230458,
            'altitude_m' => 751,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1558,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Estevan',
            'iata_code' => 'YEN',
            'icao_code' => 'CYEN',


            'latitude' => 49.210278,
            'longitude' => -102.965833,
            'altitude_m' => 1905,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 697,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Etimesgut',
            'iata_code' => 'ANK',
            'icao_code' => 'LTAD',


            'latitude' => 39.949831,
            'longitude' => 32.688622,
            'altitude_m' => 2653,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 88,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eugenio Maria De Hostos',
            'iata_code' => 'MAZ',
            'icao_code' => 'TJMZ',


            'latitude' => 18.255694,
            'longitude' => -67.148472,
            'altitude_m' => 28,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 1420,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eulogio Sanchez',
            'iata_code' => '',
            'icao_code' => 'SCTB',


            'latitude' => -33.456278,
            'longitude' => -70.546667,
            'altitude_m' => 2129,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 2052,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Eupen - Rail',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.3743,
            'longitude' => 6.0201,
            'altitude_m' => 1000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 698,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'EuroAirport',
            'iata_code' => 'EAP',
            'icao_code' => '',


            'latitude' => 47.589583,
            'longitude' => 7.529914,
            'altitude_m' => 885,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1529,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'EuroAirport Basel-Mulhouse-Freiburg',
            'iata_code' => 'BSL',
            'icao_code' => '',


            'latitude' => 47.59,
            'longitude' => 7.529167,
            'altitude_m' => 885,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 202,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Evora',
            'iata_code' => '',
            'icao_code' => 'LPEV',


            'latitude' => 38.533472,
            'longitude' => -7.889639,
            'altitude_m' => 807,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 699,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Exeter',
            'iata_code' => 'EXT',
            'icao_code' => 'EGTE',


            'latitude' => 50.734444,
            'longitude' => -3.413889,
            'altitude_m' => 102,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 701,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fagali  \'i',
            'iata_code' => 'FGI',
            'icao_code' => 'NSFI',


            'latitude' => -13.84861111,
            'longitude' => -171.74083333,
            'altitude_m' => 25,

            'time_zone_offset' => 13,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Pacific/Apia',

            'city_id' => 107,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fairbanks Intl',
            'iata_code' => 'FAI',
            'icao_code' => 'PAFA',


            'latitude' => 64.815114,
            'longitude' => -147.856267,
            'altitude_m' => 434,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 702,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fairbanks Train Depot',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 64.5109,
            'longitude' => -147.4445,
            'altitude_m' => 446,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 702,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fairford',
            'iata_code' => 'FFD',
            'icao_code' => 'EGVA',


            'latitude' => 51.682167,
            'longitude' => -1.790028,
            'altitude_m' => 286,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 703,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Faisalabad Intl',
            'iata_code' => 'LYP',
            'icao_code' => 'OPFA',


            'latitude' => 31.365014,
            'longitude' => 72.994842,
            'altitude_m' => 591,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 704,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fajardo',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 18.32,
            'longitude' => -65.65,
            'altitude_m' => 0,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 705,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Falconara',
            'iata_code' => 'AOI',
            'icao_code' => 'LIPY',


            'latitude' => 43.616389,
            'longitude' => 13.362222,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 81,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Falkoping',
            'iata_code' => '',
            'icao_code' => 'ESGK',


            'latitude' => 58.169794,
            'longitude' => 13.587847,
            'altitude_m' => 785,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 706,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Falls Intl',
            'iata_code' => 'INL',
            'icao_code' => 'KINL',


            'latitude' => 48.566186,
            'longitude' => -93.403067,
            'altitude_m' => 1185,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1002,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Farfan',
            'iata_code' => 'ULQ',
            'icao_code' => 'SKUL',


            'latitude' => 4.088358,
            'longitude' => -76.235133,
            'altitude_m' => 3132,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 2322,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Farnborough',
            'iata_code' => 'FAB',
            'icao_code' => 'EGLF',


            'latitude' => 51.275833,
            'longitude' => -.776333,
            'altitude_m' => 238,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 708,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Faro',
            'iata_code' => 'FAO',
            'icao_code' => 'LPFR',


            'latitude' => 37.014425,
            'longitude' => -7.965911,
            'altitude_m' => 24,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 709,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fassberg',
            'iata_code' => '',
            'icao_code' => 'ETHS',


            'latitude' => 52.919406,
            'longitude' => 10.197528,
            'altitude_m' => 245,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 711,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fatmawati Soekarno',
            'iata_code' => 'BKS',
            'icao_code' => 'WIPL',


            'latitude' => -3.8637,
            'longitude' => 102.339036,
            'altitude_m' => 50,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 237,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fauville',
            'iata_code' => '',
            'icao_code' => 'LFOE',


            'latitude' => 49.028669,
            'longitude' => 1.219864,
            'altitude_m' => 464,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 700,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fenosu',
            'iata_code' => 'FNU',
            'icao_code' => 'LIER',


            'latitude' => 39.895,
            'longitude' => 8.6383,
            'altitude_m' => 36,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1683,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ferihegy',
            'iata_code' => 'BUD',
            'icao_code' => 'LHBP',


            'latitude' => 47.436933,
            'longitude' => 19.255592,
            'altitude_m' => 495,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Budapest',

            'city_id' => 341,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Feringe',
            'iata_code' => '',
            'icao_code' => 'ESMG',


            'latitude' => 56.950278,
            'longitude' => 13.921667,
            'altitude_m' => 538,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1298,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fernandina Beach Municipal Airport',
            'iata_code' => '55J',
            'icao_code' => '',


            'latitude' => 30.6118333,
            'longitude' => -81.4611944,
            'altitude_m' => 16,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 713,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fernando Ab',
            'iata_code' => '',
            'icao_code' => 'RPUL',


            'latitude' => 13.955017,
            'longitude' => 121.124925,
            'altitude_m' => 1220,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 1290,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fernando Luis Ribas Dominicci',
            'iata_code' => 'SIG',
            'icao_code' => 'TJIG',


            'latitude' => 18.456828,
            'longitude' => -66.098139,
            'altitude_m' => 10,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 2027,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ferry Port',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.967536,
            'longitude' => 1.849308,
            'altitude_m' => 6,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 369,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ferry Port',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.126876,
            'longitude' => 1.339747,
            'altitude_m' => 6,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 624,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fes Sefrou Airport',
            'iata_code' => '',
            'icao_code' => 'GMFU',


            'latitude' => 34.0081,
            'longitude' => -4.96556,
            'altitude_m' => 1539,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 714,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ficksburg Sentraoes',
            'iata_code' => '',
            'icao_code' => 'FAFB',


            'latitude' => -28.823119,
            'longitude' => 27.9089,
            'altitude_m' => 5315,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 715,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Filippos',
            'iata_code' => 'KZI',
            'icao_code' => 'LGKZ',


            'latitude' => 40.28611,
            'longitude' => 21.840834,
            'altitude_m' => 2059,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1179,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Finger Lakes Regional Airport',
            'iata_code' => '0G7',
            'icao_code' => '',


            'latitude' => 42.8835647,
            'longitude' => -76.7812318,
            'altitude_m' => 492,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2087,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Finsterwalde Schacksdorf',
            'iata_code' => '',
            'icao_code' => 'EDUS',


            'latitude' => 51.6075,
            'longitude' => 13.738,
            'altitude_m' => 399,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2139,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Finsterwalde-Heinrichsruh',
            'iata_code' => '',
            'icao_code' => 'EDAS',


            'latitude' => 51.6377,
            'longitude' => 13.2419,
            'altitude_m' => 384,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 716,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Firenze',
            'iata_code' => 'FLR',
            'icao_code' => 'LIRQ',


            'latitude' => 43.809953,
            'longitude' => 11.2051,
            'altitude_m' => 142,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 723,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Firenze Santa Maria Novella',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.7766651171,
            'longitude' => 11.2480175237,
            'altitude_m' => 159,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 723,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'First Flight Airport',
            'iata_code' => 'FFA',
            'icao_code' => 'KFFA',


            'latitude' => 36.02,
            'longitude' => -75.67,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1131,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fitzgerald Municipal Airport',
            'iata_code' => 'FZG',
            'icao_code' => 'KFZG',


            'latitude' => 31.6839046,
            'longitude' => -83.2709036,
            'altitude_m' => 365,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 717,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fiumicino',
            'iata_code' => 'FCO',
            'icao_code' => 'LIRF',


            'latitude' => 41.804475,
            'longitude' => 12.250797,
            'altitude_m' => 15,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1972,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flagler County Airport',
            'iata_code' => 'XFL',
            'icao_code' => 'KXFL',


            'latitude' => 29.2821,
            'longitude' => -81.1212,
            'altitude_m' => 33,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 718,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flagstaff Pulliam Airport',
            'iata_code' => 'FLG',
            'icao_code' => 'KFLG',


            'latitude' => 35.140318,
            'longitude' => -111.6692392,
            'altitude_m' => 7015,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 719,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flensburg Schaferhaus',
            'iata_code' => 'FLF',
            'icao_code' => 'EDXF',


            'latitude' => 54.771772,
            'longitude' => 9.378214,
            'altitude_m' => 130,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 720,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flesland',
            'iata_code' => 'BGO',
            'icao_code' => 'ENBR',


            'latitude' => 60.293386,
            'longitude' => 5.218142,
            'altitude_m' => 170,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 241,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fliegerhost ',
            'iata_code' => 'KFB',
            'icao_code' => '',


            'latitude' => 47.874,
            'longitude' => 10.6294,
            'altitude_m' => 680,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1105,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flin Flon',
            'iata_code' => 'YFO',
            'icao_code' => 'CYFO',


            'latitude' => 54.678055,
            'longitude' => -101.681667,
            'altitude_m' => 997,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 721,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Florenc Central Bus Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.0909636578,
            'longitude' => 14.4394929552,
            'altitude_m' => 617,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1861,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Floro',
            'iata_code' => 'FRO',
            'icao_code' => 'ENFL',


            'latitude' => 61.583611,
            'longitude' => 5.024722,
            'altitude_m' => 37,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 726,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Floyd Bennett Memorial Airport',
            'iata_code' => 'GFL',
            'icao_code' => 'KGFL',


            'latitude' => 43.341222,
            'longitude' => -73.610305,
            'altitude_m' => 328,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1899,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flugplatz',
            'iata_code' => '',
            'icao_code' => 'EDAL',


            'latitude' => 52.393889,
            'longitude' => 14.099722,
            'altitude_m' => 141,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 779,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flugplatz Finow',
            'iata_code' => '',
            'icao_code' => 'EDAV',


            'latitude' => 52.827222,
            'longitude' => 13.693611,
            'altitude_m' => 121,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 649,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flugplatz Hoepen',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 53.1167,
            'longitude' => 9.8,
            'altitude_m' => 267,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2078,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flugplatz Merzbrueck',
            'iata_code' => 'AAH',
            'icao_code' => 'EDKA',


            'latitude' => 50.823194,
            'longitude' => 6.186389,
            'altitude_m' => 570,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Flying Cloud Airport',
            'iata_code' => 'FCM',
            'icao_code' => 'KFCM',


            'latitude' => 44.4938,
            'longitude' => -93.2726,
            'altitude_m' => 906,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 650,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fond Du Lac County Airport',
            'iata_code' => 'FLD',
            'icao_code' => 'KFLD',


            'latitude' => 43.7711667,
            'longitude' => -88.4884167,
            'altitude_m' => 808,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 728,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fontaine Airport',
            'iata_code' => 'BOR',
            'icao_code' => 'LFSQ',


            'latitude' => 47.6556015,
            'longitude' => 7.0108299,
            'altitude_m' => 3663,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 229,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Foothills Regional Airport',
            'iata_code' => 'MRN',
            'icao_code' => 'KMRN',


            'latitude' => 35.8202336,
            'longitude' => -81.6115119,
            'altitude_m' => 1270,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1511,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Forchheim Airport',
            'iata_code' => '',
            'icao_code' => 'EDTK',


            'latitude' => 49.097778,
            'longitude' => 8.453056,
            'altitude_m' => 400,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1094,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ford Airport',
            'iata_code' => 'IMT',
            'icao_code' => 'KIMT',


            'latitude' => 45.8183611,
            'longitude' => -88.1145556,
            'altitude_m' => 1182,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1014,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Forde Bringeland',
            'iata_code' => 'FDE',
            'icao_code' => '',


            'latitude' => 61.392,
            'longitude' => 5.763,
            'altitude_m' => 1034,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 729,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Forest Lake Airport',
            'iata_code' => '25D',
            'icao_code' => '',


            'latitude' => 45.2477456,
            'longitude' => -92.9943853,
            'altitude_m' => 925,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 730,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Forli',
            'iata_code' => 'FRL',
            'icao_code' => 'LIPK',


            'latitude' => 44.194753,
            'longitude' => 12.070094,
            'altitude_m' => 97,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 731,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Formosa',
            'iata_code' => 'FMA',
            'icao_code' => 'SARF',


            'latitude' => -26.212722,
            'longitude' => -58.228111,
            'altitude_m' => 194,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 732,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fornebu',
            'iata_code' => 'FBU',
            'icao_code' => 'ENFB',


            'latitude' => 59.883333,
            'longitude' => 10.616667,
            'altitude_m' => 56,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1694,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Forquilhinha',
            'iata_code' => 'CCM',
            'icao_code' => 'SBCM',


            'latitude' => -28.725817,
            'longitude' => -49.424739,
            'altitude_m' => 93,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 549,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Collins Loveland Muni',
            'iata_code' => 'FNL',
            'icao_code' => 'KFNL',


            'latitude' => 40.451828,
            'longitude' => -105.011336,
            'altitude_m' => 5016,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 735,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Dodge Rgnl',
            'iata_code' => 'FOD',
            'icao_code' => 'KFOD',


            'latitude' => 42.5512,
            'longitude' => -94.191842,
            'altitude_m' => 1157,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 736,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Frances Municipal Airport',
            'iata_code' => 'YAG',
            'icao_code' => 'CYAG',


            'latitude' => 48.6542,
            'longitude' => -93.4397,
            'altitude_m' => 1125,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 738,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Lauderdale Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 26.0882,
            'longitude' => -80.115373,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 743,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Lauderdale Executive',
            'iata_code' => 'FXE',
            'icao_code' => 'KFXE',


            'latitude' => 26.197281,
            'longitude' => -80.170706,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 743,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Lauderdale Hollywood Intl',
            'iata_code' => 'FLL',
            'icao_code' => 'KFLL',


            'latitude' => 26.072583,
            'longitude' => -80.15275,
            'altitude_m' => 9,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 743,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Lauderdale-Hollywood International Airport Station at Dania Beach',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 26.061933,
            'longitude' => -80.16565,
            'altitude_m' => 9,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 575,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort McMurray - Mildred Lake Airport',
            'iata_code' => 'NML',
            'icao_code' => '',


            'latitude' => 57.055599,
            'longitude' => -111.573997,
            'altitude_m' => 1046,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 745,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Nelson',
            'iata_code' => 'YYE',
            'icao_code' => 'CYYE',


            'latitude' => 58.836389,
            'longitude' => -122.596944,
            'altitude_m' => 1253,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 747,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Severn Airport',
            'iata_code' => 'YER',
            'icao_code' => 'CYER',


            'latitude' => 56.0189,
            'longitude' => -87.6761,
            'altitude_m' => 48,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 752,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Simpson',
            'iata_code' => 'YFS',
            'icao_code' => 'CYFS',


            'latitude' => 61.760153,
            'longitude' => -121.236525,
            'altitude_m' => 555,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 754,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Smith Rgnl',
            'iata_code' => 'FSM',
            'icao_code' => 'KFSM',


            'latitude' => 35.336583,
            'longitude' => -94.367444,
            'altitude_m' => 469,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 755,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort St John',
            'iata_code' => 'YXJ',
            'icao_code' => 'CYXJ',


            'latitude' => 56.238056,
            'longitude' => -120.740278,
            'altitude_m' => 2280,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Dawson_Creek',

            'city_id' => 751,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Stockton Pecos Co',
            'iata_code' => 'FST',
            'icao_code' => 'KFST',


            'latitude' => 30.915667,
            'longitude' => -102.916139,
            'altitude_m' => 3011,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 756,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Wayne',
            'iata_code' => 'FWA',
            'icao_code' => 'KFWA',


            'latitude' => 40.978472,
            'longitude' => -85.195139,
            'altitude_m' => 815,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 757,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort William Heliport',
            'iata_code' => 'FWM',
            'icao_code' => '',


            'latitude' => 56.816666,
            'longitude' => -5.116667,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 758,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Worth Alliance Airport',
            'iata_code' => 'AFW',
            'icao_code' => 'KAFW',


            'latitude' => 32.987778,
            'longitude' => -97.318889,
            'altitude_m' => 722,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 759,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fort Worth Meacham Intl',
            'iata_code' => 'FTW',
            'icao_code' => 'KFTW',


            'latitude' => 32.819778,
            'longitude' => -97.362444,
            'altitude_m' => 710,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 759,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Foshan',
            'iata_code' => 'FUO',
            'icao_code' => '',


            'latitude' => 23.133333,
            'longitude' => 113.28333,
            'altitude_m' => 8,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 761,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Foster Field',
            'iata_code' => '7A4',
            'icao_code' => '',


            'latitude' => 42.4664444,
            'longitude' => -90.1693889,
            'altitude_m' => 990,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 108,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fostoria Metropolitan Airport',
            'iata_code' => 'FZI',
            'icao_code' => 'KFZI',


            'latitude' => 41.1908333,
            'longitude' => -83.3930833,
            'altitude_m' => 752,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 762,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fourchambault',
            'iata_code' => 'NVS',
            'icao_code' => 'LFQG',


            'latitude' => 47.002625,
            'longitude' => 3.113333,
            'altitude_m' => 602,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1586,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Framnes',
            'iata_code' => 'NVK',
            'icao_code' => 'ENNK',


            'latitude' => 68.435833,
            'longitude' => 17.388056,
            'altitude_m' => 97,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1569,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Franca Airport',
            'iata_code' => 'FRC',
            'icao_code' => 'SIMK',


            'latitude' => -20.538611,
            'longitude' => -47.400833,
            'altitude_m' => 1040,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 763,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Francazal',
            'iata_code' => '',
            'icao_code' => 'LFBF',


            'latitude' => 43.545555,
            'longitude' => 1.3675,
            'altitude_m' => 535,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2293,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Frank Wiley Field',
            'iata_code' => 'MLS',
            'icao_code' => 'KMLS',


            'latitude' => 46.428,
            'longitude' => -105.886,
            'altitude_m' => 2630,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1458,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Frankfurt Main',
            'iata_code' => 'FRA',
            'icao_code' => 'EDDF',


            'latitude' => 50.026421,
            'longitude' => 8.543125,
            'altitude_m' => 364,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 765,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Frankfurt-Main Hauptbahnhof',
            'iata_code' => 'ZRB',
            'icao_code' => '',


            'latitude' => 50.107025799,
            'longitude' => 8.6627605052,
            'altitude_m' => 372,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 765,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Franklin County Airport',
            'iata_code' => '',
            'icao_code' => 'KUOS',


            'latitude' => 35.2051,
            'longitude' => -85.8981,
            'altitude_m' => 1953,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2090,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Franz Josef Strauss',
            'iata_code' => 'MUC',
            'icao_code' => 'EDDM',


            'latitude' => 48.353783,
            'longitude' => 11.786086,
            'altitude_m' => 1487,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1533,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fredericton',
            'iata_code' => 'YFC',
            'icao_code' => 'CYFC',


            'latitude' => 45.868889,
            'longitude' => -66.537222,
            'altitude_m' => 68,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Halifax',

            'city_id' => 766,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Freetown Lungi',
            'iata_code' => 'FNA',
            'icao_code' => 'GFLL',


            'latitude' => 8.616444,
            'longitude' => -13.195489,
            'altitude_m' => 84,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Freetown',

            'city_id' => 767,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Freiburg',
            'iata_code' => '',
            'icao_code' => 'EDTF',


            'latitude' => 48.022653,
            'longitude' => 7.832583,
            'altitude_m' => 799,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 768,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Frejus Saint Raphael',
            'iata_code' => 'FRJ',
            'icao_code' => 'LFTU',


            'latitude' => 43.416667,
            'longitude' => 6.733333,
            'altitude_m' => 7,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 769,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Frescaty',
            'iata_code' => 'MZM',
            'icao_code' => 'LFSF',


            'latitude' => 49.071667,
            'longitude' => 6.131667,
            'altitude_m' => 629,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1445,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Friday Harbor Airport',
            'iata_code' => 'FRD',
            'icao_code' => 'KFHR',


            'latitude' => 48.521944,
            'longitude' => -123.024444,
            'altitude_m' => 113,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 771,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Friday Harbor Seaplane Base',
            'iata_code' => 'FBS',
            'icao_code' => '',


            'latitude' => 48.537222,
            'longitude' => -123.009722,
            'altitude_m' => 0,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 771,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Friedman Mem',
            'iata_code' => 'SUN',
            'icao_code' => 'KSUN',


            'latitude' => 43.504444,
            'longitude' => -114.296194,
            'altitude_m' => 5320,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 889,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Friedrichshafen',
            'iata_code' => 'FDH',
            'icao_code' => 'EDNY',


            'latitude' => 47.671317,
            'longitude' => 9.511486,
            'altitude_m' => 1367,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 772,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fritzlar',
            'iata_code' => 'FRZ',
            'icao_code' => 'ETHF',


            'latitude' => 51.1145,
            'longitude' => 9.285833,
            'altitude_m' => 566,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 773,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fuentemilanos Airport',
            'iata_code' => '',
            'icao_code' => 'LEFM',


            'latitude' => 40.889233,
            'longitude' => -4.239478,
            'altitude_m' => 3284,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 2084,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fukui',
            'iata_code' => '',
            'icao_code' => 'RJNF',


            'latitude' => 36.142847,
            'longitude' => 136.223922,
            'altitude_m' => 19,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 775,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fukuoka',
            'iata_code' => 'FUK',
            'icao_code' => 'RJFF',


            'latitude' => 33.585942,
            'longitude' => 130.450686,
            'altitude_m' => 32,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 776,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fukushima Airport',
            'iata_code' => 'FKS',
            'icao_code' => 'RJSF',


            'latitude' => 37.2274,
            'longitude' => 140.431,
            'altitude_m' => 1221,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 777,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Furnas',
            'iata_code' => '',
            'icao_code' => 'SBFU',


            'latitude' => -20.702817,
            'longitude' => -46.335264,
            'altitude_m' => 2413,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 56,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fussen',
            'iata_code' => 'FUS',
            'icao_code' => 'FUSS',


            'latitude' => 47.585,
            'longitude' => 10.6866,
            'altitude_m' => 800,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 780,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fussen BF',
            'iata_code' => 'FUX',
            'icao_code' => 'FUSN',


            'latitude' => 47.585,
            'longitude' => 10.6866,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 780,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Fuyang Airport',
            'iata_code' => 'FUG',
            'icao_code' => 'ZSFY',


            'latitude' => 32.9,
            'longitude' => 115.816667,
            'altitude_m' => 500,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 781,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gabes',
            'iata_code' => 'GAE',
            'icao_code' => 'DTTG',


            'latitude' => 33.876919,
            'longitude' => 10.103333,
            'altitude_m' => 26,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Africa/Tunis',

            'city_id' => 782,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Galion Municipal Airport',
            'iata_code' => 'GQQ',
            'icao_code' => 'KGQQ',


            'latitude' => 40.7533889,
            'longitude' => -82.7238056,
            'altitude_m' => 1224,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 784,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gallatin Field',
            'iata_code' => 'BZN',
            'icao_code' => 'KBZN',


            'latitude' => 45.777643,
            'longitude' => -111.160151,
            'altitude_m' => 4500,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 298,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gallivare',
            'iata_code' => 'GEV',
            'icao_code' => 'ESNG',


            'latitude' => 67.132408,
            'longitude' => 20.814636,
            'altitude_m' => 1027,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 785,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gallup Muni',
            'iata_code' => 'GUP',
            'icao_code' => 'KGUP',


            'latitude' => 35.511058,
            'longitude' => -108.789308,
            'altitude_m' => 6472,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 786,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Galway',
            'iata_code' => 'GWY',
            'icao_code' => 'EICM',


            'latitude' => 53.300175,
            'longitude' => -8.941592,
            'altitude_m' => 81,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 787,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gander Intl',
            'iata_code' => 'YQX',
            'icao_code' => 'CYQX',


            'latitude' => 48.936944,
            'longitude' => -54.568056,
            'altitude_m' => 496,

            'time_zone_offset' => -3.5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/St_Johns',

            'city_id' => 788,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ganderkesee Atlas Airfield Airport',
            'iata_code' => '',
            'icao_code' => 'EDWQ',


            'latitude' => 53.0361,
            'longitude' => 8.50556,
            'altitude_m' => 95,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 789,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ganzhou Airport',
            'iata_code' => 'KOW',
            'icao_code' => 'ZSGZ',


            'latitude' => 25.8258,
            'longitude' => 114.912,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 790,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gaoqi',
            'iata_code' => 'XMN',
            'icao_code' => 'ZSAM',


            'latitude' => 24.544036,
            'longitude' => 118.127739,
            'altitude_m' => 59,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2508,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gardermoen',
            'iata_code' => 'OSL',
            'icao_code' => 'ENGM',


            'latitude' => 60.193917,
            'longitude' => 11.100361,
            'altitude_m' => 681,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1694,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gardermoen Airport',
            'iata_code' => 'GEN',
            'icao_code' => '',


            'latitude' => 60.1939,
            'longitude' => 11.1004,
            'altitude_m' => 681,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1694,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare Montparnasse',
            'iata_code' => 'XGB',
            'icao_code' => '',


            'latitude' => 48.84,
            'longitude' => 2.318611,
            'altitude_m' => 423,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare de LEst',
            'iata_code' => 'XHP',
            'icao_code' => '',


            'latitude' => 48.876944,
            'longitude' => 2.359167,
            'altitude_m' => 149,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare de Lyon',
            'iata_code' => 'PLY',
            'icao_code' => '',


            'latitude' => 48.844722,
            'longitude' => 2.373611,
            'altitude_m' => 129,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare de Marne-la-Vallee',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 48.869722,
            'longitude' => 2.782778,
            'altitude_m' => 250,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 460,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare de Montreux Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 46.435833,
            'longitude' => 6.910278,
            'altitude_m' => 1280,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1506,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare de Strasbourg',
            'iata_code' => 'XWG',
            'icao_code' => '',


            'latitude' => 48.585068,
            'longitude' => 7.734547,
            'altitude_m' => 475,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2174,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gare du Nord',
            'iata_code' => 'XPG',
            'icao_code' => '',


            'latitude' => 48.880931,
            'longitude' => 2.355323,
            'altitude_m' => 423,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Garfield County Regional Airport',
            'iata_code' => 'RIL',
            'icao_code' => 'KRIL',


            'latitude' => 39.5263056,
            'longitude' => -107.7269444,
            'altitude_m' => 5548,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1948,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Garner Field',
            'iata_code' => 'UVA',
            'icao_code' => 'KUVA',


            'latitude' => 29.215429,
            'longitude' => -99.748962,
            'altitude_m' => 942,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2363,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Garons',
            'iata_code' => 'FNI',
            'icao_code' => 'LFTW',


            'latitude' => 43.757444,
            'longitude' => 4.416347,
            'altitude_m' => 309,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1610,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gary Chicago International Airport',
            'iata_code' => 'GYY',
            'icao_code' => 'KGYY',


            'latitude' => 41.6163,
            'longitude' => -87.4128,
            'altitude_m' => 591,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 791,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gaspe',
            'iata_code' => 'YGP',
            'icao_code' => 'CYGP',


            'latitude' => 48.775278,
            'longitude' => -64.478611,
            'altitude_m' => 108,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 792,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gatineau',
            'iata_code' => 'YND',
            'icao_code' => 'CYND',


            'latitude' => 45.521694,
            'longitude' => -75.563589,
            'altitude_m' => 211,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 793,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gatwick',
            'iata_code' => 'LGW',
            'icao_code' => 'EGKK',


            'latitude' => 51.148056,
            'longitude' => -.190278,
            'altitude_m' => 202,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gavle',
            'iata_code' => 'GVX',
            'icao_code' => 'ESSK',


            'latitude' => 60.593333,
            'longitude' => 16.951389,
            'altitude_m' => 224,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 794,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gaziemir',
            'iata_code' => '',
            'icao_code' => 'LTBK',


            'latitude' => 38.319106,
            'longitude' => 27.159353,
            'altitude_m' => 433,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gazipasa Airport',
            'iata_code' => 'GZP',
            'icao_code' => 'LTFG',


            'latitude' => 36.2993,
            'longitude' => 32.3014,
            'altitude_m' => 92,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 35,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gdynia',
            'iata_code' => 'QYD',
            'icao_code' => 'EPOK',


            'latitude' => 54.5797,
            'longitude' => 18.5172,
            'altitude_m' => 144,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 797,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geelong Airport',
            'iata_code' => 'GEX',
            'icao_code' => 'YGLG',


            'latitude' => -38.225,
            'longitude' => 144.333,
            'altitude_m' => 43,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 798,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geilenkirchen',
            'iata_code' => 'GKE',
            'icao_code' => 'ETNG',


            'latitude' => 50.960817,
            'longitude' => 6.042422,
            'altitude_m' => 296,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 799,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geiteryggen',
            'iata_code' => 'SKE',
            'icao_code' => 'ENSN',


            'latitude' => 59.185,
            'longitude' => 9.566944,
            'altitude_m' => 463,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 2130,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gelendzhik',
            'iata_code' => 'GDZ',
            'icao_code' => 'URKG',


            'latitude' => 44.55,
            'longitude' => 38.083,
            'altitude_m' => 100,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 800,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Bartolome Salom Intl',
            'iata_code' => 'PBL',
            'icao_code' => 'SVPC',


            'latitude' => 10.4805,
            'longitude' => -68.073025,
            'altitude_m' => 32,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1881,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Bernardo O Higgins',
            'iata_code' => '',
            'icao_code' => 'SCCH',


            'latitude' => -36.582497,
            'longitude' => -72.031367,
            'altitude_m' => 495,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 469,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Div P A Angel H Corzo Molina',
            'iata_code' => '',
            'icao_code' => 'MMTB',


            'latitude' => 16.739919,
            'longitude' => -93.173297,
            'altitude_m' => 1909,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2329,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Francisco J Mujica Intl',
            'iata_code' => 'MLM',
            'icao_code' => 'MMMM',


            'latitude' => 19.849944,
            'longitude' => -101.0255,
            'altitude_m' => 6033,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1510,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Francisco Javier Mina Intl',
            'iata_code' => 'TAM',
            'icao_code' => 'MMTM',


            'latitude' => 22.29645,
            'longitude' => -97.865931,
            'altitude_m' => 80,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2217,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Freire',
            'iata_code' => '',
            'icao_code' => 'SCIC',


            'latitude' => -34.9667,
            'longitude' => -71.2164,
            'altitude_m' => 722,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 563,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Ignacio P Garcia Intl',
            'iata_code' => 'HMO',
            'icao_code' => 'MMHO',


            'latitude' => 29.095858,
            'longitude' => -111.047858,
            'altitude_m' => 627,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Hermosillo',

            'city_id' => 937,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Jose Antonio Anzoategui Intl',
            'iata_code' => 'BLA',
            'icao_code' => 'SVBC',


            'latitude' => 10.107139,
            'longitude' => -64.689161,
            'altitude_m' => 26,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 190,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Jose Francisco Bermudez',
            'iata_code' => 'CUP',
            'icao_code' => 'SVCP',


            'latitude' => 10.660014,
            'longitude' => -63.261681,
            'altitude_m' => 33,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 411,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Jose Maria Yanez Intl',
            'iata_code' => 'GYM',
            'icao_code' => 'MMGM',


            'latitude' => 27.968983,
            'longitude' => -110.925169,
            'altitude_m' => 59,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Hermosillo',

            'city_id' => 870,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Juan N Alvarez Intl',
            'iata_code' => 'ACA',
            'icao_code' => 'MMAA',


            'latitude' => 16.757061,
            'longitude' => -99.753953,
            'altitude_m' => 16,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 11,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Lucio Blanco Intl',
            'iata_code' => 'REX',
            'icao_code' => 'MMRX',


            'latitude' => 26.008908,
            'longitude' => -98.228513,
            'altitude_m' => 139,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1940,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Manuel Marquez De Leon Intl',
            'iata_code' => 'LAP',
            'icao_code' => 'MMLP',


            'latitude' => 24.072694,
            'longitude' => -110.362475,
            'altitude_m' => 69,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 1208,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Manuel Serrano',
            'iata_code' => 'MCH',
            'icao_code' => 'SEMH',


            'latitude' => -3.268903,
            'longitude' => -79.961572,
            'altitude_m' => 11,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guayaquil',

            'city_id' => 1342,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Mariano Escobedo Intl',
            'iata_code' => 'MTY',
            'icao_code' => 'MMMY',


            'latitude' => 25.778489,
            'longitude' => -100.106878,
            'altitude_m' => 1278,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1499,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Mariano Matamoros',
            'iata_code' => 'CVJ',
            'icao_code' => 'MMCB',


            'latitude' => 18.834764,
            'longitude' => -99.2613,
            'altitude_m' => 4277,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 557,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Mitchell Intl',
            'iata_code' => 'MKE',
            'icao_code' => 'KMKE',


            'latitude' => 42.947222,
            'longitude' => -87.896583,
            'altitude_m' => 723,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1461,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Pedro Jose Mendez Intl',
            'iata_code' => 'CVM',
            'icao_code' => 'MMCV',


            'latitude' => 23.703336,
            'longitude' => -98.956486,
            'altitude_m' => 761,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 491,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Pico',
            'iata_code' => '',
            'icao_code' => 'SAZG',


            'latitude' => -35.696183,
            'longitude' => -63.758286,
            'altitude_m' => 459,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 801,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General R Fierro Villalobos Intl',
            'iata_code' => 'CUU',
            'icao_code' => 'MMCU',


            'latitude' => 28.702875,
            'longitude' => -105.964567,
            'altitude_m' => 4462,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 467,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Rafael Buelna Intl',
            'iata_code' => 'MZT',
            'icao_code' => 'MMMZ',


            'latitude' => 23.161356,
            'longitude' => -106.266072,
            'altitude_m' => 38,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mazatlan',

            'city_id' => 1421,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Rodolfo Sanchez Taboada Intl',
            'iata_code' => 'MXL',
            'icao_code' => 'MMML',


            'latitude' => 32.630634,
            'longitude' => -115.241637,
            'altitude_m' => 74,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Tijuana',

            'city_id' => 1447,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Santos International Airport',
            'iata_code' => 'GES',
            'icao_code' => 'RPMB',


            'latitude' => 6.106439,
            'longitude' => 125.2353,
            'altitude_m' => 28,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 802,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General Urquiza',
            'iata_code' => 'PRA',
            'icao_code' => 'SAAP',


            'latitude' => -31.794778,
            'longitude' => -60.480361,
            'altitude_m' => 243,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1736,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'General leite de Castro Airport',
            'iata_code' => 'RVD',
            'icao_code' => 'SWLC',


            'latitude' => -17.790278,
            'longitude' => -50.918333,
            'altitude_m' => 2244,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1959,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geneve Cointrin',
            'iata_code' => 'GVA',
            'icao_code' => 'LSGG',


            'latitude' => 46.238064,
            'longitude' => 6.10895,
            'altitude_m' => 1411,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 803,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Genova Sestri',
            'iata_code' => 'GOA',
            'icao_code' => 'LIMJ',


            'latitude' => 44.413333,
            'longitude' => 8.8375,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 804,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'George',
            'iata_code' => 'GRJ',
            'icao_code' => 'FAGG',


            'latitude' => -34.005553,
            'longitude' => 22.378889,
            'altitude_m' => 648,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 805,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geraldton Airport',
            'iata_code' => 'GET',
            'icao_code' => 'YGEL',


            'latitude' => -28.7961,
            'longitude' => 114.707,
            'altitude_m' => 121,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 807,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Geraldton Greenstone Regional',
            'iata_code' => 'YGQ',
            'icao_code' => 'CYGQ',


            'latitude' => 49.778332,
            'longitude' => -86.939445,
            'altitude_m' => 1144,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 808,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gerardo Tobar Lopez',
            'iata_code' => 'BUN',
            'icao_code' => 'SKBU',


            'latitude' => 3.819628,
            'longitude' => -76.989767,
            'altitude_m' => 48,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 342,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gesundbrunnen',
            'iata_code' => 'BGS',
            'icao_code' => '',


            'latitude' => 52.548611,
            'longitude' => 13.389444,
            'altitude_m' => 150,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Getafe',
            'iata_code' => '',
            'icao_code' => 'LEGT',


            'latitude' => 40.294139,
            'longitude' => -3.723833,
            'altitude_m' => 2029,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ghedi',
            'iata_code' => '',
            'icao_code' => 'LIPL',


            'latitude' => 45.432167,
            'longitude' => 10.267667,
            'altitude_m' => 333,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 809,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gibraltar',
            'iata_code' => 'GIB',
            'icao_code' => 'LXGB',


            'latitude' => 36.151219,
            'longitude' => -5.349664,
            'altitude_m' => 15,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Gibraltar',

            'city_id' => 810,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gifu',
            'iata_code' => '',
            'icao_code' => 'RJNG',


            'latitude' => 35.394078,
            'longitude' => 136.869667,
            'altitude_m' => 128,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 811,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gila Bend Municipal Airport',
            'iata_code' => 'E63',
            'icao_code' => 'KE63',


            'latitude' => 32.960169,
            'longitude' => -112.673636,
            'altitude_m' => 789,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 812,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gilbert Airport',
            'iata_code' => 'GIF',
            'icao_code' => 'KGIF',


            'latitude' => 28.062778,
            'longitude' => -81.753333,
            'altitude_m' => 145,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2490,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gillam Airport',
            'iata_code' => 'YGX',
            'icao_code' => 'CYGX',


            'latitude' => 56.3575,
            'longitude' => -94.7106,
            'altitude_m' => 476,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 813,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gillespie',
            'iata_code' => 'SEE',
            'icao_code' => 'KSEE',


            'latitude' => 32.8262222,
            'longitude' => -116.9724444,
            'altitude_m' => 388,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 658,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gilmer County Airport',
            'iata_code' => '49A',
            'icao_code' => '',


            'latitude' => 34.6282222,
            'longitude' => -84.5265833,
            'altitude_m' => 1486,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 669,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gimhae Intl',
            'iata_code' => 'PUS',
            'icao_code' => 'RKPK',


            'latitude' => 35.179528,
            'longitude' => 128.938222,
            'altitude_m' => 6,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Seoul',

            'city_id' => 351,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gimli Industrial Park Airport',
            'iata_code' => 'YGM',
            'icao_code' => 'CYGM',


            'latitude' => 50.628056,
            'longitude' => -97.043333,
            'altitude_m' => 753,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 814,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gimpo',
            'iata_code' => 'GMP',
            'icao_code' => 'RKSS',


            'latitude' => 37.558311,
            'longitude' => 126.790586,
            'altitude_m' => 58,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Seoul',

            'city_id' => 2088,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gimpo International Airpot',
            'iata_code' => 'SEL',
            'icao_code' => '',


            'latitude' => 37.558311,
            'longitude' => 126.790586,
            'altitude_m' => 58,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Seoul',

            'city_id' => 2088,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gino Lisa',
            'iata_code' => 'FOG',
            'icao_code' => 'LIBF',


            'latitude' => 41.432917,
            'longitude' => 15.535028,
            'altitude_m' => 266,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 727,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gisborne',
            'iata_code' => 'GIS',
            'icao_code' => 'NZGS',


            'latitude' => -38.663333,
            'longitude' => 177.978333,
            'altitude_m' => 15,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 816,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gjoa Haven',
            'iata_code' => 'YHK',
            'icao_code' => 'CYHK',


            'latitude' => 68.635556,
            'longitude' => -95.849722,
            'altitude_m' => 152,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 817,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glacier Park Intl',
            'iata_code' => 'FCA',
            'icao_code' => 'KFCA',


            'latitude' => 48.310472,
            'longitude' => -114.256,
            'altitude_m' => 2977,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1077,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gladstone Airport',
            'iata_code' => 'GLT',
            'icao_code' => 'YGLA',


            'latitude' => -23.8697,
            'longitude' => 151.223,
            'altitude_m' => 64,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 818,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gladwin Zettel Memorial Airport',
            'iata_code' => 'GDW',
            'icao_code' => 'KGDW',


            'latitude' => 43.9705893,
            'longitude' => -84.47502,
            'altitude_m' => 774,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 819,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glasgow',
            'iata_code' => 'GLA',
            'icao_code' => 'EGPF',


            'latitude' => 55.871944,
            'longitude' => -4.433056,
            'altitude_m' => 26,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 820,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glasgow Buchanan Bus Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.8652,
            'longitude' => -4.25033,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 820,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glasgow City Heliport',
            'iata_code' => '',
            'icao_code' => 'EGEG',


            'latitude' => 55.5141,
            'longitude' => -4.1749,
            'altitude_m' => 10,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 820,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glasgow Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.8622,
            'longitude' => -4.2512,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 820,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glenview Amtrak Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.074197,
            'longitude' => -87.805346,
            'altitude_m' => 630,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 822,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glenwood Springs Train Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.548,
            'longitude' => -107.3233,
            'altitude_m' => 0,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 823,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glindbruchkippe',
            'iata_code' => '',
            'icao_code' => 'KIPP',


            'latitude' => 52.3237,
            'longitude' => 10.182,
            'altitude_m' => 230,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1764,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Glisy',
            'iata_code' => '',
            'icao_code' => 'LFAY',


            'latitude' => 49.873019,
            'longitude' => 2.387075,
            'altitude_m' => 208,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 71,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gloucester Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.6166666667,
            'longitude' => -70.6683333333,
            'altitude_m' => 50,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 824,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gnassingbe Eyadema Intl',
            'iata_code' => 'LFW',
            'icao_code' => 'DXXX',


            'latitude' => 6.165611,
            'longitude' => 1.254511,
            'altitude_m' => 72,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lome',

            'city_id' => 1303,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gnoss Field Airport',
            'iata_code' => '',
            'icao_code' => 'KDVO',


            'latitude' => 38.1436111,
            'longitude' => -122.5561,
            'altitude_m' => 2,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1634,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gobernador Castello',
            'iata_code' => 'VDM',
            'icao_code' => 'SAVV',


            'latitude' => -40.869222,
            'longitude' => -63.000389,
            'altitude_m' => 20,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 2404,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Godman Aaf',
            'iata_code' => 'FTK',
            'icao_code' => 'KFTK',


            'latitude' => 37.907058,
            'longitude' => -85.972106,
            'altitude_m' => 756,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gogebic Iron County Airport',
            'iata_code' => 'IWD',
            'icao_code' => '',


            'latitude' => 46.5274747,
            'longitude' => -90.1313967,
            'altitude_m' => 1230,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1015,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Goiabeiras',
            'iata_code' => 'VIX',
            'icao_code' => 'SBVT',


            'latitude' => -20.258056,
            'longitude' => -40.286389,
            'altitude_m' => 11,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2424,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Golden Airport',
            'iata_code' => 'YGE',
            'icao_code' => 'CYGE',


            'latitude' => 51.2992,
            'longitude' => -116.982,
            'altitude_m' => 2575,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 826,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Goleniow',
            'iata_code' => 'SZZ',
            'icao_code' => 'EPSC',


            'latitude' => 53.584731,
            'longitude' => 14.902206,
            'altitude_m' => 154,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 2203,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Golfo de Morrosquillo Airport',
            'iata_code' => 'TLU',
            'icao_code' => 'SKTL',


            'latitude' => 9.511944,
            'longitude' => -75.586389,
            'altitude_m' => 10,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 2281,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gombe Lawanti International Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 9.2575,
            'longitude' => 12.430278,
            'altitude_m' => 500,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 827,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gomel',
            'iata_code' => 'GME',
            'icao_code' => 'UMGG',


            'latitude' => 52.527022,
            'longitude' => 31.016692,
            'altitude_m' => 471,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Minsk',

            'city_id' => 828,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gorakhpur Airport',
            'iata_code' => 'GOP',
            'icao_code' => 'VEGK',


            'latitude' => 26.739708,
            'longitude' => 83.449708,
            'altitude_m' => 259,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 830,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gorno-Altaysk Airport',
            'iata_code' => 'RGK',
            'icao_code' => 'UNBG',


            'latitude' => 51.966667,
            'longitude' => 85.833333,
            'altitude_m' => 965,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Omsk',

            'city_id' => 831,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gostomel Antonov',
            'iata_code' => 'GML',
            'icao_code' => 'UKKM',


            'latitude' => 50.603611,
            'longitude' => 30.191944,
            'altitude_m' => 517,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1129,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Goulburn Airport',
            'iata_code' => 'GUL',
            'icao_code' => 'YGLB',


            'latitude' => -34.8103,
            'longitude' => 149.726,
            'altitude_m' => 2141,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 833,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Governador Jorge Teixeira De Oliveira',
            'iata_code' => 'PVH',
            'icao_code' => 'SBPV',


            'latitude' => -8.709294,
            'longitude' => -63.902281,
            'altitude_m' => 294,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1851,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Governador Valadares Airport',
            'iata_code' => 'GVR',
            'icao_code' => 'SBGV',


            'latitude' => -18.8952,
            'longitude' => -41.9822,
            'altitude_m' => 561,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 834,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grabtsevo',
            'iata_code' => 'KLF',
            'icao_code' => 'UUBS',


            'latitude' => 54.55,
            'longitude' => 36.367,
            'altitude_m' => 600,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1078,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grafton Airport',
            'iata_code' => 'GFN',
            'icao_code' => 'YGFN',


            'latitude' => -29.7594,
            'longitude' => 153.03,
            'altitude_m' => 110,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 835,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grahamstown',
            'iata_code' => '',
            'icao_code' => 'FAGT',


            'latitude' => -33.284721,
            'longitude' => 26.498083,
            'altitude_m' => 2135,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 836,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Granada',
            'iata_code' => 'GRX',
            'icao_code' => 'LEGR',


            'latitude' => 37.188731,
            'longitude' => -3.777356,
            'altitude_m' => 1860,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 837,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Granada Station',
            'iata_code' => '',
            'icao_code' => 'GRND',


            'latitude' => 37.184055,
            'longitude' => -3.60916,
            'altitude_m' => 2421,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 837,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Central',
            'iata_code' => 'GCJ',
            'icao_code' => 'FAGC',


            'latitude' => -25.986267,
            'longitude' => 28.140061,
            'altitude_m' => 5325,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1058,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Central Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.752726,
            'longitude' => -73.977229,
            'altitude_m' => 70,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Forks Afb',
            'iata_code' => 'RDR',
            'icao_code' => 'KRDR',


            'latitude' => 47.961098,
            'longitude' => -97.401194,
            'altitude_m' => 913,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1925,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Forks Intl',
            'iata_code' => 'GFK',
            'icao_code' => 'KGFK',


            'latitude' => 47.949256,
            'longitude' => -97.176111,
            'altitude_m' => 845,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 838,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Geneva Resort Airport',
            'iata_code' => 'C02',
            'icao_code' => '',


            'latitude' => 42.6149167,
            'longitude' => -88.3895833,
            'altitude_m' => 835,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1226,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Marais Cook County Airport',
            'iata_code' => 'GRM',
            'icao_code' => 'KCKC',


            'latitude' => 47.8383333,
            'longitude' => -90.3829444,
            'altitude_m' => 1799,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 839,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grand Strand Airport',
            'iata_code' => 'CRE',
            'icao_code' => '',


            'latitude' => 33.81175,
            'longitude' => -78.7239444,
            'altitude_m' => 31,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1627,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grande Prairie',
            'iata_code' => 'YQU',
            'icao_code' => 'CYQU',


            'latitude' => 55.179722,
            'longitude' => -118.885,
            'altitude_m' => 2195,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 840,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grant County Airport',
            'iata_code' => 'SVC',
            'icao_code' => 'SVC',


            'latitude' => 32.6365,
            'longitude' => -108.156,
            'altitude_m' => 5446,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 2117,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grants Milan Muni',
            'iata_code' => 'GNT',
            'icao_code' => 'KGNT',


            'latitude' => 35.167286,
            'longitude' => -107.901989,
            'altitude_m' => 6537,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 841,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Granville',
            'iata_code' => 'GFR',
            'icao_code' => 'LFRF',


            'latitude' => 48.883057,
            'longitude' => -1.564167,
            'altitude_m' => 45,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 842,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grayling Airport',
            'iata_code' => 'KGX',
            'icao_code' => '',


            'latitude' => 62.894444,
            'longitude' => -160.065,
            'altitude_m' => 99,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 844,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Graz',
            'iata_code' => 'GRZ',
            'icao_code' => 'LOWG',


            'latitude' => 46.991067,
            'longitude' => 15.439628,
            'altitude_m' => 1115,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 845,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Great Bend Municipal',
            'iata_code' => 'GBN',
            'icao_code' => 'KGBD',


            'latitude' => 38.344167,
            'longitude' => -98.859167,
            'altitude_m' => 1887,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 846,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Greater Binghamton Edwin A Link Fld',
            'iata_code' => 'BGM',
            'icao_code' => 'KBGM',


            'latitude' => 42.208689,
            'longitude' => -75.979839,
            'altitude_m' => 1636,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 261,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Greater Kankakee',
            'iata_code' => 'IKK',
            'icao_code' => 'KIKK',


            'latitude' => 41.071389,
            'longitude' => -87.846278,
            'altitude_m' => 630,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1084,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Greater Moncton Intl',
            'iata_code' => 'YQM',
            'icao_code' => 'CYQM',


            'latitude' => 46.112221,
            'longitude' => -64.678611,
            'altitude_m' => 232,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Halifax',

            'city_id' => 1492,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grefrath-Niershorst Airport',
            'iata_code' => '',
            'icao_code' => 'EDLF',


            'latitude' => 51.333889,
            'longitude' => 6.359444,
            'altitude_m' => 105,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 849,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gregorio Luperon Intl',
            'iata_code' => 'POP',
            'icao_code' => 'MDPP',


            'latitude' => 19.7579,
            'longitude' => -70.570033,
            'altitude_m' => 15,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Santo_Domingo',

            'city_id' => 1885,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grenchen',
            'iata_code' => 'ZHI',
            'icao_code' => 'LSZG',


            'latitude' => 47.181628,
            'longitude' => 7.417189,
            'altitude_m' => 1411,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 850,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Greytown',
            'iata_code' => '',
            'icao_code' => 'FAGY',


            'latitude' => -29.122011,
            'longitude' => 30.586706,
            'altitude_m' => 3531,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 852,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grider Fld',
            'iata_code' => 'PBF',
            'icao_code' => 'KPBF',


            'latitude' => 34.173142,
            'longitude' => -91.935597,
            'altitude_m' => 206,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1799,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Griffin-Spalding County Airport',
            'iata_code' => '6A2',
            'icao_code' => '',


            'latitude' => 33.2269722,
            'longitude' => -84.2749444,
            'altitude_m' => 958,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 853,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Griffith Airport',
            'iata_code' => 'GFF',
            'icao_code' => 'YGTH',


            'latitude' => -34.2508,
            'longitude' => 146.067,
            'altitude_m' => 439,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 854,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grossenhain',
            'iata_code' => '',
            'icao_code' => 'EDAK',


            'latitude' => 51.308111,
            'longitude' => 13.554973,
            'altitude_m' => 417,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2184,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grosseto',
            'iata_code' => 'GRS',
            'icao_code' => 'LIRS',


            'latitude' => 42.759747,
            'longitude' => 11.071897,
            'altitude_m' => 15,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 856,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grottaglie',
            'iata_code' => 'TAR',
            'icao_code' => 'LIBG',


            'latitude' => 40.517514,
            'longitude' => 17.403212,
            'altitude_m' => 215,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 857,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Grozny Airport',
            'iata_code' => 'GRV',
            'icao_code' => 'URMG',


            'latitude' => 43.2981,
            'longitude' => 45.7841,
            'altitude_m' => 548,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 858,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gualeguaychu',
            'iata_code' => 'GHU',
            'icao_code' => 'SAAG',


            'latitude' => -33.010278,
            'longitude' => -58.613056,
            'altitude_m' => 75,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 861,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guanambi Airport',
            'iata_code' => 'GNM',
            'icao_code' => 'SNGI',


            'latitude' => -14.216667,
            'longitude' => -42.783333,
            'altitude_m' => 500,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 862,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guanare',
            'iata_code' => 'GUQ',
            'icao_code' => 'SVGU',


            'latitude' => 9.026944,
            'longitude' => -69.75515,
            'altitude_m' => 606,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 863,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guangyuan Airport',
            'iata_code' => 'GYS',
            'icao_code' => 'ZUGU',


            'latitude' => 32.3911,
            'longitude' => 105.702,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 864,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guangzhou Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 23.151343,
            'longitude' => 113.252073,
            'altitude_m' => 19,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 865,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guangzhou South Railway Station',
            'iata_code' => 'GZS',
            'icao_code' => '',


            'latitude' => 22.990081,
            'longitude' => 113.270631,
            'altitude_m' => 1,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 865,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guangzhoudong Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 23.149554,
            'longitude' => 113.32479,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 865,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guararapes Gilberto Freyre Intl',
            'iata_code' => 'REC',
            'icao_code' => 'SBRF',


            'latitude' => -8.126794,
            'longitude' => -34.923039,
            'altitude_m' => 33,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 1921,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guaratingueta',
            'iata_code' => '',
            'icao_code' => 'SBGW',


            'latitude' => -22.791608,
            'longitude' => -45.204778,
            'altitude_m' => 1761,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 868,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guarulhos Gov Andre Franco Montouro',
            'iata_code' => 'GRU',
            'icao_code' => 'SBGR',


            'latitude' => -23.432075,
            'longitude' => -46.469511,
            'altitude_m' => 2459,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2060,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guerrero Negro Airport',
            'iata_code' => 'GUB',
            'icao_code' => 'MMGR',


            'latitude' => 28.0261,
            'longitude' => -114.024,
            'altitude_m' => 59,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Tijuana',

            'city_id' => 872,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guidonia',
            'iata_code' => '',
            'icao_code' => 'LIRG',


            'latitude' => 41.990278,
            'longitude' => 12.740833,
            'altitude_m' => 289,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 873,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guillermo Leon Valencia',
            'iata_code' => 'PPN',
            'icao_code' => 'SKPP',


            'latitude' => 2.4544,
            'longitude' => -76.609319,
            'altitude_m' => 5687,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1829,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guipavas',
            'iata_code' => 'BES',
            'icao_code' => 'LFRB',


            'latitude' => 48.447911,
            'longitude' => -4.418539,
            'altitude_m' => 325,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 317,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gumrak',
            'iata_code' => 'VOG',
            'icao_code' => 'URWW',


            'latitude' => 48.782528,
            'longitude' => 44.345544,
            'altitude_m' => 482,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2426,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gurupi Airport',
            'iata_code' => 'GRP',
            'icao_code' => 'SWGI',


            'latitude' => -11.728889,
            'longitude' => -49.068889,
            'altitude_m' => 10,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 877,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gustavo Artunduaga Paredes',
            'iata_code' => 'FLA',
            'icao_code' => 'SKFL',


            'latitude' => 1.589189,
            'longitude' => -75.564372,
            'altitude_m' => 803,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 724,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gustavus Airport',
            'iata_code' => 'GST',
            'icao_code' => 'PAGS',


            'latitude' => 58.4253,
            'longitude' => -135.707,
            'altitude_m' => 34,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 878,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guvercinlik',
            'iata_code' => '',
            'icao_code' => 'LTAB',


            'latitude' => 39.93495,
            'longitude' => 32.740775,
            'altitude_m' => 2694,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 88,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Guyuan',
            'iata_code' => 'GYU',
            'icao_code' => 'ZLGY',


            'latitude' => 36.078611,
            'longitude' => 106.216667,
            'altitude_m' => 5577,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 880,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gwalior',
            'iata_code' => 'GWL',
            'icao_code' => 'VIGR',


            'latitude' => 26.293336,
            'longitude' => 78.227753,
            'altitude_m' => 617,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 881,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Gyumri',
            'iata_code' => 'LWN',
            'icao_code' => 'UDSG',


            'latitude' => 40.750369,
            'longitude' => 43.859342,
            'altitude_m' => 5000,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Yerevan',

            'city_id' => 883,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'HLP1 HS-16',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.8333,
            'longitude' => 11.2027,
            'altitude_m' => 111,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2013,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'HLP2 HS-16',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.4888,
            'longitude' => 10.7833,
            'altitude_m' => 278,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1621,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Habersham County Airport',
            'iata_code' => '',
            'icao_code' => 'KAJR',


            'latitude' => 34.4998483,
            'longitude' => -83.5566701,
            'altitude_m' => 1448,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 527,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hagfors Airport',
            'iata_code' => 'HFS',
            'icao_code' => 'ESOH',


            'latitude' => 60.020064,
            'longitude' => 13.578908,
            'altitude_m' => 474,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 884,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Haguenau',
            'iata_code' => 'HGU',
            'icao_code' => 'LFSH',


            'latitude' => 48.794331,
            'longitude' => 7.817613,
            'altitude_m' => 491,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 885,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Haifa',
            'iata_code' => 'HFA',
            'icao_code' => 'LLHA',


            'latitude' => 32.809444,
            'longitude' => 35.043056,
            'altitude_m' => 28,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Jerusalem',

            'city_id' => 886,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hail',
            'iata_code' => 'HAS',
            'icao_code' => 'OEHL',


            'latitude' => 27.437917,
            'longitude' => 41.686292,
            'altitude_m' => 3331,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 888,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hailang',
            'iata_code' => '',
            'icao_code' => 'ZYMD',


            'latitude' => 44.524072,
            'longitude' => 129.568972,
            'altitude_m' => 883,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1526,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Haines Airport',
            'iata_code' => 'HNS',
            'icao_code' => 'PAHN',


            'latitude' => 59.2438,
            'longitude' => -135.524,
            'altitude_m' => 15,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 890,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hakodate',
            'iata_code' => 'HKD',
            'icao_code' => 'RJCH',


            'latitude' => 41.77,
            'longitude' => 140.821944,
            'altitude_m' => 151,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 891,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Halle Oppin',
            'iata_code' => '',
            'icao_code' => 'EDAQ',


            'latitude' => 51.552,
            'longitude' => 12.052667,
            'altitude_m' => 347,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 893,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Haller Airpark Airport',
            'iata_code' => '',
            'icao_code' => '7FL4',


            'latitude' => 29.903021,
            'longitude' => -81.685923,
            'altitude_m' => 75,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 848,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Halmstad',
            'iata_code' => 'HAD',
            'icao_code' => 'ESMT',


            'latitude' => 56.691128,
            'longitude' => 12.820211,
            'altitude_m' => 101,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 894,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamamatsu',
            'iata_code' => '',
            'icao_code' => 'RJNH',


            'latitude' => 34.750239,
            'longitude' => 137.703083,
            'altitude_m' => 150,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 895,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamburg',
            'iata_code' => 'HAM',
            'icao_code' => 'EDDH',


            'latitude' => 53.630389,
            'longitude' => 9.988228,
            'altitude_m' => 53,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 897,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamburg Finkenwerder',
            'iata_code' => 'XFW',
            'icao_code' => 'EDHI',


            'latitude' => 53.535886,
            'longitude' => 9.837025,
            'altitude_m' => 22,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 897,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamburg Hbf',
            'iata_code' => 'ZMB',
            'icao_code' => '',


            'latitude' => 53.552776,
            'longitude' => 10.006683,
            'altitude_m' => 30,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 897,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamburger Hafen',
            'iata_code' => '',
            'icao_code' => 'ZZ06',


            'latitude' => 53.542369,
            'longitude' => 9.981592,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 897,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamilton',
            'iata_code' => 'HLZ',
            'icao_code' => 'NZHN',


            'latitude' => -37.866661,
            'longitude' => 175.332056,
            'altitude_m' => 172,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 899,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamilton',
            'iata_code' => 'YHM',
            'icao_code' => 'CYHM',


            'latitude' => 43.173611,
            'longitude' => -79.935,
            'altitude_m' => 780,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 898,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamilton Airport',
            'iata_code' => 'HLT',
            'icao_code' => 'YHML',


            'latitude' => -37.648889,
            'longitude' => 142.065278,
            'altitude_m' => 803,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 900,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hamm-Lippewiesen Airport',
            'iata_code' => '',
            'icao_code' => 'EDLH',


            'latitude' => 51.6897,
            'longitude' => 7.81611,
            'altitude_m' => 190,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 901,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hammerfest Airport',
            'iata_code' => 'HFT',
            'icao_code' => 'ENHF',


            'latitude' => 70.679722,
            'longitude' => 23.668889,
            'altitude_m' => 799,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 902,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hana',
            'iata_code' => 'HNM',
            'icao_code' => 'PHHN',


            'latitude' => 20.795636,
            'longitude' => -156.014439,
            'altitude_m' => 78,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 903,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hanamaki',
            'iata_code' => 'HNA',
            'icao_code' => 'RJSI',


            'latitude' => 39.428611,
            'longitude' => 141.135278,
            'altitude_m' => 297,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 904,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hanau Aaf',
            'iata_code' => 'ZNF',
            'icao_code' => 'ETID',


            'latitude' => 50.169189,
            'longitude' => 8.961586,
            'altitude_m' => 368,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 905,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hancock County - Bar Harbor',
            'iata_code' => 'BHB',
            'icao_code' => 'KBHB',


            'latitude' => 44.4497689,
            'longitude' => -68.3615653,
            'altitude_m' => 83,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 186,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hang Nadim',
            'iata_code' => 'BTH',
            'icao_code' => 'WIDD',


            'latitude' => 1.121028,
            'longitude' => 104.118753,
            'altitude_m' => 126,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 206,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hangzhou Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 30.246,
            'longitude' => 120.1784,
            'altitude_m' => 39,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 907,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hanoi Gia Lam',
            'iata_code' => '',
            'icao_code' => 'VVGL',


            'latitude' => 21.040975,
            'longitude' => 105.886011,
            'altitude_m' => 50,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 908,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hanzhong Airport',
            'iata_code' => 'HZG',
            'icao_code' => 'ZLHZ',


            'latitude' => 33.0636,
            'longitude' => 107.008,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 910,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Harare Intl',
            'iata_code' => 'HRE',
            'icao_code' => 'FVHA',


            'latitude' => -17.931806,
            'longitude' => 31.092847,
            'altitude_m' => 4887,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Harare',

            'city_id' => 911,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Harris County Airport',
            'iata_code' => 'PIM',
            'icao_code' => 'KPIM',


            'latitude' => 32.8406944,
            'longitude' => -84.8824444,
            'altitude_m' => 902,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1800,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Harrismith',
            'iata_code' => '',
            'icao_code' => 'FAHR',


            'latitude' => -28.235072,
            'longitude' => 29.106206,
            'altitude_m' => 5585,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 915,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hasselt Airport',
            'iata_code' => '',
            'icao_code' => 'EBZH',


            'latitude' => 50.9700012207,
            'longitude' => 5.3750700951,
            'altitude_m' => 141,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 917,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hassfurt Schweinfurt',
            'iata_code' => '',
            'icao_code' => 'EDQT',


            'latitude' => 50.018,
            'longitude' => 10.5295,
            'altitude_m' => 718,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 918,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hastings',
            'iata_code' => '',
            'icao_code' => 'NZHS',


            'latitude' => -39.646667,
            'longitude' => 176.766944,
            'altitude_m' => 72,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 920,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hastings Airport',
            'iata_code' => 'HGS',
            'icao_code' => 'GFHA',


            'latitude' => 8.39713,
            'longitude' => -13.1291,
            'altitude_m' => 60,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Freetown',

            'city_id' => 767,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hasvik',
            'iata_code' => 'HAA',
            'icao_code' => 'ENHK',


            'latitude' => 70.486675,
            'longitude' => 22.139744,
            'altitude_m' => 21,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 921,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hatay Airport',
            'iata_code' => 'HTY',
            'icao_code' => 'LTDA',


            'latitude' => 36.362778,
            'longitude' => 36.282222,
            'altitude_m' => 25,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 922,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hatfield',
            'iata_code' => 'HTF',
            'icao_code' => '',


            'latitude' => 51.765,
            'longitude' => -.24833,
            'altitude_m' => 254,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 923,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hattiesburg Bobby L. Chain Municipal Airport',
            'iata_code' => 'HBG',
            'icao_code' => 'KHBG',


            'latitude' => 31.2649444,
            'longitude' => -89.2528889,
            'altitude_m' => 151,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 924,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hauptbahnhof',
            'iata_code' => 'BNJ',
            'icao_code' => '',


            'latitude' => 50.731944,
            'longitude' => 7.096944,
            'altitude_m' => 204,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 288,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hauptbahnhof',
            'iata_code' => 'ZSB',
            'icao_code' => '',


            'latitude' => 47.813056,
            'longitude' => 13.046667,
            'altitude_m' => 1391,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 2011,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Haverfordwest',
            'iata_code' => 'HAW',
            'icao_code' => 'EGFE',


            'latitude' => 51.833056,
            'longitude' => -4.961111,
            'altitude_m' => 159,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 926,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Havre City Co',
            'iata_code' => 'HVR',
            'icao_code' => 'KHVR',


            'latitude' => 48.542983,
            'longitude' => -109.762342,
            'altitude_m' => 2590,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 927,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Havre Train Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 48.55457,
            'longitude' => -109.67836,
            'altitude_m' => 0,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 927,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hay River',
            'iata_code' => 'YHY',
            'icao_code' => 'CYHY',


            'latitude' => 60.839722,
            'longitude' => -115.782778,
            'altitude_m' => 543,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 928,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hays Regional Airport',
            'iata_code' => 'HYS',
            'icao_code' => 'KHYS',


            'latitude' => 38.8422,
            'longitude' => -99.2732,
            'altitude_m' => 1998,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 929,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Healy River Airport',
            'iata_code' => 'HKB',
            'icao_code' => 'PAHV',


            'latitude' => 63.8675,
            'longitude' => -148.968889,
            'altitude_m' => 1263,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 930,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heathrow',
            'iata_code' => 'LHR',
            'icao_code' => 'EGLL',


            'latitude' => 51.4775,
            'longitude' => -.461389,
            'altitude_m' => 83,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hebei Handan Airport',
            'iata_code' => 'HDG',
            'icao_code' => 'ZBHD',


            'latitude' => 36.524,
            'longitude' => 114.43,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 906,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heber City Municipal Airport',
            'iata_code' => '36U',
            'icao_code' => '',


            'latitude' => 40.4818056,
            'longitude' => -111.4288056,
            'altitude_m' => 5637,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 932,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hector International Airport',
            'iata_code' => 'FAR',
            'icao_code' => 'KFAR',


            'latitude' => 46.92065,
            'longitude' => -96.8157639,
            'altitude_m' => 902,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 707,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heidelberg',
            'iata_code' => 'HDB',
            'icao_code' => 'EDIU',


            'latitude' => 49.393333,
            'longitude' => 8.6525,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 934,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heihe Airport',
            'iata_code' => 'HEK',
            'icao_code' => 'ZYHE',


            'latitude' => 50.25,
            'longitude' => 127.3,
            'altitude_m' => 8530,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 935,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Helipad of Viraj Group',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 19.779,
            'longitude' => 72.805,
            'altitude_m' => 50,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 282,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heliport NUS',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 63.817,
            'longitude' => 20.2981,
            'altitude_m' => 100,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2348,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heliport SU',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 62.4077,
            'longitude' => 17.3024,
            'altitude_m' => 10,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2189,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Helirafting Landung',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -44.8898,
            'longitude' => 168.6762,
            'altitude_m' => 1300,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1900,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Helirafting Start',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -44.9486,
            'longitude' => 168.7068,
            'altitude_m' => 1300,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1900,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Helsingborg Cruise Port',
            'iata_code' => 'JHE',
            'icao_code' => '',


            'latitude' => 56.0419,
            'longitude' => 12.6912,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 936,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hendrik Swellengrebel',
            'iata_code' => '',
            'icao_code' => 'FASX',


            'latitude' => -34.048222,
            'longitude' => 20.474611,
            'altitude_m' => 407,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 2198,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Henri Coanda',
            'iata_code' => 'OTP',
            'icao_code' => 'LROP',


            'latitude' => 44.572161,
            'longitude' => 26.102178,
            'altitude_m' => 314,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 335,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Henry Post Aaf',
            'iata_code' => 'FSI',
            'icao_code' => 'KFSI',


            'latitude' => 34.649833,
            'longitude' => -98.402167,
            'altitude_m' => 1189,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 753,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Henry Tift Myers Airport',
            'iata_code' => 'TMA',
            'icao_code' => 'KTMA',


            'latitude' => 31.4289814,
            'longitude' => -83.488545,
            'altitude_m' => 355,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2265,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hercilio Luz',
            'iata_code' => 'FLN',
            'icao_code' => 'SBFL',


            'latitude' => -27.670489,
            'longitude' => -48.547181,
            'altitude_m' => 20,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 725,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Herning',
            'iata_code' => '',
            'icao_code' => 'EKHG',


            'latitude' => 56.197224,
            'longitude' => 9.147222,
            'altitude_m' => 136,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 938,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hervey Bay Airport',
            'iata_code' => 'HVB',
            'icao_code' => 'YHBA',


            'latitude' => -25.318889,
            'longitude' => 152.880278,
            'altitude_m' => 60,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 939,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Heuston Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 53.3463,
            'longitude' => -6.2927,
            'altitude_m' => 19,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 632,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hickam Air Force Base',
            'iata_code' => '',
            'icao_code' => 'PHIK',


            'latitude' => 21.318681,
            'longitude' => -157.922427,
            'altitude_m' => 13,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 960,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hidroeletrica',
            'iata_code' => '',
            'icao_code' => 'SBIT',


            'latitude' => -18.444661,
            'longitude' => -49.213361,
            'altitude_m' => 1630,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1026,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'High Level',
            'iata_code' => 'YOJ',
            'icao_code' => 'CYOJ',


            'latitude' => 58.621389,
            'longitude' => -117.164722,
            'altitude_m' => 1110,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 941,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'High River Regional Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.3333,
            'longitude' => -113.833,
            'altitude_m' => 3431,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 942,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hildesheim',
            'iata_code' => 'ZNO',
            'icao_code' => 'EDVM',


            'latitude' => 52.179833,
            'longitude' => 9.945667,
            'altitude_m' => 293,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 943,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hilo Intl',
            'iata_code' => 'ITO',
            'icao_code' => 'PHTO',


            'latitude' => 19.721375,
            'longitude' => -155.048469,
            'altitude_m' => 38,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 944,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hilton Head Airport',
            'iata_code' => 'HXD',
            'icao_code' => 'KHXD',


            'latitude' => 32.2243611,
            'longitude' => -80.6974722,
            'altitude_m' => 19,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 945,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hilversum Airport',
            'iata_code' => '',
            'icao_code' => 'EHHV',


            'latitude' => 52.1919,
            'longitude' => 5.14694,
            'altitude_m' => 3,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 946,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hilversum Railway Station',
            'iata_code' => 'QYI',
            'icao_code' => '',


            'latitude' => 52.226389,
            'longitude' => 5.181667,
            'altitude_m' => 3,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 946,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Himeji Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 34.49395,
            'longitude' => 134.412706,
            'altitude_m' => 141,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 947,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hiroshima',
            'iata_code' => 'HIJ',
            'icao_code' => 'RJOA',


            'latitude' => 34.436111,
            'longitude' => 132.919444,
            'altitude_m' => 1088,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 948,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hiroshima Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 34.3973853174,
            'longitude' => 132.4759781959,
            'altitude_m' => 28,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 948,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hiroshima-Nishi',
            'iata_code' => 'HIW',
            'icao_code' => 'RJBH',


            'latitude' => 34.367,
            'longitude' => 132.408,
            'altitude_m' => 9,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 948,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hobart',
            'iata_code' => 'HBA',
            'icao_code' => 'YMHB',


            'latitude' => -42.836111,
            'longitude' => 147.510278,
            'altitude_m' => 13,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Melbourne',

            'city_id' => 950,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hof Plauen',
            'iata_code' => 'HOQ',
            'icao_code' => 'EDQM',


            'latitude' => 50.288836,
            'longitude' => 11.854919,
            'altitude_m' => 1960,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 952,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hofu',
            'iata_code' => '',
            'icao_code' => 'RJOF',


            'latitude' => 34.034667,
            'longitude' => 131.549194,
            'altitude_m' => 7,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 953,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hohenems',
            'iata_code' => 'HOJ',
            'icao_code' => 'LOIH',


            'latitude' => 47.385,
            'longitude' => 9.7,
            'altitude_m' => 412,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 954,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hohenfels Aaf',
            'iata_code' => '',
            'icao_code' => 'ETIH',


            'latitude' => 49.218056,
            'longitude' => 11.836111,
            'altitude_m' => 1455,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 955,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hohn',
            'iata_code' => '',
            'icao_code' => 'ETNH',


            'latitude' => 54.312167,
            'longitude' => 9.538167,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 957,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Holloman Afb',
            'iata_code' => 'HMN',
            'icao_code' => 'KHMN',


            'latitude' => 32.852519,
            'longitude' => -106.106525,
            'altitude_m' => 4093,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 33,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hondo Municipal Airport',
            'iata_code' => 'HDO',
            'icao_code' => 'KHDO',


            'latitude' => 29.3591,
            'longitude' => -99.1775,
            'altitude_m' => 930,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 958,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hongqiao Intl',
            'iata_code' => 'SHA',
            'icao_code' => 'ZSSS',


            'latitude' => 31.197875,
            'longitude' => 121.336319,
            'altitude_m' => 10,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2092,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Honiara International',
            'iata_code' => 'HIR',
            'icao_code' => 'AGGH',


            'latitude' => -9.428,
            'longitude' => 160.054789,
            'altitude_m' => 28,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Pacific/Guadalcanal',

            'city_id' => 959,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Honolulu Intl',
            'iata_code' => 'HNL',
            'icao_code' => 'PHNL',


            'latitude' => 21.318681,
            'longitude' => -157.922428,
            'altitude_m' => 13,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 960,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hood Aaf',
            'iata_code' => 'HLR',
            'icao_code' => 'KHLR',


            'latitude' => 31.138731,
            'longitude' => -97.714469,
            'altitude_m' => 924,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 739,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hoogeveen Airport',
            'iata_code' => '',
            'icao_code' => 'EHHO',


            'latitude' => 52.7308,
            'longitude' => 6.51611,
            'altitude_m' => 40,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 961,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hoonah Airport',
            'iata_code' => 'HNH',
            'icao_code' => 'PAOH',


            'latitude' => 58.096111,
            'longitude' => -135.409722,
            'altitude_m' => 19,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 962,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Horovice',
            'iata_code' => '',
            'icao_code' => 'LKHV',


            'latitude' => 49.848111,
            'longitude' => 13.893506,
            'altitude_m' => 1214,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 965,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Horta',
            'iata_code' => 'HOR',
            'icao_code' => 'LPHR',


            'latitude' => 38.519894,
            'longitude' => -28.715872,
            'altitude_m' => 118,

            'time_zone_offset' => -1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Atlantic/Azores',

            'city_id' => 966,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hotan',
            'iata_code' => 'HTN',
            'icao_code' => 'ZWTN',


            'latitude' => 37.038522,
            'longitude' => 79.864933,
            'altitude_m' => 4672,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 967,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Houlton Intl',
            'iata_code' => 'HUL',
            'icao_code' => 'KHUL',


            'latitude' => 46.123083,
            'longitude' => -67.792056,
            'altitude_m' => 489,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 969,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Houssen',
            'iata_code' => 'CMR',
            'icao_code' => 'LFGA',


            'latitude' => 48.109853,
            'longitude' => 7.359011,
            'altitude_m' => 628,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 507,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hradec Kralove',
            'iata_code' => '',
            'icao_code' => 'LKHK',


            'latitude' => 50.2532,
            'longitude' => 15.845228,
            'altitude_m' => 791,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 970,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Huanghua Intl',
            'iata_code' => 'HHA',
            'icao_code' => '',


            'latitude' => 28.189158,
            'longitude' => 113.219633,
            'altitude_m' => 217,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 441,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hudiksvall',
            'iata_code' => 'HUV',
            'icao_code' => 'ESNH',


            'latitude' => 61.768092,
            'longitude' => 17.080719,
            'altitude_m' => 95,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 972,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hudson Bay',
            'iata_code' => 'YHB',
            'icao_code' => 'CYHB',


            'latitude' => 52.816666,
            'longitude' => -102.31139,
            'altitude_m' => 1175,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 973,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Huesca-Pirineos Airport',
            'iata_code' => 'HSK',
            'icao_code' => 'LEHC',


            'latitude' => 42.080833,
            'longitude' => -.323333,
            'altitude_m' => 1768,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 975,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Huizhou',
            'iata_code' => 'HUZ',
            'icao_code' => '',


            'latitude' => 23.083332,
            'longitude' => 114.36667,
            'altitude_m' => 23,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 976,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hultsfred',
            'iata_code' => 'HLF',
            'icao_code' => 'ESSF',


            'latitude' => 57.525833,
            'longitude' => 15.823333,
            'altitude_m' => 366,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 977,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hurghada Intl',
            'iata_code' => 'HRG',
            'icao_code' => 'HEGN',


            'latitude' => 27.178317,
            'longitude' => 33.799436,
            'altitude_m' => 52,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 978,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hurlburt Fld',
            'iata_code' => 'HRT',
            'icao_code' => 'KHRT',


            'latitude' => 30.427803,
            'longitude' => -86.689278,
            'altitude_m' => 38,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1405,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Huronia',
            'iata_code' => 'YEE',
            'icao_code' => 'CYEE',


            'latitude' => 44.684722,
            'longitude' => -79.929167,
            'altitude_m' => 773,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1453,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Husein Sastranegara',
            'iata_code' => 'BDO',
            'icao_code' => 'WICC',


            'latitude' => -6.900625,
            'longitude' => 107.576294,
            'altitude_m' => 2436,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 180,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hyderabad',
            'iata_code' => 'HYD',
            'icao_code' => 'VOHY',


            'latitude' => 17.453117,
            'longitude' => 78.467586,
            'altitude_m' => 1742,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 979,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Hyderabad Airport',
            'iata_code' => 'HDD',
            'icao_code' => 'OPKD',


            'latitude' => 25.3181,
            'longitude' => 68.3661,
            'altitude_m' => 130,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 980,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'INAWR',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 68.3676,
            'longitude' => -133.7594,
            'altitude_m' => 200,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1003,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iasi',
            'iata_code' => 'IAS',
            'icao_code' => 'LRIA',


            'latitude' => 47.178492,
            'longitude' => 27.620631,
            'altitude_m' => 397,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 982,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ibadan',
            'iata_code' => 'IBA',
            'icao_code' => 'DNIB',


            'latitude' => 7.362458,
            'longitude' => 3.978333,
            'altitude_m' => 725,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 983,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ibiza',
            'iata_code' => 'IBZ',
            'icao_code' => 'LEIB',


            'latitude' => 38.872858,
            'longitude' => 1.373117,
            'altitude_m' => 20,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 985,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iconi Airport',
            'iata_code' => 'YVA',
            'icao_code' => 'FMCN',


            'latitude' => -11.7108,
            'longitude' => 43.2439,
            'altitude_m' => 33,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Indian/Comoro',

            'city_id' => 1514,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Idaho Falls Rgnl',
            'iata_code' => 'IDA',
            'icao_code' => 'KIDA',


            'latitude' => 43.514556,
            'longitude' => -112.07075,
            'altitude_m' => 4744,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 986,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Idlewild Intl',
            'iata_code' => 'IDL',
            'icao_code' => 'KIDL',


            'latitude' => 40.639751,
            'longitude' => -73.778924,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Igdir',
            'iata_code' => 'IGD',
            'icao_code' => 'LTCT',


            'latitude' => 39.983056,
            'longitude' => 43.866389,
            'altitude_m' => 3100,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 987,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Igloolik Airport',
            'iata_code' => 'YGT',
            'icao_code' => 'CYGT',


            'latitude' => 69.3647,
            'longitude' => -81.8161,
            'altitude_m' => 174,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 988,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iguatu',
            'iata_code' => '',
            'icao_code' => 'SNIG',


            'latitude' => -6.346639,
            'longitude' => -39.293777,
            'altitude_m' => 699,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 989,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iki',
            'iata_code' => 'IKI',
            'icao_code' => 'RJDB',


            'latitude' => 33.749027,
            'longitude' => 129.785417,
            'altitude_m' => 41,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 990,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ilheus',
            'iata_code' => 'IOS',
            'icao_code' => 'SBIL',


            'latitude' => -14.815964,
            'longitude' => -39.033197,
            'altitude_m' => 15,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 991,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Illinois Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.1155,
            'longitude' => -88.2411,
            'altitude_m' => 732,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 437,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ilopango Intl',
            'iata_code' => '',
            'icao_code' => 'MSSS',


            'latitude' => 13.699492,
            'longitude' => -89.119861,
            'altitude_m' => 2021,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/El_Salvador',

            'city_id' => 2034,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ilorin',
            'iata_code' => 'ILR',
            'icao_code' => 'DNIL',


            'latitude' => 8.440211,
            'longitude' => 4.493919,
            'altitude_m' => 1126,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 992,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Imphal',
            'iata_code' => 'IMF',
            'icao_code' => 'VEIM',


            'latitude' => 24.75995,
            'longitude' => 93.896697,
            'altitude_m' => 2540,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 994,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Imsik',
            'iata_code' => 'BXN',
            'icao_code' => 'LTBV',


            'latitude' => 37.140144,
            'longitude' => 27.669717,
            'altitude_m' => 202,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 280,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Incheon Intl',
            'iata_code' => 'ICN',
            'icao_code' => 'RKSI',


            'latitude' => 37.469075,
            'longitude' => 126.450517,
            'altitude_m' => 23,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Seoul',

            'city_id' => 2088,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Incirlik Ab',
            'iata_code' => '',
            'icao_code' => 'LTAG',


            'latitude' => 37.0021,
            'longitude' => 35.425894,
            'altitude_m' => 238,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 14,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Indianapolis Intl',
            'iata_code' => 'IND',
            'icao_code' => 'KIND',


            'latitude' => 39.717331,
            'longitude' => -86.294383,
            'altitude_m' => 797,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 996,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Indianapolis Metropolitan Airport',
            'iata_code' => 'UMP',
            'icao_code' => 'KUMP',


            'latitude' => 39.935278,
            'longitude' => -86.045,
            'altitude_m' => 811,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 996,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Inezgane',
            'iata_code' => 'AGA',
            'icao_code' => 'GMAA',


            'latitude' => 30.381353,
            'longitude' => -9.546311,
            'altitude_m' => 89,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 18,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ingeniero Alberto Acuna Ongay Intl',
            'iata_code' => 'CPE',
            'icao_code' => 'MMCP',


            'latitude' => 19.816794,
            'longitude' => -90.500314,
            'altitude_m' => 34,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 386,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ingeniero Juan Guillermo Villasana',
            'iata_code' => 'PCA',
            'icao_code' => 'MMPC',


            'latitude' => 20.0772,
            'longitude' => -98.782814,
            'altitude_m' => 7600,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1709,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ingolstadt BF',
            'iata_code' => 'IGS',
            'icao_code' => 'INGS',


            'latitude' => 48.7777,
            'longitude' => 11.422,
            'altitude_m' => 888,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 998,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ingolstadt Manching',
            'iata_code' => '',
            'icao_code' => 'ETSI',


            'latitude' => 48.715667,
            'longitude' => 11.534,
            'altitude_m' => 1202,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 998,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Innsbruck',
            'iata_code' => 'INN',
            'icao_code' => 'LOWI',


            'latitude' => 47.260219,
            'longitude' => 11.343964,
            'altitude_m' => 1906,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 999,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Inowroclaw Inowr Airport',
            'iata_code' => '',
            'icao_code' => 'EPIR',


            'latitude' => 52.829444,
            'longitude' => 18.330556,
            'altitude_m' => 259,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1000,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'International Airport',
            'iata_code' => 'OCF',
            'icao_code' => 'KOCF',


            'latitude' => 29.1725,
            'longitude' => -82.224167,
            'altitude_m' => 89,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1648,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Inuvik Mike Zubko',
            'iata_code' => 'YEV',
            'icao_code' => 'CYEV',


            'latitude' => 68.304167,
            'longitude' => -133.482778,
            'altitude_m' => 224,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1003,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Inuvik Town',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 66.3676,
            'longitude' => -133.7594,
            'altitude_m' => 200,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1003,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Invercargill',
            'iata_code' => 'IVC',
            'icao_code' => 'NZNV',


            'latitude' => -46.412408,
            'longitude' => 168.312992,
            'altitude_m' => 5,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1004,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Inverness',
            'iata_code' => 'INV',
            'icao_code' => 'EGPE',


            'latitude' => 57.5425,
            'longitude' => -4.0475,
            'altitude_m' => 31,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1005,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ioannina',
            'iata_code' => 'IOA',
            'icao_code' => 'LGIO',


            'latitude' => 39.696388,
            'longitude' => 20.8225,
            'altitude_m' => 1558,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1006,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iosco County',
            'iata_code' => 'ECA',
            'icao_code' => 'K6D9',


            'latitude' => 44.311,
            'longitude' => -83.422,
            'altitude_m' => 606,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 647,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iowa City Municipal Airport',
            'iata_code' => 'IOW',
            'icao_code' => 'KIOW',


            'latitude' => 41.639244,
            'longitude' => -91.546503,
            'altitude_m' => 668,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1007,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iqaluit',
            'iata_code' => 'YFB',
            'icao_code' => 'CYFB',


            'latitude' => 63.75639,
            'longitude' => -68.555832,
            'altitude_m' => 110,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1011,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Irkutsk',
            'iata_code' => 'IKT',
            'icao_code' => 'UIII',


            'latitude' => 52.268028,
            'longitude' => 104.388975,
            'altitude_m' => 1675,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Irkutsk',

            'city_id' => 1013,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Irkutsk-2',
            'iata_code' => '',
            'icao_code' => 'UIIR',


            'latitude' => 52.3678,
            'longitude' => 104.183,
            'altitude_m' => 13411,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Irkutsk',

            'city_id' => 1013,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iruma',
            'iata_code' => '',
            'icao_code' => 'RJTJ',


            'latitude' => 35.841944,
            'longitude' => 139.410556,
            'altitude_m' => 295,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1016,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Isbell Field Airport',
            'iata_code' => '4A9',
            'icao_code' => '',


            'latitude' => 34.4736944,
            'longitude' => -85.7213889,
            'altitude_m' => 877,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 748,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ishigaki',
            'iata_code' => 'ISG',
            'icao_code' => 'ROIG',


            'latitude' => 24.344525,
            'longitude' => 124.186983,
            'altitude_m' => 93,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1017,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iskenderun',
            'iata_code' => '',
            'icao_code' => 'LTAK',


            'latitude' => 36.573472,
            'longitude' => 36.154,
            'altitude_m' => 25,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1018,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Isla Mujeres',
            'iata_code' => 'ISJ',
            'icao_code' => 'MMIM',


            'latitude' => 21.245033,
            'longitude' => -86.739967,
            'altitude_m' => 7,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1019,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Isparta',
            'iata_code' => '',
            'icao_code' => 'LTBM',


            'latitude' => 37.785369,
            'longitude' => 30.581817,
            'altitude_m' => 3250,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1022,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Isparta SÃ¼leyman Demirel Airport',
            'iata_code' => 'ISE',
            'icao_code' => 'LTFC',


            'latitude' => 37.8554,
            'longitude' => 30.3684,
            'altitude_m' => 2835,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1022,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Istrana',
            'iata_code' => '',
            'icao_code' => 'LIPS',


            'latitude' => 45.684867,
            'longitude' => 12.082881,
            'altitude_m' => 137,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 2305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iswahyudi',
            'iata_code' => '',
            'icao_code' => 'WARI',


            'latitude' => -7.615767,
            'longitude' => 111.434117,
            'altitude_m' => 361,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 1347,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Itacoatiara',
            'iata_code' => '',
            'icao_code' => 'SBIC',


            'latitude' => -3.127256,
            'longitude' => -58.481186,
            'altitude_m' => 142,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1025,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Itaituba',
            'iata_code' => '',
            'icao_code' => 'SBIH',


            'latitude' => -4.242342,
            'longitude' => -56.000669,
            'altitude_m' => 110,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1025,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Itzehoe-Hungriger Wolf Airport',
            'iata_code' => '',
            'icao_code' => 'EDHF',


            'latitude' => 53.9944,
            'longitude' => 9.57861,
            'altitude_m' => 89,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1027,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ivano Frankivsk International Airport',
            'iata_code' => 'IFO',
            'icao_code' => 'UKLI',


            'latitude' => 48.884167,
            'longitude' => 24.686111,
            'altitude_m' => 919,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1028,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ivato',
            'iata_code' => 'TNR',
            'icao_code' => 'FMMI',


            'latitude' => -18.79695,
            'longitude' => 47.478806,
            'altitude_m' => 4198,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Indian/Antananarivo',

            'city_id' => 100,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Iwakuni Mcas',
            'iata_code' => '',
            'icao_code' => 'RJOI',


            'latitude' => 34.14386,
            'longitude' => 132.23575,
            'altitude_m' => 7,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1030,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ixtapa Zihuatanejo Intl',
            'iata_code' => 'ZIH',
            'icao_code' => 'MMZH',


            'latitude' => 17.601569,
            'longitude' => -101.460536,
            'altitude_m' => 26,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2557,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Izhevsk Airport',
            'iata_code' => 'IJK',
            'icao_code' => 'USII',


            'latitude' => 56.8281,
            'longitude' => 53.4575,
            'altitude_m' => 531,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1031,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Izumo',
            'iata_code' => 'IZO',
            'icao_code' => 'RJOC',


            'latitude' => 35.413611,
            'longitude' => 132.89,
            'altitude_m' => 15,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1033,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'J M Nkomo Intl',
            'iata_code' => 'BUQ',
            'icao_code' => 'FVBU',


            'latitude' => -20.017431,
            'longitude' => 28.617869,
            'altitude_m' => 4359,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Harare',

            'city_id' => 345,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'JAGS McCartney International Airport',
            'iata_code' => 'GDT',
            'icao_code' => 'MBGT',


            'latitude' => 21.4445,
            'longitude' => -71.1423,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Grand_Turk',

            'city_id' => 498,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jabalpur',
            'iata_code' => 'JLR',
            'icao_code' => 'VAJB',


            'latitude' => 23.177817,
            'longitude' => 80.052047,
            'altitude_m' => 1624,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1034,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jack Edwards Airport',
            'iata_code' => 'JKA',
            'icao_code' => 'KJKA',


            'latitude' => 30.2896389,
            'longitude' => -87.6717778,
            'altitude_m' => 17,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 876,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jaipur',
            'iata_code' => 'JAI',
            'icao_code' => 'VIJP',


            'latitude' => 26.824192,
            'longitude' => 75.812161,
            'altitude_m' => 1263,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1035,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jalaluddin',
            'iata_code' => 'GTO',
            'icao_code' => 'WAMG',


            'latitude' => .637119,
            'longitude' => 122.849858,
            'altitude_m' => 105,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Makassar',

            'city_id' => 832,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jammu',
            'iata_code' => 'IXJ',
            'icao_code' => 'VIJU',


            'latitude' => 32.689142,
            'longitude' => 74.837389,
            'altitude_m' => 1029,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1037,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jamnagar',
            'iata_code' => 'JGA',
            'icao_code' => 'VAJM',


            'latitude' => 22.465522,
            'longitude' => 70.012556,
            'altitude_m' => 69,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1038,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jamshedpur',
            'iata_code' => 'IXW',
            'icao_code' => 'VEJS',


            'latitude' => 22.813211,
            'longitude' => 86.168844,
            'altitude_m' => 505,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1039,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jasionka',
            'iata_code' => 'RZE',
            'icao_code' => 'EPRZ',


            'latitude' => 50.109958,
            'longitude' => 22.019,
            'altitude_m' => 675,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1993,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jefferson County Airpark',
            'iata_code' => '2G2',
            'icao_code' => '',


            'latitude' => 40.3602179,
            'longitude' => -80.7008742,
            'altitude_m' => 1196,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2166,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jena Schongleina',
            'iata_code' => '',
            'icao_code' => 'EDBJ',


            'latitude' => 50.915161,
            'longitude' => 11.714519,
            'altitude_m' => 1228,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1042,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jerez',
            'iata_code' => 'XRY',
            'icao_code' => 'LEJR',


            'latitude' => 36.744622,
            'longitude' => -6.060111,
            'altitude_m' => 93,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1043,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jesus Teran Intl',
            'iata_code' => 'AGU',
            'icao_code' => 'MMAS',


            'latitude' => 21.705558,
            'longitude' => -102.317858,
            'altitude_m' => 6112,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 23,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jever',
            'iata_code' => '',
            'icao_code' => 'ETNJ',


            'latitude' => 53.5335,
            'longitude' => 7.888667,
            'altitude_m' => 24,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1044,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jhansi',
            'iata_code' => '',
            'icao_code' => 'VIJN',


            'latitude' => 25.491172,
            'longitude' => 78.558422,
            'altitude_m' => 801,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1045,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jharsuguda',
            'iata_code' => '',
            'icao_code' => 'VEJH',


            'latitude' => 21.913536,
            'longitude' => 84.050383,
            'altitude_m' => 751,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1046,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jiamusi Airport',
            'iata_code' => 'JMU',
            'icao_code' => 'ZYJM',


            'latitude' => 46.843394,
            'longitude' => 130.465389,
            'altitude_m' => 262,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1047,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jiangbei',
            'iata_code' => 'CKG',
            'icao_code' => 'ZUCK',


            'latitude' => 29.719217,
            'longitude' => 106.641678,
            'altitude_m' => 1365,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 480,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jiayuguan Airport',
            'iata_code' => 'JGN',
            'icao_code' => 'ZLJQ',


            'latitude' => 39.8569,
            'longitude' => 98.3414,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1048,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jinan',
            'iata_code' => 'TNA',
            'icao_code' => 'ZSJN',


            'latitude' => 36.857214,
            'longitude' => 117.215992,
            'altitude_m' => 76,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1049,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jingdezhen Airport',
            'iata_code' => 'JDZ',
            'icao_code' => 'ZSJD',


            'latitude' => 29.3386,
            'longitude' => 117.176,
            'altitude_m' => 112,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1050,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jining Airport ',
            'iata_code' => 'JNG',
            'icao_code' => '',


            'latitude' => 35.417,
            'longitude' => 116.533,
            'altitude_m' => 1540,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1051,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jinnah Intl',
            'iata_code' => 'KHI',
            'icao_code' => 'OPKC',


            'latitude' => 24.906547,
            'longitude' => 67.160797,
            'altitude_m' => 100,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1090,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jinzhou Airport',
            'iata_code' => 'JNZ',
            'icao_code' => 'ZYJZ',


            'latitude' => 41.1014,
            'longitude' => 121.062,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1052,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jiujiang Lushan Airport',
            'iata_code' => 'JIU',
            'icao_code' => 'ZSJJ',


            'latitude' => 29.733,
            'longitude' => 115.983,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1053,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jixi Airport',
            'iata_code' => 'JXA',
            'icao_code' => 'ZYJX',


            'latitude' => 45.30611,
            'longitude' => 130.99667,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1054,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Joacaba Airport',
            'iata_code' => 'JCB',
            'icao_code' => 'SSJA',


            'latitude' => -27.172778,
            'longitude' => -51.500833,
            'altitude_m' => 1713,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1055,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jodhpur',
            'iata_code' => 'JDH',
            'icao_code' => 'VIJO',


            'latitude' => 26.251092,
            'longitude' => 73.048869,
            'altitude_m' => 717,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1057,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Johannesburg Intl',
            'iata_code' => 'JNB',
            'icao_code' => 'FAJS',


            'latitude' => -26.139166,
            'longitude' => 28.246,
            'altitude_m' => 5558,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1058,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'John F Kennedy Intl',
            'iata_code' => 'JFK',
            'icao_code' => 'KJFK',


            'latitude' => 40.639751,
            'longitude' => -73.778925,
            'altitude_m' => 13,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'John H. Batten Airport',
            'iata_code' => 'RAC',
            'icao_code' => 'KRAC',


            'latitude' => 42.7605,
            'longitude' => -87.8152,
            'altitude_m' => 674,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1908,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'John Wayne Arpt Orange Co',
            'iata_code' => 'SNA',
            'icao_code' => 'KSNA',


            'latitude' => 33.675667,
            'longitude' => -117.868222,
            'altitude_m' => 56,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2041,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Johnson County Airport',
            'iata_code' => 'OJC',
            'icao_code' => 'KOJC',


            'latitude' => 38.5051,
            'longitude' => -94.4415,
            'altitude_m' => 1096,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1666,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Joigny',
            'iata_code' => '',
            'icao_code' => 'LFGK',


            'latitude' => 47.992222,
            'longitude' => 3.392222,
            'altitude_m' => 732,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1060,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jokkmokk',
            'iata_code' => '',
            'icao_code' => 'ESNJ',


            'latitude' => 66.496236,
            'longitude' => 20.147181,
            'altitude_m' => 904,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1062,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jomo Kenyatta',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -1.319242,
            'longitude' => 36.927775,
            'altitude_m' => 1625,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1549,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jomo Kenyatta International',
            'iata_code' => 'NBO',
            'icao_code' => 'HKJK',


            'latitude' => -1.319167,
            'longitude' => 36.9275,
            'altitude_m' => 5327,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1549,

            'created_at' => now(),






        ]);



        factory(Airport::class)-> create([

            'name' => 'Jose Aponte de la Torre Airport',
            'iata_code' => 'RVR',
            'icao_code' => 'TJRV',


            'latitude' => 18.245278,
            'longitude' => -65.643333,
            'altitude_m' => 38,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 427,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jose Leonardo Chirinos',
            'iata_code' => 'CZE',
            'icao_code' => 'SVCR',


            'latitude' => 11.414867,
            'longitude' => -69.681656,
            'altitude_m' => 52,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 529,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Joseph A. Hardy Airport',
            'iata_code' => '',
            'icao_code' => 'KVVS',


            'latitude' => 39.959167,
            'longitude' => -79.657222,
            'altitude_m' => 1267,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 517,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Juan Casiano',
            'iata_code' => 'GPI',
            'icao_code' => 'SKGP',


            'latitude' => 2.570133,
            'longitude' => -77.8986,
            'altitude_m' => 164,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 866,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Juan H. White',
            'iata_code' => 'CAQ',
            'icao_code' => 'SKCU',


            'latitude' => 7.968333,
            'longitude' => -75.198333,
            'altitude_m' => 174,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 423,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Juanda',
            'iata_code' => 'SUB',
            'icao_code' => 'WARR',


            'latitude' => -7.379831,
            'longitude' => 112.786858,
            'altitude_m' => 9,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2190,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Jujuy',
            'iata_code' => 'JUJ',
            'icao_code' => 'SASJ',


            'latitude' => -24.392778,
            'longitude' => -65.097778,
            'altitude_m' => 3019,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1066,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Juliaca',
            'iata_code' => 'JUL',
            'icao_code' => 'SPJL',


            'latitude' => -15.467103,
            'longitude' => -70.158169,
            'altitude_m' => 12552,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Lima',

            'city_id' => 1067,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Julio Belem Airport',
            'iata_code' => 'PIN',
            'icao_code' => 'SWPI',


            'latitude' => -2.627778,
            'longitude' => -56.735833,
            'altitude_m' => 500,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1741,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Julio Cesar',
            'iata_code' => '',
            'icao_code' => 'SBJC',


            'latitude' => -1.414158,
            'longitude' => -48.460739,
            'altitude_m' => 52,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 227,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Junin',
            'iata_code' => '',
            'icao_code' => 'SAAJ',


            'latitude' => -34.545889,
            'longitude' => -60.930556,
            'altitude_m' => 262,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1068,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'K50 Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 1.999167,
            'longitude' => 44.974167,
            'altitude_m' => 500,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Mogadishu',

            'city_id' => 1483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'KBWD',
            'iata_code' => 'BWD',
            'icao_code' => '',


            'latitude' => 31.7936111,
            'longitude' => -98.9565,
            'altitude_m' => 1387,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 331,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kadala',
            'iata_code' => 'HTA',
            'icao_code' => 'UIAA',


            'latitude' => 52.026317,
            'longitude' => 113.305556,
            'altitude_m' => 2272,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yakutsk',

            'city_id' => 476,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kadena Ab',
            'iata_code' => 'DNA',
            'icao_code' => 'RODN',


            'latitude' => 26.355612,
            'longitude' => 127.767633,
            'altitude_m' => 143,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1069,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kadikoy Ispark Heliport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.989305,
            'longitude' => 29.018833,
            'altitude_m' => 100,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1023,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kaduna',
            'iata_code' => 'KAD',
            'icao_code' => 'DNKA',


            'latitude' => 10.696025,
            'longitude' => 7.320114,
            'altitude_m' => 2073,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1070,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kagoshima',
            'iata_code' => 'KOJ',
            'icao_code' => 'RJFK',


            'latitude' => 31.803397,
            'longitude' => 130.719408,
            'altitude_m' => 906,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1071,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kahramanmaras Airport',
            'iata_code' => 'KCM',
            'icao_code' => 'LTCN',


            'latitude' => 37.539,
            'longitude' => 36.9534,
            'altitude_m' => 1723,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1072,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kahului',
            'iata_code' => 'OGG',
            'icao_code' => 'PHOG',


            'latitude' => 20.89865,
            'longitude' => -156.430458,
            'altitude_m' => 54,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 1073,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kaklic',
            'iata_code' => '',
            'icao_code' => 'LTFA',


            'latitude' => 38.517608,
            'longitude' => 26.977406,
            'altitude_m' => 13,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kalaeloa',
            'iata_code' => '',
            'icao_code' => 'PHJR',


            'latitude' => 21.307222,
            'longitude' => -158.070278,
            'altitude_m' => 30,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 1088,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kalamazoo',
            'iata_code' => 'AZO',
            'icao_code' => 'KAZO',


            'latitude' => 42.234875,
            'longitude' => -85.552058,
            'altitude_m' => 874,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1074,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kalgoorlie Boulder',
            'iata_code' => 'KGI',
            'icao_code' => 'YPKG',


            'latitude' => -30.789444,
            'longitude' => 121.461667,
            'altitude_m' => 1203,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 1075,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kallax',
            'iata_code' => 'LLA',
            'icao_code' => 'ESPA',


            'latitude' => 65.543758,
            'longitude' => 22.121989,
            'altitude_m' => 65,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1324,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kalundborg Flyveplads',
            'iata_code' => '',
            'icao_code' => 'EKKL',


            'latitude' => 55.7001,
            'longitude' => 11.2549,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1079,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kamenz',
            'iata_code' => '',
            'icao_code' => 'EDCM',


            'latitude' => 51.29625,
            'longitude' => 14.129,
            'altitude_m' => 495,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1080,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kamloops',
            'iata_code' => 'YKA',
            'icao_code' => 'CYKA',


            'latitude' => 50.702222,
            'longitude' => -120.444444,
            'altitude_m' => 1133,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 1081,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kangra Airport',
            'iata_code' => 'DHM',
            'icao_code' => 'VIGG',


            'latitude' => 32.1651,
            'longitude' => 76.2634,
            'altitude_m' => 2525,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1083,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kanoya',
            'iata_code' => '',
            'icao_code' => 'RJFY',


            'latitude' => 31.367608,
            'longitude' => 130.845456,
            'altitude_m' => 214,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1086,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kanpur',
            'iata_code' => 'KNU',
            'icao_code' => 'VIKA',


            'latitude' => 26.441444,
            'longitude' => 80.364864,
            'altitude_m' => 411,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1087,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kanpur Chakeri',
            'iata_code' => '',
            'icao_code' => 'VICX',


            'latitude' => 26.4043,
            'longitude' => 80.410119,
            'altitude_m' => 405,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1087,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kansai',
            'iata_code' => 'KIX',
            'icao_code' => 'RJBB',


            'latitude' => 34.4347222,
            'longitude' => 135.244167,
            'altitude_m' => 49,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1689,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kapadokya',
            'iata_code' => 'NAV',
            'icao_code' => 'LTAZ',


            'latitude' => 38.771867,
            'longitude' => 34.53455,
            'altitude_m' => 3100,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1587,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kapuskasing',
            'iata_code' => 'YYU',
            'icao_code' => 'CYYU',


            'latitude' => 49.413889,
            'longitude' => -82.4675,
            'altitude_m' => 743,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1089,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karamay Airport',
            'iata_code' => 'KRY',
            'icao_code' => 'ZWKM',


            'latitude' => 45.617,
            'longitude' => 84.883,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1091,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karlovy Vary',
            'iata_code' => 'KLV',
            'icao_code' => 'LKKV',


            'latitude' => 50.202978,
            'longitude' => 12.914983,
            'altitude_m' => 1989,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1092,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karlskoga',
            'iata_code' => 'KSK',
            'icao_code' => 'ESKK',


            'latitude' => 59.345867,
            'longitude' => 14.495922,
            'altitude_m' => 400,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1093,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karlsruhe',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.0135,
            'longitude' => 8.4044,
            'altitude_m' => 377,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1094,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karlsruhe Hbf',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.0135,
            'longitude' => 8.4044,
            'altitude_m' => 377,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1094,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karlstad Airport',
            'iata_code' => 'KSD',
            'icao_code' => 'ESOK',


            'latitude' => 59.4447,
            'longitude' => 13.3374,
            'altitude_m' => 352,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1095,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karmoy',
            'iata_code' => 'HAU',
            'icao_code' => 'ENHD',


            'latitude' => 59.345267,
            'longitude' => 5.208364,
            'altitude_m' => 86,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 925,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karratha',
            'iata_code' => 'KTA',
            'icao_code' => 'YPKA',


            'latitude' => -20.712222,
            'longitude' => 116.773333,
            'altitude_m' => 29,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Perth',

            'city_id' => 1096,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kars Airport',
            'iata_code' => 'KSY',
            'icao_code' => 'LTCF',


            'latitude' => 40.562222,
            'longitude' => 43.115002,
            'altitude_m' => 5889,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1097,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Karup',
            'iata_code' => 'KRP',
            'icao_code' => 'EKKA',


            'latitude' => 56.297458,
            'longitude' => 9.124628,
            'altitude_m' => 170,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1098,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kassel Calden',
            'iata_code' => 'KSF',
            'icao_code' => 'EDVK',


            'latitude' => 51.408394,
            'longitude' => 9.377631,
            'altitude_m' => 908,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1099,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kastner Aaf',
            'iata_code' => '',
            'icao_code' => 'RJTR',


            'latitude' => 35.513769,
            'longitude' => 139.393675,
            'altitude_m' => 360,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 2540,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kastrup',
            'iata_code' => 'CPH',
            'icao_code' => 'EKCH',


            'latitude' => 55.617917,
            'longitude' => 12.655972,
            'altitude_m' => 17,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 521,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Katsina Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 13.007778,
            'longitude' => 7.660278,
            'altitude_m' => 50,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1104,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kaufbeuren BF',
            'iata_code' => 'KFX',
            'icao_code' => 'KAUF',


            'latitude' => 47.885,
            'longitude' => 10.6294,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1105,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kaunas Intl',
            'iata_code' => 'KUN',
            'icao_code' => 'EYKA',


            'latitude' => 54.963919,
            'longitude' => 24.084778,
            'altitude_m' => 256,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vilnius',

            'city_id' => 1106,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kazan',
            'iata_code' => 'KZN',
            'icao_code' => 'UWKD',


            'latitude' => 55.606186,
            'longitude' => 49.278728,
            'altitude_m' => 411,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1109,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kecskemet',
            'iata_code' => '',
            'icao_code' => 'LHKE',


            'latitude' => 46.9175,
            'longitude' => 19.749222,
            'altitude_m' => 376,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Budapest',

            'city_id' => 1110,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Keesler Afb',
            'iata_code' => 'BIX',
            'icao_code' => 'KBIX',


            'latitude' => 30.410425,
            'longitude' => -88.924433,
            'altitude_m' => 33,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 260,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kelani River-Peliyagoda Waterdrome',
            'iata_code' => 'KEZ',
            'icao_code' => '',


            'latitude' => 6.9674637003,
            'longitude' => 79.881972313,
            'altitude_m' => 28,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Colombo',

            'city_id' => 509,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kelowna',
            'iata_code' => 'YLW',
            'icao_code' => 'CYLW',


            'latitude' => 49.956112,
            'longitude' => -119.377778,
            'altitude_m' => 1409,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 1111,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kelso Longview',
            'iata_code' => 'KLS',
            'icao_code' => 'KKLS',


            'latitude' => 46.118,
            'longitude' => -122.898389,
            'altitude_m' => 20,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1112,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kempten HBF',
            'iata_code' => 'KEX',
            'icao_code' => 'KEMP',


            'latitude' => 47.724,
            'longitude' => 10.311,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1113,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kenai Muni',
            'iata_code' => 'ENA',
            'icao_code' => 'PAEN',


            'latitude' => 60.573111,
            'longitude' => -151.245,
            'altitude_m' => 99,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1114,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kendal Glider Port',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 25.603889,
            'longitude' => -80.585556,
            'altitude_m' => 10,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1115,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kenmore Air Harbor Seaplane Base',
            'iata_code' => 'LKE',
            'icao_code' => 'KW55',


            'latitude' => 47.629,
            'longitude' => -122.339,
            'altitude_m' => 14,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2081,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kenora',
            'iata_code' => 'YQK',
            'icao_code' => 'CYQK',


            'latitude' => 49.788334,
            'longitude' => -94.363056,
            'altitude_m' => 1332,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Winnipeg',

            'city_id' => 1117,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kenosha Regional Airport',
            'iata_code' => 'ENW',
            'icao_code' => '',


            'latitude' => 42.5956944,
            'longitude' => -87.9278056,
            'altitude_m' => 742,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1118,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Keokuk Municipal Airport',
            'iata_code' => 'EOK',
            'icao_code' => 'KEOK',


            'latitude' => 40.4599078,
            'longitude' => -91.4285011,
            'altitude_m' => 671,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1119,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kerikeri',
            'iata_code' => 'KKE',
            'icao_code' => 'NZKK',


            'latitude' => -35.262779,
            'longitude' => 173.911944,
            'altitude_m' => 492,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1120,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kerrville Municipal Airport',
            'iata_code' => 'ERV',
            'icao_code' => 'KERV',


            'latitude' => 29.9766667,
            'longitude' => -99.0854722,
            'altitude_m' => 1617,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1121,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kerteh',
            'iata_code' => 'KTE',
            'icao_code' => 'WMKE',


            'latitude' => 4.537222,
            'longitude' => 103.426756,
            'altitude_m' => 18,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1122,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ketchikan Intl',
            'iata_code' => 'KTN',
            'icao_code' => 'PAKT',


            'latitude' => 55.355556,
            'longitude' => -131.71375,
            'altitude_m' => 88,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1123,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ketchikan harbor Seaplane Base',
            'iata_code' => 'WFB',
            'icao_code' => '',


            'latitude' => 55.344444,
            'longitude' => -131.663333,
            'altitude_m' => 0,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1123,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Key West Intl',
            'iata_code' => 'EYW',
            'icao_code' => 'KEYW',


            'latitude' => 24.556111,
            'longitude' => -81.759556,
            'altitude_m' => 3,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1124,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Key West Nas',
            'iata_code' => 'NQX',
            'icao_code' => 'KNQX',


            'latitude' => 24.575834,
            'longitude' => -81.688889,
            'altitude_m' => 6,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1124,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Khabarovsk-MVL',
            'iata_code' => '',
            'icao_code' => 'UHHT',


            'latitude' => 48.528,
            'longitude' => 135.179,
            'altitude_m' => 213,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 1125,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Khanty Mansiysk Airport',
            'iata_code' => 'HMA',
            'icao_code' => 'USHH',


            'latitude' => 61.028479,
            'longitude' => 69.086067,
            'altitude_m' => 76,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1126,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Khrabrovo',
            'iata_code' => 'KGD',
            'icao_code' => 'UMKK',


            'latitude' => 54.89005,
            'longitude' => 20.592633,
            'altitude_m' => 42,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Kaliningrad',

            'city_id' => 1076,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kidlington',
            'iata_code' => 'OXF',
            'icao_code' => 'EGTK',


            'latitude' => 51.836944,
            'longitude' => -1.32,
            'altitude_m' => 270,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1706,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kiel Holtenau',
            'iata_code' => 'KEL',
            'icao_code' => 'EDHK',


            'latitude' => 54.3795,
            'longitude' => 10.145167,
            'altitude_m' => 101,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1128,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kigali Intl',
            'iata_code' => 'KGL',
            'icao_code' => 'HRYR',


            'latitude' => -1.968628,
            'longitude' => 30.13945,
            'altitude_m' => 4859,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Kigali',

            'city_id' => 1130,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kijang',
            'iata_code' => 'TNJ',
            'icao_code' => 'WIDN',


            'latitude' => .922683,
            'longitude' => 104.532311,
            'altitude_m' => 52,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 2223,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Killarney Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.5089,
            'longitude' => -9.5015,
            'altitude_m' => 144,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 1132,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kimberley',
            'iata_code' => 'KIM',
            'icao_code' => 'FAKM',


            'latitude' => -28.802834,
            'longitude' => 24.765167,
            'altitude_m' => 3950,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1134,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kindersley',
            'iata_code' => 'YKY',
            'icao_code' => 'CYKY',


            'latitude' => 51.5175,
            'longitude' => -109.180833,
            'altitude_m' => 2277,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 1135,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kineshma',
            'iata_code' => 'KIE',
            'icao_code' => '',


            'latitude' => 57.45000001,
            'longitude' => 42.15000001,
            'altitude_m' => 420,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1136,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King Abdulaziz Ab',
            'iata_code' => 'DHA',
            'icao_code' => 'OEDR',


            'latitude' => 26.265417,
            'longitude' => 50.152027,
            'altitude_m' => 84,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 603,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King Abdulaziz Intl',
            'iata_code' => 'JED',
            'icao_code' => 'OEJN',


            'latitude' => 21.679564,
            'longitude' => 39.156536,
            'altitude_m' => 48,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 1041,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King Fahd Intl',
            'iata_code' => 'DMM',
            'icao_code' => 'OEDF',


            'latitude' => 26.471161,
            'longitude' => 49.79789,
            'altitude_m' => 72,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 572,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King Faisal Naval Base',
            'iata_code' => '',
            'icao_code' => 'OEJF',


            'latitude' => 21.3481,
            'longitude' => 39.173033,
            'altitude_m' => 7,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 1041,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King Khaled Intl',
            'iata_code' => 'RUH',
            'icao_code' => 'OERK',


            'latitude' => 24.95764,
            'longitude' => 46.698776,
            'altitude_m' => 2049,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Riyadh',

            'city_id' => 1960,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'King St Station',
            'iata_code' => '',
            'icao_code' => 'SEAT',


            'latitude' => 47.5985,
            'longitude' => -122.3299,
            'altitude_m' => 7,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2081,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kingfisher Lake Airport',
            'iata_code' => 'KIF',
            'icao_code' => 'CNM5',


            'latitude' => 53.0125,
            'longitude' => -89.8553,
            'altitude_m' => 866,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1137,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kings County Municipal Airport',
            'iata_code' => '',
            'icao_code' => 'CCW3',


            'latitude' => 45.0519,
            'longitude' => -64.6517,
            'altitude_m' => 119,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Halifax',

            'city_id' => 2446,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kingston',
            'iata_code' => 'YGK',
            'icao_code' => 'CYGK',


            'latitude' => 44.225277,
            'longitude' => -76.596944,
            'altitude_m' => 305,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1138,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kingston Train Station',
            'iata_code' => 'XEG',
            'icao_code' => 'KGST',


            'latitude' => 44.256944,
            'longitude' => -76.536943,
            'altitude_m' => 282,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1138,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kingston VIA Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 44.2572,
            'longitude' => -76.53715,
            'altitude_m' => 282,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1138,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kinston Regional Jetport',
            'iata_code' => 'ISO',
            'icao_code' => 'KISO',


            'latitude' => 35.331389,
            'longitude' => -77.608889,
            'altitude_m' => 94,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1141,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kirksville Regional Airport',
            'iata_code' => 'IRK',
            'icao_code' => 'KIRK',


            'latitude' => 40.0935,
            'longitude' => -92.5449,
            'altitude_m' => 966,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1142,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kirkwall',
            'iata_code' => 'KOI',
            'icao_code' => 'EGPA',


            'latitude' => 58.957778,
            'longitude' => -2.905,
            'altitude_m' => 50,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1143,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kirovsk-Apatity Airport',
            'iata_code' => 'KVK',
            'icao_code' => 'ULMK',


            'latitude' => 67.4633,
            'longitude' => 33.5883,
            'altitude_m' => 515,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 106,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kiruna',
            'iata_code' => 'KRN',
            'icao_code' => 'ESNQ',


            'latitude' => 67.821986,
            'longitude' => 20.336764,
            'altitude_m' => 1508,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1145,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kisarazu',
            'iata_code' => '',
            'icao_code' => 'RJTK',


            'latitude' => 35.398272,
            'longitude' => 139.909936,
            'altitude_m' => 10,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1146,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kissimmee Gateway Airport',
            'iata_code' => 'ISM',
            'icao_code' => 'KISM',


            'latitude' => 28.289806,
            'longitude' => -81.437083,
            'altitude_m' => 82,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1147,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kisumu',
            'iata_code' => 'KIS',
            'icao_code' => 'HKKI',


            'latitude' => -.086139,
            'longitude' => 34.728892,
            'altitude_m' => 3796,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1148,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kitchener Bus Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.44968,
            'longitude' => -80.49222,
            'altitude_m' => 1083,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1150,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kitzingen Aaf',
            'iata_code' => '',
            'icao_code' => 'ETIN',


            'latitude' => 49.743057,
            'longitude' => 10.200556,
            'altitude_m' => 689,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1151,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kjaerstad',
            'iata_code' => 'MJF',
            'icao_code' => 'ENMS',


            'latitude' => 65.783997,
            'longitude' => 13.214914,
            'altitude_m' => 237,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1516,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kjevik',
            'iata_code' => 'KRS',
            'icao_code' => 'ENCN',


            'latitude' => 58.204214,
            'longitude' => 8.085369,
            'altitude_m' => 57,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1184,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Klagenfurt',
            'iata_code' => 'KLU',
            'icao_code' => 'LOWK',


            'latitude' => 46.642514,
            'longitude' => 14.337739,
            'altitude_m' => 1470,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 1152,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Klamath Falls Airport',
            'iata_code' => 'LMT',
            'icao_code' => 'KLMT',


            'latitude' => 42.1561,
            'longitude' => -121.733,
            'altitude_m' => 4095,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1153,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Klatovy',
            'iata_code' => '',
            'icao_code' => 'LKKT',


            'latitude' => 49.418327,
            'longitude' => 13.321944,
            'altitude_m' => 1299,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1154,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Klawock Airport',
            'iata_code' => 'KLW',
            'icao_code' => 'PAKW',


            'latitude' => 55.579167,
            'longitude' => -133.076111,
            'altitude_m' => 80,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1155,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Klawock Seaplane Base',
            'iata_code' => 'AQC',
            'icao_code' => 'PAQC',


            'latitude' => 55.554658,
            'longitude' => -133.101693,
            'altitude_m' => 0,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1155,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kluang',
            'iata_code' => '',
            'icao_code' => 'WMAP',


            'latitude' => 2.041394,
            'longitude' => 103.307394,
            'altitude_m' => 150,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1157,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Knevichi',
            'iata_code' => 'VVO',
            'icao_code' => 'UHWW',


            'latitude' => 43.398953,
            'longitude' => 132.148017,
            'altitude_m' => 46,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 2425,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kobe',
            'iata_code' => 'UKB',
            'icao_code' => 'RJBE',


            'latitude' => 34.632778,
            'longitude' => 135.223889,
            'altitude_m' => 22,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1158,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Koblenz Winningen',
            'iata_code' => 'ZNV',
            'icao_code' => 'EDRK',


            'latitude' => 50.3255,
            'longitude' => 7.528667,
            'altitude_m' => 640,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1159,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kochi',
            'iata_code' => 'KCZ',
            'icao_code' => 'RJOK',


            'latitude' => 33.546111,
            'longitude' => 133.669444,
            'altitude_m' => 42,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1160,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kodiak',
            'iata_code' => 'ADQ',
            'icao_code' => 'PADQ',


            'latitude' => 57.749967,
            'longitude' => -152.493856,
            'altitude_m' => 78,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1162,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Koksijde',
            'iata_code' => '',
            'icao_code' => 'EBFN',


            'latitude' => 51.090278,
            'longitude' => 2.652778,
            'altitude_m' => 20,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 1163,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kolding Vamdrup',
            'iata_code' => '',
            'icao_code' => 'EKVD',


            'latitude' => 55.436283,
            'longitude' => 9.330925,
            'altitude_m' => 143,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1164,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kolhapur',
            'iata_code' => 'KLH',
            'icao_code' => 'VAKP',


            'latitude' => 16.664658,
            'longitude' => 74.289353,
            'altitude_m' => 1996,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1165,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Koln Bonn',
            'iata_code' => 'CGN',
            'icao_code' => 'EDDK',


            'latitude' => 50.865917,
            'longitude' => 7.142744,
            'altitude_m' => 302,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 508,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Koltsovo',
            'iata_code' => 'SVX',
            'icao_code' => 'USSS',


            'latitude' => 56.743108,
            'longitude' => 60.802728,
            'altitude_m' => 764,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 2523,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Komatsu',
            'iata_code' => 'KMQ',
            'icao_code' => 'RJNK',


            'latitude' => 36.394611,
            'longitude' => 136.406544,
            'altitude_m' => 36,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1082,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Komsomolsk-on-Amur Airport',
            'iata_code' => 'KXK',
            'icao_code' => 'UHKK',


            'latitude' => 50.4094,
            'longitude' => 136.934,
            'altitude_m' => 92,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 1167,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kongiganak Airport',
            'iata_code' => 'KKH',
            'icao_code' => 'PADY',


            'latitude' => 59.960833,
            'longitude' => -162.881111,
            'altitude_m' => 30,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1168,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Konya',
            'iata_code' => 'KYA',
            'icao_code' => 'LTAN',


            'latitude' => 37.979,
            'longitude' => 32.561861,
            'altitude_m' => 3381,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1169,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kos',
            'iata_code' => 'KGS',
            'icao_code' => 'LGKO',


            'latitude' => 36.793335,
            'longitude' => 27.091667,
            'altitude_m' => 412,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1170,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kosice',
            'iata_code' => 'KSC',
            'icao_code' => 'LZKZ',


            'latitude' => 48.663055,
            'longitude' => 21.241112,
            'altitude_m' => 755,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bratislava',

            'city_id' => 1171,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kostanay West Airport',
            'iata_code' => 'KSN',
            'icao_code' => 'UAUU',


            'latitude' => 53.206944,
            'longitude' => 63.550278,
            'altitude_m' => 595,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Qyzylorda',

            'city_id' => 1172,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kostroma - Sokerkino',
            'iata_code' => '',
            'icao_code' => 'UUBA',


            'latitude' => 57.47,
            'longitude' => 41.01,
            'altitude_m' => 453,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1173,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Koszalin - Zegrze Pomorskie Airport',
            'iata_code' => 'OSZ',
            'icao_code' => 'EPKO',


            'latitude' => 54.041,
            'longitude' => 16.266,
            'altitude_m' => 111,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1174,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kota',
            'iata_code' => 'KTU',
            'icao_code' => 'VIKO',


            'latitude' => 25.160219,
            'longitude' => 75.845631,
            'altitude_m' => 896,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1175,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kota Kinabalu Airport',
            'iata_code' => 'ZWR',
            'icao_code' => '',


            'latitude' => 11.1111,
            'longitude' => 11.1111,
            'altitude_m' => 1,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1176,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kota Kinabalu Intl',
            'iata_code' => 'BKI',
            'icao_code' => 'WBKK',


            'latitude' => 5.937208,
            'longitude' => 116.051181,
            'altitude_m' => 10,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1176,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kotlas Airport',
            'iata_code' => 'KSZ',
            'icao_code' => 'ULKK',


            'latitude' => 61.2358,
            'longitude' => 46.6975,
            'altitude_m' => 184,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1177,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kotoka Intl',
            'iata_code' => 'ACC',
            'icao_code' => 'DGAA',


            'latitude' => 5.605186,
            'longitude' => -.166786,
            'altitude_m' => 205,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Accra',

            'city_id' => 13,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Krakow Glowny',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.065556,
            'longitude' => 19.947222,
            'altitude_m' => 719,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1180,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kramfors Solleftea',
            'iata_code' => 'KRF',
            'icao_code' => 'ESNK',


            'latitude' => 63.048597,
            'longitude' => 17.768856,
            'altitude_m' => 34,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1181,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kresty',
            'iata_code' => 'PKV',
            'icao_code' => 'ULOO',


            'latitude' => 57.783917,
            'longitude' => 28.395614,
            'altitude_m' => 154,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1878,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kristianstad',
            'iata_code' => 'KID',
            'icao_code' => 'ESMK',


            'latitude' => 55.921686,
            'longitude' => 14.085536,
            'altitude_m' => 76,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1185,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kronoberg',
            'iata_code' => 'VXO',
            'icao_code' => 'ESMX',


            'latitude' => 56.929144,
            'longitude' => 14.727994,
            'altitude_m' => 610,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 2388,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kroonstad',
            'iata_code' => '',
            'icao_code' => 'FAKS',


            'latitude' => -27.660617,
            'longitude' => 27.315761,
            'altitude_m' => 4700,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1187,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Krugersdorp',
            'iata_code' => '',
            'icao_code' => 'FAKR',


            'latitude' => -26.080978,
            'longitude' => 27.725667,
            'altitude_m' => 5499,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1188,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Krymsk',
            'iata_code' => 'NOI',
            'icao_code' => '',


            'latitude' => 44.4016,
            'longitude' => 37.7779,
            'altitude_m' => 50,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => '\N',

            'city_id' => 1636,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Krzesiny',
            'iata_code' => '',
            'icao_code' => 'EPKS',


            'latitude' => 52.331719,
            'longitude' => 16.966428,
            'altitude_m' => 265,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1860,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kuala Lumpur Intl',
            'iata_code' => 'KUL',
            'icao_code' => 'WMKK',


            'latitude' => 2.745578,
            'longitude' => 101.709917,
            'altitude_m' => 69,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1189,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kuantan',
            'iata_code' => 'KUA',
            'icao_code' => 'WMKD',


            'latitude' => 3.775389,
            'longitude' => 103.209056,
            'altitude_m' => 58,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1191,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kuching Intl',
            'iata_code' => 'KCH',
            'icao_code' => 'WBGG',


            'latitude' => 1.484697,
            'longitude' => 110.346933,
            'altitude_m' => 89,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1192,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kudat Airport',
            'iata_code' => 'KUD',
            'icao_code' => 'WBKT',


            'latitude' => 6.9225,
            'longitude' => 116.836,
            'altitude_m' => 10,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1193,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kumamoto',
            'iata_code' => 'KMJ',
            'icao_code' => 'RJFT',


            'latitude' => 32.837319,
            'longitude' => 130.85505,
            'altitude_m' => 642,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1194,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kumasi Airport',
            'iata_code' => 'KMS',
            'icao_code' => 'DGSI',


            'latitude' => 6.71456,
            'longitude' => -1.59082,
            'altitude_m' => 942,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Accra',

            'city_id' => 1195,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kumejima',
            'iata_code' => 'UEO',
            'icao_code' => 'ROKJ',


            'latitude' => 26.363506,
            'longitude' => 126.713806,
            'altitude_m' => 23,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1196,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kunovice',
            'iata_code' => 'UHE',
            'icao_code' => 'LKKU',


            'latitude' => 49.029444,
            'longitude' => 17.439722,
            'altitude_m' => 581,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1198,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kuressaare',
            'iata_code' => 'URE',
            'icao_code' => 'EEKE',


            'latitude' => 58.229883,
            'longitude' => 22.509494,
            'altitude_m' => 14,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Tallinn',

            'city_id' => 1200,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kurgan Airport',
            'iata_code' => 'KRO',
            'icao_code' => 'USUU',


            'latitude' => 55.4753,
            'longitude' => 65.4156,
            'altitude_m' => 240,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1201,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kursk East Airport',
            'iata_code' => 'URS',
            'icao_code' => 'UUOK',


            'latitude' => 51.7506,
            'longitude' => 36.2956,
            'altitude_m' => 686,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1202,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kushiro Airport',
            'iata_code' => 'KUH',
            'icao_code' => 'RJCK',


            'latitude' => 43.041,
            'longitude' => 144.193,
            'altitude_m' => 327,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1203,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kutahya',
            'iata_code' => '',
            'icao_code' => 'LTBN',


            'latitude' => 39.426708,
            'longitude' => 30.016872,
            'altitude_m' => 3026,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1204,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kvernberget',
            'iata_code' => 'KSU',
            'icao_code' => 'ENKB',


            'latitude' => 63.111781,
            'longitude' => 7.824522,
            'altitude_m' => 204,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1186,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kyoto',
            'iata_code' => 'UKY',
            'icao_code' => '',


            'latitude' => 35.016667,
            'longitude' => 135.766667,
            'altitude_m' => 262,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1205,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Kyzyl Airport',
            'iata_code' => 'KYZ',
            'icao_code' => 'UNKY',


            'latitude' => 51.6694,
            'longitude' => 94.4006,
            'altitude_m' => 2123,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Krasnoyarsk',

            'city_id' => 1206,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'LM Clayton Airport',
            'iata_code' => 'OLF',
            'icao_code' => 'KOLF',


            'latitude' => 48.094444,
            'longitude' => -105.575,
            'altitude_m' => 1986,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 2494,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Aurora',
            'iata_code' => 'GUA',
            'icao_code' => 'MGGT',


            'latitude' => 14.583272,
            'longitude' => -90.527475,
            'altitude_m' => 4952,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guatemala',

            'city_id' => 869,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Chinita Intl',
            'iata_code' => 'MAR',
            'icao_code' => 'SVMC',


            'latitude' => 10.558208,
            'longitude' => -71.727856,
            'altitude_m' => 235,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1386,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Cote',
            'iata_code' => '',
            'icao_code' => 'LSGP',


            'latitude' => 46.413056,
            'longitude' => 6.258611,
            'altitude_m' => 1350,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1862,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Defense Heliport',
            'iata_code' => 'JPU',
            'icao_code' => '',


            'latitude' => 48.86667,
            'longitude' => 2.333333,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Florida',
            'iata_code' => 'LSC',
            'icao_code' => 'SCSE',


            'latitude' => -29.916233,
            'longitude' => -71.199522,
            'altitude_m' => 481,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1215,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Garenne',
            'iata_code' => 'AGF',
            'icao_code' => 'LFBA',


            'latitude' => 44.174721,
            'longitude' => .590556,
            'altitude_m' => 204,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 20,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Guardia',
            'iata_code' => 'LGA',
            'icao_code' => 'KLGA',


            'latitude' => 40.777245,
            'longitude' => -73.872608,
            'altitude_m' => 22,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Junta Muni',
            'iata_code' => 'LHX',
            'icao_code' => 'KLHX',


            'latitude' => 38.049719,
            'longitude' => -103.509431,
            'altitude_m' => 4238,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1207,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Nubia',
            'iata_code' => 'MZL',
            'icao_code' => 'SKMZ',


            'latitude' => 5.029597,
            'longitude' => -75.464708,
            'altitude_m' => 6871,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1378,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Plata',
            'iata_code' => 'LPG',
            'icao_code' => 'SADL',


            'latitude' => -34.972222,
            'longitude' => -57.894694,
            'altitude_m' => 72,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1209,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Rioja',
            'iata_code' => 'IRJ',
            'icao_code' => 'SANL',


            'latitude' => -29.381636,
            'longitude' => -66.795839,
            'altitude_m' => 1436,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1210,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Rochelle-Ile de Re',
            'iata_code' => 'LRH',
            'icao_code' => 'LFBH',


            'latitude' => 46.1792,
            'longitude' => -1.19528,
            'altitude_m' => 74,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1211,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Romaine Airport',
            'iata_code' => '',
            'icao_code' => 'CTT5',


            'latitude' => 50.257222,
            'longitude' => -60.669167,
            'altitude_m' => 90,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Blanc-Sablon',

            'city_id' => 1212,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Ronge',
            'iata_code' => 'YVC',
            'icao_code' => 'CYVC',


            'latitude' => 55.15139,
            'longitude' => -105.261944,
            'altitude_m' => 1242,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 1214,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Teste De Buch',
            'iata_code' => 'XAC',
            'icao_code' => 'LFCH',


            'latitude' => 44.59639,
            'longitude' => -1.110833,
            'altitude_m' => 49,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 117,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'La Tontouta',
            'iata_code' => 'NOU',
            'icao_code' => 'NWWW',


            'latitude' => -22.014553,
            'longitude' => 166.212972,
            'altitude_m' => 52,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Pacific/Noumea',

            'city_id' => 1632,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Labuan',
            'iata_code' => 'LBU',
            'icao_code' => 'WBKL',


            'latitude' => 5.300683,
            'longitude' => 115.250181,
            'altitude_m' => 101,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1217,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ladysmith',
            'iata_code' => 'LAY',
            'icao_code' => 'FALY',


            'latitude' => -28.581667,
            'longitude' => 29.749722,
            'altitude_m' => 3548,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1218,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lago Argentino Airport',
            'iata_code' => 'ING',
            'icao_code' => 'SAWA',


            'latitude' => -50.3361,
            'longitude' => -72.2486,
            'altitude_m' => 732,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 659,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lagoa Santa',
            'iata_code' => '',
            'icao_code' => 'SBLS',


            'latitude' => -19.661611,
            'longitude' => -43.896403,
            'altitude_m' => 2795,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1219,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lahad Datu',
            'iata_code' => 'LDU',
            'icao_code' => 'WBKD',


            'latitude' => 5.032247,
            'longitude' => 118.324036,
            'altitude_m' => 45,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1222,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lahr Airport',
            'iata_code' => 'LHA',
            'icao_code' => 'EDTL',


            'latitude' => 48.3693,
            'longitude' => 7.82772,
            'altitude_m' => 511,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1224,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Laishan',
            'iata_code' => 'YNT',
            'icao_code' => 'ZSYT',


            'latitude' => 37.401667,
            'longitude' => 121.371667,
            'altitude_m' => 59,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2520,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lake Charles Rgnl',
            'iata_code' => 'LCH',
            'icao_code' => 'KLCH',


            'latitude' => 30.126112,
            'longitude' => -93.223335,
            'altitude_m' => 15,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lake Havasu City Airport',
            'iata_code' => 'HII',
            'icao_code' => 'KHII',


            'latitude' => 34.5711111,
            'longitude' => -114.3582778,
            'altitude_m' => 783,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 1227,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lake Hood Seaplane Base',
            'iata_code' => 'LHD',
            'icao_code' => 'PALH',


            'latitude' => 61.1866382,
            'longitude' => -149.9653918,
            'altitude_m' => 71,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 80,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lake Tahoe Airport',
            'iata_code' => 'TVL',
            'icao_code' => 'KTVL',


            'latitude' => 38.893889,
            'longitude' => -119.995278,
            'altitude_m' => 8544,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2146,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lake Wales Municipal Airport',
            'iata_code' => 'X07',
            'icao_code' => '',


            'latitude' => 27.8938056,
            'longitude' => -81.6203889,
            'altitude_m' => 127,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1228,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lakefront',
            'iata_code' => 'NEW',
            'icao_code' => 'KNEW',


            'latitude' => 30.0424167,
            'longitude' => -90.02825,
            'altitude_m' => 7,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1593,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lakehurst Naes',
            'iata_code' => 'NEL',
            'icao_code' => 'KNEL',


            'latitude' => 40.033333,
            'longitude' => -74.353333,
            'altitude_m' => 103,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1229,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lakenheath',
            'iata_code' => 'LKZ',
            'icao_code' => 'EGUL',


            'latitude' => 52.409333,
            'longitude' => .561,
            'altitude_m' => 32,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1230,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lalbenque',
            'iata_code' => '',
            'icao_code' => 'LFCC',


            'latitude' => 44.351387,
            'longitude' => 1.475278,
            'altitude_m' => 912,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 363,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lambert St Louis Intl',
            'iata_code' => 'STL',
            'icao_code' => 'KSTL',


            'latitude' => 38.748697,
            'longitude' => -90.370028,
            'altitude_m' => 618,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2155,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lamothe',
            'iata_code' => '',
            'icao_code' => 'LFDH',


            'latitude' => 43.687778,
            'longitude' => .601667,
            'altitude_m' => 411,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 145,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Landivisiau',
            'iata_code' => 'LDV',
            'icao_code' => 'LFRJ',


            'latitude' => 48.530258,
            'longitude' => -4.151642,
            'altitude_m' => 348,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1231,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Landsberg Lech',
            'iata_code' => '',
            'icao_code' => 'ETSA',


            'latitude' => 48.0705,
            'longitude' => 10.906,
            'altitude_m' => 2044,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1232,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Landshut Ellermuehle',
            'iata_code' => '',
            'icao_code' => 'EDML',


            'latitude' => 48.5133333333,
            'longitude' => 12.035,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1233,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Landskrona',
            'iata_code' => 'JLD',
            'icao_code' => 'ESML',


            'latitude' => 55.944444,
            'longitude' => 12.869444,
            'altitude_m' => 194,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1234,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Langnes',
            'iata_code' => 'TOS',
            'icao_code' => 'ENTC',


            'latitude' => 69.683333,
            'longitude' => 18.918919,
            'altitude_m' => 31,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 2310,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lann Bihoue',
            'iata_code' => 'LRT',
            'icao_code' => 'LFRH',


            'latitude' => 47.760555,
            'longitude' => -3.44,
            'altitude_m' => 160,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1311,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lannion',
            'iata_code' => 'LAI',
            'icao_code' => 'LFRO',


            'latitude' => 48.754378,
            'longitude' => -3.471656,
            'altitude_m' => 290,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1236,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lanseria',
            'iata_code' => 'HLA',
            'icao_code' => 'FALA',


            'latitude' => -25.938514,
            'longitude' => 27.926133,
            'altitude_m' => 4517,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1058,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lanzhou Airport',
            'iata_code' => 'LHW',
            'icao_code' => 'ZLAN',


            'latitude' => 36.117,
            'longitude' => 103.617,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1237,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Laramie Regional Airport',
            'iata_code' => 'LAR',
            'icao_code' => 'KLAR',


            'latitude' => 41.3121,
            'longitude' => -105.675,
            'altitude_m' => 7284,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1238,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Laraway Road',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.485,
            'longitude' => -87.9596,
            'altitude_m' => 703,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1592,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Larisa',
            'iata_code' => 'LRA',
            'icao_code' => 'LGLR',


            'latitude' => 39.650253,
            'longitude' => 22.4655,
            'altitude_m' => 241,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1239,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Larnaca',
            'iata_code' => 'LCA',
            'icao_code' => 'LCLK',


            'latitude' => 34.875117,
            'longitude' => 33.62485,
            'altitude_m' => 8,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Nicosia',

            'city_id' => 1240,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Larzac',
            'iata_code' => '',
            'icao_code' => 'LFCM',


            'latitude' => 43.989342,
            'longitude' => 3.183,
            'altitude_m' => 2606,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1459,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Las Brujas',
            'iata_code' => 'CZU',
            'icao_code' => 'SKCZ',


            'latitude' => 9.332742,
            'longitude' => -75.285594,
            'altitude_m' => 528,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 530,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Las Cruces Intl',
            'iata_code' => 'LRU',
            'icao_code' => 'KLRU',


            'latitude' => 32.289417,
            'longitude' => -106.921972,
            'altitude_m' => 4456,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1241,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lasalle Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.875,
            'longitude' => -87.632,
            'altitude_m' => 592,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lasbordes',
            'iata_code' => '',
            'icao_code' => 'LFCL',


            'latitude' => 43.586113,
            'longitude' => 1.499167,
            'altitude_m' => 459,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2293,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lask',
            'iata_code' => '',
            'icao_code' => 'EPLK',


            'latitude' => 51.551667,
            'longitude' => 19.179058,
            'altitude_m' => 633,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1242,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Latina',
            'iata_code' => 'QLT',
            'icao_code' => 'LIRL',


            'latitude' => 41.542436,
            'longitude' => 12.909019,
            'altitude_m' => 93,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Latur Airport',
            'iata_code' => 'LTU',
            'icao_code' => '',


            'latitude' => 18.411944,
            'longitude' => 76.465,
            'altitude_m' => 1584,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1245,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Launceston',
            'iata_code' => 'LST',
            'icao_code' => 'YMLT',


            'latitude' => -41.545278,
            'longitude' => 147.214167,
            'altitude_m' => 562,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Melbourne',

            'city_id' => 1246,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Laupheim',
            'iata_code' => '',
            'icao_code' => 'ETHL',


            'latitude' => 48.220297,
            'longitude' => 9.910019,
            'altitude_m' => 1766,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1247,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lauro Carneiro De Loyola',
            'iata_code' => 'JOI',
            'icao_code' => 'SBJV',


            'latitude' => -26.224453,
            'longitude' => -48.797364,
            'altitude_m' => 15,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1061,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lauro Kurtz',
            'iata_code' => 'PFB',
            'icao_code' => 'SBPF',


            'latitude' => -28.243989,
            'longitude' => -52.326558,
            'altitude_m' => 2376,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1751,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lausanne-la Blecherette Airport',
            'iata_code' => '',
            'icao_code' => 'LSGL',


            'latitude' => 46.5453,
            'longitude' => 6.61667,
            'altitude_m' => 2041,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1248,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lawica',
            'iata_code' => 'POZ',
            'icao_code' => 'EPPO',


            'latitude' => 52.421031,
            'longitude' => 16.826325,
            'altitude_m' => 308,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1860,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lawrence J Timmerman Airport',
            'iata_code' => 'MWC',
            'icao_code' => 'KMWC',


            'latitude' => 43.1103889,
            'longitude' => -88.0344167,
            'altitude_m' => 745,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1461,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lawson Aaf',
            'iata_code' => 'LSF',
            'icao_code' => 'KLSF',


            'latitude' => 32.337322,
            'longitude' => -84.991283,
            'altitude_m' => 232,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 733,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Bourget',
            'iata_code' => 'LBG',
            'icao_code' => 'LFPB',


            'latitude' => 48.969444,
            'longitude' => 2.441389,
            'altitude_m' => 218,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Cannet',
            'iata_code' => '',
            'icao_code' => 'LFMC',


            'latitude' => 43.384672,
            'longitude' => 6.387139,
            'altitude_m' => 265,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1251,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Havre',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.4901,
            'longitude' => .1001,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1250,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Palyvestre',
            'iata_code' => 'TLN',
            'icao_code' => 'LFTH',


            'latitude' => 43.0973,
            'longitude' => 6.14603,
            'altitude_m' => 7,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 981,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Pontreau',
            'iata_code' => 'CET',
            'icao_code' => 'LFOU',


            'latitude' => 47.082136,
            'longitude' => -.877064,
            'altitude_m' => 443,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 479,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Rozelier',
            'iata_code' => '',
            'icao_code' => 'LFGW',


            'latitude' => 49.122383,
            'longitude' => 5.469047,
            'altitude_m' => 1230,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2395,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Sequestre',
            'iata_code' => 'LBI',
            'icao_code' => 'LFCI',


            'latitude' => 43.913887,
            'longitude' => 2.113056,
            'altitude_m' => 564,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 40,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Le Tube',
            'iata_code' => '',
            'icao_code' => 'LFMI',


            'latitude' => 43.522736,
            'longitude' => 4.923844,
            'altitude_m' => 82,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1024,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lea Co Rgnl',
            'iata_code' => 'HOB',
            'icao_code' => 'KHOB',


            'latitude' => 32.687528,
            'longitude' => -103.217028,
            'altitude_m' => 3661,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 951,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lecce',
            'iata_code' => 'LCC',
            'icao_code' => 'LIBN',


            'latitude' => 40.239228,
            'longitude' => 18.133325,
            'altitude_m' => 156,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1254,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lech Walesa',
            'iata_code' => 'GDN',
            'icao_code' => 'EPGD',


            'latitude' => 54.377569,
            'longitude' => 18.466222,
            'altitude_m' => 489,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 796,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leeds Bradford',
            'iata_code' => 'LBA',
            'icao_code' => 'EGNM',


            'latitude' => 53.865897,
            'longitude' => -1.660569,
            'altitude_m' => 681,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1255,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leeds Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 53.794,
            'longitude' => -1.547,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1255,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leer Papenburg',
            'iata_code' => '',
            'icao_code' => 'EDWF',


            'latitude' => 53.271592,
            'longitude' => 7.442344,
            'altitude_m' => 3,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1256,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leeuwarden',
            'iata_code' => 'LWR',
            'icao_code' => 'EHLW',


            'latitude' => 53.228611,
            'longitude' => 5.760556,
            'altitude_m' => 3,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1257,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leicester',
            'iata_code' => '',
            'icao_code' => 'EGBG',


            'latitude' => 52.607778,
            'longitude' => -1.031944,
            'altitude_m' => 469,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1258,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leikanger Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 61.1351,
            'longitude' => 6.4723,
            'altitude_m' => 6,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1259,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leipzig Halle',
            'iata_code' => 'LEJ',
            'icao_code' => 'EDDP',


            'latitude' => 51.432447,
            'longitude' => 12.241633,
            'altitude_m' => 465,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1260,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leite Lopes',
            'iata_code' => 'RAO',
            'icao_code' => 'SBRP',


            'latitude' => -21.134167,
            'longitude' => -47.774189,
            'altitude_m' => 1802,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1944,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leknes Airport',
            'iata_code' => 'LKN',
            'icao_code' => 'ENLK',


            'latitude' => 68.1525,
            'longitude' => 13.6094,
            'altitude_m' => 78,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1262,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lelystad',
            'iata_code' => '',
            'icao_code' => 'EHLE',


            'latitude' => 52.460278,
            'longitude' => 5.527222,
            'altitude_m' => -13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1263,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lelystad Airport',
            'iata_code' => 'LEY',
            'icao_code' => '',


            'latitude' => 52.4603,
            'longitude' => 5.52722,
            'altitude_m' => 12,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1263,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lemhi County Airport',
            'iata_code' => 'SMN',
            'icao_code' => 'KSMN',


            'latitude' => 45.123889,
            'longitude' => -113.881389,
            'altitude_m' => 4043,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 2007,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lemoore Nas',
            'iata_code' => 'NLC',
            'icao_code' => 'KNLC',


            'latitude' => 36.333012,
            'longitude' => -119.95208,
            'altitude_m' => 234,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1264,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leon Airport',
            'iata_code' => 'LEN',
            'icao_code' => 'LELN',


            'latitude' => 42.589,
            'longitude' => -5.655556,
            'altitude_m' => 3006,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1265,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leon M Ba',
            'iata_code' => 'LBV',
            'icao_code' => 'FOOL',


            'latitude' => .4586,
            'longitude' => 9.412283,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Libreville',

            'city_id' => 1273,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leopold Sedar Senghor Intl',
            'iata_code' => 'DKR',
            'icao_code' => 'GOOY',


            'latitude' => 14.739708,
            'longitude' => -17.490225,
            'altitude_m' => 85,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Dakar',

            'city_id' => 566,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lerwick / Tingwall Airport',
            'iata_code' => 'LWK',
            'icao_code' => 'EGET',


            'latitude' => 60.1922,
            'longitude' => -1.24361,
            'altitude_m' => 43,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1266,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lerwick Harbour',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 60.15,
            'longitude' => -1.13333,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1266,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Les Loges',
            'iata_code' => '',
            'icao_code' => 'LFAI',


            'latitude' => 48.596219,
            'longitude' => 3.006786,
            'altitude_m' => 428,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1560,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Les Pujols',
            'iata_code' => '',
            'icao_code' => 'LFDJ',


            'latitude' => 43.090556,
            'longitude' => 1.695833,
            'altitude_m' => 1115,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1725,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leshukonskoye Airport',
            'iata_code' => 'LDG',
            'icao_code' => 'ULAL',


            'latitude' => 64.895833,
            'longitude' => 45.722778,
            'altitude_m' => 220,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 121,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lesquin',
            'iata_code' => 'LIL',
            'icao_code' => 'LFQQ',


            'latitude' => 50.561942,
            'longitude' => 3.089444,
            'altitude_m' => 157,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1280,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lester B Pearson Intl',
            'iata_code' => 'YYZ',
            'icao_code' => 'CYYZ',


            'latitude' => 43.677223,
            'longitude' => -79.630556,
            'altitude_m' => 569,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 2287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lethbridge',
            'iata_code' => 'YQL',
            'icao_code' => 'CYQL',


            'latitude' => 49.630278,
            'longitude' => -112.799722,
            'altitude_m' => 3047,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1267,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Letiste Benesov',
            'iata_code' => '',
            'icao_code' => 'LKBE',


            'latitude' => 49.4427,
            'longitude' => 14.3841,
            'altitude_m' => 1322,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 236,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Levaldigi',
            'iata_code' => 'CUF',
            'icao_code' => 'LIMZ',


            'latitude' => 44.547019,
            'longitude' => 7.623217,
            'altitude_m' => 1267,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 562,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Leverkusen Airport',
            'iata_code' => '',
            'icao_code' => 'EDKL',


            'latitude' => 51.0153,
            'longitude' => 7.00556,
            'altitude_m' => 157,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1269,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lhasa-Gonggar',
            'iata_code' => 'LXA',
            'icao_code' => 'ZULS',


            'latitude' => 29.297778,
            'longitude' => 90.911944,
            'altitude_m' => 13136,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1270,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lherm',
            'iata_code' => '',
            'icao_code' => 'LFBR',


            'latitude' => 43.448891,
            'longitude' => 1.263333,
            'altitude_m' => 622,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1211,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liangjiang',
            'iata_code' => 'KWL',
            'icao_code' => 'ZGKL',


            'latitude' => 25.218106,
            'longitude' => 110.039197,
            'altitude_m' => 570,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 874,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lianyungang Airport',
            'iata_code' => 'LYG',
            'icao_code' => 'ZSLG',


            'latitude' => 34.55,
            'longitude' => 119.25,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1271,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Licenciado Adolfo Lopez Mateos Intl',
            'iata_code' => 'TLC',
            'icao_code' => 'MMTO',


            'latitude' => 19.337072,
            'longitude' => -99.566008,
            'altitude_m' => 8466,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2282,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Licenciado Benito Juarez Intl',
            'iata_code' => 'MEX',
            'icao_code' => 'MMMX',


            'latitude' => 19.436303,
            'longitude' => -99.072097,
            'altitude_m' => 7316,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1448,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Licenciado Gustavo Diaz Ordaz Intl',
            'iata_code' => 'PVR',
            'icao_code' => 'MMPR',


            'latitude' => 20.680083,
            'longitude' => -105.254167,
            'altitude_m' => 23,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1886,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Licenciado Manuel Crescencio Rejon Int',
            'iata_code' => 'MID',
            'icao_code' => 'MMMD',


            'latitude' => 20.936981,
            'longitude' => -89.657672,
            'altitude_m' => 38,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1442,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Licenciado Y Gen Ignacio Lopez Rayon',
            'iata_code' => 'UPN',
            'icao_code' => 'MMPN',


            'latitude' => 19.396692,
            'longitude' => -102.039056,
            'altitude_m' => 5258,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 2355,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lichtenburg',
            'iata_code' => '',
            'icao_code' => 'FALI',


            'latitude' => -26.175672,
            'longitude' => 26.184575,
            'altitude_m' => 4875,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1274,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lideta',
            'iata_code' => '',
            'icao_code' => 'HAAL',


            'latitude' => 9.003681,
            'longitude' => 38.726019,
            'altitude_m' => 7749,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Addis_Ababa',

            'city_id' => 15,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lidkoping',
            'iata_code' => 'LDK',
            'icao_code' => 'ESGL',


            'latitude' => 58.465522,
            'longitude' => 13.174414,
            'altitude_m' => 200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1275,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liege',
            'iata_code' => 'LGG',
            'icao_code' => 'EBLG',


            'latitude' => 50.637417,
            'longitude' => 5.443222,
            'altitude_m' => 659,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 1276,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liege-Guillemins Railway Station',
            'iata_code' => 'XHN',
            'icao_code' => '',


            'latitude' => 50.6333,
            'longitude' => 5.56667,
            'altitude_m' => 659,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 1276,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liepaja Intl',
            'iata_code' => 'LPX',
            'icao_code' => 'EVLA',


            'latitude' => 56.5175,
            'longitude' => 21.096944,
            'altitude_m' => 16,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Riga',

            'city_id' => 1277,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lihue',
            'iata_code' => 'LIH',
            'icao_code' => 'PHLI',


            'latitude' => 21.975983,
            'longitude' => -159.338958,
            'altitude_m' => 153,

            'time_zone_offset' => -10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Pacific/Honolulu',

            'city_id' => 1278,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lijiang Airport',
            'iata_code' => 'LJG',
            'icao_code' => 'ZPLJ',


            'latitude' => 26.883333,
            'longitude' => 100.23333,
            'altitude_m' => 7923,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1279,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lille',
            'iata_code' => 'XDB',
            'icao_code' => '',


            'latitude' => 50.563333,
            'longitude' => 3.08805,
            'altitude_m' => 1,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1280,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Limbang',
            'iata_code' => 'LMN',
            'icao_code' => 'WBGJ',


            'latitude' => 4.808303,
            'longitude' => 115.010439,
            'altitude_m' => 14,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1281,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Limerick',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.659,
            'longitude' => -8.624,
            'altitude_m' => 500,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Dublin',

            'city_id' => 1282,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Linate',
            'iata_code' => 'LIN',
            'icao_code' => 'LIML',


            'latitude' => 45.445103,
            'longitude' => 9.276739,
            'altitude_m' => 353,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1455,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lincang Airport',
            'iata_code' => 'LNJ',
            'icao_code' => 'ZPLC',


            'latitude' => 23.738333,
            'longitude' => 100.025,
            'altitude_m' => 1500,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1284,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lindau HBF',
            'iata_code' => 'LND',
            'icao_code' => 'LIND',


            'latitude' => 47.5489,
            'longitude' => 9.688,
            'altitude_m' => 1000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1285,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lindsay',
            'iata_code' => 'NF4',
            'icao_code' => 'CNF4',


            'latitude' => 44.364722,
            'longitude' => -78.783889,
            'altitude_m' => 895,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1286,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lins',
            'iata_code' => 'LIP',
            'icao_code' => 'SBLN',


            'latitude' => -21.664039,
            'longitude' => -49.730519,
            'altitude_m' => 1575,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1287,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Linz',
            'iata_code' => 'LNZ',
            'icao_code' => 'LOWL',


            'latitude' => 48.233219,
            'longitude' => 14.187511,
            'altitude_m' => 978,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 1289,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lipetsk Airport',
            'iata_code' => 'LPK',
            'icao_code' => 'UUOL',


            'latitude' => 52.7028,
            'longitude' => 39.5378,
            'altitude_m' => 584,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1291,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lisboa',
            'iata_code' => 'LIS',
            'icao_code' => 'LPPT',


            'latitude' => 38.781311,
            'longitude' => -9.135919,
            'altitude_m' => 374,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 1292,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lisbon Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 38.712606,
            'longitude' => -9.122483,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 1292,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lismore Airport',
            'iata_code' => 'LSY',
            'icao_code' => 'YLIS',


            'latitude' => -28.8303,
            'longitude' => 153.26,
            'altitude_m' => 35,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1293,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lista',
            'iata_code' => 'FAN',
            'icao_code' => 'ENLI',


            'latitude' => 58.099486,
            'longitude' => 6.62605,
            'altitude_m' => 29,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 710,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liuting',
            'iata_code' => 'TAO',
            'icao_code' => 'ZSQD',


            'latitude' => 36.266108,
            'longitude' => 120.374436,
            'altitude_m' => 33,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1893,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liverpool',
            'iata_code' => 'LPL',
            'icao_code' => 'EGGP',


            'latitude' => 53.333611,
            'longitude' => -2.849722,
            'altitude_m' => 80,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1296,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Liverpool Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 53.405,
            'longitude' => -2.979,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1296,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ljubljana',
            'iata_code' => 'LJU',
            'icao_code' => 'LJLJ',


            'latitude' => 46.223686,
            'longitude' => 14.457611,
            'altitude_m' => 1273,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Ljubljana',

            'city_id' => 1297,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lleida-Alguaire Airport',
            'iata_code' => 'ILD',
            'icao_code' => 'LEDA',


            'latitude' => 41.727778,
            'longitude' => .535833,
            'altitude_m' => 1148,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1299,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Locarno Airport',
            'iata_code' => 'ZJI',
            'icao_code' => 'LSZL',


            'latitude' => 46.1608,
            'longitude' => 8.87861,
            'altitude_m' => 650,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1300,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lokpriya Gopinath Bordoloi International Airport',
            'iata_code' => 'GAU',
            'icao_code' => 'VEGT',


            'latitude' => 26.106092,
            'longitude' => 91.585939,
            'altitude_m' => 162,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 879,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lolland Falster Maribo',
            'iata_code' => '',
            'icao_code' => 'EKMB',


            'latitude' => 54.699344,
            'longitude' => 11.440117,
            'altitude_m' => 16,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1393,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lompoc Airport',
            'iata_code' => 'LPC',
            'icao_code' => 'KLPC',


            'latitude' => 34.6656,
            'longitude' => -120.4675,
            'altitude_m' => 88,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1304,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London',
            'iata_code' => 'YXU',
            'icao_code' => 'CYXU',


            'latitude' => 43.033056,
            'longitude' => -81.151111,
            'altitude_m' => 912,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London - Kings Cross',
            'iata_code' => 'QQK',
            'icao_code' => '',


            'latitude' => 51.5326,
            'longitude' => .1233,
            'altitude_m' => 72,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London Euston Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.5284,
            'longitude' => -.1331,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London Heliport',
            'iata_code' => '',
            'icao_code' => 'EGLW',


            'latitude' => 51.47,
            'longitude' => -.177833,
            'altitude_m' => 18,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.9819,
            'longitude' => -81.2464,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London St Pancras',
            'iata_code' => 'STP',
            'icao_code' => '',


            'latitude' => 51.53,
            'longitude' => -.125,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'London Victoria Bus Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.494999,
            'longitude' => -.144643,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Londrina',
            'iata_code' => 'LDB',
            'icao_code' => 'SBLO',


            'latitude' => -23.333625,
            'longitude' => -51.130072,
            'altitude_m' => 1867,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1308,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lone Star Executive',
            'iata_code' => 'CXO',
            'icao_code' => 'KCXO',


            'latitude' => 30.351833,
            'longitude' => -95.414467,
            'altitude_m' => 245,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 518,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Long Island Mac Arthur',
            'iata_code' => 'ISP',
            'icao_code' => 'KISP',


            'latitude' => 40.79525,
            'longitude' => -73.100222,
            'altitude_m' => 99,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1021,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Long Lake',
            'iata_code' => 'NY9',
            'icao_code' => '',


            'latitude' => 43.9750617,
            'longitude' => -74.42044,
            'altitude_m' => 1629,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1309,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Longdongbao',
            'iata_code' => 'KWE',
            'icao_code' => 'ZUGY',


            'latitude' => 26.538522,
            'longitude' => 106.800703,
            'altitude_m' => 3736,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 875,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Longhua Airport',
            'iata_code' => '',
            'icao_code' => 'ZSSL',


            'latitude' => 31.166944,
            'longitude' => 121.453611,
            'altitude_m' => 14,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 2092,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Longvic',
            'iata_code' => 'DIJ',
            'icao_code' => 'LFSD',


            'latitude' => 47.26889,
            'longitude' => 5.09,
            'altitude_m' => 726,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 610,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Longyan Airport',
            'iata_code' => 'LCX',
            'icao_code' => '',


            'latitude' => 25.674167,
            'longitude' => 116.746389,
            'altitude_m' => 300,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1310,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Alamos Airport',
            'iata_code' => 'LAM',
            'icao_code' => 'KLAM',


            'latitude' => 35.8798019,
            'longitude' => -106.2694153,
            'altitude_m' => 7171,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1312,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Angeles Intl',
            'iata_code' => 'LAX',
            'icao_code' => 'KLAX',


            'latitude' => 33.942536,
            'longitude' => -118.408075,
            'altitude_m' => 126,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1313,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Angeles San Pedro Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 33.747198,
            'longitude' => -118.276856,
            'altitude_m' => 0,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1313,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Angeles Union Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 34.056111,
            'longitude' => -118.234167,
            'altitude_m' => 300,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1313,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Colonizadores Airport',
            'iata_code' => 'RVE',
            'icao_code' => 'SKSA',


            'latitude' => 6.916667,
            'longitude' => -71.9,
            'altitude_m' => 10,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 2067,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Los Garzones',
            'iata_code' => 'MTR',
            'icao_code' => 'SKMR',


            'latitude' => 8.823744,
            'longitude' => -75.825831,
            'altitude_m' => 36,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1498,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Losinj Airport',
            'iata_code' => 'LSZ',
            'icao_code' => 'LDLO',


            'latitude' => 44.3357,
            'longitude' => 14.2335,
            'altitude_m' => 154,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => '\N',

            'city_id' => 1367,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lost Nation Municipal Airport',
            'iata_code' => 'LNN',
            'icao_code' => 'KLNN',


            'latitude' => 41.6840278,
            'longitude' => -81.38975,
            'altitude_m' => 626,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2483,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Loudes',
            'iata_code' => 'LPY',
            'icao_code' => 'LFHP',


            'latitude' => 45.080689,
            'longitude' => 3.762889,
            'altitude_m' => 2731,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1253,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Louis Armstrong New Orleans Intl',
            'iata_code' => 'MSY',
            'icao_code' => 'KMSY',


            'latitude' => 29.993389,
            'longitude' => -90.258028,
            'altitude_m' => 4,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1593,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lourdes',
            'iata_code' => 'LDE',
            'icao_code' => 'LFBT',


            'latitude' => 43.178675,
            'longitude' => -.006439,
            'altitude_m' => 1260,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2226,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lovell Fld',
            'iata_code' => 'CHA',
            'icao_code' => 'KCHA',


            'latitude' => 35.035278,
            'longitude' => -85.203808,
            'altitude_m' => 683,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 453,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luanda 4 De Fevereiro',
            'iata_code' => 'LAD',
            'icao_code' => 'FNLU',


            'latitude' => -8.858375,
            'longitude' => 13.231178,
            'altitude_m' => 243,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Luanda',

            'city_id' => 1317,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lubbock Preston Smith Intl',
            'iata_code' => 'LBB',
            'icao_code' => 'KLBB',


            'latitude' => 33.663639,
            'longitude' => -101.822778,
            'altitude_m' => 3282,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1318,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lublin',
            'iata_code' => 'LUZ',
            'icao_code' => 'EPLB',


            'latitude' => 51.239333,
            'longitude' => 22.714083,
            'altitude_m' => 203,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1319,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lucknow',
            'iata_code' => 'LKO',
            'icao_code' => 'VILK',


            'latitude' => 26.760594,
            'longitude' => 80.889339,
            'altitude_m' => 410,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1321,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lugano',
            'iata_code' => 'LUG',
            'icao_code' => 'LSZA',


            'latitude' => 46.004275,
            'longitude' => 8.910578,
            'altitude_m' => 915,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1323,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luis Munoz Marin Intl',
            'iata_code' => 'SJU',
            'icao_code' => 'TJSJ',


            'latitude' => 18.439417,
            'longitude' => -66.001833,
            'altitude_m' => 9,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 2027,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lukou',
            'iata_code' => 'NKG',
            'icao_code' => 'ZSNJ',


            'latitude' => 31.742042,
            'longitude' => 118.862025,
            'altitude_m' => 49,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1561,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luogang',
            'iata_code' => 'HFE',
            'icao_code' => 'ZSOF',


            'latitude' => 31.780019,
            'longitude' => 117.298436,
            'altitude_m' => 108,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 933,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luoyang Airport',
            'iata_code' => 'LYA',
            'icao_code' => 'ZHLY',


            'latitude' => 34.41,
            'longitude' => 112.28,
            'altitude_m' => 210,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1326,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luray Caverns Airport',
            'iata_code' => '',
            'icao_code' => 'KLUA',


            'latitude' => 38.666944,
            'longitude' => -78.500556,
            'altitude_m' => 903,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1327,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lusaka Intl',
            'iata_code' => 'LUN',
            'icao_code' => 'FLLS',


            'latitude' => -15.330817,
            'longitude' => 28.452628,
            'altitude_m' => 3779,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Lusaka',

            'city_id' => 1328,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luton',
            'iata_code' => 'LTN',
            'icao_code' => 'EGGW',


            'latitude' => 51.874722,
            'longitude' => -.368333,
            'altitude_m' => 526,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lutsk',
            'iata_code' => 'UKC',
            'icao_code' => 'UKLC',


            'latitude' => 50.6833,
            'longitude' => 25.4833,
            'altitude_m' => 774,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1329,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luxor Intl',
            'iata_code' => 'LXR',
            'icao_code' => 'HELX',


            'latitude' => 25.671028,
            'longitude' => 32.706583,
            'altitude_m' => 294,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Cairo',

            'city_id' => 1330,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Luzhou Airport',
            'iata_code' => 'LZO',
            'icao_code' => 'ZULZ',


            'latitude' => 28.8522,
            'longitude' => 105.393,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1331,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lycksele',
            'iata_code' => 'LYC',
            'icao_code' => 'ESNL',


            'latitude' => 64.548322,
            'longitude' => 18.716219,
            'altitude_m' => 705,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1333,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lynden Airport',
            'iata_code' => '38W',
            'icao_code' => '',


            'latitude' => 48.9558961,
            'longitude' => -122.4581183,
            'altitude_m' => 106,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1334,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lyneham',
            'iata_code' => 'LYE',
            'icao_code' => 'EGDL',


            'latitude' => 51.505144,
            'longitude' => -1.993428,
            'altitude_m' => 513,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1335,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Lyon Part-Dieu Railway',
            'iata_code' => 'XYD',
            'icao_code' => '',


            'latitude' => 46,
            'longitude' => 5,
            'altitude_m' => 821,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1336,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'M R Stefanik',
            'iata_code' => 'BTS',
            'icao_code' => 'LZIB',


            'latitude' => 48.170167,
            'longitude' => 17.212667,
            'altitude_m' => 436,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bratislava',

            'city_id' => 311,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'MOW',
            'iata_code' => 'MOW',
            'icao_code' => '',


            'latitude' => 55.7557,
            'longitude' => 37.6176,
            'altitude_m' => 0,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maastricht',
            'iata_code' => 'MST',
            'icao_code' => 'EHBK',


            'latitude' => 50.911658,
            'longitude' => 5.770144,
            'altitude_m' => 375,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1337,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Macapa',
            'iata_code' => 'MCP',
            'icao_code' => 'SBMQ',


            'latitude' => .050664,
            'longitude' => -51.072178,
            'altitude_m' => 56,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 1339,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Macau Ferry Pier',
            'iata_code' => 'XZM',
            'icao_code' => '',


            'latitude' => 22.197075,
            'longitude' => 113.558911,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Macau',

            'city_id' => 1340,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Macau Intl',
            'iata_code' => 'MFM',
            'icao_code' => 'VMMC',


            'latitude' => 22.149556,
            'longitude' => 113.591558,
            'altitude_m' => 20,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Macau',

            'city_id' => 1340,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Macdill Afb',
            'iata_code' => 'MCF',
            'icao_code' => 'KMCF',


            'latitude' => 27.849339,
            'longitude' => -82.521214,
            'altitude_m' => 14,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2216,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mackay',
            'iata_code' => 'MKY',
            'icao_code' => 'YBMK',


            'latitude' => -21.171667,
            'longitude' => 149.179722,
            'altitude_m' => 19,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 1343,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mackinac Island Airport',
            'iata_code' => 'MCD',
            'icao_code' => '',


            'latitude' => 45.8649344,
            'longitude' => -84.637344,
            'altitude_m' => 740,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1344,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Madeira',
            'iata_code' => 'FNC',
            'icao_code' => 'LPMA',


            'latitude' => 32.697889,
            'longitude' => -16.774453,
            'altitude_m' => 192,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 778,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Madera Municipal Airport',
            'iata_code' => 'MAE',
            'icao_code' => 'KMAE',


            'latitude' => 36.9886111,
            'longitude' => -120.1124444,
            'altitude_m' => 255,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1346,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Madurai',
            'iata_code' => 'IXM',
            'icao_code' => 'VOMD',


            'latitude' => 9.834508,
            'longitude' => 78.093378,
            'altitude_m' => 459,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1349,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Magan',
            'iata_code' => '',
            'icao_code' => 'UEMM',


            'latitude' => 62.0626,
            'longitude' => 129.3334,
            'altitude_m' => 577,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yakutsk',

            'city_id' => 2514,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Magas',
            'iata_code' => '%u0',
            'icao_code' => '%u04',


            'latitude' => 43.323815,
            'longitude' => 45.017761,
            'altitude_m' => 1060,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1574,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Magdeburg',
            'iata_code' => 'ZMG',
            'icao_code' => 'EDBM',


            'latitude' => 52.073658,
            'longitude' => 11.626467,
            'altitude_m' => 268,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1352,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Magenta',
            'iata_code' => 'GEA',
            'icao_code' => 'NWWM',


            'latitude' => -22.258278,
            'longitude' => 166.472806,
            'altitude_m' => 10,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Pacific/Noumea',

            'city_id' => 1632,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Magic Valley Regional Airport',
            'iata_code' => 'TWF',
            'icao_code' => 'KTWF',


            'latitude' => 42.481803,
            'longitude' => -114.487733,
            'altitude_m' => 4151,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 2332,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maiduguri',
            'iata_code' => 'MIU',
            'icao_code' => 'DNMA',


            'latitude' => 11.855347,
            'longitude' => 13.08095,
            'altitude_m' => 1099,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1355,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Main Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.9,
            'longitude' => 116.421,
            'altitude_m' => 130,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 225,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mainz',
            'iata_code' => 'QMZ',
            'icao_code' => '',


            'latitude' => 50.00829,
            'longitude' => 8.27356,
            'altitude_m' => 360,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1356,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maitland Airport',
            'iata_code' => 'MTL',
            'icao_code' => 'YMND',


            'latitude' => -32.7033,
            'longitude' => 151.488,
            'altitude_m' => 75,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1357,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Major Brigadeiro Doorgal Borges',
            'iata_code' => '',
            'icao_code' => 'SBBQ',


            'latitude' => -21.267167,
            'longitude' => -43.761056,
            'altitude_m' => 3657,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 188,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Major Brigadeiro Trompowsky',
            'iata_code' => 'VAG',
            'icao_code' => 'SBVG',


            'latitude' => -21.590067,
            'longitude' => -45.473342,
            'altitude_m' => 3028,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2386,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Makedonia',
            'iata_code' => 'SKG',
            'icao_code' => 'LGTS',


            'latitude' => 40.519725,
            'longitude' => 22.97095,
            'altitude_m' => 22,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 2256,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Makurdi',
            'iata_code' => 'MDI',
            'icao_code' => 'DNMK',


            'latitude' => 7.703883,
            'longitude' => 8.613939,
            'altitude_m' => 371,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1359,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malacca',
            'iata_code' => 'MKZ',
            'icao_code' => 'WMKM',


            'latitude' => 2.263361,
            'longitude' => 102.251553,
            'altitude_m' => 35,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1360,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malacky',
            'iata_code' => '',
            'icao_code' => 'LZMC',


            'latitude' => 48.402028,
            'longitude' => 17.118389,
            'altitude_m' => 679,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bratislava',

            'city_id' => 1361,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malad City',
            'iata_code' => 'MLD',
            'icao_code' => 'KMLD',


            'latitude' => 42.17,
            'longitude' => -112.289,
            'altitude_m' => 4503,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1362,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malaga',
            'iata_code' => 'AGP',
            'icao_code' => 'LEMG',


            'latitude' => 36.6749,
            'longitude' => -4.499106,
            'altitude_m' => 52,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1363,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malaga Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 36.702989,
            'longitude' => -4.41395,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1363,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Malbork',
            'iata_code' => '',
            'icao_code' => 'EPMB',


            'latitude' => 54.026944,
            'longitude' => 19.134167,
            'altitude_m' => 16,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1366,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mallam Aminu Intl',
            'iata_code' => 'KAN',
            'icao_code' => 'DNKN',


            'latitude' => 12.047589,
            'longitude' => 8.524622,
            'altitude_m' => 1562,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1085,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mammoth Yosemite Airport',
            'iata_code' => 'MMH',
            'icao_code' => 'KMMH',


            'latitude' => 37.624049,
            'longitude' => -118.837772,
            'altitude_m' => 7128,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1368,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mammy Yoko Heliport',
            'iata_code' => 'JMY',
            'icao_code' => '',


            'latitude' => 8.490278,
            'longitude' => -13.289722,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Freetown',

            'city_id' => 767,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Managua Intl',
            'iata_code' => 'MGA',
            'icao_code' => 'MNMG',


            'latitude' => 12.141494,
            'longitude' => -86.168178,
            'altitude_m' => 194,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Managua',

            'city_id' => 1370,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manas',
            'iata_code' => 'FRU',
            'icao_code' => 'UAFM',


            'latitude' => 43.061306,
            'longitude' => 74.477556,
            'altitude_m' => 2058,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Bishkek',

            'city_id' => 266,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manassas',
            'iata_code' => 'MNZ',
            'icao_code' => 'KHEF',


            'latitude' => 38.721389,
            'longitude' => -77.515556,
            'altitude_m' => 192,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1371,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manchester',
            'iata_code' => 'MAN',
            'icao_code' => 'EGCC',


            'latitude' => 53.353744,
            'longitude' => -2.27495,
            'altitude_m' => 257,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1373,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manchester Picadilly Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 53.477,
            'longitude' => -2.23,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1373,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mandelieu',
            'iata_code' => 'CEQ',
            'icao_code' => 'LFMD',


            'latitude' => 43.54205,
            'longitude' => 6.953478,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 394,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manistee County-Blacker Airport',
            'iata_code' => 'MBL',
            'icao_code' => 'KMBL',


            'latitude' => 44.2725,
            'longitude' => -86.246944,
            'altitude_m' => 621,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1375,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Manitouwadge',
            'iata_code' => 'YMG',
            'icao_code' => 'CYMG',


            'latitude' => 49.083889,
            'longitude' => -85.860556,
            'altitude_m' => 1198,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1376,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maniwaki',
            'iata_code' => 'YMW',
            'icao_code' => 'CYMW',


            'latitude' => 46.272778,
            'longitude' => -75.990556,
            'altitude_m' => 656,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1377,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mannheim City',
            'iata_code' => 'MHG',
            'icao_code' => 'EDFM',


            'latitude' => 49.472706,
            'longitude' => 8.514264,
            'altitude_m' => 309,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1379,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mannheim HBF',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.471,
            'longitude' => 8.469858,
            'altitude_m' => 1000,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1379,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mannheim Railway',
            'iata_code' => 'ZMA',
            'icao_code' => '',


            'latitude' => 49.479633,
            'longitude' => 8.469858,
            'altitude_m' => 200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1379,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maputo',
            'iata_code' => 'MPM',
            'icao_code' => 'FQMA',


            'latitude' => -25.920836,
            'longitude' => 32.572606,
            'altitude_m' => 145,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Maputo',

            'city_id' => 1384,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maquehue',
            'iata_code' => 'ZCO',
            'icao_code' => 'SCTC',


            'latitude' => -38.766819,
            'longitude' => -72.637097,
            'altitude_m' => 304,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 2244,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maraba',
            'iata_code' => 'MAB',
            'icao_code' => 'SBMA',


            'latitude' => -5.368589,
            'longitude' => -49.138025,
            'altitude_m' => 357,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Boa_Vista',

            'city_id' => 1385,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marana Regional',
            'iata_code' => 'AVW',
            'icao_code' => 'KAVQ',


            'latitude' => 32.409556,
            'longitude' => -111.218388,
            'altitude_m' => 2031,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 2315,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marathon',
            'iata_code' => 'YSP',
            'icao_code' => 'CYSP',


            'latitude' => 48.755278,
            'longitude' => -86.344444,
            'altitude_m' => 1035,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1389,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marcillac',
            'iata_code' => 'RDZ',
            'icao_code' => 'LFCR',


            'latitude' => 44.407869,
            'longitude' => 2.482672,
            'altitude_m' => 1910,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1971,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marcos Juarez',
            'iata_code' => '',
            'icao_code' => 'SAOM',


            'latitude' => -32.683639,
            'longitude' => -62.157792,
            'altitude_m' => 361,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1390,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mardin Airport',
            'iata_code' => 'MQM',
            'icao_code' => 'LTCR',


            'latitude' => 37.2233,
            'longitude' => 40.6317,
            'altitude_m' => 1729,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1391,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marechal Cunha Machado Intl',
            'iata_code' => 'SLZ',
            'icao_code' => 'SBSL',


            'latitude' => -2.585361,
            'longitude' => -44.234139,
            'altitude_m' => 178,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Fortaleza',

            'city_id' => 2059,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marechal Rondon',
            'iata_code' => 'CGB',
            'icao_code' => 'SBCY',


            'latitude' => -15.652931,
            'longitude' => -56.116719,
            'altitude_m' => 617,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Campo_Grande',

            'city_id' => 559,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Margate',
            'iata_code' => 'MGH',
            'icao_code' => 'FAMG',


            'latitude' => -30.857408,
            'longitude' => 30.343019,
            'altitude_m' => 495,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1392,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maria Dolores',
            'iata_code' => 'LSQ',
            'icao_code' => 'SCGE',


            'latitude' => -37.401731,
            'longitude' => -72.425444,
            'altitude_m' => 374,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Santiago',

            'city_id' => 1314,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mariano Moreno',
            'iata_code' => '',
            'icao_code' => 'SADJ',


            'latitude' => -34.56065,
            'longitude' => -58.789564,
            'altitude_m' => 105,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1064,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maribor',
            'iata_code' => 'MBX',
            'icao_code' => 'LJMB',


            'latitude' => 46.479861,
            'longitude' => 15.686131,
            'altitude_m' => 876,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Ljubljana',

            'city_id' => 1394,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mariehamn',
            'iata_code' => 'MHQ',
            'icao_code' => 'EFMA',


            'latitude' => 60.122203,
            'longitude' => 19.898156,
            'altitude_m' => 17,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Mariehamn',

            'city_id' => 1395,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mario Ribeiro',
            'iata_code' => 'MOC',
            'icao_code' => 'SBMK',


            'latitude' => -16.706925,
            'longitude' => -43.8189,
            'altitude_m' => 2191,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1500,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'MariposaYosemite',
            'iata_code' => 'MPI',
            'icao_code' => 'KMPI',


            'latitude' => 37.3039,
            'longitude' => -120.0222,
            'altitude_m' => 2454,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1397,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mariquita',
            'iata_code' => '',
            'icao_code' => 'SKQU',


            'latitude' => 5.212556,
            'longitude' => -74.883647,
            'altitude_m' => 1531,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1398,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mariscal Lamar',
            'iata_code' => 'CUE',
            'icao_code' => 'SECU',


            'latitude' => -2.889467,
            'longitude' => -78.984397,
            'altitude_m' => 8306,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guayaquil',

            'city_id' => 556,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Markham',
            'iata_code' => 'NU8',
            'icao_code' => 'CNU8',


            'latitude' => 43.935278,
            'longitude' => -79.263333,
            'altitude_m' => 807,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1399,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Markovo Airport',
            'iata_code' => 'KVM',
            'icao_code' => 'UHMO',


            'latitude' => 64.665278,
            'longitude' => 170.414167,
            'altitude_m' => 89,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Magadan',

            'city_id' => 1400,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marktoberdorf BF',
            'iata_code' => 'OAL',
            'icao_code' => 'MARK',


            'latitude' => 47.78,
            'longitude' => 10.627,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1401,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marktoberdorf Schule',
            'iata_code' => 'MOS',
            'icao_code' => 'MARO',


            'latitude' => 47.777,
            'longitude' => 10.623,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1401,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marl-Loemuehle Airport',
            'iata_code' => '',
            'icao_code' => 'EDLM',


            'latitude' => 51.6472,
            'longitude' => 7.16333,
            'altitude_m' => 240,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1922,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marseille Cruise Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.343969,
            'longitude' => 5.333025,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1404,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marshall Aaf',
            'iata_code' => 'FRI',
            'icao_code' => 'KFRI',


            'latitude' => 39.055275,
            'longitude' => -96.764453,
            'altitude_m' => 1063,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 750,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Marte',
            'iata_code' => '',
            'icao_code' => 'SBMT',


            'latitude' => -23.509119,
            'longitude' => -46.637753,
            'altitude_m' => 2368,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2060,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Martz Trailways Bus Terminal',
            'iata_code' => '',
            'icao_code' => 'WKBR',


            'latitude' => 41.243958,
            'longitude' => -75.882365,
            'altitude_m' => 525,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2481,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maryborough Airport',
            'iata_code' => 'MBH',
            'icao_code' => 'YMYB',


            'latitude' => -25.5133,
            'longitude' => 152.715,
            'altitude_m' => 38,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 1406,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Masroor',
            'iata_code' => '',
            'icao_code' => 'OPMR',


            'latitude' => 24.893564,
            'longitude' => 66.938753,
            'altitude_m' => 35,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1090,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Masset Airport',
            'iata_code' => 'ZMT',
            'icao_code' => 'CZMT',


            'latitude' => 54.0275,
            'longitude' => -132.125,
            'altitude_m' => 25,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 1408,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Masterton',
            'iata_code' => 'MRO',
            'icao_code' => 'NZMS',


            'latitude' => -40.973333,
            'longitude' => 175.633611,
            'altitude_m' => 364,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1409,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Masvingo Intl',
            'iata_code' => 'MVZ',
            'icao_code' => 'FVMV',


            'latitude' => -20.055333,
            'longitude' => 30.859111,
            'altitude_m' => 3595,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Harare',

            'city_id' => 1410,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Matecana',
            'iata_code' => 'PEI',
            'icao_code' => 'SKPE',


            'latitude' => 4.812675,
            'longitude' => -75.739519,
            'altitude_m' => 4416,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1775,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Matsapha',
            'iata_code' => 'MTS',
            'icao_code' => 'FDMS',


            'latitude' => -26.529022,
            'longitude' => 31.307519,
            'altitude_m' => 2075,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Mbabane',

            'city_id' => 1383,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Matsumoto',
            'iata_code' => 'MMJ',
            'icao_code' => 'RJAF',


            'latitude' => 36.166758,
            'longitude' => 137.922669,
            'altitude_m' => 2182,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1412,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Matsushima',
            'iata_code' => '',
            'icao_code' => 'RJST',


            'latitude' => 38.404919,
            'longitude' => 141.219572,
            'altitude_m' => 7,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1413,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Matsuyama',
            'iata_code' => 'MYJ',
            'icao_code' => 'RJOM',


            'latitude' => 33.827222,
            'longitude' => 132.699722,
            'altitude_m' => 25,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1414,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mattoon Amtrak',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 39.4828,
            'longitude' => -88.3759,
            'altitude_m' => 733,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1416,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Maturin',
            'iata_code' => 'MUN',
            'icao_code' => 'SVMT',


            'latitude' => 9.749067,
            'longitude' => -63.1534,
            'altitude_m' => 224,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 1417,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mauterndorf Airport',
            'iata_code' => '',
            'icao_code' => 'LOSM',


            'latitude' => 47.131667,
            'longitude' => 13.695278,
            'altitude_m' => 3629,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 1419,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mayor General FAP Armando Revoredo Iglesias Airport',
            'iata_code' => 'CJA',
            'icao_code' => 'SPJR',


            'latitude' => -7.139183,
            'longitude' => -78.4894,
            'altitude_m' => 8781,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Lima',

            'city_id' => 366,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mazamet',
            'iata_code' => 'DCM',
            'icao_code' => 'LFCK',


            'latitude' => 43.55625,
            'longitude' => 2.289183,
            'altitude_m' => 788,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 420,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mc Chord Afb',
            'iata_code' => 'TCM',
            'icao_code' => 'KTCM',


            'latitude' => 47.137678,
            'longitude' => -122.476475,
            'altitude_m' => 322,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2206,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mc Connell Afb',
            'iata_code' => 'IAB',
            'icao_code' => 'KIAB',


            'latitude' => 37.621853,
            'longitude' => -97.268192,
            'altitude_m' => 1371,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2476,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'McCall Municipal Airport',
            'iata_code' => 'MYL',
            'icao_code' => 'KMYL',


            'latitude' => 44.889722,
            'longitude' => -116.101389,
            'altitude_m' => 5021,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1422,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'McCook Regional Airport',
            'iata_code' => 'MCK',
            'icao_code' => 'KMCK',


            'latitude' => 40.206389,
            'longitude' => -100.592222,
            'altitude_m' => 2583,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1423,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meadow Lake',
            'iata_code' => 'YLJ',
            'icao_code' => 'CYLJ',


            'latitude' => 54.125278,
            'longitude' => -108.522778,
            'altitude_m' => 1576,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 1424,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Medicine Hat',
            'iata_code' => 'YXH',
            'icao_code' => 'CYXH',


            'latitude' => 50.01889,
            'longitude' => -110.720833,
            'altitude_m' => 2352,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1429,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Medis',
            'iata_code' => 'RYN',
            'icao_code' => 'LFCY',


            'latitude' => 45.628056,
            'longitude' => -.9725,
            'altitude_m' => 72,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1988,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mediterranee',
            'iata_code' => 'MPL',
            'icao_code' => 'LFMT',


            'latitude' => 43.576194,
            'longitude' => 3.963014,
            'altitude_m' => 17,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1504,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Megas Alexandros Intl',
            'iata_code' => 'KVA',
            'icao_code' => 'LGKV',


            'latitude' => 40.913306,
            'longitude' => 24.619223,
            'altitude_m' => 18,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Athens',

            'city_id' => 1107,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Megeve Airport',
            'iata_code' => 'MVV',
            'icao_code' => 'LFHM',


            'latitude' => 45.8208,
            'longitude' => 6.65222,
            'altitude_m' => 4823,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2395,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meigs Field',
            'iata_code' => 'CGX',
            'icao_code' => 'KCGX',


            'latitude' => 41.860278,
            'longitude' => -87.609722,
            'altitude_m' => 585,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meilan',
            'iata_code' => 'HAK',
            'icao_code' => 'ZJHK',


            'latitude' => 19.934856,
            'longitude' => 110.458961,
            'altitude_m' => 75,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 887,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meinerzhagen',
            'iata_code' => '',
            'icao_code' => 'EDKZ',


            'latitude' => 51.099445,
            'longitude' => 7.601944,
            'altitude_m' => 1548,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1430,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meiringen',
            'iata_code' => '',
            'icao_code' => 'LSMM',


            'latitude' => 46.743333,
            'longitude' => 8.11,
            'altitude_m' => 1895,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1431,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mejametalana',
            'iata_code' => '',
            'icao_code' => 'FXMU',


            'latitude' => -29.304053,
            'longitude' => 27.503458,
            'altitude_m' => 5105,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Maseru',

            'city_id' => 1407,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Melbourne Essendon',
            'iata_code' => 'MEB',
            'icao_code' => 'YMEN',


            'latitude' => -37.728056,
            'longitude' => 144.901944,
            'altitude_m' => 282,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 1433,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Melbourne Intl',
            'iata_code' => 'MEL',
            'icao_code' => 'YMML',


            'latitude' => -37.673333,
            'longitude' => 144.843333,
            'altitude_m' => 434,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 1433,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Melbourne Moorabbin',
            'iata_code' => 'MBW',
            'icao_code' => 'YMMB',


            'latitude' => -37.975833,
            'longitude' => 145.102222,
            'altitude_m' => 50,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 1433,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Melbourne Southern Cross Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -37.8181602,
            'longitude' => 144.9533883,
            'altitude_m' => 111,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 1433,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Melilla',
            'iata_code' => 'MLN',
            'icao_code' => 'GEML',


            'latitude' => 35.279817,
            'longitude' => -2.956256,
            'altitude_m' => 156,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1434,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Memmingen Rail Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 47.9878,
            'longitude' => 10.1811,
            'altitude_m' => 2077,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1436,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Merced Municipal Airport',
            'iata_code' => 'MCE',
            'icao_code' => 'KMCE',


            'latitude' => 37.284722,
            'longitude' => -120.513889,
            'altitude_m' => 156,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1440,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mercedita',
            'iata_code' => 'PSE',
            'icao_code' => 'TJPS',


            'latitude' => 18.008306,
            'longitude' => -66.563028,
            'altitude_m' => 29,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Puerto_Rico',

            'city_id' => 1821,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meribel Airport',
            'iata_code' => 'MFX',
            'icao_code' => 'LFKX',


            'latitude' => 45.4069,
            'longitude' => 6.58056,
            'altitude_m' => 5636,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 25,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Merignac',
            'iata_code' => 'BOD',
            'icao_code' => 'LFBD',


            'latitude' => 44.828335,
            'longitude' => -.715556,
            'altitude_m' => 162,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 291,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Merrill Fld',
            'iata_code' => 'MRI',
            'icao_code' => 'PAMR',


            'latitude' => 61.213544,
            'longitude' => -149.844447,
            'altitude_m' => 137,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 80,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Merritt Island Airport',
            'iata_code' => 'COI',
            'icao_code' => '',


            'latitude' => 28.3416111,
            'longitude' => -80.6854722,
            'altitude_m' => 6,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 499,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Merzifon',
            'iata_code' => 'MZH',
            'icao_code' => 'LTAP',


            'latitude' => 40.829375,
            'longitude' => 35.521992,
            'altitude_m' => 1758,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1444,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Messina',
            'iata_code' => 'MEZ',
            'icao_code' => 'FAMS',


            'latitude' => -25.704458,
            'longitude' => 26.908978,
            'altitude_m' => 4251,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1539,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Metro-North Station',
            'iata_code' => '',
            'icao_code' => 'PKPS',


            'latitude' => 41.706516,
            'longitude' => -73.937774,
            'altitude_m' => 180,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1858,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Metz Nancy Lorraine',
            'iata_code' => 'ETZ',
            'icao_code' => 'LFJL',


            'latitude' => 48.982142,
            'longitude' => 6.251319,
            'altitude_m' => 870,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1445,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meucon',
            'iata_code' => 'VNE',
            'icao_code' => 'LFRV',


            'latitude' => 47.723303,
            'longitude' => -2.718561,
            'altitude_m' => 440,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 2382,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mexia - Limestone County Airport',
            'iata_code' => 'LXY',
            'icao_code' => '',


            'latitude' => 31.6411783,
            'longitude' => -96.5144594,
            'altitude_m' => 544,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1446,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meyenheim',
            'iata_code' => '',
            'icao_code' => 'LFSC',


            'latitude' => 47.921978,
            'longitude' => 7.399669,
            'altitude_m' => 693,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 507,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Meythet',
            'iata_code' => 'NCY',
            'icao_code' => 'LFLP',


            'latitude' => 45.929233,
            'longitude' => 6.098764,
            'altitude_m' => 1521,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 93,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mianyang Airport',
            'iata_code' => 'MIG',
            'icao_code' => 'ZUMY',


            'latitude' => 31.4281,
            'longitude' => 104.741,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1449,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Michigan City Municipal Airport',
            'iata_code' => 'MGC',
            'icao_code' => 'KMGC',


            'latitude' => 41.7033,
            'longitude' => -86.8211,
            'altitude_m' => 500,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1450,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Middelburg',
            'iata_code' => '',
            'icao_code' => 'FAMB',


            'latitude' => -25.684775,
            'longitude' => 29.440158,
            'altitude_m' => 4886,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1451,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Midden-Zeeland Airport',
            'iata_code' => '',
            'icao_code' => 'EHMZ',


            'latitude' => 51.5122,
            'longitude' => 3.73111,
            'altitude_m' => 6,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Amsterdam',

            'city_id' => 1452,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mielec',
            'iata_code' => '',
            'icao_code' => 'EPML',


            'latitude' => 50.322275,
            'longitude' => 21.462131,
            'altitude_m' => 548,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1454,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Migalovo',
            'iata_code' => 'KLD',
            'icao_code' => 'UUEM',


            'latitude' => 56.824736,
            'longitude' => 35.757678,
            'altitude_m' => 469,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 2331,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mihail Kogalniceanu',
            'iata_code' => 'CND',
            'icao_code' => 'LRCK',


            'latitude' => 44.362222,
            'longitude' => 28.488333,
            'altitude_m' => 353,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 519,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mildenhall',
            'iata_code' => 'MHZ',
            'icao_code' => 'EGUN',


            'latitude' => 52.361933,
            'longitude' => .486406,
            'altitude_m' => 33,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1456,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mildura Airport',
            'iata_code' => 'MQL',
            'icao_code' => 'YMIA',


            'latitude' => -34.2292,
            'longitude' => 142.086,
            'altitude_m' => 167,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Hobart',

            'city_id' => 1457,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Millbrae Intermodal Terminal',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 37.6002772,
            'longitude' => -122.3866667,
            'altitude_m' => 15,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2032,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Millinocket Muni',
            'iata_code' => 'MLT',
            'icao_code' => 'KMLT',


            'latitude' => 45.647836,
            'longitude' => -68.685561,
            'altitude_m' => 408,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1460,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Milwaukee Airport Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.940556,
            'longitude' => -87.924722,
            'altitude_m' => 730,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1461,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mimizan',
            'iata_code' => '',
            'icao_code' => 'LFCZ',


            'latitude' => 44.146111,
            'longitude' => -1.174444,
            'altitude_m' => 164,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1462,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Minangkabau',
            'iata_code' => 'PDG',
            'icao_code' => 'WIPT',


            'latitude' => -.874989,
            'longitude' => 100.351881,
            'altitude_m' => 9,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 1711,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Minatitlan',
            'iata_code' => 'MTT',
            'icao_code' => 'MMMT',


            'latitude' => 18.103419,
            'longitude' => -94.580681,
            'altitude_m' => 36,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1463,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mindelheim Mattsies',
            'iata_code' => '',
            'icao_code' => 'EDMN',


            'latitude' => 48.108833,
            'longitude' => 10.524333,
            'altitude_m' => 1857,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1464,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mineral Wells',
            'iata_code' => 'MWL',
            'icao_code' => 'KMWL',


            'latitude' => 32.781606,
            'longitude' => -98.060175,
            'altitude_m' => 974,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1465,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mineralnyye Vody',
            'iata_code' => 'MRV',
            'icao_code' => 'URMM',


            'latitude' => 44.225072,
            'longitude' => 43.081889,
            'altitude_m' => 1054,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1466,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ministro Pistarini',
            'iata_code' => 'EZE',
            'icao_code' => 'SAEZ',


            'latitude' => -34.822222,
            'longitude' => -58.535833,
            'altitude_m' => 67,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 343,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ministro Victor Konder Intl',
            'iata_code' => 'NVT',
            'icao_code' => 'SBNF',


            'latitude' => -26.879999,
            'longitude' => -48.65139,
            'altitude_m' => 18,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 1572,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Minna New',
            'iata_code' => 'MXJ',
            'icao_code' => 'DNMN',


            'latitude' => 9.652172,
            'longitude' => 6.462256,
            'altitude_m' => 834,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1467,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Minsk 1',
            'iata_code' => 'MHP',
            'icao_code' => 'UMMM',


            'latitude' => 53.864472,
            'longitude' => 27.539683,
            'altitude_m' => 748,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Minsk',

            'city_id' => 1468,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Minto Airport',
            'iata_code' => 'MNT',
            'icao_code' => '',


            'latitude' => 65.143611,
            'longitude' => -149.37,
            'altitude_m' => 460,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1469,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Miramar Mcas',
            'iata_code' => 'NKX',
            'icao_code' => 'KNKX',


            'latitude' => 32.867694,
            'longitude' => -117.14175,
            'altitude_m' => 478,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1470,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mirecourt',
            'iata_code' => 'EPL',
            'icao_code' => 'LFSG',


            'latitude' => 48.324961,
            'longitude' => 6.069983,
            'altitude_m' => 1084,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 684,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Miri',
            'iata_code' => 'MYY',
            'icao_code' => 'WBGR',


            'latitude' => 4.322014,
            'longitude' => 113.986806,
            'altitude_m' => 59,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Kuala_Lumpur',

            'city_id' => 1471,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Miroslawiec',
            'iata_code' => '',
            'icao_code' => 'EPMI',


            'latitude' => 53.395072,
            'longitude' => 16.082814,
            'altitude_m' => 459,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1472,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Misawa Ab',
            'iata_code' => 'MSJ',
            'icao_code' => 'RJSM',


            'latitude' => 40.703222,
            'longitude' => 141.368364,
            'altitude_m' => 119,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1473,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Missoula Intl',
            'iata_code' => 'MSO',
            'icao_code' => 'KMSO',


            'latitude' => 46.916306,
            'longitude' => -114.090556,
            'altitude_m' => 3205,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 1474,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mitiga Airport',
            'iata_code' => 'MJI',
            'icao_code' => 'HLLM',


            'latitude' => 32.8941,
            'longitude' => 13.276,
            'altitude_m' => 36,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Tripoli',

            'city_id' => 2308,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Miyako',
            'iata_code' => 'MMY',
            'icao_code' => 'ROMY',


            'latitude' => 24.782833,
            'longitude' => 125.295111,
            'altitude_m' => 150,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1475,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Miyazaki',
            'iata_code' => 'KMI',
            'icao_code' => 'RJFM',


            'latitude' => 31.877222,
            'longitude' => 131.448611,
            'altitude_m' => 20,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1476,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mkuzi',
            'iata_code' => '',
            'icao_code' => 'FAMU',


            'latitude' => -27.626086,
            'longitude' => 32.044275,
            'altitude_m' => 400,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1477,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mnichovo Hradiste',
            'iata_code' => '',
            'icao_code' => 'LKMH',


            'latitude' => 50.540211,
            'longitude' => 15.006592,
            'altitude_m' => 800,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1478,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mobile',
            'iata_code' => '',
            'icao_code' => '1AZ0',


            'latitude' => 33.111944,
            'longitude' => -112.269166,
            'altitude_m' => 1261,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 1481,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mobile Downtown',
            'iata_code' => 'BFM',
            'icao_code' => 'KBFM',


            'latitude' => 30.626783,
            'longitude' => -88.068092,
            'altitude_m' => 26,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1481,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mobile Rgnl',
            'iata_code' => 'MOB',
            'icao_code' => 'KMOB',


            'latitude' => 30.691231,
            'longitude' => -88.242814,
            'altitude_m' => 219,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1481,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Modesto City Co Harry Sham',
            'iata_code' => 'MOD',
            'icao_code' => 'KMOD',


            'latitude' => 37.625817,
            'longitude' => -120.954422,
            'altitude_m' => 97,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1482,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mogilev Airport',
            'iata_code' => 'MVQ',
            'icao_code' => 'UMOO',


            'latitude' => 53.9549,
            'longitude' => 30.0951,
            'altitude_m' => 637,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Minsk',

            'city_id' => 1484,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mohamed Boudiaf Intl',
            'iata_code' => 'CZL',
            'icao_code' => 'DABC',


            'latitude' => 36.276028,
            'longitude' => 6.620386,
            'altitude_m' => 2265,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 520,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mohammed V Intl',
            'iata_code' => 'CMN',
            'icao_code' => 'GMMN',


            'latitude' => 33.367467,
            'longitude' => -7.589967,
            'altitude_m' => 656,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 413,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mojave',
            'iata_code' => 'MHV',
            'icao_code' => 'KMHV',


            'latitude' => 35.059364,
            'longitude' => -118.151856,
            'altitude_m' => 2791,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1485,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mollis',
            'iata_code' => '',
            'icao_code' => 'LSMF',


            'latitude' => 47.078872,
            'longitude' => 9.064831,
            'altitude_m' => 1485,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1487,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mombasa Moi Intl',
            'iata_code' => 'MBA',
            'icao_code' => 'HKMO',


            'latitude' => -4.034833,
            'longitude' => 39.59425,
            'altitude_m' => 200,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1488,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Monbetsu',
            'iata_code' => 'MBE',
            'icao_code' => 'RJEB',


            'latitude' => 44.303914,
            'longitude' => 143.404028,
            'altitude_m' => 80,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1489,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Monchengladbach Central Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.196,
            'longitude' => 6.446,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1490,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Monclova Intl',
            'iata_code' => 'LOV',
            'icao_code' => 'MMMV',


            'latitude' => 26.955733,
            'longitude' => -101.470136,
            'altitude_m' => 1864,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Mexico_City',

            'city_id' => 1491,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Monrovia Roberts Intl',
            'iata_code' => 'ROB',
            'icao_code' => 'GLRB',


            'latitude' => 6.233789,
            'longitude' => -10.362311,
            'altitude_m' => 31,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Monrovia',

            'city_id' => 1493,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Monrovia Spriggs Payne',
            'iata_code' => 'MLW',
            'icao_code' => 'GLMR',


            'latitude' => 6.289061,
            'longitude' => -10.758722,
            'altitude_m' => 25,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Monrovia',

            'city_id' => 1493,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montauban',
            'iata_code' => 'XMW',
            'icao_code' => 'LFDB',


            'latitude' => 44.025694,
            'longitude' => 1.378042,
            'altitude_m' => 351,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1495,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montbeugny',
            'iata_code' => 'XMU',
            'icao_code' => 'LFHY',


            'latitude' => 46.534581,
            'longitude' => 3.423725,
            'altitude_m' => 915,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1520,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montdragon',
            'iata_code' => '',
            'icao_code' => 'LFCQ',


            'latitude' => 43.771111,
            'longitude' => 2.010833,
            'altitude_m' => 581,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 843,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montgomery County Airpark',
            'iata_code' => 'GAI',
            'icao_code' => 'KGAI',


            'latitude' => 39.1006,
            'longitude' => -77.09576,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 783,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montichiari',
            'iata_code' => 'VBS',
            'icao_code' => 'LIPO',


            'latitude' => 45.428889,
            'longitude' => 10.330556,
            'altitude_m' => 356,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 316,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montijo',
            'iata_code' => '',
            'icao_code' => 'LPMT',


            'latitude' => 38.703861,
            'longitude' => -9.035916,
            'altitude_m' => 46,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Lisbon',

            'city_id' => 1502,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montreal Central Bus Station',
            'iata_code' => '',
            'icao_code' => 'MTRL',


            'latitude' => 45.51527887,
            'longitude' => -73.561427593,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1505,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Montreal Intl Mirabel',
            'iata_code' => 'YMX',
            'icao_code' => 'CYMX',


            'latitude' => 45.681944,
            'longitude' => -74.005278,
            'altitude_m' => 270,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1505,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moody Afb',
            'iata_code' => 'VAD',
            'icao_code' => 'KVAD',


            'latitude' => 30.967833,
            'longitude' => -83.193,
            'altitude_m' => 233,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 2367,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moose Jaw Air Vice Marshal C M Mcewen',
            'iata_code' => 'YMJ',
            'icao_code' => 'CYMJ',


            'latitude' => 50.330278,
            'longitude' => -105.559167,
            'altitude_m' => 1892,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 1507,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moosonee',
            'iata_code' => 'YMO',
            'icao_code' => 'CYMO',


            'latitude' => 51.291111,
            'longitude' => -80.607778,
            'altitude_m' => 30,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1508,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mopah',
            'iata_code' => 'MKQ',
            'icao_code' => 'WAKK',


            'latitude' => -8.520294,
            'longitude' => 140.418453,
            'altitude_m' => 10,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Jayapura',

            'city_id' => 1439,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mora',
            'iata_code' => 'MXX',
            'icao_code' => 'ESKM',


            'latitude' => 60.957908,
            'longitude' => 14.511383,
            'altitude_m' => 634,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1509,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moron',
            'iata_code' => '',
            'icao_code' => 'SADM',


            'latitude' => -34.676317,
            'longitude' => -58.642756,
            'altitude_m' => 95,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1513,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moshoeshoe I Intl',
            'iata_code' => 'MSU',
            'icao_code' => 'FXMM',


            'latitude' => -29.462256,
            'longitude' => 27.552503,
            'altitude_m' => 5348,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Maseru',

            'city_id' => 1407,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mosnov',
            'iata_code' => 'OSR',
            'icao_code' => 'LKMT',


            'latitude' => 49.696292,
            'longitude' => 18.111053,
            'altitude_m' => 844,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Prague',

            'city_id' => 1698,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moss',
            'iata_code' => 'RYG',
            'icao_code' => 'ENRY',


            'latitude' => 59.378933,
            'longitude' => 10.785389,
            'altitude_m' => 174,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1992,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mostar',
            'iata_code' => 'OMO',
            'icao_code' => 'LQMO',


            'latitude' => 43.2829,
            'longitude' => 17.845878,
            'altitude_m' => 156,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Sarajevo',

            'city_id' => 1518,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moton Field Municipal Airport',
            'iata_code' => '06A',
            'icao_code' => '',


            'latitude' => 32.4605722,
            'longitude' => -85.6800278,
            'altitude_m' => 264,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 2328,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Motueka',
            'iata_code' => 'MZP',
            'icao_code' => 'NZMK',


            'latitude' => -41.123299,
            'longitude' => 172.988998,
            'altitude_m' => 39,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1519,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Moultrie Municipal Airport',
            'iata_code' => 'MGR',
            'icao_code' => '',


            'latitude' => 31.0849167,
            'longitude' => -83.80325,
            'altitude_m' => 294,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1521,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mount Gambier Airport',
            'iata_code' => 'MGB',
            'icao_code' => 'YMTG',


            'latitude' => -37.7456,
            'longitude' => 140.785,
            'altitude_m' => 212,

            'time_zone_offset' => 9.5,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Adelaide',

            'city_id' => 1523,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mount Isa',
            'iata_code' => 'ISA',
            'icao_code' => 'YBMA',


            'latitude' => -20.663889,
            'longitude' => 139.488611,
            'altitude_m' => 1121,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 1524,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mountain Village Airport',
            'iata_code' => 'MOU',
            'icao_code' => 'PAMO',


            'latitude' => 62.0954,
            'longitude' => -163.682,
            'altitude_m' => 337,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1525,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mt. Fuji Shizuoka Airport',
            'iata_code' => 'FSZ',
            'icao_code' => 'RJNS',


            'latitude' => 34.796111,
            'longitude' => 138.189444,
            'altitude_m' => 433,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 2105,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Muchowiec',
            'iata_code' => '',
            'icao_code' => 'EPKM',


            'latitude' => 50.238147,
            'longitude' => 19.034181,
            'altitude_m' => 909,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 1103,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mudanjiang',
            'iata_code' => 'MDG',
            'icao_code' => '',


            'latitude' => 44.523889,
            'longitude' => 129.568889,
            'altitude_m' => 883,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1526,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mudgee Airport',
            'iata_code' => 'DGE',
            'icao_code' => 'YMDG',


            'latitude' => -32.5625,
            'longitude' => 149.611,
            'altitude_m' => 1545,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1527,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mukachevo',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 48.4,
            'longitude' => 22.683,
            'altitude_m' => 390,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1528,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mukachevo Air Base',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 48.4,
            'longitude' => 22.6833,
            'altitude_m' => 390,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1528,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Multan Intl',
            'iata_code' => 'MUX',
            'icao_code' => 'OPMT',


            'latitude' => 30.203222,
            'longitude' => 71.419111,
            'altitude_m' => 403,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1530,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Munich HBF',
            'iata_code' => 'MUQ',
            'icao_code' => 'MUNI',


            'latitude' => 48.1408,
            'longitude' => 11.555,
            'altitude_m' => 1200,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1533,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Munich Railway',
            'iata_code' => 'ZMU',
            'icao_code' => '',


            'latitude' => 48.1408,
            'longitude' => 11.555,
            'altitude_m' => 500,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1533,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Murcia San Javier',
            'iata_code' => 'MJV',
            'icao_code' => 'LELC',


            'latitude' => 37.774972,
            'longitude' => -.812389,
            'altitude_m' => 11,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Madrid',

            'city_id' => 1534,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mureck',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 46.70778,
            'longitude' => 15.76941,
            'altitude_m' => 764,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vienna',

            'city_id' => 1535,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Murmansk',
            'iata_code' => 'MMK',
            'icao_code' => 'ULMM',


            'latitude' => 68.781672,
            'longitude' => 32.750822,
            'altitude_m' => 266,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1536,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Murtala Muhammed',
            'iata_code' => 'LOS',
            'icao_code' => 'DNMM',


            'latitude' => 6.577369,
            'longitude' => 3.321156,
            'altitude_m' => 135,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 1221,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mus Airport',
            'iata_code' => 'MSR',
            'icao_code' => 'LTCK',


            'latitude' => 38.747769,
            'longitude' => 41.661236,
            'altitude_m' => 4157,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 1537,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Muskegon County Airport',
            'iata_code' => 'MKG',
            'icao_code' => 'KMKG',


            'latitude' => 43.1695,
            'longitude' => -86.2382,
            'altitude_m' => 628,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1540,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mutiara',
            'iata_code' => 'PLW',
            'icao_code' => 'WAML',


            'latitude' => -.918542,
            'longitude' => 119.909642,
            'altitude_m' => 284,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Makassar',

            'city_id' => 1724,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Mwanza',
            'iata_code' => 'MWZ',
            'icao_code' => 'HTMW',


            'latitude' => -2.444486,
            'longitude' => 32.932667,
            'altitude_m' => 3763,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Dar_es_Salaam',

            'city_id' => 1542,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Myrtle Beach Intl',
            'iata_code' => 'MYR',
            'icao_code' => 'KMYR',


            'latitude' => 33.67975,
            'longitude' => -78.928333,
            'altitude_m' => 25,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1543,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'NAS Alameda',
            'iata_code' => 'NGZ',
            'icao_code' => 'KNGZ',


            'latitude' => 37.7861,
            'longitude' => -122.3186,
            'altitude_m' => 10,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 32,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nadym Airport',
            'iata_code' => 'NYM',
            'icao_code' => 'USMM',


            'latitude' => 65.4809,
            'longitude' => 72.6989,
            'altitude_m' => 49,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1544,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Naga Airport',
            'iata_code' => 'WNP',
            'icao_code' => 'RPUN',


            'latitude' => 13.584886,
            'longitude' => 123.270239,
            'altitude_m' => 142,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 1545,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nagasaki',
            'iata_code' => 'NGS',
            'icao_code' => 'RJFU',


            'latitude' => 32.916944,
            'longitude' => 129.913611,
            'altitude_m' => 15,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1546,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nagoya Airport',
            'iata_code' => 'NKM',
            'icao_code' => 'RJNA',


            'latitude' => 35.255,
            'longitude' => 136.924,
            'altitude_m' => 52,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1547,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Naha',
            'iata_code' => 'OKA',
            'icao_code' => 'ROAH',


            'latitude' => 26.195814,
            'longitude' => 127.645869,
            'altitude_m' => 12,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1663,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nairobi Wilson',
            'iata_code' => 'WIL',
            'icao_code' => 'HKNW',


            'latitude' => -1.321719,
            'longitude' => 36.814833,
            'altitude_m' => 5546,

            'time_zone_offset' => 3,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Nairobi',

            'city_id' => 1549,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nakashibetsu',
            'iata_code' => 'SHB',
            'icao_code' => 'RJCN',


            'latitude' => 43.5775,
            'longitude' => 144.96,
            'altitude_m' => 234,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1550,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nal',
            'iata_code' => '',
            'icao_code' => 'VIBK',


            'latitude' => 28.070606,
            'longitude' => 73.207161,
            'altitude_m' => 750,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 256,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nalchik Airport',
            'iata_code' => 'NAL',
            'icao_code' => 'URMN',


            'latitude' => 43.5129,
            'longitude' => 43.6366,
            'altitude_m' => 1461,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1551,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nambour Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => -26.617353,
            'longitude' => 152.973785,
            'altitude_m' => 400,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Australia/Brisbane',

            'city_id' => 1552,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Namsos HÃ¸knesÃ¸ra Airport',
            'iata_code' => 'OSY',
            'icao_code' => 'ENNM',


            'latitude' => 64.4722,
            'longitude' => 11.5786,
            'altitude_m' => 7,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1553,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanaimo',
            'iata_code' => 'YCD',
            'icao_code' => 'CYCD',


            'latitude' => 49.052333,
            'longitude' => -123.870167,
            'altitude_m' => 93,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 1555,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanaimo Harbour Water Airport',
            'iata_code' => 'ZNA',
            'icao_code' => 'CAC8',


            'latitude' => 49.183333,
            'longitude' => -123.95,
            'altitude_m' => 0,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 1555,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanchong Airport',
            'iata_code' => 'NAO',
            'icao_code' => 'ZUNC',


            'latitude' => 30.754,
            'longitude' => 106.062,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1557,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanded Airport',
            'iata_code' => 'NDC',
            'icao_code' => 'VAND',


            'latitude' => 19.1833,
            'longitude' => 77.3167,
            'altitude_m' => 1250,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1559,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanjing Railway Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 32.088583,
            'longitude' => 118.792189,
            'altitude_m' => 29,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1561,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nantes Atlantique',
            'iata_code' => 'NTE',
            'icao_code' => 'LFRS',


            'latitude' => 47.153189,
            'longitude' => -1.610725,
            'altitude_m' => 90,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1563,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nantong Airport',
            'iata_code' => 'NTG',
            'icao_code' => '',


            'latitude' => 32.0708,
            'longitude' => 120.976,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1564,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nantucket Mem',
            'iata_code' => 'ACK',
            'icao_code' => 'KACK',


            'latitude' => 41.253053,
            'longitude' => -70.060181,
            'altitude_m' => 48,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1565,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nanyang Airport',
            'iata_code' => 'NNY',
            'icao_code' => 'ZHNY',


            'latitude' => 32.9808,
            'longitude' => 112.615,
            'altitude_m' => 0,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Chongqing',

            'city_id' => 1566,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Napa County Airport',
            'iata_code' => 'APC',
            'icao_code' => 'KAPC',


            'latitude' => 38.2131944,
            'longitude' => -122.2806944,
            'altitude_m' => 35,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1567,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Napoli Centrale',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.8525,
            'longitude' => 14.271944,
            'altitude_m' => 39,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1568,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Natrona Co Intl',
            'iata_code' => 'CPR',
            'icao_code' => 'KCPR',


            'latitude' => 42.908,
            'longitude' => -106.464417,
            'altitude_m' => 5347,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Denver',

            'city_id' => 417,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Naval Air Station',
            'iata_code' => 'NBU',
            'icao_code' => 'KNBU',


            'latitude' => 42.090556,
            'longitude' => -87.8225,
            'altitude_m' => 653,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 822,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nawabshah',
            'iata_code' => 'WNS',
            'icao_code' => 'OPNH',


            'latitude' => 26.219442,
            'longitude' => 68.390053,
            'altitude_m' => 95,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1573,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ndola',
            'iata_code' => 'NLA',
            'icao_code' => 'FLND',


            'latitude' => -12.998139,
            'longitude' => 28.664944,
            'altitude_m' => 4167,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Lusaka',

            'city_id' => 1575,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Necochea Airport',
            'iata_code' => 'NEC',
            'icao_code' => 'SAZO',


            'latitude' => -38.483056,
            'longitude' => -58.817222,
            'altitude_m' => 72,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1576,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Neets Bay',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 55.778889,
            'longitude' => -131.601389,
            'altitude_m' => 0,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1123,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nefteyugansk Airport',
            'iata_code' => 'NFG',
            'icao_code' => 'USRN',


            'latitude' => 61.1083,
            'longitude' => 72.65,
            'altitude_m' => 115,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1577,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nelson',
            'iata_code' => 'NSN',
            'icao_code' => 'NZNS',


            'latitude' => -41.298333,
            'longitude' => 173.221111,
            'altitude_m' => 17,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1579,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nelspruit Airport',
            'iata_code' => 'NLP',
            'icao_code' => 'FANS',


            'latitude' => -25.5,
            'longitude' => 30.9138,
            'altitude_m' => 2875,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1580,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Netaji Subhash Chandra Bose Intl',
            'iata_code' => 'CCU',
            'icao_code' => 'VECC',


            'latitude' => 22.654739,
            'longitude' => 88.446722,
            'altitude_m' => 16,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1166,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Neubrandenburg',
            'iata_code' => 'FNB',
            'icao_code' => 'EDBN',


            'latitude' => 53.602167,
            'longitude' => 13.306,
            'altitude_m' => 228,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1582,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Neuchatel Airport',
            'iata_code' => 'QNC',
            'icao_code' => 'LSGN',


            'latitude' => 46.9575,
            'longitude' => 6.86472,
            'altitude_m' => 1427,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1583,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Neuenland',
            'iata_code' => 'BRE',
            'icao_code' => 'EDDW',


            'latitude' => 53.0475,
            'longitude' => 8.786667,
            'altitude_m' => 14,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 313,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Neuwied',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 50.432008,
            'longitude' => 7.472785,
            'altitude_m' => 300,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1585,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Brunswick Station',
            'iata_code' => '',
            'icao_code' => 'NBWK',


            'latitude' => 40.496432,
            'longitude' => -74.446447,
            'altitude_m' => 62,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1589,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Carrollton Rail Station',
            'iata_code' => 'ZRZ',
            'icao_code' => '',


            'latitude' => 38.948,
            'longitude' => -76.8719,
            'altitude_m' => 39,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1590,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Century AirCenter Airport',
            'iata_code' => 'JCI',
            'icao_code' => 'KIXD',


            'latitude' => 38.8309167,
            'longitude' => -94.8903056,
            'altitude_m' => 1087,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1666,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Chitose',
            'iata_code' => 'CTS',
            'icao_code' => 'RJCC',


            'latitude' => 42.7752,
            'longitude' => 141.692283,
            'altitude_m' => 82,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 2062,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Delhi Train Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 28.64197,
            'longitude' => 77.2206,
            'altitude_m' => 708,

            'time_zone_offset' => 5.5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Calcutta',

            'city_id' => 1591,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Kitakyushu',
            'iata_code' => 'KKJ',
            'icao_code' => 'RJFR',


            'latitude' => 33.845942,
            'longitude' => 131.034689,
            'altitude_m' => 21,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1149,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Orleans Nas Jrb',
            'iata_code' => 'NBG',
            'icao_code' => 'KNBG',


            'latitude' => 29.825333,
            'longitude' => -90.035,
            'altitude_m' => 3,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1593,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Plymouth',
            'iata_code' => 'NPL',
            'icao_code' => 'NZNP',


            'latitude' => -39.008611,
            'longitude' => 174.179167,
            'altitude_m' => 97,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1594,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Rochelle Amtrak Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 40.913923,
            'longitude' => -73.782008,
            'altitude_m' => 66,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1595,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'New Tempe',
            'iata_code' => '',
            'icao_code' => 'FATP',


            'latitude' => -29.032928,
            'longitude' => 26.157564,
            'altitude_m' => 4547,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 273,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Newcastle',
            'iata_code' => 'NCS',
            'icao_code' => 'EINC',


            'latitude' => -27.770586,
            'longitude' => 29.976894,
            'altitude_m' => 4074,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1599,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Newcastle',
            'iata_code' => 'NCL',
            'icao_code' => 'EINC',


            'latitude' => 55.0375,
            'longitude' => -1.691667,
            'altitude_m' => 266,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1598,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Newcastle Airport',
            'iata_code' => 'NTL',
            'icao_code' => 'YWLM',


            'latitude' => -32.78,
            'longitude' => 151.83,
            'altitude_m' => 31,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1600,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Newport News Amtrak Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 37.0228,
            'longitude' => -76.4519,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1602,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Newport News Williamsburg Intl',
            'iata_code' => 'PHF',
            'icao_code' => 'KPHF',


            'latitude' => 37.131894,
            'longitude' => -76.492989,
            'altitude_m' => 43,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1602,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Niagara Falls Intl',
            'iata_code' => 'IAG',
            'icao_code' => 'KIAG',


            'latitude' => 43.107333,
            'longitude' => -78.946194,
            'altitude_m' => 589,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1604,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Niagara Falls Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 43.1135,
            'longitude' => -79.0318,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1604,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Niagara Falls Station',
            'iata_code' => '',
            'icao_code' => 'NIAG',


            'latitude' => 43.108802,
            'longitude' => -79.06361,
            'altitude_m' => 0,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1605,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nicosia International Airport',
            'iata_code' => 'NIC',
            'icao_code' => '',


            'latitude' => 35.15111,
            'longitude' => 33.27222,
            'altitude_m' => 0,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Nicosia',

            'city_id' => 1608,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Niederrhein',
            'iata_code' => 'NRN',
            'icao_code' => 'EDLV',


            'latitude' => 51.602222,
            'longitude' => 6.141944,
            'altitude_m' => 106,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 2453,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Niigata',
            'iata_code' => 'KIJ',
            'icao_code' => 'RJSN',


            'latitude' => 37.5711,
            'longitude' => 139.0646,
            'altitude_m' => 1,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1609,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ninoy Aquino Intl',
            'iata_code' => 'MNL',
            'icao_code' => 'RPLL',


            'latitude' => 14.508647,
            'longitude' => 121.019581,
            'altitude_m' => 75,

            'time_zone_offset' => 8,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Manila',

            'city_id' => 1374,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nis',
            'iata_code' => 'INI',
            'icao_code' => 'LYNI',


            'latitude' => 43.337289,
            'longitude' => 21.853722,
            'altitude_m' => 648,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Belgrade',

            'city_id' => 1612,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nizhnevartovsk',
            'iata_code' => 'NJC',
            'icao_code' => 'USNN',


            'latitude' => 60.949272,
            'longitude' => 76.483617,
            'altitude_m' => 177,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1614,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nnamdi Azikiwe Intl',
            'iata_code' => 'ABV',
            'icao_code' => 'DNAA',


            'latitude' => 9.006792,
            'longitude' => 7.263172,
            'altitude_m' => 1123,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Lagos',

            'city_id' => 10,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Noboribetsu',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 42.46867,
            'longitude' => 141.03833,
            'altitude_m' => 361,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1616,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nogales Intl',
            'iata_code' => 'OLS',
            'icao_code' => 'KOLS',


            'latitude' => 31.417722,
            'longitude' => -110.84789,
            'altitude_m' => 3955,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Phoenix',

            'city_id' => 1617,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nogliki',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.816667,
            'longitude' => 143.116667,
            'altitude_m' => 10,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 1618,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Noibai Intl',
            'iata_code' => 'HAN',
            'icao_code' => 'VVNB',


            'latitude' => 21.221192,
            'longitude' => 105.807178,
            'altitude_m' => 39,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Saigon',

            'city_id' => 908,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nome',
            'iata_code' => 'OME',
            'icao_code' => 'PAOM',


            'latitude' => 64.512203,
            'longitude' => -165.445247,
            'altitude_m' => 37,

            'time_zone_offset' => -9,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Anchorage',

            'city_id' => 1619,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nordholz Spieka Airport',
            'iata_code' => '',
            'icao_code' => 'EDXN',


            'latitude' => 53.7672,
            'longitude' => 8.64361,
            'altitude_m' => 72,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 565,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Norman Manley Intl',
            'iata_code' => 'KIN',
            'icao_code' => 'MKJP',


            'latitude' => 17.935667,
            'longitude' => -76.7875,
            'altitude_m' => 10,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Jamaica',

            'city_id' => 1139,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Norman Wells',
            'iata_code' => 'YVQ',
            'icao_code' => 'CYVQ',


            'latitude' => 65.281617,
            'longitude' => -126.798219,
            'altitude_m' => 238,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 1623,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Norman Y Mineta San Jose Intl',
            'iata_code' => 'SJC',
            'icao_code' => 'KSJC',


            'latitude' => 37.3626,
            'longitude' => -121.929022,
            'altitude_m' => 62,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 2025,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'North Battleford',
            'iata_code' => 'YQW',
            'icao_code' => 'CYQW',


            'latitude' => 52.769167,
            'longitude' => -108.24361,
            'altitude_m' => 1799,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Regina',

            'city_id' => 1624,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'North Bay',
            'iata_code' => 'YYB',
            'icao_code' => 'CYYB',


            'latitude' => 46.363611,
            'longitude' => -79.422778,
            'altitude_m' => 1215,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1625,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'North Platte Regional Airport Lee Bird Field',
            'iata_code' => 'LBF',
            'icao_code' => 'KLBF',


            'latitude' => 41.1262,
            'longitude' => -100.684,
            'altitude_m' => 2776,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1628,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Northern Aroostook Regional Airport',
            'iata_code' => 'WFK',
            'icao_code' => 'KFVE',


            'latitude' => 47.285556,
            'longitude' => -68.312778,
            'altitude_m' => 988,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 770,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Northern Maine Rgnl At Presque Isle',
            'iata_code' => 'PQI',
            'icao_code' => 'KPQI',


            'latitude' => 46.688958,
            'longitude' => -68.044797,
            'altitude_m' => 534,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1864,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Northwest Alabama Regional Airport',
            'iata_code' => 'MSL',
            'icao_code' => 'KMSL',


            'latitude' => 34.7453,
            'longitude' => -87.6102,
            'altitude_m' => 550,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1538,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Norwich',
            'iata_code' => 'NWI',
            'icao_code' => 'EGSH',


            'latitude' => 52.675833,
            'longitude' => 1.282778,
            'altitude_m' => 117,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1629,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Noto',
            'iata_code' => 'NTQ',
            'icao_code' => 'RJNW',


            'latitude' => 37.293097,
            'longitude' => 136.961853,
            'altitude_m' => 718,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 2438,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Notodden',
            'iata_code' => 'NTB',
            'icao_code' => 'ENNO',


            'latitude' => 59.565683,
            'longitude' => 9.212222,
            'altitude_m' => 63,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Oslo',

            'city_id' => 1630,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nottingham Airport',
            'iata_code' => 'NQT',
            'icao_code' => 'EGBN',


            'latitude' => 52.92,
            'longitude' => -1.079167,
            'altitude_m' => 138,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1631,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Novy',
            'iata_code' => 'KHV',
            'icao_code' => 'UHHH',


            'latitude' => 48.528044,
            'longitude' => 135.188361,
            'altitude_m' => 244,

            'time_zone_offset' => 11,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Vladivostok',

            'city_id' => 1125,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Novyi Urengoy',
            'iata_code' => 'NUX',
            'icao_code' => 'USMU',


            'latitude' => 66.041811,
            'longitude' => 76.313938,
            'altitude_m' => 20,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1638,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nowra Airport',
            'iata_code' => 'NOA',
            'icao_code' => 'YSNW',


            'latitude' => -34.9489,
            'longitude' => 150.537,
            'altitude_m' => 400,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'O',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1639,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Noyabrsk',
            'iata_code' => 'NOJ',
            'icao_code' => 'USRO',


            'latitude' => 63.110079,
            'longitude' => 75.162243,
            'altitude_m' => 20,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1640,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nyagan Airport',
            'iata_code' => 'NYA',
            'icao_code' => 'USHN',


            'latitude' => 62.11,
            'longitude' => 65.615,
            'altitude_m' => 361,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1642,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Nynashamn Ferry Port',
            'iata_code' => 'NYN',
            'icao_code' => '',


            'latitude' => 58.9,
            'longitude' => 17.95,
            'altitude_m' => 0,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1643,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oak Lawn Train Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 41.719824297,
            'longitude' => -87.7488327026,
            'altitude_m' => 500,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1644,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oamaru',
            'iata_code' => 'OAM',
            'icao_code' => 'NZOU',


            'latitude' => -44.97,
            'longitude' => 171.081667,
            'altitude_m' => 99,

            'time_zone_offset' => 12,
            'time_zone_letter' => 'Z',
            'time_zone_dst' => 'Pacific/Auckland',

            'city_id' => 1645,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Obera',
            'iata_code' => '',
            'icao_code' => 'SATO',


            'latitude' => -27.518156,
            'longitude' => -55.124156,
            'altitude_m' => 1125,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1646,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Obihiro',
            'iata_code' => 'OBO',
            'icao_code' => 'RJCB',


            'latitude' => 42.733333,
            'longitude' => 143.217222,
            'altitude_m' => 505,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1647,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ocean Isle Beach Airport',
            'iata_code' => '60J',
            'icao_code' => '',


            'latitude' => 33.9085056,
            'longitude' => -78.4366722,
            'altitude_m' => 32,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1650,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ocean Ridge Airport',
            'iata_code' => 'E55',
            'icao_code' => '',


            'latitude' => 38.8016111,
            'longitude' => -123.5306389,
            'altitude_m' => 940,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 860,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ocean Shores Municipal',
            'iata_code' => 'W04',
            'icao_code' => 'KW04',


            'latitude' => 46.5995,
            'longitude' => -124.0854,
            'altitude_m' => 15,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1651,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oceana Nas',
            'iata_code' => 'NTU',
            'icao_code' => 'KNTU',


            'latitude' => 36.820703,
            'longitude' => -76.033542,
            'altitude_m' => 22,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1652,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oceano County Airport',
            'iata_code' => 'L52',
            'icao_code' => 'KL52',


            'latitude' => 35.10147222,
            'longitude' => -120.62236111,
            'altitude_m' => 14,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1653,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ochey',
            'iata_code' => '',
            'icao_code' => 'LFSO',


            'latitude' => 48.583056,
            'longitude' => 5.955,
            'altitude_m' => 1106,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1558,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oconomowoc Airport',
            'iata_code' => '',
            'icao_code' => '0WI8',


            'latitude' => 43.1388947,
            'longitude' => -88.4723206,
            'altitude_m' => 885,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1654,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Octeville',
            'iata_code' => 'LEH',
            'icao_code' => 'LFOH',


            'latitude' => 49.533889,
            'longitude' => .088056,
            'altitude_m' => 312,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1250,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Odense',
            'iata_code' => 'ODE',
            'icao_code' => 'EKOD',


            'latitude' => 55.476664,
            'longitude' => 10.330933,
            'altitude_m' => 56,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Copenhagen',

            'city_id' => 1655,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Odesa Intl',
            'iata_code' => 'ODS',
            'icao_code' => 'UKOO',


            'latitude' => 46.426767,
            'longitude' => 30.676464,
            'altitude_m' => 172,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Kiev',

            'city_id' => 1656,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Odiham',
            'iata_code' => 'ODH',
            'icao_code' => 'EGVO',


            'latitude' => 51.234139,
            'longitude' => -.942825,
            'altitude_m' => 405,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1657,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Offenburg',
            'iata_code' => 'ZPA',
            'icao_code' => 'EDTO',


            'latitude' => 48.4711,
            'longitude' => 7.9411,
            'altitude_m' => 535,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1658,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Offutt Afb',
            'iata_code' => 'OFF',
            'icao_code' => 'KOFF',


            'latitude' => 41.118332,
            'longitude' => -95.912511,
            'altitude_m' => 1052,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1675,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ogle',
            'iata_code' => 'OGL',
            'icao_code' => 'SYGO',


            'latitude' => 6.806944,
            'longitude' => -58.104444,
            'altitude_m' => 10,

            'time_zone_offset' => -4,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Guyana',

            'city_id' => 806,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oguzeli',
            'iata_code' => 'GZT',
            'icao_code' => 'LTAJ',


            'latitude' => 36.947183,
            'longitude' => 37.478683,
            'altitude_m' => 2315,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Istanbul',

            'city_id' => 795,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oita',
            'iata_code' => 'OIT',
            'icao_code' => 'RJFO',


            'latitude' => 33.479444,
            'longitude' => 131.737222,
            'altitude_m' => 19,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1659,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Okadama Airport',
            'iata_code' => 'OKD',
            'icao_code' => 'RJCO',


            'latitude' => 43.1161,
            'longitude' => 141.38,
            'altitude_m' => 25,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 2062,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Okara',
            'iata_code' => '',
            'icao_code' => 'OPOK',


            'latitude' => 30.741025,
            'longitude' => 73.357736,
            'altitude_m' => 568,

            'time_zone_offset' => 5,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Karachi',

            'city_id' => 1660,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Okayama',
            'iata_code' => 'OKJ',
            'icao_code' => 'RJOB',


            'latitude' => 34.756944,
            'longitude' => 133.855278,
            'altitude_m' => 806,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1661,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Okecie',
            'iata_code' => 'WAW',
            'icao_code' => 'EPWA',


            'latitude' => 52.16575,
            'longitude' => 20.967122,
            'altitude_m' => 362,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Warsaw',

            'city_id' => 2444,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Okushiri',
            'iata_code' => 'OIR',
            'icao_code' => 'RJEO',


            'latitude' => 42.071667,
            'longitude' => 139.432911,
            'altitude_m' => 161,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1665,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olavarria',
            'iata_code' => '',
            'icao_code' => 'SAZF',


            'latitude' => -36.890039,
            'longitude' => -60.216619,
            'altitude_m' => 551,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'America/Cordoba',

            'city_id' => 1667,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olaya Herrera',
            'iata_code' => 'EOH',
            'icao_code' => 'SKMD',


            'latitude' => 6.219958,
            'longitude' => -75.590519,
            'altitude_m' => 4940,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Bogota',

            'city_id' => 1428,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olbia Costa Smeralda',
            'iata_code' => 'OLB',
            'icao_code' => 'LIEO',


            'latitude' => 40.898661,
            'longitude' => 9.517628,
            'altitude_m' => 37,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Rome',

            'city_id' => 1668,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Old Rhinebeck Airport',
            'iata_code' => '',
            'icao_code' => 'NY94',


            'latitude' => 41.969833,
            'longitude' => -73.864555,
            'altitude_m' => 323,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1942,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oldbury',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 52.55,
            'longitude' => -2.0166,
            'altitude_m' => 499,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1669,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oldenburg Hatten Airport',
            'iata_code' => '',
            'icao_code' => 'EDWH',


            'latitude' => 53.0689,
            'longitude' => 8.31361,
            'altitude_m' => 26,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1671,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olds Didsbury Airport',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 51.710833,
            'longitude' => -114.106111,
            'altitude_m' => 3360,

            'time_zone_offset' => -7,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Edmonton',

            'city_id' => 607,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olive Branch Muni',
            'iata_code' => 'OLV',
            'icao_code' => 'KOLV',


            'latitude' => 34.876944,
            'longitude' => -89.783333,
            'altitude_m' => 350,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1672,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olten Airport',
            'iata_code' => '',
            'icao_code' => 'LSPO',


            'latitude' => 47.343611,
            'longitude' => 7.8875,
            'altitude_m' => 1370,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zurich',

            'city_id' => 1673,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Olympia Regional Airpor',
            'iata_code' => 'OLM',
            'icao_code' => 'KOLM',


            'latitude' => 46.9694044,
            'longitude' => -122.9025447,
            'altitude_m' => 209,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1674,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Omsk',
            'iata_code' => 'OMS',
            'icao_code' => 'UNOO',


            'latitude' => 54.967042,
            'longitude' => 73.310514,
            'altitude_m' => 311,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Omsk',

            'city_id' => 1676,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'One Police Plaza Heliport',
            'iata_code' => '',
            'icao_code' => 'NK39',


            'latitude' => 40.7126,
            'longitude' => -73.9996,
            'altitude_m' => 244,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1596,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oostende',
            'iata_code' => 'OST',
            'icao_code' => 'EBNH',


            'latitude' => 51.198889,
            'longitude' => 2.862222,
            'altitude_m' => 13,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Brussels',

            'city_id' => 1696,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oradea',
            'iata_code' => 'OMR',
            'icao_code' => 'LROD',


            'latitude' => 47.025278,
            'longitude' => 21.9025,
            'altitude_m' => 465,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Bucharest',

            'city_id' => 1677,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orange Airport',
            'iata_code' => 'OAG',
            'icao_code' => 'YORG',


            'latitude' => -33.3817,
            'longitude' => 149.133,
            'altitude_m' => 3115,

            'time_zone_offset' => 10,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Australia/Sydney',

            'city_id' => 1679,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orebro',
            'iata_code' => 'ORB',
            'icao_code' => 'ESOE',


            'latitude' => 59.223733,
            'longitude' => 15.037956,
            'altitude_m' => 188,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1680,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orenburg',
            'iata_code' => 'REN',
            'icao_code' => 'UWOO',


            'latitude' => 51.795786,
            'longitude' => 55.456744,
            'altitude_m' => 387,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1681,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orillia',
            'iata_code' => '',
            'icao_code' => 'CNJ4',


            'latitude' => 44.683333,
            'longitude' => -79.316667,
            'altitude_m' => 725,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1682,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orlando',
            'iata_code' => 'DWS',
            'icao_code' => '',


            'latitude' => 28.398,
            'longitude' => -81.57,
            'altitude_m' => 340,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1684,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orlando Intl',
            'iata_code' => 'MCO',
            'icao_code' => 'KMCO',


            'latitude' => 28.429394,
            'longitude' => -81.308994,
            'altitude_m' => 96,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1684,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orlando de Carvalho Airport',
            'iata_code' => 'UMU',
            'icao_code' => 'SSUM',


            'latitude' => -23.798611,
            'longitude' => -53.313611,
            'altitude_m' => 1558,

            'time_zone_offset' => -3,
            'time_zone_letter' => 'S',
            'time_zone_dst' => 'America/Sao_Paulo',

            'city_id' => 2349,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orly',
            'iata_code' => 'ORY',
            'icao_code' => 'LFPO',


            'latitude' => 48.725278,
            'longitude' => 2.359444,
            'altitude_m' => 291,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Paris',

            'city_id' => 1742,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ormond Beach municipal Airport',
            'iata_code' => 'OMN',
            'icao_code' => 'KOMN',


            'latitude' => 29.1804,
            'longitude' => -81.06497,
            'altitude_m' => 28,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1686,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ornskoldsvik',
            'iata_code' => 'OER',
            'icao_code' => 'ESNO',


            'latitude' => 63.408339,
            'longitude' => 18.990039,
            'altitude_m' => 354,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1687,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Orsk Airport',
            'iata_code' => 'OSW',
            'icao_code' => 'UWOR',


            'latitude' => 51.0725,
            'longitude' => 58.5956,
            'altitude_m' => 909,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Yekaterinburg',

            'city_id' => 1688,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Osaka Intl',
            'iata_code' => 'ITM',
            'icao_code' => 'RJOO',


            'latitude' => 34.785528,
            'longitude' => 135.438222,
            'altitude_m' => 50,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1689,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oscar Machado Zuloaga',
            'iata_code' => '',
            'icao_code' => 'SVCS',


            'latitude' => 10.286589,
            'longitude' => -66.816219,
            'altitude_m' => 2145,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 398,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Osh',
            'iata_code' => 'OSS',
            'icao_code' => 'UAFO',


            'latitude' => 40.608989,
            'longitude' => 72.793269,
            'altitude_m' => 2927,

            'time_zone_offset' => 6,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Bishkek',

            'city_id' => 1690,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oshawa Airport',
            'iata_code' => 'YOO',
            'icao_code' => 'CYOO',


            'latitude' => 43.9228,
            'longitude' => -78.895,
            'altitude_m' => 459,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1691,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Osijek',
            'iata_code' => 'OSI',
            'icao_code' => 'LDOS',


            'latitude' => 45.462667,
            'longitude' => 18.810156,
            'altitude_m' => 290,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Zagreb',

            'city_id' => 1692,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oskarshamn',
            'iata_code' => 'OSK',
            'icao_code' => 'ESMO',


            'latitude' => 57.350453,
            'longitude' => 16.497972,
            'altitude_m' => 96,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1693,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ostafyevo International Airport',
            'iata_code' => '',
            'icao_code' => 'UUMO',


            'latitude' => 55.511667,
            'longitude' => 37.507222,
            'altitude_m' => 568,

            'time_zone_offset' => 4,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Europe/Moscow',

            'city_id' => 1515,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ostbahnhof',
            'iata_code' => 'BHF',
            'icao_code' => '',


            'latitude' => 52.51,
            'longitude' => 13.434722,
            'altitude_m' => 135,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 243,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oswaldo Guevara Mujica',
            'iata_code' => 'AGV',
            'icao_code' => 'SVAC',


            'latitude' => 9.553422,
            'longitude' => -69.237536,
            'altitude_m' => 741,

            'time_zone_offset' => -4.5,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'America/Caracas',

            'city_id' => 12,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Otaru',
            'iata_code' => 'QOT',
            'icao_code' => '',


            'latitude' => 43.1894444,
            'longitude' => 141.0022222,
            'altitude_m' => 0,

            'time_zone_offset' => 9,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Asia/Tokyo',

            'city_id' => 1699,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ottawa Macdonald Cartier Intl',
            'iata_code' => 'YOW',
            'icao_code' => 'CYOW',


            'latitude' => 45.3225,
            'longitude' => -75.669167,
            'altitude_m' => 374,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Toronto',

            'city_id' => 1700,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ouagadougou',
            'iata_code' => 'OUA',
            'icao_code' => 'DFFD',


            'latitude' => 12.353194,
            'longitude' => -1.512417,
            'altitude_m' => 1037,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Ouagadougou',

            'city_id' => 1701,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ouarzazate',
            'iata_code' => 'OZZ',
            'icao_code' => 'GMMZ',


            'latitude' => 30.939053,
            'longitude' => -6.909431,
            'altitude_m' => 3782,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Casablanca',

            'city_id' => 1702,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oudtshoorn',
            'iata_code' => 'DUH',
            'icao_code' => 'FAOH',


            'latitude' => -33.606967,
            'longitude' => 22.188978,
            'altitude_m' => 1063,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1703,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oued Irara',
            'iata_code' => 'HME',
            'icao_code' => 'DAUH',


            'latitude' => 31.672972,
            'longitude' => 6.140444,
            'altitude_m' => 463,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'N',
            'time_zone_dst' => 'Africa/Algiers',

            'city_id' => 919,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Owensboro Daviess County Airport',
            'iata_code' => 'OWB',
            'icao_code' => 'KOWB',


            'latitude' => 37.7401,
            'longitude' => -87.1668,
            'altitude_m' => 406,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1705,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Oxnard - Ventura County',
            'iata_code' => 'OXR',
            'icao_code' => 'KOXR',


            'latitude' => 34.200833,
            'longitude' => -119.207222,
            'altitude_m' => 15,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1707,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Ozona Muni',
            'iata_code' => 'OZA',
            'icao_code' => 'KOZA',


            'latitude' => 30.735281,
            'longitude' => -101.202972,
            'altitude_m' => 2381,

            'time_zone_offset' => -6,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Chicago',

            'city_id' => 1708,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'P C Pelser',
            'iata_code' => '',
            'icao_code' => 'FAKD',


            'latitude' => -26.871064,
            'longitude' => 26.718003,
            'altitude_m' => 4444,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Africa/Johannesburg',

            'city_id' => 1156,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pacific Station',
            'iata_code' => '',
            'icao_code' => '',


            'latitude' => 49.2739,
            'longitude' => -123.0986,
            'altitude_m' => 0,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Vancouver',

            'city_id' => 2380,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Packwood',
            'iata_code' => '55S',
            'icao_code' => 'K55S',


            'latitude' => 46.3625,
            'longitude' => -121.4067,
            'altitude_m' => 1057,

            'time_zone_offset' => -8,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/Los_Angeles',

            'city_id' => 1710,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Padang Tabing',
            'iata_code' => '',
            'icao_code' => 'WIMG',


            'latitude' => -.875,
            'longitude' => 100.3519,
            'altitude_m' => 3,

            'time_zone_offset' => 7,
            'time_zone_letter' => 'U',
            'time_zone_dst' => 'Asia/Jakarta',

            'city_id' => 1711,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Paddington Station',
            'iata_code' => 'QQP',
            'icao_code' => '',


            'latitude' => 51.515833,
            'longitude' => -.176111,
            'altitude_m' => 0,

            'time_zone_offset' => 0,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/London',

            'city_id' => 1305,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Paderborn Lippstadt',
            'iata_code' => 'PAD',
            'icao_code' => 'EDLP',


            'latitude' => 51.614089,
            'longitude' => 8.616317,
            'altitude_m' => 699,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Berlin',

            'city_id' => 1712,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pafos Intl',
            'iata_code' => 'PFO',
            'icao_code' => 'LCPH',


            'latitude' => 34.718039,
            'longitude' => 32.485731,
            'altitude_m' => 41,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Asia/Nicosia',

            'city_id' => 1734,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Page Fld',
            'iata_code' => 'FMY',
            'icao_code' => 'KFMY',


            'latitude' => 26.586611,
            'longitude' => -81.86325,
            'altitude_m' => 17,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 746,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pahokee',
            'iata_code' => '',
            'icao_code' => 'KPHK',


            'latitude' => 26.471041,
            'longitude' => -80.413591,
            'altitude_m' => 15,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1713,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pahokee Airport',
            'iata_code' => 'PHK',
            'icao_code' => '',


            'latitude' => 26.789,
            'longitude' => -80.692,
            'altitude_m' => 18,

            'time_zone_offset' => -5,
            'time_zone_letter' => 'A',
            'time_zone_dst' => 'America/New_York',

            'city_id' => 1713,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pajala Airport',
            'iata_code' => 'PJA',
            'icao_code' => 'ESUP',


            'latitude' => 67.2456,
            'longitude' => 23.0689,
            'altitude_m' => 542,

            'time_zone_offset' => 1,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Stockholm',

            'city_id' => 1714,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Pajuostis',
            'iata_code' => 'PNV',
            'icao_code' => 'EYPP',


            'latitude' => 55.729444,
            'longitude' => 24.460833,
            'altitude_m' => 197,

            'time_zone_offset' => 2,
            'time_zone_letter' => 'E',
            'time_zone_dst' => 'Europe/Vilnius',

            'city_id' => 1728,

            'created_at' => now(),






        ]);


        factory(Airport::class)-> create([

            'name' => 'Paketzentrum',
            'iata_code' => '',
            'icao_code' => '',




