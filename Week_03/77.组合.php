<<?php
/*
 * @lc app=leetcode.cn id=77 lang=php
 *
 * [77] 组合
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    public $res = [];
    function combine($n, $k) {
      $this->do([], $n, $k, 1);
      return $this->res;
    }
  
    function do($array, $n, $k, $start) {
      if ($k == 0) {
        array_push($this->res, $array);
        return;
      }
      for ($i = $start; $i <= $n; $i++) {//注意加等于,包括n
        array_push($array, $i);
        $this->do($array, $n, $k - 1, $i + 1);//可以再选$k-1个
        array_pop($array);
      }
    }
}
// @lc code=end

