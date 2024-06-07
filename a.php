<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $birthDate = $_POST["birthday"];
            $age = calculateAge($birthDate);
            if ($age) {
                echo "<p>Your age is $age years old.</p>";
            } else {
                echo "<p>Invalid birth date.</p>";
            }
        }

        function calculateAge($birthDate) {
            $birthDate = new DateTime($birthDate);
            $today = new DateTime();
            $diff = $today->diff($birthDate);
            return $diff->y;
        }
        ?>