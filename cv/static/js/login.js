/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$().ready(function () {
//    if (document.referrer !== 'http://localhost:9090') {
//        history.pushState(null, null, 'http://localhost:9090/login/');
//        window.addEventListener('popstate', function () {
//            history.pushState(null, null, 'http://localhost:9090/login/');
//        });
//    }
//});
$('#toggle-password').on('mousedown', function () {
    $(this).toggleClass("fa-eye fa-eye");
    var input = $($(this).attr("toggle"));
    input.attr("type", "text");
}).on('mouseup', function () {
    var input = $($(this).attr("toggle"));
    input.attr("type", "password");
});

function check_pass() {
    var validator = $("#choose").validate({
        rules: {
            password: "required",
            confirmpassword: {
                equalTo: "#password"
            }
        },
        messages: {
            password: " Enter Password",
            confirmpassword: " Enter Confirm Password Same as Password"

        }
    });
    if (validator.form()) {
        document.getElementById('btnSubmit').disabled = false;
    } else
    {
        document.getElementById('btnSubmit').disabled = true;
    }
}

