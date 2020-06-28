<php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
    function twoSum($nums, $target) {
       $arr = [];
       $c = count($nums);
      
       for ($i = 0; $i < $c; $i++) {
         $tmp = $target-$nums[$i];
         if(isset($arr[$tmp])){
            return [$arr[$tmp],$i];
         }else{
            $arr[$nums[$i]] = $i;
         }
       } 
    }
}
?>