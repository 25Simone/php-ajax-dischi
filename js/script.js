new Vue({
    el: '#app',
    data: {
        discsList: [],
    },
    mounted() {
        axios.get('http://localhost/Sviluppo/php-ajax-dischi/api/discsDataApi.php')
            .then((response) => {
                console.log(response); // DEBUG
                this.discsList = response.data;
            })
    }
});