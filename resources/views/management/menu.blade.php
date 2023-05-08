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

            @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Add Menu</label>
                <br>
                <br>
                <a href="{{ route('menu.create') }}" class="btn btn-success btn-sm float-right">
                    <i class="fas fa-plus"></i> Create Menue
                </a>
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
                            <button type="button" class="btn-close" data-miss="alert">X
                            </button>
                            {{ Session()->get('status') }}
                        </div>
                    @endif

                    <br>
                        <hr>
                    <table class="table table-borderd">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>

                    </table>

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

