<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (isset($name) && isset($age))
        <h2>Your's data:</h2>
        <p>My name is {{ $name }} and my age is {{ $age }}.</p>
    @endif

    
    <form action="/caform" method="POST">
        @csrf 
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
