<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf {{-- token o seguridad  --}}
        <label  class="form-label">
            Telefono:
            <br>
            <input class="form-control" type="text" name="telefono"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            Num_social:
            <br>
            <input class="form-control"  type="text" name="num_social" required>
        </label>
        <br>
        <label  class="form-label">
            Codigo:
            <br>
            <input class="form-control"  type="text" name="codigo" required>
        </label>
        <br>
        <label  class="form-label">
            Domicilio
            <br>
            <input class="form-control"  type="text" name="domicilio" required>
        </label>
        <br><br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</body>
</html>