$('#btn_charged').click(function () {

    var form = $('form')[0];
    var formData = new FormData(form);

    var input = document.getElementById('fileToUpload');
    if (!input.files) { // This is VERY unlikely, browser support is near-universal
        console.error("This browser doesn't seem to support the `files` property of file inputs.");
    } else if (!input.files[0]) {

    } else {
        var file = input.files[0];
    }

    var sizeFile = file.size / (1024 * 1024);

    if (sizeFile > 5) {
        alert('il file che stai provando a caricare è troppo grande');
    } else {
        $.ajax({
            contentType: false,
            processData: false,
            url: 'upload_file.php',
            // container: '#form_file',
            type: "POST",
            file: true,
            data: formData,
            success: function (data) {
                alert(data);
            }
        })
    }
})

