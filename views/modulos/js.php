<div id="modalcrearRedes" class="modal fade" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content bd-0">
<div class="modal-header pd-y-20 pd-x-25">
<h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
</div>
<!-- Formulario Mantenimiento -->
<form method="post" id="socialMedia_form">
<div class="modal-body">
<input type="hidden" name="socmed_id" id="socmed_id"/>
<div class="col-lg-12">
<div class="form-group">
<label class="form-control-label">Icono: <span class="tx-danger">*</span></label>
<input class="form-control" id="socmed_icono" type="text" name="socmed_icono" required/>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="form-control-label">URL: <span class="tx-danger">*</span></label> <input class="form-control" id="socmed_url" type="text" name="socmed_url" required/>
</div>
</div>
</div>
<div class="modal-footer">
<button type="submit" name="action" value="add" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-2">
<button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" aria>
</div>
</form>
</div>
</div>
</div>


<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.js"></script>

<!-- punto 10 librerias gratis de carpeta "plugins"-->"
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="public/plugins/jszip/jszip.min.js"></script>
<script src="public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="public/plugins/select2/js/select2.full.min.js"></script>

<!-- punto 10, libreria "sweetalert" da mensajes de alert amigables--> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>