<?php
return [
    //add home Url
    'homeUrl' => '/manage',
    'components' => [
        //add new feature
        'request' => [
            'baseUrl' => '/manage',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        //end new feature
    ],
];