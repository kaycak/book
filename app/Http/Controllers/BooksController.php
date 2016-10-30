<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;

class BooksController extends Controller
{
    public function index($locale, BookService $bookService) {
    	\App::setLocale($locale);
    	$book = $bookService->getBook();
    	return view('book.index', ['book' => $book]);
    }
}
