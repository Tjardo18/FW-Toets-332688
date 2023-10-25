<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Index</title>
</head>

<body>

    <header>
        <a href="localhost:8000/person" class="logo">
            <i class="ri-home-3-fill"></i>
            <span>TJARDO</span>
        </a>

        <ul class="navbar">
            <li><a href="localhost:8000/person" class="active">Home</a></li>
        </ul>

        <div class="main">
            <a href="#" class="user">
                <i class="ri-user-fill"></i>
                Sign In
            </a>
            <a href="#">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>

        <h1>Person</h1>
        <div>
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>
        <div class="card">
            <div class="ruimte">

                <div>

                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Street</th>
                            <th>Home Number</th>
                            <th>Zipcode</th>
                            <th>City</th>
                            <th>Phone Number</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($persons as $person )
                        <tr>
                            <td>{{$person->id}}</td>
                            <td>{{$person->name}}</td>
                            <td>{{$person->street}}</td>
                            <td>{{$person->home_nr}}</td>
                            <td>{{$person->zipcode}}</td>
                            <td>{{$person->city}}</td>
                            <td>{{$person->phone_nr}}</td>
                            <td>
                                <a href="{{route('person.edit', ['person' => $person])}}"><i class='bx bxs-pencil'></i></a>
                            </td>
                            <td>
                                <form method="post" action="{{route('person.destroy', ['person' => $person])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="button">
                        <a href="{{route('person.create')}}">
                            <button>Create a Person</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/nav.js"></script>

</body>

</html>