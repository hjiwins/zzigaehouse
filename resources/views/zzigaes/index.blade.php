@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Zzigae List
            </div>
            @foreach ($zzigaes as $zzigae)
                <p>{{ $zzigae->name }} - {{ $zzigae->type }} - {{ $zzigae->soup }}</p>    
            @endforeach
        </div>
    </div>
@endsection