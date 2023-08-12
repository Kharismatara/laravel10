<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href= {{ asset('css/style.css') }}>
</head>
<body>


    @php
    $dompet = 0;
    $bonus  = 10000000;
    $total = $dompet + $bonus;


    echo $total
    @endphp
    
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3">
                    <h3>
                        feature 1 
                    </h3>
                </div>
                <div class="col-lg-3">
                    <h3>
                        feature 1 
                    </h3>
                </div>
                <div class="col-lg-3">
                    <h3>
                        feature 1 
                    </h3>
                </div>
                <div class="col-lg-3">
                    <h3>
                        feature 1 
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>