<?php

//require_once('data.php');

$sortKeys = [
    'name',
    'street',
    'house_number',
    'postcode',
    'city',
    'phone',
];

$people = [
    [
        'name' => 'Peter',
        'gender' => 'm',
        'house_number' => 23,
        'phone' => '0611111111',
        'city' => 'Amsterdam',
        'bsn' => '87654321',
        'iban' => 'NL66INGB0001234567',
        'postcode' => '1000AA',
        'street' => 'Snelweg',
    ],
    [
        'name' => 'Jan',
        'gender' => 'm',
        'street' => 'Dorpstraat',
        'city' => 'Amsterdam',
        'bsn' => '12345678',
        'house_number' => 12,
        'phone' => '06123456789',
        'postcode' => '1234AB',
        'iban' => 'NL12INGB5824837459',
    ],
    [
        'street' => 'Kerkweg',
        'phone' => '06234567890',
        'city' => 'Lutjebroek',
        'bsn' => '2345678',
        'house_number' => 1,
        'gender' => 'm',
        'postcode' => '4321AZ',
        'name' => 'Klaas',
        'age' => 20,
    ],
    [
        'name' => 'Anne',
        'postcode' => '2345BC',
        'house_number' => 54,
        'phone' => '06987654321',
        'street' => 'Gulden Middenweg',
        'iban' => 'NL34RABO3463296192',
        'job' => 'Juf',
        'gender' => 'v',
        'city' => 'Den Haag',
    ],
];

echo '<pre>';
foreach ($people as $person) {
    foreach ($sortKeys as $key) {
        $array[] = [$key => $person[$key]];
        if(isset($person[$key]))
        {
            unset($person[$key]);
        }
    }
    $result = call_user_func_array('array_merge', $array);
    ksort($person);
    $extra = array_merge($result, $person);
    print_r(json_encode($extra,true));
}