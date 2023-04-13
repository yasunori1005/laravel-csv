<!DOCTYPE html>
<html>
<head>
    <title>CSV Viewer</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                @foreach ($records[0] as $header)
                    <th>{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    @foreach ($record as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
