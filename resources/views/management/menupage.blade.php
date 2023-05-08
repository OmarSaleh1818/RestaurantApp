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
            <label for="inputPassword" class="col-sm-2 col-form-label">Add Category</label>
            <br>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
            </div>
            <br>
            <a href="{{ url('management') }}" class="btn btn-primary">Save</a>
            <a href="#"></a>
        </div>

    </div>
</div>


</body>


</html>
