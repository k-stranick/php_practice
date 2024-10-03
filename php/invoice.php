<!-- 
Name: Kyle Stranick
Course: ITN 264
Section: 201
Title: Assignment 5: PHP
-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php
    // Include the PHP logic file
    include 'logic.php';
    ?>

    <div class="container mt-5">
        <div class="card">
            <!-- Invoice Header -->
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Invoice</h1>
                    </div>
                    <div class="col-md-6 text-end company-details">
                        <p><strong><?php echo $name; ?></strong></p>
                        <p><?php echo $address; ?></p>
                        <p><?php echo $city . ", " . $state . " " . $zip; ?></p>
                        <p><?php echo $phone; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <h4>BILL TO:</h4>
                        <p><strong>John Doe</strong></p>
                        <p>456 Example Ave</p>
                        <p>Somewhere, DE 19966</p>
                        <p>(777) 777-7777</p>
                    </div>
                </div>
                <h5 class="card-title">Work Details:</h5>
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>DATE:</strong> <?php echo date("m/d/Y"); ?></p>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">HOURS</th>
                            <th scope="col">RATE</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $work_description; ?></td>
                            <td><?php echo "$" . number_format($hourly_rate, 2); ?></td>
                            <td><?php echo $billed_hours; ?></td>
                            <td><?php echo "$" . number_format($total, 2); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="total-box">
                        <p><strong><?php echo "Total: $" . number_format($total, 2); ?></strong></p>
                    </div>
                    <!-- Notes Section -->
                    <div class="row notes-section">
                        <div class="col-md-12">
                            <h6>NOTES:</h6>
                            <p>Any additional information can go here.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer>
                Powered by Kyle Stranick. All Rights Reserved.
            </footer>
        </div>
    </div>