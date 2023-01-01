<?php

namespace App\Models;

use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use App\Actions\Utility\IncomeDistributer;
use Laravel\Fortify\TwoFactorAuthenticatable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    // protected $incomeDistributer;

    // public function __construct(IncomeDistributer $incomeDistributer)
    // {
    //     $this->incomeDistributer = $incomeDistributer;
    // }


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'my_refer_code',
        'my_referrer\'s_code',
        'wallet',
        'refer_count'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    /**
     * Get the bank associated with the user.
     */
    public function bank()
    {
        return $this->hasOne(Bank::class, 'user_id');
    }



    public static function boot()
    {
        parent::boot();

        $incomeDistributer = new IncomeDistributer;

        static::updated(function ($user) use ($incomeDistributer) {
            if ($user->isDirty('active_status')) {
                $incomeDistributer->incomeDistribution($user->{"my_referrer's_code"});
            }
        });
    }
}