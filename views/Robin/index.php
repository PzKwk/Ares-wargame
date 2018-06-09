<?php ?>




<h1 class="display-1">Adminbereich</h1>

<div class="container mt-5">
    <div class="align-self-center d-inline-flex mt-5">

    <form class="form-inline" action="<?php echo URL."/Robin/checkPWRobin";?>" method="POST">
        <div class="form-group mx-sm-3">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="password" name="Passwort" class="form-control" id="inputPassword2" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-secondary ml-3">Confirm identity</button>
    </form>
    </div>
</div>





