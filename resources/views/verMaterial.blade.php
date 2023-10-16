@extends('layouts.admin')
@section('titulo')
<div class="container">
  <h1 class="h3 text-center">Permisos</h1>
  <table class="table">
      <thead>
          <tr>
              <th>Nombre </th>
              <th>Matricula</th>
              <th>Unidad Academica</th>
              <th>Funcion o puesto</th>
              <th>Turno </th>
              <th>Horario</th>
              <th>Fecha Ausencia</th>
              <th>Numero de dias</th>
              <th>Tipo de permiso</th>
              <th>Obervaciones</th>
          </tr>
      </thead>
      <tbody>
  <tr>
    <td>
      <button type="submit" class="btn btn-danger" rel="tooltip">
         <i class="material-icons">Eliminar</i>
      </button>
      </form>
      </td> 
  </tr>
      </tbody>
  </table>
</div>
@endsection