$('#grid_usuario').DataTable();

var table = $('#grid_usuario').DataTable();

if ($('.message').length) {
    table.ajax.reload();
}