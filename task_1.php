<!-- Abstract Class vs. Interface -->


<!-- 
    Question: What is the main difference between an abstract class and an interface in
    PHP? Provide an example of a scenario where you would prefer to use an abstract class
    over an interface.
-->

<!-- Ans:
    An abstract class can include both abstract methods (without a body) and concrete methods (with a body). 
    An interface can only include abstract methods. 
    abstract class useful when you want related classes to share common behavior (methods) while allowing other methods to be implemented differently.
-->

<?php
    // Abstract class Vehicle with a concrete method and an abstract method
    abstract class Vehicle
    {
        // Concrete method: shared implementation
        public function startEngine()
        {
            echo "Engine started";
        }

        // Abstract method: implementation will be provided by subclasses
        abstract public function getFuelEfficiency();
    }

    // Car class extends Vehicle and provides implementation for getFuelEfficiency
    class Car extends Vehicle
    {
        public function getFuelEfficiency()
        {
            return "15 miles per gallon";
        }
    }

    // Bike class extends Vehicle and provides implementation for getFuelEfficiency
    class Bike extends Vehicle
    {
        public function getFuelEfficiency()
        {
            return "50 miles per gallon";
        }
    }
?>