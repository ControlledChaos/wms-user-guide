<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    WMS_User_Guide
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WMS_User_Guide\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'wms-user-guide' ),
	'Airline'     => __( 'Airline', 'wms-user-guide' ),
	'Corporation' => __( 'Corporation', 'wms-user-guide' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'wms-user-guide' ),
		'CollegeOrUniversity' => __( '— College or University', 'wms-user-guide' ),
		'ElementarySchool'    => __( '— Elementary School', 'wms-user-guide' ),
		'HighSchool'          => __( '— High School', 'wms-user-guide' ),
		'MiddleSchool'        => __( '— Middle School', 'wms-user-guide' ),
		'Preschool'           => __( '— Preschool', 'wms-user-guide' ),
		'School'              => __( '— School', 'wms-user-guide' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'wms-user-guide' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'wms-user-guide' ),
		'AnimalShelter' => __( '— Animal Shelter', 'wms-user-guide' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'wms-user-guide' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'wms-user-guide' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'wms-user-guide' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'wms-user-guide' ),
			'AutoRental'       => __( '—— Auto Rental', 'wms-user-guide' ),
			'AutoRepair'       => __( '—— Auto Repair', 'wms-user-guide' ),
			'AutoWash'         => __( '—— Auto Wash', 'wms-user-guide' ),
			'GasStation'       => __( '—— Gas Station', 'wms-user-guide' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'wms-user-guide' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'wms-user-guide' ),

		'ChildCare'            => __( '— Child Care', 'wms-user-guide' ),
		'Dentist'              => __( '— Dentist', 'wms-user-guide' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'wms-user-guide' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'wms-user-guide' ),
			'FireStation'   => __( '—— Fire Station', 'wms-user-guide' ),
			'Hospital'      => __( '—— Hospital', 'wms-user-guide' ),
			'PoliceStation' => __( '—— Police Station', 'wms-user-guide' ),

		'EmploymentAgency' => __( '— Employment Agency', 'wms-user-guide' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'wms-user-guide' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'wms-user-guide' ),
			'AmusementPark'      => __( '—— Amusement Park', 'wms-user-guide' ),
			'ArtGallery'         => __( '—— Art Gallery', 'wms-user-guide' ),
			'Casino'             => __( '—— Casino', 'wms-user-guide' ),
			'ComedyClub'         => __( '—— Comedy Club', 'wms-user-guide' ),
			'MovieTheater'       => __( '—— Movie Theater', 'wms-user-guide' ),
			'NightClub'          => __( '—— Night Club', 'wms-user-guide' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'wms-user-guide' ),
			'AccountingService' => __( '—— Accounting Service', 'wms-user-guide' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'wms-user-guide' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'wms-user-guide' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'wms-user-guide' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'wms-user-guide' ),
			'Bakery'             => __( '—— Bakery', 'wms-user-guide' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'wms-user-guide' ),
			'Brewery'            => __( '—— Brewery', 'wms-user-guide' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'wms-user-guide' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'wms-user-guide' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'wms-user-guide' ),
			'Restaurant'         => __( '—— Restaurant', 'wms-user-guide' ),
			'Winery'             => __( '—— Winery', 'wms-user-guide' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'wms-user-guide' ),
			'PostOffice' => __( '—— Post Office', 'wms-user-guide' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'wms-user-guide' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'wms-user-guide' ),
			'DaySpa'       => __( '—— Day Spa', 'wms-user-guide' ),
			'HairSalon'    => __( '—— Hair Salon', 'wms-user-guide' ),
			'HealthClub'   => __( '—— Health Club', 'wms-user-guide' ),
			'NailSalon'    => __( '—— Nail Salon', 'wms-user-guide' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'wms-user-guide' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'wms-user-guide' ),
			'Electrician'       => __( '—— Electrician', 'wms-user-guide' ),
			'GeneralContractor' => __( '—— General Contractor', 'wms-user-guide' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'wms-user-guide' ),
			'HousePainter'      => __( '—— House Painter', 'wms-user-guide' ),
			'Locksmith'         => __( '—— Locksmith', 'wms-user-guide' ),
			'MovingCompany'     => __( '—— MovingCompany', 'wms-user-guide' ),
			'Plumber'           => __( '—— Plumber', 'wms-user-guide' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'wms-user-guide' ),

		'InternetCafe' => __( '— Internet Cafe', 'wms-user-guide' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'wms-user-guide' ),
			'Attorney' => __( '—— Attorney', 'wms-user-guide' ),
			'Notary'   => __( '—— Notary', 'wms-user-guide' ),

		'Library' => __( '— Library', 'wms-user-guide' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'wms-user-guide' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'wms-user-guide' ),
			'Campground'      => __( '—— Campground', 'wms-user-guide' ),
			'Hostel'          => __( '—— Hostel', 'wms-user-guide' ),
			'Hotel'           => __( '—— Hotel', 'wms-user-guide' ),
			'Motel'           => __( '—— Motel', 'wms-user-guide' ),
			'Resort'          => __( '—— Resort', 'wms-user-guide' ),

		'ProfessionalService' => __( '— Professional Service', 'wms-user-guide' ),
		'RadioStation'        => __( '— Radio Station', 'wms-user-guide' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'wms-user-guide' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'wms-user-guide' ),
		'SelfStorage'         => __( '— Self Storage', 'wms-user-guide' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'wms-user-guide' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'wms-user-guide' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'wms-user-guide' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'wms-user-guide' ),
			'GolfCourse'         => __( '—— Golf Course', 'wms-user-guide' ),
			'HealthClub'         => __( '—— Health Club', 'wms-user-guide' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'wms-user-guide' ),
			'SkiResort'          => __( '—— Ski Resort', 'wms-user-guide' ),
			'SportsClub'         => __( '—— Sports Club', 'wms-user-guide' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'wms-user-guide' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'wms-user-guide' ),

		// Store types.
		'Store' => __( '— Store', 'wms-user-guide' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'wms-user-guide' ),
			'BikeStore'           => __( '—— Bike Store', 'wms-user-guide' ),
			'BookStore'           => __( '—— Book Store', 'wms-user-guide' ),
			'ClothingStore'       => __( '—— Clothing Store', 'wms-user-guide' ),
			'ComputerStore'       => __( '—— Computer Store', 'wms-user-guide' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'wms-user-guide' ),
			'DepartmentStore'     => __( '—— Department Store', 'wms-user-guide' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'wms-user-guide' ),
			'Florist'             => __( '—— Florist', 'wms-user-guide' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'wms-user-guide' ),
			'GardenStore'         => __( '—— Garden Store', 'wms-user-guide' ),
			'GroceryStore'        => __( '—— Grocery Store', 'wms-user-guide' ),
			'HardwareStore'       => __( '—— Hardware Store', 'wms-user-guide' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'wms-user-guide' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'wms-user-guide' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'wms-user-guide' ),
			'LiquorStore'         => __( '—— Liquor Store', 'wms-user-guide' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'wms-user-guide' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'wms-user-guide' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'wms-user-guide' ),
			'MusicStore'          => __( '—— Music Store', 'wms-user-guide' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'wms-user-guide' ),
			'OutletStore'         => __( '—— Outlet Store', 'wms-user-guide' ),
			'PawnShop'            => __( '—— Pawn Shop', 'wms-user-guide' ),
			'PetStore'            => __( '—— Pet Store', 'wms-user-guide' ),
			'ShoeStore'           => __( '—— Shoe Store', 'wms-user-guide' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'wms-user-guide' ),
			'TireShop'            => __( '—— Tire Shop', 'wms-user-guide' ),
			'ToyStore'            => __( '—— Toy Store', 'wms-user-guide' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'wms-user-guide' ),

		'TelevisionStation'        => __( '— Television Station', 'wms-user-guide' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'wms-user-guide' ),
		'TravelAgency'             => __( '— Travel Agency', 'wms-user-guide' ),

	'MedicalOrganization' => __( 'Medical Organization', 'wms-user-guide' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'wms-user-guide' ),
	'PerformingGroup'     => __( 'Performing Group', 'wms-user-guide' ),
	'SportsOrganization'  => __( 'Sports Organization', 'wms-user-guide' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'wms-user-guide' ) )
);
$html .= '</p>';

echo $html;