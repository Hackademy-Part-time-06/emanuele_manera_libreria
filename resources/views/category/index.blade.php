<x-main>

    <!-- sessione corretta creazione libro -->
    @if (session('success'))
        Categoria aggiunta alla lista
    @endif

    <!-- stampare elenco categorie -->
    <ul>
        @forelse ($categories as $category)
            <li>{{ $category->name }}</li>
        @empty
            <p>Nessuna categoria presente</p>
        @endforelse
    </ul>

    <div>
        <a class="btn btn-primary" href="{{route('category.create')}}" role="button">Crea una nuova categoria</a>
    </div>
    
</x-main>
