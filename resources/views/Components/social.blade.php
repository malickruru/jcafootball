<style>


.social a{
    font-size: 30px;
    transition: transform .5s ease-out;
    transform: translateY(0);
    display: block;

}
.social a:hover{
    color: #b71c1c !important;
    
    transform: translateY(-10px);
    
}


</style>

<div class="social d-flex">
    
    @foreach ($resaux as $r)
        <a href="{{$r['url']}}" class="text-primary px-3" >
            {!! $r['icon'] !!}
         </a>
    @endforeach
</div>