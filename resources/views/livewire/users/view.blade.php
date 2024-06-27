@section('title', __('Users'))

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			@if(Auth::user() && Auth::user()->type == 1)
			<div class="container mt-5">
				<a href="{{ route('home') }}" class="btn btn-primary">IR AL PANEL DE ADMINISTRACION</a>
			</div>
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Lista de Usuarios </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Users">
						</div>
						@if (auth()->check() && (auth()->user()->type)==1)
							<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Crear Usuario Para la Pantalla
						</div>
						@elseif (auth()->guest()) 
							<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
								<i class="fa fa-plus"></i>  Crear Usuario Para la Pantalla						
							@endif
						
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.users.create')
						@include('livewire.users.update')
						
						<div class="table-responsive">
							<table class="table table-bordered table-sm">
								<thead class="thead">
									<tr> 
										<td>#</td> 
										<th>Nombre</th>
										<th>Email</th>
										<td>ACCIONES</td>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $row)
									<tr>
										<td>{{ $loop->iteration }}</td> 
										<td>{{ $row->name }}</td>
										<td>{{ $row->email }}</td>
										
										<td width="90">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Acciones
											</button>
											<div class="dropdown-menu dropdown-menu-right">
											<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
											<a class="dropdown-item" onclick="confirm('Confirm Delete User id {{$row->id}}? \nDeleted Users cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
											</div>
										</div>
										</td>
									@endforeach
								</tbody>
							</table>						
							
							</div>
						</div>
						
				
			</div>
		</div>
		
		@else
		
		@include('livewire.users.create')
		@include('livewire.users.update')
		
		<div class="row">
			
			
				<div class="col-md-6 d-flex justify-content-center mb-3" data-toggle="modal" data-target="#createDataModal">
					<i class="btn btn-primary btn-custom">Crear Usuario Para la Pantalla</i>  
				</div>
			
			<div class="col-md-6 d-flex justify-content-center mb-3">
				<a class="btn btn-success btn-custom" href="{{ route('login') }}">Iniciar Sesión </a>
				
			</div>
		
	</div>
	
	@endif
</div> 
	</div>
</div>
<style>
	.btn-custom {
		font-size: 1.5rem;
		padding: 1rem 2rem;
		border-radius: 0.5rem;
		font-weight: bold;
	}
</style>
