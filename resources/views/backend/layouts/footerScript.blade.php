{{-- <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script> --}}
<script src="{{asset('/') }}backend/js/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/vendors.bundle.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/scripts.bundle.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/dashboard.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/') }}backend/js/jquery.datatables.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
        toastr.error('{{ $error }}');
        </script>
   @endforeach
@endif

{!! Toastr::message("ss") !!}
{{-- ===========script for Data table======== --}}
<script type="text/javascript">
$(document).ready(function() {
$('#datatables').DataTable({
"pagingType": "full_numbers",
"lengthMenu": [
[10, 25, 50, -1],
[10, 25, 50, "All"]
],
responsive: true,
language: {
search: "_INPUT_",
searchPlaceholder: "Search records",
}
});
var table = $('#datatables').DataTable();
// Edit record
table.on('click', '.edit', function() {
$tr = $(this).closest('tr');
var data = table.row($tr).data();
alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
});
// Delete a record
table.on('click', '.remove', function(e) {
$tr = $(this).closest('tr');
table.row($tr).remove().draw();
e.preventDefault();
});
//Like record
table.on('click', '.like', function() {
alert('You clicked on Like button');
});
$('.card .material-datatables label').addClass('form-group');
});
</script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

{!! Toastr::message() !!}













