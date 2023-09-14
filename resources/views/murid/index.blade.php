<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tabel Murid</title>
</head>

<body>
    <div class="container-fluid m-0 ">


        <table class="table m-0">

            <thead class="thead-dark w-100">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">kelas</th>
                    <th scope="col">alamat</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach($query as $murid)
                <tr>
                    <td></td>
                    <td scope="row">{{$no++}}</td>
                    <td>{{$murid->nis}}</td>
                    <td>{{$murid->nama}}</td>
                    <td>{{$murid->kelas}}</td>
                    <td>{{$murid->alamat}}</td>
                    <td>

                        <a href="">Edit</a>
                        <a href=" {{url('murid/delete')}}/{{$murid->id}}">Hapus</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="position-relative">
            <a class="btn btn-primary col" href=" {{url('murid/create')}}/{{$murid->id}" >tambah data</a>
        </div>
        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-4 w-100 position-absolute">
            <div class="container bottom-0">
                <p>&copy; 2023 Kevitra. All rights reserved.</p>
            </div>
        </footer>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>