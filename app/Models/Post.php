<?php
namespace App\Models;

use App\Http\Controllers\Comments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $table = 'posts';
    use HasFactory;
    
    const UPDATED_AT = null;
    const CREATED_AT = null;
    
}
