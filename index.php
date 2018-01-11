<?php
require_once 'connexion.php';
$indice=$_GET['indice'];
$query="select * from RECVT_GISI where INDICE='$indice'";
$rs=sqlsrv_query($conn,$query);
$row=sqlsrv_fetch_array($rs);
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href=css/bootstrap.min.css>
        <script type="text/javascript" src="js/respond.min.js"></script>
        <script type="text/javascript" src="js/html5shiv.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top"><h3>SERVICE CLIENT GISI</h3></nav>
		<div class="container">
            <form class="form-horizental" role="form" method="POST" enctype="multipart/form-data">
                <div class="form-group col-sm-6">
        			<h2 align="center"><u>INFO CLIENT</u></h2>
    			</div>
    			<div class="form-group col-sm-6">
        			<h2 align="center"><u>FACTURE</u></h2>
    			</div>
                <div class="form-group col-sm-6">
                    <label for="civilite" class="col-sm-3 control-label">CIV</label>
                    <div class="col-sm-3">
                        <input type="text"  class="form-control" name="civ" value="<?php echo($row['CIV']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="indice" class="col-sm-3 control-label">INDICE</label>
                    <div class="col-sm-3">
                        <input type="text" disabled="disabled" class="form-control" name="indice" value="<?php echo($row['INDICE']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="nom" class="col-sm-3 control-label">NOM</label>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control" name="nom" value="<?php echo($row['NOM']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="<?php echo($row['E_MAIL']) ?>" onblur="validateEmail(this);">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="prenom" class="col-sm-3 control-label">PRENOM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="prenom" value="<?php echo($row['PRENOM']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="nm_cli" class="col-sm-3 control-label">NM_CLI</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nmCli" value="<?php echo($row['NUM_CLI']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="rs" class="col-sm-3 control-label">RS</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="rs" value="<?php echo($row['RS']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="k_titre" class="col-sm-3 control-label">K_TITRE</label>
                    <div class="col-sm-9">
                        <input  disabled="disabled" type="texte" class="form-control">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="cp" class="col-sm-3 control-label">CP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cp" value="<?php echo($row['CP']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="nm_f_edit" class="col-sm-3 control-label">NM_FCT_EDIT</label>
                    <div class="col-sm-9">
                        <input  disabled="disabled" type="texte" class="form-control">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="localite" class="col-sm-3 control-label">LOCALITE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="localite" value="<?php echo($row['LOCALITE']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="mt_ttc" class="col-sm-3 control-label">MT_TTC</label>
                    <div class="col-sm-9">
                        <input type="texte" disabled="disabled" class="form-control">
                    </div>
                </div>
            	<div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">TEL</label>
                    <div class="col-sm-9">
                        <input type="texte" name="tel" class="form-control" value="<?php echo($row['TEL']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="dde_rappel" class="col-sm-3 control-label">DDE_RAPPEL</label>
                    <div class="col-sm-9">
                        <select id="dde_rappel" class="form-control" name="demandeRappel">
                            <option>- - - - - - - -</option>
                            <option>Demande de facture Courrier</option>
            				<option>Demande de facture par mail</option>
            				<option>Demande justificatif commande</option>
            				<option>Demande mail d'information</option>
            				<option>Promesse de règlement</option>
            				<option>Recherche paiement en cours</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                	
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary" name="enregistrer">ENREGISTRER</button>
                    </div>
                    <div class="form-group col-sm-6">
                    	<div class="col-sm-3 col-sm-offset-3">
                		<!-- Button trigger modal -->
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">COMMENTAIRE</button>
  						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  							<div class="modal-dialog" role="document">
    							<div class="modal-content">
      								<div class="modal-header">
        							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        							<h4 class="modal-title" id="myModalLabel">Commentaire..</h4>
      								</div>
      								<div class="modal-body">
        							<textarea name="comment" rows="8" cols="80%" placeholder="mettez votre texte ici ..."></textarea>
      								</div>
      								<div class="modal-footer">
        							<button type="button" class="btn btn-primary" data-dismiss="modal" name="ok">Enregistrer</button>
      								</div>
    							</div>
  							</div>
						</div>
                	</div>	
                    </div>
                </div>
            </form> <!-- /form -->
		</div> <!-- ./container -->
        <script>function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Entrer une adresse mail valide !');
            return false;
        }

        return true;}
        </script>
		<!-- jQuery library -->
		<script
              src="https://code.jquery.com/jquery-1.12.4.js"
              integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
              crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
	<?php
	if(isset($_POST["enregistrer"])) {
    $indice=$row['INDICE'];
    $civ=$_POST['civ'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $rs=$_POST['rs'];
    $codepostal=$_POST['codePostal'];
    $localite=$_POST['localite']; 
    $tel=$_POST['tel'];
    $mail=$_POST['email'];
    $drappel=$_POST['demandeRappel'];
    $text=$_POST['comment'];
    $reqUpdate="UPDATE RECVT_GISI SET CIV='$civ',NOM='$nom',PRENOM='$prenom',RS='$rs',CP='$codepostal',LOCALITE='$localite',E_MAIL='$mail',TEL='$tel',Choix='$drappel',COM='$text' WHERE INDICE=$indice";
    sqlsrv_query($conn,$reqUpdate);
    echo "<meta http-equiv='refresh' content='0'>"; 
    }    
    ?>
</html>