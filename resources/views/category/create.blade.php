<x-main>
    <div class="container">
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <h1>Crea una nuova categoria</h1>

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
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Categoria"
                    value="{{ old('category') }}">

                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</x-main>
