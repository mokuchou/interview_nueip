<?php
$array_nums = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];

echo "正序排列 = [" . join(",", ascFun($array_nums)) . "]";
// 正序排列 = [0,1,4,5,5,9,13,22,55,77,97,796]
echo '<br>';
echo "反序排列 = [" . join(",", descFun($array_nums)) . "]";
// 反序排列 = [796,97,77,55,22,13,9,5,5,4,1,0]

// 正序
/**
 * @param Integer[] $array
 * @return Integer[]
 */
function ascFun($array)
{
    $ans[] = ($array[0] > $array[1]) ? $array[1] : $array[0];
    $ans[] = ($array[0] > $array[1]) ? $array[0] : $array[1];
    for ($i = 2; $i < count($array); $i++) {
        foreach ($ans as $key => $value) {
            if ($array[$i] <= $value) {
                for ($j = count($ans) - 1; $j >= $key; $j--) {
                    $ans[$j + 1] = $ans[$j];
                }
                $ans[$key] = $array[$i];
            }
            if ($array[$i] > $value && $key == count($ans) - 1) {
                $ans[$key + 1] = $array[$i];
            }
            if (count($ans) - 1 == $i) {
                break;
            }
        }
    }

    return $ans;
}

// 反序
/**
 * @param Integer[] $array
 * @return Integer[]
 */
function descFun($array)
{
    $ans[] = ($array[0] < $array[1]) ? $array[1] : $array[0];
    $ans[] = ($array[0] < $array[1]) ? $array[0] : $array[1];
    for ($i = 2; $i < count($array); $i++) {
        foreach ($ans as $key => $value) {
            if ($array[$i] >= $value) {
                for ($j = count($ans) - 1; $j >= $key; $j--) {
                    $ans[$j + 1] = $ans[$j];
                }
                $ans[$key] = $array[$i];
            }
            if ($array[$i] < $value && $key == count($ans) - 1) {
                $ans[$key + 1] = $array[$i];
            }
            if (count($ans) - 1 == $i) {
                break;
            }
        }
    }

    return $ans;
}
