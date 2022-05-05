@extends('layouts.app')

@section('content')
<div class="wrapper create-zzigae">
    <h1>Make your zzigae</h1>
    <form action="/zzigaes" method="POST">
        @csrf
        <div class="form-row">
            <label for="name"><i class="fa-solid fa-user-pen"></i></label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <label for="type">Choose zzigae type</label>
        <select name="type" id="type">
            <option value="kimchi">Kimchi</option>
            <option value="budae">Budae</option>
            <option value="soybean">Soybean</option>
            <option value="fish">fish</option>
        </select>
        <label for="soup">Choose soup type</label>
        <select name="soup" id="soup">
            <option value="spicy">spicy</option>
            <option value="vegetable">vegetable</option>
            <option value="anchovy">anchovy</option>
            <option value="beef">beef</option>
        </select>
        <fieldset>
            <label>Extra toppings :</label>
            <div class="checkbox-wrap">
                <input type="checkbox" name="toppings[]" value="cheese">cheese<br>
                <input type="checkbox" name="toppings[]" value="mushroom">mushroom<br>
                <input type="checkbox" name="toppings[]" value="dubu">dubu<br>
                <input type="checkbox" name="toppings[]" value="chili">chili<br>
                <input type="checkbox" name="toppings[]" value="ramyeon">ramyeon<br>
            </div>
            <div class="submit-btn-wrap">
                <input type="submit" value="Order zzigae">
            </div>
        </fieldset>
    </form>
</div>
@endsection