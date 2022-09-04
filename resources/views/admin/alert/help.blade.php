@if(session('helpSweet') != null)

<script>
    $(document).ready(function (){
        Swal.fire({
  title: 'HELP',
  width: 600,
  padding: '3em',
  text: '{{ session('helpSweet') }}',

  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url("https://www.animatedimages.org/data/media/105/animated-woman-image-0106.gif")
    left top
    no-repeat
  `
});
});
</script>
@endif
