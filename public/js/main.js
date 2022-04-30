$(function() {

    //Add new user
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
                    $.get("/data", function(data) {
                        $('#data').html(data)
                        $('#update-user-modal').modal('hide');
                        $(document).find(".spinner-border").remove();
                        btn.show();
                    })
                } else {
                    alert(response);
                    $(document).find(".spinner-border").remove();
                    btn.show();
                }

            },

            error: function() {
                alert("A server error has occured, please try again");
                $(document).find(".spinner-border").remove();
                btn.show();
            }
        })
        return false;
    })

    $(document).on('click', '.edit', function() {
        const id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: "/edit/" + id,
            success: function(response) {
                const form = $(response).find('#edit > *');
                $('#update-user-modal').modal('show')
                var title = $(response).filter('title').text();
                $('head title').html(title);
                console.log($('#edit-data').html($(response).find("#edit > *")))
                return false;
            }
        })
    })

    //Update User
    $(document).on('submit', '.update-user', function() {
        if ($(this).find('.disimissible').is('visible')) {
            $(document).find(".dismissible").fadeOut(); // hide visible error on form submit
        }
        let btn = $(this).find('button').first();

        const data = new FormData($(this)[0])

        $(`<div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>`).insertAfter(btn);

        btn.hide();
        $.ajax({
            type: "POST",
            url: "/post/update-user",
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.trim() == "ok") {
                    $.get("/data", function(data) {
                        $('#data').html(data)
                        $('#update-user-modal').modal('hide');
                        $(document).find(".spinner-border").remove();
                        btn.show();
                    })
                } else {
                    alert(response);
                    $(document).find(".spinner-border").remove();
                    btn.show();
                }

            },

            error: function() {
                alert("A server error has occured, please try again");
                $(document).find(".spinner-border").remove();
                btn.show();
            }
        })
        return false;
    })

    // Set the title back to home after update user modal has been closed
    $('.cl').click(function() {
        $('head title').html('Home');
    });


    //Delete User
    $(document).on('click', '.delete', function() {
        const id = $(this).attr('id');
        const _token = $('._token').val();
        const $this = $(this);
        $this.hide();

        $(`<div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>`).insertAfter($this);


        $.ajax({
            type: "POST",
            url: "/post/delete",
            data: { id: id, _token: _token },
            success: function(response) {
                if (response.trim() == "ok") {
                    $this.parent().parent().remove();
                } else {
                    alert(response);
                    $this.show();
                }
            },
            error: function() {
                alert("There was an error, please try again");
            }
        })
    })
});