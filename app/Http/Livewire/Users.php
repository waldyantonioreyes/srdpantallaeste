<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Configuration;
use Illuminate\Support\Facades\Auth;

class Users extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $email, $password, $password_confirmation, $token, $two_factor_secret, $two_factor_recovery_codes, $two_factor_confirmed_at, $type;
    public $domain, $port;
    public $users =[] ; 
    public $filtro =[];
    public $updateMode = false;

    public $bankname, $headercolor;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        
            // if ((auth()->user()->type)==1) {//si el usuario es administrador salen todos los usuarios
            //     # code...
                
            //     $this->filtro = User::where('name', 'like', '%'.$this->keyWord.'%')->get();
            //     $this->users = $this->filtro->whereNotIn('type', 1);
            //     // dd($this->filtro);
            //     return view('livewire.users.view');   

            //     } else {
            //     # code...
            //     return view('livewire.users.view', [
            
            // $this->users = User::where('id', auth()->user()->id) // Filtra por el ID del usuario logueado
            //     ->get(),
            // ]);
            // }
            if (auth()->check() && auth()->user()->type == 1) {//si el usuario es administrador salen todos los usuarios
                # code...
                
                $this->filtro = User::where('name', 'like', '%'.$this->keyWord.'%')->get();
                $this->users = $this->filtro->whereNotIn('type', 1);
                // dd($this->filtro);
                return view('livewire.users.view');   

                } elseif(auth()->check() && auth()->user()->type != 1) {
                # code...
                return view('livewire.users.view', [
            
            $this->users = User::where('id', auth()->user()->id) // Filtra por el ID del usuario logueado
                ->get(),
            ]);
            }else{
                return view('livewire.users.view');
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
       
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->email = null;
		$this->token = null;
        $this->password = null;
		$this->two_factor_secret = null;
		$this->two_factor_recovery_codes = null;
		$this->two_factor_confirmed_at = null;
		$this->type = null;
    }

    public function store()
    {
        $this->validate([
		// 'name' => 'required',
		// 'email' => 'required',
        // 'password'=>'required',
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'bankname' => 'required',
		    'headercolor' => 'required',
        ]);

        // User::create([ 
		// 	'name' => $this-> name,
		// 	'email' => $this-> email,
		// 	'token' => $this-> token,
        //     'password' => Hash::make($this->password),
        //     'token'=> $randomString = Str::random(20),
		// 	'type' => $this-> type
        // ]);

        // Crear el usuario
        $user = User::create([ 
            'name' => $this->name,
            'email' => $this->email,
            'token' => $this->token,
            'password' => Hash::make($this->password),
            'token' => Str::random(20),
            'type' => $this->type
        ]);

        // Crear la configuración asociada al usuario recién creado
        Configuration::create([ 
            'user_id' => $user->id, // Asociar la configuración al usuario recién creado
            'bankname' => $this->bankname,
            'headercolor' => $this->headercolor
        ]);
        if(Auth::user() && Auth::user()->type == 1){
            $this->resetInput();
            $this->emit('closeModal');
            session()->flash('message', 'User Successfully created.');
        }
        else{
            return redirect()->route('configurations');
    }
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;
		$this->token = $record-> token;
		$this->two_factor_secret = $record-> two_factor_secret;
		$this->two_factor_recovery_codes = $record-> two_factor_recovery_codes;
		$this->two_factor_confirmed_at = $record-> two_factor_confirmed_at;
		$this->type = $record-> type;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'email' => $this-> email,
			'token' => $this-> token,
			'two_factor_secret' => $this-> two_factor_secret,
			'two_factor_recovery_codes' => $this-> two_factor_recovery_codes,
			'two_factor_confirmed_at' => $this-> two_factor_confirmed_at,
			'type' => $this-> type
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'User Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
