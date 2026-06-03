<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "telemetria"
);

if (
    isset($_POST['velocidade']) &&
    isset($_POST['rpm'])
) {

    $velocidade = floatval($_POST['velocidade']);
    $rpm = floatval($_POST['rpm']);

    $stmt = $conn->prepare(
        "INSERT INTO leituras (velocidade, rpm)
         VALUES (?, ?)"
    );

    $stmt->bind_param(
        "dd",
        $velocidade,
        $rpm
    );

    $stmt->execute();
    $stmt->close();
}

$conn->close();

?>
