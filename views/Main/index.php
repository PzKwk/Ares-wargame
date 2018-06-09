
<?php ?>


<div class="container">

    <h1 class="display-3"><?php echo $this->Team; ?></h1>


    <div class="container ml-5 mt-5">
        <form class="form-inline"  action="checkPW" method="POST">
            <div class="form-group mx-sm-3">
                <input  class="form-control" type="password" name="<?php echo $this->Team; ?>" placeholder="Password">
            </div>
            <div class="btn-group ">
                <button type="submit" class="btn btn-success" >Login</button>
        </form>
    </div>
</div>

