  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

    $(".datatable").ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('dataTableHover').DataTable(); // ID From dataTable with Hover
    });
    $('.sa-delete').on('click', function(){
      let form_id = $(this).data('form-id');
      swal({
        title: "Are you sure?",
        text: "For deleting this file",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $('#'+form_id).submit();
        }
      });
    });
  </script>
    
  @stack('script')

