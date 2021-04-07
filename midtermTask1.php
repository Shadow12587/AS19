<?php
    $arr = array(
      "first"     => "text",
      "last"      => "text",
      "phone"     => "tel",
      "email"     => "email",
      "password"  => "password"
    );

    echo "<form action='#' method='post'>";

    foreach ($arr as $key => $value) {
        echo "<label for='". $key . "'>" . $key . "</label><br>";
        echo " <input type='" . $value. "' name='" .$key . "'><br>";
    }

    echo "<input type='submit' value='Submit'>";

    echo " </form>";

?>
