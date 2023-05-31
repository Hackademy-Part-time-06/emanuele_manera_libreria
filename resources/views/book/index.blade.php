<x-main>

    <!-- sessione corretta creazione libro -->
    @if (session('success'))
        Libro aggiunto alla lista
    @endif

    <!-- stampare elenco libri -->
    <ul>
        @forelse ($books as $book)
            <li>{{ $book->title }}</li>
        @empty
            <p>Nessun libro presente</p>
        @endforelse
    </ul>

    <div>
        <a class="btn btn-primary" href="{{route('book.create')}}" role="button">Crea un nuovo libro</a>
    </div>

</x-main>
