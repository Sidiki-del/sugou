<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css');
    <style>
    /* .img_size {
        width: 200px;
        height: 200px
    } */

    .div_center {
        text-align: center;
        padding-top: 40px;
    }

    .h2_font {
        font-size: 40px;
        padding-top: 40px;
        text-align: center;
        text-decoration: underline;

    }

    .th_des {
        padding: 30px
    }

    .th_class {
        background: gray;
    }

    .input_color {
        color: black;
    }

    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid blue;
    }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');

        <!-- partial -->
        @include('admin.navbar');

        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class='h2_font'>All Products</h2>
                <table class='center'>
                    <tr class='th_class'>
                        <th class='th_des'>Product Title</th>
                        <th class='th_des'>Description</th>
                        <th class='th_des'>Quantity</th>
                        <th class='th_des'>Category</th>
                        <th class='th_des'>Price</th>
                        <th class='th_des'>Discount Price</th>
                        <th class='th_des'>Product Image</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product -> title}}</td>
                        <td>{{$product -> description}}</td>
                        <td>{{$product -> quantity}}</td>
                        <td>{{$product -> category}}</td>
                        <td>{{$product -> price}}</td>
                        <td>{{$product -> discount}}</td>
                        <td><img class='img_size' src="/product/{{$product -> image}}" alt="" srcset=""></td>
                    </tr>

                    @endforeach

                </table>


            </div>
        </div>
    </div>

    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');

    <!-- End custom js for this page -->
</body>

</html>