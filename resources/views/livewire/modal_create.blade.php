<div class="modal modal-close-out fade" id="modalCreate" wire:ignore.self>
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreate">Agregar proceso de Admisión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="createModel" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                {{ html()->label('Nombre')->for('name')->class('font-weight-bold')  }}
                                {{ html()->text('name')->attributes(['wire:model.defer' => 'name'])->class('form-control mt-2') }}
                                @error('name')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Inicio Admisión')->for('date_start_admission')->class('font-weight-bold')  }}
                                {{ html()->date('date_start_admission')->attributes(['wire:model.defer' => 'date_start_admission'])->class('form-control mt-2') }}
                                @error('date_start_admission')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Final Admisión')->for('date_end_admission')->class('font-weight-bold')  }}
                                {{ html()->date('date_end_admission')->attributes(['wire:model.defer' => 'date_end_admission'])->class('form-control mt-2') }}
                                @error('date_end_admission')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Inicio Inscripción')->for('date_start_inscription')->class('font-weight-bold')  }}
                                {{ html()->date('date_start_inscription')->attributes(['wire:model.defer' => 'date_start_inscription'])->class('form-control mt-2') }}
                                @error('date_start_inscription')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Final Inscripción')->for('date_end_inscription')->class('font-weight-bold')  }}
                                {{ html()->date('date_end_inscription')->attributes(['wire:model.defer' => 'date_end_inscription'])->class('form-control mt-2') }}
                                @error('date_end_inscription')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha y Hora Inicio Examen')->for('date_start_test')->class('font-weight-bold')  }}
                                {{ html()->datetime('date_start_test')->attributes(['wire:model.defer' => 'date_start_test'])->class('form-control mt-2') }}
                                @error('date_start_test')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha y Hora Final Examen')->for('date_end_test')->class('font-weight-bold')  }}
                                {{ html()->datetime('date_end_test')->attributes(['wire:model.defer' => 'date_end_test'])->class('form-control mt-2') }}
                                @error('date_end_test')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha resultados')->for('date_results')->class('font-weight-bold')  }}
                                {{ html()->date('date_results')->attributes(['wire:model.defer' => 'date_results'])->class('form-control mt-2') }}
                                @error('date_results')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Inicio Matrícula')->for('date_start_registration')->class('font-weight-bold')  }}
                                {{ html()->date('date_start_registration')->attributes(['wire:model.defer' => 'date_start_registration'])->class('form-control mt-2') }}
                                @error('date_start_registration')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Final Matrícula')->for('date_end_registration')->class('font-weight-bold')  }}
                                {{ html()->date('date_end_registration')->attributes(['wire:model.defer' => 'date_end_registration'])->class('form-control mt-2') }}
                                @error('date_end_registration')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <div class="form-group">
                                {{ html()->label('Fecha Inicio de Clases')->for('date_start_class')->class('font-weight-bold')  }}
                                {{ html()->date('date_start_class')->attributes(['wire:model.defer' => 'date_start_class'])->class('form-control mt-2') }}
                                @error('date_start_class')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                {{ html()->label('Prospecto PDF')->class('font-weight-bold') }}
                                {{ html()->file('prospect')->attributes(['wire:model.defer' => 'prospect'])->class('form-control mt-2') }}
                                @error('prospect')
                                <small class="text-danger small">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-gradient-primary" type="submit" wire:loading.attr="disabled">
                        <span wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
