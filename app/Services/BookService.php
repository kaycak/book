<?php 
namespace App\Services;
use App\Models\Book;

class BookService
{
	public function __construct(Book $book){
		$this->book = $book;
	}

	public function getBook()
	{
		return $this->book->get();
	}
}

?>