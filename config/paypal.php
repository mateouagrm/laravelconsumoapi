<?php
return array(
    // set your paypal credential
    'client_id' => 'AQYI-OCOF0xXB2wen3vGOBhTFfi_I1ZFSo9sDIHwQzXaC_uujX8VWceFmyRnGeSs4YcpdRIv88voiF8N',
    'secret' => 'EMtI94CM_qlGjytcej3QN9t4tsoBWxFOuL9q1ESWrR1YmjC8ifhb9PkqlXrCR4T3hBT7xUHuRL8IFEdk',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);