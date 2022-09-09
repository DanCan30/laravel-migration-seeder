@extends("layouts.mainLayout")

@section("main-content")

    <ol>
        @forelse ($trains as $train)
            
                <li @if ($train->is_train_deleted) 
                    class="deleted"
                    @endif
                >
                    Train n°{{ $train->train_code }} - {{ $train->agency }};

                    <ul>
                        <li>From: {{ $train->departure_railway }} To: {{ $train->arrival_railway }}</li>
                        <li>Departure at: {{ $train->departure_hour }}</li>
                        <li>Estimated arrival at: {{ $train->arrival_hour }}</li>
                        @if ($train->is_train_late)
                            <li class="late">The train is late.</li>
                        @elseif ($train->is_train_deleted)
                            <li class="clear">The train has been deleted.</li>
                        @endif
                    </ul>

                </li>

            
        @empty
            <h3>There are no more trains for today.</h3>
        @endforelse
    </ol>

@endsection