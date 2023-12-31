<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RegisterUser extends Component
{
    use WithPagination;
    public $name, $email, $avatar;
    public $perPage = 6;
    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    function refreshInputs()
    {
        $this->name = '';
        $this->email = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
        ]);

        $saved = User::create($data);

        if ($saved) {
            $this->reset();
            return session()->flash('status', 'User created!');
        }
    }
    public function render()
    {
        $term = "%" . $this->query . "%";
        $users = User::where('name', 'LIKE', $term)->orderByDesc('id')->paginate($this->perPage);
        return view('livewire.register-user', compact(['users']));
    }
}
