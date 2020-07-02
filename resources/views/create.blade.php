@extends('adminlte.master')

@section('content')
<h2>Halaman Create</h2>
@endsection

@push('script')
<script>
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js)}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js)}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</script>
@endpush