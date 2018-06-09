<?php ?>


<div class="container mt-5">
    <form class="form-inline" action="<?php echo URL;?>/Krause/newRootPW" method="POST">
        <div class="form-group mx-sm-3">
            <label for="inputPasswordroot" class="sr-only">Passwort root setzen:</label>
            <input type="password" name="PasswortRoot" class="form-control" id="inputPasswordroot" placeholder="new root">
        </div>
        <button type="submit" class="btn btn-secondary">Confirm new root password</button>
    </form>


    <form class="form-inline mt-5" action="<?php echo URL;?>/Logout/securityUnset" method="POST" >
        <input type="hidden" name="Logout" value="1">

        <button class="btn btn-outline-warning ml-5" type="submit" >Logout</button>
    </form>
</div>
