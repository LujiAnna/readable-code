<?php

// fw = for who
function order($pizza, $client)
{
    $type = $pizza;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizza;
    $price = orderPrice($type);

    $address = 'unknown';
    if ($client == 'koen') {
        $address = 'Yatch, Antwerp';
    } elseif ($client == 'manuele') {
        $address = 'Somewhere, Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode, Office';
    }

    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';

    echo "Order finished.<br><br>";
}

function totalPrice($p)
{
    return $p;
}

function test($pizza_type)
{
    echo "Test: type is {$pizza_type}. <br>";
}

function orderPrice($pizza_type)
{
    $cst = 'unknown';

    if ($pizza_type == 'marguerita') {
        $cst = 5;
    } else {
        if ($pizza_type == 'golden') {
            $cst = 100;
        }

        if ($pizza_type == 'calzone') {
            $cst = 10;
        }

        if ($pizza_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $cst;
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
    } else {
        // Should not do anything when false
    }
}

// Entry point
createOrder(true);
