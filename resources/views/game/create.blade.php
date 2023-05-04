<x-layout header="Inserisci il tuo videogioco preferito">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('game.store') }}" method="POST" class="p-5 shadow" enctype="multipart/form-data">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo videogame <span class="text-danger small">*</span></label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore <span class="text-danger small">*</span></label>
                        <input type="text" name="producer" class="form-control" id="producer" value="{{ old('producer') }}">
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Immagine di copertina <span class="text-danger small">*</span></label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Breve descrizione <span class="text-danger small">*</span></label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{ old('description') }}</textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-dark">Inserisci il tuo videogioco</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>