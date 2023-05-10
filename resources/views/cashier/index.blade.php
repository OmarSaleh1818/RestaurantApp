<html lang="en">

<head>
    @include('includes.head')
</head>
<body>
<header>
    @include('includes.header')
</header>
<br><br>
<div class="container">
    <div class="row" id="table-detail"></div>
    <div class="row justify-content-center" >
        <div class="col-md-5">
            <button class="btn btn-primary btn-block" id="btn-show-tables">View All Tables</button>
        </div>
        <div class="col-md-7">

        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $.(hide)
        $("#btn-show-tables").click(function (){
            $.get('/cashier/getTable', function (data) {
               $("#table-detail").html(data)
            });
        });
    });
</script>

</html>
