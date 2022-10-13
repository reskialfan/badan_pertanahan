<script>
    $(document).on('submit', '#form-uploadpenunjang-rajal', function(e) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
        // Get form
        var form = $('#form-uploadpenunjang-rajal')[0];
        // Create an FormData object 
        var data = new FormData(form);
        // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");
        // disabled the submit button
        $("#btnSubmit").prop("disabled", true);
        $("#loadingImg").show();
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/fastclaim/Rajal/upload",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
                var out = jQuery.parseJSON(data);
                console.log("Upload Sukses");
                document.getElementById("form-uploadpenunjang-rajal").reset();
                $('#uploadpenunjang-rajal').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
                $("#loadingImg").hide();
            },
            error: function(e) {
                console.log("ERROR : ", e);
                $('.form-msg').html(e);
                effect_msg_form();
                $("#loadingImg").hide();
            }
        });
    });
</script>