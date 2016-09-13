<?php
    require_once __DIR__. "/../src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_Quarters()
        {
            // Assemble
            $test_Quarters = new Coin($cents);
            $cents = 116;

            // Act
            $result = $test_Quarters->Quarters($cents);

            // Assert
            $this->assertEquals(4, $result);
        }

        function test_Dimes()
        {
            // Assemble
            $test_Dimes = new Coin($cents);
            $cents = 116;

            // Act
            $result = $test_Dimes->Dimes($cents);

            // Assert
            $this->assertEquals(1, $result);
        }

        function test_Nickels()
        {
            // Assemble
            $test_Nickels = new Coin($cents);
            $cents = 116;

            // Act
            $result = $test_Nickels->Nickels($cents);

            // Assert
            $this->assertEquals(1, $result);
        }

        function test_Pennies()
        {
            // Assemble
            $test_Pennies = new Coin($cents);
            $cents = 116;

            // Act
            $result = $test_Pennies->Pennies($cents);

            // Assert
            $this->assertEquals(1, $result);
        }

        function test_Change()
        {
            // Assemble
            $test_Change = new Coin($cents);
            $cents = 116;

            // Act
            $result = $test_Change->Change($cents);

            // Assert
            $this->assertEquals([4, 1, 1, 1], $result);
        }
    }



?>
