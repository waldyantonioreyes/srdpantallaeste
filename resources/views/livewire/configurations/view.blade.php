@section('title', __('Configurations'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado de configuraciones </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Configurations">
						</div>
						@foreach($configurations as $row)
						@endforeach
						{{-- @dd($domain.'/pantalla/'.$row->user->token) --}}
						@if ($configurations->isEmpty())
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i>  Agragar configuración
							</div>
						
						@else
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal" style="display: none;">
							<i class="fa fa-plus"></i> Agragar configuración
						</div>
						@endif
						

						
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.configurations.create')
						@include('livewire.configurations.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Usuario</th>
								<th>Nombre de la Banca</th>
								<th>Color de la pantalla</th>
								<th>URL DE PANTALLA</th>
								<td>ACTIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($configurations as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->user->name }}</td>
								<td>{{ $row->bankname }}</td>
								{{-- <td>{{ $row->headercolor }}</td> --}}
								<td style="background-color: {{$row->headercolor }}; color: white">{{ $row->headercolor }}</td>

								
								<td>
									<a href="{{ '/pantalla/'.$row->user->token }}">{{ $domain.'/pantalla/'.$row->user->token }}</a>
								</td>
								
								{{-- <td>{{ $row->user->token }}</td> --}}
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Configuration id {{$row->id}}? \nDeleted Configurations cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $configurations->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
