$(function() {
    $(document).on('submit', '.add-user', function() {
        if ($(this).find('.disimissible').is('visible')) {
            $(document).find(".dismissible").fadeOut(); // hide visible error on form submit
        }
        let btn = $(this).find('button').first();

        const pass1 = $('#pass1').val();
        const pass2 = $('#pass2').val();
        if (pass1 != pass2) {
            $('<br><div class="text text-danger dismissible" style="display: block; width: 100%">Your passwords do not match</small>').insertAfter(btn.next());
            return false;
        }
        const data = new FormData($(this)[0])

        $(`<div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>`).insertAfter(btn);

        btn.hide();
        $.ajax({
            type: "POST",
            url: "/post/add-user",
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.trim() == "ok") {
                    $('#add-user-modal').modal('hide');
                } else {
                    alert(response);
                }
                $(document).find(".spinner-border").remove();
                btn.show();
            },

            error: function() {
                alert("A server error has occured, please try again");
                $(document).find(".spinner-border").remove();
                btn.show();
            }
        })
        return false;
    })
})