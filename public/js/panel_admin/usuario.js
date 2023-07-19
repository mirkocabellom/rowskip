$('#grid_usuario').DataTable();

var table = $('#grid_usuario').DataTable();

if ($('.message').length) {
    table.ajax.reload();
}
document.getElementById("btn_cancelar").addEventListener("click", function() {
    document.getElementById("create_user").reset();
  });