var tabelne = document.getElementById("data-tabel");
if(tabelne){
    $(document).ready(function() {
        $('#data-tabel').DataTable({
            "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]
        });
    } );
}