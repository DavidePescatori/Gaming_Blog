<x-layout header="Inserisci il tuo videogioco preferito">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('game.store') }}" method="POST" class="p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo videogame</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore</label>
                        <input type="text" name="producer" class="form-control" id="producer">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Breve descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-dark">Inserisci il tuo videogioco</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>