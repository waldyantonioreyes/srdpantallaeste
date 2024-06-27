<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Remittance;

class Remittances extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $buy, $sell;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.remittances.view', [
            'remittances' => Remittance::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('buy', 'LIKE', $keyWord)
						->orWhere('sell', 'LIKE', $keyWord)
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
		$this->name = null;
		$this->buy = null;
		$this->sell = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'buy' => 'required',
		'sell' => 'required',
        ]);

        Remittance::create([ 
			'name' => $this-> name,
			'buy' => $this-> buy,
			'sell' => $this-> sell
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Remittance Successfully created.');
    }

    public function edit($id)
    {
        $record = Remittance::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->buy = $record-> buy;
		$this->sell = $record-> sell;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'buy' => 'required',
		'sell' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Remittance::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'buy' => $this-> buy,
			'sell' => $this-> sell
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Remittance Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Remittance::where('id', $id);
            $record->delete();
        }
    }
}
