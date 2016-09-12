<?php
    class PingPongGenerator
    {
        function generatePingPongArray($number_stop)
        {
            $number_stop2 = intval($number_stop);
            $list_array = array();
            for ($i=0; $i < $number_stop2; $i++) {
                $working_number = $i+1;
                if ($working_number%5===0 && $working_number%3===0) {
                    array_push($list_array, "pingpong");
                } else if ($working_number%5===0) {
                    array_push($list_array, "pong");
                } else if ($working_number%3===0) {
                    array_push($list_array, "ping");
                } else {
                    array_push($list_array, $working_number);
                }

            }
            $result = implode(',',$list_array);
            return $list_array;
        }
    }
 ?>
