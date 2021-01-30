<?php

use S1K3\Bangla\Date\BanglaDate;

function bangla_date($timestamp, $language = "" , $format = "")
{
    $language = !empty($language) ? $language : config("bangla_date.language");
    $format = !empty($format) ? $format : config("bangla_date.format");
    if ($language === 'bn') {
        return BanglaDate::Instance($timestamp)->get_bangla_date($format);
    }
    return BanglaDate::Instance($timestamp)->get_english_date($format);
}

