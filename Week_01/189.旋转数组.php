<?php
/*
 * @lc app=leetcode.cn id=189 lang=php
 *
 * [189] 旋转数组
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        /*
        $c = count($nums);
        for ($j = 1; $j < $k; $j++) {
            $pre = $nums[$c-1];
            for ($k = 0; $k<$c; $k++) {
                $tmp = $nums[$k];
                $nums[$k] = $pre;
                $pre = $tmp;
            }
        }
        */
        $l = count($nums);
        $k = $k % $l;
        $c = 0;
        for ($start = 0; $c < $l; $start ++) {
            $current = $start;
            $prev = $nums[$start];//1
            do{

                $next = ($current + $k) % $l;
                $temp = $nums[$next];
                $nums[$next] = $prev;
                $prev = $temp;
                $current = $next; 
                $c++;

            }while ($start != $current);
        }
    }
}
// @lc code=end

