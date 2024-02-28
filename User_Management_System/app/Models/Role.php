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
        'role_id',
        'role_name',
    ];
    // public $timestaps = false;


    // public function rolePermissions(){

    //     return $this->belongsToMany(Permission::class,'permission_assign','role_id','permission_id', 'id');
    // }
}
