<?php

namespace App\Repositories\Interfaces;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Services\BaseService;

interface UserInterface extends BaseInterface
{
    public function calculateSum();

    public function calculateMonth();

}
