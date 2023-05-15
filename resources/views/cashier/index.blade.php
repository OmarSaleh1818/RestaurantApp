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
            <div id="selected-table">

            </div>
            <div id="order_id">

            </div>
        </div>
        <div class="col-md-7">
            <nav>
                <div class="nav nav-tabs" id="nav-link" role="tablist">
                    @foreach($categories as $category)
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" data-id="{{ $category->id }}"
                                   style="background-color: #383838; color:white;">
                                    {{ $category->category_name }}
                                </a>
                            </li>
                        </ul>
                    @endforeach

                </div>
            </nav>
            <div id="list-menu" class="row-mt-2">

            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $("#table-detail").hide();
        $("#btn-show-tables").click(function (){
            if($("#table-detail").is(":hidden")) {
            $.get('/cashier/getTable', function (data) {
                $("#table-detail").html(data);
                $("#table-detail").slideDown("fast");
                $("#btn-show-tables").html("Hide Tables").removeClass('btn-primary')
                    .addClass('btn-danger');
            });
            }else{
                $("#table-detail").slideUp('fast');
                $("#btn-show-tables").html("View All Tables").removeClass('btn-danger')
                    .addClass('btn-primary');
            }
        });

        // Load Menus By Category
        $(".nav-link").click(function () {
            $.get("/cashier/getMenuByCategory/"+$(this).data("id"),function(data) {
                $("#list-menu").hide();
                $("#list-menu").html(data)
                $("#list-menu").fadeIn('slow');;
            });
        });

        var SELECTED_TABLE_ID = "" ;
        var SELECTED_TABLE_NAME = "" ;
        // detect button table on click
        $("#table-detail").on("click",".btn-table", function () {
             SELECTED_TABLE_ID = $(this).data("id");
             SELECTED_TABLE_NAME = $(this).data("name");
            $("#selected-table").html('<br><h3> Table: '+SELECTED_TABLE_NAME+'</h3><hr>');
        });

        $("#list-menu").on("click", ".btn-menu", function () {
           if (SELECTED_TABLE_ID == "") {
               alert("You Need Select Table First");
           }else {
               var menu_id = $(this).data("id");
               $.ajax({
                  type: "POST",
                  data:{
                      'menu_id' : menu_id,
                      'table_id' : SELECTED_TABLE_ID,
                      'table_name' : SELECTED_TABLE_NAME,
                      'quantity' : 1
                  },
                  url: "/cashier/orderFood",
                  success: function (data){
                      $("#order_id").html(data);
                  }

               });
           }
        });

    });
</script>

<script type="text/javascript">

</script>

</html>
