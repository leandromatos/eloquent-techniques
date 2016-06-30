<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public static function boot()
    {
        parent::boot();

        static::updating(function ($document) {
            $document->storeAdjustments();
        });
    }

    public function adjustments()
    {
        return $this->belongsToMany(User::class, 'adjustments')
            ->withTimestamps()
            ->withPivot(['before', 'after'])
            ->latest('pivot_updated_at');
    }

    public function storeAdjustments($userId = null, $diff = null)
    {
        $userId = $userId ?: Auth::id();
        $diff   = $diff ?: $this->getAdjustmentsDiff();

        return $this->adjustments()->attach($userId, $diff);
    }

    public function getAdjustmentsDiff()
    {
        $original = $this->fresh()->toArray();
        $changed  = $this->getDirty();

        $before = json_encode(array_intersect_key($original, $changed));
        $after  = json_encode($changed);

        return compact('before', 'after');
    }
}
