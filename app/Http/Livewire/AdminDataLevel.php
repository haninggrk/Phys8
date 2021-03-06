<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8Level;

class AdminDataLevel extends Component
{
    public $editAdminDataLevelIndex = null;
    public $AdminDataLevel;
    public $search;

    public function render()
    {
        $this->AdminDataLevel = Fis8Level::with('category')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-level', [
            'AdminDataLevel' => $this->AdminDataLevel,
        ]);
    }

    public function editAdminDataLevel($AdminDataLevelIndex)
    {
        $this->editAdminDataLevelIndex = $AdminDataLevelIndex;
    }

    public function saveAdminDataLevel($AdminDataLevelIndex)
    {
        $cekUser = $this->AdminDataLevel[$AdminDataLevelIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8Level::find($cekUser['id']);
            $getUser->update([
                'name' => $cekUser['name'],
                'thumbnail' => $cekUser['thumbnail'],
                'description' => $cekUser['description'],
                'score_reward' => $cekUser['score_reward'],
                'ticket_reward' => $cekUser['ticket_reward'],
                'money_reward' => $cekUser['money_reward'],
                'maximum_time' => $cekUser['maximum_time'],
                'fis8_category_id' => $cekUser['category']['id'],
            ]);
        }
        $this->editAdminDataLevelIndex = null;
    }
}
