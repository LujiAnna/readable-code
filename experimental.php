<?php

// fw = for who
function ordr_pz($pizzatype, $fw) {

$type = $pizzatype;
echo 'Creating new order... <br>';
$toPrint = 'A ';
 $toPrint .= $pizzatype;
$p = calc_cts($type);

    $address = 'unknown';
    if($fw == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($fw == 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($fw == 'students') {
        $address = 'BeCode office';
    }

        $toPrint .=   ' pizza should be sent to ' . $fw . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$p.'.<br>';




    echo "Order finished.<br><br>";
}

    function total_price($p) {
            return $p;
    }

        function test($p_type) {
            echo "Test: type is {$p_type}. <br>";
        }

function calc_cts($p_type)
{
    $cst = 'unknown';

    if ($p_type == 'marguerita') {
        $cst = 5;
    }
    else
        {
        if ($p_type == 'golden')
        {
            $cst = 100;
        }

            if ($p_type == 'calzone')
            {
                $cst = 10;
            }

        if ($p_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cst;
}

            function ordr_piz_all()
            {
            $test= 0;
            ordr_pz('calzone', 'koen');
            ordr_pz('marguerita', 'manuele');

            ordr_pz('golden', 'students');
            }

function make_Allhappy($do_it) {
if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);