<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <td>
            <h4>id customer
        </td>
        <td>
            <h4>telefono
        </td>
        <td>
            <h4>num_social
        </td>
        <td>
            <h4>codigo
        </td>
        <td>
            <h4>domicilio
        </td>


        @foreach ($customer as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->telefono }}</td>
                <td>{{ $customer->num_social }} </td>
                <td>{{ $customer->codigo}} </td>
                <td>{{ $customer->domicilio }} </td>
                <td><a href="{{ route('customer.show', $customer->id) }}"
                        style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('customer.edit', $customer->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>