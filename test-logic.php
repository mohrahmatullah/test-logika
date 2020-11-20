<?php 
    function isPrime($number)
    {
        // 1 is not prime
        if ( $number == 1 ) {
            return false;
        }
        // 2 is the only even prime number
        if ( $number == 2 ) {
            return true;
        }
        // square root algorithm speeds up testing of bigger prime numbers
        $x = sqrt($number);
        $x = floor($x);
        for ( $i = 2 ; $i <= $x ; ++$i ) {
            if ( $number % $i == 0 ) {
                break;
            }
        }
         
        if( $x == $i-1 ) {
            return true;
        } else {
            return false;
        }
    }
    //fungsi bantu untuk mengubah true menjadi 'IYA' 
    //dan mengubah false menjadi 'BUKAN' 
     
    function cekstatus($status){
        if($status==true) {
            return 'IYA';
        } else { 
            return 'BUKAN';
        }
    }
     
    for ($i=101; $i<=120; $i++){ 
      echo  $i. " Bilangan prima?  " . cekstatus(isPrime($i)) . "<br>";
    }


    echo "<br><br><br><br>";
    for ($i=1; $i<=8; $i++) {
        for($h=1; $h<=$i; $h++){
            echo "$h";
        }
        echo "<br>";
    }

    echo "<br><br><br><br>";
    function bubble_Sort($my_array )
    {
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
            {
                if( $my_array[$i] > $my_array[$i + 1] )
                {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                            array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
    return $my_array;
    }
     $test_array = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
    echo "Original Array :\n";
    echo implode(', ',$test_array );
    echo "\nSorted Array\n:";
    echo implode(', ',bubble_Sort($test_array)). PHP_EOL;

    echo "<br><br><br><br>";
    $MAX_VALUE=0;

    $a=array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
    for($i=0;$i<count($a) ;$i++){
             if($a[$i] > $MAX_VALUE){
                 $MAX_VALUE=$a[$i];
             }
    }
    echo "Bilangan Terbesarnya dari [11, 6, 31, 201, 99, 861, 1, 7, 14, 79] adalah <b>".$MAX_VALUE."</b>";

    
?>