<?php
     require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>
<!-- comments are important to remember why you made the codee -->
<form method="post" action="<?php echo $path . "controler/create-user.php"; ?>" >
     <div>
          <label for="email">Email: </label>
          <input type="text" name="email"/>
     </div>
<!-- this code is so people can log into our blog post form -->
    <div>
    	  <label for="username">username: </label>
          <input type="text" name="username"/>
    </div>

    <div>
    	 <label for="password">password: </label>
    	 <input type="password" name="password"/>
    </div>
     
     <div>
     	  <button type="submit">submit</button>
     </div>
</form>
<!-- we need to tell the code to do something with this code and allow peple to sing up for the blog post -->