<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    
        <div style="position: relative; top: 60px; right: -150px;">
            <table style="background-color: #750E21; border:3px;" >
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                    
                </tr>
                @foreach ($data as $data)
                    
                
                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    
                    <!--condition for delete usertype-->
                    @if ($data->usertype=="0")
                    <td><a href="{{ url('/deleteUser',$data->id) }}">Delete</a></td>
                    @else
                    <td><a>Not Allowed</a></td>
                    @endif
                    
                </tr>
                @endforeach
            </table>
        </div>
    
    </div>
   @include("admin.adminscript");    
    
    
  </body>
</html>