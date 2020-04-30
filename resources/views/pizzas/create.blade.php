@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create Your Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Your Pizza Type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiine</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose Your Base</label>
        <select name="base" id="base">
            <option value="cheesy crust">Chessy Crust</option>
            <option value="garlic Crust">garlic Crust</option>
            <option value="thin crust">Thin Crust</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label >Extra Toppings </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
            <input type="checkbox" name="toppings[]" value="garlics">Garlics <br/>
        </fieldset>
        <input type="submit" value = "order pizza">
    </form>
</div>
@endsection
  