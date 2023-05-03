<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data-filter search | pobitrodeb.com </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="py-5">
                <a href="" class="btn btn-primary"> Date Filter Laravel 10</a>
            </div>
            <div class="card py-2">
                <div class="card-header text-center">
                    <div class="container">
                        <form action="/filter" method="GET">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <label for=""> Start Date </label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="col-md-3">
                                    <label for=""> End Date </label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <div class="col-md-3">
                                    <label for=""></label>
                                    <input type="submit" value="Filter" class="form-control bg-primary text-white sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="car-body py-5">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <p>www.pobitrodeb.com</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
