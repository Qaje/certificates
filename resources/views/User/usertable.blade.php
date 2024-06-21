    @role('admin')
        hola admin
    @endrole

    <br />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post" id="user">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        Name<input name="name" type="text" class="form-control">
                        Email<input name="email" type="text" class="form-control">
                        Password<input name="password" type="password" class="form-control">

                    </form>

                </div>
                <div class="modal-footer">
                    {{-- <input type="button" value="Nuevo" class="btn btn-warning"
                        onclick="New();$('#user')[0].reset(); user.fotografia.src='https://via.placeholder.com/150';"
                        name="new"> --}}
                    {{-- <input type="button" value="Guardar" class="btn btn-success" onclick="userStore()"
                        id="create">
                    <input type="button" value="Modificar" class="btn btn-danger" onclick="userUpdate();"
                        id="update"> --}}

                    {{-- <button type="button" class='btn btn-success' value="Guardar" onclick='userStore()'
                        id="create"></button> --}}


                    <input type='button' value="Guardar" class="btn btn-success" onclick="userStore()" id='create'>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <thead>
            <th>Acciones</th>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </thead>

        @foreach ($users as $user)
            <tr>
                <td>
                    <button type='button' class="btn btn-warning" onclick="userDestroy()" data-toggle='modal'
                        data-target='#exampleModal2' onclick='userRoleEdit('{{ $user->id }}') return false';
                        id='create'>Roles</button>

                    <button type='button' class='btn btn-success note-icon-pencil' data-toggle='modal'
                        data-target="#exampleModal"
                        onclick="userEdit('{{ $user->id }}'); Up(); return false">Editar</button>

                    <button class='btn btn-danger note-icon-trash'
                        onclick="userDestroy('{{ $user->id }}'); return
                        false">Eliminar</button>
                </td>
                <td>
                    {{ $user->id }}
                </td>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
            </tr>
        @endforeach
    </table>
