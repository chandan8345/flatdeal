@if(Session::has('user_id'))
   
@else 
<script type="text/javascript">
    window.location = "{{ url('/') }}";
</script> 
@endif