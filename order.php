<?php

function order($pizza, $client)
{
    $type = $pizza;

    $price = orderPrice($type);

    $address = clientAddress($client);

    echo 'Creating new order... <br>';
    echo "A $pizza pizza should be sent to $client ." . " <br>The address: {$address}.";
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo 'Order finished.<br><br>';
}


function clientAddress($client)
{
    switch ($client) {
        case 'koen';
            return $address = 'Yatch, Antwerp';
        case 'manuele';
            return $address = 'Somewhere, Belgium';
        case 'students';
            return $address = 'BeCode, Office';
    }
    return $address = 'unknown';
}

function orderPrice($pizza_type)
{
    $cost = '';

    switch ($pizza_type) {
        case 'marguerita';
            return $cost = 5;
        case 'golden';
            return $cost = 100;
        case 'calzone';
            return $cost = 10;
        case 'hawai';
            throw new Exception('Item does not exist');
    }

    throw new Exception('Unknown pizza type');
}

function orderAll()
{
    // $test = 0;
    order('calzone', 'koen');
    order('marguerita', 'manuele');
    order('golden', 'students');
}

orderAll();
