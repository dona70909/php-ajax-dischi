<header>       
    <section class="container-fluid">
        <div class="row justify-content-between align-content-center">
            <div class="col-2">
                <img class="header-logo" src="css/img/logo-small.png" alt="logo">
            </div>
            <div class="col-4 d-flex justify-content-end">
                <select @change="changeGenere()" v-model="selectGenere" class="my-select" name="" id="form">
                    <option class="text-white bg-dark" value=""> All Genres </option>
                    <option class="text-white bg-dark" v-for = "genere in  generiDischi()" :value="genere">
                        {{genere}}
                    </option>
                </select>
            </div>
        </div>
    </section>
</header>