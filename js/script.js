const app = new Vue ({

    el:"#app",

    data() {
        return {
            dischi : [],
        }
    },

    created() {
        axios.get("http://localhost/php-ajax-dischi/server/dischi.php")
        .then((response) => {
            this.dischi = response.data.response;
            console.log(response);
        })
        .catch((error) => {
            console.error(error);
        })
    },

})