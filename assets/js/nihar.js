$(function() {
    $("#submit").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var text = $("#message").val();
        var dataString = 'name='+ name + '&email=' + email + '&text=' + text;

        $.ajax({
            type: "POST",
            url: "../php/mail.php",
            data: dataString,
            success: function(dat){
            alert(dat);
            }
        });

        return false;
    });
});
