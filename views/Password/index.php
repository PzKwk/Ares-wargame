<?php ?>



<h1 class="display-1">Passwort Editor <?php echo $this->Team; ?> </h1>

<div class="container mt-5">
    <div class="align-self-center d-inline-flex mt-5">

        <form class="form-inline" action="<?php echo $this->Team; ?>" method="POST">

            <div class="form-group mx-sm-3">

                <div class="col"><div class="row mt-3">
                        <label for="inputPasswordRoot" class="sr-only">Neues Passwort</label>

                        <input type="password" name="PasswortRoot" class="form-control" id="inputPasswordRoot" placeholder="Root">

                    </div>

                    <div class="row mt-3">
                        <label for="inputPasswordAchseNew" class="sr-only">Neues Passwort</label>

                        <input type="password" name="<?php echo 'Passwort'.$this->Team.'New'; ?>" class="form-control" id="inputPasswordAchseNew" placeholder="<?php echo $this->Team; ?>">
                    </div><div class="row mt-3">
                        <button type="submit" class="btn btn-secondary">Passwort ändern</button>
                    </div></div></div>
        </form>
    </div>
</div>

<div class="container mt-5" >

    <a class='badge badge-primary mt-5' href='<?php echo URL;?>/index'>zurück zur Startseite</a>
</div>
