<?php

namespace App\Services;

use App\Repositories\Interfaces\UserInterface;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class UserService implements UserInterface
{
    /**
     * @var UserRepository
     */
    public $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function count() :int
    {
        return $this->repo->count();
    }


}
