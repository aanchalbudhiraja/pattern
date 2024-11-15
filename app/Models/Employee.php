<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = ['name', 'parent_id'];


    public function children()
    {
        return $this->hasMany(Employee::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Employee::class, 'parent_id');
    }
}
?>