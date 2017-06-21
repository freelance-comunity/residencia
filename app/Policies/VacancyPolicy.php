<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Models\Vacancy;

class VacancyPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Vacancy $vacancy)
    {
        return $user->id === $vacancy->user_id;
    }
}
