<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personalia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data User</h1>
    <div class="container">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ID</label>
                  <input type="text" name="id" class="form-control" id="exampleInputId value="{{$data->id}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value="{{$data->email}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="{{$data->password}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama" value="{{$data->nama}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Role User</label>
                  <input type="text" name="role_user" class="form-control" id="exampleInputRole User" value="{{$data->role_user}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jadwal Kerja</label>
                  <input type="text" name="jadwal_kerja" class="form-control" id="exampleInputJadwal Kerja" value="{{$data->jadwal_kerja}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Gaji</label>
                  <input type="text" name="gaji" class="form-control" id="exampleInputGaji" value="{{$data->gaji}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>