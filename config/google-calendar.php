<?php

return [

    /*
     * Path to the json file containing the credentials.
     */
    'service_account_credentials_json' => storage_path('app/google-calendar/service-account-credentials.json'),

    /*
     *  The id of the Google Calendar that will be used by default.
     */
    'calendar_id' => env('GOOGLE_CALENDAR_ID'),

    /*
     *  When using a service account, specify a domain user that will work on behalf of the service account to create events across a domain.
     */
    'service_account_user' => env('GOOGLE_SERVICE_ACCOUNT_USER'),
];
