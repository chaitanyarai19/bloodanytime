$(document).ready(function(){
        // mail function
        var mail = (mailId) => {
            $.ajax({
                url: `${url}api/donor_registration.php?type=send-otp`,
                type: "POST",
                data: JSON.stringify({ email: mailId }),
                success: function (data) {
                    $("#otp").show();
                    data = $.parseJSON(data);
                    if (data.status == true) {
                        $("#donor_registration_message").html(`<div class="alert alert-success">${data.message}</div>`);
                        setTimeout(() => {
                            $("#donor_registration_message").empty()
                        }, 3000);
                        resendOTP();
                    } else {
                        $("#donor_registration_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                        setTimeout(() => {
                            $("#donor_registration_message").empty()
                        }, 3000);
                    }
                }
            });
        }
        //email verification otp sender
        /*$("#field_email_wid_1555319995_sgk7l55px").on("change", function (e) {
            mail($(this).val())
        })
        //otp resend at 5 minutes
        var resendOTP = () => {
            setTimeout(() => {
                $("#resend").show();
                $.ajax({
                    url: "api/donor_registration.php?type=destroy-otp",
                    type: "GET",
                })
            }, 5000);
        }*/
        //resend otp
        /*$("#resend").on("click", function (e) {
            e.preventDefault();
            mail($("#field_email_wid_1555319995_sgk7l55px").val());
        })
        //verify email
        $("#checkVerify").on("change", function () {
            if ($("#checkVerify").val() != "") {
                $.ajax({
                    url: "api/donor_registration.php?type=verify-otp",
                    type: "POST",
                    data: JSON.stringify({ otp: $("#checkVerify").val() }),
                    success: function (data) {
                        data = $.parseJSON(data);
                        if (data.status == true) {
                            $("#donor_registration_message").html(`<div class="alert alert-success">${data.message}</div>`);
                            setTimeout(() => {
                                $("#donor_registration_message").empty()
                                $("#otp").empty();
                                $(".register").attr('disabled', false);
                            }, 3000);
                        } else {
                            $("#donor_registration_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                            setTimeout(() => {
                                $("#donor_registration_message").empty()
                            }, 3000);
                        }
                    }
                })
            } else {
                alert(false, 'please enter otp');
            }
        })*/
    $("#wid_1555319995_sgk7l55px__form").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function (value, key) {
            obj[key] = value;
        });
        if(obj['password'] == obj['confirm_password']){
            $.ajax({
                url: `${url}api/donor_registration.php?type=register`,
                type: "POST",
                data: JSON.stringify(obj),
                success:function(data){
                    $("#wid_1555319995_sgk7l55px__form").trigger("reset");
                    $("#donor_registration_message").html(data);
                    setTimeout(() => {
                        $("#donor_registration_message").empty();
                        window.location.href = `${url}`
                    }, 5000);
                }
            })
        }else{
            $("#donor_registration_message").html(` <div class="moto-widget-contact_form-danger">
                                password and confirm password should be match
                              </div>`);
            setTimeout(() => {
                $("#donor_registration_message").empty();
            }, 5000);
        }
    })
})