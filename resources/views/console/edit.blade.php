<x-layout header="Modifica la tua console preferita">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('console.update', compact('console')) }}" method="POST" class="p-5 shadow" enctype="multipart/form-data">

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
                    
                    <!-- override metodo http -->
                    @method('put')


                    <div class="mb-3">
                        <label for="name" class="form-label">Nome della console <span class="text-danger small">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $console->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand <span class="text-danger small">*</span></label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ $console->brand }}">
                    </div>

                    <div class="mt-3 text-center">
                        <label for="actualLogo" class="form-label">Logo attuale</label> <br>
                        <img width="200" src="{{ Storage::url($console->logo) }}" alt="">

                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo <span class="text-danger small">*</span></label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>

                    <div class="mb-3">
                        @if(session('gameDetached'))
                            <div class="alert alert-success">
                                {{ session('gameDetached') }}
                            </div>
                        @endif
                        <label for="" class="form-label">Giochi live <span class="text-danger small">*</span></label><br>
                        

                        <ul>
                            @foreach($console->games as $game)
                                <li>{{ $game->title}}, prodotto da {{ $game->producer }}
                                    <a href="{{ route('console.detach', compact('console', 'game')) }}" class="btn" title="Cancella relazione">
                                        <i class="fs-3 fa-solid fa-square-xmark text-danger"></i>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                        
                       
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Giochi disponibili <span class="text-danger small">*</span></label>
                        <br>
                        
                        @foreach($games->diff($console->games) as $game)
                            <input type="checkbox" id="{{ $game->id }}" name="games[]" value="{{ $game->id }}">
                            <label class="form-label" for="{{ $game->id }}">{{ $game->title }}</label><br>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Cenni storici <span class="text-danger small">*</span></label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{ $console->description }}</textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-dark">Modifica la tua console</button>
                    <a href="{{ route('console.index') }}"type="submit" class="btn btn-outline-dark">Torna indietro</a>
                </form>
            </div>
        </div>
    </div>

</x-layout>