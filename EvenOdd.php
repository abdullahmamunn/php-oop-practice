<?php


class EvenOdd
{
    public function evenoddCalculation()
    {
        if (isset($_POST['btn']))
        {
            $fist_number = $_POST['first_number'];
            $last_number = $_POST['last_number'];
            $check = $_POST['check'];
            $result='';
            if($fist_number>$last_number)
            {
                $temp = $fist_number;
                $fist_number = $last_number;
                $last_number = $temp;
                for($start = $fist_number;$start<=$last_number;$start++)
                {
                    if($start%2==0 && $check=="even")
                    {
                        $result.=$start." ";
                    }
                    if($start%2!=0 && $check=="odd")
                    {
                        $result.=$start." ";
                    }

                }
            }
            else{
                for($start = $fist_number;$start<=$last_number;$start++)
                {
                    if($start%2==0 && $check=="even")
                    {
                        $result.=$start." ";
                    }
                    if($start%2!=0 && $check=="odd")
                    {
                        $result.=$start." ";
                    }

                }
            }


            return $result;
        }

    }
}