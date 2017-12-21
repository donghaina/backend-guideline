var app = new Vue({
    el: '#app',
    data: {
        works_data: []
    },
    methods: {
        getData: function () {
            var self = this;
            axios.get('./get_works_list.php')
                .then(function (response) {
                    console.log(response.data);
                    self.works_data = response.data;
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