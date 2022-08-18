<?php

$kg = $_GET['kg'];
$cm = $_GET['cm'];

$bmi = round(($kg / (($cm * $cm) / 10000)), 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        Your weight: <?php echo $kg; ?> kg <br>
        Your height: <?php echo $cm; ?> cm <br><br>
        Your calculated BMI is <strong> <?php echo $bmi; ?> </strong>
        <br>
        <a href="new.php"> Return </a><br><br>

        <table class="table table-bordered w-50">
            <h5>Body mass index table</h5>
            <tr class="table-dark">
                <th>BMI Range</th>
                <th>Status</th>
            <tr class="bg-info text-white">
                <td>Below 18.5</td>
                <td>Underweight</td>
            </tr>
            <tr class="bg-success text-white">
                <td>18.5 - 24.9</td>
                <td>Normal</td>
            </tr>
            <tr class="bg-warning text-white">
                <td>25 - 29.9</td>
                <td>Overweight</td>
            </tr>
            <tr class="bg-danger text-white">
                <td>Above 29.9</td>
                <td>Obese</td>
            </tr>
        </table>
    </div>

</body>

</html>