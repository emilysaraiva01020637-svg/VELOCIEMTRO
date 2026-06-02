<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
echo json_encode([
"exemplo" => $row["exemplo"],
"exemplo" => $row["exemplo"],
"exemplo" => $row["exemplo"]
]);
}
$conn->close();
?>