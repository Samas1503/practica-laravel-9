@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Acciones</th>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Creador</th>
                            <th scope="col">Fecha Creacion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td class="text-center" width="20%">
                                    <a href="{{ route('proyectos.show', $project) }}" class="btn btn-primary btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Ver Proyecto">
                                        <i class="fa fa-eye fa-fw text-white"></i></a>
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Editar Proyecto">
                                        <i class="fa fa-pencil fa-fw text-white"></i></a>
                                    </a>
                                    <form action="" method="POST" class="d-inline-block">
                                        <button id="delete" name="delete" type="button" class="btn btn-danger btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Eliminar Proyecto" data-bs-toggle="modal" data-bs-target="#eliminarProyecto">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="eliminarProyecto" tabindex="-1" aria-labelledby="eliminarProyectoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="eliminarProyectoLabel">Eliminar Proyecto</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Esta seguro de querer eliminar este proyecto?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </form>
                                </td>
                                <td scope="row">{{ $project->id }}</td>
                                <td scope="row">{{ $project->title }}</td>
                                <td scope="row">{{ $project->description }}</td>
                                <td scope="row">{{ $project->created_by }}</td>
                                <td scope="row">{{ $project->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection