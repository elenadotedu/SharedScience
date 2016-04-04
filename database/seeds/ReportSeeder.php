<?php

use Illuminate\Database\Seeder;
use App\Record;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
       DB::table('records')->insert([
            ['name' => 'Participants', 'table' => 'participants'],
            ['name' => 'Contacts', 'table' => 'contacts'],
            ['name' => 'Schools', 'table' => 'schools'],
            ['name' => 'Registrations', 'table' => 'registrations'],
            ['name' => 'Programs', 'table' => 'programs'],
            ['name' => 'Sessions', 'table' => 'sessions']]
        );

        /* -----------------------------------------------
        | PARTICIPANT
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_first_name', 'field' => 'first_name', 'label' => 'First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ], [
                'field_id' => 'participants_last_name', 'field' => 'last_name', 'label' => 'Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ], [
                'field_id' => 'participants_email', 'field' => 'email', 'label' => 'Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'participants_date_of_birth', 'field' => 'date_of_birth', 'label' => 'Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'participants_home_phone', 'field' => 'home_phone', 'label' => 'Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'participants_business_phone', 'field' => 'business_phone', 'label' => 'Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ], [
                'field_id' => 'participants_address1', 'field' => 'address1', 'label' => 'Address 1',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'participants_address2', 'field' => 'address2', 'label' => 'Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'participants_city', 'field' => 'city', 'label' => 'City', 'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'participants_state', 'field' => 'state', 'label' => 'State',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'participants_zip', 'field' => 'zip', 'label' => 'Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'participants_contact_role', 'field' => 'role', 'label' => 'Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'participants_note', 'field' => 'note', 'label' => 'Note',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'participants_gender', 'field' => 'gender', 'label' => 'Gender',
                'type' => 'string',
                'input' => 'radio', 'values' => '{"M": "Male", "F": "Female"}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Gender',
                'vertical' => null,
                'validation' => null,
                'operators' => '["equal"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_external_id', 'field' => 'external_id', 'label' => 'External Id',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'External Id',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
        ]);

        /* -----------------------------------------------
         * Emergency Contact 1
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_emergency_contact1_id', 'field' => 'emergency_contact1_id', 'label' => 'Emergency Contact 1',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"contacts","columns":["id", "CONCAT(first_name, \' \',last_name) AS name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null
            ],[
                'field_id' => 'participants_emergency_contact1_first_name', 'field' => 'first_name',
                'label' => 'Emergency Contact 1 - First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_last_name', 'field' => 'last_name',
                'label' => 'Emergency Contact 1 - Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ], [
                'field_id' => 'participants_emergency_contact1_email', 'field' => 'email',
                'label' => 'Emergency Contact 1 - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_date_of_birth', 'field' => 'date_of_birth',
                'label' => 'Emergency Contact 1 - Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_home_phone', 'field' => 'home_phone',
                'label' => 'Emergency Contact 1 - Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_business_phone', 'field' => 'business_phone',
                'label' => 'Emergency Contact 1 - Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ], [
                'field_id' => 'participants_emergency_contact1_address1',
                'field' => 'address1', 'label' => 'Emergency Contact 1 - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_address2', 'field' => 'address2',
                'label' => 'Emergency Contact 1 - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_city',
                'field' => 'city',
                'label' => 'Emergency Contact 1 - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_state',
                'field' => 'state',
                'label' => 'Emergency Contact 1 - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_zip', 'field' => 'zip',
                'label' => 'Emergency Contact 1 - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_contact_role',
                'field' => 'role',
                'label' => 'Emergency Contact 1 - Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_note', 'field' => 'note',
                'label' => 'Emergency Contact 1 - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact1_id", "equal": "id", "alias": "emergency_contact1"}]}'
            ],[
                'field_id' => 'participants_emergency_contact1_relationship',
                'field' => 'emergency_contact1_role', 'label' => 'Emergency Contact 1 - Relationship',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Relationship',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
        ]);

        /* -----------------------------------------------
        * Emergency Contact 2
        */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_emergency_contact2_id', 'field' => 'emergency_contact2_id', 'label' => 'Emergency Contact 2',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"contacts","columns":["id", "CONCAT(first_name, \' \',last_name) AS name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_emergency_contact2_first_name', 'field' => 'first_name',
                'label' => 'Emergency Contact 2 - First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_last_name', 'field' => 'last_name',
                'label' => 'Emergency Contact 2 - Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ], [
                'field_id' => 'participants_emergency_contact2_email', 'field' => 'email',
                'label' => 'Emergency Contact 2 - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_date_of_birth', 'field' => 'date_of_birth',
                'label' => 'Emergency Contact 2 - Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_home_phone', 'field' => 'home_phone',
                'label' => 'Emergency Contact 2 - Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_business_phone', 'field' => 'business_phone',
                'label' => 'Emergency Contact 2 - Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ], [
                'field_id' => 'participants_emergency_contact2_address1',
                'field' => 'address1', 'label' => 'Emergency Contact 2 - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact2_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_address2', 'field' => 'address2',
                'label' => 'Emergency Contact 2 - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact2_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_city',
                'field' => 'city',
                'label' => 'Emergency Contact 2 - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact2_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_state',
                'field' => 'state',
                'label' => 'Emergency Contact 2 - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact2_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_zip', 'field' => 'zip',
                'label' => 'Emergency Contact 2 - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact2_address"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_contact_role',
                'field' => 'role',
                'label' => 'Emergency Contact 2 - Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_note', 'field' => 'note',
                'label' => 'Emergency Contact 2 - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "emergency_contact2_id", "equal": "id", "alias": "emergency_contact2"}]}'
            ],[
                'field_id' => 'participants_emergency_contact2_relationship',
                'field' => 'emergency_contact2_role', 'label' => 'Emergency Contact 2 - Relationship',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Relationship',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
        ]);

        /* -----------------------------------------------
        * Primary PG
        */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_primary_pg_id', 'field' => 'primary_pg_id', 'label' => 'Primary PG',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"contacts","columns":["id", "CONCAT(first_name, \' \',last_name) AS name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_primary_pg_first_name', 'field' => 'first_name',
                'label' => 'Primary PG - First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ],[
                'field_id' => 'participants_primary_pg_last_name', 'field' => 'last_name',
                'label' => 'Primary PG - Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ], [
                'field_id' => 'participants_primary_pg_email', 'field' => 'email',
                'label' => 'Primary PG - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ],[
                'field_id' => 'participants_primary_pg_date_of_birth', 'field' => 'date_of_birth',
                'label' => 'Primary PG - Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ],[
                'field_id' => 'participants_primary_pg_home_phone', 'field' => 'home_phone',
                'label' => 'Primary PG - Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ],[
                'field_id' => 'participants_primary_pg_business_phone', 'field' => 'business_phone',
                'label' => 'Primary PG - Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ], [
                'field_id' => 'participants_primary_pg_address1',
                'field' => 'address1', 'label' => 'Primary PG - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "primary_pg_address"}]}'
            ],[
                'field_id' => 'participants_primary_pg_address2', 'field' => 'address2',
                'label' => 'Primary PG - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_primary_pg_city',
                'field' => 'city',
                'label' => 'Primary PG - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_primary_pg_state',
                'field' => 'state',
                'label' => 'Primary PG - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_primary_pg_zip', 'field' => 'zip',
                'label' => 'Primary PG - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "emergency_contact1_address"}]}'
            ],[
                'field_id' => 'participants_primary_pg_contact_role',
                'field' => 'role',
                'label' => 'Primary PG - Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ],[
                'field_id' => 'participants_primary_pg_note', 'field' => 'note',
                'label' => 'Primary PG - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "primary_pg_id", "equal": "id", "alias": "primary_pg"}]}'
            ]
        ]);

        /* -----------------------------------------------
        * Secondary PG
        */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_secondary_pg_id', 'field' => 'secondary_pg_id', 'label' => 'Secondary PG',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"contacts","columns":["id", "CONCAT(first_name, \' \',last_name) AS name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_secondary_pg_first_name', 'field' => 'first_name',
                'label' => 'Secondary PG - First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_last_name', 'field' => 'last_name',
                'label' => 'Secondary PG - Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ], [
                'field_id' => 'participants_secondary_pg_email', 'field' => 'email',
                'label' => 'Secondary PG - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_date_of_birth', 'field' => 'date_of_birth',
                'label' => 'Secondary PG - Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_home_phone', 'field' => 'home_phone',
                'label' => 'Secondary PG - Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_business_phone', 'field' => 'business_phone',
                'label' => 'Secondary PG - Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ], [
                'field_id' => 'participants_secondary_pg_address1',
                'field' => 'address1', 'label' => 'Secondary PG - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "secondary_pg_address"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_address2', 'field' => 'address2',
                'label' => 'Secondary PG - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "secondary_pg_address"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_city',
                'field' => 'city',
                'label' => 'Secondary PG - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "secondary_pg_address"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_state',
                'field' => 'state',
                'label' => 'Secondary PG - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "secondary_pg_address"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_zip', 'field' => 'zip',
                'label' => 'Secondary PG - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "secondary_pg_address"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_contact_role',
                'field' => 'role',
                'label' => 'Secondary PG - Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ],[
                'field_id' => 'participants_secondary_pg_note', 'field' => 'note',
                'label' => 'Secondary PG - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"contacts", "on": "secondary_pg_id", "equal": "id", "alias": "secondary_pg"}]}'
            ]
        ]);

        /* -----------------------------------------------
         * Family
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_family_id', 'field' => 'family_id', 'label' => 'Family',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"families","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_family_name', 'field' => 'name',
                'label' => 'Family - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"families", "on": "family_id", "equal": "id", "alias": "family"}]}'
            ],[
                'field_id' => 'participants_family_external_id', 'field' => 'external_id',
                'label' => 'Family - External Id',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'External Id',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"families", "on": "family_id", "equal": "id", "alias": "family"}]}'
            ],
        ]);

        /* -----------------------------------------------
         * School
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_school_id', 'field' => 'school_id', 'label' => 'School',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"schools","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'participants_school_name', 'field' => 'name',
                'label' => 'School - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"}]}'
            ], [
                'field_id' => 'participants_school_alternative_names', 'field' => 'alternative_names',
                'label' => 'School - Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"}]}'
            ], [
                'field_id' => 'participants_school_phone', 'field' => 'phone',
                'label' => 'School - Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"}]}'
            ],[
                'field_id' => 'participants_school_email', 'field' => 'email',
                'label' => 'School - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"}]}'
            ],[
                'field_id' => 'participants_school_note', 'field' => 'note',
                'label' => 'School - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"}]}'
            ],[
                'field_id' => 'participants_school_address1',
                'field' => 'address1', 'label' => 'School - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'participants_school_address2', 'field' => 'address2',
                'label' => 'School - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'participants_school_city',
                'field' => 'city',
                'label' => 'School - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'participants_school_state',
                'field' => 'state',
                'label' => 'School - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'participants_school_zip', 'field' => 'zip',
                'label' => 'School - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "school"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],
        ]);

        /* -----------------------------------------------
         * Ethnicity
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'participants_ethnicity_id', 'field' => 'ethnicity_id', 'label' => 'Ethnicity',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"ethnicities","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ]
        ]);

         // find participant record
         $participant_record = Record::where('name', 'Participants')->first();

        $participant_record->addFilter('participants_external_id', 0.01);
        $participant_record->addFilter('participants_first_name', 0.02);
        $participant_record->addFilter('participants_last_name', 0.03);
        $participant_record->addFilter('participants_email', 0.04);
        $participant_record->addFilter('participants_date_of_birth', 0.05);
        $participant_record->addFilter('participants_home_phone', 0.06);
        $participant_record->addFilter('participants_business_phone', 0.07);
        $participant_record->addFilter('participants_gender', 0.08);
        $participant_record->addFilter('participants_address1', 0.09);
        $participant_record->addFilter('participants_address2', 0.10);
        $participant_record->addFilter('participants_city', 0.11);
        $participant_record->addFilter('participants_state', 0.12);
        $participant_record->addFilter('participants_zip', 0.13);
        $participant_record->addFilter('participants_contact_role', 0.14);
        $participant_record->addFilter('participants_note', 0.15);
        
        $participant_record->addFilter('participants_emergency_contact1_id', 1);
        $participant_record->addFilter('participants_emergency_contact1_first_name', 1.01);
        $participant_record->addFilter('participants_emergency_contact1_last_name', 1.02);
        $participant_record->addFilter('participants_emergency_contact1_email', 1.03);
        $participant_record->addFilter('participants_emergency_contact1_date_of_birth', 1.04);
        $participant_record->addFilter('participants_emergency_contact1_home_phone', 1.05);
        $participant_record->addFilter('participants_emergency_contact1_business_phone', 1.06);
        $participant_record->addFilter('participants_emergency_contact1_address1', 1.07);
        $participant_record->addFilter('participants_emergency_contact1_address2', 1.08);
        $participant_record->addFilter('participants_emergency_contact1_city', 1.09);
        $participant_record->addFilter('participants_emergency_contact1_state', 1.1);
        $participant_record->addFilter('participants_emergency_contact1_zip', 1.11);
        $participant_record->addFilter('participants_emergency_contact1_contact_role', 1.12);
        $participant_record->addFilter('participants_emergency_contact1_note', 1.13);
        $participant_record->addFilter('participants_emergency_contact1_relationship',1.14);
        
        $participant_record->addFilter('participants_emergency_contact2_id', 2.0);
        $participant_record->addFilter('participants_emergency_contact2_first_name', 2.01);
        $participant_record->addFilter('participants_emergency_contact2_last_name', 2.02);
        $participant_record->addFilter('participants_emergency_contact2_email', 2.03);
        $participant_record->addFilter('participants_emergency_contact2_date_of_birth', 2.04);
        $participant_record->addFilter('participants_emergency_contact2_home_phone', 2.05);
        $participant_record->addFilter('participants_emergency_contact2_business_phone', 2.06);
        $participant_record->addFilter('participants_emergency_contact2_address1', 2.07);
        $participant_record->addFilter('participants_emergency_contact2_address2', 2.08);
        $participant_record->addFilter('participants_emergency_contact2_city', 2.09);
        $participant_record->addFilter('participants_emergency_contact2_state', 2.1);
        $participant_record->addFilter('participants_emergency_contact2_zip', 2.11);
        $participant_record->addFilter('participants_emergency_contact2_contact_role', 2.12);
        $participant_record->addFilter('participants_emergency_contact2_note', 2.13);
        $participant_record->addFilter('participants_emergency_contact2_relationship',2.14);
       
        $participant_record->addFilter('participants_primary_pg_id', 3.0);
        $participant_record->addFilter('participants_primary_pg_first_name', 3.01);
        $participant_record->addFilter('participants_primary_pg_last_name', 3.02);
        $participant_record->addFilter('participants_primary_pg_email', 3.03);
        $participant_record->addFilter('participants_primary_pg_date_of_birth', 3.04);
        $participant_record->addFilter('participants_primary_pg_home_phone', 3.05);
        $participant_record->addFilter('participants_primary_pg_business_phone', 3.06);
        $participant_record->addFilter('participants_primary_pg_address1', 3.07);
        $participant_record->addFilter('participants_primary_pg_address2', 3.08);
        $participant_record->addFilter('participants_primary_pg_city', 3.09);
        $participant_record->addFilter('participants_primary_pg_state', 3.1);
        $participant_record->addFilter('participants_primary_pg_zip', 3.11);
        $participant_record->addFilter('participants_primary_pg_contact_role', 3.12);
        $participant_record->addFilter('participants_primary_pg_note', 3.13);
        
        $participant_record->addFilter('participants_secondary_pg_id', 4.0);
        $participant_record->addFilter('participants_secondary_pg_first_name', 4.01);
        $participant_record->addFilter('participants_secondary_pg_last_name', 4.02);
        $participant_record->addFilter('participants_secondary_pg_email', 4.03);
        $participant_record->addFilter('participants_secondary_pg_date_of_birth', 4.04);
        $participant_record->addFilter('participants_secondary_pg_home_phone', 4.05);
        $participant_record->addFilter('participants_secondary_pg_business_phone', 4.06);
        $participant_record->addFilter('participants_secondary_pg_address1', 4.07);
        $participant_record->addFilter('participants_secondary_pg_address2', 4.08);
        $participant_record->addFilter('participants_secondary_pg_city', 4.09);
        $participant_record->addFilter('participants_secondary_pg_state', 4.1);
        $participant_record->addFilter('participants_secondary_pg_zip', 4.11);
        $participant_record->addFilter('participants_secondary_pg_contact_role', 4.12);
        $participant_record->addFilter('participants_secondary_pg_note', 4.13);

        $participant_record->addFilter('participants_family_id', 5.0);
        $participant_record->addFilter('participants_family_name', 5.01);
        $participant_record->addFilter('participants_family_external_id', 5.02);

        $participant_record->addFilter('participants_school_id', 6.0);
        $participant_record->addFilter('participants_school_name', 6.01);
        $participant_record->addFilter('participants_school_alternative_names', 6.02);
        $participant_record->addFilter('participants_school_phone', 6.03);
        $participant_record->addFilter('participants_school_email', 6.04);
        $participant_record->addFilter('participants_school_note', 6.05);
        $participant_record->addFilter('participants_school_address1', 6.06);
        $participant_record->addFilter('participants_school_address2', 6.07);
        $participant_record->addFilter('participants_school_city', 6.08);
        $participant_record->addFilter('participants_school_state', 6.09);
        $participant_record->addFilter('participants_school_zip', 6.1);

        $participant_record->addFilter('participants_ethnicity_id', 7.0);


        $participant_record->addColumn('participants_external_id', 0.01);
        $participant_record->addColumn('participants_first_name', 0.02);
        $participant_record->addColumn('participants_last_name', 0.03);
        $participant_record->addColumn('participants_email', 0.04);
        $participant_record->addColumn('participants_date_of_birth', 0.05);
        $participant_record->addColumn('participants_home_phone', 0.06);
        $participant_record->addColumn('participants_business_phone', 0.07);
        $participant_record->addColumn('participants_gender', 0.08);
        $participant_record->addColumn('participants_address1', 0.09);
        $participant_record->addColumn('participants_address2', 0.10);
        $participant_record->addColumn('participants_city', 0.11);
        $participant_record->addColumn('participants_state', 0.12);
        $participant_record->addColumn('participants_zip', 0.13);
        $participant_record->addColumn('participants_contact_role', 0.14);
        $participant_record->addColumn('participants_note', 0.15);

        $participant_record->addColumn('participants_emergency_contact1_id', 1);
        $participant_record->addColumn('participants_emergency_contact1_first_name', 1.01);
        $participant_record->addColumn('participants_emergency_contact1_last_name', 1.02);
        $participant_record->addColumn('participants_emergency_contact1_email', 1.03);
        $participant_record->addColumn('participants_emergency_contact1_date_of_birth', 1.04);
        $participant_record->addColumn('participants_emergency_contact1_home_phone', 1.05);
        $participant_record->addColumn('participants_emergency_contact1_business_phone', 1.06);
        $participant_record->addColumn('participants_emergency_contact1_address1', 1.07);
        $participant_record->addColumn('participants_emergency_contact1_address2', 1.08);
        $participant_record->addColumn('participants_emergency_contact1_city', 1.09);
        $participant_record->addColumn('participants_emergency_contact1_state', 1.1);
        $participant_record->addColumn('participants_emergency_contact1_zip', 1.11);
        $participant_record->addColumn('participants_emergency_contact1_contact_role', 1.12);
        $participant_record->addColumn('participants_emergency_contact1_note', 1.13);
        $participant_record->addColumn('participants_emergency_contact1_relationship',1.14);

        $participant_record->addColumn('participants_emergency_contact2_id', 2.0);
        $participant_record->addColumn('participants_emergency_contact2_first_name', 2.01);
        $participant_record->addColumn('participants_emergency_contact2_last_name', 2.02);
        $participant_record->addColumn('participants_emergency_contact2_email', 2.03);
        $participant_record->addColumn('participants_emergency_contact2_date_of_birth', 2.04);
        $participant_record->addColumn('participants_emergency_contact2_home_phone', 2.05);
        $participant_record->addColumn('participants_emergency_contact2_business_phone', 2.06);
        $participant_record->addColumn('participants_emergency_contact2_address1', 2.07);
        $participant_record->addColumn('participants_emergency_contact2_address2', 2.08);
        $participant_record->addColumn('participants_emergency_contact2_city', 2.09);
        $participant_record->addColumn('participants_emergency_contact2_state', 2.1);
        $participant_record->addColumn('participants_emergency_contact2_zip', 2.11);
        $participant_record->addColumn('participants_emergency_contact2_contact_role', 2.12);
        $participant_record->addColumn('participants_emergency_contact2_note', 2.13);
        $participant_record->addColumn('participants_emergency_contact2_relationship',2.14);

        $participant_record->addColumn('participants_primary_pg_id', 3.0);
        $participant_record->addColumn('participants_primary_pg_first_name', 3.01);
        $participant_record->addColumn('participants_primary_pg_last_name', 3.02);
        $participant_record->addColumn('participants_primary_pg_email', 3.03);
        $participant_record->addColumn('participants_primary_pg_date_of_birth', 3.04);
        $participant_record->addColumn('participants_primary_pg_home_phone', 3.05);
        $participant_record->addColumn('participants_primary_pg_business_phone', 3.06);
        $participant_record->addColumn('participants_primary_pg_address1', 3.07);
        $participant_record->addColumn('participants_primary_pg_address2', 3.08);
        $participant_record->addColumn('participants_primary_pg_city', 3.09);
        $participant_record->addColumn('participants_primary_pg_state', 3.1);
        $participant_record->addColumn('participants_primary_pg_zip', 3.11);
        $participant_record->addColumn('participants_primary_pg_contact_role', 3.12);
        $participant_record->addColumn('participants_primary_pg_note', 3.13);

        $participant_record->addColumn('participants_secondary_pg_id', 4.0);
        $participant_record->addColumn('participants_secondary_pg_first_name', 4.01);
        $participant_record->addColumn('participants_secondary_pg_last_name', 4.02);
        $participant_record->addColumn('participants_secondary_pg_email', 4.03);
        $participant_record->addColumn('participants_secondary_pg_date_of_birth', 4.04);
        $participant_record->addColumn('participants_secondary_pg_home_phone', 4.05);
        $participant_record->addColumn('participants_secondary_pg_business_phone', 4.06);
        $participant_record->addColumn('participants_secondary_pg_address1', 4.07);
        $participant_record->addColumn('participants_secondary_pg_address2', 4.08);
        $participant_record->addColumn('participants_secondary_pg_city', 4.09);
        $participant_record->addColumn('participants_secondary_pg_state', 4.1);
        $participant_record->addColumn('participants_secondary_pg_zip', 4.11);
        $participant_record->addColumn('participants_secondary_pg_contact_role', 4.12);
        $participant_record->addColumn('participants_secondary_pg_note', 4.13);

        $participant_record->addColumn('participants_family_id', 5.0);
        $participant_record->addColumn('participants_family_name', 5.01);
        $participant_record->addColumn('participants_family_external_id', 5.02);

        $participant_record->addColumn('participants_school_id', 6.0);
        $participant_record->addColumn('participants_school_name', 6.01);
        $participant_record->addColumn('participants_school_alternative_names', 6.02);
        $participant_record->addColumn('participants_school_phone', 6.03);
        $participant_record->addColumn('participants_school_email', 6.04);
        $participant_record->addColumn('participants_school_note', 6.05);
        $participant_record->addColumn('participants_school_address1', 6.06);
        $participant_record->addColumn('participants_school_address2', 6.07);
        $participant_record->addColumn('participants_school_city', 6.08);
        $participant_record->addColumn('participants_school_state', 6.09);
        $participant_record->addColumn('participants_school_zip', 6.1);

        $participant_record->addColumn('participants_ethnicity_id', 7.0);

        /* -----------------------------------------------
        | CONTACT
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'contacts_first_name', 'field' => 'first_name', 'label' => 'First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'First Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'contacts_last_name', 'field' => 'last_name', 'label' => 'Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Last Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'contacts_email', 'field' => 'email', 'label' => 'Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null
            ],[
                'field_id' => 'contacts_date_of_birth', 'field' => 'date_of_birth', 'label' => 'Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'contacts_home_phone', 'field' => 'home_phone', 'label' => 'Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'contacts_business_phone', 'field' => 'business_phone', 'label' => 'Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null
            ], [
                'field_id' => 'contacts_address1', 'field' => 'address1', 'label' => 'Address 1',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'contacts_address2', 'field' => 'address2', 'label' => 'Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'contacts_city', 'field' => 'city', 'label' => 'City', 'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'contacts_state', 'field' => 'state', 'label' => 'State',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'contacts_zip', 'field' => 'zip', 'label' => 'Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'contacts_contact_role', 'field' => 'role', 'label' => 'Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'contacts_note', 'field' => 'note', 'label' => 'Note',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ]
        ]);

        // find contact record
        $contact_record = Record::where('name', 'Contacts')->first();
        
        $contact_record->addFilter('contacts_first_name', 0.01);
        $contact_record->addFilter('contacts_last_name', 0.02);
        $contact_record->addFilter('contacts_email', 0.03);
        $contact_record->addFilter('contacts_date_of_birth', 0.04);
        $contact_record->addFilter('contacts_home_phone', 0.05);
        $contact_record->addFilter('contacts_business_phone', 0.06);
        $contact_record->addFilter('contacts_address1', 0.07);
        $contact_record->addFilter('contacts_address2', 0.08);
        $contact_record->addFilter('contacts_city', 0.09);
        $contact_record->addFilter('contacts_state', 0.10);
        $contact_record->addFilter('contacts_zip', 0.11);
        $contact_record->addFilter('contacts_contact_role', 0.12);
        $contact_record->addFilter('contacts_note', 0.13);

        $contact_record->addColumn('contacts_first_name', 0.01);
        $contact_record->addColumn('contacts_last_name', 0.02);
        $contact_record->addColumn('contacts_email', 0.03);
        $contact_record->addColumn('contacts_date_of_birth', 0.04);
        $contact_record->addColumn('contacts_home_phone', 0.05);
        $contact_record->addColumn('contacts_business_phone', 0.06);
        $contact_record->addColumn('contacts_address1', 0.07);
        $contact_record->addColumn('contacts_address2', 0.08);
        $contact_record->addColumn('contacts_city', 0.09);
        $contact_record->addColumn('contacts_state', 0.10);
        $contact_record->addColumn('contacts_zip', 0.11);
        $contact_record->addColumn('contacts_contact_role', 0.12);
        $contact_record->addColumn('contacts_note', 0.13);

        /* -----------------------------------------------
        | SCHOOL
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'schools_name', 'field' => 'name',
                'label' => 'School - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'schools_alternative_names', 'field' => 'alternative_names',
                'label' => 'School - Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'schools_phone', 'field' => 'phone',
                'label' => 'School - Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'schools_email', 'field' => 'email',
                'label' => 'School - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'schools_note', 'field' => 'note',
                'label' => 'School - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'schools_address1',
                'field' => 'address1', 'label' => 'School - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'schools_address2', 'field' => 'address2',
                'label' => 'School - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'schools_city',
                'field' => 'city',
                'label' => 'School - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'schools_state',
                'field' => 'state',
                'label' => 'School - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'schools_zip', 'field' => 'zip',
                'label' => 'School - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],
        ]);

        // find school record
        $school_record = Record::where('name', 'Schools')->first();
        
        $school_record->addFilter('schools_name', 0.01);
        $school_record->addFilter('schools_alternative_names', 0.02);
        $school_record->addFilter('schools_phone', 0.03);
        $school_record->addFilter('schools_email', 0.04);
        $school_record->addFilter('schools_note', 0.05);
        $school_record->addFilter('schools_address1', 0.06);
        $school_record->addFilter('schools_address2', 0.07);
        $school_record->addFilter('schools_city', 0.08);
        $school_record->addFilter('schools_state', 0.09);
        $school_record->addFilter('schools_zip', 0.1);

        $school_record->addColumn('schools_name', 0.01);
        $school_record->addColumn('schools_alternative_names', 0.02);
        $school_record->addColumn('schools_phone', 0.03);
        $school_record->addColumn('schools_email', 0.04);
        $school_record->addColumn('schools_note', 0.05);
        $school_record->addColumn('schools_address1', 0.06);
        $school_record->addColumn('schools_address2', 0.07);
        $school_record->addColumn('schools_city', 0.08);
        $school_record->addColumn('schools_state', 0.09);
        $school_record->addColumn('schools_zip', 0.1);

        /* -----------------------------------------------
        | PROGRAM
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */
        DB::table('fields')->insert([
            [
                'field_id' => 'programs_nickname', 'field' => 'slug', 'label' => 'Nickname',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Nickname',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'programs_name', 'field' => 'name', 'label' => 'Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'programs_alternative_names', 'field' => 'alternative_names', 'label' => 'Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'programs_description', 'field' => 'description', 'label' => 'Description',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Description',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
        ]);

        // find program record
        $program_record = Record::where('name', 'Programs')->first();

        $program_record->addFilter('programs_nickname', 0.01);
        $program_record->addFilter('programs_name', 0.02);
        $program_record->addFilter('programs_alternative_names', 0.03);
        $program_record->addFilter('programs_description', 0.04);

        $program_record->addColumn('programs_nickname', 0.01);
        $program_record->addColumn('programs_name', 0.02);
        $program_record->addColumn('programs_alternative_names', 0.03);
        $program_record->addColumn('programs_description', 0.04);

        /* -----------------------------------------------
        | SESSION
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'sessions_program_id', 'field' => 'program_id', 'label' => 'Program',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"programs","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_program_nickname', 'field' => 'slug', 'label' => 'Nickname',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Nickname',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ],[
                'field_id' => 'sessions_program_name', 'field' => 'name', 'label' => 'Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ], [
                'field_id' => 'sessions_program_alternative_names', 'field' => 'alternative_names', 'label' => 'Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ],[
                'field_id' => 'sessions_program_description', 'field' => 'description', 'label' => 'Description',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Description',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ], [
                'field_id' => 'sessions_school_id', 'field' => 'school_id', 'label' => 'School',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"schools","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_school_name', 'field' => 'name',
                'label' => 'School - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ], [
                'field_id' => 'sessions_school_alternative_names', 'field' => 'alternative_names',
                'label' => 'School - Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ], [
                'field_id' => 'sessions_school_phone', 'field' => 'phone',
                'label' => 'School - Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'sessions_school_email', 'field' => 'email',
                'label' => 'School - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'sessions_school_note', 'field' => 'note',
                'label' => 'School - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'sessions_school_address1',
                'field' => 'address1', 'label' => 'School - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'sessions_school_address2', 'field' => 'address2',
                'label' => 'School - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'sessions_school_city',
                'field' => 'city',
                'label' => 'School - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'sessions_school_state',
                'field' => 'state',
                'label' => 'School - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'sessions_school_zip', 'field' => 'zip',
                'label' => 'School - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'sessions_start_date', 'field' => 'start_date', 'label' => 'Start Date',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Start Date',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_end_date', 'field' => 'end_date', 'label' => 'End Date',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'End Date',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_start_time', 'field' => 'start_time', 'label' => 'Start Time',
                'type' => 'time', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'HH:mm:ss',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'sessions_end_time', 'field' => 'end_time', 'label' => 'End Time',
                'type' => 'time', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'HH:mm:ss',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date1', 'field' => 'date1', 'label' => 'Date 1',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date2', 'field' => 'date2', 'label' => 'Date 2',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date3', 'field' => 'date3', 'label' => 'Date 3',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 3',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date4', 'field' => 'date4', 'label' => 'Date 4',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 4',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date5', 'field' => 'date5', 'label' => 'Date 5',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 5',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date6', 'field' => 'date6', 'label' => 'Date 6',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 6',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date7', 'field' => 'date7', 'label' => 'Date 7',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 7',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date8', 'field' => 'date8', 'label' => 'Date 8',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 8',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date9', 'field' => 'date9', 'label' => 'Date 9',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 9',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'sessions_date10', 'field' => 'date10', 'label' => 'Date 10',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Date 10',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
            ]);

        $session_record = Record::where('name', 'Sessions')->first();

        $session_record->addFilter('sessions_program_id', 0.01);
        $session_record->addFilter('sessions_program_nickname', 0.02);
        $session_record->addFilter('sessions_program_name', 0.03);
        $session_record->addFilter('sessions_program_alternative_names', 0.04);
        $session_record->addFilter('sessions_program_description', 0.05);

        $session_record->addFilter('sessions_school_id', 1.01);
        $session_record->addFilter('sessions_school_name', 1.02);
        $session_record->addFilter('sessions_school_alternative_names', 1.03);
        $session_record->addFilter('sessions_school_phone', 1.04);
        $session_record->addFilter('sessions_school_email', 1.05);
        $session_record->addFilter('sessions_school_note', 1.06);
        $session_record->addFilter('sessions_school_address1', 1.07);
        $session_record->addFilter('sessions_school_address2', 1.08);
        $session_record->addFilter('sessions_school_city', 1.09);
        $session_record->addFilter('sessions_school_state', 1.10);
        $session_record->addFilter('sessions_school_zip', 1.11);

        $session_record->addFilter('sessions_start_date', 2.01);
        $session_record->addFilter('sessions_end_date', 2.02);
        $session_record->addFilter('sessions_start_time', 4.021);
        $session_record->addFilter('sessions_end_time', 4.022);
        $session_record->addFilter('sessions_date1', 2.03);
        $session_record->addFilter('sessions_date2', 2.04);
        $session_record->addFilter('sessions_date3', 2.05);
        $session_record->addFilter('sessions_date4', 2.06);
        $session_record->addFilter('sessions_date5', 2.07);
        $session_record->addFilter('sessions_date6', 2.08);
        $session_record->addFilter('sessions_date7', 2.09);
        $session_record->addFilter('sessions_date8', 2.10);
        $session_record->addFilter('sessions_date9', 2.11);
        $session_record->addFilter('sessions_date10', 2.12);

        $session_record->addColumn('sessions_program_id', 0.01);
        $session_record->addColumn('sessions_program_nickname', 0.02);
        $session_record->addColumn('sessions_program_name', 0.03);
        $session_record->addColumn('sessions_program_alternative_names', 0.04);
        $session_record->addColumn('sessions_program_description', 0.05);

        $session_record->addColumn('sessions_school_id', 1.01);
        $session_record->addColumn('sessions_school_name', 1.02);
        $session_record->addColumn('sessions_school_alternative_names', 1.03);
        $session_record->addColumn('sessions_school_phone', 1.04);
        $session_record->addColumn('sessions_school_email', 1.05);
        $session_record->addColumn('sessions_school_note', 1.06);
        $session_record->addColumn('sessions_school_address1', 1.07);
        $session_record->addColumn('sessions_school_address2', 1.08);
        $session_record->addColumn('sessions_school_city', 1.09);
        $session_record->addColumn('sessions_school_state', 1.10);
        $session_record->addColumn('sessions_school_zip', 1.11);

        $session_record->addColumn('sessions_start_date', 2.01);
        $session_record->addColumn('sessions_end_date', 2.02);
        $session_record->addColumn('sessions_start_time', 4.021);
        $session_record->addColumn('sessions_end_time', 4.022);
        $session_record->addColumn('sessions_date1', 2.03);
        $session_record->addColumn('sessions_date2', 2.04);
        $session_record->addColumn('sessions_date3', 2.05);
        $session_record->addColumn('sessions_date4', 2.06);
        $session_record->addColumn('sessions_date5', 2.07);
        $session_record->addColumn('sessions_date6', 2.08);
        $session_record->addColumn('sessions_date7', 2.09);
        $session_record->addColumn('sessions_date8', 2.10);
        $session_record->addColumn('sessions_date9', 2.11);
        $session_record->addColumn('sessions_date10', 2.12);
        
        /* -----------------------------------------------
        | REGISTRATION
         -------------------------------------------------*/

        /* -----------------------------------------------
         * Main
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'registrations_external_id', 'field' => 'external_id', 'label' => 'External Id',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'External Id',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_balance', 'field' => 'balance', 'label' => 'Balance',
                'type' => 'double', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => '0.00',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_active_fee_paid', 'field' => 'active_fee_paid', 'label' => 'Active Fee Paid',
                'type' => 'double', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => '0.00',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_discount', 'field' => 'discount', 'label' => 'Discount',
                'type' => 'double', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => '0.00',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_paid', 'field' => 'paid', 'label' => 'Paid',
                'type' => 'double', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => '0.00',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_grade', 'field' => 'grade', 'label' => 'Grade',
                'type' => 'integer', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => '1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_status_id', 'field' => 'status_id', 'label' => 'Status',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"registration_statuses","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],
            ]);

        /* -----------------------------------------------
         * Participant
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'registrations_participant_id', 'field' => 'participant_id', 'label' => 'Participant',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"participants","columns":["participants.id", "CONCAT(contacts.first_name, \" \", contacts.last_name) AS name"], "lists": ["name","id"], "joins": [{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ],[
                'field_id' => 'registrations_participant_first_name', 'field' => 'first_name', 'label' => 'Participant - First Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}',
            ],[
                'field_id' => 'registrations_participant_last_name', 'field' => 'last_name', 'label' => 'Participant - Last Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}',
            ],[
                'field_id' => 'registrations_participant_email', 'field' => 'email', 'label' => 'Participant - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'registrations_participant_date_of_birth', 'field' => 'date_of_birth', 'label' => 'Participant - Date Of Birth',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'YYYY-MM-DD',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'registrations_participant_home_phone', 'field' => 'home_phone', 'label' => 'Participant - Home Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Home Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'registrations_participant_business_phone', 'field' => 'business_phone', 'label' => 'Participant - Business Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Business Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ], [
                'field_id' => 'registrations_participant_address1', 'field' => 'address1', 'label' => 'Participant - Address 1',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'registrations_participant_address2', 'field' => 'address2', 'label' => 'Participant - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'registrations_participant_city', 'field' => 'city', 'label' => 'Participant - City', 'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'registrations_participant_state', 'field' => 'state', 'label' => 'Participant - State',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'registrations_participant_zip', 'field' => 'zip', 'label' => 'Participant - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "contacts_address"}]}'
            ], [
                'field_id' => 'registrations_participant_contact_role', 'field' => 'role', 'label' => 'Participant - Contact Role',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Contact Role',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'registrations_participant_note', 'field' => 'note', 'label' => 'Participant - Note',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"},{"table":"contacts", "on": "contact_id", "equal": "id", "alias": "contacts"}]}'
            ],[
                'field_id' => 'registrations_participant_gender', 'field' => 'gender', 'label' => 'Participant - Gender',
                'type' => 'string',
                'input' => 'radio', 'values' => '{"M": "Male", "F": "Female"}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Gender',
                'vertical' => null,
                'validation' => null,
                'operators' => '["equal"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"}]}',
            ],[
                'field_id' => 'registrations_participant_external_id', 'field' => 'external_id', 'label' => 'Participant - External Id',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'External Id',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"participants", "on": "participant_id", "equal": "id", "alias": "participants"}]}',
            ],]);

        /* -----------------------------------------------
         * Session
         */

        DB::table('fields')->insert([
            [
                'field_id' => 'registrations_session_id', 'field' => 'session_id', 'label' => 'Session',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"sessions","columns":["sessions.id", "CONCAT(programs.slug, \" \", schools.slug, \" \", start_date) AS name"], "lists": ["name","id"], "joins": [{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"},{"table":"schools", "on": "school_id", "equal": "id","parent_alias":"sessions", "alias": "schools"}]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => null,
            ], [
                'field_id' => 'registrations_session_program_id', 'field' => 'program_id', 'label' => 'Session - Program',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"programs","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_program_nickname', 'field' => 'slug', 'label' => 'Session - Program - Nickname',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Program - Nickname',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ],[
                'field_id' => 'registrations_session_program_name', 'field' => 'name', 'label' => 'Session - Program - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Program - Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ], [
                'field_id' => 'registrations_session_program_alternative_names', 'field' => 'alternative_names', 'label' => 'Session - Program - Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Program - Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ],[
                'field_id' => 'registrations_session_program_description', 'field' => 'description', 'label' => 'Session - Program - Description',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Program - Description',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"programs", "on": "program_id", "equal": "id", "alias": "programs"}]}',
            ], [
                'field_id' => 'registrations_session_school_id', 'field' => 'school_id', 'label' => 'Session - School',
                'type' => 'integer', 'input' => 'select',
                'values' => '{"table":"schools","columns":["id", "name"], "lists": ["name","id"]}',
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => null,
                'vertical' => null,
                'validation' => null,
                'operators' => '["equals"]',
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_school_name', 'field' => 'name',
                'label' => 'Session - School - Name',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Name',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ], [
                'field_id' => 'registrations_session_school_alternative_names', 'field' => 'alternative_names',
                'label' => 'Session - School - Alternative Names',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Alternative Names',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ], [
                'field_id' => 'registrations_session_school_phone', 'field' => 'phone',
                'label' => 'Session - School - Phone',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Phone',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'registrations_session_school_email', 'field' => 'email',
                'label' => 'Session - School - Email',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Email',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'registrations_session_school_note', 'field' => 'note',
                'label' => 'Session - School - Note',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - School Note',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"}]}',
            ],[
                'field_id' => 'registrations_session_school_address1',
                'field' => 'address1', 'label' => 'Session - School - Address 1',
                'type' => 'string',
                'input' => null, 'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - School - Address 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'registrations_session_school_address2', 'field' => 'address2',
                'label' => 'Session - School - Address 2',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - School - Address 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'registrations_session_school_city',
                'field' => 'city',
                'label' => 'Session - School - City',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'Session - School - City',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
               'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"},{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'registrations_session_school_state',
                'field' => 'state',
                'label' => 'Session - School - State',
                'type' => 'string',
                'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null,
                'multiple' => null,
                'placeholder' => 'Session - School - State',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'registrations_session_school_zip', 'field' => 'zip',
                'label' => 'Session - School - Zip',
                'type' => 'string', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - School - Zip',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"schools", "on": "school_id", "equal": "id", "alias": "schools"},{"table":"addresses", "on": "address_id", "equal": "id", "alias": "school_address"}]}'
            ],[
                'field_id' => 'registrations_session_start_date', 'field' => 'start_date', 'label' => 'Session - Start Date',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Start Date',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_end_date', 'field' => 'end_date', 'label' => 'Session - End Date',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - End Date',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ], [
                'field_id' => 'registrations_session_start_time', 'field' => 'start_time', 'label' => 'Session - Start Time',
                'type' => 'time', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'HH:mm:ss',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ], [
                'field_id' => 'registrations_session_end_time', 'field' => 'end_time', 'label' => 'Session - End Time',
                'type' => 'time', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'HH:mm:ss',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date1', 'field' => 'date1', 'label' => 'Session - Date 1',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 1',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date2', 'field' => 'date2', 'label' => 'Session - Date 2',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 2',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date3', 'field' => 'date3', 'label' => 'Session - Date 3',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 3',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date4', 'field' => 'date4', 'label' => 'Session - Date 4',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 4',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date5', 'field' => 'date5', 'label' => 'Session - Date 5',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 5',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date6', 'field' => 'date6', 'label' => 'Session - Date 6',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 6',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date7', 'field' => 'date7', 'label' => 'Session - Date 7',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 7',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date8', 'field' => 'date8', 'label' => 'Session - Date 8',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 8',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date9', 'field' => 'date9', 'label' => 'Session - Date 9',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 9',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],[
                'field_id' => 'registrations_session_date10', 'field' => 'date10', 'label' => 'Session - Date 10',
                'type' => 'date', 'input' => null,
                'values' => null,
                'default_value' => null,
                'input_event' => null,
                'rows' => null, 'multiple' => null,
                'placeholder' => 'Session - Date 10',
                'vertical' => null,
                'validation' => null,
                'operators' => null,
                'plugin' => null,
                'plugin_config' => null,
                'data' => '{"joins":[{"table":"sessions", "on": "session_id", "equal": "id", "alias": "sessions"}]}',
            ],
        ]);

        $registration_record = Record::where('name', 'Registrations')->first();

        $registration_record->addFilter('registrations_external_id', 0.01);
        $registration_record->addFilter('registrations_balance', 0.02);
        $registration_record->addFilter('registrations_active_fee_paid', 0.03);
        $registration_record->addFilter('registrations_discount', 0.04);
        $registration_record->addFilter('registrations_paid', 0.05);
        $registration_record->addFilter('registrations_grade', 0.06);
        $registration_record->addFilter('registrations_status_id', 0.07);

        $registration_record->addFilter('registrations_participant_external_id', 1.01);
        $registration_record->addFilter('registrations_participant_first_name', 1.02);
        $registration_record->addFilter('registrations_participant_last_name', 1.03);
        $registration_record->addFilter('registrations_participant_email', 1.04);
        $registration_record->addFilter('registrations_participant_date_of_birth', 1.05);
        $registration_record->addFilter('registrations_participant_home_phone', 1.06);
        $registration_record->addFilter('registrations_participant_business_phone', 1.07);
        $registration_record->addFilter('registrations_participant_gender', 1.08);
        $registration_record->addFilter('registrations_participant_address1', 1.09);
        $registration_record->addFilter('registrations_participant_address2', 1.10);
        $registration_record->addFilter('registrations_participant_city', 1.11);
        $registration_record->addFilter('registrations_participant_state', 1.12);
        $registration_record->addFilter('registrations_participant_zip', 1.13);
        $registration_record->addFilter('registrations_participant_contact_role', 1.14);
        $registration_record->addFilter('registrations_participant_note', 1.15);

        $registration_record->addFilter('registrations_session_id', 2.01);
        $registration_record->addFilter('registrations_session_program_id', 2.02);
        $registration_record->addFilter('registrations_session_program_nickname', 2.03);
        $registration_record->addFilter('registrations_session_program_name', 2.04);
        $registration_record->addFilter('registrations_session_program_alternative_names', 2.05);
        $registration_record->addFilter('registrations_session_program_description', 2.06);

        $registration_record->addFilter('registrations_session_school_id', 3.01);
        $registration_record->addFilter('registrations_session_school_name', 3.02);
        $registration_record->addFilter('registrations_session_school_alternative_names', 3.03);
        $registration_record->addFilter('registrations_session_school_phone', 3.04);
        $registration_record->addFilter('registrations_session_school_email', 3.05);
        $registration_record->addFilter('registrations_session_school_note', 3.06);
        $registration_record->addFilter('registrations_session_school_address1', 3.07);
        $registration_record->addFilter('registrations_session_school_address2', 3.08);
        $registration_record->addFilter('registrations_session_school_city', 3.09);
        $registration_record->addFilter('registrations_session_school_state', 3.10);
        $registration_record->addFilter('registrations_session_school_zip', 3.11);

        $registration_record->addFilter('registrations_session_start_date', 4.01);
        $registration_record->addFilter('registrations_session_end_date', 4.02);
        $registration_record->addFilter('registrations_session_start_time', 4.021);
        $registration_record->addFilter('registrations_session_end_time', 4.022);
        $registration_record->addFilter('registrations_session_date1', 4.03);
        $registration_record->addFilter('registrations_session_date2', 4.04);
        $registration_record->addFilter('registrations_session_date3', 4.05);
        $registration_record->addFilter('registrations_session_date4', 4.06);
        $registration_record->addFilter('registrations_session_date5', 4.07);
        $registration_record->addFilter('registrations_session_date6', 4.08);
        $registration_record->addFilter('registrations_session_date7', 4.09);
        $registration_record->addFilter('registrations_session_date8', 4.10);
        $registration_record->addFilter('registrations_session_date9', 4.11);
        $registration_record->addFilter('registrations_session_date10', 4.12);

        $registration_record->addColumn('registrations_external_id', 0.01);
        $registration_record->addColumn('registrations_balance', 0.02);
        $registration_record->addColumn('registrations_active_fee_paid', 0.03);
        $registration_record->addColumn('registrations_discount', 0.04);
        $registration_record->addColumn('registrations_paid', 0.05);
        $registration_record->addColumn('registrations_grade', 0.06);
        $registration_record->addColumn('registrations_status_id', 0.07);

        $registration_record->addColumn('registrations_participant_external_id', 1.01);
        $registration_record->addColumn('registrations_participant_first_name', 1.02);
        $registration_record->addColumn('registrations_participant_last_name', 1.03);
        $registration_record->addColumn('registrations_participant_email', 1.04);
        $registration_record->addColumn('registrations_participant_date_of_birth', 1.05);
        $registration_record->addColumn('registrations_participant_home_phone', 1.06);
        $registration_record->addColumn('registrations_participant_business_phone', 1.07);
        $registration_record->addColumn('registrations_participant_gender', 1.08);
        $registration_record->addColumn('registrations_participant_address1', 1.09);
        $registration_record->addColumn('registrations_participant_address2', 1.10);
        $registration_record->addColumn('registrations_participant_city', 1.11);
        $registration_record->addColumn('registrations_participant_state', 1.12);
        $registration_record->addColumn('registrations_participant_zip', 1.13);
        $registration_record->addColumn('registrations_participant_contact_role', 1.14);
        $registration_record->addColumn('registrations_participant_note', 1.15);

        $registration_record->addColumn('registrations_session_id', 2.01);
        $registration_record->addColumn('registrations_session_program_id', 2.02);
        $registration_record->addColumn('registrations_session_program_nickname', 2.03);
        $registration_record->addColumn('registrations_session_program_name', 2.04);
        $registration_record->addColumn('registrations_session_program_alternative_names', 2.05);
        $registration_record->addColumn('registrations_session_program_description', 2.06);

        $registration_record->addColumn('registrations_session_school_id', 3.01);
        $registration_record->addColumn('registrations_session_school_name', 3.02);
        $registration_record->addColumn('registrations_session_school_alternative_names', 3.03);
        $registration_record->addColumn('registrations_session_school_phone', 3.04);
        $registration_record->addColumn('registrations_session_school_email', 3.05);
        $registration_record->addColumn('registrations_session_school_note', 3.06);
        $registration_record->addColumn('registrations_session_school_address1', 3.07);
        $registration_record->addColumn('registrations_session_school_address2', 3.08);
        $registration_record->addColumn('registrations_session_school_city', 3.09);
        $registration_record->addColumn('registrations_session_school_state', 3.10);
        $registration_record->addColumn('registrations_session_school_zip', 3.11);

        $registration_record->addColumn('registrations_session_start_date', 4.01);
        $registration_record->addColumn('registrations_session_end_date', 4.02);
        $registration_record->addColumn('registrations_session_start_time', 4.021);
        $registration_record->addColumn('registrations_session_end_time', 4.022);
        $registration_record->addColumn('registrations_session_date1', 4.03);
        $registration_record->addColumn('registrations_session_date2', 4.04);
        $registration_record->addColumn('registrations_session_date3', 4.05);
        $registration_record->addColumn('registrations_session_date4', 4.06);
        $registration_record->addColumn('registrations_session_date5', 4.07);
        $registration_record->addColumn('registrations_session_date6', 4.08);
        $registration_record->addColumn('registrations_session_date7', 4.09);
        $registration_record->addColumn('registrations_session_date8', 4.10);
        $registration_record->addColumn('registrations_session_date9', 4.11);
        $registration_record->addColumn('registrations_session_date10', 4.12);
    }
}