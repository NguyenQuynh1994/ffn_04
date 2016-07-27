$(document).ready(function (){
    $('.frmLogin').validate({
        rules : {
            email : {
                required : true,
                email : true,
            },
            password : {
                required : true,
                minlength : 6,
            },
        },
    });
    $('.frmRegister').validate({
        rules : {
            email : {
                required : true,
                email : true,
            },
            password : {
                required : true,
                minlength : 6,
            },
            password_confirm : {
                equalTo : "#password",
                required : true,
            },
            name : {
                required : true,
            }
        },
    });
});
