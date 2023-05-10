<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">
    <form method="POST" action="{{ route('category.update',$category->id) }}">
        @csrf
        <div class="row">
           @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Edit Category</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name"
                           required value="{{ $category->category_name }}">
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
