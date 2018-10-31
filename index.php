<?php
//require_once("config.php");
require_once("templates/header.php");
?>


<main>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-9 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-3 sidenav">
        <input type="text" class="form-control" placeholder="Lietotājvārds">
        <input type="password" class="form-control" placeholder="Parole">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" >
                    <i class="fas fa-sign-in-alt"></i> Pieslēgties
                </button>
            </div>
    </div>
  </div>
</div>


</main>

<?php
include_once("templates/footer.php");
?>