<!-- Find Max and Min in Array -->


<!-- 
    Question: You are given an array of integers. Write a PHP function that finds the
    maximum and minimum values in the array. Explain the time complexity of your
    solution.
-->

<!-- Ans:
    The function iterates through the array once. 
    It tracks maximum and minimum values by comparing each member in the array to the current maximum and minimum values. 
    When it comes across a higher or lower number, it adjusts the maximum and minimum values.
-->

<?php
    function findMaxMin($array) {
        $max = $array[0];
        $min = $array[0];
        foreach ($array as $value) {
            if ($value > $max) $max = $value;
            if ($value < $min) $min = $value;
        }
        return ["max" => $max, "min" => $min];
    }
?>

<!-- 
    Time Complexity: O(n) means that it passes over the array once, so the time it takes grows linearly with the size of the array.
-->