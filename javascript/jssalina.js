/*function Login() {


    var account = new Object();
    account.email = document.getElementById('email').value;
    account.password = document.getElementById('password').value;

}

var presstologin = document.getElementById('login');
presstologin.addEventListener("click", function () {
    /*console.log('event1')
    window.location.href = "file:///C:/Users/salina/git/MampfBootstrap/Mampf_Partner.html"
})

*/

$(document).ready(function() {


    $('#login').on("click", function () {

        $.post(

            'MampfBootstrap/MampfClass',
            {
                email: $('#exampleInputEmail1').val()
            },

            function (result) {

                console.log("worked");
            })
    })
})
