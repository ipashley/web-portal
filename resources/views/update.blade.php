<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <h3>Update Staff</h3>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
    
        <form method="post" action="{{route('store')}}">
            @csrf
            @method('post')
            <div>
                <label for="name">Staff Name</label>
                <input type="text" name="name" id="" placeholder="Name" >
            </div>
            
            <div>
                <label for="email">Staff Email</label>
                <input type="email" name="email" id="" placeholder="Email" >
            </div>

            <div>
                <label for="phone">Staff Phone</label>
                <input type="tel" name="phone" id="" placeholder="Phone Number">
            </div>

            <div>
                <input type="submit" value="Save Name">
            </div>
            
        </form>
</body>
</html>