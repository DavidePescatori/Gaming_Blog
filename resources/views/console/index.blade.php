<x-layout header="Tutte le console inserite">

    @if(session('consoleCreated'))
        <div class="alert alert-danger">
            {{ session('consoleCreated') }}
        </div>
    @endif

    @if(session('consoleUpdated'))
        <div class="alert alert-danger">
            {{ session('consoleUpdated') }}
        </div>
    @endif

    @if(session('consoleDeleted'))
        <div class="alert alert-danger">
            {{ session('consoleDeleted') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">

        @if(count($consoles))
            @foreach($consoles as $console)
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                            <img src="{{ Storage::url($console->logo) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $console->name }}</h5>
                                <p class="small fst-italic text-nuted">{{ $console->brand }}</p>

                                <div class="mt-3 d-inline">
                                    <a href="{{ route('console.show', compact('console')) }}" class="btn btn-info mt-3">Scopri di più</a>
                                    <a href="{{ route('console.edit', compact('console')) }}" class="btn btn-warning mt-3">Modifica</a>
                                    <form method="POST" action="{{ route('console.destroy', compact('console')) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                    </form>
                                </div>
                            </div>
                    </div>

                </div>
            @endforeach

        @else
            <div class="col-12">
                <h2>Non è stata inserita nessuna console. Torna più tardi!</h2>
            </div>
        @endif

        </div>
    </div>

</x-layout>