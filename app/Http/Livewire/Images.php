<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Images extends Component
{
    use WithPagination;
    use WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $url, $time;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.images.view', [
            'images' => Image::latest()
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('url', 'LIKE', $keyWord)
						->orWhere('time', 'LIKE', $keyWord)
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
		$this->user_id = null;
		$this->url = null;
		$this->time = null;
    }

    public function store()
    {
        $this->validate([
		// 'user_id' => 'required',
		'url' => 'required|image|max:2048',
        ]);

       $image = $this->url->store('slides');
        // return $image;

        Image::create([ 
			'user_id' => $this-> user_id,
			'url' => $image,
			'time' => $this-> time
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Image Successfully created.');
    }

    public function edit($id)
    {
        $record = Image::findOrFail($id);

        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->url = $record-> url;
		$this->time = $record-> time;
		
        $this->updateMode = true;
    }

    // public function update()
    // {
    //     $this->validate([
	// 	'user_id' => 'required',
	// 	'url' => 'required',
    //     ]);

    //     if ($this->selected_id) {
	// 		$record = Image::find($this->selected_id);
    //         $record->update([ 
	// 		'user_id' => $this-> user_id,
	// 		'url' => $this-> url,
	// 		'time' => $this-> time
    //         ]);

    //         $this->resetInput();
    //         $this->updateMode = false;
	// 		session()->flash('message', 'Image Successfully updated.');
    //     }
    // }

    public function update($id)
    {
        $this->validate([
            'url' => 'required|image|max:2048',
        ]);
    
        // Buscar el registro de la imagen por su ID
        $record = Image::find($id);
    
        // Verificar si se encontró el registro
        if ($record) {
            // Verificar si se proporciona una nueva imagen
            if ($this->url) {
                // Eliminar la imagen actual del almacenamiento
                Storage::delete($record->url);
    
                // Guardar la nueva imagen
                $imagePath = $this->url->store('slides');
    
                // Actualizar la URL de la imagen en la base de datos
                $record->update(['url' => $imagePath]);
            }
    
            // Si se proporciona un nuevo ID de usuario, actualizarlo
            if ($this->user_id) {
                $record->update(['user_id' => $this->user_id]);
            }
    
            // Si se proporciona un nuevo tiempo, actualizarlo
            if ($this->time) {
                $record->update(['time' => $this->time]);
            }
    
            $this->resetInput();
            $this->emit('closeModal');
            session()->flash('message', 'Image Successfully updated.');
        } else {
            session()->flash('message', 'Image not found.');
        }
    }
    


    
    public function destroy($id)
    {
            // Verificar si se proporcionó un ID válido
            if ($id) {
                // Buscar el registro de la imagen por su ID
                $record = Image::find($id);

                // Verificar si se encontró el registro
                if ($record) {
                    // Eliminar la imagen del almacenamiento
                    Storage::delete($record->url);

                    // Eliminar el registro de la base de datos
                    $record->delete();

                    session()->flash('message', 'Image Successfully deleted.');
                } else {
                    session()->flash('message', 'Image not found.');
                }
            } else {
                session()->flash('message', 'Invalid ID.');
            }
    }

}
