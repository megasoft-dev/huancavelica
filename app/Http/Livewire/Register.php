<?php

namespace App\Http\Livewire;

use App\Models\School;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Register extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $model, $schools;
    public $buttonCreateOrUpdate = true;
    public $name, $first_last_name, $second_last_name, $school_id;

    public function mount()
    {
        $this->model = new Student();
        $this->schools = School::with('faculty')->get()->pluck('full_name', 'id');
    }

    public function render()
    {
        return view('livewire.register', [
            'students' => $this->model->paginate(5)
        ])->extends('layouts.app');
    }

    public function createModel(): void
    {
        $this->validate([
            'name' => 'required|string',
            'first_last_name' => 'required|string',
            'second_last_name' => 'required|string',
            'school_id' => 'required|exists:schools,id',
        ]);
        $this->model->create([
            'name' => $this->name,
            'first_last_name' => $this->first_last_name,
            'second_last_name' => $this->second_last_name,
            'school_id' => $this->school_id,
        ]);
        $this->resetAttributes();
    }

    public function editModel($id): void
    {
        $this->resetAttributes();
        $this->model = $this->model->findOrFail($id);
        $this->name = $this->model->name;
        $this->first_last_name = $this->model->first_last_name;
        $this->second_last_name = $this->model->second_last_name;
        $this->school_id = $this->model->school_id;
        $this->buttonCreateOrUpdate = false;
    }

    public function updateModel(): void
    {
        $this->validate([
            'name' => 'required|string',
            'first_last_name' => 'required|string',
            'second_last_name' => 'required|string',
            'school_id' => 'required|exists:schools,id',
        ]);
        $this->model->update([
            'name' => $this->name,
            'first_last_name' => $this->first_last_name,
            'second_last_name' => $this->second_last_name,
            'school_id' => $this->school_id,
        ]);
        $this->resetAttributes();
        $this->buttonCreateOrUpdate = true;
    }

    public function cancelUpdate(): void
    {
        $this->resetAttributes();
        $this->buttonCreateOrUpdate = true;
    }

    public function deleteModel($id)
    {
        $this->model = $this->model->findOrFail($id);
        $this->model->delete();
    }

    private function resetAttributes()
    {
        $this->reset(['name', 'first_last_name', 'second_last_name', 'school_id']);
    }
}
