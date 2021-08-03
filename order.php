<?php

function order($pizza, $client)
{
    $type = $pizza;
    echo 'Creating new order... <br>';

    $price = orderPrice($type);

    $address = 'unknown';
    if ($client == 'koen') {
        $address = 'Yatch, Antwerp';
    } elseif ($client == 'manuele') {
        $address = 'Somewhere, Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode, Office';
    }

    $toPrint = 'A ';
    $toPrint .= $pizza;
    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';

    echo 'Order finished.<br><br>';
}

function test($pizza_type)
{
    echo "Test: type is {$pizza_type}. <br>";
}

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
    $test = 0;
    order('calzone', 'koen');
    order('marguerita', 'manuele');
    order('golden', 'students');
}

function createOrder($orders)
{
    if ($orders) {
        orderAll();
    }
}

// Entry point
createOrder(true);
