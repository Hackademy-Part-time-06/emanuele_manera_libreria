<!-- stampare elenco libri -->
@forelse ($books as $book)
    <li>{{ $book->title }}</li>
@empty
    <p>Nessun libro presente</p>
@endforelse