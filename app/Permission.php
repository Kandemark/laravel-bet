<?php 
namespace VanguardLTE;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name', 
        'display_name', 
        'description'
    ];

    protected $casts = ['removable' => 'boolean'];

    public static function boot()
    {
        parent::boot();
    }

    // 🔥 Add this method
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
