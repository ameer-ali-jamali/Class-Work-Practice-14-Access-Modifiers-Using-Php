<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Access Modifiers
    // In the PHP programming language, every property and method of a class can have access modifiers which control their accessibility in the entire program. 

    // There are three access modifiers in PHP:



    // 1 Public
    // 2 Protected
    // 3 Private


    // Below is a table for a better understanding of the access modifiers



    //Class Member Access Specifier   Access from own class	  Accessible from derived class   Accessible by Object

    //  Private	                  Yes	                  No 	                          No
    //  Protected	                  Yes	                  Yes	                          No
    //  Public	                  Yes	                  Yes                          	  Yes


    // Public
    // Public property or method can be accessed by any code whether that code is inside or outside of that class. If a property or method is declared public, then it can be accessed anywhere from the code. 

    // Example:

    class Employe
    {
        public $name;
    }

    $emp1 = new Employee();
    $emp1->name = 'amjad';


    // Protected
    // Protected property or method can only be accessed within the class and by the classes derived from that class.

    // Example:

    class ParentClass
    {
        protected $parentMsg = "protected parent attribute<br>";
        protected function parentDisplay()
        {
            echo "protected parent method<br>";
            echo $this->parentMsg;
        }
    }
    class ChildClass extends ParentClass
    {
        protected $childMsg = "Protected Child attribute.<br>";
        public function childDisplay()
        {
            echo "Public Child method to display protected parent members:<br>";
            $this->parentDisplay();
        }
    }
    $child = new ChildClass();
    $child->childDisplay();

    // Output:

    // Public Child method to display protected parent members:
    // protected parent method
    // protected parent attribute


    // Private
    // The Private property or method can only be accessed within the class. If it is called outside of the class, then it will throw an error. 

    // Example:

    class Employee
    {
        public $salary;

        private function set_salary($n)
        { // a private function
            $this->salary = $n;
        }
    }

    // $emp1 = new Employee();
    // $emp1->set_salary('300'); //It will throw error as It can not Access the Private Function


    ?>
</body>

</html>