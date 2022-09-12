<?php
$string1 ="aabbckkkml";
$string2 = "aaaabsdfbhckkhfdkml";

$jumlah1 =strlen($string1);
$jumlah2 =strlen($string2);

for($i = 0;$i<$jumlah1;$i++){
    $sub = substr($string1,$i,1);
    $max = $i+1;

    $sub_max = substr($string1,$max,1);
    if($sub == $sub_max){
        $num = 2;
        $max2 = $i+2;
        $sub_max2 = (substr($string1,$max2,1));
        $i = $i+1;
        if($sub_max == $sub_max2){
            $num = 3;
            $i = $i+1;
            echo $sub.$num;
        }else{
            echo $sub.$num;
        }
    }else{
        echo $sub;
    }
}
echo '<br>';
for($i = 0;$i<$jumlah2;$i++){
    $sub = substr($string2,$i,1);
    $max = $i+1;

    $sub_max = substr($string2,$max,1);
    if($sub == $sub_max){
        $num = 2;
        $max2 = $i+2;
        $sub_max2 = (substr($string2,$max2,1));
        $i = $i+1;
        if($sub_max == $sub_max2){
            $num = 3;
            $i = $i+1;
            $max3 = $max2 + 1;
            $sub_max3 = (substr($string2,$max3,1));
            if($sub_max2 == $sub_max3){
                $num = 4;
                $i = $i+1;
                echo $sub.$num;
            }else{
              echo $sub.$num;
            }

        }else{
            echo $sub.$num;
        }
    }else{
        echo $sub;
    }
}



?>