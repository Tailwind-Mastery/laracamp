<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Design;
use App\Models\Group;
use App\Models\Image;
use App\Models\Product;
use App\Models\Review;
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
        Storage::deleteDirectory('public/products');
        Storage::deleteDirectory('public/collection');
        $userImgs = Storage::files('public/userImgs');
        $catImgs = Storage::files('public/catImgs');
        $collectionImgs = Storage::files('public/collectionImgs');
       

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
            foreach ($users as $userKey => $each) {

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
                $newFile = new File(storage_path('app/'.$userImgs[$userKey]));
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
                'title' => 'Air Pods',
                'slug' => 'airpods',
                'description' => 'Best quality sound for ears',
                'products' => [
                    [
                        'title' => 'Simple Air Pods White',
                        'slug' => 'simple-air-pods-white',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Cute Air Pods White',
                        'slug' => 'cute-air-pods-white',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Power Air Pods White',
                        'slug' => 'power-air-pods-white',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Compact Air Pods White',
                        'slug' => 'compact-air-pods-white',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Unique Air Pods White',
                        'slug' => 'unique-air-pods-white',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Classic Air Pods White',
                        'slug' => 'classic-air-pods-white',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Shady Air Pods White',
                        'slug' => 'shady-air-pods-white',
                        'featured' => true,
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Elegant Air Pods White',
                        'slug' => 'elegant-air-pods-white',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Smooth Air Pods White',
                        'slug' => 'smooth-air-pods-white',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Vibrant Air Pods black',
                        'slug' => 'vibrant-air-pods-black',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Generation',
                    'description' => 'Which generation is perfect for me ?',
                    'types' => [
                        [
                            'title' => '1st',
                            'description' => '75dB(SPL) 2hrs',
                        ],
                        [
                            'title' => '2nd',
                            'description' => '75dB(SPL) 4hrs',
                        ],
                        [
                            'title' => '3rd',
                            'description' => '75dB(SPL) 6hrs',
                        ],
                    ]
                ]
            ], 
            [
                'title' => 'Bags',
                'slug' => 'bags',
                'description' => 'Travel with style through life',
                'products' => [
                    [
                        'title' => 'RX Nomatic Black',
                        'slug' => 'rx-nomatic-black',
                        'price' => 899,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Maiten Classy Green',
                        'slug' => 'maiten-classy-green',
                        'price' => 599,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'HXL Leather Brown',
                        'slug' => 'hxl-leather-brown',
                        'price' => 499,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Classic Blue Look',
                        'slug' => 'classic-blue-look',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Haupes Shady Green',
                        'slug' => 'haupes-shady-green',
                        'price' => 799,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Shield Camping Green',
                        'slug' => 'shield-camping-green',
                        'price' => 199,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Maganol Red Blaze',
                        'slug' => 'maganol-red-blaze',
                        'price' => 699,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Miller Leathery Pink',
                        'slug' => 'miller-leathery-pink',
                        'price' => 999,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Titanic X Silver Black',
                        'slug' => 'titanix-x-silver-black',
                        'price' => 399,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Vinta Mountain Green',
                        'slug' => 'vinta-mountain-green',
                        'featured' => true,
                        'price' => 10999,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Size',
                    'description' => 'Which size should I prefer ?',
                    'types' => [
                        [
                            'title' => '18L',
                            'description' => 'Perfect for a reasonable amount of snacks',
                        ],
                        [
                            'title' => '20L',
                            'description' => 'Enough room for a snacks and clothes backpack',
                        ],
                        [
                            'title' => '22L',
                            'description' => 'Large room for picnic and lunch boxes for fun outing',
                        ],
                    ]
                ]
            ], 
            [
                'title' => 'Boats',
                'slug' => 'boats',
                'description' => 'Boats cruising through sea mellow',
                'products' => [
                    [
                        'title' => 'Thunder Heavy White Boat',
                        'slug' => 'thunder-heavy-white-boat',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Fishing Season Blue Boat',
                        'slug' => 'fishing-season-blue-boat',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Tribal Vintage Brown Boat',
                        'slug' => 'tribal-vintage-brown-boat',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Stallion Deck Peach Boat',
                        'slug' => 'stallion-deck-peach-boat',
                        'featured' => true,
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Rusty White Blue Boat',
                        'slug' => 'rusty-white-blue-boat',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Rushing Power White Boat',
                        'slug' => 'rushing-power-white-boat',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Elegant Peace Red Boat',
                        'slug' => 'elegant-peace-red-boat',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Storm Chaser White Boat',
                        'slug' => 'storm-chaser-white-boat',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Family Fun White Boat',
                        'slug' => 'family-fun-white-boat',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Long holiday White Boat',
                        'slug' => 'long-holiday-white-boat',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Passenger',
                    'description' => 'How many passenger should I consider ?',
                    'types' => [
                        [
                            'title' => '5-6 People',
                            'description' => 'Size must be 15 - 20 ft',
                        ],
                        [
                            'title' => '8-10 People',
                            'description' => 'Size must be 24 - 26 ft',
                        ],
                        [
                            'title' => '12-14 People',
                            'description' => 'Size must be 27 - 30 ft',
                        ],
                    ]
                ],
            ],
            [
                'title' => 'Cars',
                'slug' => 'cars',
                'description' => 'Cars combined with fuel and power',
                'products' => [
                    [
                        'title' => 'Porche Amazing Black Car',
                        'slug' => 'porche-amazing-black-car',
                        'price' => 1099,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Audi Forest Brown Car',
                        'slug' => 'audi-forest-brown-car',
                        'price' => 10099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Ford Mustang Blue Car',
                        'slug' => 'ford-mustand-blue-car',
                        'price' => 2099,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Mercedes Benz Red Car',
                        'slug' => 'mercedes-benz-red-car',
                        'price' => 9099,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Ford GT Green Car',
                        'slug' => 'ford-gt-green-car',
                        'price' => 3099,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Ferrari Amazing Orange Car',
                        'slug' => 'ferrari-amazing-orange-car',
                        'price' => 8099,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Mitsubishi Sports Red Car',
                        'slug' => 'mitsubishi-sports-red-car',
                        'price' => 4099,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'BMW Shining Black Car',
                        'slug' => 'bmw-shining-black-car',
                        'price' => 7099,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Acura Racing Silver Car',
                        'slug' => 'acura-racing-silver-car',
                        'price' => 5099,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Audi Snow White Car',
                        'slug' => 'audi-snow-white-car',
                        'featured' => true,
                        'price' => 6099,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Transmission',
                    'description' => 'Which transmission should I drive ?',
                    'types' => [
                        [
                            'title' => 'Manual',
                            'description' => 'Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup',
                        ],
                        [
                            'title' => 'Automatic',
                            'description' => 'Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup',
                        ],
                        [
                            'title' => 'CVT',
                            'description' => 'Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Chairs',
                'slug' => 'chairs',
                'description' => 'Comfortable, Elegant and beautiful',
                'products' => [
                    [
                        'title' => 'Comfy Baby Green Chair',
                        'slug' => 'comfy-baby-green-chair',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Garden Red Plastic Chair',
                        'slug' => 'garden-red-plastic-chair',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Comfy Elegant Gray Chair',
                        'slug' => 'comfy-elegant-gray-chair',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Curve Design Yellow Chair',
                        'slug' => 'curve-design-yellow-chair',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Elegant Foam Orange Chair',
                        'slug' => 'elegant-foam-orange-chair',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Stylish Kings White Chiar',
                        'slug' => 'stylish-kings-white-chair',
                        'featured' => true,
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Beautiful Woven Shell Chair',
                        'slug' => 'beautiful-woven-shell-chair',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Elegant Leather Brown Chair',
                        'slug' => 'elegant-leather-brown-chair',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Stylish Woven Deck Chairs',
                        'slug' => 'stylish-woven-deck-chairs',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Comfy Cushion White Chair',
                        'slug' => 'comfy-cushion-white-chair',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups'=> [
                    'title' => 'Material',
                    'description' => 'Which material should I prefer ?',
                    'types' => [
                        [
                            'title' => 'Wood',
                            'description' => 'Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Office',
                        ],
                        [
                            'title' => 'Steel',
                            'description' => 'Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Office',
                        ],
                        [
                            'title' => 'Plastic',
                            'description' => 'Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Office',
                        ],
                    ]
                ],
            ],
            [
                'title' => 'Cycles',
                'slug' => 'cycles',
                'description' => 'cycles are fun to travel with',
                'products' => [
                    [
                        'title' => 'Beach Master Black Cycle',
                        'slug' => 'beach-master-black-cycle',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Mountain Bike Black Cycle',
                        'slug' => 'mountain-bike-black-cycle',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Simple Home Cyan Cycle',
                        'slug' => 'simple-home-cyan-cycle',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Forest Blazing Black Cycle',
                        'slug' => 'forest-blazing-black-cycle',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Shiny Appeal Puple Cycle',
                        'slug' => 'shiny-appeal-purple-cycle',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Mobike Basket Red Cycle',
                        'slug' => 'mobike-basket-red-cycle',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Performance Rider Black Cycle',
                        'slug' => 'performance-rider-black-cycle',
                        'featured' => true,
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Pearson Classic Black Cycle',
                        'slug' => 'pearson-classic-black-cycle',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Triban Smooth White Cycle',
                        'slug' => 'triban-smooth-white-cycle',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Ofo Basket Yellow Cycle',
                        'slug' => 'offo-basket-yellow-cycle',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Tire',
                    'description' => 'Which tire is best for my ride ?',
                    'types' => [
                        [
                            'title' => 'Standard',
                            'description' => '700C - 25mm',
                        ],
                        [
                            'title' => 'Road',
                            'description' => '700C - 23mm - 32mm',
                        ],
                        [
                            'title' => 'Hybrid',
                            'description' => '700C - 32 mm',
                        ],
                    ]
                ],
            ],  
            [
                'title' => 'Glasses',
                'slug' => 'glasses',
                'description' => 'Have a look that astounds others',
                'products' => [
                    [
                        'title' => 'Rusty Beach Glasses',
                        'slug' => 'rusty-beach-glasses',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Elegant Black Glasses',
                        'slug' => 'elegant-black-glasses',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Beautiful Peach Glasses',
                        'slug' => 'beautiful-peach-glasses',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Abstract Pair Glasses',
                        'slug' => 'abstract-pair-glasses',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Hybrid Purple Glasses',
                        'slug' => 'hybrid-purple-glasses',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Rayfan Black Glasses',
                        'slug' => 'rayfan-black-glasses',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Classic Reading Glasses',
                        'slug' => 'classic-reading-glasses',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Round Red Glasses',
                        'slug' => 'round-red-glasses',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Tiger Pattern Glasses',
                        'slug' => 'tiger-pattern-glasses',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Unique White Glasses',
                        'slug' => 'unique-white-glasses',
                        'featured' => true,
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Lens',
                    'description' => 'Which lens suits my eyes ?',
                    'types' => [
                        [
                            'title' => 'Small',
                            'description' => '50mm or less',
                        ],
                        [
                            'title' => 'Medium',
                            'description' => '51mm to 54mm',
                        ],
                        [
                            'title' => 'Large',
                            'description' => 'Wider then 55mm',
                        ],
                    ]
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
                        'city_id' => 221,
                        'featured' => true,
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
                'groups'=> [
                    'title' => 'Living',
                    'description' => 'Which living standard is my style ?',
                    'types' => [
                        [
                            'title' => 'Standard',
                            'description' => '3 rooms, 1 kitchen, 2 bathrooms and 1 garden / gallery',
                        ],
                        [
                            'title' => 'Modern',
                            'description' => '5 rooms, 2 kitchen, 2 bathrooms and 1 garden / gallery',
                        ],
                        [
                            'title' => 'Luxury',
                            'description' => '7 rooms, 3 kitchen, 3 bathrooms and 1 garden / gallery',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Jwellery',
                'slug' => 'jwellery',
                'description' => 'The power of elegant beauty',
                'products' => [
                    [
                        'title' => 'Blue Stone Silver Ring Jwell',
                        'slug' => 'blue-stone-silver-ring-jwell',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Beautiful Golden Chain Jwell',
                        'slug' => 'beautiful-golden-chain-jwell',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Elegant Gold Ear Jwell',
                        'slug' => 'elegant-gold-ear-jwell',
                        'featured' => true,
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Design Gold Bracelet Jwell',
                        'slug' => 'design-gold-bracelet-jwell',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Heart Golden Black Jwell',
                        'slug' => 'heart-golden-black-jwell',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Unique Gold Pair Jwell',
                        'slug' => 'unique-gold-pair-jwell',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Peach Stone Carved Ring Jwell',
                        'slug' => 'peach-stone-carved-ring-jwell',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Elegant Sapphire Gold Ring Jwell',
                        'slug' => 'elegant-sapphire-gold-ring-jwell',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Designer Silver Cut Jwell',
                        'slug' => 'designer-silver-cut-jwell',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Life Silver beauty Jwell',
                        'slug' => 'life-silver-beauty-jwell',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups'=> [
                    'title' => 'Carrat',
                    'description' => 'How many carrots should I consider ?',
                    'types' => [
                        [
                            'title' => '24K',
                            'description' => 'Perfect weight for pure Gold',
                        ],
                        [
                            'title' => '18K',
                            'description' => 'Jwellerty contains 75 percent Gold',
                        ],
                        [
                            'title' => '6K',
                            'description' => 'Copper or Silver with 25 percent gold',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Mobiles',
                'slug' => 'mobiles',
                'description' => 'Always have the best option available',
                'products' => [
                    [
                        'title' => 'Ultra Edge Black Mobile',
                        'slug' => 'ultra-edge-black-mobile',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Profound Smart Blue Mobile',
                        'slug' => 'profound-smart-blue-mobile',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Huawei Daisy Blue Mobile',
                        'slug' => 'huawei-daisy-blue-mobile',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Huawei Shiny Blue Mobile',
                        'slug' => 'huawei-shiny-blue-mobile',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Elegant Pair Peach Mobile',
                        'slug' => 'elegant-pair-peach-mobile',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Aesthatic Purple Mobile',
                        'slug' => 'aesthatic-purple-mobile',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Hybrid Red Pair Mobile',
                        'slug' => 'hybrid-red-pair-mobile',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Velvet Leather Sevure Mobile',
                        'slug' => 'velvet-leather-secure-mobile',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Air Bounce White Mobile',
                        'slug' => 'air-bounce-white-mobile',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'High Definition Lens Mobile',
                        'slug' => 'high-definition-lens-mobile',
                        'featured' => true,
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups'=> [
                    'title' => 'Screen',
                    'description' => 'Which screen size is good for me ?',
                    'types' => [
                        [
                            'title' => 'Common',
                            'description' => '720 x 1280, most common mobile size',
                        ],
                        [
                            'title' => '4.7" - 7.7"',
                            'description' => '480 x 800, 640 x 1136, 720 x 1280',
                        ],
                        [
                            'title' => '7.7" - 9.7"',
                            'description' => '750 x 1334, 1080 x 1920, and 1440 x 2560',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Paintings',
                'slug' => 'paintings',
                'description' => 'Emotions of an artists played for you',
                'products' => [
                    [
                        'title' => 'Wandering Alone Painting',
                        'slug' => 'wandering-alone-painting',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Birds Tree Painting',
                        'slug' => 'birds-tree-painting',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Child Playing Painting',
                        'slug' => 'child-playing-painting',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Amazing Flowers Painting',
                        'slug' => 'amazing-flowers-painting',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Farm Sunrise Painting',
                        'slug' => 'farm-sunrise-painting',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Mountain Village Painting',
                        'slug' => 'mountain-village-painting',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Family Picnic Painting',
                        'slug' => 'family-picnic-painting',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Sheep Group Painting',
                        'slug' => 'sheep-group-painting',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Busy Town Painting',
                        'slug' => 'busy-town-painting',
                        'featured' => true,
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Beautiful Vase Painting',
                        'slug' => 'beautiful-vase-painting',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Canvas',
                    'description' => 'Which canvas suits my room ?',
                    'types' => [
                        [
                            'title' => 'Small',
                            'description' => '4 to 7 inches canvas',
                        ],
                        [
                            'title' => 'Medium',
                            'description' => '8 to 16 inches canvas',
                        ],
                        [
                            'title' => 'Large',
                            'description' => '18 to 48 inches canvas',
                        ],
                        ]
                ],
            ], 
            [
                'title' => 'Perfumes',
                'slug' => 'perfumes',
                'description' => 'Emotions of an artists played for you',
                'products' => [
                    [
                        'title' => 'Aqua Allegoria Perfume',
                        'slug' => 'aqua-allegoria-perfume',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Calvin Klein BE Perfume',
                        'slug' => 'calvin-klein-be-perfume',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Calvin Klein ONE Perfume',
                        'slug' => 'calvin-klein-one-perfume',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Chanel Coco Noir Perfume',
                        'slug' => 'chanel-coco-noir-perfume',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Red Diamond Perfume',
                        'slug' => 'red-diamond-perfume',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Versace Eros Perfume',
                        'slug' => 'versace-eros-perfume',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Prade Milang Perfume',
                        'slug' => 'prada-milang-perfume',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Black Opium Perfume',
                        'slug' => 'black-opium-perfume',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Euphoria Avenue Perfume',
                        'slug' => 'euphoria-avenue-perfume',
                        'featured' => true,
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Jaguar Red Perfume',
                        'slug' => 'jaguar-rede-perfume',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Bottle',
                    'description' => 'Which bottle serves me well ?',
                    'types' => [
                        [
                            'title' => '0.8 Fl Oz',
                            'description' => '1.5 - 25 mL, 15 - 250 sprays',
                        ],
                        [
                            'title' => '2 Fl Oz',
                            'description' => '40 - 60 mL, 300 - 600 sprays',
                        ],
                        [
                            'title' => '3.4 Fl Oz',
                            'description' => '75 - 100 mL, 750 - 100 sprays',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Plants',
                'slug' => 'plants',
                'description' => 'Breathe well and have a healthy habit',
                'products' => [
                    [
                        'title' => 'Forest Flower Plant',
                        'slug' => 'frest-flower-plant',
                        'featured' => true,
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Blue Vase Grass Plant',
                        'slug' => 'blue-vase-grass-plant',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Red Flower Cactus Plant',
                        'slug' => 'red-flower-cactus-plant',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Pink Pot Leafy Plant',
                        'slug' => 'pink-pot-leafy-plant',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Table Pots Flower Plant',
                        'slug' => 'table-pots-flower-plant',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Kettle Vase Red Plant',
                        'slug' => 'kettle-vase-red-plant',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Shadow Baby Leaves Plant',
                        'slug' => 'shadow-baby-leaves-plant',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Long Leaves Pot Plant',
                        'slug' => 'long-leaves-pot-plant',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Beauty Leaves Vase Plant',
                        'slug' => 'beauty-leaves-vase-plant',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Colored Pots Leaves Plant',
                        'slug' => 'colored-pots-leaves-plant',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Family',
                    'description' => 'Which family should I grow ?',
                    'types' => [
                        [
                            'title' => 'Seed',
                            'description' => 'Herbs, Shrubs, Trees, Climbers, and Creepers',
                        ],
                        [
                            'title' => 'Ferns',
                            'description' => 'Herbs, Shrubs, Trees, Climbers, and Creepers',
                        ],
                        [
                            'title' => 'Mosses',
                            'description' => 'Herbs, Shrubs, Trees, Climbers, and Creepers',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Shirts',
                'slug' => 'shirts',
                'description' => 'Dress well and Breathe Fashion',
                'products' => [
                    [
                        'title' => 'Simple Black Shirt',
                        'slug' => 'simple-black-shirt',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Stylish Dotted Blue Shirt',
                        'slug' => 'stylish-dotted-blue-shirt',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Checks Dark Blue Shirt',
                        'slug' => 'checks-dark-blue-shirt',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Dark Styled Green Shirt',
                        'slug' => 'dark-styled-green-shirt',
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Decent Pure Green Shirt',
                        'slug' => 'decent-pure-green-shirt',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Smart Light Blue Shirt',
                        'slug' => 'smart-light-blue-shirt',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Multiple Pattern Shirt',
                        'slug' => 'multiple-pattern-shirt',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Decent Design Shirt',
                        'slug' => 'decent-design-shirt',
                        'featured' => true,
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Smart Purple Shirt',
                        'slug' => 'smart-purple-shirt',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Checked Red Shirt',
                        'slug' => 'checked-red-shirt',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Size',
                    'description' => 'Which size should I pick ?',
                    'types' => [
                        [
                            'title' => 'XXS',
                            'description' => 'Very Small',
                        ],
                        [
                            'title' => 'XS',
                            'description' => 'Exra Small',
                        ],
                        [
                            'title' => 'S',
                            'description' => 'Small',
                        ],
                        [
                            'title' => 'M',
                            'description' => 'Medium',
                        ],
                        [
                            'title' => 'L',
                            'description' => 'Large',
                        ],
                        [
                            'title' => 'XL',
                            'description' => 'Extra Large',
                        ],
                        [
                            'title' => '2XL',
                            'description' => 'Much Large',
                        ],
                        [
                            'title' => '3XL',
                            'description' => 'Very Large',
                        ],
                    ]
                ],
            ], 
            [
                'title' => 'Toys',
                'slug' => 'toys',
                'description' => 'Have great fun and adventures playing',
                'products' => [
                    [
                        'title' => 'Batman Car Toy',
                        'slug' => 'batman-car-toy',
                        'price' => 199,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'Foam Bunny Toy',
                        'slug' => 'foam-bunny-toy',
                        'price' => 1099,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Vroom Car Toy',
                        'slug' => 'vroom-car-toy',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'Garry Car Toy',
                        'slug' => 'garry-car-toy',
                        'featured' => true,
                        'price' => 999,
                        'user_id' => 4,
                    ],
                    [
                        'title' => 'Fun Group Toy',
                        'slug' => 'fun-group-toy',
                        'price' => 399,
                        'user_id' => 5,
                    ],
                    [
                        'title' => 'Transformer Robot Toy',
                        'slug' => 'transformer-robot-toy',
                        'price' => 899,
                        'user_id' => 6,
                    ],
                    [
                        'title' => 'Standing Happy Toy',
                        'slug' => 'standing-happy-toy',
                        'price' => 499,
                        'user_id' => 7,
                    ],
                    [
                        'title' => 'Star Wars Toy',
                        'slug' => 'star-wars-toy',
                        'price' => 799,
                        'user_id' => 8,
                    ],
                    [
                        'title' => 'Teddy Bear Toy',
                        'slug' => 'teddy-bear-toy',
                        'price' => 599,
                        'user_id' => 9,
                    ],
                    [
                        'title' => 'Vroom Truck Toy',
                        'slug' => 'croom-truck-toy',
                        'price' => 699,
                        'user_id' => 10,
                    ],
                ],
                'groups' => [
                    'title' => 'Age Group',
                    'description' => 'What is best for my child ?',
                    'types' => [
                        [
                            'title' => 'Infants',
                            'description' => 'Things to drop, build, push, roll, pull and play with',
                        ],
                        [
                            'title' => 'Toddlers',
                            'description' => 'Things to solve, build, create, music and throwing',
                        ],
                        [
                            'title' => 'Kindergarten',
                            'description' => 'Things to talk, build, create, computer, music and share',
                        ],
                    ]
                ],
            ]
        ];

        $reviews = [
            "I got a pair of boots from Laracamp and I am very satisfied. They are high-quality and worth the money",
            "Laracamp offered free shipping at that price so that is a plus!",
            "I recently purchased this from Laracamp, and I couldnot be happier with my online shopping experience",
            "Their website was user-friendly, making it easy to find the perfect item",
            "The checkout process was smooth, and I received my order promptly. My product arrived in excellent condition, exactly as described on their website",
            "I am thrilled with the quality and will definitely shop at Laracamp again in the future. Highly recommended!",
            "I ordered my product from Laracamp last week, and I was amazed at how quickly it arrived. The packaging was secure, ensuring the item was undamaged",
            "The customer service was exceptional, as they kept me updated throughout the entire process",
            "I had a question about the product, and their support team responded promptly and professionally",
            "Overall, my experience with Laracamp was outstanding, and I cannot wait for my next purchase.",
        ];
        
        if(count($categories) == count($catImgs)) {
            foreach ($categories as $catKey => $each) {
                $category = new Category();
                $category->title = $each['title'];
                $category->slug = $each['slug'];
                $category->description = $each['description'];
                $category->save();

                // Image Upload
                $newFile = new File(storage_path('app/'.$catImgs[$catKey]));
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

                foreach($each['products'] as $prodKey => $eachProd) {

                    $product = new Product();
                    $product->user_id = $eachProd['user_id'];
                    $product->category_id = $category->id;
                    $product->state_id = $eachProd['state_id'] ?? null;
                    $product->country_id = $eachProd['country_id'] ?? null;
                    $product->city_id = $eachProd['city_id'] ?? null;
                    $product->title = $eachProd['title'];
                    $product->slug = $eachProd['slug'];
                    $product->price = $eachProd['price'];
                    $product->featured = $eachProd['featured'] ?? false;
                    $product->save();

                    // Image Upload

                    $newFile = null;
                    switch ($category->slug) {
                        case 'airpods':
                            $newFile = new File(storage_path('app/'.Storage::files('public/airpodImgs')[$prodKey]));
                        break;
                        case 'bags':
                            $newFile = new File(storage_path('app/'.Storage::files('public/bagImgs')[$prodKey]));
                        break;
                        case 'boats':
                            $newFile = new File(storage_path('app/'.Storage::files('public/boatImgs')[$prodKey]));
                        break;
                        case 'cars':
                            $newFile = new File(storage_path('app/'.Storage::files('public/carImgs')[$prodKey]));
                        break;
                        case 'chairs':
                            $newFile = new File(storage_path('app/'.Storage::files('public/chairImgs')[$prodKey]));
                        break;
                        case 'cycles':
                            $newFile = new File(storage_path('app/'.Storage::files('public/cycleImgs')[$prodKey]));
                        break;
                        case 'glasses':
                            $newFile = new File(storage_path('app/'.Storage::files('public/glassImgs')[$prodKey]));
                        break;
                        case 'houses':
                            $newFile = new File(storage_path('app/'.Storage::files('public/houseImgs')[$prodKey]));
                        break;
                        case 'jwellery':
                            $newFile = new File(storage_path('app/'.Storage::files('public/jwelleryImgs')[$prodKey]));
                        break;
                        case 'mobiles':
                            $newFile = new File(storage_path('app/'.Storage::files('public/mobImgs')[$prodKey]));
                        break;
                        case 'paintings':
                            $newFile = new File(storage_path('app/'.Storage::files('public/paintImgs')[$prodKey]));
                        break;
                        case 'perfumes':
                            $newFile = new File(storage_path('app/'.Storage::files('public/perfumeImgs')[$prodKey]));
                        break;
                        case 'plants':
                            $newFile = new File(storage_path('app/'.Storage::files('public/plantImgs')[$prodKey]));
                        break;
                        case 'shirts':
                            $newFile = new File(storage_path('app/'.Storage::files('public/shirtImgs')[$prodKey]));
                        break;
                        case 'toys':
                            $newFile = new File(storage_path('app/'.Storage::files('public/toyImgs')[$prodKey]));
                        break;
                    }
                    
                    $title = $newFile->getFilename();
                    $size = $newFile->getSize();
                    $mimetype = $newFile->getMimeType();
                    $mime = $newFile->extension();
                    $filePathName = 'public/products/';

                    Storage::putFileAs($filePathName, $newFile, $title);

                    // Image
                    $image = new Image();
                    $image->title = $title;
                    $image->product_id = $product->id;
                    $image->size = $size;
                    $image->mimetype = $mimetype;
                    $image->mime = $mime;
                    $image->save();
                    
                    // Cart, Review 
                    for($i=1; $i< 11; $i++) {
                        if($eachProd['user_id'] == $i){continue;}

                        $cart = new Cart();
                        $cart->user_id = $i;
                        $cart->product_id = $product->id;
                        $cart->save();
                        
                        $review = new Review();
                        $review->user_id = $i;
                        $review->product_id = $product->id;
                        $review->review = $reviews[$i-1];
                        $review->save();
                    }
                }

                foreach($each['groups']['types'] as $eachGroup) {
                    $group = new Group();
                    $group->category_id = $category->id;
                    $group->group_title = $each['groups']['title'];
                    $group->group_description = $each['groups']['description'];
                    $group->title = $eachGroup['title'];
                    $group->description = $eachGroup['description'];
                    $group->save();
                }
                
            }
        }

        $collection = [
            [
                'title' => 'New Arrivals',
                'slug' => 'new-arrivals',
                'description' => 'Boost latest products and discounts',
            ],
            [
                'title' => 'Season Flavour',
                'slug' => 'season-flavour',
                'description' => 'Enjoy all seasons with their fun',
            ],
            [
                'title' => 'Arts And Design',
                'slug' => 'arts-and-design',
                'description' => 'Make great intresting ideas',
            ],
            [
                'title' => 'Beautiful Walls',
                'slug' => 'beautiful-walls',
                'description' => 'Beauty and flawless design',
            ],
            [
                'title' => 'Wind And Sea',
                'slug' => 'Wind-and-sea',
                'description' => 'Amazingly shiny cars and boats',
            ],
            [
                'title' => 'Chair And Sofa',
                'slug' => 'chair-and-sofa',
                'description' => 'Furniture for each corner',
            ],
            [
                'title' => 'Upgrade Your Desk',
                'slug' => 'upgrade-your-desk',
                'description' => 'Help yourself to productivity',
            ],
            [
                'title' => 'Lala Land',
                'slug' => 'lala-land',
                'description' => 'Interactive and Educative fun',
            ],
            [
                'title' => 'Love Aroma',
                'slug' => 'Love Aroma',
                'description' => 'Attraction and love for you',
            ],
            [
                'title' => 'Grooms Day',
                'slug' => 'grooms-day',
                'description' => 'Expensive Tux Tie Watch Shoes',
            ],
            [
                'title' => 'Ocean Master',
                'slug' => 'ocean-master',
                'description' => 'Sunshine boat docked at sea',
            ],
            [
                'title' => 'Shiny Deck',
                'slug' => 'shiny-deck',
                'description' => 'Elegantly polished interior',
            ],
        ];

        if(count($collection) == count($collectionImgs)) {
            foreach ($collection as $collKey => $each) {
                $design = new Design();
                $design->title = $each['title'];
                $design->slug = $each['slug'];
                $design->description = $each['description'];
                $design->save();

                // Image Upload
                $newFile = new File(storage_path('app/'.$collectionImgs[$collKey]));
                $title = $newFile->getFilename();
                $size = $newFile->getSize();
                $mimetype = $newFile->getMimeType();
                $mime = $newFile->extension();

                Storage::putFileAs('public/collection/', $newFile, $title);

                // Image
                $image = new Image();
                $image->title = $title;
                $image->design_id = $design->id;
                $image->size = $size;
                $image->mimetype = $mimetype;
                $image->mime = $mime;
                $image->save();

            }
        }

    }
}
