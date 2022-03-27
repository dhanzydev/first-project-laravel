<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','title','author','year','condition','status','quantity','photo','description','slug'
    ];

    protected $table = 'books';
    
    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class,'category_id');
    }
}
