<?php

namespace App\Repositories;

use App\Produto;
use App\Repositories\RepositoryTrait;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;

class ProdutoRepository implements RepositoryInterface, ProdutoRepositoryInterface
{

    use RepositoryTrait;

    /**
     * @param Produto $model
     */
    public function __construct(Produto $model)
    {
        /** @var Produto $model */
        $this->model = $model;
    }
}
