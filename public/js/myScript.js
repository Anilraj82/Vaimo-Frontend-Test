$(document).ready(function(){
    $("button").click(function(e){
        e.preventDefault();
        var email = $("input").val();
        $.ajax({
            url:'subscribe/',
            type:'get',
            data:{
                email:email
            },
            success: function(response){
                console.log('The success response is ', response);
            },
            error: function (xhr) {
                console.log('There si error in code')
            }
        });
    });
});