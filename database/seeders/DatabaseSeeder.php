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
        Storage::deleteDirectory('public/products');
        $userImgs = Storage::files('public/userImgs');
        $catImgs = Storage::files('public/catImgs');
       

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
            ], 
            [
                'title' => 'Bags',
                'slug' => 'bags',
                'description' => 'Travel with style through life',
                'products' => [
                    [
                        'title' => 'Maiten Classy Green',
                        'slug' => 'maiten-classy-green',
                        'price' => 599,
                        'user_id' => 1,
                    ],
                    [
                        'title' => 'RX Nomatic Black',
                        'slug' => 'rx-nomatic-black',
                        'price' => 899,
                        'user_id' => 2,
                    ],
                    [
                        'title' => 'Classic Blue Look',
                        'slug' => 'classic-blue-look',
                        'price' => 299,
                        'user_id' => 3,
                    ],
                    [
                        'title' => 'HXL Leather Brown',
                        'slug' => 'hxl-leather-brown',
                        'price' => 499,
                        'user_id' => 4,
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
                        'price' => 10999,
                        'user_id' => 10,
                    ],
                ],
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
                ]
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
                'title' => 'Plants',
                'slug' => 'plants',
                'description' => 'Breathe well and have a healthy habit',
                'products' => [
                    
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
                    $product->state_id = $eachProd['state_id'] ?? null;
                    $product->country_id = $eachProd['country_id'] ?? null;
                    $product->city_id = $eachProd['city_id'] ?? null;
                    $product->title = $eachProd['title'];
                    $product->slug = $eachProd['slug'];
                    $product->price = $eachProd['price'];
                    $product->save();

                    // Image Upload

                    $newFile = null;
                    switch ($category->slug) {
                        case 'airpods':
                            $newFile = new File(storage_path('app/'.Storage::files('public/airpodImgs')[$key]));
                        break;
                        case 'bags':
                            $newFile = new File(storage_path('app/'.Storage::files('public/bagImgs')[$key]));
                        break;
                        case 'boats':
                            $newFile = new File(storage_path('app/'.Storage::files('public/boatImgs')[$key]));
                        break;
                        case 'cars':
                            $newFile = new File(storage_path('app/'.Storage::files('public/carImages')[$key]));
                        break;
                        case 'chairs':
                            $newFile = new File(storage_path('app/'.Storage::files('public/chairImgs')[$key]));
                        break;
                        case 'cycles':
                            $newFile = new File(storage_path('app/'.Storage::files('public/chairImgs')[$key]));
                        break;
                        case 'houses':
                            $newFile = new File(storage_path('app/'.Storage::files('public/houseImgs')[$key]));
                        break;
                        case 'shirts':
                            $newFile = new File(storage_path('app/'.Storage::files('public/shirtImgs')[$key]));
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
                }
                
            }
        }
        
            
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
