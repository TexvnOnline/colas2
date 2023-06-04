<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ServicesController extends Component
{
	use WithFileUploads;
	use WithPagination;

	public $search, $selected_id, $pageTitle, $componentName;
    public $name, $letter, $start_number, $status;

	private $pagination = 5;
	public function mount()
	{
		$this->pageTitle = 'Listado';
		$this->componentName = 'Servicios';
        $this->status = 'Elegir';
	}
	public function paginationView()
	{
		return 'vendor.livewire.bootstrap';
	}
	public function render()
	{
		if(strlen($this->search) > 0)
			$data = Service::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
		else
			$data = Service::orderBy('id','desc')->paginate($this->pagination);
		return view('livewire.service.services', ['services' => $data])
		->extends('layouts.theme.app')
		->section('content');
	}
	public function Edit($id)
	{
		$record = Service::find($id, ['id','name', 'letter', 'start_number', 'status']);
		$this->name = $record->name;
		$this->selected_id = $record->id;
        $this->letter = $record->letter;
        $this->start_number = $record->start_number;
        $this->status = $record->status;
		$this->emit('show-modal', 'show modal!');
	}
	public function Store()
	{
		$rules = [
			'name' => 'required|unique:services|min:3',
            'letter' => 'required|max:3',
            'start_number' => 'required',
            'status' => 'required|not_in:Elegir'
		];
		$messages = [
			'name.required' => 'Nombre de la categoría es requerido',
			'name.unique' => 'Ya existe el nombre de la categoría',
			'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres'
		];
		$this->validate($rules, $messages);
		$service = Service::create([
			'name' => $this->name,
            'letter' => $this->letter,
            'start_number' => $this->start_number,
            'status' => $this->status,
		]);
		$this->resetUI();
		$this->emit('service-added','Servicio registrado');
	}
	public function Update()
	{
		$rules =[
			'name' => "required|min:3|unique:services,name,{$this->selected_id}",
            'letter' => 'required|max:3',
            'start_number' => 'required',
            'status' => 'required|not_in:Elegir'
		];
		$messages =[
			'name.required' => 'Nombre de categoría requerido',
			'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres',
			'name.unique' => 'El nombre de la categoría ya existe'
		];
		$this->validate($rules, $messages);
		$service = Service::find($this->selected_id);
		$service->update([
			'name' => $this->name,
            'letter' => $this->letter,
            'start_number' => $this->start_number,
            'status' => $this->status,
		]);
		$this->resetUI();
		$this->emit('service-updated', 'Servicio actualizado');
	}
	public function resetUI()
	{
		$this->name ='';
		$this->search ='';
		$this->selected_id = 0;
        $this->letter = '';
        $this->start_number = '';
        $this->status = 'Elegir';
	}
	protected $listeners =['deleteRow' => 'Destroy'];
	public function Destroy(Service $service)
	{
		$service->delete();
		$this->resetUI();
		$this->emit('service-deleted', 'Categoría Eliminada');
	}
}
