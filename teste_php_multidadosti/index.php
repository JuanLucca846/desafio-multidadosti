<?php
require_once "DataRequest.php";
$dataRequest = new DataRequest();
?>

<?php
require_once 'DataRequest.php';

$dataRequest = new DataRequest();

if (isset($_POST['tipo'])) {
	$tipo = $_POST['tipo'];
	$html = '';

	if ($tipo === 'clientes') {
		$dados = $dataRequest->dadosClientes();
	} elseif ($tipo === 'usuarios') {
		$dados = $dataRequest->dadosUsuarios();
	} elseif ($tipo === 'fornecedores') {
		$dados = $dataRequest->dadosFornecedores();
	}

	foreach ($dados as $indice => $item) {
		$html .= '<tr>';
		$html .= '<td>' . ($indice + 1) . '</td>';
		$html .= '<td>' . $item['nome'] . '</td>';
		$html .= '<td>' . $item['cpf'] . '</td>';
		$html .= '<td>' . $item['endereco'] . '</td>';
		$html .= '<td>' . $item['telefone'] . '</td>';
		$html .= '<td>' . $item['usuario'] . '</td>';
		$html .= '<td>' . $item['email'] . '</td>';
		$html .= '</tr>';
	}

	echo $html;
	exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Multidados TI</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php require "./cabecalho.php"?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php require "./menu.php"?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>tudo que você precisa à um click.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $dataRequest->dadosClientes('c'); ?>
							</div>
							<div class="desc">
								 Clientes
							</div>
						</div>
						<a class="more" href="#" onclick="visualizarClientes()">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $dataRequest->dadosUsuarios('c'); ?>
							</div>
							<div class="desc">
								Usuários
							</div>
						</div>
						<a class="more" href="#" onclick="visualizarUsuarios()">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $dataRequest->dadosFornecedores('c'); ?>
							</div>
							<div class="desc">
								Fornecedores
							</div>
						</div>
						<a class="more" href="#" onclick="visualizarFornecedores()">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<!--Tabela-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i>Tabela Simples
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover" id="tabela-dados">
								<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Nome
									</th>
									<th>
										Sobrenome
									</th>
									<th>
										Usuario
									</th>
									<th>
										Status
									</th>
								</tr>
								</thead>
								<tbody>							
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php require "./rodape.php"?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   App.init(); // initlayout and core plugins
   Index.init();
});
</script>

<script>
		function mudarCores(corTitulo, corBody) {
			const titulo = document.querySelector(".portlet-title");
			const body = document.querySelector(".portlet-body");

			titulo.style.backgroundColor = corTitulo;
			body.style.backgroundColor = corBody;
		}

		function visualizarClientes() {
        	mudarCores('#208dbe', '#27a9e3');
			atualizarCabecalho('clientes');
			$.ajax({
				type: 'POST',
				url: 'DataRequest.php',
				data: {
					tipo: 'clientes'
				},
				success: function(data) {
					$('#tabela-dados').html(data);
				}
			});
    	}

    	function visualizarUsuarios() {
        	mudarCores('#10a062', '#28b779');
			atualizarCabecalho('usuarios');
			$.ajax({
				type: 'POST',
				url: 'DataRequest.php',
				data: {
					tipo: 'usuarios'
				},
				success: function(data) {
					$('#tabela-dados').html(data);
				}
			});
    	}

    	function visualizarFornecedores() {
        	mudarCores('#6e1881', '#852b99');
			atualizarCabecalho('fornecedores');
			$.ajax({
				type: 'POST',
				url: 'DataRequest.php',
				data: {
					tipo: 'fornecedores'
				},
				success: function(data) {
					$('#tabela-dados').html(data);
				}
			});
    	}

		function atualizarCabecalho(tipo) {
        var cabecalho = '<tr><th>#</th>';
        
        if (tipo === 'clientes') {
            cabecalho += '<th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>Email</th>';
        } else if (tipo === 'usuarios') {
            cabecalho += '<th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>Usuário</th>';
        } else if (tipo === 'fornecedores') {
            cabecalho += '<th>Nome</th><th>CPF</th><th>Cidade</th><th>Email</th>';
        }
        cabecalho += '</tr>';
        $('#tabela-dados thead').html(cabecalho);
    }
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>