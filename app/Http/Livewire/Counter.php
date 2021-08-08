<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $count = 10;
    public $message;
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function delUser($id)
    {
        $this->users = $this->users->filter(function ($value, $key) use ($id) {
            return $value['id'] != $id;
        });

        $user = User::find($id);

        $user->delete();
        session()->flash('flash_message', '削除完了しました');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
