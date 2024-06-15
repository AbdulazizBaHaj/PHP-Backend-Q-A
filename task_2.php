<!-- Recursive Factorial Function -->


<!-- 
    Question: Write a PHP function that calculates the factorial of a given positive integer
    using a recursive function. Ensure that your code handles edge cases, such as when the
    input is 0.
-->

<!-- Ans:
    The "factorial" function calls itself with a smaller integer until it approaches zero. 
    When it hits zero, it returns one. 
    This is because the factorial of zero is defined as one.
    For other numbers, it multiplies them by the factorial of the previous number.
-->

<?php
    function factorial($n)
    {
        if ($n == 0) return 1;
        return $n * factorial($n - 1);
    }
?>