<?php
function astemp_op_produced() {
    $produced_txt = get_option('as_produced_txt');
    
    if (empty($produced_txt)) {
        $produced_txt = "produce by AS-Template";
        echo $produced_txt;
    } else {
        if ($produced_txt == "produced_on") {
            $produced_txt = "<a href='#' target='_blank'>produce by AS-Template222</a>\n";
            echo $produced_txt;
        } else if ($produced_txt == "produced_off") {
            $produced_txt = "";
            echo $produced_txt;
        }
    }
}