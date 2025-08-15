<?php
$today = date("Y-m-d");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trains</title>
    @vite(["resources/sass/app.scss"])
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3">Treni in partenza oggi</h1>
        <div class="row g-3">
            @foreach($trains as $train)
            @if($train->departure_date >= $today)
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">{{$train->company}} {{$train->train_code}} </h5>
                        <p class="card-text">Diretto a {{$train->arrival_station}}</p>
                        <p class="card-text">Partirà alle {{$train->departure_time}}</p>
                        @if($train->in_time)
                        <p class="card-text">IN ORARIO</p>
                        @else
                        <p class="card-text">IN RITARDO</p>
                        @endif
                        @if($train->is_deleted)
                        <p class="card-text">CANCELLATO</p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</body>

</html>