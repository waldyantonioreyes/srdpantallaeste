<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Userscreen;

class Userscreens extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $username, $user_id, $password;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.userscreens.view', [
            'userscreens' => Userscreen::latest()
						->orWhere('username', 'LIKE', $keyWord)
						->orWhere('user_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->username = null;
		$this->user_id = null;
    }

    public function store()
    {
        $this->validate([
		'username' => 'required',
		'user_id' => 'required',
        'password' => 'required',
        ]);

        Userscreen::create([ 
			'username' => $this-> username,
			'user_id' => $this-> user_id,
            'password' => $this-> password
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Userscreen Successfully created.');
    }

    public function edit($id)
    {
        $record = Userscreen::findOrFail($id);

        $this->selected_id = $id; 
		$this->username = $record-> username;
		$this->user_id = $record-> user_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'username' => 'required',
		'user_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Userscreen::find($this->selected_id);
            $record->update([ 
			'username' => $this-> username,
			'user_id' => $this-> user_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Userscreen Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Userscreen::where('id', $id);
            $record->delete();
        }
    }
}
