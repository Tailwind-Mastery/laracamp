<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Product;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('public/users');
        Storage::deleteDirectory('public/category');
        Storage::deleteDirectory('public/houses');
        Storage::deleteDirectory('public/chairs');
        $userImgs = Storage::files('public/userImgs');
        $catImgs = Storage::files('public/catImgs');
        $chairImgs = Storage::files('public/chairImgs');
        $houseImgs = Storage::files('public/houseImgs');

        $regions = [
            "Asia" => [
                "Pakistan" => [
                    "Islamabad",
                    "Hunza",
                    "Lahore",
                    "Peshawar",
                    "Gilgit",
                    "Gwadar",
                    "Skardu",
                    "Karachi",
                    "Multan",
                    "Hyderabad",
                    "Faisalabad",
                    "Rawalpindi",
                    "Sialkot",
                ],
                "Maldives" => [
                    "Male",
                    "Hulhumale",
                    "Maafushi Island",
                    "Addu City",
                    "Villingili",
                    "Fuvahmulah",
                    "Rasdhoo",
                    "Dhidhdhoo",
                    "Naifaru",
                    "Kulhudhuffushi City",
                ],
                "Malaysia" => [
                    "Kuala Lumpur",
                    "Penang Island",
                    "Malacca",
                    "Kuching",
                    "Ipoh",
                    "Johor Bahru",
                    "Shah Alam",
                    "Kota Kinabalu",
                    "Petaling Jaya",
                    "Miri",
                ],
                "Oman" => [
                    "Muscat",
                    "Seeb",
                    "Salalah",
                    "Sohar",
                    "Nizwa",
                    "Wadi Darbat",
                    "Musandam",
                ],
                "Turkey" => [
                    "Antalya",
                    "Istanbul",
                    "Ankara",
                    "Bodrum",
                    "Bursa",
                    "Izmir",
                    "Alanya",
                    "Marmaris",
                    "Fethiye",
                    "Altinkum",
                    "Dalaman",
                ],
                "Sri Lanka" => [
                    "Colombo",
                    "Gampaha",
                    "Negombo",
                    "Jayawardena",
                    "Beruwala",
                    "Kandy",
                    "Galle",
                    "Matara",
                    "Anuradhpura",
                    "Trincomalee",
                ],
                "United Arab Emirates" => [
                    "Dubai",
                    "Abu Dhabi",
                    "Sharjah",
                    "Ras Al Khaimah",
                    "Ajman",
                    "Al Ain",
                    "Khor Fakkan",
                    "Umm Al Quwain",
                    "Liwa Oasis",
                    "Fujairah",
                    "Madinat Zayed",
                ],
                "Qatar" => [
                    "Doha",
                    "The Pearl Qatar",
                    "Lusail city",
                    "West Bay and West Bay lagoon",
                    "Msheireb Downtown Doha",
                    "Al Sadd",
                    "Al Waab",
                    "Al Rayyan",
                    "Al Wakrah",
                    "Abu Hamour",
                ],
                "Kuwait" => [
                    "Kuwait City",
                    "Hawalli",
                    "Salwa",
                    "Salmiyah",
                    "Al Ahmadi",
                    "Jahra",
                    "Farwaniya",
                    "Al Wafrah",
                    "Safat",
                    "Jabriya",
                ],
                "Saudi Arabia" => [
                    "Mecca",
                    "Medina",
                    "Yanbu",
                    "Riyadh",
                    "Dammam",
                    "Jeddah",
                    "Dhahran",
                    "Jubail",
                    "Unaiza",
                    "Al Mubarraz",
                    "Abha",
                ],
                "Bahrain" => [
                    "Adliya",
                    "Al Hidd",
                    "Amwaj Islands",
                    "Juffair",
                    "Janabiyah",
                    "Saar",
                    "Riffa",
                    "Seef",
                    "Manama",
                    "Muharraq",
                    "Hamad Town",
                    "Isa Town",
                    "Sitra",
                ],
                "Egypt" => [
                    "Cairo",
                    "Giza",
                    "Alexandria",
                    "Ismailia",
                    "Hurghada",
                    "Sharm El Sheik",
                    "Luxor",
                    "Mansoura",
                    "Damietta ",
                    "El Gouna",
                ],
                "Algeria" => [
                    "Taghit",
                    "Annaba",
                    "Tlemcen",
                    "Constantine",
                    "Ghardaia",
                    "Timimoun",
                    "Djanet",
                    "Oran",
                    "Batna",
                    "Algiers",
                ],
                "Libya" => [
                    "Tripoli",
                    "Benghazi",
                    "Misrata",
                    "Bayda",
                    "Dirj",
                    "Ghat",
                    "Ghadames CIty",
                ],
                "Iran" => [
                    "Tehran",
                    "Isfahan",
                    "Shiraz",
                    "Sari",
                    "Yazd",
                    "Tabriz",
                    "Kandovan",
                    "Qom",
                    "Mashhad",
                    "Qeshm",
                    "Zanjan",
                    "Kashan",
                    "RASHT",
                ],
                "Iraq" => [
                    "Baghdad",
                    "Basra",
                    "Hillah",
                    "Najaf",
                    "Erbil",
                    "Karbala",
                    "Salaymaniyah",
                    "Mosul",
                    "Kirkuk",
                    "Duhok",
                ],
                "Tunisia" => [
                    "La Marsa",
                    "Nabeul",
                    "Bizerte",
                    "Djerba",
                    "Hammamet",
                    "Tunis",
                    "Kairouan",
                    "Sousse",
                    "Gabès",
                ],
                "Morocco" => [
                    "Agadir",
                    "Marrakech",
                    "Casablanca",
                    "Rabat",
                    "Kenitra",
                    "Tangier",
                    "Tetouan",
                    "Chefchaouen",
                    "Dakhla",
                    "Fes",
                ],
                "Australia" => [
                    "Adelaide",
                    "Brisbane and the Gold Coast",
                    "Canberra",
                    "Melbourne VIC",
                    "Hobart and Tasmania",
                    "Perth",
                    "Sydney",
                    "The Blue Mountains Region",
                    "The Northern Rivers Region",
                ],
                "New Zealand" => [
                    "Dunedin",
                    "Nelson",
                    "Hamilton",
                    "Rotorua",
                    "Napier & Hastings",
                    "Wellington",
                    "Queenstown & Wanaka",
                    "Auckland",
                    "Christchurch",
                    "Tauranga",
                    "Hawke Bay",
                    "West Coast",
                    "Waikato",
                    "Whangarei",
                ],
                "Russia" => [
                    "Moscow",
                    "St. Petersburg",
                    "Sochi",
                    "Nizhny Novgorod",
                    "Yekaterinburg",
                    "Krasnodar",
                    "Tyumen",
                    "Vladivostock",
                    "Irkutsk",
                    "Kazan",
                    "Novosibirsk",
                ],
            ],
            "Uinted Kingdom" => [
                "England" => [
                    "London",
                    "Manchester",
                    "Birmingham",
                    "Liverpool",
                    "Bristol",
                    "Brighton",
                    "Cambridge",
                    "Leeds",
                    "North Yorkshire",
                    "Bedfordshire",
                    "Merseyside",
                    "Norfolk",
                    "Leicestershire",
                    "Belfast",
                    "Newcastle",
                    "Bath",
                ],
                "Scotland" => [
                    "Edinburgh",
                    "Glasgow",
                    "Aberdeen",
                    "Inverness",
                    "Dundee",
                    "Stirling",
                    "Fort William",
                    "Kirkwall",
                    "Portree",
                    "Oban",
                    "Ayr",
                    "St Andrews",
                    "Dunfermline",
                    "Falkirk",
                ],
                "Wales" => [
                    "Cardiff",
                    "Vale of Glamorgan",
                    "Swansea",
                    "Abergavenny",
                    "Pembrokeshire",
                    "St Davids",
                    "Ceredigion",
                    "Brecon Beacons",
                    "Builth Wells",
                    "Isle of Anglesey",
                    "Usk",
                    "Carmarthen",
                    "Gwynedd",
                    "Aberdyfi",
                    "Flintshire",
                ],
                "Northern Ireland" => [
                    "Mid Ulster",
                    "Fermanagh",
                    "Ards and North Down",
                    "Bangor",
                    "Lisburn and Castlereagh",
                    "Causeway Coast and Glens",
                    "Mid and East Antrim",
                    "Newry, Mourne and Down",
                    "Armagh City",
                    "Newtownabbey",
                ],
            ],
            "United States" => [
                "California" => [
                    "California",
                    "Bakersfield",
                    "Los Angeles",
                    "San Francisco",
                    "San Diego",
                    "Sacramento",
                    "San Jose",
                    "Fresno",
                    "Long Beach",
                    "Oakland",
                    "Anaheim",
                    "Santa Cruz",
                    "Newport Beach",
                    "Napa",
                    "Santa Monica",
                    "Monterey",
                    "Santa Barbara",
                    "Palm Springs",
                ],
                "Florida" => [
                    "Palm Beach",
                    "Pensacola",
                    "Naples",
                    "Longboat",
                    "Pinecrest",
                    "Parkland",
                    "Weston",
                    "Boca Raton",
                    "Coral Gables",
                    "Tallahassee",
                    "Sarasota",
                    "Melbourne",
                    "Miami",
                    "Orlando",
                    "Cape Coral",
                    "Jacksonville",
                    "Gainesville",
                    "Tampa",
                ],
                "Georgia" => [
                    "Roswell",
                    "Marietta",
                    "Columbus",
                    "Augusta",
                    "Atlanta",
                    "Macon",
                    "Decatur",
                    "Alpharetta",
                    "Johns Creek",
                    "Peachtree City",
                ],
                "Illinois" => [
                    "Buffalo Grove",
                    "Crystal Lake",
                    "Bloomington",
                    "Schaumburg",
                    "Champaign Urbana",
                    "Springfield",
                    "Clarendon Hills",
                    "Galena",
                    "Rockford",
                    "Naperville",
                    "Peoria",
                    "Long Groove",
                    "Bannockburn",
                    "Iverness",
                    "Hinsdale",
                    "Western Springs",
                    "Kideer",
                    "Evanston",
                    "Lincolnshire",
                    "Lisle",
                    "Vercon Hills",
                    "Wilmete",
                ],
                "Michigan" => [
                    "Ann Arbor",
                    "Grosse Pointe",
                    "Novi",
                    "Plymouth",
                    "Alpena",
                    "Traverse City",
                    "Lansing",
                    "Midland",
                    "Okemos",
                    "Grand Rapids",
                    "Kalamazoo",
                    "Holland",
                    "Saugatuck",
                    "Marquette",
                    "Bloomfield Hills",
                    "Buchanan",
                    "Northville Township",
                    "Farmington Hills",
                ],
                "Newyork" => [
                    "Kingston",
                    "Poughkeepsie",
                    "Garden City",
                    "Woodstock",
                    "Cooperstown",
                    "Binghamton",
                    "Buffalo",
                    "Rochester",
                    "Niagara Falls",
                    "Albany",
                    "Syracuse",
                    "Lake Placid",
                    "Montauk",
                    "Saratoga Springs",
                    "Ithaca",
                    "New York City",
                ],
                "North Carolina" => [
                    "Fayetteville",
                    "Winston Salem",
                    "Boone",
                    "Hickory",
                    "Chapel Hill",
                    "New Bern",
                    "Durham",
                    "Greensboro",
                    "Raleigh",
                    "Wilmington",
                    "Charlotte",
                    "Asheville",
                ],
                "Ohio" => [
                    "Mentor",
                    "Mason",
                    "Granville",
                    "Canton",
                    "Powell",
                    "Akron",
                    "Westerville",
                    "Cleveland",
                    "Youngstown",
                    "Toledo",
                    "Cincinnati",
                    "Dayton",
                    "Middletown",
                    "Lima",
                    "Sandusky",
                    "Mansfield",
                    "Coyahoga Falls",
                    "Findlay",
                    "Dublin",
                    "Athens",
                ],
                "Pennsylvania" => [
                    "Williamsport",
                    "Erie",
                    "Philadelphia",
                    "Hershey",
                    "Reading",
                    "Allentown",
                    "Swarthmore",
                    "York",
                    "Lancaster",
                    "Pittsburgh",
                    "Harrisburg",
                    "Scranton",
                ],
                "Texas" => [
                    "Houston",
                    "San Antonio",
                    "Dallas",
                    "Austin",
                    "Fort Worth",
                    "El Paso",
                    "Arlington",
                    "Corprus Christi",
                    "Plano",
                    "Laredo",
                    "Round Rock",
                ],
                "Canada" => [
                    "Toronto",
                    "Montreal",
                    "Calgary",
                    "Ottawa",
                    "Edmonton",
                    "Winnipeg",
                    "Halifax",
                    "Hamilton CAN",
                    "Brampton",
                    "Quebec",
                    "Ontario",
                    "Waterloo",
                ]
            ]
        ];

        foreach($regions as $region => $country) {

            
            $state = new State();
            $state->title = $region;
            $state->save();
            
            foreach($country as $eachCountry => $eachCity) {
                
                $country = new Country();
                $country->state_id = $state->id;
                $country->title = $eachCountry;
                $country->save();
                
                foreach($eachCity as $eachCityName){

                    $city = new City();
                    $city->country_id = $country->id;
                    $city->title = $eachCityName;
                    $city->save();
                    
                }
            }
        }

        $users = [
            [
                'name' => 'Amir Shay',
                'firstname' => 'Amir',
                'lastname' => 'Shay',
                'email' => 'amirshay@gmail.com',
                'username' => 'amir-shay',
                'password' => bcrypt('amir-shay'),
                'unhashed' => 'amir-shay',
                'about' => 'Desgin and Perfection',
                'address' => 'Lincoln Road, Miami, FLorida',
                'state_id' => 3,
                'country_id' => 27,
                'city_id' => 305,
            ],
            [
                'name' => 'Elizue Dias',
                'firstname' => 'Elizue',
                'lastname' => 'Dias',
                'email' => 'elizuedias@gmail.com',
                'username' => 'elizue-dias',
                'password' => bcrypt('elizue-dias'),
                'unhashed' => 'elizue-dias',
                'about' => 'How to live, know and explore',
                'address' => 'Broad Street, Birmingham, England',
                'state_id' => 2,
                'country_id' => 22,
                'city_id' => 222,
            ],
            [
                'name' => 'Hassan Shahid',
                'firstname' => 'Hassan',
                'lastname' => 'Shahid',
                'email' => 'hassanshahid@gmail.com',
                'username' => 'hassan-shahid',
                'password' => bcrypt('hassan-shahid'),
                'unhashed' => 'hassan-shahid',
                'about' => 'Keen to work hard and bright',
                'address' => 'Jinnah Avenue, Islamabad, Pakistan',
                'state_id' => 1,
                'country_id' => 1,
                'city_id' => 1,
            ],
            [
                'name' => 'Ghufran Siddiqui',
                'firstname' => 'Ghufran',
                'lastname' => 'Siddiqui',
                'email' => 'ghufransiddiqui@gmail.com',
                'username' => 'ghufran-siddiqui',
                'password' => bcrypt('ghufran-siddiqui'),
                'unhashed' => 'ghufran-siddiqui',
                'about' => 'Smart and Good looking',
                'address' => 'Shahrah-e-Faisal, Karachi, Pakistan',
                'state_id' => 1,
                'country_id' => 1,
                'city_id' => 8,
            ],
            [
                'name' => 'Jack Finnigan',
                'firstname' => 'Jack',
                'lastname' => 'Finnigan',
                'email' => 'jackfinnigan@gmail.com',
                'username' => 'jack-finnigan',
                'password' => bcrypt('jack-finnigan'),
                'unhashed' => 'jack-finnigan',
                'about' => 'Nature is cruel with great beauty',
                'address' => 'Collins Street, Melbourne VIC, Australia',
                'state_id' => 1,
                'country_id' => 19,
                'city_id' => 192,
            ],
            [
                'name' => 'Mike Baker',
                'firstname' => 'Mike',
                'lastname' => 'Baker',
                'email' => 'mikebaker@gmail.com',
                'username' => 'mike-baker',
                'password' => bcrypt('mike-baker'),
                'unhashed' => 'mike-baker',
                'about' => 'Love To Hike great mountains',
                'address' => 'Royal Mile, Edinburgh, Scotland',
                'state_id' => 2,
                'country_id' => 23,
                'city_id' => 236,
            ],
            [
                'name' => 'Paul Easton',
                'firstname' => 'Paul',
                'lastname' => 'Easton',
                'email' => 'pauleaston@gmail.com',
                'username' => 'paul-easton',
                'password' => bcrypt('paul-easton'),
                'unhashed' => 'paul-easton',
                'about' => 'Photography is life with ideas',
                'address' => 'Piccadilly Circus, London, England',
                'state_id' => 2,
                'country_id' => 22,
                'city_id' => 220,
            ],
            [
                'name' => 'Sam Clark',
                'firstname' => 'Sam',
                'lastname' => 'Clark',
                'email' => 'samclark@gmail.com',
                'username' => 'sam-clark',
                'password' => bcrypt('sam-clark'),
                'unhashed' => 'sam-clark',
                'about' => 'Learning and Earning, Only two Goals',
                'address' => 'Kroeger Street, Anaheim, California',
                'state_id' => 3,
                'country_id' => 26,
                'city_id' => 285,
            ],
            [
                'name' => 'Vince Fleming',
                'firstname' => 'Vince',
                'lastname' => 'Fleming',
                'email' => 'vincefleming@gmail.com',
                'username' => 'vince-fleming',
                'password' => bcrypt('vince-fleming'),
                'unhashed' => 'vince-fleming',
                'about' => 'Together we grow and smile as hippy',
                'address' => 'Queen Street, Auckland, New Zealand',
                'state_id' => 1,
                'country_id' => 20,
                'city_id' => 202,
            ],
            [
                'name' => 'Warren Wong',
                'firstname' => 'Warren',
                'lastname' => 'Wong',
                'email' => 'warrenwong@gmail.com',
                'username' => 'warren-wong',
                'password' => bcrypt('warren-wong'),
                'unhashed' => 'warren-wong',
                'about' => 'As Humans we love',
                'address' => 'Yonge Street, Toronto, Canada',
                'state_id' => 3,
                'country_id' => 36,
                'city_id' => 432,
            ],
        ];

        if(count($users) == count($userImgs)) {
            foreach ($users as $key => $each) {

                $user = new User();
                $user->name = $each['name'];
                $user->firstname = $each['firstname'];
                $user->lastname = $each['lastname'];
                $user->email = $each['email'];
                $user->username = $each['username'];
                $user->password = $each['password'];
                $user->unhashed = $each['unhashed'];
                $user->about = $each['about'];
                $user->address = $each['address'];
                $user->state_id = $each['state_id'];
                $user->country_id = $each['country_id'];
                $user->city_id = $each['city_id'];
                $user->save();

                // Image Upload
                $newFile = new File(storage_path('app/'.$userImgs[$key]));
                $title = $newFile->getFilename();
                $size = $newFile->getSize();
                $mimetype = $newFile->getMimeType();
                $mime = $newFile->extension();
                // $path_parts = pathinfo($file);
                Storage::putFileAs('public/users/', $newFile, $title);

                // Image
                $image = new Image();
                $image->title = $title;
                $image->user_id = $user->id;
                $image->size = $size;
                $image->mimetype = $mimetype;
                $image->mime = $mime;
                $image->save();
                
            }
        }

        $categories = [
            [
                'title' => 'Air Conditioners',
                'slug' => 'air-conditioner',
                'description' => 'Breathe healthy, fresh and organic',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Bags',
                'slug' => 'bags',
                'description' => 'Travel with style through life',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Bikes',
                'slug' => 'bikes',
                'description' => 'Bikes are fun to travel with',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Boats',
                'slug' => 'boats',
                'description' => 'Boats cruising through sea mellow',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Cars',
                'slug' => 'cars',
                'description' => 'Cars combined with fuel and power',
                'products' => [
                    
                ],
            ],  
            [
                'title' => 'Chairs',
                'slug' => 'chairs',
                'description' => 'Rest on the most peaceful pieces',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Glasses',
                'slug' => 'glasses',
                'description' => 'Have a look that astounds others',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Houses',
                'slug' => 'houses',
                'description' => 'Luxry houses with great designs',
                'products' => [
                    [
                        'title' => 'Happy Home B-O #6790',
                        'slug' => 'happy-home',
                        'price' => 57999,
                        'user_id' => 1,
                        'state_id' => 2,
                        'country_id' => 22,
                        'city_id' => 220
                    ],
                    [
                        'title' => 'Pool & Home B-W #6723',
                        'slug' => 'pool-home',
                        'price' => 42999,
                        'user_id' => 2,
                        'state_id' => 1,
                        'country_id' => 1,
                        'city_id' => 8
                    ],
                    [
                        'title' => 'Modern Luxury B-B #5675',
                        'slug' => 'modern-luxury',
                        'price' => 78999,
                        'user_id' => 3,
                        'state_id' => 1,
                        'country_id' => 1,
                        'city_id' => 1
                    ],
                    [
                        'title' => 'Superb Appeal B-W #5634',
                        'slug' => 'superb-appeal',
                        'price' => 32999,
                        'user_id' => 4,
                        'state_id' => 1,
                        'country_id' => 19,
                        'city_id' => 192
                    ],
                    [
                        'title' => 'Elegant Beauty O-W #5634',
                        'slug' => 'elegant-beauty',
                        'price' => 54999,
                        'user_id' => 5,
                        'state_id' => 2,
                        'country_id' => 24,
                        'city_id' => 250
                    ],
                    [
                        'title' => 'Dream Wood P-G #9065',
                        'slug' => 'dream-wood',
                        'price' => 96999,
                        'user_id' => 6,
                        'state_id' => 3,
                        'country_id' => 36,
                        'city_id' => 432
                    ],
                    [
                        'title' => 'Majestic Home P-B #0953',
                        'slug' => 'majestic-home',
                        'price' => 80999,
                        'user_id' => 7,
                        'state_id' => 2,
                        'country_id' => 22,
                        'city_id' => 221
                    ],
                    [
                        'title' => 'clay Rocks R-P #4509',
                        'slug' => 'clay-rocks',
                        'price' => 77999,
                        'user_id' => 8,
                        'state_id' => 1,
                        'country_id' => 7,
                        'city_id' => 64
                    ],
                    [
                        'title' => 'Snow Comfy W-B #3247',
                        'slug' => 'snow-comfy',
                        'price' => 51999,
                        'user_id' => 9,
                        'state_id' => 3,
                        'country_id' => 32,
                        'city_id' => 387
                    ],
                    [
                        'title' => 'Peace Garden W-G #2356',
                        'slug' => 'peace-garden',
                        'price' => 43999,
                        'user_id' => 10,
                        'state_id' => 3,
                        'country_id' => 31,
                        'city_id' => 373
                    ],
                ],
            ], 
            [
                'title' => 'Jwellery',
                'slug' => 'jwellery',
                'description' => 'The power of elegant beauty',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Mobiles',
                'slug' => 'mobiles',
                'description' => 'Always have the best option available',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Paintings',
                'slug' => 'paintings',
                'description' => 'Emotions of an artists played for you',
                'products' => [
                    
                ],
            ], 
            [
                'title' => 'Toys',
                'slug' => 'toys',
                'description' => 'Have great fun and adventures playing',
                'products' => [
                    
                ],
            ]
        ];

        if(count($categories) == count($catImgs)) {
            foreach ($categories as $key => $each) {
                $category = new Category();
                $category->title = $each['title'];
                $category->slug = $each['slug'];
                $category->description = $each['description'];
                $category->save();

                // Image Upload
                $newFile = new File(storage_path('app/'.$catImgs[$key]));
                $title = $newFile->getFilename();
                $size = $newFile->getSize();
                $mimetype = $newFile->getMimeType();
                $mime = $newFile->extension();
                // $path_parts = pathinfo($file);

                Storage::putFileAs('public/category/', $newFile, $title);

                // Image
                $image = new Image();
                $image->title = $title;
                $image->category_id = $category->id;
                $image->size = $size;
                $image->mimetype = $mimetype;
                $image->mime = $mime;
                $image->save();

                foreach($each['products'] as $key => $eachProd) {
                    $product = new Product();
                    $product->user_id = $eachProd['user_id'];
                    $product->category_id = $category->id;
                    $product->state_id = $eachProd['state_id'];
                    $product->country_id = $eachProd['country_id'];
                    $product->city_id = $eachProd['city_id'];
                    $product->title = $eachProd['title'];
                    $product->slug = $eachProd['slug'];
                    $product->price = $eachProd['price'];
                    $product->save();

                    // Image Upload
                    $newFile = new File(storage_path('app/'.$houseImgs[$key]));
                    $title = $newFile->getFilename();
                    $size = $newFile->getSize();
                    $mimetype = $newFile->getMimeType();
                    $mime = $newFile->extension();
                    $filePathName = 'public/'.$category->slug.'/';

                    Storage::putFileAs($filePathName, $newFile, $title);

                    // Image
                    $image = new Image();
                    $image->title = $title;
                    $image->product_id = $product->id;
                    $image->size = $size;
                    $image->mimetype = $mimetype;
                    $image->mime = $mime;
                    $image->save();
                }
                
            }
        }
        
        $houses = [

        ];

        // if(count($houses) == count($houseImgs)) {
        //     foreach ($houses as $key => $each) {
        //         
        //     }
        // }
        
        $chairs = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Baby Green Chair',
                'slug' => 'baby-green-chair',
                'price' => 299,
                'featured' => true,
            ], 
        ];

    }
}
