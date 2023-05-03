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

        <div class="card" style="width: 18rem;">
            <a href="{{ url('management') }}">
                <img src="{{ asset('v2/assets/images/management.jpg')}}" class="card-img-top" alt="..."
                     width="120%" height="30%">
            </a>
            <div class="card-body">
                <h3 class="card-title">Management</h3>
                <a href="{{ url('management') }}" class="btn btn-primary">Go To Management</a>
            </div>
        </div>
        <br>
        <br>
        <div class="card" style="width: 18rem;">
            <a href="{{ url('cashier') }}">
                <img src="{{ asset('v2/assets/images/cashier.jpg')}}" class="card-img-top" alt="..."
                width="120%" height="30%">
            </a>
            <div class="card-body">
                <h3 class="card-title">Cashier</h3>
                <a href="{{ url('cashier') }}" class="btn btn-primary">Go To Cashier</a>
            </div>
        </div>
        <br>
        <br>

        <div class="card" style="width: 18rem;">
            <a href="{{ url('report') }}">
                <img src="{{ asset('v2/assets/images/report.png')}}" class="card-img-top" alt="..."
                     width="120%" height="30%">
            </a>
            <div class="card-body">
                <h3 class="card-title">Report</h3>
                <a href="{{ url('report') }}" class="btn btn-primary">Go To Report</a>
            </div>
        </div>


    </div>


</body>

</html>
