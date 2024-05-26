{{-- {{5+2}}

 {{"hi"}}
 {!!"<h1>hi</h1>"!!}
 {!!"<script>alert('Hello')</script>"!!}
@php
  $n=["a","b"];  
@endphp

 @foreach ($n as $m )
 @if ($loop->even)
 <li style="color: rosybrown;">{{$m}}</li> 
 @else
 {{$m}}
 @endif    
 @endforeach

 @foreach ($mn as $nm )
 <p>{{$nm}}</p>
     
 @endforeach --}}

 {{-- @forelse ( $mn as $k => $v )
 <p>{{$k}}-{{$v}}</p>   
 @empty
     
<p>Empty</p>
     
 @endforelse --}} 

  {{-- @extends('layout')
 @section('content')
    <h1>demo page</h1>
    <p>gjjj</p>
@endsection

@section('title')
  demoo
@endsection

@section('ji')
@parent
  <p>hhhhhhhhhh</p>
@endsection --}}
