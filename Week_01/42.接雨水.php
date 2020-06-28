<?php
/*
 * @lc app=leetcode.cn id=42 lang=php
 *
 * [42] 接雨水
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $res = 0;
        $stack = new SplStack();
        $len_h = count($height);
        for ($i = 0; $i < $len_h; $i++) {
            while (!$stack->isEmpty() && $height[$stack->top()] < $height[$i]) {
                $h = $height[$stack->pop()];
                //todo
                if ($stack->isEmpty()) {
                    break;
                }
                $l = $stack->top();
                $minH = min($height[$l], $height[$i]);
                $dist = $i - $l - 1;
                $res += $dist * ($minH - $h);
            }
            $stack->push($i);
        }
        return $res;
    }
}
// @lc code=end

