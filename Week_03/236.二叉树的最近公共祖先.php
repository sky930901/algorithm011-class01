<?php
/*
 * @lc app=leetcode.cn id=236 lang=php
 *
 * [236] 二叉树的最近公共祖先
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        if ($root == null) return null;
        if ($root->val == $p->val || $root->val == $q->val) return $root;
        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);
        if ($left !== null && $right !== null) return $root;
        if ($left === null) return $right;
        if ($right === null) return $left;
        return null;

    }
}
// @lc code=end

