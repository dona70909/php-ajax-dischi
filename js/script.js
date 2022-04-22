const app = new Vue ({

    el:"#app",

    data() {
        return {
            dischi : [],

            selectGenere : "",

            filteredDischi : [],

            listGeneri: [],
        }
    },

    created() {
        axios.get("http://localhost/php-ajax-dischi/server/dischi.php")
        .then((response) => {
            this.dischi = response.data.response;
            //console.log(response);
        })
        .catch((error) => {
            console.error(error);
        }),

        console.warn("http://localhost/php-ajax-dischi/server/dischiGenere.php?genere=" + this.changeGenere());
        axios.get('http://localhost/php-ajax-dischi/server/dischiGenere.php?genere=' + this.changeGenere())
        .then((response) => {
            this.filteredDischi = response.data.response;
            console.warn("http://localhost/php-ajax-dischi/server/dischiGenere.php?genere=" + this.changeGenere());
            console.log( this.filteredDischi = response.data.response);
        })
        .catch((error) => {
            console.error(error);
        })
    },

    methods: {
        
        generiDischi() {
            this.dischi.forEach(element => {
                if(!this.listGeneri.includes(element.genre)) {
                    this.listGeneri.push(element.genre);
                }
            });

            return this.listGeneri;
        },

        changeGenere() {
            return this.selectGenere;
        }
    },

})