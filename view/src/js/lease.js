$(function() {
    $('table').DataTable();
    getScooter();
    function getScooter() {
        $.ajax({
            url: 'lease',
            type:'post',
            data: { action: 'fetch'},
            success: function (response) {
            }

        })
    }
})