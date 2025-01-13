<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ตารางสูตรคูณ</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ตารางสูตรคูณ</h1>
        <form action="{{ route('multiplication.show') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">แม่สูตรคูณ</label>
                <input type="number" id="number" name="number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">แสดงสูตรคูณ</button>
        </form>

        @isset($table)
            <h2>สูตรคูณแม่ {{ $number }}</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>คูณ</th>
                        <th>เท่ากับ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endisset
    </div>
</body>
</html>
