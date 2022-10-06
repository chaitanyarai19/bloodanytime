$(document).ready(function(){
    $.ajax({
        url:'https://www.universal-tutorial.com/api/getaccesstoken',
        type:'GET',
        headers: {
            "Accept": "application/json",
            "api-token": "o_qUdxFa2DFPpR-BmvuhubM346hG5Tp3aeX4yCww4cbrvyQHKzFKrgkGQXtVhG-rWns",
            "user-email": "manish.sah.cs19@ggits.net"
        },
        success:function(data){
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/states/India',
                type: "GET",
                headers: {
                    "Authorization": `Bearer ${data.auth_token}`,
                    "Accept": "application/json"
                },
                success: function (data) {
                    $("#state").empty().append(`<option value="" disabled selected>Select your State</option>`);
                    data.forEach(function (value) {
                        $("#state").append(`<option value="${value['state_name']}">${value['state_name']}</option>`)
                    });
                }
            })
        }
    })
    
    $("#state").on("change",function(e){
        var state = $("#state").val()
        $.ajax({
            url: 'https://www.universal-tutorial.com/api/getaccesstoken',
            type: 'GET',
            headers: {
                "Accept": "application/json",
                "api-token": "o_qUdxFa2DFPpR-BmvuhubM346hG5Tp3aeX4yCww4cbrvyQHKzFKrgkGQXtVhG-rWns",
                "user-email": "manish.sah.cs19@ggits.net"
            },
            success: function (data) {
                $.ajax({
                    url: `https://www.universal-tutorial.com/api/cities/${state}`,
                    type: "GET",
                    headers: {
                        "Authorization": `Bearer ${data.auth_token}`,
                        "Accept": "application/json"
                    },
                    success: function (data) {
                        $("#city").empty().append(`<option value="" disabled selected>Select your City</option>`);
                        data.forEach(function (value) {
                            $("#city").append(`<option value="${value['city_name']}">${value['city_name']}</option>`)
                        });
                    }
                })
            }
        })
    })
})