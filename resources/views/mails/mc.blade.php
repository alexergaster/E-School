<!DOCTYPE html>
<html>
<head>
    <title>Запис на майстер-клас з E-School</title>
</head>
<body>
    <h1>Запис на майстер-клас з E-School</h1>
    <p><strong>Батьки:</strong> {{ $data['parent_name'] }}</p>
    <p><strong>Номер телефону батьків:</strong> {{ $data['parent_phone'] }}</p>
    <p><strong>Ім'я дитини:</strong> {{ $data['child_name'] }}</p>
    <p><strong>Вік дитини:</strong> {{ $data['child_age'] }}</p>
    <p><strong>Програми:</strong></p>
    <ol>
        @foreach($data['programs'] as $program)
            <li>{{ $program }}</li>
        @endforeach
    </ol>
</body>
</html>
