<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'book_1';

    protected $fillable = [
    	'page_number',
    	'header',
    	'sub_header',
    	'text',
    ];
}
