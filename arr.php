<?php
$num = [];

for ($i = 0; $i < 50; $i++) {
    $num[] = mt_rand(1, 100);
}

echo implode(", ", $num);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números</title>
</head>
<body>

    <form method="POST" action="">
        <input type="hidden" name="numeros_ocultos" value="<?php echo implode(",", $num); ?>">
        <button type="submit" name="mostrar_maximos">Mostrar los 3 números más grandes</button>
    </form>

    <?php
    if (isset($_POST['mostrar_maximos'])) {
        $copia_num = $num;
        rsort($copia_num);
        
        $tres_grandes = array_slice($copia_num, 0, 3);
        echo "<h3>Los 3 números más grandes son:</h3>";
        echo "<p><strong>" . implode(", ", $tres_grandes) . "</strong></p>";
    }
    ?>

</body>
</html>