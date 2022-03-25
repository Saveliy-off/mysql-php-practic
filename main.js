$(document).ready(function() {
    $("#search").keyup(function() {
        var name = $('#search').val();
        if (name === "") {
            $("#inputs").html("");
        }
        else {
            $.ajax({
                type: "POST",
                url: "./proverka.php",
                data: {
                   name: name
                },
                success: function(response) {
                    $("#inputs").html(response).show();
                }
            });
 
        }
 
    });
});

function fill(Value) {
    $('#search').val(Value);
    $('#inputs').hide();
 
}