<?php
/*
 * @lc app=leetcode.cn id=26 lang=php
 *
 * [26] 删除排序数组中的重复项
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        
        $j = 0;
        for ($i = 1; $i < count($nums); $i++) {
            
            if($nums[$j] != $nums[$i]){
                $j++;
                $nums[$j] = $nums[$i];
            }
        }
        return $j+1;
    }
}
// @lc code=end

