<!DOCTYPE html>
<html lang="en">
<body>
    <h4>Current Date and Time Information</h4>
    <?php
        // Set the default time zone to Bangladesh
        date_default_timezone_set('Asia/Dhaka');

        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l") . "<br>";

        // Displaying time in 24-hour and 12-hour formats with minutes and seconds
        echo "Current time (24-hour format): " . date("H:i:s") . "<br>";
        echo "Current time (12-hour format): " . date("h:i:s a") . "<br>";

        // Displaying the current time zone
        echo "Current time zone: " . date_default_timezone_get() . "<br>";
    ?>
</body>
</html>

