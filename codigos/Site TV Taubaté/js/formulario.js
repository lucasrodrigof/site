$('#form-contato').submit(function(){
    var celular = $('#celular');
    var senha = $('#senha');
    var erro = $('.alert');
    var campo = $('#campo-erro');
  
    // removendo o elemento da tela sempre que tentar submeter o formulario
    erro.addClass('d-none');
    $('.is-invalid').removeClass('is-invalid');
  
    // valida o campo celular
    if (celular.val() == '') {
      erro.removeClass('d-none');
      campo.html('celular'); // nome do campo que não foi preenchido!
      celular.focus();
      celular.addClass('is-invalid');
      return false;
    }
    // valida o campo e-mail
    if (senha.val() == '') {
      erro.removeClass('d-none');
      campo.html('e-mail'); // nome do campo que não foi preenchido!
      senha.focus();
      senha.addClass('is-invalid');
      return false;
    }  
    
    
    // se chegar aqui pode enviar os dados!
    return true;
  });