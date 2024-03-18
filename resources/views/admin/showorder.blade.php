


<!DOCTYPE html>
<html lang="en">
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
  </head>


      @include('admin.sidebar')

     
      <!-- partial -->
      @include('admin.navbar')
  
      <div class="container-fluid page-body-wrapper">
        <div class="container p-5" align="center"  >
            <table >
                <tr   style="background-color: grey" align="center">
                    <td style="padding: 20px;">Customer Name</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Product title</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Status</td>
                    <td style="padding: 20px;">Action</td>

                    
                </tr>

                @foreach ($order as $orders )
                    
               

                <tr>
                    <td style="padding: 20px;">{{$orders->name}}</td>
                    <td style="padding: 20px;">{{$orders->phone}}</td>
                    <td style="padding: 20px;">{{$orders->address}}</td>
                    <td style="padding: 20px;">{{$orders->product_name}}</td>
                    <td style="padding: 20px;">{{$orders->price}}</td>
                    <td style="padding: 20px;">{{$orders->quantity}}</td>
                    <td style="padding: 20px;">{{$orders->status}}</td>
                    <td style="padding: 20px;" >
                        <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</td>
                </tr>
                @endforeach
            </table>

        </div>
      </div>
         
        
         @include('admin.footer')
   
  </body>
</html>




