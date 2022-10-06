$(document).ready(function () {
    var mail = (mailId) => {
        $.ajax({
            url: `${url}api/b_volunteer.php?type=send-otp`,
            type: "POST",
            data: JSON.stringify({ email: mailId }),
            success: function (data) {
                $("#otp").show();
                data = $.parseJSON(data);
                if (data.status == true) {
                    $("#volunteer_message").html(`<div class="success">${data.message}</div>`);
                    setTimeout(() => {
                        $("#volunteer_message").empty()
                    }, 3000);
                    resendOTP();
                }else{
                    $("#volunteer_message").html(`<div class="danger">${data.message}</div>`);
                    setTimeout(() => {
                        $("#volunteer_message").empty()
                    }, 3000);
                }
            }
        });
    }
    //email verification otp sender
    $("#email").on("change", function (e) {
        mail($(this).val());
    })
    //otp resend at 5 minutes
    var resendOTP = () => {
        setTimeout(() => {
            $("#resend").show();
            $.ajax({
                url: "api/b_volunteer.php?type=destroy-otp",
                type: "GET",
            })
        }, 50000);
    }
    //resend otp
    $("#resend").on("click", function (e) {
        e.preventDefault();
        mail($("#email").val());
    })
    //verify email
    $("#checkVerify").on("change", function () {
        if ($("#checkVerify").val() != "") {
            $.ajax({
                url: "api/b_volunteer.php?type=verify-otp",
                type: "POST",
                data: JSON.stringify({ otp: $("#checkVerify").val() }),
                success: function (data) {
                    data = $.parseJSON(data);
                    if (data.status == true) {
                        $("#volunteer_message").html(`<div class="success">${data.message}</div>`);
                        setTimeout(() => {
                            $("#volunteer_message").empty()
                            $("#otp").empty();
                            $(".register").attr('disabled', false);
                        }, 3000);
                    }else{
                        $("#volunteer_message").html(`<div class="danger">${data.message}</div>`);
                        setTimeout(() => {
                            $("#volunteer_message").empty()
                        }, 3000);
                    }
                }
            })
        } else {
            $("#volunteer_message").html(`<div class="danger">please enter otp</div>`);
                setTimeout(() => {
                    $("#volunteer_message").empty()
                }, 3000);
        }
    })
    $("#vol-form").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function(value,key){
            obj[key] = value
        })
        $.ajax({
            url:`${url}api/b_volunteer.php?type=register`,
            type:'POST',
            data: JSON.stringify(obj),
            success:function(data){
                data = $.parseJSON(data);
                $("#vol-form").trigger("reset");
                 $("#resend").hide();
                if(data.status == true){
                    $("#volunteer_message").html(`<div class="success">${data.message}</div>`);
                    setTimeout(() => {
                        $("#volunteer_message").empty()
                    }, 5000);
                }else{
                    $("#volunteer_message").html(`<div class="danger">${data.message}</div>`);
                    setTimeout(() => {
                        $("#volunteer_message").empty()
                    }, 5000);
                } 
            }
        })
    })
})