    <?php
        // час в правильному відмінку
        $h = date("H");
        $m = date("i");
        $s = date("s");    
        // години
        if ($h==1 || $h==21) {
                $hour = ' година';
            }
            elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
                $hour = ' години';
            }
            else {
                $hour = ' годин';
            }
        // хвилини
        if ($m >= 5 && $m <= 20) {
            $minute = ' хвилин';
            }
            elseif ($m % 10 == 1) {
                $minute = ' хвилина';
            }
            elseif (($m % 10 >= 2) && ($m % 10 <= 4)) {
                $minute = ' хвилини';
            }
            else {
                $minute = ' хвилин';
            }
        // секунди
        if ($s >= 5 && $s <= 20) {
            $secund = ' секунд';
            }
            elseif ($s % 10 == 1) {
                $secund = ' секунда';
            }
            elseif (($s % 10 >= 2) && ($s % 10 <= 4)) {
                $secund = ' секунди';
            }
            else {
                $secund = ' секунд';
            }

        echo $h . $hour . ' ' . $m . $minute . ' ' . $s . $secund;