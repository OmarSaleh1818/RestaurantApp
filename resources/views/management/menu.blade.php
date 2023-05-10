<html lang="en">

<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="container" style="margin-top: 50px; margin-left: 180px">

        <div class="row">

            @include('includes.sidebar')

            <div class="col-md-8">
                <label  class="col-sm-2 col-form-label">Add Menu</label>
                <br>
                <br>
                <a href="{{ route('menu.create') }}" class="btn btn-success btn-sm float-right">
                    <i class="fas fa-plus"></i> Create Menu
                </a>
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
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session()->get('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <br>
                        <hr>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">SIN</th>
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $key => $menu)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $menu->category->category_name }}</td>
                                    <td>{{ $menu->menu_name }}</td>
                                    <td>{{ $menu->menu_price }}</td>
                                    <td>
                                        <img src="{{ asset('menu_image') }}/{{$menu->menu_image}}"
                                        alt="{{$menu->menu_name}}" height="70px" width="70px" class="img-thumbnil">
                                    </td>
                                    <td>{{ $menu->menu_description }}</td>
                                    <td>
                                        <a href="{{ route('edit.menu',$menu->id) }}"
                                           class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.menu',$menu->id) }}"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
</div>


</body>



</html>

