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
    include 'invoice.php';
?>
<div>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
  </tbody>
</table></div>

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

<style>
        .invoice-header {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
        }
        .invoice-details, .bill-to, .service-info {
            margin-bottom: 20px;
        }
        .total {
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row invoice-header">
        <div class="col-md-6">
            <h1>Service Invoice</h1>
            <p>Kyle Stranick</p>
            <p>456 Oak Street, Milltown, DE 19999</p>
            <p>Phone: 302-555-1234</p>
        </div>
        <div class="col-md-6 text-end">
            <p><strong>Bill To:</strong></p>
            <p>John Smith</p>
            <p>123 Elm Street</p>
            <p>Somewhere, USA 12345</p>
        </div>
    </div>

    <div class="row service-info">
        <div class="col-md-12">
            <p><strong>Service Description:</strong> Remove computer virus</p>
            <p><strong>Time:</strong> 2.5 hours</p>
            <p><strong>Hourly Rate:</strong> $30.00 per hour</p>
        </div>
    </div>

    <div class="row total">
        <div class="col-md-12 text-end">
            <p><strong>Total:</strong> $75.00</p>
        </div>
    </div>
</div>


<style>
        .card {
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            font-size: 1.5rem;
        }
        .total {
            font-size: 1.3rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            Service Invoice
        </div>
        <div class="card-body">
            <h5 class="card-title">Kyle Stranick</h5>
            <p class="card-text">456 Oak Street, Milltown, DE 19999</p>
            <p class="card-text">Phone: 302-555-1234</p>
            <hr>
            <h5 class="card-title">Bill To:</h5>
            <p class="card-text">John Smith</p>
            <p class="card-text">123 Elm Street, Somewhere, USA 12345</p>
            <hr>
            <p><strong>Service Description:</strong> Remove computer virus</p>
            <p><strong>Time:</strong> 2.5 hours</p>
            <p><strong>Hourly Rate:</strong> $30.00 per hour</p>
            <p class="total">Total: $75.00</p>
        </div>
    </div>
</div>



<style>
        .invoice-box {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 50px;
        }
        .header, .client-info, .service-details, .total {
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .total {
            font-weight: bold;
            font-size: 1.5rem;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="invoice-box">
        <div class="row header">
            <div class="col-md-6">
                <h2>Service Invoice</h2>
                <p>Kyle Stranick</p>
                <p>456 Oak Street, Milltown, DE 19999</p>
                <p>Phone: 302-555-1234</p>
            </div>
            <div class="col-md-6 text-end">
                <h5>Bill To:</h5>
                <p>John Smith</p>
                <p>123 Elm Street</p>
                <p>Somewhere, USA 12345</p>
            </div>
        </div>
        <div class="row service-details">
            <div class="col-md-12">
                <p><strong>Service Description:</strong> Remove computer virus</p>
                <p><strong>Time:</strong> 2.5 hours</p>
                <p><strong>Hourly Rate:</strong> $30.00 per hour</p>
            </div>
        </div>
        <div class="row total">
            <div class="col-md-12">
                <p>Total: $75.00</p>
            </div>
        </div>
    </div>
</div>

<style>
        .header, .client-info, .service-info {
            padding: 20px;
            margin-bottom: 10px;
            background-color: #f8f9fa;
        }
        .total {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            padding: 20px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="header">
        <h2>Service Invoice</h2>
        <p>Kyle Stranick</p>
        <p>456 Oak Street, Milltown, DE 19999</p>
        <p>Phone: 302-555-1234</p>
    </div>

    <div class="client-info">
        <h5>Bill To:</h5>
        <p>John Smith</p>
        <p>123 Elm Street</p>
        <p>Somewhere, USA 12345</p>
    </div>

    <div class="service-info">
        <p><strong>Service Description:</strong> Remove computer virus</p>
        <p><strong>Time:</strong> 2.5 hours</p>
        <p><strong>Hourly Rate:</strong> $30.00 per hour</p>
    </div>

    <div class="total">
        Total: $75.00
    </div>
</div>

<style>
        .full-width {
            width: 100%;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f1f1f1;
        }
        .total {
            background-color: #007bff;
            color: white;
            text-align: right;
            font-weight: bold;
            padding: 15px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="full-width">
        <h2>Service Invoice</h2>
        <p>Kyle Stranick</p>
        <p>456 Oak Street, Milltown, DE 19999</p>
        <p>Phone: 302-555-1234</p>
    </div>

    <div class="full-width">
        <h5>Bill To:</h5>
        <p>John Smith</p>
        <p>123 Elm Street</p>
        <p>Somewhere, USA 12345</p>
    </div>

    <div class="full-width">
        <p><strong>Service Description:</strong> Remove computer virus</p>
        <p><strong>Time:</strong> 2.5 hours</p>
        <p><strong>Hourly Rate:</strong> $30.00 per hour</p>
    </div>

    <div class="total">
        Total: $75.00
    </div>
</div>


body {
            background-color: #f7f3ec; /* Light brown background */
            color: #5c4033; /* Dark oak color */
            font-family: 'Arial', sans-serif;
        }
        .invoice-container {
            padding: 40px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }
        .invoice-header {
            margin-bottom: 30px;
        }
        .billing-info, .company-info {
            margin-bottom: 30px;
        }
        .itemized-breakdown {
            background-color: rgba(92, 64, 51, 0.1); /* Light opacity background */
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
        }
        .itemized-breakdown th, .itemized-breakdown td {
            padding: 10px;
            text-align: left;
        }
        .total-box {
            background-color: #d2b48c; /* Light brown */
            padding: 20px;
            text-align: right;
            font-size: 1.5rem;
            color: white;
            border-radius: 8px;
        }
        .total-box p {
            margin: 0;
        }
        h2, h5 {
            color: #5c4033; /* Oak color */
        }
    </style>
</head>
<body>

<div class="container invoice-container">
    <!-- Company Info -->
    <div class="row invoice-header">
        <div class="col-md-12 text-center">
            <h2>Kyle Stranick Services</h2>
            <p>456 Oak Street, Milltown, DE 19999</p>
            <p>Phone: 302-555-1234</p>
        </div>
    </div>

    <!-- Billing Info -->
    <div class="row billing-info">
        <div class="col-md-12">
            <h5>Bill To:</h5>
            <p><strong>John Smith</strong></p>
            <p>123 Elm Street, Somewhere, USA 12345</p>
        </div>
    </div>

    <!-- Itemized Breakdown -->
    <div class="row">
        <div class="col-md-12 itemized-breakdown">
            <table class="table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Hours</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Remove computer virus</td>
                        <td>2.5</td>
                        <td>$30.00</td>
                        <td>$75.00</td>
                    </tr>
                    <!-- Add more items if needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Total Box -->
    <div class="row">
        <div class="col-md-12">
            <div class="total-box">
                <p><strong>Total: $75.00</strong></p>
            </div>
        </div>
    </div>
</div>



<style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .invoice-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
        }

        .invoice-header h1 {
            margin: 0;
        }

        .company-details, .invoice-details {
            text-align: right;
        }

        .invoice-table th, .invoice-table td {
            border-top: 1px solid #dee2e6;
            padding: 10px;
        }

        .notes-section {
            margin-top: 30px;
        }

        .total-section {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }

        footer {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
        }

    </style>
</head>
<body>

<div class="container mt-5">
    <!-- Invoice Header -->
    <div class="invoice-header row align-items-center">
        <div class="col-md-6">
            <h1>Invoice</h1>
        </div>
        <div class="col-md-6 text-end company-details">
            <p>Your Company Name</p>
            <p>Your Business Address</p>
            <p>City, Country, Postal Code</p>
        </div>
    </div>

    <!-- Bill To and Invoice Info -->
    <div class="row mt-4">
        <div class="col-md-6">
            <h5>BILL TO:</h5>
            <p><strong>John Smith</strong></p>
            <p>123 Elm Street</p>
            <p>Somewhere, USA 12345</p>
        </div>
        <div class="col-md-6 text-end invoice-details">
            <p><strong>INVOICE #:</strong> 000001</p>
            <p><strong>DATE:</strong> 12/31/20</p>
            <p><strong>INVOICE DUE DATE:</strong> 12/31/20</p>
        </div>
    </div>

    <!-- Itemized Breakdown -->
    <table class="table invoice-table mt-4">
        <thead>
        <tr>
            <th>ITEMS</th>
            <th>DESCRIPTION</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>TAX</th>
            <th>AMOUNT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Item 1</td>
            <td>Remove computer virus</td>
            <td>1</td>
            <td>$30.00</td>
            <td>0%</td>
            <td>$30.00</td>
        </tr>
        <tr>
            <td>Item 2</td>
            <td>Install software</td>
            <td>1</td>
            <td>$50.00</td>
            <td>0%</td>
            <td>$50.00</td>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Total Section -->
    <div class="row">
        <div class="col-md-12 total-section">
            <p><strong>Total: $80.00</strong></p>
        </div>
    </div>

    <!-- Notes Section -->
    <div class="row notes-section">
        <div class="col-md-12">
            <h6>NOTES:</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut nisi tempus massa blandit luctus.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        Powered by Your Company. All Rights Reserved.
    </footer>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
