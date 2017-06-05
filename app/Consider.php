<?
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consider extends Model
{
	protected $table = 'considers';

    protected $fillable = [
        'id', 'nam','nu','nguon'
    ];

}