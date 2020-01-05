$(function () {
    $('.new-role').on('click', function () {
        $('#RoleModalLabel').html('Add New Role');
        $('.modal-footer button[type=submit]').html('Add Role');

        $('#role').val('');
    });

    $('.edit-role').on('click', function () {
        $('#RoleModalLabel').html('Edit Role');
        $('.modal-footer button[type=submit]').html('Edit Role');
        $('.modal-body form').attr('action', 'http://localhost/app/admin/editroleaccess');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/app/admin/getrole',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#role').val(data.role);
                $('#id').val(data.id);
            }
        });
    });
});