<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Fuel;

class Fuels extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $type, $price;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.fuels.view', [
            'fuels' => Fuel::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('type', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
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
		$this->type = null;
		$this->price = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'type' => 'required',
		'price' => 'required',
        ]);

        Fuel::create([ 
			'name' => $this-> name,
			'type' => $this-> type,
			'price' => $this-> price
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Fuel Successfully created.');
    }

    public function edit($id)
    {
        $record = Fuel::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->type = $record-> type;
		$this->price = $record-> price;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'type' => 'required',
		'price' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Fuel::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'type' => $this-> type,
			'price' => $this-> price
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Fuel Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Fuel::where('id', $id);
            $record->delete();
        }
    }
}
