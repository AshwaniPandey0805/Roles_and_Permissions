<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = [
        'role_name',
    ];
    // public $timestaps = false;


//    public function rolePermission(){
//     return $this->belongsToMany(Permission::class,'permission_assign');
//    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
