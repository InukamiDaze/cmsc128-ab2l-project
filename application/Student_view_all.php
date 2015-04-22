<!DOCTYPE html>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CI CRUD</title>
	</head>

	<body>
		<table width="600" border="1" cellpadding="5">
		<tr>
			<th scope="col">Id</th>
			<th scope="col">User Name</th>
			<th scope="col">Email</th>
			<th scope="col">Mobile</th>
			<th scope="col">Address</th>
			<th scope="col" colspan="2">Action</th>
		</tr>

		<?php foreach ($user_list as $u_key){ ?>

		<tr>
			<td><?php echo $u_key->id; ?></td>
			<td><?php echo $u_key->name; ?></td>
			<td><?php echo $u_key->email; ?></td>
			<td><?php echo $u_key->address; ?></td>
			<td><?php echo $u_key->mobile; ?></td>
			<td width="40" align="left" ><a href="#">Edit</a></td>
			<td width="40" align="left" ><a href="#">Delete </a></td>
		</tr>

		<?php }?>

		<tr>
			<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/user/add_form">Insert New User</a></td>
		</tr>

		</table>

	</body>

</html>

