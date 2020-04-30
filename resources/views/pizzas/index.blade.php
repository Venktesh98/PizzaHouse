@extends('layouts.app')

@section('content')
          <!-- @for($i=0; $i < count($pizzas); $i++ )
            <p> {{ $pizzas[$i]['type'] }}</p>
        @endfor -->
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
        @foreach($pizzas as $pizzaget)
            <div class="pizza-item">
                <!-- {{ $loop->index }} 
                {{ $pizzaget['type'] }} - {{ $pizzaget['base'] }}

                @if($loop->first)
                    <span>-first in the loop</span>
                @endif

                @if($loop -> last)
                    <span>-last in the loop</span>
                @endif -->

                <img src="/img/pizza.png" alt="pizza image">
                <h4><a href="/pizzas/{{ $pizzaget -> id }}">{{ $pizzaget->name }} </a></h4>
            </div>
        @endforeach
</div>
@endsection
  