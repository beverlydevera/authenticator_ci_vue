var login = new Vue({
    el: '#login_page',
    data: {
        userdata: {
            username: "",
            password: "",
        },
    },
    methods: {
        checkUser(){
            if(this.userdata.username!="" && this.userdata.password!=""){
                var ldata = this.userdata;
                var urls = window.App.baseUrl + "Login/checkUser";
                axios.post(urls, ldata)
                    .then(function (e) {
                        // console.log(e);
                        var success = e.data.result==true ? 'success':'error';
                        Toast.fire({
                            type: success,
                            title: e.data.message
                        })
                        if (e.data.result) {
                            setTimeout(function(){
                                location.reload();
                            }, 500);
                        }else{
                            login.userdata = {
                                username: "",
                                password: ""
                            }
                        }
                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            }else{
                alert("Please fill out required fields.");
            }
        },
    }, mounted: function () {
    },
})