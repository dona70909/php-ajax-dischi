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

    mounted() {
        axios.get("http://localhost/php-ajax-dischi/server/dischi.php")
        .then((response) => {
            this.dischi = response.data.response;
        })
        .catch((error) => {
            console.error(error);
        }),

        axios.get('http://localhost/php-ajax-dischi/server/dischiGenere.php?genere=' + this.selectGenere)
        .then((response) => {
            this.filteredDischi = response.data.response;        
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
            axios.get('http://localhost/php-ajax-dischi/server/dischiGenere.php?genere=' + this.selectGenere)
            .then((response) => {
                this.filteredDischi = response.data.response;    
                console.error(this.selectGenere + "noy ")       
            })
            .catch((error) => {
                console.error(error);
            })
        } 
    },

})