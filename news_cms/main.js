var app = new Vue({
    el: '#app',
    data: {
        news_data: []
    },
    methods: {
        getData: function () {
            var self = this;
            axios.get('./02-array-api.php')
                .then(function (response) {
                    console.log(response.data);
                    self.news_data = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    created: function () {
        var self = this;
        self.getData();
    }
});