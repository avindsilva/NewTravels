<!DOCTYPE HTML> 
<html>
	<head>
    	<title>User</title>
	</head>
	<body> 
    <center>
	    <div >
        <form name="users" action="users.php" method="post">
       	  <table border="0" align="center">
          		<tr>
                	<input type="submit" name="submit" value="Insert"/>
                </tr>
            	<tr align="center">
                	<td><label>User Id</label></td>
                    <td><label>User Name</label></td>
                    <td><label>Password</label></td>
                </tr>
                <tr >
                	<td><input type="text" name="user_id" /></td>
	          	    <td><input type="text" name="username" /></td>
                    <td><input type="password" name="password" /></td>
	            </tr>
            
          </table>
        </form>
    	</div> 
        <br/><br/><br/><br/><br/>
        
        <div>
        <form name="users" action="users.php" method="post">
        
            <input type="submit" name="submit" value="View"/>
        </form>
	    </div>
        
    </center>
	</body>
</html>