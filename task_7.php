<!-- Palindrome Check -->


<!-- 
    Question: Implement a PHP function that checks if a given string is a palindrome (reads
    the same forwards and backwards) while ignoring spaces, punctuation, and capitalization.
-->

<!-- Ans:
    The function determines whether a string reads the same both ways. 
    It starts by removing all punctuation and spaces, then lowercases every letter. 
    It then determines whether the cleaned string and its reverse are identical by comparing them.
-->

<?php
    function isPalindrome($string) {
        $cleaned = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));
        return $cleaned == strrev($cleaned);
    }
?>