<?php
$str = '人易科技: 上 機 測 驗 - 演算法';

echo "1. ".fullToHalfFun($str);
// 1. 人易科技： 上 機 測 驗 - 演算法
echo '<br>';
echo "2. ".noSpaceFun($str);
// 2. 人易科技：上機測驗 - 演算法
echo '<br>';
echo "3. ".subStrFun($str);
// 3. 上機測驗

/**
 * @param String $str
 * @return String
 */
function fullToHalfFun($str)
{
    $str = str_replace(':', '：', $str);
    return $str;
}

/**
 * @param String $str
 * @return String
 */
function noSpaceFun($str)
{
    $str = fullToHalfFun($str);
    $str = str_replace(' ', '', $str);
    $str = str_replace('-', '&nbsp;-&nbsp;', $str);
    return $str;
}

/**
 * @param String $str
 * @return String
 */
function subStrFun($str)
{
    $str = noSpaceFun($str);
    $start_pos = mb_strpos($str, '：', 0);
    $end_pos = mb_strpos($str, '-', 0);
    $str = mb_substr($str, $start_pos+1, ($end_pos - $start_pos)-1);
    return $str;
}
