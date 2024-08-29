<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Line Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<canvas id="lineChart" width="200" height="50"></canvas>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hersheydb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT month, total_items FROM monthly_items";
            $result = $conn->query($sql);

            $months = [];
            $total_items = [];

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $months[] = $row["month"];
                    $total_items[] = $row["total_items"];
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        ?>
<script>
    var ctx = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($months); ?>,
            datasets: [{
                label: 'Total Items',
                data: <?php echo json_encode($total_items); ?>,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


</body>
</html>
