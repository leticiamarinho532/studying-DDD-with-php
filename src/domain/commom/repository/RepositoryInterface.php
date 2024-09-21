<?php

namespace Leticia\ProjetoEmPhp\domain\commom;

interface RepositoryInterface {
    public function create($entity): void;
    public function update($entity): void;
    public function find(string $id);
    public function findAll(): array;
}