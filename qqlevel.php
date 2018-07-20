<?php

/**
 * @param $input
 * @param $start
 * @param $end
 * @return bool|string
 */
function get_between($input, $start, $end)
{
    $substr = substr($input, strlen($start) + strpos($input, $start),

        (strlen($input) - strpos($input, $end)) * (-1));

    return $substr;

}

/**
 * @param $url1 访问地址
 * @param $cookie 携带Cookie 可空
 * @return mixed
 */
function king_geturl($url1, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url1);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$result['code'] = 0;
$result['qq'] = 'null';
$result['nday'] = 'null';
$result['svip'] = 'null';  // 0=无会员 1=会员 2=超级会员
$result['year'] = 'null';  // 是否年费
//$result['speed'] = 'null';

$qq = $_GET['qq'];
$skey = king_geturl("http://www.dkingmz.com/api.php?my=getskey", "");

if ($qq != null) {
    $result['qq'] = $qq;
    $result['code'] = "";
    $test = king_geturl("https://vip.qq.com/pk/index?param=" . $qq, "uin=o1393189254; skey=" . $skey);

    $GUEST_INFO = get_between($test, "var GUEST_INFO =", "var HOST_LEVEL_INFO =");
    $GUEST_LEVEL_INFO = get_between($test, "GUEST_LEVEL", "script");
    $result['nday'] = get_between($GUEST_LEVEL_INFO, "iTotalActiveDay\":\"", "\",\"iTotalDays");
    $issVip = get_between($GUEST_INFO, "is_superclub\":", ",\"is_year_club");
    if ($issVip == "1") {
        $result['svip'] = "2";
    } else {
        $isVip = get_between($GUEST_INFO, "is_club\":", ",\"club_end_timestamp");
        if ($isVip == "1") {
            $result['svip'] = "1";
        } else {
            $result['svip'] = "0";
        }
    }
    $result['year'] = get_between($GUEST_INFO, "is_year_club\":", ",\",\"is_club");
    $result['code'] = 1;
    //圈1速度
    //$speed1 = get_between($GUEST_INFO,"qq_speed\":\"","\",\"speed_today");
    //圈2速度
    //$speed2 = 0;

    exit($GUEST_INFO." <br> ".$GUEST_LEVEL_INFO . "<br>" );
} else {
    $result['qq'] = "1776885812";
}


exit (json_encode($result));


?>