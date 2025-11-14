<?php
include 'config.php';

$result = null;

// When form is submitted
if (isset($_POST['search'])) {
    $keyword = $conn->real_escape_string($_POST['keyword']);
    $min_price = $_POST['min_price'];
    $max_price = $_POST['max_price'];

    $sql = "SELECT * FROM hotels WHERE 
            (name LIKE '%$keyword%' OR city LIKE '%$keyword%')
            AND price BETWEEN $min_price AND $max_price";

    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Search</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        input, select { padding: 8px; margin: 5px; }
        table { border-collapse: collapse; margin-top: 20px; width: 70%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f2f2f2; }
        .search-box { margin-bottom: 20px; }
    </style>
</head>
<body>

<h2>🔍 Hotel Search</h2>
<form method="post" class="search-box">
    <input type="text" name="keyword" placeholder="Enter hotel name or city">
    <br>
    Min Price: <input type="number" name="min_price" value="0">
    Max Price: <input type="number" name="max_price" value="10000">
    <br>
    <input type="submit" name="search" value="Search">
</form>

<?php
if ($result && $result->num_rows > 0) {
    echo "<table>
            <tr><th>ID</th><th>Hotel Name</th><th>City</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['city']."</td>
                <td>₹".$row['price']."</td>
              </tr>";
    }
    echo "</table>";
} elseif ($result) {
    echo "<p>No hotels found!</p>";
}
?>

</body>
</html>
