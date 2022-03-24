<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <div class="container">
    <a href="{{ '/' }}" class="btn btn-primary my-3">Show Data</a>
    

  <form action="{{ url('/store-data') }}" method="post">
    @csrf

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" placeholder="Enter your name">
  @error('name')
    <span class="text-danger">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Email</label>
  <input type="text" class="form-control" name="email" placeholder="Enter your email">
  @error('email')
    <span class="text-danger">{{ $message }}</span>
  @enderror
</div>
    <input type="submit" class="btn btn-primary my-3"  value="Submit">

  </form>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
