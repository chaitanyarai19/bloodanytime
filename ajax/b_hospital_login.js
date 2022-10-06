$(document).ready(function(){
    $("#hospital_login").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function (value, key) {
            obj[key] = value
        });
        $.ajax({
            url: `${url}api/hospital_login.php`,
            type: "POST",
            data: JSON.stringify(obj),
            success: function (data) {
                data = $.parseJSON(data);
                if (data.status == true) {
                    $("#hospital_login_message").html(`<div class="alert alert-success">${data.message}</div>`)
                    setTimeout(() => {
                        $("#hospital_login_message").empty()
                        window.location.href = "prescription.php";
                    }, 2000);
                }else{
                    $("#hospital_login_message").html(`<div class="alert alert-danger">${data.message}</div>`)
                    setTimeout(() => {
                        $("#hospital_login_message").empty()
                    }, 5000);
                }
            }
        })
    })
})