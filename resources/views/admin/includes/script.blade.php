<script src="{{asset('/')}}admin-assets/js/jquery-3.6.0.min.js"></script>
{{--<script src="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>--}}

<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin-assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin-assets/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}admin-assets/assets/demo/chart-bar-demo.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>--}}
<script src="{{asset('/')}}admin-assets/js/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>


{{--<script>--}}
{{--    toastr.error('abd');--}}
{{--</script>--}}


@if(Session::has('message'))
<script>
    toastr.success('{{Session::get('message')}}');
</script>
@endif

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>

