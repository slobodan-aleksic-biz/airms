<?php

use App\DelayReason;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelayReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(DelayReason::class)->create([

            'code_str' => 'AD',
            'reason' => 'RESTRICTIONS AT DESTINATION AIRPORT',
            'description' => 'Airport and/or runway closed due to obstruction industrial action, staff shortage, political unrest, noise abatement, night curfew, special flights',
            'delay_type_id' => 12,
            'code_id' => 88,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AE',
            'reason' => 'ATFM DUE TO RESTRICTION AT DESTINATION AIRPORT',
            'description' => 'Airport and / or runway closed due to obstruction, industrial action, staff shortage, political unrest, noise abatement, night curfew, special flights',
            'delay_type_id' => 11,
            'code_id' => 83,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AF',
            'reason' => 'AIRPORT FACILITIES',
            'description' => 'Parking stands, ramp congestion, lighting, buildings, gate limitations etc.',
            'delay_type_id' => 12,
            'code_id' => 87,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AG',
            'reason' => 'IMMIGRATION, CUSTOMS, HEALTH',
            'description' => 'Passengers, crew',
            'delay_type_id' => 12,
            'code_id' => 86,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AM',
            'reason' => 'RESTRICTIONS AT AIRPORT OF DEPARTURE',
            'description' => 'Including air traffic services, start-up and pushback, airport and/or runway closed due to obstruction or weather (restriction due to weather in case of ATFM only) industrial action, staff shortage, political unrest, noise abatement, night curfew, special flights',
            'delay_type_id' => 12,
            'code_id' => 89,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AS',
            'reason' => 'MANDATORY SECURITY',
            'description' => 'Passengers, baggage, crew, etc.',
            'delay_type_id' => 12,
            'code_id' => 85,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AT',
            'reason' => 'ATFM DUE TO ATC EN-ROUTE DEMAND/CAPACITY',
            'description' => 'Standard demand/capacity problems',
            'delay_type_id' => 11,
            'code_id' => 81,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AW',
            'reason' => 'ATFM DUE TO WEATHER AT DESTINATION',
            'description' => 'N/A',
            'delay_type_id' => 11,
            'code_id' => 84,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'AX',
            'reason' => 'ATFM DUE TO ATC STAFF/EQUIPMENT ENROUTE',
            'description' => 'Reduced capacity caused by industrial action or staff shortage, equipment failure, military exercise or extraordinary demand due to capacity reduction in neighbouring area',
            'delay_type_id' => 11,
            'code_id' => 82,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CA',
            'reason' => 'LATE ACCEPTANCE',
            'description' => 'Acceptance of mail after deadline',
            'delay_type_id' => 4,
            'code_id' => 29,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CC',
            'reason' => 'LATE ACCEPTANCE',
            'description' => 'Acceptance of cargo after deadline',
            'delay_type_id' => 3,
            'code_id' => 23,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CD',
            'reason' => 'DOCUMENTATION',
            'description' => 'Late or incorrect documentation for booked cargo',
            'delay_type_id' => 3,
            'code_id' => 21,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CE',
            'reason' => 'DOCUMENTATION, PACKING',
            'description' => 'Incomplete and/or inaccurate documentation',
            'delay_type_id' => 4,
            'code_id' => 27,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CI',
            'reason' => 'INADEQUATE PACKING',
            'description' => 'Repackaging and/or re-labelling of booked cargo',
            'delay_type_id' => 3,
            'code_id' => 24,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CL',
            'reason' => 'LATE POSITIONING',
            'description' => 'Late delivery of mail to airport/aircraft',
            'delay_type_id' => 4,
            'code_id' => 28,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CO',
            'reason' => 'OVERSALES',
            'description' => 'Booked load in excess of saleable load capacity (weight or volume), resulting in reloading or off-load',
            'delay_type_id' => 3,
            'code_id' => 25,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'CP',
            'reason' => 'LATE POSITIONING',
            'description' => 'Late delivery of booked cargo to airport/aircraft',
            'delay_type_id' => 3,
            'code_id' => 22,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'DF',
            'reason' => 'DAMAGE DURING FLIGHT OPERATIONS',
            'description' => 'Bird or lightning strike, turbulence, heavy or overweight landing, collisions during taxiing',
            'delay_type_id' => 7,
            'code_id' => 51,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'DG',
            'reason' => 'DAMAGE DURING GROUND OPERATIONS',
            'description' => 'Collisions (other than taxiing), loading / offloading damage, towing, contamination, extreme weather conditions',
            'delay_type_id' => 7,
            'code_id' => 52,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'EC',
            'reason' => 'CARGO PREPARATION DOCUMENTATION',
            'description' => 'Failure of documentation and/or load control systems covering cargo',
            'delay_type_id' => 8,
            'code_id' => 56,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'ED',
            'reason' => 'DEPARTURE CONTROL',
            'description' => 'Failure of automated systems, including check-in; load control systems producing mass and balance',
            'delay_type_id' => 8,
            'code_id' => 55,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'EF',
            'reason' => 'FLIGHT PLANS',
            'description' => 'Failure of automated flight plan systems',
            'delay_type_id' => 8,
            'code_id' => 57,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FA',
            'reason' => 'CABIN CREW ERROR OR SPECIAL REQUEST',
            'description' => 'Requests not within operational requirements',
            'delay_type_id' => 9,
            'code_id' => 68,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FB',
            'reason' => 'CAPTAIN REQUEST FOR SECURITY CHECK',
            'description' => 'Extraordinary requests outside mandatory requirements',
            'delay_type_id' => 9,
            'code_id' => 69,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FC',
            'reason' => 'CABIN CREW SHORTAGE',
            'description' => 'Sickness, awaiting standby, flight time limitations, valid visa, health documents',
            'delay_type_id' => 9,
            'code_id' => 67,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FF',
            'reason' => 'OPERATIONAL REQUIREMENT',
            'description' => 'Late alteration to fuel or payload',
            'delay_type_id' => 9,
            'code_id' => 62,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FL',
            'reason' => 'LATE CABIN CREW BOARDING OR DEPARTURE PROCEDURES',
            'description' => 'Late cabin crew other than standby; late completion of cabin crew checks',
            'delay_type_id' => 9,
            'code_id' => 66,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FP',
            'reason' => 'FLIGHT PLAN',
            'description' => 'Late completion of or change to flight plan',
            'delay_type_id' => 9,
            'code_id' => 61,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FR',
            'reason' => 'FLIGHT DECK CREW SPECIAL REQUEST',
            'description' => 'Requests not within operational requirements',
            'delay_type_id' => 9,
            'code_id' => 65,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FS',
            'reason' => 'FLIGHT DECK CREW SHORTAGE',
            'description' => 'Sickness, awaiting standby, flight time limitations, valid visa, health documents, etc.',
            'delay_type_id' => 9,
            'code_id' => 64,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'FT',
            'reason' => 'LATE CREW BOARDING OR DEPARTURE PROCEDURES',
            'description' => 'Late flight deck, or entire crew, other than standby; late completion of flight deck crew checks',
            'delay_type_id' => 9,
            'code_id' => 63,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GB',
            'reason' => 'CATERING',
            'description' => 'Late and/or incomplete delivery; late loading',
            'delay_type_id' => 5,
            'code_id' => 37,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GC',
            'reason' => 'AIRCRAFT CLEANING',
            'description' => 'Late completion of aircraft cleaning',
            'delay_type_id' => 5,
            'code_id' => 35,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GD',
            'reason' => 'LATE/INACCURATE AIRCRAFT DOCUMENTATION',
            'description' => 'Late or inaccurate mass and balance documentation, general declaration, passenger manifest',
            'delay_type_id' => 5,
            'code_id' => 31,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GE',
            'reason' => 'LOADING EQUIPMENT',
            'description' => 'Lack of and/or breakdown; lack of operating staff',
            'delay_type_id' => 5,
            'code_id' => 33,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GF',
            'reason' => 'FUELLING / DEFUELLING',
            'description' => 'Late delivery of fuel; excludes late request',
            'delay_type_id' => 5,
            'code_id' => 36,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GL',
            'reason' => 'LOADING / UNLOADING',
            'description' => 'Bulky items, special load, lack loading staff',
            'delay_type_id' => 5,
            'code_id' => 32,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GS',
            'reason' => 'SERVICING EQUIPMENT',
            'description' => 'Lack of and/or breakdown; lack of operating staff',
            'delay_type_id' => 5,
            'code_id' => 34,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GT',
            'reason' => 'TECHNICAL EQUIPMENT',
            'description' => 'Lack and/or breakdown; lack of operating staff; includes GPU, air start, pushback tug, de-icing',
            'delay_type_id' => 5,
            'code_id' => 39,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'GU',
            'reason' => 'ULD',
            'description' => 'Lack of and/or unserviceable ULDs or pallets',
            'delay_type_id' => 5,
            'code_id' => 38,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'MI',
            'reason' => 'INDUSTRIAL ACTION WITHIN OWN AIRLINE',
            'description' => 'N/A',
            'delay_type_id' => 14,
            'code_id' => 97,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'MO',
            'reason' => 'INDUSTRIAL ACTION OUTSIDE OWN AIRLINE',
            'description' => 'Industrial action (except Air Traffic Control Services)',
            'delay_type_id' => 14,
            'code_id' => 98,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'MX',
            'reason' => 'MISCELLANEOUS',
            'description' => 'No suitable code_str; explain reason(s) in plain text',
            'delay_type_id' => 14,
            'code_id' => 99,

            'created_at' => now(),
            'updated_at' => now(),




        ]);



        factory(DelayReason::class)->create([

            'code_str' => 'OA',
            'reason' => 'NO GATE/STAND  AVAILABLE',
            'description' => 'Due to own airline activity',
            'delay_type_id' => 1,
            'code_id' => 6,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PC',
            'reason' => 'CATERING ORDER',
            'description' => 'Late or incorrect order given to supplier',
            'delay_type_id' => 2,
            'code_id' => 17,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PB',
            'reason' => 'BAGGAGE PROCESSING',
            'description' => 'Late or incorrectly sorted baggage',
            'delay_type_id' => 2,
            'code_id' => 18,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PD',
            'reason' => 'LATE CHECK-IN',
            'description' => 'Check-in reopened for late passengers',
            'delay_type_id' => 2,
            'code_id' => 11,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PE',
            'reason' => 'CHECK-IN ERROR',
            'description' => 'Error with passenger or baggage details',
            'delay_type_id' => 2,
            'code_id' => 13,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PH',
            'reason' => 'BOARDING',
            'description' => 'Discrepancies and paging, missing checked in passengers',
            'delay_type_id' => 2,
            'code_id' => 15,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PL',
            'reason' => 'LATE CHECK-IN',
            'description' => 'Check-in not completed by flight closure time',
            'delay_type_id' => 2,
            'code_id' => 12,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PO',
            'reason' => 'OVERSALES',
            'description' => 'Booking errors – not resolved at check-in',
            'delay_type_id' => 2,
            'code_id' => 14,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'PS',
            'reason' => 'COMMERCIAL PUBLICITY/PASSENGER CONVENIENCE',
            'description' => 'Local decision to delay for VIP or press; delay due to offload of passengers following family bereavement',
            'delay_type_id' => 2,
            'code_id' => 16,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RA',
            'reason' => 'AIRCRAFT ROTATION',
            'description' => 'Late arrival of aircraft from another flight or previous sector',
            'delay_type_id' => 13,
            'code_id' => 93,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RC',
            'reason' => 'CREW ROTATION',
            'description' => 'Awaiting flight deck, or entire crew, from another flight',
            'delay_type_id' => 13,
            'code_id' => 95,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RL',
            'reason' => 'LOAD CONNECTION',
            'description' => 'Awaiting load from another flight',
            'delay_type_id' => 13,
            'code_id' => 91,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RO',
            'reason' => 'OPERATIONS CONTROL',
            'description' => 'Re-routing, diversion, consolidation, aircraft change for reasons other than technical',
            'delay_type_id' => 13,
            'code_id' => 96,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RS',
            'reason' => 'CABIN CREW ROTATION',
            'description' => 'Awaiting cabin crew from another flight',
            'delay_type_id' => 13,
            'code_id' => 94,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'RT',
            'reason' => 'THROUGH CHECK-IN ERROR',
            'description' => 'Passenger or baggage check-in error at originating station',
            'delay_type_id' => 13,
            'code_id' => 92,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'SG',
            'reason' => 'SCHEDULED GROUND TIME',
            'description' => 'Planned turnaround time less than declared minimum',
            'delay_type_id' => 1,
            'code_id' => 9,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TA',
            'reason' => 'AOG SPARES',
            'description' => 'Awaiting AOG spare(s) to be carried to another station',
            'delay_type_id' => 6,
            'code_id' => 45,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TC',
            'reason' => 'AIRCRAFT CHANGE',
            'description' => 'For technical reasons, e.g. a prolonged technical delay',
            'delay_type_id' => 6,
            'code_id' => 46,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TD',
            'reason' => 'TECHNICAL DEFECTS',
            'description' => 'Aircraft defects including items covered by MEL',
            'delay_type_id' => 6,
            'code_id' => 41,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TL',
            'reason' => 'STANDBY AIRCRAFT',
            'description' => 'Standby aircraft unavailable for technical reasons',
            'delay_type_id' => 6,
            'code_id' => 47,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TM',
            'reason' => 'SCHEDULED MAINTENANCE',
            'description' => 'Late release from maintenance',
            'delay_type_id' => 6,
            'code_id' => 42,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TN',
            'reason' => 'NON-SCHEDULED MAINTENANCE',
            'description' => 'Special checks and/or additional works beyond normal maintenance schedule',
            'delay_type_id' => 6,
            'code_id' => 43,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'TS',
            'reason' => 'SPARES AND MAINTENANCE',
            'description' => 'Lack of spares, lack of and/or breakdown of specialist equipment required for defect rectification',
            'delay_type_id' => 6,
            'code_id' => 44,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WG',
            'reason' => 'GROUND HANDLING IMPAIRED BY ADVERSE WEATHER CONDITIONS',
            'description' => 'High winds, heavy rain, blizzards, monsoons etc.',
            'delay_type_id' => 10,
            'code_id' => 77,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WI',
            'reason' => 'DE-ICING OF AIRCRAFT',
            'description' => 'Removal of ice and/or snow; excludes equipment – lack of or breakdown',
            'delay_type_id' => 10,
            'code_id' => 75,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WO',
            'reason' => 'DEPARTURE STATION',
            'description' => 'Below operating limits',
            'delay_type_id' => 10,
            'code_id' => 71,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WR',
            'reason' => 'EN-ROUTE OR ALTERNATE',
            'description' => 'Below operating limits',
            'delay_type_id' => 10,
            'code_id' => 73,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WS',
            'reason' => 'REMOVAL OF SNOW, ICE, WATER, AND SAND FROM AIRPORT',
            'description' => 'Runway, taxiway conditions',
            'delay_type_id' => 10,
            'code_id' => 76,

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayReason::class)->create([

            'code_str' => 'WT',
            'reason' => 'DESTINATION STATION',
            'description' => 'Below operating limits',
            'delay_type_id' => 10,
            'code_id' => 72,

            'created_at' => now(),
            'updated_at' => now(),




        ]);



    }
}
