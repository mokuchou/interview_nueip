<?php
$nums1 = [2, 7, 11, 15];
$target1 = 9;
$twoSum1 = twoSum($nums1,$target1);
$nums2 = [3, 2, 4];
$target2 = 6;
$twoSum2 = twoSum($nums2,$target2);
$nums3 = [3, 3];
$target3 = 6;
$twoSum3 = twoSum($nums3,$target3);

echo 'nums = [2,7,11,15]，target = 9';
// nums = [2,7,11,15]，target = 9
echo '<br>';
echo "結果:[" . join(",", $twoSum1) . "]";
// 結果:[0,1]
echo '<hr class="w-25">';
echo 'nums = [3,2,4]，target = 6';
// nums = [3,2,4]，target = 6
echo '<br>';
echo "結果:[" . join(",", $twoSum2) . "]";
// 結果:[1,2]
echo '<hr class="w-25">';
echo 'nums = [3,3]，target = 6';
// nums = [3,3]，target = 6
echo '<br>';
echo "結果:[" . join(",", $twoSum3) . "]";
// 結果:[0,1]
echo '<hr class="w-25">';

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target)
{
    $ans = [];
    $copy_nums = $nums;
    $count = 1;
    array_pop($nums);
    foreach ($nums as $key => $value) {
        array_shift($copy_nums);
        foreach ($copy_nums as $k => $v) {
            if ($value+$v==$target) {
                $ans[] = $key;
                $ans[] = $k+$count;
            }
        }
        if (!empty($ans)) {
            break;
        }
        $count++;
    }

    return $ans;
}
