<?php

namespace App\Services;

use App\Repositories\Interfaces\UserInterface;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


 class UserService extends BaseService
{
    /**
     * @var UserRepository
     */
   public $repo;

   public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function calculateSum()
    {
        return  $this->repo->calculateSum();
    }

    public function calculateMonth()
    {
        return $this->repo->calculateMonth();
    }

}
