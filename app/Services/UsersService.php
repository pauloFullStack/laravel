<?php


namespace App\Services;

use App\Repositories\UsersRepository;
use App\Services\SelectAbstract;

class UsersService extends SelectAbstract
{
    /**
     * @var UsersRepository
     */
    protected $repository;


    public function __construct(
        UsersRepository $repository
    ) {
        parent::__construct($repository);
        $this->repository = $repository;
    }
}
