<?php 

class MCD{

    public function getMcd(int $num_1 ,int  $num_2){ 
 
        $result = $num_1 / $num_2;
        $residuo = $num_1 % $num_2;
        $array[] = $residuo;
        $value = 0;
    
        while($residuo != 0 ){
            $residuo_2 = $num_2 % $residuo;
            $array[] = $residuo_2;
            $num_2 = $residuo; 
            $residuo = $residuo_2;
        
        }

        return $array;

    }

    public function orderMax($num_1 , $num_2){

        $array = $this->getMcd($num_1 , $num_2);

        $long = count($array);

        for($i = 0 ; $i < $long - 1 ; $i++){
            for($j = 0 ; $j < $long - 1 ; $j++){
                if($array[$j] < $array[$j + 1] ){
                    $var = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $var = $array[$j+1];
                }
            }
        }

        return "El máximo comun divisor es: ".$array[0];

    }
}
$mcd = new MCD;
echo $mcd->orderMax(156,120);