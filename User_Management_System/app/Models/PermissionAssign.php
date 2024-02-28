<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionAssign extends Model
{
    use HasFactory;
    protected $table = "permission_assign";

    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    // public function permissions(){
    //     return $this->belongsTo(Permission::class);
    // }
}
