<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Retour vers le futur</title>
</head>
<body class = "container">
    <?php

$presentTime = new DateTime();

$destinationTime = clone $presentTime;
$destinationTime = $destinationTime->modify('+2 days 2 hours');
$journey = $presentTime->diff($destinationTime);
?>

    <h1 class="my-5 text-center"> Retour vers le futur</h1>

    <section class="d-flex justify-content-around">
        <div class="card bg-danger border-danger" style="width: 18rem;">
            <div class="card-header text-light bg-transparent border-danger">
                Destination Time
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger">Month: <strong><?php echo strtoupper($destinationTime->format('M')) ?></strong></li>
                    <li class="list-group-item text-danger">Day: <strong><?php echo strtoupper($destinationTime->format('d')) ?></strong></li>
                    <li class="list-group-item text-danger">Year: <strong><?php echo strtoupper($destinationTime->format('Y')) ?></strong></li>
                    <li class="list-group-item text-danger">Hour: <strong><?php echo strtoupper($destinationTime->format('g')) ?> PM</strong> </li>
                    <li class="list-group-item text-danger">Min: <strong><?php echo strtoupper($destinationTime->format('i')) ?></strong></li>
            </ul>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Journey length
            </div>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">Month: <strong><?php echo strtoupper($journey->format('%R%m')) ?></strong></li>
                    <li class="list-group-item">Day: <strong><?php echo strtoupper($journey->format('%R%a')) ?></strong></li>
                    <li class="list-group-item">Year: <strong><?php echo strtoupper($journey->format('%R%Y')) ?></strong></li>
                    <li class="list-group-item">Hour: <strong><?php echo strtoupper($journey->format('%R%h')) ?></strong> </li>
                    <li class="list-group-item">Min: <strong><?php echo strtoupper($journey->format('%R%i')) ?></strong></li>
            </ul>
        </div>


        <div class="card bg-success border-success" style="width: 18rem;">
            <div class="card-header text-light bg-transparent border-success">
                Present Time
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-success">Month: <strong><?php echo strtoupper($presentTime->format('M')) ?></strong></li>
                <li class="list-group-item text-success">Day: <strong><?php echo strtoupper($presentTime->format('d')) ?></strong></li>
                <li class="list-group-item text-success">Year: <strong><?php echo strtoupper($presentTime->format('Y')) ?></strong></li>
                <li class="list-group-item text-success">Hour: <strong><?php echo strtoupper($presentTime->format('g')) ?> PM</strong> </li>
                <li class="list-group-item text-success">Min: <strong><?php echo strtoupper($presentTime->format('i')) ?></strong></li>
            </ul>
        </div>
    </section>




</body>
</html>



