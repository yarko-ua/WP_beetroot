<?php $arr = [1, 5, 3, 2, 7, 9, 8, 10, 0, 4];
        // desc - по збільшенню
        function sort_desc ($array) {
            $sorted = $array;
            foreach ($sorted as $key => $value) {
                echo $value.'; ';
            }
            for ($i = 0; $i < count($sorted); $i++) {
                for ($j = 0; $j < count($sorted); $j++) {
                    if ($sorted[$i] > $sorted[$j]) {
                        $temp = $sorted[$i];
                        $sorted[$i] = $sorted[$j];
                        $sorted[$j] = $temp;                  
                    }      
                }
            }
            echo "<br/>";
            foreach ($sorted as $key => $value) {
                echo $value.'; ';
            }
        }

    sort_desc($arr);
?>