<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('customer.update', $customer) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('put')
<label>
    Telefono:
    <br>
    <input type="text" name="telefono" value="{{ old('telefono', $customer->telefono) }}">
</label>
<br>
<label>
    Num_social:
    <br>
    <input type="text" name="num_social" value="{{ old('num_social', $customer->num_social) }}">
</label>
<br>_
<label>
    Codigo:
    <br>
    <input type="text" name="codigo" value="{{ old('codigo', $customer->codigo) }}">
</label>

<br>
<label>
    Domicilio:
    <br>
    <input type="text" name="domicilio" value="{{ old('domicilio', $customer->domicilio) }}">
</label>
<br>
<br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>