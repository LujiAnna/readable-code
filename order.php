<?php

// fw = for who
function order($pizzatype, $fw)
{

    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $p = orderPrice($type);

    $address = 'unknown';
    if ($fw == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($fw == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($fw == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $fw . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $p . '.<br>';




    echo "Order finished.<br><br>";
}

function totalPrice($p)
{
    return $p;
}

function test($p_type)
{
    echo "Test: type is {$p_type}. <br>";
}

function orderPrice($p_type)
{
    $cst = 'unknown';

    if ($p_type == 'marguerita') {
        $cst = 5;
    } else {
        if ($p_type == 'golden') {
            $cst = 100;
        }

        if ($p_type == 'calzone') {
            $cst = 10;
        }

        if ($p_type == 'hawai') {
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

function createOrder($do_it)
{
    if ($do_it) {
        orderAll();
    } else {
        // Should not do anything when false
    }
}

// Entry point
// Change make_Allhappy(true) to createOrder(true). 
createOrder(true);
