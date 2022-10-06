$(document).ready(function(){
    $("#search_available_blood").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var obj = {};
        formdata.forEach(function (value, key) {
            obj[key] = value
        })
        $.ajax({
            url:`${url}api/search_available_blood.php`,
            type:'POST',
            data:JSON.stringify(obj),
            success:function(data){
                $("#show_available_blood_search").html(data);
            }
        })
    })
})