<?php

/*----------------------------------------------------
| Controller responsible for CSV file import
-----------------------------------------------------*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Excel;
use FormatHelper;
use App\CSVMap;
use App\Participant;
use App\Contact;
use App\School;
use App\Session;
use App\Registration;
use App\RegistrationStatus;
use App\Program;
use App\Family;
use App\Ethnicity;
use App\Address;
use App;

class CSVController extends Controller
{
    /**
     * Display browse page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function browse() {

        $csv_map_list = CSVMap::lists('name', 'id');

        return view('csv.browse', compact('csv_map_list'));
    }

    /**
     * Import a csv file using the selected file and the csv map
     *
     * @param Request $request
     */
    public function import(Request $request)
    {
        // get the map
        $csv_map_id = $request->csv_map_id;
        $csv_map = CSVMap::find($csv_map_id);

        // get the file
        $file = $request->file('file');

        // make excel class
        $excel = App::make('excel');

        // load results from file
        $results = $excel->load($file->getRealPath(), function($reader) {})->get();

        // process results
        foreach($results as $row) {

            $current_row_contacts = [];

            //----------------------
            // Emergency Contact 1

            $emergency_contact1 = $this->importContact($row, $current_row_contacts, [
                'first_name' => $csv_map->emergency_contact1_first_name,
                'last_name' => $csv_map->emergency_contact1_last_name,
                'name' => $csv_map->emergency_contact1_name,
                'date_of_birth' => $csv_map->emergency_contact1_date_of_birth,
                'home_phone' => $csv_map->emergency_contact1_home_phone,
                'business_phone' => $csv_map->emergency_contact1_business_phone,
                'email' => $csv_map->emergency_contact1_email,
                'address1' => $csv_map->emergency_contact1_address1,
                'address2' => $csv_map->emergency_contact1_address2,
                'city' => $csv_map->emergency_contact1_city,
                'state' => $csv_map->emergency_contact1_state,
                'zip' => $csv_map->emergency_contact1_zip,
                'country' => $csv_map->emergency_contact1_country,
            ]);

            if ($emergency_contact1)
                array_push($current_row_contacts, $emergency_contact1);

            //----------------------
            // Emergency Contact 2

            $emergency_contact2 = $this->importContact($row, $current_row_contacts, [
                'first_name' => $csv_map->emergency_contact2_first_name,
                'last_name' => $csv_map->emergency_contact2_last_name,
                'name' => $csv_map->emergency_contact2_name,
                'date_of_birth' => $csv_map->emergency_contact2_date_of_birth,
                'home_phone' => $csv_map->emergency_contact2_home_phone,
                'business_phone' => $csv_map->emergency_contact2_business_phone,
                'email' => $csv_map->emergency_contact2_email,
                'address1' => $csv_map->emergency_contact2_address1,
                'address2' => $csv_map->emergency_contact2_address2,
                'city' => $csv_map->emergency_contact2_city,
                'state' => $csv_map->emergency_contact2_state,
                'zip' => $csv_map->emergency_contact2_zip,
                'country' => $csv_map->emergency_contact2_country,
            ]);

            if ($emergency_contact2)
                array_push($current_row_contacts, $emergency_contact2);

            //----------------------
            // Primary PG

            $primary_pg = $this->importContact($row, $current_row_contacts, [
                'first_name' => $csv_map->primary_pg_first_name,
                'last_name' => $csv_map->primary_pg_last_name,
                'name' => $csv_map->primary_pg_name,
                'date_of_birth' => $csv_map->primary_pg_date_of_birth,
                'home_phone' => $csv_map->primary_pg_home_phone,
                'business_phone' => $csv_map->primary_pg_business_phone,
                'email' => $csv_map->primary_pg_email,
                'address1' => $csv_map->primary_pg_address1,
                'address2' => $csv_map->primary_pg_address2,
                'city' => $csv_map->primary_pg_city,
                'state' => $csv_map->primary_pg_state,
                'zip' => $csv_map->primary_pg_zip,
                'country' => $csv_map->primary_pg_country,
            ]);

            if ($primary_pg)
                array_push($current_row_contacts, $primary_pg);

            //----------------------
            // Secondary PG

            $secondary_pg = $this->importContact($row, $current_row_contacts, [
                'first_name' => $csv_map->secondary_pg_first_name,
                'last_name' => $csv_map->secondary_pg_last_name,
                'name' => $csv_map->secondary_pg_name,
                'date_of_birth' => $csv_map->secondary_pg_date_of_birth,
                'home_phone' => $csv_map->secondary_pg_home_phone,
                'business_phone' => $csv_map->secondary_pg_business_phone,
                'email' => $csv_map->secondary_pg_email,
                'address1' => $csv_map->secondary_pg_address1,
                'address2' => $csv_map->secondary_pg_address2,
                'city' => $csv_map->secondary_pg_city,
                'state' => $csv_map->secondary_pg_state,
                'zip' => $csv_map->secondary_pg_zip,
                'country' => $csv_map->secondary_pg_country,
            ]);

            if ($secondary_pg)
                array_push($current_row_contacts, $secondary_pg);

            //----------------------
            // Family

            $family = $this->importFamily($row, [
                'name' => $csv_map->family_name,
                'external_id' => $csv_map->family_external_id,
            ]);

            //----------------------
            // Ethnicity

            $ethnicity = $this->importEthnicity($row, [
                'name' => $csv_map->ethnicity_name,
            ]);

            //----------------------
            // Participant School

            $participant_school = $this->importSchool($row, [
                'name' => $csv_map->participant_school_name,
            ]);

            //----------------------
            // Participant

            $participant = $this->importParticiant($row, $emergency_contact1, $emergency_contact2, $primary_pg,
                $secondary_pg, $participant_school, $ethnicity, $family, [
                'gender' => $csv_map->participant_gender,
                'external_id' => $csv_map->participant_external_id,
                'emergency_contact1_relationship' => $csv_map-> emergency_contact1_relationship,
                'emergency_contact2_relationship' => $csv_map-> emergency_contact2_relationship,
                'contact' => [
                    'first_name' => $csv_map->participant_first_name,
                    'last_name' => $csv_map->participant_last_name,
                    'name' => $csv_map->participant_name,
                    'date_of_birth' => $csv_map->participant_date_of_birth,
                    'home_phone' => $csv_map->participant_home_phone,
                    'business_phone' => $csv_map->participant_business_phone,
                    'email' => $csv_map->participant_email,
                    'address1' => $csv_map->participant_address1,
                    'address2' => $csv_map->participant_address2,
                    'city' => $csv_map->participant_city,
                    'state' => $csv_map->participant_state,
                    'zip' => $csv_map->participant_zip,
                    'country' => $csv_map->participant_country,
                ]
            ]);

            //----------------------
            // Registration Status

            $registration_status = $this->importRegistrationStatus($row, [
                'name' => $csv_map->registration_status_name,
            ]);

            //----------------------
            // Session School

            $session_school = $this->importSchool($row, [
                'name' => $csv_map->session_school_name,
            ]);

            //----------------------
            // Registration

            $registration = $this->importRegistration($row, $session_school, $registration_status, $participant, [
                'session_start_date' => $csv_map->session_start_date,
                'session_end_date' => $csv_map->session_end_date,
                'program_name' => $csv_map->program_name,
                'external_id' => $csv_map->registration_external_id,
                'paid' => $csv_map->registration_paid,
                'balance' => $csv_map->registration_balance,
                'active_fee_paid' => $csv_map->registration_active_fee_paid,
                'discount' => $csv_map->registration_discount_total,
                'grade' => $csv_map->registration_grade,
            ]);
        }

        return back()->with('success', 'Imported CSV File');
    }

    /**
     * Import contact record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           contact record
     */
    private function importContact($row, $current_row_contacts, $field_names)
    {
        $contact = null;
        $contact_input = [];

        // if map specified first name and last name
        if ($field_names['first_name'] != '' && $field_names['first_name'] != '') {
            $contact_input['first_name'] = $this->getRowValue($row, $field_names['first_name']);
            $contact_input['last_name'] = $this->getRowValue($row, $field_names['last_name']);
        }

        // if map specified only name
        else if ($field_names['name']!= '') {
            $name = FormatHelper::name( $this->getRowValue( $row, $field_names['name'] ));
            $contact_input['first_name'] = $name['first_name'];
            $contact_input['last_name'] = $name['last_name'];
        }

        // if no name, participant can't be created
        else {
            return null;
        }

        // if there is first name and last name
        if ($contact_input['first_name'] && $contact_input['last_name'])
        {
            $contact_input['date_of_birth'] = FormatHelper::date ($this->getRowValue($row, $field_names['date_of_birth']));
            $contact_input['home_phone'] = $this->getRowValue($row, $field_names['home_phone']);
            $contact_input['business_phone'] = $this->getRowValue($row, $field_names['business_phone']);
            $contact_input['email'] = $this->getRowValue($row, $field_names['email']);
            $contact_input['address'] = [
                'address1' => $this->getRowValue($row, $field_names['address1']),
                'address2' => $this->getRowValue($row, $field_names['address2']),
                'city' => $this->getRowValue($row, $field_names['city']),
                'state' => $this->getRowValue($row, $field_names['state']),
                'zip' => $this->getRowValue($row, $field_names['zip']),
                'country' => $this->getRowValue($row, $field_names['country']),
            ];

            // check if contact has just been created
            foreach($current_row_contacts as $current_row_contact) {
                if ($contact_input['first_name'] == $current_row_contact->first_name &&
                    $contact_input['last_name'] == $current_row_contact->last_name)
                {
                    $contact = $current_row_contact;
                    break;
                }
            }

            // if didn't create contact, then check the database
            if (!$contact)
            {
                if ($contact_input['email']) {
                    $contact = Contact::where('first_name', $contact_input['first_name'])
                        ->where('last_name', $contact_input['last_name'])
                        ->where('email', $contact_input['email'])
                        ->first();
                }
                else {
                    $contact = Contact::where('first_name', $contact_input['first_name'])
                        ->where('last_name', $contact_input['last_name'])
                        ->first();
                }
            }

            // if contact is not in database, create it
            if (!$contact)
            {
                $address = Address::create($contact_input['address']);
                $contact = Contact::create(['address_id' => $address->id] + array_except($contact_input, 'address'));
            }

            // if contact is already in database, update it
            else {
                $contact->address->update($contact_input['address']);
                $contact->update(array_except($contact_input, 'address'));
            }
        }

        return $contact;
    }

    /**
     * Import school record into the database
     *
     * @param $row          csv row with values
     * @param $field_names  fields to import and their csv names
     * @return static       school record
     */
    private function importSchool($row, $field_names)
    {
        $school_input = [
            'name' => $this->getRowValue($row, $field_names['name'])
        ];

        $school = School::where('name', $school_input['name'])
            ->orWhere('alternative_names', 'LIKE', '%'.$school_input['name'].'%')->first();

        if(!$school) {
            $school = School::create($school_input);
        }
        else {
            $school->update(array_except($school_input, 'name'));
        }

        return $school;
    }

    /**
     * Import family record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           family record
     */
    private function importFamily($row, $field_names)
    {
        $input = [
            'external_id' => $this->getRowValue($row, $field_names['external_id']),
            'name' => $this->getRowValue($row, $field_names['name'])
        ];

        $family = Family::where("external_id", $input['external_id'])->first();

        if (!$family) {
            $family = Family::create($input);
        }
        else {
            $family->update($input);
        }

        return $family;
    }

    /**
     * Import ethnicity record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           family record
     */
    private function importEthnicity($row, $field_names)
    {
        $input = [
            'name' => $this->getRowValue($row, $field_names['name'])
        ];

        $ethnicity = Ethnicity::where('name' , $input['name'])->first();

        if (!$ethnicity) {
            $ethnicity = Ethnicity::create($input);
        }
        else {
            $ethnicity->update($input);
        }

        return $ethnicity;
    }

    /**
     * Import regisration status record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           regisration status record
     */
    private function importRegistrationStatus($row, $field_names)
    {
        $input = [
            'name' => $this->getRowValue($row, $field_names['name']),
        ];

        $registration_status = RegistrationStatus::where("name", $input['name'])->first();

        if (!$registration_status) {
            $registration_status = RegistrationStatus::create($input);
        }
        else {
            $registration_status->update($input);
        }

        return $registration_status;
    }

    /**
     * Import regisration record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           regisration record
     */
    private function importRegistration($row, $school, $registration_status, $participant, $field_names)
    {
        $input = [
            'session' => [
                'start_date' => FormatHelper::date( $this->getRowValue($row, $field_names['session_start_date'])),
                'end_date' => FormatHelper::date( $this->getRowValue($row, $field_names['session_end_date']) ),
                'school_id' => ($school? $school->id: null),
            ],
            'program' => [
                'name' => $this->getRowValue($row, $field_names['program_name']),
            ],
            'external_id' => $this->getRowValue($row, $field_names['external_id']),
            'status_id' => ($registration_status? $registration_status->id: null),
            'paid' => FormatHelper::number($this->getRowValue($row, $field_names['paid'])),
            'balance' => FormatHelper::number($this->getRowValue($row, $field_names['balance'])),
            'active_fee_paid' => FormatHelper::number($this->getRowValue($row, $field_names['active_fee_paid'])),
            'discount' => FormatHelper::number($this->getRowValue($row, $field_names['discount'])),
            'grade' => $this->getRowValue($row, $field_names['grade']),
            'participant_id' => ($participant? $participant->id: null),
        ];

        $registration = Registration::where('external_id', $input['external_id'])->first();

        // if no such registration
        if (!$registration) {

            // if there is no program, no point in this
            if (!$input['program']['name'])
                return null;

            // search program
            $program = Program::where('name', $input['program']['name'])
                ->orWhere('alternative_names', 'LIKE', '%'.$input['program']['name'].'%')->first();

            if (!$program) {
                $program = Program::create($input['program']);
            }
            else {
                $program->update($input['program']);
            }

            // if session info is missing, stop
            if (!$input['session']['start_date'] || !$input['session']['school_id'])
                return null;

            // search existing session
            $session = Session::where("start_date", $input['session']['start_date'])
                ->where('program_id', $program->id)
                ->where('school_id', $input['session']['school_id'])
                ->first();

            if (!$session) {
                $session = Session::create(['program_id' => $program->id] + $input['session']);
            }
            else {
                $session->update($input['session']);
            }

            // stop if participant id is empty
            if (!$input['participant_id'])
                return null;

            $registration = Registration::create(['session_id' => $session->id] + array_except($input, ['session', 'program']));
        }
        else {
            $registration->session->update($input['session']);
            $registration->session->program->update($input['program']);
            $registration->update(array_except($input, ['session', 'program']));
        }

        return $registration;
    }

    /**
     * Import participant record into the database
     *
     * @param $row              csv row with values
     * @param $field_names      fields to import and their csv names
     * @return static           participant record
     */
    private function importParticiant($row, $emergency_contact1, $emergency_contact2, $primary_pg, $secondary_pg, $school, $ethnicity, $family, $field_names)
    {
        $contact_input = [];

        $contact_field_names = $field_names['contact'];
        
        // if map specified first name and last name
        if ($contact_field_names['first_name'] != '' && $contact_field_names['first_name'] != '') {
            $contact_input['first_name'] = $this->getRowValue($row, $contact_field_names['first_name']);
            $contact_input['last_name'] = $this->getRowValue($row, $contact_field_names['last_name']);
        }

        // if map specified only name
        else if ($contact_field_names['name']!= '') {
            $name = FormatHelper::name( $this->getRowValue( $row, $contact_field_names['name'] ));
            $contact_input['first_name'] = $name['first_name'];
            $contact_input['last_name'] = $name['last_name'];
        }

        // if no name, participant can't be created
        else {
            return null;
        }

        // if there is first name and last name
        if ($contact_input['first_name'] && $contact_input['last_name']) {
            $contact_input['date_of_birth'] = FormatHelper::date($this->getRowValue($row, $contact_field_names['date_of_birth']));
            $contact_input['home_phone'] = $this->getRowValue($row, $contact_field_names['home_phone']);
            $contact_input['business_phone'] = $this->getRowValue($row, $contact_field_names['business_phone']);
            $contact_input['email'] = $this->getRowValue($row, $contact_field_names['email']);
            $contact_input['address'] = [
                'address1' => $this->getRowValue($row, $contact_field_names['address1']),
                'address2' => $this->getRowValue($row, $contact_field_names['address2']),
                'city' => $this->getRowValue($row, $contact_field_names['city']),
                'state' => $this->getRowValue($row, $contact_field_names['state']),
                'zip' => $this->getRowValue($row, $contact_field_names['zip']),
                'country' => $this->getRowValue($row, $contact_field_names['country']),
            ];
        }
        else {
            return null; //no first name, no last name, it's null then
        }

        // participant input
        $input = [
            'emergency_contact1_id' => ($emergency_contact1? $emergency_contact1->id: null),
            'emergency_contact2_id' => ($emergency_contact2? $emergency_contact2->id: null),
            'emergency_contact1_relationship' => $this->getRowValue($row, $field_names['emergency_contact1_relationship']),
            'emergency_contact2_relationship' => $this->getRowValue($row, $field_names['emergency_contact2_relationship']),
            'primary_pg_id' => ($primary_pg? $primary_pg->id: null),
            'secondary_pg_id' => ($secondary_pg? $secondary_pg->id: null),
            'school_id' => ($school? $school->id: null),
            'ethnicity_id' => ($ethnicity? $ethnicity->id: null),
            'family_id' => ($family? $family->id: null),
            'gender' => FormatHelper::gender( $this->getRowValue($row, $field_names['gender'])) ,
            'external_id' => $this->getRowValue($row, $field_names['external_id']),
        ];

        $participant = Participant::where('external_id', $input['external_id'])->first();

        if (!$participant) {
            $address = Address::create($contact_input['address']);
            $contact = Contact::create(['address_id' => $address->id] + array_except($contact_input, 'address'));
            $participant = Participant::create(['contact_id' => $contact->id] + $input);
        }
        else {
            $participant->update($input);
            $participant->contact->address->update($contact_input['address']);
            $participant->contact->update(array_except($contact_input, 'address'));
        }

        return $participant;
    }

    /**
     * Get the value from the CSV file row
     * @param $row  csv file row
     * @param $csv_map_field    field name from csv map
     * @return string   row value
     */
    private function getRowValue($row, $csv_map_field)
    {
        if ($csv_map_field != '') {
            return $row->{$csv_map_field};
        }
        else {
            return '';
        }
    }
}
