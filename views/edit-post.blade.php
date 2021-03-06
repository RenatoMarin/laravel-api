<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>DB - CRUD - Details Post </title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Update Post
          </div>
          <div class="card-body">
            @if(Session::has('post_updated'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('post_updated')}}
              </div>
            @endif
            <form method="POST" action="{{route('post.update')}}">
              @csrf
              <input type="hidden" name="id" value="{{$post->id}}">
              <div class="form-group">
                <label for="title">Title</label>
              <input type="text" class="form-control" value="{{$post->title}}" id="title" name="title" placeholder="Enter the Title">
              </div>
              <div class="form-group">
                <label for="body">Description</label>
                <input type="text" class="form-control" value="{{$post->body}}" id="body" name="body" placeholder="Enter a description">
              </div>
              <button type="submit" class="btn btn-warning">Confirm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>