<?php return [

    /*
    |--------------------------------------------------------------------------
    | Facebook Feed Sync Frequency
    |--------------------------------------------------------------------------
    |
    | Defines how frequently the configured feeds are synced with Facebook.
    | The following options are available:
    |
    | false - Disables automatic syncing
    | 'hourly' - Syncs hourly
    | 'daily'  - Syncs daily
    | 'weekly' - Syncs weekly
    | 'monthly' - Syncs monthly
    | 'any other string' - Assumed to be a custom Cron schedule, see https://octobercms.com/docs/plugin/scheduling#schedule-frequency-options for more information
    |
    */
    'syncFrequency' => 'daily',

];