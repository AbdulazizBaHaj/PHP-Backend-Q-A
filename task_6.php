<!-- Find Prime Numbers in a Range -->


<!-- 
    Question: Create a PHP function that finds all prime numbers in a given range and
    displays them.
-->

<!-- Ans:
    First, the function determines whether a given integer is prime by determining whether 
    it can be divided by any number up to its square root. 
    Then, it finds every prime integer in the given range by using this helper function.
-->

<?php 
    // Helper function to check if a number is prime
    function isPrime($num) {
        // Return false for numbers less than 2
        if ($num < 2) return false;
        
        // Loop to check for factors up to the square root of the number
        for ($i = 2; $i <= sqrt($num); $i++) {
            // If the number is divisible by any number other than 1 and itself, it's not prime
            if ($num % $i == 0) return false;
        }
        
        // If no factors were found, the number is prime
        return true;
    }

    // Function to find all prime numbers in a given range
    function findPrimesInRange($start, $end) {
        // Initialize an empty array to store prime numbers
        $primes = [];
        
        // Loop through each number in the range
        for ($i = $start; $i <= $end; $i++) {
            // Add the number to the primes array if it is prime
            if (isPrime($i)) $primes[] = $i;
        }
        
        // Return the array of prime numbers
        return $primes;
    }
?>