<?php
/*
I always prefer to make a helper function in Codeigniter for date formatting because date is very common to use on many pages.
Codeigniter 3 helper function:
*/


if(!function_exists('dateFormat'))
{
    function dateFormat($format, $givenDate)
    {
        return date($format, strtotime($givenDate));
    }
}

/*
Autoload this helper in your Codeigniter autoload.php and then use it freely anywhere in controller/model/view.
use in view like:

	<?= dateFormat('d-m-Y',$info->createdDtm) ?>

*/


