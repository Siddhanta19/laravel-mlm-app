<?php

namespace App\Actions\Fortify;

use App\Actions\Utility\IncomeDistributer;
use App\Actions\Utility\IncrementReferCount;
use App\Actions\Utility\ReferCodeGenerator;
use App\Models\Team;
use App\Models\User;
use Laravel\Jetstream\Jetstream;
use App\Rules\ReferrersCodeExists;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    protected $referCodeGenerator;
    protected $incrementReferCount;

    use PasswordValidationRules;


    public function __construct(ReferCodeGenerator $referCodeGenerator, IncrementReferCount $incrementReferCount)
    {
        $this->referCodeGenerator = $referCodeGenerator;
        $this->incrementReferCount = $incrementReferCount;

    }

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            "my_referrer's_code" => [User::count() > 0 ? new ReferrersCodeExists : '']
        ])->validate();



        return DB::transaction(function () use ($input) {
            return tap(
                User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'my_refer_code' => $this->referCodeGenerator->getUniqueReferCode(),
                    "my_referrer's_code" => $input['my_referrer\'s_code'],

                ]),
                function (User $user) use ($input) {
                    $this->createTeam($user);
                    $this->incrementReferCount->incrementReferCount($input["my_referrer's_code"]);
                }
            );
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }
}