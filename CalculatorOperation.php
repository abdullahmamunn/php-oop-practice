<?php


class CalculatorOperation
{
    public function Calculation($data){
//        echo "<pre>";
//        print_r($data);
       if(isset($_POST['btn']))
       {
           $btn = $data['btn'];
           switch ($btn){
               case '+':
                   $res = $data['first_number'] + $data['second_number'];
                   break;
               case '-':
                   $res = $data['first_number'] - $data['second_number'];
                   break;
               case 'X':
                   $res = $data['first_number'] * $data['second_number'];
                   break;
               case '/':
                   $res = $data['first_number'] / $data['second_number'];
                   break;
               case '%':
                   $res = $data['first_number'] % $data['second_number'];
                   break;
           }
           return $res;
       }

    }
}