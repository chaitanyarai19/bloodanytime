// contact us form backend api calling code 
$(document).ready(function(){
    $("#wid_1555319995_sgk7l55px__form").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function (value, key) {
            obj[key] = value;
        });
        $.ajax({
            url: `${url}api/contact_us.php`,
            type: 'POST',
            data: JSON.stringify(obj),
            cache: false,
            processData: false,
            success: function (data) {
                $("#contact_us_response_message").html(data);
                $("#wid_1555319995_sgk7l55px__form").trigger("reset");
                setTimeout(() => {
                    $("#contact_us_response_message").empty();
                }, 2000);
            }
        })
    })
})