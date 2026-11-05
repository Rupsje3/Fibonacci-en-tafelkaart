<?php
function tafelkaart($n) {
    echo "<table border='1' cellpadding='6'>";

    // Kopregel
    echo "<tr><th>Tafel van</th>";
    for ($kolom = 1; $kolom <= $n; $kolom++) {
        echo "<th>$kolom</th>";
    }
    echo "</tr>";

    // Buitenste for-loop: de rijen
    for ($rij = 1; $rij <= $n; $rij++) {
        echo "<tr>";
        echo "<th>$rij</th>";

        // Binnenste for-loop: de kolommen
        for ($kolom = 1; $kolom <= $n; $kolom++) {
            echo "<td>" . ($rij * $kolom) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Tafelkaart</title>
</head>
<body>
    <form method="post">
        <label>Voer een getal in:
            <input type="number" name="n" min="1" required>
        </label>
        <button type="submit">Toon tafelkaart</button>
    </form>

    <?php
    if (isset($_POST["n"])) {
        $n = (int) $_POST["n"];
        tafelkaart($n);
    }
    ?>
</body>
</html>