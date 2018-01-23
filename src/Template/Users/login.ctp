<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>

<div class="container" id="logincontainer">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4">
            <img src="images/logo.png" class="img-fluid" id="loginimagehead">
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        </div>

        <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4 text-center">
            <form>
              <div class="form-group">
                <input type="name" name="name" class="form-control" placeholder="Username" id="name">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
</div>
</div>
<?= $this->Form->end() ?>