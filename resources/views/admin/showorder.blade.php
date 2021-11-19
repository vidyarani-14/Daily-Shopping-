<x-app-layout>
    
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
@include('admin.sidebar')
@include('admin.navbar')




<div class="container-fluid page-body-wrapper">
<div class="container" align="center">

<table>
    <tr style="background-color: grey;">
        <td style="padding: 20px;">Customer name</td>
        <td  style="padding: 20px;">Phone</td>
        <td  style="padding: 20px;">Address</td>
        <td  style="padding: 20px;">Product title</td>
        <td  style="padding: 20px;">price</td>
        <td  style="padding: 20px;">Quantity</td>
        <td style="padding: 20px;">Status</td>
        <td style="padding: 20px;">Action</td>
    </tr>

    @foreach($order as $orders)

    <tr style="background-color: black;" align="center">
        <td style="padding: 20px;">{{$orders->name}}</td>
        <td style="padding: 20px;">{{$orders->phone}}</td>
        <td style="padding: 20px;">{{$orders->address}}</td>
        <td style="padding: 20px;">{{$orders->product_name}}</td>
        <td style="padding: 20px;">{{$orders->price}}</td>
        <td style="padding: 20px;">{{$orders->quantity}}</td>
        <td style="padding: 20px;">{{$orders->status}}</td>
        <td style="padding: 20px;"><a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}" >Delivered</a></td>
    </tr>
    @endforeach
</table>

</div>
</div>








        <!-- partial -->
       

       @include('admin.script')
  </body>
</html>