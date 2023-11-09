<h1>Tölsd ki a mezőket</h1>
@if($errors-> any())
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>

@endif
<form action="add-drink" method ="post">
    {{csrf_field()}}
    <p>
        <label for="">Név:</label>
        <input type="text" name="name" placeholder="Név">

    </p>
    <p>
        <label for="">Típus:</label>
        <input type="text" name="type" placeholder="Típus">
        
    </p>
    <p>
        <label for="">Kiszerelés:</label>
        <input type="text" name="quantity" placeholder="Kiszerelés">
        
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>