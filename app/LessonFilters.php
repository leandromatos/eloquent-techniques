<?php

namespace App;

class LessonFilters extends QueryFilter
{
    public function popular($order = 'desc')
    {
        return $this->builder->orderBy('views', $order);
    }

    public function difficulty($level)
    {
        return $this->builder->where('difficulty', $level);
    }

    public function length($order = 'asc')
    {
        return $this->builder->orderby('length', $order);
    }

    public function take($count)
    {
        return $this->builder->limit($count);
    }
}
