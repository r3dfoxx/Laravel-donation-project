<?php

namespace App\Repositories\Interfaces;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Services\BaseService;

interface UserInterface extends BaseInterface
{

    public function calculateMonth();

    public function topDonor();

    public function paginate();

    public function filterData();

}
