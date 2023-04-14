<style>
    .palmares div img{
        max-width: 200px;
        margin: auto;
    }
    .owl-next span,.owl-prev span {
        font-size: 3rem;
    color: #b71c1c;
    display: block;
    margin: 0px 10px;

    }
</style>

<div class="container">
    <div class="row m-5">
        <div class="text-center p-2">
            @component('components.title', ['text' => 'Notre ', 'span' => 'palmarès'])
            @endcomponent
            <div class="col">
                <div class="palmares owl-carousel">
                    @foreach ($trophe as $t)
                        <div>
                            
                            <img  src="{{ imageLink($t->trophe) }}" alt="">
                            <h2>
                                {{ $t->coupe }}
                            </h2>
                            <p>
                                {{ $t->annee }}
                            </p>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="owl-carousel owl-theme">
                    <div class="item"><h4>1</h4></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div> --}}
                <a href="/a_propos" class="btn btn-outline-primary">
                    En savoir +
                </a>
            </div>
        </div>

    </div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    // margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>