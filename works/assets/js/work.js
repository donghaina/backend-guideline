var app = new Vue({
    el: '#work',
    data: {
        work: {}
    },
    methods: {
        getData: function () {
            var query = location.search;
            var self = this;
            axios.get('../db/get_work.php'+query)
                .then(function (response) {
                    // console.log(response.data);
                    self.work = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        handleUpdate:function () {
            var self = this;
            console.log(self.work);
            axios.post('../db/update_work.php',self.work)
                .then(function (response) {
                    console.log(response.data);
                    // self.work = response.data;
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