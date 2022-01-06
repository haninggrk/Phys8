<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8Category;

class AdminDataCategories extends Component
{
    public $editAdminDataCategoryIndex = null;
    public $AdminDataCategory;
    public $search;

    public function render()
    {
        $this->AdminDataQuestion = Fis8Category::with('level')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-category', [
            'AdminDataCategory' => $this->AdminDataCategory,
        ]);
    }

    public function editAdminDataCategory($AdminDataCategoryIndex)
    {
        $this->editAdminDataCategoryIndex = $AdminDataCategoryIndex;
    }

    public function saveAdminDataCategory($AdminDataCategoryIndex)
    {
        $cekUser = $this->AdminDataCategory[$AdminDataCategoryIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8Category::find($cekUser['id']);
            $getUser->update([
                'name' => $cekUser['name'],
                'description' => $cekUser['description'],
            ]);
        }
        $this->editAdminDataCategoryIndex = null;
    }
}
