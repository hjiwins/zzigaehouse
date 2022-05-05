@extends('layouts.app')

@section('content')
    <div class="wrapper zzigae-detail">
        <h1>Order for {{ $zzigae->name }}</h1>
        <p class="type">Type - {{ $zzigae->type }}</p>
        <p class="soup">Soup - {{ $zzigae->soup }}</p>
        <ul>
            @foreach ($zzigae->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
       <form action="{{ route('zzigaes.destroy', $zzigae->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>
    <a href="/zzigaes" class="back">Back to the list</a>
@endsection