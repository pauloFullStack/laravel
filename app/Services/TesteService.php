<?php


namespace App\Services;

use App\Repositories\TesteRepository;

class TesteService
{

    protected $testeRepository;

    public function __construct(TesteRepository $testeRepository)
    {
        $this->testeRepository = $testeRepository;
    }

    public function repository()
    {
        return $this->testeRepository;
    }

    public function store($data)
    {
        
        return $this->repository()->create($data);
    }

    public function all()
    {
        return $this->repository()->findByDataAll()->all();
    }

    public function delete($id)
    {
        return $this->repository()->findOrFail($id)->delete();
    }

    public function update($data)
    {
        $teste = $this->repository()->findByData($data['id']);
        return $teste->update([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'gender' => $data['gender']
        ]);
    }
    //CRIAR A NOVA LINHA SALVA NA TABELA, AI NÃO TEM NECESSIDADE DE DAR REFRESH NA PAGINA...
    //VER QUE TIPO DE SISTEMA VAI FAZER... E ACHAR UM TEMPLATE...
}
