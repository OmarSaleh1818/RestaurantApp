<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">
    <form method="POST" action="{{ route('table.update',$table ->id) }}">
        @csrf
        <div class="row">
            @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Edit Table</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="table_name"
                           required value="{{ $table->table_name }}">
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>


</body>


</html>
