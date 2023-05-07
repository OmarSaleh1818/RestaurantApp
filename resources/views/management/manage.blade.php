<html lang="en">

<head>
    @include('includes.head')
</head>
<body>
<header>
    @include('includes.header')
</header>
<br>

    <div class="auth-content">
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
                <a href="{{ url('management/category') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                            Menue
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

    <div class="auth-content">
        <div class="row">
            <div class="col-md-4">
                <h2 style="text-align: center">content</h2>
            </div>
            <div class="col-md-4">
                <h2 style="text-align: center">content</h2>
            </div>
            <div class="col-md-4">
                <h2 style="text-align: center">content</h2>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
