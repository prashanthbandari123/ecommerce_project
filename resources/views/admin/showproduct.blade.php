<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

<head>
    <!-- Required meta tags -->
    @include('admin.css')



</head>



@include('admin.sidebar')



<!-- partial -->
@include('admin.navbar')


<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">

        <div style="padding:20px">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="submit" class="close" style="float: right" data-dismiss="alert"
                        class="row flex-fill" class="inline">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>


        <table>
            <tr style="background-color: grey">
                <td class="p-5">Title</td>
                <td class="p-5">Description</td>
                <td class="p-5">Quantity</td>
                <td class="p-5">Price</td>
                <td class="p-5">Image</td>
                <td class="p-5">Update</td>
                <td class="p-5">Delete</td>
            </tr>

            @foreach ($data as $product)
                <tr align="center" style="background-color:black ;">


                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img height="100" width="100" src="/productimage/{{ $product->image }}">
                    </td>
                    <td>

                        <a href="{{ url('updateview', $product->id) }}"><button class="btn btn-success"
                                type='submit'>Update</button></a>
                    </td>
                    <td>


                        <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</button>

                    </td>



                </tr>
            @endforeach
        </table>
    </div>
</div>

{{-- @include('admin.body') --}}

{{-- @include('admin.footer') --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
