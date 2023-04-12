<style>
    .message{
        position: fixed;
        right: 5px;
        bottom: 5px;
        width: 200px;
        height: 100px;
        z-index: 999;
        
    }

   
</style>

@if (session('status'))
    <div class=" message alert alert-success">
        {{ session('status') }}
    </div>
@endif

<script>
    setTimeout(() => {
        $('.message').hide();
    }, 6000);
</script>