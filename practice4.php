<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Multiplication Table</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = isset($_POST["size"]) ? (int)$_POST["size"] : 0;

        if ($size <= 0) {
            echo "<p>Please enter a valid number for the size of the multiplication table.</p>";
        } else {
            echo "<table>";
            echo "<tr><th></th>"; // Empty cell for the top-left corner

            // Header row with column indexes
            for ($col = 1; $col <= $size; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

            // Table body with row indexes and multiplication results
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; // Row index
                for ($col = 1; $col <= $size; $col++) {
                    $result = $row * $col;
                    echo "<td>$result</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>

</html>
