<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class PhotoUpload extends Component
{
    use WithFileUploads;
    public User $user;
    public $name, $email, $image;

    public function search()
    {
        $this->resetPage();
    }
    function resetInput()
    {
        $this->image = '';
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    function uploadImage()
    {
        $data = $this->validate(['image' => 'required|image|max:1024']);

        $url = $this->image->storeAs('profile', $this->user->name, 'public');
        // $data['image'] = $url;
        // dd($this->user);
        $uploaded = $this->user->profile()->update(['image' => $url]);

        if ($uploaded) {
            $this->resetInput();
            return session()->flash('status', 'Profile photo uploaded!');
        }
    }

    function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.photo-upload');
    }
}
