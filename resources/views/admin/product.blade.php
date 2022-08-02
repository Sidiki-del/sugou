<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css');
    <style>
    .div_center {
        text-align: center;
        padding-top: 40px;
    }

    .text_color {
        color: black;
        padding-bottom: 20px;
    }


    .h2_font {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color {
        color: black;
    }

    label {
        display: inline-block;
        width: 200px;
    }

    .div_design {
        padding-bottom: 15px;
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



                @if(session()->has('message'))
                <div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class='div_center'>

                    <h2 class='h2_font'>Add A Product</h2>

                    <form action="{{url('add_product')}}" method='POST' enctype='multipart/form-data'>
                        @csrf
                        <div class='div_design'>
                            <label for="">Product Title:</label>
                            <input type="text" placeholder='Write a title' name='title' class='text_color' required=''>
                        </div>
                        <div class='div_design'>
                            <label for="">Product Description:</label>
                            <input type="text" placeholder='Write a description' required='' name='description'
                                class='text_color'>
                        </div>
                        <div class='div_design'>
                            <label for="">Product Quantity:</label>
                            <input type="number" required='' placeholder='Write a quantity' min='0' name='quantity'
                                class='text_color'>
                        </div>

                        <div class='div_design'>
                            <label for="">Product Price:</label>
                            <input type="number" required='' placeholder='Write a price' name='price'
                                class='text_color'>
                        </div>

                        <div class='div_design'>
                            <label for="">Product Discount Price:</label>
                            <input type="number" placeholder='Write a discount price' name='dis_price'
                                class='text_color'>
                        </div>

                        <div class='div_design'>
                            <label for="">Product Category:</label>
                            <select class='text_color' name="category" required='' id="">
                                <option value="" selectted=''>Add a Category Here</option>
                                @foreach($data as $data)
                                <option value="{{$data->category_name}}">{{$data->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='div_design'>
                            <label for="">Product Image:</label>
                            <input type="file" name="image" id="" required=''>
                        </div>
                        <div class='div_design'>
                            <input value='Add Prouct' class='btn btn-primary' type="submit">
                        </div>
                    </form>


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