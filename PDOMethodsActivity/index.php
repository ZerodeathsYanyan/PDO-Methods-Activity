<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
    /*
    //SHOW CODE DEMONSTRATING FETCH_ALL(). USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN
    $query = "SELECT * FROM Tricycles";
    $stmt = $pdo->query($query);

    // Fetch all rows
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the result using <pre> and print_r()
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
    */

    /*
    //SHOW CODE DEMONSTRATING HOW FETCH() IS USED. USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN. 
    // Fetch a single row
    $query = "SELECT * FROM Tricycles LIMIT 1";
    $stmt = $pdo->query($query);

    // Fetch one row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the result using <pre> and print_r()
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    */

    /*
    // Prepare an insert statement
    $sql = "INSERT INTO Tricycles (tricycle_id, model, manufacturer, association, color, engine_number, plate_number) 
            VALUES (:tricycle_id, :model, :manufacturer, :association, :color, :engine_number, :plate_number)";
    
    // Bind parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':tricycle_id', $tricycle_id);
    $stmt->bindParam(':model', $model);
    $stmt->bindParam(':manufacturer', $manufacturer);
    $stmt->bindParam(':association', $association);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':engine_number', $engine_number);
    $stmt->bindParam(':plate_number', $plate_number);

    // Set values and execute
    $tricycle_id = 6;
    $model = 'SYM Bonus 110';
    $manufacturer = 'SYM Motors';
    $association = 'Mangaldan Tricycle Operators and Drivers Association (MTODA)';
    $color = 'Blue';
    $engine_number = 'EN1010101010';
    $plate_number = 'UVW1234';

    if($stmt->execute()) {
        echo "New record inserted successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
    */

    /*
    // Prepare a delete statement
    $sql = "DELETE FROM Tricycles WHERE tricycle_id = :tricycle_id";
    
    // Bind parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':tricycle_id', $tricycle_id);

    // Set values and execute
    $tricycle_id = 6; // ID of the record you want to delete

    if($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
    */

    /*
    // Prepare an update statement
    $sql = "UPDATE Tricycles SET model = :model, color = :color WHERE tricycle_id = :tricycle_id";
    
    // Bind parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':model', $model);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':tricycle_id', $tricycle_id);

    // Set values and execute
    $model = 'Updated Model';
    $color = 'Updated Color';
    $tricycle_id = 5; // ID of the record you want to update

    if($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
    */

    /*
    // Execute query
    $query = "SELECT * FROM Tricycles";
    $stmt = $pdo->query($query);

    // Fetch all rows
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if rows were fetched
    if ($rows) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Model</th><th>Manufacturer</th><th>Association</th><th>Color</th><th>Engine Number</th><th>Plate Number</th></tr>";
        
        // Iterate over each row and create table rows
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['tricycle_id'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['manufacturer'] . "</td>";
            echo "<td>" . $row['association'] . "</td>";
            echo "<td>" . $row['color'] . "</td>";
            echo "<td>" . $row['engine_number'] . "</td>";
            echo "<td>" . $row['plate_number'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
    */
?>

</body>
</html>
