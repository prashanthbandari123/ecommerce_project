


<!DOCTYPE html>
<html lang="en">
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
   @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
  </head>


      @include('admin.sidebar')

     
      <!-- partial -->
      @include('admin.navbar')
     
      <!DOCTYPE html>
      <html lang="en">
      
      <head>
          <!-- Required meta tags -->
          @include('admin.css')
          <style type="text/css">
         
              .title {
                  color: white;
                  padding-top: 25px;
                  font-size: 25px;
              }
              label{
                 display: inline-block;
                 width: 200px; 
              }
              .container{
                  padding-top: 50px;
                  padding-left:200px;
                  padding-right:20px; 
                  align="center";
                  
              }
          </style>
      </head>
      
      
      {{-- @include('admin.sidebar')
      
      
      
      @include('admin.navbar')
       --}}
      
      
      
      <div>
          <div class="container-fluid page-body-wrapper">
              <div class="container">
                  <h1 class="title">Add Product</h1>
                  @if(session()->has('message'))
                  <div class="alert alert-success" >
                  <button type="submit" class="close" style="float: right" data-dismiss="alert" class="row flex-fill" class="inline">X</button>
                  {{session()->get('message')}}
              </div>
                  @endif
      
                  <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
      
      
                      <div style="padding:15px ">
                          <label>Product title</label>
      
                          <input style="color: black;" type="text" type="color" name="title" 
                          value = "{{$data->title}}" placeholder="Give a product Title">
                      </div>
      
                      <div style="padding:15px ">
                          <label>Price</label>
                          <input style="color: black;" type="number" name="price"  value = "{{$data->price}}"placeholder="Give a product price" required="">
                      </div>
      
                      <div style="padding:15px ">
                          <label>Description</label>
                          <input style="color: black;" type="text" name="description" 
                          value = "{{$data->description}}"placeholder="Give a product description" required="">
                      </div>
                      <div style="padding:15px ">
                          <label>Quantity</label>
                          <input style="color: black;" type="text" name="quantity"  value = "{{$data->quantity}}" placeholder="Give a product quantity" required="">
                      </div>

                      <div style="padding:15px ">
                        <label>Old Image</label>
                        <img height="100" width="100" src="/productimage/{{$data->image}}">
                        
                    </div>
      
                      <div style="padding:15px;">
                        <label>Change the Image</label>
                          <input style="color: white;" type="file" name="file">
                      </div>
      
                      <div style="padding:15px;">
                          <input class="btn btn-danger" type="submit">
                      </div>
                  </form>
              </div>
          </div>
      </div>
      </div>
      
      
      
      
      
      
      
      
      
      @include('admin.footer')
      
      </body>
      
      </html>
      


       
    <!-- End custom js for this page -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>




