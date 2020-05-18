<form action="/addu" method="POST" class="text-center border border-light p-5">
	{{csrf_field()}}
	
	<input type="text" name="name" class="form-control mb-4" placeholder="name" >
    <br>
  

	
	<input type="text" name="username" class="form-control mb-4" placeholder="email" >
    <br>
    


   
    
	<input type="password" name="password" class="form-control mb-4" placeholder="password" >
    <br>
    
    

<button class="btn btn-info btn-block my-4" type="submit" name="insert">insert</button>	

</form>