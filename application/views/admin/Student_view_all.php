     <form method="post" action="search_student_keyword">
	<input type="text" name="search_keyword" size="20" />
	<input type="submit" name="submit" value="Search" />
    </form>
    
    <table width="600" border="1" cellpadding="5">
    
        <tr>
            <th scope="col">Student Number</th>
            <th scope="col">User Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Classification</th>
            <th scope="col">Curriculum</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email Address</th>
            <th scope="col">College Address</th>
            <th scope="col">Home Address</th>
            <th scope="col">Relative</th>
            <th scope="col" colspan="2">Action</th>
        </tr>

        <?php foreach ($user_list as $u_key){ ?>

        <tr>

            <td><?php echo $u_key->student_number; ?></td>
            <td><?php echo $u_key->username; ?></td>
            <td><?php echo $u_key->last_name; ?></td>
            <td><?php echo $u_key->first_name; ?></td>
            <td><?php echo $u_key->middle_name; ?></td>
            <td><?php echo $u_key->classification; ?></td>
            <td><?php echo $u_key->curriculum; ?></td>
            <td><?php echo $u_key->contact_number; ?></td>
            <td><?php echo $u_key->email_address; ?></td>
            <td><?php echo $u_key->college_address; ?></td>
            <td><?php echo $u_key->home_address; ?></td>
            <td><?php echo $u_key->relative; ?></td>
        </tr>

        <?php }?>

    </table>
