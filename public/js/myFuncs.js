$( document ).ready(function() {
    // console.log( "ready!" );
    $("#test").click(function(){
        value=$('#text').val();
        console.log(value);
        $.ajax({
            type: 'POST',
            url:'ajaxAns',
            data: {
                body:value,
                _token: token
            },
            success: function (data) {
                console.log(data);
            }
        });

    });
});