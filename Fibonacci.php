<?php
function fibonacci($n) {
    $a = 1;
    $b = 2;
    $reeks = [];

    for ($i = 0; $i < $n; $i++) {
        $reeks[] = $a;
        $volgende = $a + $b;
        $a = $b;
        $b = $volgende;
    }

    echo implode(", ", $reeks);
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci</title>
</head>
<body>
    <form method="post">
        <label>Voer een getal in:
            <input type="number" name="n" min="1" required>
        </label>
        <button type="submit">Toon reeks</button>
    </form>

    <?php
    if (isset($_POST["n"])) {
        $n = (int) $_POST["n"];
        echo "<p>";
        fibonacci($n);
        echo "</p>";
    }
    ?>
</body>
</html>