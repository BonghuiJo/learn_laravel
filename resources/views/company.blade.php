<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h1>회사 조직도</h1>

    @foreach ($divisions as $division)
        <h2>{{ $division->name }}</h2>

        @foreach ($division->departments as $department)
            <h3>Department: {{ $department->name }}</h3>

            @foreach ($department->teams as $team)
                <h4>Team: {{ $team->name }}</h4>

                <ul>
                    @foreach ($team->users as $user)
                        <li>{{ $user->name }} ({{ $user->email }})</li>
                    @endforeach
                </ul>
            @endforeach
        @endforeach
    @endforeach

</body>

</html>
