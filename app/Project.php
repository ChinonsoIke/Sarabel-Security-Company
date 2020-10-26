<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function files() {
        return $this->hasMany(File::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
