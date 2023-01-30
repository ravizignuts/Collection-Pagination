<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <style>
        body > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2){
            display: none;
        }
    </style> --}}
    </head>
<body>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class='text-white bg-primary'>
                {{-- <caption>User Information</caption> --}}
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>D.O.B</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>City</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($customer as $data )
                <tr class="table-primary">
                    <td scope="row">{{ $data->id }}</td>
                    <td>  {{ $data->fname }}</td>
                    <td>{{ $data->lname }}</td>
                    <td> {{ $data->dob->format('d/m/Y')}}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->city }}</td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                    User Information
                </tfoot>
        </table>
    </div>
    {{--using this  $datas->links()  You need to include path and in root method --}}
    {{-- {{  $datas->links()  }} --}}
    {{$customer->links('pagination::bootstrap-5')}}





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
