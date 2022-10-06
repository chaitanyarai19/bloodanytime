$(document).ready(function(){
   $("#new-donor-center").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `${url}api/donor_center.php?type=register`,
            type: "POST",
            data: formdata,
            contentType : false,
            processData : false,
            success:function(data){
                $("#new-donor-center").trigger("reset");
                    $("#donor_center_location_message").html(data);
                    setTimeout(() => {
                        $("#donor_center_location_message").empty();
                    }, 5000);
            }
        })
    })
    $("#search_donor_center").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `${url}api/donor_center.php?type=search`,
            type:"POST",
            data:formdata,
            contentType : false,
            processData : false,
            success:function(data){
                $("#wid_1555243702_vbuo66fc1").html(data);
            }
        })
    })
});