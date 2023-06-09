<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keranjang extends Model
{
    use SoftDeletes, HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'user_id'
    ];

    public function itemKeranjang() : HasMany
    {
        return $this->hasMany('App\Models\ItemKeranjang');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
