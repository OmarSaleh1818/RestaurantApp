<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">

    <form method="POST" action="{{ route('table.store') }}">
        @csrf
        <div class="row">

            @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Add Table</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="table_name"
                           placeholder="Table Name...">
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-10">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session()->has('status'))
                            <div class="alert alert-success">
                                <button type="button" class="btn-close" data-miss="alert">X
                                </button>
                                {{ Session()->get('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4 mb-4">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                    <br>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">SIN</th>
                            <th scope="col">Table Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tables as $key => $table)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $table->table_name }}</td>
                                    <td>{{ $table->status }}</td>
                                    <td>
                                        <a href="{{ route('edit.table', $table->id) }}"
                                           class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.table', $table->id) }}"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </form>
</div>


</body>

</html>
