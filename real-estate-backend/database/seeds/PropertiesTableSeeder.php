<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('properties')->delete();
        
        \DB::table('properties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Modern and quirky flat',
                'description' => 'About GreatSchools
GreatSchools ratings based on test scores and additional metrics when available.

About the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given state. As of September 2017, the GreatSchools ratings also incorporate additional information, when available, such as college readiness, academic progress, advanced courses, equity, discipline and attendance data. GreatSchools ratings are designed to be a starting point to help parents compare schools, and should not be the only factor used in selecting the right school for your family. Learn more

Disclaimer: School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries. In addition, school data is obtained from a third party vendor and not guaranteed to be accurate, up to date or complete.',
                'featured' => 1,
                'user_id' => 1,
                'property_type_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Centrally Located Office',
            'description' => 'Renovated 1st floor 2 bedroom, 1 bathroom apartment available January 2020. We are looking for a great tenant to fill this space! The apartment is in close proximity to Temple University and it is easy to access any part of Philadelphia from this location, especially Center City. Contact us as soon as possible. This apartment will not be available for long. :-) Tenant is responsible for gas and electric bills, must remove all trash from building, and respect other tenants.
',
            'featured' => NULL,
            'user_id' => 1,
            'property_type_id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        2 => 
        array (
            'id' => 3,
            'title' => 'Comfortable family house',
            'description' => 'Fantastic 3 bedroom 2 bath available December 1st! This modern apartment was renovated only 3 years ago! High end finishes throughout including granite counter tops, stainless steel appliances, hardwood floors and washer/dryers in the unit. Call to schedule a showing today!
',
            'featured' => 1,
            'user_id' => 2,
            'property_type_id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        3 => 
        array (
            'id' => 4,
            'title' => 'Spacious and warm flat',
        'description' => 'Lofts 640 offers you the "most bang for your buck" in Philadelphia! Included with your monthly rental price is indoor parking, fitness center, indoor/heated pool and hot tub with attached outdoor roof deck, yoga/fitness studio, cyber lounge, 24/7 front desk attendant and more!! Walk off the busy street into 640 North Broad and enter an urban space that combines the old with the new. Feel the past mix with a refreshing dose of hip, understated sophistication. The original character of the building is not lost but enhanced by modern accents and furnishings. A thriving community dwells within our walls -- a fitness center, cyber lounge and yoga studio serve to nurture body, mind and spirit. Setting the night sky aglow, our glass-domed pool house is the perfect place to unwind. Go for a swim, relax your muscles in the hot tub, or meet and socialize on the roof deck lounge. Enter the lobby, your public space. Experience orange as it bursts in the artwork and pours from geometric ceiling lights that warm the mocha-colored floors. Accented with a healthy dose of pure white and stainless steel, contrast brings together the energizing elements of your entrance. Lofts 640 is just six (6) blocks north of City Hall on Broad Street. Lofts 640 is centrally located to Philadelphia shoppes, restaurants, hospitals and the thriving community of Fairmount. Minutes from Reading Terminal Market and the Pennsylvania Convention Center, Lofts 640 combines commuter convenience of center city living with spectacular urban spaciousness of true loft living.
',
            'featured' => NULL,
            'user_id' => 2,
            'property_type_id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        4 => 
        array (
            'id' => 5,
            'title' => 'House with a pool',
        'description' => 'The entire new construction home is yours to enjoy! When you enter the house the first floor of the home, there is a full bathroom (walk-in shower), 1 of the 3 bedrooms, kitchen & family room. There is a door off of the kitchen which leads to a private deck outside. On the second floor you will find the washer/dryer and the 2 other private bedrooms along with a 2 full bathrooms. This home is a great place for couples, business travelers, & families! Rent month to month, annual lease available!
',
            'featured' => NULL,
            'user_id' => 3,
            'property_type_id' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        5 => 
        array (
            'id' => 6,
            'title' => 'Bright and sunny house',
            'description' => 'About GreatSchools
GreatSchools ratings based on test scores and additional metrics when available.

About the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given st',
            'featured' => 1,
            'user_id' => 3,
            'property_type_id' => 6,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        6 => 
        array (
            'id' => 7,
            'title' => 'Luxury office space',
            'description' => 'This is a cute 1 bedroom apt. plenty of cabinet space in kitchen walk in closet in master bedroom. the 2nd bedroom is great for small kid or a reading, gaming, or study room. you got to check this out.',
            'featured' => 1,
            'user_id' => 4,
            'property_type_id' => 7,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        7 => 
        array (
            'id' => 8,
            'title' => 'Centrally located apartment',
            'description' => 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.
',
            'featured' => 1,
            'user_id' => 4,
            'property_type_id' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        8 => 
        array (
            'id' => 9,
            'title' => 'Morgan Apartments',
            'description' => 'Within walking distance of OARDC/ATI Wooster campus. Large eat-in kitchen with appliances. Bathroom has shower only. Parking is limited so only one vehicle is permitted. Non-smoking. Assist animals only. Requires first month\'s rent and deposit.',
            'featured' => NULL,
            'user_id' => 5,
            'property_type_id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        9 => 
        array (
            'id' => 10,
            'title' => 'Greyson',
            'description' => 'With access to world-class amenities and a prime location just minutes from the Mall at Tuttle Crossing, our beautifully designed apartments give residents the best of both worlds. Welcome to The Greyson, a brand new community',
            'featured' => NULL,
            'user_id' => 6,
            'property_type_id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        10 => 
        array (
            'id' => 11,
            'title' => 'Orchard of Landen',
            'description' => 'School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries.',
            'featured' => 1,
            'user_id' => 7,
            'property_type_id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        11 => 
        array (
            'id' => 12,
            'title' => 'Devolld Cemetery Ln',
            'description' => 'LARGE SUNNY 2 BEDROOM WITH BEAUTIFUL REAL HARDWOOD floors, high ceilings, and NEW STAINLESS APPLIANCES! Quiet, secure and well-cared-for historic building in Wash West/Midtown Village, right in the center of the city near all transportation and bike lanes. 2 blocks from Jefferson! High ceilings, original touches and responsive owner/ landlord! FEATURING: *2 SUNNY EQUAL-SIZE BEDROOMS! GREAT FOR ROOMMATES OR HOME OFFICE! *MODERN SEPARATE OPEN KITCHEN WITH NEW STAINLESS STEEL APPLIANCES - FREE GAS COOKING AND FULL-SIZE REFRIGERATOR & MICROWAVE *HUGE LIVING/DINING AREA, CABLE READY, WITH CEILING FAN & STUDY AREA *BIG BRIGHT TILED BATH WITH UNIQUE OPEN SKYLIGHT & FULL SIZE TUB *GREAT CLOSET SPACE THROUGHOUT! *PRIVATE TOP FLOOR LOCATION - BUILT IN AC UNIT! ENJOY GREAT SPACE IN THE BEST NEIGHBORHOOD OF CENTER CITY! CLOSE TO EVERYTHING CENTER CITY HAS TO OFFER - INCLUDING JEFFERSON, UNIVERSITY OF THE ARTS, U OF P, PENNSYLVANIA ; HAHNEMANN MEDICAL CENTERS, RESTAURANTS AND GASTROPUBS GALORE! PET FRIENDLY WITH PET FEE & DEPOSIT - LAUNDRY IN BASEMENT Owner pays heat, cold & hot water, cooking, trash & recycling removal. Rent: $2,200 Application Fee: $55 Security Deposit: $2,200 Available Now
',
            'featured' => NULL,
            'user_id' => 4,
            'property_type_id' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        12 => 
        array (
            'id' => 13,
            'title' => 'Red Fox Ln',
            'description' => 'Available now this new construction first floor 2 bedroom, 2 bath unit comes equipped with range, refrigerator, microwave, dishwasher, disposal, washer, dryer, gas heat, central air, covered porch/patio, park at your door, flexible leasing available.',
            'featured' => NULL,
            'user_id' => 1,
            'property_type_id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        13 => 
        array (
            'id' => 14,
            'title' => 'Falls Bridge Lofts',
            'description' => 'Beautifully remodeled bathrooms, fresh paint, hardwood floors, LARGE master bedroom with it\'s own FULL bathroom. Tons of storage space in the basement and full one car garage with off street parking. Owner pays trash and sewer.',
            'featured' => NULL,
            'user_id' => 1,
            'property_type_id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        14 => 
        array (
            'id' => 15,
            'title' => 'Sparkle flat',
            'description' => 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.
',
            'featured' => 1,
            'user_id' => 2,
            'property_type_id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ),
        15 => 
        array (
            'id' => 24,
            'title' => 'asdf',
            'description' => NULL,
            'featured' => NULL,
            'user_id' => 1,
            'property_type_id' => NULL,
            'created_at' => '2019-12-18 18:19:52',
            'updated_at' => '2019-12-18 18:19:52',
            'deleted_at' => NULL,
        ),
        16 => 
        array (
            'id' => 25,
            'title' => 'asdf',
            'description' => NULL,
            'featured' => NULL,
            'user_id' => 1,
            'property_type_id' => NULL,
            'created_at' => '2019-12-18 18:20:41',
            'updated_at' => '2019-12-18 18:20:41',
            'deleted_at' => NULL,
        ),
    ));
        
        
    }
}