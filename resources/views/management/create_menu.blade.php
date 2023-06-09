<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">

    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">

            @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Add Menu</label>
                <br>
                <div class="col-sm-10">
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option selected>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="menu_name"
                           placeholder="Menu Name...">
                </div>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="menu_price"
                           placeholder="Menu Price...">
                </div>
                <br>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="menu_image"
                           onChange="mainImageUrl(this)">
                    <img src="" id="mainImage">
                </div>
                <br>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1"
                          name="menu_description" placeholder="Menu Description..." rows="3"></textarea>
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
                    </div>
                    <div class="col-md-4 mb-4">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                    <br>
                    <hr>
                </div>
            </div>
        </div>
    </form>
</div>


</body>


</html>
