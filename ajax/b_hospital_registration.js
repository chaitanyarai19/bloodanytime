$(document).ready(function(){
    // mail function
    var mail = (mailId) => {
        $.ajax({
            url: `${url}api/b_hospital_registration.php?type=send-otp`,
            type: "POST",
            data: JSON.stringify({ email: mailId }),
            success: function (data) {
                $("#otp").show();
                data = $.parseJSON(data);
                if (data.status == true) {
                    $("#hospital_registration_message").html(`<div class="alert alert-success">${data.message}</div>`);
                    setTimeout(() => {
                        $("#hospital_registration_message").empty()
                    }, 3000);
                    resendOTP();
                }else{
                    $("#hospital_registration_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                    setTimeout(() => {
                        $("#hospital_registration_message").empty()
                    }, 3000);
                }
            }
        });
    }
    //email verification otp sender
    $("#your_email").on("change", function (e) {
        mail($(this).val())
    })
    //otp resend at 5 minutes
    var resendOTP = () => {
        setTimeout(() => {
            $("#resend").show();
            $.ajax({
                url: "api/b_hospital_registration.php?type=destroy-otp",
                type: "GET",
            })
        }, 50000);
    }
    //resend otp
    $("#resend").on("click", function (e) {
        e.preventDefault();
        mail($("#your_email").val());
    })
    //verify email
    $("#checkVerify").on("change", function () {
        if ($("#checkVerify").val() != "") {
            $.ajax({
                url: "api/b_hospital_registration.php?type=verify-otp",
                type: "POST",
                data: JSON.stringify({ otp: $("#checkVerify").val() }),
                success: function (data) {
                    data = $.parseJSON(data);
                    if (data.status == true) {
                        $("#hospital_registration_message").html(`<div class="alert alert-success">${data.message}</div>`);
                        setTimeout(() => {
                            $("#hospital_registration_message").empty()
                            $("#otp").empty();
                            $(".register").attr('disabled', false);
                        }, 3000);
                    }else{
                        $("#hospital_registration_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                        setTimeout(() => {
                            $("#hospital_registration_message").empty()
                        }, 3000);
                    }
                }
            })
        } else {
            alert(false, 'please enter otp');
        }
    })
    $("#hospital_registration").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function(value,key){
            obj[key] = value
        })
        $.ajax({
            url:`${url}api/b_hospital_registration.php?type=register`,
            type:'POST',
            data: JSON.stringify(obj),
            success:function(data){
                data = $.parseJSON(data);
                $("#hospital_reqistration").trigger("reset");
                if(data.status == true){
                    $("#hospital_registration_message").html(`<div class="alert alert-success">${data.message}</div>`);
                    setTimeout(() => {
                        $("#hospital_registration_message").empty()
                        window.location.href = 'hospital_login.php';
                    }, 5000);
                }else{
                    $("#hospital_registration_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                    setTimeout(() => {
                        $("#hospital_registration_message").empty()
                    }, 5000);
                } 
            }
        })
    })
})