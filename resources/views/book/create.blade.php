<x-main>
    <div class="container">
        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <h1>Crea un nuovo libro</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Create Post Form -->

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo"
                    value="{{ old('name') }}">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Numero di pagine</label>
                <input type="number" class="form-control" id="pages" name="pages" placeholder="Pagine"
                    value="{{ old('pages') }}">

            </div>
            <div class="mb-3">
                <label class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Autore"
                    value="{{ old('author') }}">

            </div>
            <div class="mb-3">
                <label class="form-label">Anno prima edizione</label>
                <input type="number" class="form-control" id="year" name="year" placeholder="Anno"
                    value="{{ old('year') }}">

            </div>

            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="image">

            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</x-main>
