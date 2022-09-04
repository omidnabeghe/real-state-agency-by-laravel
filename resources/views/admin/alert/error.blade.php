@if(session('errorSweet') != null)

<script>
    $(document).ready(function (){
        Swal.fire({
            title: 'error',
             text: '{{ session('successSweet') }}',
             icon: 'error',
             confirmButtonText: 'ok',
  });
    });
</script>
@endif
