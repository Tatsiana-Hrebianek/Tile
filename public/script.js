$(document).ready(function(){
    $('#imageForm').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            success: function(response){
                $('#imageContainer').append('<img src="' + response + '">');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});
