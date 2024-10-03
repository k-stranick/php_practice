<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php
    // Include the PHP logic file
    include 'logic.php';
    ?>

    <style>
        body {
            background-color: #f8f9fa;
            /* Light gray background */
            font-family: Arial, sans-serif;
        }

        .container {
            height: 100vh;
            /* Full viewport height */
            display: flex;
            align-items: center;
            /* Vertically centers the card */
            justify-content: center;
            /* Horizontally centers the card */
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-header {
            background-color: #343a40;
            /* Dark gray header */
            color: #ffffff;
            /* White text */
            padding: 20px;
        }

        .card-header h1 {
            margin: 0;
            font-size: 1.75rem;
        }

        .company-details {
            text-align: right;
        }

        .card-body {
            padding: 20px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
            /* Light gray background for table rows */
        }

        .table th {
            background-color: #e9ecef;
            border-bottom: 2px solid #dee2e6;
        }

        .table td,
        .table th {
            padding: 15px;
        }

        .total-box {
            background-color: #007bff;
            /* Light blue */
            padding: 20px;
            text-align: right;
            font-size: 1.5rem;
            color: white;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            background-color: #343a40;
            /* Dark gray footer */
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
        }
    </style>

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