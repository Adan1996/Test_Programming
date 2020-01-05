$(function () {

    // Edit Menu
    $('.add-menu').on('click', function () {
        $('#MenuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Add');

        $('#menu').val('');
    });

    $('.edit-menu').on('click', function () {
        $('#MenuModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/app/menu/edit');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/app/menu/getedit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu').val(data.menu);
                $('#id').val(data.id);
            }
        });
    });
});