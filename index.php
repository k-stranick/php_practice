<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Invoice</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Optional CSS -->
</head>
<body>

<?php
    // Include the PHP logic file
    include 'invoice.php';
?>

<div class="invoice">
    <h1>Service Invoice</h1>
    
    <p><strong><?php echo $name; ?></strong></p>
    <p><?php echo $address . ", " . $city . ", " . $state . " " . $zip; ?></p>
    <p>Phone: <?php echo $phone; ?></p>

    <hr>

    <h2>Bill To:</h2>
    <p><strong>John Smith</strong></p>
    <p>123 Elm Street</p>
    <p>Somewhere, USA 12345</p>

    <hr>

    <h3>Service Description:</h3>
    <p><?php echo $work_description; ?></p>
    
    <p><strong>Time:</strong> <?php echo $billed_hours; ?> hours</p>
    <p><strong>Hourly Rate:</strong> $<?php echo number_format($hourly_rate, 2); ?> per hour</p>

    <hr>

    <p><strong>Total:</strong> $<?php echo number_format($total, 2); ?></p>
</div>

</body>
</html>
