       
<h1>Login</h1>
<!--
<form action="/logar" method="post">
    <label for="email">Email: </label>
    <br>
    <input type="text" name="username" id="email">
 
    <br><br>
 
    <label for="password">Senha: </label>
    <br>
    <input type="password" name="password" id="password">
 
    <br><br>
 
    <input type="submit" value="Entrar">
</form>

<br>

<form action="/add" method="get">
    <input type="submit" value="Cadastrar">
</form>
-->

<div ng-app="postLogin" ng-controller="PostController as postCtrl">
    <div class="container">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <div class="row">
               <img src="images/logo.jpg" class="imglogo"/>
            </div>
            <div class="panel panel-default" >
               <div class="panel-heading">
                  <div class="panel-title text-center">Login using username & password</div>
               </div>
               <div class="panel-body" >
                  <form name="login" ng-submit="postCtrl.postForm()" class="form-horizontal" method="POST">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" id="inputUsername" class="form-control" required autofocus ng-model="postCtrl.inputData.username"/>
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" id="inputPassword" class="form-control" required ng-model="postCtrl.inputData.password"/>
                     </div>
                     <div class="alert alert-danger" ng-show="errorMsg">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                        <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12 controls">
                           <button type="submit" class="btn btn-primary pull-right" ng-disabled="login.$invalid">
                           <i class="glyphicon glyphicon-log-in"></i> Log in</button>
                           
                        </div>

                     </div>

                  </form>

                  <form name="cadastro" ng-submit="postCtrl.getForm()" class="form-horizontal" method="get" action="/add">
                        <button type="submit" class="btn btn-primary pull-right" >
                        <i class="glyphicon glyphicon-log-in"></i> Cadastrar
                        </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
</div>

<!--<div ng-app="getCadastro" ng-controller="GetController as posrCtrl">
    <button type="submit" class="btn btn-primary pull-right" ng-disabled="login.$invalid">
        <i class="glyphicon glyphicon-log-in"></i> Log in</button>
</div>-->
<script src="js/login.js"></script>