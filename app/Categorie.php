<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Categorie extends Model
    {
        //
        public function contacts()
        {
            return $this->hasMany('Contact::class');
        }
    }
