<?php


namespace App\Services\Editor;

abstract class EditorAbstract
{

     protected $repository;

    public function __construct($repository)
    {

        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function update($data)
    {
        $editorUpdate = $this->repository()->findByData($data['id']);
        $result = $editorUpdate->update([
            'title' => $data['title'],
            'code' => $data['code'],
            'description' => $data['description'],
            'position' => $data['position']
        ]);

        if ($result) {
            return [
                'id' => $data['id'],
                'title' => $data['title'],
                'code' => $data['code'],
                'description' => $data['description'],
                'position' => $data['position']
            ];
        }
    }
}
