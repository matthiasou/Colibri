<?php
include("header.php");
//session_start();
//
?>


<br><br><br><br>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Paiement</li>
			</ol>
		</div>
        <div class="col-xs-12 col-md-4" style="  margin-left: auto; color:#122b40; font-size: 12pt; line-height: 2em;">
            <p><h3>Paiement:</h3>
            <ul>
                <li>Vous pouvez payer par différents moyens</li>
                <li>Paypal</li>
                <li>Virement bancaire</li>
                <li>Chèque</li>
                <li>A la remise des paniers</li>
            </ul>
            </p>


        </div>
        <div class="col-xs-12 col-md-8"


        <!-- CREDIT CARD FORM STARTS HERE -->
        <div class="panel panel-default credit-card-box">
            <div class="panel-heading display-table" >
                <div class="row display-tr" >
                    <h3 class="panel-title display-td" >Cartes acceptées</h3>
                    <div class="display-td" >
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form action="contrat.php" method="post" role="form" id="payment-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="cardNumber"><h3><b>Total à régler : <?php echo $_SESSION['total']; ?> €</b></h3></label>
                            <br>
                            <div class="form-group">
                                <label for="cardNumber">Numéro carte</label>
                                <div class="input-group">
                                    <input
                                        type="tel"
                                        class="form-control"
                                        name="cardNumber"
                                        placeholder="Numéro de carte"
                                        autocomplete="cc-number"
                                        required autofocus
                                    />
                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="cardExpiry"><span class="hidden-xs">DATE</span><span class="visible-xs-inline">EXP</span> EXPIRATION</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    name="cardExpiry"
                                    placeholder="MM / YY"
                                    autocomplete="cc-exp"
                                    required
                                />
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cardCVC">CV CODE</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    name="cardCVC"
                                    placeholder="CVC"
                                    autocomplete="cc-csc"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="couponCode">COUPON </label>
                                <input type="text" class="form-control" name="couponCode" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Paiement</button>
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-xs-12">
                            <p class="payment-errors"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- CREDIT CARD FORM ENDS HERE -->


    </div>
	</div>

</section> <!--/#cart_items-->









<br><br><br><br><br><br><br><br><br><br><br><br>

<?php include("footer.php"); ?>