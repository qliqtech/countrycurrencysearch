<?php

namespace App\ImplementationService;

class PracticeSolution
{


    function twoSum($nums,$target){



        for ($x = 0; $x <= count($nums) - 1; $x++) {


            for($i = $x+1; $i <= count($nums) - 1;$i++ ){

                //  echo $x." - ".$i."<br>";

                if($nums[$x] + $nums[$i] == $target){

                    return [$x,$i];
                }

            }

        }





        return null;


    }

}
