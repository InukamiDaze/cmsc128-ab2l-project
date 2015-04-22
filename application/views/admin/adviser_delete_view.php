	<div class="adminprofile">
		<div class="pure-menu adminnav">
        <ul class="pure-menu-list custom-restricted-width">

			<li class="pure-menu-item pure-menu-selected">
                <a href="#" class="pure-menu-link navLink" id="logs">Logs</a>
            </li>

            <li class="pure-menu-item pure-menu">
                <a href="#" class="pure-menu-link navLink" id="add">Add</a>
            </li>

			<li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="update">Update</a>
            </li>

            <li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="view">View</a>
            </li>

            <li class="pure-menu-item menu-item-divided">
                <a href="<?php echo site_url('admin/delAdviser') ?>" class="pure-menu-link navLink" id="delete">Delete</a>
            </li>

        </ul>
		</div>
		
		<div>
			<?php  echo form_open('admin/delAdviser/'); ?>
			<form method="POST" action="#" >
			Adviser to Delete:
			<input type="text" name="employee_number" placeholder="Insert Employee Number">
			<button class="pure-button" type="submit">Delete</button>
			</form>
		</div>

	<div>
		
	</div>
</body>

<!--<script type = "text/javascript">
	function checkEnum(){
		var x = document.forms["myForm"]["enum"].value;
		var e = /^-?[0-9]+$/;

		if(x.length == 0 || x.length != 10 || !e.test(x)){
		alert("Please input Employee Number with 10 integer characters!");
		}
	}
</script>-->

