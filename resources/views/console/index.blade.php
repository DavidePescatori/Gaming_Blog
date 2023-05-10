<x-layout header="Tutte le console inserite">
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