var users = new Vue({
    el: '#users_page',
    data: {
        userslist: [],
    },
    methods: {
        getUsersList(){
            var urls = "https://jsonplaceholder.typicode.com/users";
            axios.get(urls)
                .then(function (e) {
                    console.log(e);
                    users.userslist = e.data;
                })
                .catch(function (error) {
                    console.log(error)
                });
        },
    }, mounted: function () {
        this.getUsersList();
    },
})