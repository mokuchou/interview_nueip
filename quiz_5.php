<?php
$a = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$c = intersectionFun($a, $b);
$d = differenceFun($a, $b);
$e = unionFun($a, $b);

echo 'a = [' . join(',', $a) . ']';
// a = [77,5,5,22,13,55,97,4,796,1,0,9]
echo '<br>';
echo 'b = [' . join(',', $b) . ']';
// b = [0,1,2,3,4,5,6,7,8,9]
echo '<br>';
echo "c = [" . join(",", $c) . "]";
// c = [5,4,1,0,9]
echo '<br>';
echo "d = [" . join(",", $d) . "]";
// d = [77,22,13,55,97,796]
echo '<br>';
echo "e = [" . join(",", $e) . "]";
// e = [77,5,5,22,13,55,97,4,796,1,0,9,2,3,6,7,8]

// 交集intersection	
/**
 * @param Integer[] $a
 * @param Integer[] $b
 * @return Integer[]
 */
function intersectionFun($a, $b)
{
    $c = [];
    foreach ($a as $key => $value) {
        foreach ($b as $k => $v) {
            if ($value == $v && !in_array($value, $c)) {
                $c[] = $v;
            }
        }
    }
    return $c;
}

// 差集difference set
/**
 * @param Integer[] $a
 * @param Integer[] $b
 * @return Integer[]
 */
function differenceFun($a, $b)
{
    $d = [];
    foreach ($a as $key => $value) {
        if (!in_array($value, $b)) {
            $d[] = $value;
        }
    }
    return $d;
}

// 聯集union of
/**
 * @param Integer[] $a
 * @param Integer[] $b
 * @return Integer[]
 */
function unionFun($a, $b)
{
    $e = [];
    foreach ($a as $key => $value) {
        $e[] = $value;
    }
    foreach ($b as $key => $value) {
        if (!in_array($value, $e)) {
            $e[] = $value;
        }
    }
    return $e;
}
