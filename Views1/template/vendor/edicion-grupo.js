$(document).on('ready', funcPrincipal);

function funcPrincipal(){
	$("#bt_add").on('click', funcNuevoGrupo);
	$("#bt_del").on('click', funcEliminarFila);
}
function funcEliminarFila() 
{
	$(this).parent().parent().fadeOut( "slow", function() { $(this).remove(); } );
}
function funcNuevoGrupo()
{
	$("#tabla")
	.append
	(
		$('<tr>')
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'number').addClass('form-control')
				)
			)
		);
}