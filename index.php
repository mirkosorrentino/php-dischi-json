<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- custom CSS style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Vue CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <div class="ms_container">
            <!-- card -->
            <div class="row">
                <div class="col-4 d-flex flex-wrap p-5" v-for="(disco,index) in dischi" :key="index">
                    <div class="card">
                        <img :src="disco.poster" class="card-img-top" alt="disco.title">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ disco.title }}</h5>
                            <div class="text-center pb-2">{{ disco.author }}</div>
                            <h6 class="text-center">{{ disco.year }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- Custom JS script -->
    <script src="js/script.js"></script>
</body>
</html>