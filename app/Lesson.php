<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }

    /**
     * Scope query to given beginner lessons
     *
     * @param  Builder $query
     *
     * @return Builder
     */
    public function scopeBeginner($query)
    {
        return $query->where('difficulty', 'beginner');
    }
}
