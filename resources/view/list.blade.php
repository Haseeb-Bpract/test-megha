<<h1>Student  List</h1>
<table style="border: 3px solid black;">
	<style type="text/css">
		tr,td{border: 1px solid black;}
	</style>
	<tr>
	<td>Id</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td colspan="2">Action</td>
</tr>
@foreach($members as $item)
<tr>
	<td>{{$item['id']}}</td>
	<td>{{$item['name']}}</td>
	<td>{{$item['email']}}</td>
	<td>{{$item['address']}}</td>
	<td><a href="edit/{{$item['id']}}">Update</a></td>
	<td><a href="delete/{{$item['id']}}">Delete</a></td>
</tr>
@endforeach
</table>