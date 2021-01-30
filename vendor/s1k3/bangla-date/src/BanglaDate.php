<?php


namespace S1K3\Bangla\Date;


class BanglaDate
{
    private $timestamp;
    private $morning;
    private $engHour;
    private $engDate;
    private $engMonth;
    private $engYear;
    private $bangDate;
    private $bangMonth;
    private $bangYear;

    private $bn_months = array("পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র", "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ");
    private $bn_month_dates = array(30, 30, 30, 30, 31, 31, 31, 31, 31, 30, 30, 30);
    private $bn_month_middate = array(13, 12, 14, 13, 14, 14, 15, 15, 15, 15, 14, 14);
    private $lipyearindex = 3;


    private function __construct($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->engDate = date('d', $timestamp);
        $this->engMonth = date('m', $timestamp);
        $this->engYear = date('Y', $timestamp);
        $this->morning = config("bangla_date.hour");
        $this->engHour = date('G', $timestamp);
        $this->calculate_date();
        $this->calculate_year();
        $this->convert();
    }

    public static function Instance($timestamp)
    {
        return new BanglaDate($timestamp);
    }

    private function calculate_date()
    {
        $this->bangDate = $this->engDate - $this->bn_month_middate[$this->engMonth - 1];
        if ($this->engHour < $this->morning)
            $this->bangDate -= 1;

        if (($this->engDate <= $this->bn_month_middate[$this->engMonth - 1]) || ($this->engDate == $this->bn_month_middate[$this->engMonth - 1] + 1 && $this->engHour < $this->morning)) {
            $this->bangDate += $this->bn_month_dates[$this->engMonth - 1];
            if ($this->is_leapyear() && $this->lipyearindex == $this->engMonth)
                $this->bangDate += 1;
            $this->bangMonth = $this->bn_months[$this->engMonth - 1];
        } else {
            $this->bangMonth = $this->bn_months[($this->engMonth) % 12];
        }
    }

    function is_leapyear()
    {
        return ($this->engYear % 400 == 0 || ($this->engYear % 100 != 0 && $this->engYear % 4 == 0));
    }

    function calculate_year()
    {
        $this->bangYear = $this->engYear - 593;
        if (($this->engMonth < 4) || (($this->engMonth == 4) && (($this->engDate < 14) || ($this->engDate == 14 && $this->engHour < $this->morning))))
            $this->bangYear -= 1;
    }

    function bangla_number($int)
    {
        $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');

        $converted = str_replace($engNumber, $bangNumber, $int);
        return $converted;
    }

    function bangla_font_month($name)
    {
        $months = ["Jan" => "জানুয়ারি", "Feb" => "ফেব্রুয়ারি", "Mar" => "মার্চ", "Apr" => "এপ্রিল", "May" => "মে", "Jun" => "জুন", "Jul" => "জুলাই", "Aug" => "আগস্ট", "Sep" => "সেপ্টেম্বর", "Oct" => "অক্টোবর", "Nov" => "নভেম্বর", "Dec" => "ডিসেম্বর"];
        return $months[$name];
    }


    function convert()
    {
        $this->bangDate = $this->bangla_number($this->bangDate);
        $this->bangYear = $this->bangla_number($this->bangYear);
    }

    function get_bangla_date($format)
    {
        $result = str_replace("d", $this->bangDate, $format);
        $result = str_replace("m", $this->bangMonth, $result);
        $result = str_replace("y", $this->bangYear, $result);
        return $result;
    }

    function get_english_date($format)
    {
        $day = $this->bangla_number(date("d", $this->timestamp));
        $month = $this->bangla_font_month(date("M", $this->timestamp));
        $year = $this->bangla_number(date("Y", $this->timestamp));

        $result = str_replace("d", $day, $format);
        $result = str_replace("m", $month, $result);
        $result = str_replace("y", $year, $result);

        return $result;
    }
}