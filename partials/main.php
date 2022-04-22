<main>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-wrap dischi-wrapper">
                <div class="card col-2" v-for ="disco in filteredDischi">
                    <img class="card-img-top" :src="disco.poster" :alt="disco.title">
                    <div class="card-body text-center p-0">
                        <h5 class="card-title">{{disco.title}}</h5>
                        <p class="card-artist mb-0">{{disco.author}}</p>
                        <p class="card-year mb-0">{{disco.year}}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>