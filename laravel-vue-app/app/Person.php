<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //参照させたいSQLのテーブル名を指定してあげる
    protected $table = 'articles';


    public function getData()
    {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
}

