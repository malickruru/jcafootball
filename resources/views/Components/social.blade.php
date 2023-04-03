<style>
.social a{
    font-size: 30px;
    transition: transform .5s ease-out;
    transform: translateY(0);

}
.social a:hover{
    color: #b71c1c !important;
    display: block;
    transform: translateY(-10px);
    
}


</style>

<div class="social">
    
    @foreach ($resaux as $r)
        <a href="{{$r['url']}}" class="text-secondary" >
            {!! $r['icon'] !!}
         </a>
    @endforeach
</div>