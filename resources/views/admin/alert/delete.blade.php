<script>

    $(document).ready(function () {
        var className = '{{ $className }}'
        var element = $('.' + className);

        element.on('click', function(e){

            e.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass:{
                    confirmButton : 'btn btn-success mx-2',
                    cancelButton : 'btn btn-danger mx-2'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                     title: 'are you sure about delete?',
                        text: "you can cancel here",
                         icon: 'warning',
                         showCancelButton: true,
                        confirmButtonText: 'yes, delete data',
                        cancelButtonText: 'no, cancel delete',
                        reverseButtons: true
                        }).then((result) => {

                            if(result.value == true){
                                $(this).parent().submit();
                            }
                            else if(result.dismiss === Swal.DismissReason.cancel){
                                swalWithBootstrapButtons.fire({
                                         title: 'cancel',
                                         text: "cancel",
                                        icon: 'error',
                                       confirmButtonText: 'ok'
                                })
                            }

                        })

        })

    })


</script>
