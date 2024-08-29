<!DOCTYPE html>
<html>
<head>
    <title>Sales Bar Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="salesChart" width="200" height="50"></canvas>

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

    $sql = "SELECT date, total_income, total_orders FROM sales_data";
    $result = $conn->query($sql);

    $dates = array();
    $incomes = array();
    $orders = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $dates[] = $row['date'];
            $incomes[] = $row['total_income'];
            $orders[] = $row['total_orders'];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('salesChart').getContext('2d');
            const dates = <?php echo json_encode($dates); ?>;
            const incomes = <?php echo json_encode($incomes); ?>;
            const orders = <?php echo json_encode($orders); ?>;

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dates,
                    datasets: [
                        {
                            label: 'Total Income',
                            data: incomes,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Total Orders',
                            data: orders,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
