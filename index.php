
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- * Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- * CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- * MY CSS STYLE -->
    <link rel="stylesheet" href="css/style.css">

    <!-- * bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- * font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>Vue.js</title>
</head>

<body>

    <div id ="app">
        <header>
            <section class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <img class="header-logo" src="css/img/logo-small.png" alt="logo">
                    </div>
                    <div class="col-5">
                        <select @change="changeGenere()" v-model="selectGenere" class="form-select" name="" id="">
                            <option class="text-white bg-dark" value=""> All Genres </option>
                            <option class="text-white bg-dark" v-for = "genere in  generiDischi()" :value="genere">
                                {{genere}}
                            </option>
                        </select>
                    </div>

                    <p>{{selectGenere}}</p>
                </div>
            </section>
        </header>

        <main>
            <section class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap dischi-wrapper">
                        <div class="card" v-for ="disco in filteredDischi">
                            <img class="card-img-top" :src="disco.poster" :alt="disco.title">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{disco.title}}</h5>
                                <p class="card-artist mb-0">{{disco.author}}</p>
                                <p class="card-year">{{disco.year}}</p>
                                <p>{{disco.genre}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        
    </div>
    

    <!--javascript-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>