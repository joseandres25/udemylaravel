<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'first_name', 'email', 'password', 'last_name'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

        public function contacts()
        {
            return $this->hasMany('Contact::Class');
        }

        public function getContactAttribute()
        {

            $contacts = $this->contacts()->where('user_id',$this->id)->get();

            return $contacts;

        }
    }
