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

        <!-- partial -->
       

        @include('admin.body')
       @include('admin.script')
  </body>
</html>