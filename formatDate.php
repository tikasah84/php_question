
<?php 
class MonthsOfYear {
  const Jan= "01";
  const Feb = "02";
  const Mar = "03";
    const Apr = "04";
    const May = "05";
    const Jun = "06";
    const Jul = "07";
    const Aug = "08";
    const Sep = "09";
    const Oct = "10";
    const Nov = "11";
    const Dec = "12";
    
 
}



enum Month
{
    case _01;
    case _02;
    case _03;
    case _04;
    case _05;
    case _06;
    case _07;
    case _08;
    case _09;
    case _10;
    case _11;
    case _12;


    public function getIt(): string
    {
        return match ($this) {
            Month::_01 => 'Jan',
            Month::_02 => 'Feb',
            Month::_03 => 'Mar',
            Month::_04 => 'Apr',
            Month::_05 => 'May',
            Month::_06 => 'Jun',
            Month::_07 => 'Jul',
            Month::_08 => 'Aug',
            Month::_09 => 'Sep',
            Month::_10 => 'Oct',
            Month::_11 => 'Nov',
            Month::_12 => 'Dec',
        };
    }
}


function custom_date($format){
    $words = explode(" ",$format);
    // echo MonthsOfYear::Jan;
    $word = count($words);
    if ($word ==3){
        try{
        $format = explode(" ", $format);
        $month = MonthsOfYear::$format[0];
        echo $format[2].'-'.$month.'-'.$format[1];
        }catch(Exception $e){
            echo "Invalid format";
        }
    }else if($word == 1){
        try{
        $month = substr($format, 0, 2);
        $day = substr($format, 2, 2);
        $year = substr($format, 4, 4);
        $format = constant("Month::_$month")->getIt()."-".$day."-".$year;
        echo $format;
        }catch(Exception $e){
            echo "Invalid format";
        }

    }
    else{
        echo "Invalid format";
    }

}

$str = readline('Enter a string: ');
custom_date($str);
?>



