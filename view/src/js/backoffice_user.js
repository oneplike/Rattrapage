$(function() {
    $('table').DataTable();
    getUser();
    function getUser() {
        $.ajax({
            url: 'backoffice',
            type:'post',
            data: { action: 'fetch'},
            success: function (response) {
            }

        })
    }
})