<?php
    class Coin
    {

        function Quarters($cents)
        {
            $quarters = floor($cents/25);
            return $quarters;
        }

        function Dimes($cents)
        {
            $cents -= (25 * $this->Quarters($cents));
            $dimes = floor($cents/10);
            return $dimes;
        }

        function Nickels($cents)
        {
            $cents -= (25 * $this->Quarters($cents));
            $cents -= (10 * $this->Dimes($cents));
            $nickels = floor($cents/5);
            return $nickels;
        }

        function Pennies($cents)
        {
            $cents -= (25 * $this->Quarters($cents));
            $cents -= (10 * $this->Dimes($cents));
            $cents -= (5 * $this->Nickels($cents));
            return $cents;
        }

        function Change($cents)
        {
            $quarters = $this->Quarters($cents);
            $dimes = $this->Dimes($cents);
            $nickels = $this->Nickels($cents);
            $pennies = $this->Pennies($cents);
            $change = array($quarters, $dimes, $nickels, $pennies);
            return $change;
        }
    }
?>
