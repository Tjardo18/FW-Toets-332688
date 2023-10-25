<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit</title>
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
        <h1>Edit a Person</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>


            @endif
        </div>
        <div class="card">
            <div class="ruimte">
                <form method="post" action="{{route('person.update', ['person' => $person])}}">
                    @csrf
                    @method('put')
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{$person->name}}" />
                    </div>
                    <div>
                        <label>Street</label>
                        <input type="text" name="street" placeholder="Street" value="{{$person->street}}" />
                    </div>
                    <div>
                        <label>Home Nr</label>
                        <input type="text" name="home_nr" placeholder="Home Nr" value="{{$person->home_nr}}" />
                    </div>
                    <div>
                        <label>Zipcode</label>
                        <input type="text" name="zipcode" placeholder="Zipcode" value="{{$person->zipcode}}" />
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="city" placeholder="City" value="{{$person->city}}" />
                    </div>
                    <div>
                        <label>Phone Nr</label>
                        <input type="text" name="phone_nr" placeholder="Phone Nr" value="{{$person->phone_nr}}" />
                    </div>
                    <div>
                        <input type="submit" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../../js/nav.js"></script>

</body>

</html>