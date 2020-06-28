<?php
/*
 * @lc app=leetcode.cn id=283 lang=php
 *
 * [283] 移动零
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $c = count($nums);
        $j = 0;
        for ($i = 0; $i<$c; $i++) {
            if ($nums[$i] != 0) {
                $nums[$j] = $nums[$i];
                $j++;               
            }
        }
       
        for ($k = $j; $k<$c; $k++) {
            $nums[$k] = 0;
        }
    }
}
// @lc code=end

