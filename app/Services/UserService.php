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

    public function topDonor()
    {
        return $this->repo->topDonor();
    }
    public function paginate()
    {
        return $this->repo->paginate();
    }
    public function allUsers()
    {
        $formattedData = [];
        $items = $this->repo->allUsers();
        foreach($items as $item){
            $formattedData[] = [$item->Date, $item->Amount];
        }
        return $formattedData;
    }

}
