<!DOCTYPE html>
<html>
    <body>
        <h1>Welcome to PHP</h1>
        <?php
            $name = "Mark";
            $age = "34";
            echo "My name is $name 
            and I am $age years old.";
            for ($i = 0; $i < 10; $i++) {
                echo "<p>$i</p>";
            }
            $numbers= array(3,5,8,9,3);
            foreach($numbers as $number) {
                echo "<p>$number</p>";
            }

            function hello(){
                echo "Hello World!";
            }

            hello();
            ?>
            </body>
            </html>