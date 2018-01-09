<?php
require_once 'connexion.php';
$indice=$_GET['indice'];
$query="select * from RECVT_GISI where INDICE='$indice'";
$rs=sqlsrv_query($conn,$query);
$row=sqlsrv_fetch_array($rs);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top"><h3>SERVICE CLIENT GISI</h3></nav>
		<div class="container">
            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                <div class="form-group col-sm-6">
        			<h2 align="center"><u>INFO CLIENT</u></h2>
    			</div>
    			<div class="form-group col-sm-6">
        			<h2 align="center"><u>FACTURE</u></h2>
    			</div>
                <div class="form-group col-sm-6">
                    <label for="civilite" class="col-sm-3 control-label">CIV</label>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control" name="civ" value="<?php echo($row['CIV']) ?>">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="indice" class="col-sm-3 control-label">INDICE</label>
                    <div class="col-sm-9">
                        <input type="text"  disabled="disabled" class="form-control" name="indice" value="<?php echo($row['INDICE']) ?>">
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
                        <input type="email" class="form-control" name="email" value="<?php echo($row['E_MAIL']) ?>">
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
                    <label for="nm_f_edit" class="col-sm-3 control-label">NM_FACT_EDIT</label>
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
                        <input type="texte" class="form-control">
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
                        <button type="submit" class="btn btn-primary btn-block" name="enregistrer">ENREGISTRER</button>
                    </div>
                    <div class="form-group col-sm-6">
                    	<div class="col-sm-3 col-sm-offset-3">
                		<!-- Button trigger modal -->
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">COMMENTAIRE</button>
  						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  							<div class="modal-dialog" role="document">
    							<div class="modal-content">
      								<div class="modal-header">
        							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        							<h4 class="modal-title" id="myModalLabel">Commentaire..</h4>
      								</div>
      								<div class="modal-body">
        							<textarea name="comment" rows="8" cols="100%" placeholder="mettez votre texte ici ..."></textarea>
      								</div>
      								<div class="modal-footer">
        							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        							<button type="button" class="btn btn-primary">Enregistrer</button>
      								</div>
    							</div>
  							</div>
						</div>
                	</div>	
                    </div>
                </div>
                               
              
            </form> <!-- /form -->
		</div> <!-- ./container -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

