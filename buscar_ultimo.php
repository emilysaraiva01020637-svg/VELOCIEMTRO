<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "telemetria"
);

$sql = "
    SELECT velocidade, rpm
    FROM leituras
    ORDER BY id DESC
    LIMIT 1
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    echo json_encode([
        "velocidade" => $row["velocidade"],
        "rpm" => $row["rpm"]
    ]);
}

$conn->close();

?>
