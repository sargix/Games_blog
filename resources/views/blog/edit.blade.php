@extends('layout.main')

@section('content')
<div class="container pt-3"></div>
<h1>Edycja gry</h1>
<div class="container pt-3"></div>
<form action="{{ route('game.edit', $id) }}" method="post">
  <div class="form-group">
    <h4 class="text-primary">Tytuł:</h4>
    <input type="text" class="form-control" placeholder="Wpisz tytuł" name="title">
  </div>
  <div class="form-group">
    <h4 class="text-primary">Gatunek:</h4>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="1"> RPG
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="2"> FPS
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="3"> Symulacyjne
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="4"> Przygodowe
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="5"> TPP
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="6"> Zręcznościowe
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="7"> Fabularne
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="8"> Sportowe
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="9"> Strategiczne
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="10"> Logiczne
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="11"> Wyścigowe
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="genre" value="12"> Strategiczne
        </label>
    </div>    
  </div>
  <div class="form-group">
    <h4 class="text-primary">Wydawca:</h4>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="1"> CD Projekt RED
        </label>
    </div>       
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="2"> Ubisoft
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="3"> Techland
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="4"> Naughty Dog
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="5"> Santa Monica 
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="6"> Rockstar Games 
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="7"> From Software 
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="8"> EA 
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="8"> Bethesda 
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="9"> Konami
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="10"> Capcom
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="11"> SEGA
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="12"> Bandai Namco
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="13"> Telltale Games
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="14"> 2K Games
        </label>
    </div>    
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="publisher" value="15"> Mojang Studios
        </label>
    </div>
  </div>
  <div class="form-group">
    <h4 class="text-primary">Data wydania:</h4>
      <input type="date" class="form-control" placeholder="Wpisz datę wydania" name="date">
  </div>
  <div class="form-group">
    <h4 class="text-primary">Platforma:</h4>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps3" value="PS3"> PS3
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps4" value="PS4"> PS4
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="ps5" value="PS5"> PS5
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="pc" value="PC"> PC
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="x360" value="X360"> X360
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="xone" value="XONE"> XONE
        </label>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="xsx/s" value="XSX/S"> XSX/S
        </label>
    </div>
  </div>
  <div class="form-group">
    <h4 class="text-primary">Opis:</h4>
    <input type="text" class="form-control" placeholder="Wpisz opis" name="description">
  </div>
  <div class="form-group">
    <h4 class="text-primary">Ocena:</h4>
    <input type="number" class="form-control" placeholder="1 - 10" name="score" min="0" max="10">
  </div>
  <button type="submit" class="btn btn-primary">Edytuj</button>
</form>
@endsection
