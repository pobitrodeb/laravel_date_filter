<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data-filter search laravel 10 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="py-5">
                <a href="{{ route('home.index') }}" class="btn btn-primary"> Start And End Date Filter </a>
            </div>
            <div class="card p-2">
                <div class="card-header text-center">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="form-group">
                                    <form action="" method="GET">
                                        <div class="input-group">
                                            <select class="form-select" name="date_filter">
                                                <option value="all_date"> All Date </option>
                                                <option value="today">Today </option>
                                                <option value="yesterday">Yesterday</option>
                                                <option value="the_week">This Week</option>
                                                <option value="last_week">Last Week</option>
                                                <option value="this_month">This Month</option>
                                                <option value="last_month">Last Month</option>
                                                <option value="this_year">This Year</option>
                                                <option value="last_year">Last Year</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary"> Filter </button>
                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="car-body py-2">
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">ID</th>
                                <th scope="col">First Name </th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Position</th>
                                <th scope="col">Date Created </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($employees as $employee)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <h3 class="bg-danger text-white"> Not Found Data </h3>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

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
