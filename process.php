<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['fruits'])) {
        $fruits = $_POST['fruits'];
        
        echo "<h2>You selected the following fruits:</h2><ul>";
        foreach ($fruits as $fruit) {
            echo "<li>" . htmlspecialchars($fruit) . "</li>";
        }
        echo "</ul>";

        // Conditional logic example
        if (in_array("Pineapple", $fruits)) {
            echo "<p>Pineapple is a great choice! It's the king of fruits!</p>";
        } else {
            echo "<p>You didn't choose Pineapple. Try it next time!</p>";
        }
    } else {
        echo "<p>No fruits were selected.</p>";
    }
}
?>