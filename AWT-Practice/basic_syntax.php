<?php
        //#############################
        $global_var = 10;
        function add($a, $b = 0, $c = 1)
        {
            $result = $a + $b + $c;
            global $global_var;
            echo $global_var."&nbsp; &nbsp &nbsp";
            // echo"<br/>";
            return $result;
        }
        //#############################

        //*****************************
        function addMultipleNumbers(...$numbers)
        {
            $sum = 0;
            foreach ($numbers as $n)
            {
                $sum += $n;
            }
            return $sum;
        }
        //*****************************

        //#############################
        function passValue($str2)
        {
            $str2 .= "Call By Value<br>";
            echo $str2;
        }
        //#############################

        //*****************************
        function passReference(&$str2)
        {
            $str2 .= "Call By Reference<br>";
            echo $str2;
        }
        //*****************************

        //#############################
        function indexArray()
        {
            $cars = array('Volvo', 'BMW', 'Toyota');
            echo count($cars).'<br>';

            $cars[3] = 'Mercedes'; 
            echo count($cars).'<br>';
            foreach($cars as $n)
            {
                echo $n."<br>";
            }

            $fruits = array();
            $fruits[0] = "Mango";
            $fruits[1] = "Banana";
            $fruits[2] = "Apple";
            $fruits[3] = "Orange";
            $fruits[4] = "Blueberry";
            echo count($fruits)."<br>";

            $flowers = []; //same as $flowers = array()
            $flowers[0] = "Rose";
            $flowers[1] = "Lily";
            echo count($flowers)."<br>";
        }
        //#############################

        //*****************************
        function showAssociativeArray()
        {
            $age = array("Peter"=>"35", "Ben"=>3);

            echo "age of Peter ".$age["Peter"]."<br>";
            echo gettype($age["Peter"])."<br>";

            echo "Added integer value '5' with index 'Peter'<br>";
            $age["Peter"] += 5;
            echo "age of Peter ".$age["Peter"]."<br>";
            echo gettype($age["Peter"])."<br>";

            echo "age of Ben ".$age["Ben"]."<br>";
            echo gettype($age["Ben"])."<br>";

            echo "Added integer value '5' with index 'Ben'<br>";
            $age["Ben"] += 5;
            echo "age of Ben ".$age["Ben"]."<br>";
            echo gettype($age["Ben"])."<br>";

            echo "Added string value '77' with index 'Ben'<br>";
            $age["Ben"] += "77";
            echo "age of Ben ".$age["Ben"]."<br>";
            echo gettype($age["Ben"])."<br>";

            echo "Added New Index 'Joe'<br>";
            $age["Joe"] = "53";
            echo "age of Joe ".$age["Joe"]."<br>";
            echo gettype($age["Joe"])."<br>";

            echo "Foreach Starts<br>";
            foreach($age as $n)
            {
                echo $n."<br>";
                echo gettype($n)."<br>";
            }
            echo "Foreach Ends<br>";
        }
        //*****************************

        function showMultidimensionalArray()
        {
            $colors = array
                (
                    array("Red", 2, 3),
                    array("Green", 4,5 ),
                    array("Blue", 6, 7),
                    array("Yellow", 8, 9)
                );
                
                echo $colors[3][0]."<br>";
        }


        $str = "Hello ";
        echo add(5,6)."      &nbsp";
        echo addMultipleNumbers(1,2,3,4,5)."<br>";
        passValue($str);
        echo $str."<br>";
        passReference($str);
        echo $str;
        indexArray();
        showAssociativeArray();
        showMultidimensionalArray();

?>