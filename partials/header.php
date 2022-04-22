<header>       
    <section class="container-fluid">
        <div class="row justify-content-between align-content-center">
            <div class="col-2">
                <img class="header-logo" src="css/img/logo-small.png" alt="logo">
            </div>
            <div class="col-4">
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