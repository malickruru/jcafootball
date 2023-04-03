@switch($color)
    @case(1)
    <img src={{"image/logo-blanc.png"}} width={{$width.'px'}}>
        @break
    @default
        <img src={{"image/logo.png"}} width={{$width.'px'}}>
@endswitch

