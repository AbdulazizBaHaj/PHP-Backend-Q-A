<!-- Decimal to Binary Conversion -->


<!-- 
    Question: Implement a PHP function that converts a given decimal number into its
    binary representation using bitwise operators. Explain the bitwise operations used in your
    code.
-->

<!-- Ans:
    This below function changes a decimal number to binary by performing bitwise operations. 
    It is using the '&' operator to determine whether the least significant bit is 1 or 0, 
    and the '>>' operator to shift the value to the right (divide by 2) for the next bit.
-->

<?php
    function decimalToBinary($decimal) {
        $binary = '';
        while ($decimal > 0) {
            $binary = ($decimal & 1) . $binary;
            $decimal >>= 1;
        }
        return $binary;
    }
?>