<?php
/*
 * @lc app=leetcode.cn id=66 lang=php
 *
 * [66] 加一
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $c = count($digits);
        for ($i=$c-1; $i>=0; $i--) {
            if ($digits[$i] == 9) {
                $digits[$i] = 0;
                if($i == 0){
                    return array_merge([1],$digits);
                }
            }else{
              $digits[$i] += 1;

              return $digits; 
            }
        }
    }
}
// @lc code=end

