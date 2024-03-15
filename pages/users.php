<?php
    require_once '../scripts/session_manager.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuarios</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Usuario
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <!-- Nombre y Apellidos -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>

                    <!-- DNI y Género -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="dni" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni" pattern="\d{8}[A-Za-z]" title="Introduce un DNI válido (8 dígitos seguidos de una letra)" required>
                        </div>
                        <div class="col">
                            <label for="genero" class="form-label">Género</label>
                            <select class="form-select" aria-label="Selecciona tu género">
                                <option selected>Selecciona tu género</option>
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <!-- Rol y Fecha de nacimiento -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-select" aria-label="Selecciona tu rol">
                                <option selected>Selecciona tu rol</option>
                                <option value="administrador">Administrador</option>
                                <option value="paciente">Paciente</option>
                                <option value="fisioterapeuta">Fisioterapeuta</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                    </div>

                    <!-- Telefono y Dirección -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" pattern="\d{8}[0-9]" title="Introduce un telefono válido, sin espacios (9 dígitos)" required>
                        </div>
                        <div class="col">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                    </div>

                    <!-- Correo electrónico y Contraseña -->
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass" minlength="8" name="pass" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
            </div>
        </div>
    </div>
</div>


<div class="table-responsive small">
    <form class="row g-3">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Filtro</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder="Filtrar por ID...">
        </div>
        <div class="col-auto">
            <input type="text" class="form-control" id="inputPassword2" placeholder="Filtrar por nombre...">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Filtrar</button>
        </div>
    </form>


    <div class="row">
    <!-- Aquí se mostrarán los usuarios en forma de tabla -->
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">ID</th>
                        <th scope="col" style="width: 15%;">Nombre</th>
                        <th scope="col" style="width: 15%;">Apellidos</th>
                        <th scope="col" style="width: 15%;">Email</th>
                        <th scope="col" style="width: 15%;">Dirección</th>
                        <th scope="col" style="width: 10%;">Teléfono</th>
                        <th scope="col" style="width: 10%;">Sesiones Disponibles</th>
                        <th scope="col" style="width: 10%;">Rol</th>
                        <th scope="col" style="width: 5%;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nombre1</td>
                        <td>Apellidos1</td>
                        <td>correo1@example.com</td>
                        <td>Dirección1</td>
                        <td>123456789</td>
                        <td>5</td>
                        <td>Usuario</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nombre2</td>
                        <td>Apellidos2</td>
                        <td>correo2@example.com</td>
                        <td>Dirección2</td>
                        <td>987654321</td>
                        <td>10</td>
                        <td>Admin</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Repite estas filas para cada usuario -->
                </tbody>
            </table>
        </div>
    </div>
</div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>