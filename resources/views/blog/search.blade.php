@extends('layout.main')

@section('content')
    <div class="container pt-3"></div>
    <div class="container pt-3"></div>
    <h1>Wyszukiwarka gier</h1>
    <div class="container pt-3"></div>
    <form action="{{ route('game.search') }}" method="post">
        <div class="form-group">
            <label for="search">Wyszukaj grę:</label>
            <input type="text" class="form-control" placeholder="Wpisz tytuł" name="search">
        </div>
        <button type="submit" class="btn btn-primary">Wyszukaj</button>
    </form>
    
    <div class="container pt-3"></div>
    <div class="container pt-3"></div>
    <div class="container pt-3"></div>
    <div class="container pt-3"></div>

    @if (!empty($searchGames))
    <div class="alert alert-primary">
        Znaleziono wyników: {{ $countResults }}
      </div>
        @foreach ($searchGames as $game)
        <div class="container pt-3"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Nr: {{ $loop->iteration }}.</h4>
                            <h2 class="card-title">Tytuł: {{ $game->title }}</h2>
                            <h5 class="card-title">Platformy: {{ $game->platform }}</h5>
                            <h5 class="card-title">Data wydania: {{ $game->publicate_date }}</h5>
                            <a href="{{ route('game.edit.form', $game->id) }}" class="btn btn-dark">Edytuj</a>
                            <a href="{{ route('game.show', $game->id) }}" class="btn btn-info">Zobacz</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{ $game->id }}">
                                Usuń 
                              </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="myModal{{ $game->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Usuń wpis</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Czy na pewno chcesz usunąć ten wpis?
                    </div>
                    <div class="modal-footer">
                      <a href="{{ route('game.delete', $game->id) }}" class="card-link">Usuń</a>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
        @else
        <div></div>
    @endif
@endsection
