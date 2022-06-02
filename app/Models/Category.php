<?php

namespace App\Models;

class Category extends Base
{

    protected $fillable = [
        'title',
        'code',
        'level',
        'direct_parent_id',
        'root_id',
    ];

    public function directParent()
    {
        return $this->belongsTo(Category::class, 'direct_parent_id');
    }

    public function root()
    {
        return $this->belongsTo(Category::class, 'root_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'direct_parent_id');
    }

    // make local scope for filtering
    public function scopeMainParent($query)
    {
        return $query->where('direct_parent_id', null);
    }
}
