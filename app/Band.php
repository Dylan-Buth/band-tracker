<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();

        static::deleting(function($band) {
            $band->albums()->delete();
        });
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function getId()
    {
        return $this->id;
    }
}