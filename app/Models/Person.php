<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Person extends Model
{
    use HasFactory;
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'persons';
  
    /**
     * Write code on Method
     *
     * @return response()
     */

    public $timestamps = false;
    protected $fillable = [
        'type'
    ];
}