<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest; // importo BookRequest 
use App\Models\Book; // importo il Model Book 
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookIndex () {

        $books = Book::all(); // metodo statico per richiamare tutti i libri presenti in tabella 

        return view('books.index', compact('books')); // compact('books') uguale a ['books'=>$books]
    }

    public function bookCreate () {

        return view('books.create');
    }

    public function bookStore (BookRequest $request) { // BookRequest injection

        // creazione libro con metodo: new Book() 
        // rotta: Route::post('libri/salva', [BookController::class, 'bookStore'])->name('book.store'); 
        /* $book = new Book();
        $book->title = "Titolo di test";
        $book->author = "Autore di test"; 
        $book->year = 1970; 
        $book->pages = 999; 
        $book->save();

        dd('Libro di test'); */ 


        $path_image = 'No image'; // gestione errore variabile 

        if ($request->hasFile('image') && $request->file('image')->isValid()) { 
            $path_name = $request->file('image')->getClientOriginalName(); 
            // $path_extension = $request->file('image')->getClientOriginalExtension(); 
            $path_image = $request->file('image')->storeAs('public/images', 'img-' . $path_name); 
        } 
        // else { 
        //      return 'Errore';
        // }


        // creazione libro con metodo: Book::create([]) 
        
        // $bookTest = 
        Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year,
            "pages" => $request->pages,
            "image" => $path_image
        ]); 

        // dd($bookTest); 

        // blocco di validazione dati form 
        /* $request->validate([
            "title" => "required|string",
            "pages" => "required|numeric",
            "author" => "required|string",
            "year" => "required|numeric",
        ]); */

        return redirect()->route('book.index')->with(['success' => 'Libro: Testo del messaggio']);
    }

    public function bookShow (Book $book) { // Book injection 

        /* $searchBook = Book::find($book);
        if (!$searchBook) {
            abort(404);
        } */

        /* if (is_null($searchBook)) {
            abort(404);
        } */

        return view('books.show', ['book'=>$book]);
    }
}
