<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
</head>
<body>
    <div>
        <h2>STAFFS</h2>
        <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Edit</th>
            </tr>

            @foreach($members as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->email}}</td>
                <td>{{$product->phone}}</td>
                <td>
                    <a href="{{route('edit', ['editstaff' => $product])}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>

        </div>


    </div>
</body>
</html>