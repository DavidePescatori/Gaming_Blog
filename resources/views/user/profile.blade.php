<x-layout header="Profilo utente">

    
    <div class="container my-5">
        <div class="row justify-content-center">


            @foreach(Auth::user()->consoles->sortByDesc('created_at') as $console)
                    <div class="col-12 col-md-4 my-3">
                                <div class="card">
                                        <img src="{{ Storage::url($console->logo) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $console->name }}</h5>
                                            <p class="small fst-italic text-nuted">{{ $console->brand }}</p>

                                            
                                            <hr>
                                            <!-- <p class="small">Creato da: {{ $console->user_id ? $console->user->name : 'Utente Guest' }}</p> -->
                                            <p class="small">Creato da: {{ $console->user->name ?? 'Utente Guest' }}</p>
                                            <hr>
                                            

                                            <div class="mt-3 d-inline">
                                                <a href="{{ route('console.show', compact('console')) }}" class="btn btn-info mt-3">Scopri di più</a>

                                                @if($console->user_id && $console->user->id == Auth::user()->id)
                                                    <a href="{{ route('console.edit', compact('console')) }}" class="btn btn-warning mt-3">Modifica</a>
                                                    <form method="POST" action="{{ route('console.destroy', compact('console')) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                </div>

                    </div>
            @endforeach
        </div>
    </div>

</x-layout>