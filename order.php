<?php

function order($pizza, $client)
{
    $type = $pizza;

    $price = orderPrice($type);

    $address = clientAddress($client);

    echo 'Creating new order... <br>';
    $toPrint =   "A $pizza pizza should be sent to $client ." . " <br>The address: {$address}.";
    echo $toPrint . '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo 'Order finished.<br><br>';
}


function clientAddress($client)
{
    switch ($client) {
        case 'koeni';
            return $address = 'Yatch, Antwerp';
        case 'manuele';
            return $address = 'Somewhere, Belgium';
        case 'students';
            return $address = 'BeCode, Office';
    }
    return $address = 'unknown';
}

// function test($pizza_type)
// {
//     echo "Test: type is {$pizza_type}. <br>";
// }

function orderPrice($pizza_type)
{
    $cost = '';



    if ($pizza_type == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizza_type == 'golden') {
            $cost = 100;
        }
        if ($pizza_type == 'calzone') {
            $cost = 10;
        }
        if ($pizza_type == 'hawai') {
            throw new Exception('Item does not exist');
        }
    }
    return $cost;
}

function orderAll()
{
    // $test = 0;
    order('calzone', 'koen');
    order('marguerita', 'manuele');
    order('golden', 'students');
}

orderAll();
