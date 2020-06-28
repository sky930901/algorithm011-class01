/*
 * @lc app=leetcode.cn id=88 lang=php
 *
 * [88] 合并两个有序数组
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        
        $c = count($nums1);
        $cs = $m+$n;
        if($c > $cs){

            $n = [];
            for ($i = 0; $i<$cs; $i++) {
                if($i < $m){
                    $n[$i] = $nums1[$i];
                }else{
                   $n[$i] = $nums2[$i-$m]; 
                }
                
            }
            sort($n);
            for ($j = 0; $j<$cs; $j++) {
                $nums1[$j] = $n[$j];
            }
        }else{
            for ($i= 0; $i<$n; $i++) {

                $nums1[$m+$i] = $nums2[$i];
            }
            sort($nums1);
        }
        
        return $nums1;
    }
}
// @lc code=end

