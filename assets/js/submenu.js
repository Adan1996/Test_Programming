$(function () {

    $('.new-menu').on('click', function () {
        $('#SubMenuModalLabel').html('Add New Sub Menu');
        $('.modal-footer button[type=submit]').html('Add Sub Menu');

        $('#title').val('');
        $('#menu_id').val('');
        $('#url').val('');
        $('#icon').val('');
    });

    $('.edit-submenu').on('click', function () {
        $('#SubMenuModalLabel').html('Edit Sub Menu');
        $('.modal-footer button[type=submit]').html('Edit Submenu');
        $('.modal-body form').attr('action', 'http://localhost/app/menu/editSubMenu');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/app/menu/getSubMenuEdit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#title').val(data.title);
                $('#menu_id').val(data.menu_id);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#id').val(data.id);
            }
        });
    });
});