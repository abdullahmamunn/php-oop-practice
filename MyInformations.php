<?php


class MyInformations
{
     function fullname($data)
     {
         echo "<pre>";
         print_r($data);

         $fullname = $data['first_name']." ".$data['last_name'];
         return $fullname;

     }
}