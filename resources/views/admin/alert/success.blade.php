@if(session('successSweet') != null)

<script>
    $(document).ready(function (){
        Swal.fire({
            title: 'Success',
             text: '{{ session('successSweet') }}',
             icon: 'success',
             confirmButtonText: 'ok',
  });
    });
</script>
@endif
