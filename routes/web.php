<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PacientesController;



Route::get('/', [PacientesController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/crear', [PacientesController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacientesController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{paciente}', [PacientesController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{paciente}/editar', [PacientesController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{paciente}', [PacientesController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{paciente}', [PacientesController::class, 'destroy'])->name('pacientes.destroy');

