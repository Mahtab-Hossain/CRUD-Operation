<?php

function input_element($icon, $placeholder, $name, $value){
    $element = "
        
        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text bg-info\">$icon</div>
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                    </div>
    
    ";
    echo $element;
}
function button($button_id,$button_name,$btn_attribute,$text,$btn_style){
    $button = "
    <button id='$button_id' name='$button_name''$btn_attribute'
    class = '$btn_style'
    >$text</button>
    ";
    echo $button;
}

?>