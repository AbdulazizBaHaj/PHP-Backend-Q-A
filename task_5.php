<!-- Fibonacci Sequence (Laravel Way) -->


<!-- 
    Question: Create a PHP function (Laravel way) that generates a Fibonacci sequence of a
    specified length. Explain whether you would use recursion or iteration for this task, and
    provide your implementation.
-->

<!-- Ans:
    The function below uses iteration to create a Fibonacci sequence up to a certain length. 
    The next number in the sequence can be obtained by adding the first two numbers in the sequence, 
    which are 0 and 1. For long sequences, this is more effective than using recursion.
-->

<?php
    // Function to generate a Fibonacci sequence of a specified length
    function fibonacci($length)
    {
        // Initialize the sequence with the first two numbers
        $sequence = [0, 1];

        // Loop to generate the rest of the sequence
        for ($i = 2; $i < $length; $i++) {
            // Add the sum of the last two numbers to the sequence
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        // Return the Fibonacci sequence
        return $sequence;
    }
?>