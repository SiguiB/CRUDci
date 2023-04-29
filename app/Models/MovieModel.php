<?php 
namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model{
    protected $table      = 'movies';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'synopsis','year','cover'];

  
}
