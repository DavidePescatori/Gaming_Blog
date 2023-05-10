<x-layout header="Inserisci la tua console preferita">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('console.store') }}" method="POST" class="p-5 shadow" enctype="multipart/form-data">

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
                        <label for="name" class="form-label">Nome della console <span class="text-danger small">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand <span class="text-danger small">*</span></label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand') }}">
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo <span class="text-danger small">*</span></label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Cenni storici <span class="text-danger small">*</span></label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{ old('description') }}</textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-dark">Inserisci la tua console</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>