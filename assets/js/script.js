$(function () {

    $('#myTable').DataTable();

    // Jquery untuk upload foto
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function () {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "http://localhost/app/admin/changeaccess",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function () {
                document.location.href = "http://localhost/app/admin/roleaccess/" + roleId;
            }
        });
    });

});