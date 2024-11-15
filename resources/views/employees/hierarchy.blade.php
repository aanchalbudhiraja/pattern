<!DOCTYPE html>
<html>
<head>
    <title>Employee Hierarchy</title>
</head>
<body>
    <h1>Employee Hierarchy</h1>

    <ul>
        @foreach ($employees as $employee)
            @include('employees.partials.employee', ['employee' => $employee])
        @endforeach
    </ul>
</body>
</html>
