@php
    $frame = ['1'=>'Flutter','2'=> 'Laravel', '3'=>'NestJS', '4'=> 'NextJs'];

    $home = ['1'=>'Canada','2'=> 'U.S.A', '3'=>'Finland', '4'=> 'Bangladesh'];

    $value = '';

@endphp


{{-- Conditional include --}}
@includewhen(empty($value), 'Layout.header', ['name'=> 'Welcome']) 

<h1>Hi world</h1>


<a href="{{Route("first_n")}}">Go to Faris page</a>



@include('Layout.footer', ['frameworks'=> $frame])


