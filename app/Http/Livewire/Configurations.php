<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Configuration;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class Configurations extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $bankname, $headercolor, $usuarios, $domain, $port;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%'.$this->keyWord .'%';
         
      
        if ((auth()->user()->type)==1) {
            return view('livewire.configurations.view', [
                'configurations' => Configuration::latest()
                ->orWhere('user_id', 'LIKE', $keyWord)
                ->orWhere('bankname', 'LIKE', $keyWord)
                ->orWhere('headercolor', 'LIKE', $keyWord)
                ->paginate(10),
                            
            ]);
        } else {
             return view('livewire.configurations.view', [
            'configurations' => Configuration::where('user_id', auth()->user()->id) // Filtra por el ID del usuario logueado
                ->paginate(10),
        ]);
        }
        
        
        
    }

    public function mount(Request $request)
    {
        // $this->url = $request->getHost();
        $this->domain = $request->getHost();
        $this->port = $request->getPort();
    
        // Concatenar el dominio y el puerto si es diferente del puerto predeterminado (80 para HTTP, 443 para HTTPS)
        if ($this->port && !in_array($this->port, [80, 443])) {
            $this->domain .= ":" . $this->port;
        }
        // Consulta a la base de datos para obtener los usuarios
        $this->usuarios = User::where('id', auth()->user()->id)->get();
       // En tu método del controlador o componente
        $this->headercolor = Configuration::latest('created_at')->value('headercolor');

        // dd($this->usuarios);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->user_id = null;
		$this->bankname = null;
		$this->headercolor = null;
    }

    public function store()
    {
        // dd($this->headercolor);
        $this->validate([
		// 'user_id' => 'required',
		'bankname' => 'required',
		'headercolor' => 'required',
        ]);

        Configuration::create([ 
            
			// 'user_id' => $this-> user_id,
            'user_id' => auth()->user()->id,
			'bankname' => $this-> bankname,
			'headercolor' => $this-> headercolor
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Configuration Successfully created.');
    }

    public function edit($id)
    {
        $record = Configuration::findOrFail($id);
        $this->usuarios = User::where('id', auth()->user()->id)->get();
        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->bankname = $record-> bankname;
		$this->headercolor = $record-> headercolor;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'user_id' => 'required',
		'bankname' => 'required',
		'headercolor' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Configuration::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'bankname' => $this-> bankname,
			'headercolor' => $this-> headercolor
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Configuration Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Configuration::where('id', $id);
            $record->delete();
        }
    }
}
