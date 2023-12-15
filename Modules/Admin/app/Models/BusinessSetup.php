<?php

namespace Modules\Admin\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\factories\BusinessSetupFactory;
use App\Models\User;

class BusinessSetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): BusinessSetupFactory
    {
        //return BusinessSetupFactory::new();
    }
    public function provider()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
}
