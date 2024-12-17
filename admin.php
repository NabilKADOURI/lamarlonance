<?php
session_start();
require_once __DIR__ . '/functions/utils.php';

if (isset($_SESSION['userAdmin'])) 
{
redirect('index-admin.php');

}

require_once 'layout/header.php';

?>

<main class="d-flex w-100">
  <div class="container d-flex justify-content-center align-items-center ">
    <form method="POST" action="admin-process.php">
      <div class="d-flex flex-column justify-content-center ">

        <div class="col-12">
          <div class="mb-3">
              <input type="text" name="userAdmin" class="form-control" id="userAdmin" 
              aria-describedby="userAdmin" placeholder="Identifiant">
          </div>
        </div>

        <div class="col-12">
          <div class="mb-3">
            <input type="password" name="password" class="form-control" id="password" 
            placeholder="Mots de passe">
          </div>
        </div>

        <div class="col-12">
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Check">
            <label class="form-check-label" for="Check">rester connecter</label>
          </div>
        </div>

        <div class="col-lg-6">
        <button type="submit"  class="btn mb-5">Connection</button>
        </div>
      </div>
    </form>
  </div> 

</main>