                        @if (Auth::user()->is_favoriting($favorite->id))
                            {!! Form::open(['route' => ['favorites.favorite', $favorite->id], 'method' => 'store']) !!}
                            {!! Form::submit('Favorite', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
                            {!! Form::submit('unFavorite', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif