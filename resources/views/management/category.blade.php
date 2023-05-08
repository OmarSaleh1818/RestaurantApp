<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">

    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <a href="{{ url('management/category') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Category
                                </button>
                            </h2>
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a href="{{ url('management/menu') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Menu
                                </button>
                            </h2>
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a href="{{ url('management/category') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Table
                                </button>
                            </h2>
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a href="{{ url('management/category') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    User
                                </button>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Add Category</label>
                <br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name"
                            placeholder="Category Name...">
                </div>
                <br>
                <div class="row">
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
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{ Session()->get('status') }}
                        </div>
                    @endif
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                        <br>
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->category_name }} </td>
                                    <td>
                                        <a href="{{ route('edit.category',$category->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.category',$category->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </form>
</div>


</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>

</html>
