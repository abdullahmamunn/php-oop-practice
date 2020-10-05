<?php


class PhpStringManipulation
{
    public function stringManipulation($data)
    {
        if(isset($_POST['btn']))
        {
           $take_string = $_POST['given_string'] ;
           $string_length = strlen($take_string);
           $string_word_count = str_word_count($take_string);
           $str_crypt = crypt('given_string','$1$rasmusle$');
           $string_to_array = explode(" ",$take_string);
           $data = [
               'given_string'=>$take_string,
               'len' => $string_length,
               'total_word' => $string_word_count,
               'string_crypt'=>$str_crypt,
               'get_index' =>$string_to_array
           ];
           return $data;
        }
    }
}