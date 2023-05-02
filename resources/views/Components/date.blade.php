@php
    $day = explode(" ",trim($date))[0];
    $month = strtoupper(substr(explode(" ",trim($date))[1], 0, 3)); 
@endphp

<style>
    .date{
        padding: 5px;
        border: #b71c1c 1px solid;
        margin:auto;

    }
    .day{
        font-style: 20px;
    }
    .month{
        font-weight: bold;
    }
</style>



<div class='date flexColumnCenter'>
    <span class='day'>
        {{$day}}
    </span>
    
    <span class='month'>
        {{$month}}
    </span>
</div>