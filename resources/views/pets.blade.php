<h1>Tölsd ki a mezőket</h1>
<form action="submit-animal" method ="post">
    {{csrf_field()}}
    <p>
        <label for="">Név:</label>
        <input type="text" name="name" placeholder="Név">

    </p>
    <p>
        <label for="">Fajta:</label>
        <input type="text" name="type" placeholder="Típus">
        
    </p>
    <p>
        <label for="">Ivartalanított:</label>
        <input type="text" name="quanity" placeholder="Kiszerelés">
        
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>