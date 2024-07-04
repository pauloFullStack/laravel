<?php


namespace App\Services;

//Terminar de implementar class abastract, metodo abaixo nas services, ajeitar as services... com esses metodos comentados..
abstract class ServiceAbstract implements ServiceInterfaceRepository
{    
    abstract public function all($paginate = null);
    abstract public function store(array $data);
    abstract public function update(array $data);
    abstract public function delete($id);
}
