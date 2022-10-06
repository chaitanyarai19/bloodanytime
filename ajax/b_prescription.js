$(document).ready(function () {
    $("#prescription_form").on('submit', function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
            $.ajax({
                url: `${url}/api/prescription.php?type=register`,
                type: "POST",
                data: formdata,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    if (data.status == true) {
                        $("#prescription_message").html(`<div class="alert alert-success">${data.message}</div>`);
                        setTimeout(() => {
                            $("#prescription_message").empty()
                        }, 3000);
                        window.location.href = 'search_blood.php';
                    }else{
                        $("#prescription_message").html(`<div class="alert alert-danger">${data.message}</div>`);
                        setTimeout(() => {
                            $("#prescription_message").empty()
                        }, 3000);
                    }
                }
            })
    })
})