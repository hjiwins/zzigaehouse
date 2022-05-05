@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Zzigae List
            </div>
            @foreach ($zzigaes as $zzigae)
                <a href="{{route('zzigaes.show', $zzigae->id)}}">
                    <p>{{ $zzigae->name }} - {{ $zzigae->type }} - {{ $zzigae->soup }}</p>    
                </a>
            @endforeach
        </div>
    </div>
@endsection

<script>
    for (let index = 0; index < array.length; index++) {
        const element = array[index];
        
    }
</script>