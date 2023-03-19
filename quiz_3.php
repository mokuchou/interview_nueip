<?php
$array_nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

echo '陣列資料[' . join(', ', $array_nums) . ']';
// 陣列資料[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
echo "<br>";
echo "奇數值總和：".mathFun($array_nums)[0]."，偶數值總和：".mathFun($array_nums)[1]."。";
// 奇數值總和：25，偶數值總和：20。
echo "<br>";
echo "偶數值：[" . join(', ', mathFun($array_nums)[3]) . "]。";
// 偶數值：[0, 2, 4, 6, 8]。
echo "<br>";
echo "奇數值：[" . join(', ', mathFun($array_nums)[2]) . "]。";
// 奇數值：[1, 3, 5, 7, 9]。

/**
 * @param Integer[] $array
 * @return Array[Int,Int,Array,Array]
 */
function mathFun($array)
{
    $odd = [];
    $odd_sum = 0;
    $even = [];
    $even_sum = 0;

    foreach ($array as $key => $value) {
        if ($value % 2 == 0) {
            $even[] = $value;
            $even_sum += $value;
        } else {
            $odd[] = $value;
            $odd_sum += $value;
        }
    }

    $math = [
        $odd_sum,
        $even_sum,
        $odd,
        $even,
    ];

    return $math;
}
?>
