<!-- stampare elenco categorie -->
@forelse ($categories as $category)
    <li>{{ $category->name }}</li>
@empty
    <p>Nessuna categoria presente</p>
@endforelse