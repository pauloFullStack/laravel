<?php


namespace App\Services\CssExamples;

use App\Repositories\CssExamples\CssExamplesRepository;
use Storage;

class CssExamplesService
{

    protected $repository;

    public function __construct(CssExamplesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store(object $request)
    {
        $data = $request->only('title', 'position', 'code_image');

        $data['image'] = 'css/default.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('css');
        }

        return $this->repository()->create($data);
    }

    public function all($paginate = null)
    {
        return $this->repository()->findByDataAll()->paginate(6);
    }

    public function delete($id)
    {

        $imgPath = $this->repository()->find($id)->image;
        $resultDeleteImg = $this->repository()->findOrFail($id)->delete();
        if ($resultDeleteImg && $imgPath != 'css/default.png') {
            Storage::disk('public')->delete($imgPath);
            return $resultDeleteImg;
        }
        return $resultDeleteImg;
    }

    public function update(object $request)
    {

        $data = $request->only('title', 'position', 'code_image', 'id');

        $data['image'] = false;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('css');

            if ($this->repository()->find($data['id'])->image && $data['image'] && $this->repository()->find($data['id'])->image != 'css/default.png') {
                Storage::disk('public')->delete($this->repository()->find($data['id'])->image);
            }
        } else {
            $data['image'] = 'css/default.png';
        }

        $update = $this->repository()->findByData($data['id']);
        if ($data['image']) {
            $result = $update->update([
                'position' => $data['position'],
                'title' => $data['title'],
                'image' => $data['image'],
                'code_image' => $data['code_image'],
            ]);
        } else {
            $result = $update->update([
                'position' => $data['position'],
                'title' => $data['title'],
                'code_image' => $data['code_image'],
            ]);
        }


        if ($result) {
            return [
                'id' => $data['id'],
                'position' => $data['position'],
                'title' => $data['title'],
                'image' => $data['image'],
                'code_image' => $data['code_image'],
            ];
        }
    }

    public function search(string $search)
    {

        $dataSearch = $this->repository()->findBySearch($search)->paginate(6);
        return $dataSearch;
    }
}
