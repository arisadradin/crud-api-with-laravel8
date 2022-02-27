
@extends('layout')

@section('content')
<div class=" container relative flex items-top justify-left sm:items-top ">
    <form action="{{route('add')}}" method = "POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class = "form-control py-3" placeholder="enter your name" >
        </div>

        <div class = "form-group">
            <label for="location">email</label>
            <input type="text" name="email" class="form-control py-3" placeholder="enter your email">
        </div>

        <div class = "form-group">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control py-3" placeholder="enter your password">
        </div>


        <div class="form-group">
            <button type="submit" class="py-4" name="save"> Save </button>
        </div>
        
    </form>
</div>
<div class="relative flex items-top justify-left sm:items-top">
    
    <table algin="LEFT" border="1px" style="width : 400px; line-height 40px;">
        <thead>
            <tr>
                <th colspan = "5"> 
                    <h2>users table</h2> 
                </th>
            </tr>
            <tr>
                <th> ID </th>
                <th> first name</th>
                <th> last name </th>
                <th> email </th>
                <th> password </th>
                <th colspan="2">action</th>
            
            </tr>
         

            
                    
              
                
            
        </thead>

    </table>

</div>

@endsection