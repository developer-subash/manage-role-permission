<div>

<form method="post" action="{{ url('login')}}">
<input type="text" name="email" placeholder="email">
{{csrf_field()}}

<input type="password" name="password" placeholder="password">

<input type="submit" name="submit" value="save">	
</form>
</div>