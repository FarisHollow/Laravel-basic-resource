



{!!'<h1>This is header</h1>'!!}

<p style="font-weight: bold">{{$name}}</p>



@forelse ($home as $key => $h )

  <p>{{$key}}= {{$h}}</p>
    
@empty

  <p>No home found</p>
    
@endforelse