<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class ListingPerson extends Model
{
    use HasFactory;
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'listingPersons';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'created_at',
        'updated_at',
        'type',
        'service',
        'filiere',
        'TREC',
        'raison',
        'pole',
    ];
}