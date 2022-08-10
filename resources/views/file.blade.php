<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="mb-3 mt-4">
            <form action="/fileUpload" enctype="multipart/form-data" method="POST">
                @csrf

                <label for="formFileMultiple" class="form-label">Multiple files input</label>
                <input class="form-control" type="file" id="formFileMultiple" name="uploadFiles[]" required multiple>
                <button type="submit" class="btn btn-primary mt-4">Upload</button>
            </form>
        </div>
        <div class="mb-3 mt-4">
            @foreach ($files as $file)
                <img style="width: 25%;" class="rounded img-thumbnail" src="{{ env('IMAGE_URL') }}/{{ $file }}" alt="">
            @endforeach
        </div>
    </div>
</body>
</html>