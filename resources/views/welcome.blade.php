<x-layout header="Gaming Blog">

    @if(session('gameCreated'))
            <div class="alert alert danger">
                {{ session('gameCreated') }}
            </div>
    @endif

</x-layout>
