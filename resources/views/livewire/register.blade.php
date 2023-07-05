@section('title', 'Inicio')

<div class="row g-5">
    <div class="col-sm-12">
        <h4 class="mb-5">Datos del alumno</h4>
        @if($buttonCreateOrUpdate)
            <form class="needs-validation" autocomplete="off" wire:submit.prevent="createModel">
        @else
                    <form class="needs-validation" autocomplete="off" wire:submit.prevent="updateModel({{ $model->id }})">
        @endif
            <div class="row g-3 mb-5">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nombres</label>
                    {{ html()->text('name')->class('form-control')->attribute('wire:model', 'name') }}
                    @if($errors->has('name'))
                        <small class="text-warning">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Apellido paterno</label>
                    {{ html()->text('first_last_name')->class('form-control')->attribute('wire:model', 'first_last_name') }}
                    @if($errors->has('first_last_name'))
                        <small class="text-warning">{{ $errors->first('first_last_name') }}</small>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Apellido materno</label>
                    {{ html()->text('second_last_name')->class('form-control')->attribute('wire:model', 'second_last_name') }}
                    @if($errors->has('second_last_name'))
                        <small class="text-warning">{{ $errors->first('second_last_name') }}</small>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="school_id" class="form-label">Escuela y facultad</label>
                    {{ html()->select('school_id', $schools)->class('form-select')->attribute('wire:model', 'school_id')->placeholder('') }}
                    @if($errors->has('school_id'))
                        <small class="text-warning">{{ $errors->first('school_id') }}</small>
                    @endif
                </div>
            </div>
            @if($buttonCreateOrUpdate)
                {{ html()->submit('Registrar')->class('w-100 btn btn-success btn-lg') }}
            @else
                {{ html()->submit('Actualizar')->class('w-100 btn btn-primary btn-lg') }}
                <a class="w-100 btn btn-warning btn-lg mt-3" wire:click="cancelUpdate">
                    Cancelar
                </a>
            @endif
        </form>
    </div>
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Escuela / Facultad</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->school->full_name }}</td>
                        <td>
                            <a href="javascript:void(0)" wire:click="editModel({{ $student->id }})" class="text-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" wire:click="deleteModel({{ $student->id }})" class="text-danger ms-3">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
