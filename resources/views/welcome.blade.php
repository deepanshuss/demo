<h1> Registartion Form</h1>
<h1> Registartion Form</h1>
<form action="{{route('demo')}}" method="post">  
 @csrf
  <input type ="text" name="firstname" placeholder="Firstname"><br>
  <input type ="text" name="lastname" placeholder="Lastname"><br>
  <input type ="text" name="email" placeholder="Email"><br>
  <input type ="password" name="password" placeholder="Password"><br>
  <input type ="submit" name="submit" value="Submit">
</form>