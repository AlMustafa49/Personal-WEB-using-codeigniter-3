</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="<?=base_url('adminLTE')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('adminLTE')?>/dist/js/adminlte.min.js"></script>

<script src="<?=base_url('adminLTE')?>/plugins/summernote/summernote-bs4.min.js"></script>

<script>
function bacaGambar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#gambar_load').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files['0']);
    }
}
$("#preview_gambar").change(function() {
    bacaGambar(this);
});
</script>

<script>
$(function() {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>

</body>

</html>