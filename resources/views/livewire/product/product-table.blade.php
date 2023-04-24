<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card -p2">
                    <h3>Lista de productos</h3>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td>
                                <td>{{ $p->price }}</td>
                                <td>
                                    <button type="button" wire:click="deleteProducto({{ $p->id }})" class="btn btn-danger btn-sm">Eliminar</button>
                                    <button type="submit" wire:click="editProucto({{ $p->id }})" class="btn btn-success btn-sm">Editar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-2 center ">
                    <h3 class="center">Edita o Agrega un Producto</h3>
                    <form wire:submit.prevent="saveProducto">
                        <div>
                            <label class="form-label" for="">Nombre</label>
                            <input class="form-control" wire:model="name">
                        </div>
                        <div>
                            <label class="form-label" for="">Descripcion</label>
                            <input class="form-control" wire:model="description">
                        </div>
                        <div>
                            <label class="form-label" for="">Precio</label>
                            <input class="form-control" wire:model="price">
                        </div>
                        <hr>
                        <button class="btn btn-primary btn-sm" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

