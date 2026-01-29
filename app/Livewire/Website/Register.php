<?php

namespace App\Livewire\Website;

use App\Models\Panel;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public function mount(){
        if(auth()->check()){
            
        }
        if(auth()->check() &&auth()->user()->hasPanel('admin')){
            return redirect()->route('admin.dashboard');
        }elseif(auth()->check() && auth()->user()->hasPanel('client')){
            return redirect()->route('client.dashboard');
        }
    }
    public function render()
    {
        return view('livewire.website.register')->layout('layouts.website');
    }
    public function register(){
        $this->validate([
              'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email,' . $this->email,
        'password' => 'required|min:8',
        'confirm_password' => 'required|min:8|same:password',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        $user->assignRole('user');
        $panel_id= Panel::where('name','client')->first()->id;
        if(!$panel_id){
            $user->delete();
            return $this->dispatch('toast', [
                'type' => 'error',
                'message' => 'Internal Server Error'
            ]);
        }

        $user->panels()->sync($panel_id);
        auth()->login($user);
        return redirect()->route('client.dashboard');
        sleep(2);
        $this->dispatch('toast', [
            'type' => 'success',
            'message' => 'User registered successfully'
        ]);
    }
   
}
