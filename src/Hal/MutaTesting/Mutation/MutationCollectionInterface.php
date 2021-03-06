<?php

namespace Hal\MutaTesting\Mutation;

interface MutationCollectionInterface extends \IteratorAggregate
{

    public function all();

    public function push(MutationInterface $mutation);
    
    public function getSurvivors();

    public function count();
}
