<h2 class="title title-primary">Fale Conosco</h2>
<form class="form" method="post">
    <script>
        
     function MascaraTelefone(event) {
    const telefone = event.target;
    const digitosTelefone = telefone.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    if (digitosTelefone.length <= 11) {
        // Máscara para telefone com até 11 dígitos
        telefone.value = digitosTelefone.replace(/(\d{2})(\d{1,5})(\d{1,4})/, '($1)$2-$3');
    } else {
        // Máscara para telefone com 12 dígitos (considerando o DDD)
        telefone.value = digitosTelefone.replace(/(\d{2})(\d{2})(\d{1,5})(\d{1,4})/, '($1) $2$3-$4');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const telefoneInput = document.querySelector('input[name="telefone"]');
    telefoneInput.addEventListener('input', MascaraTelefone);
 });

 function enviarFormulario() {
    // Verifica se todos os campos obrigatórios estão preenchidos
    const nome = document.querySelector('input[name="nome_contato"]').value;
    const email = document.querySelector('input[name="email_contato"]').value;
    const mensagem = document.querySelector('textarea[name="mensagem_contato"]').value;
    const telefone = document.querySelector('input[name="telefone"]').value;

    if (nome && email && mensagem && telefone) {
        alert('Enviado com sucesso!');
        return true; // Permite o envio do formulário
    } else {
        alert('Por favor, preencha todos os campos.');
        return false; // Impede o envio do formulário
    }
}

</script>
<style> 
    body {
        font-family: 'Open Sans', sans-serif;
        background: linear-gradient( #ce93ce, #FFFFFF); 
    }
    .container {
    
        display: flex;
        justify-content: center;
        align-items: center;
        height: 110vh;
        background-color: #ecf0f1; /* #ecf0f1 */
    }
    .content {
        background-color: #FFF;
        border-radius: 15px;
        width: 960px;
        height: 50%;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }
    .second-column {
        width: 60%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .title-primary{
        text-align: center;
        color: #fff;
    }
    .btn {
        border-radius: 15px;
        text-transform: uppercase;
        color: #fff;
        font-size: 10px;
        padding: 10px 50px;
        cursor: pointer;
        font-weight: bold;
        width: 150px;
        align-self: center;
        border: none;
        margin-top: 1rem;
    }

    .btn-second {
        background-color:  #ce85ce;
    border: 1px solid  #ce85ce;
    transition: background-color .5s;
    }
    .btn-second:hover {
       background-color: #fff;
    border: 1px solid  #ce85ce;
    color:  #ce85ce;
    }
    .btn-volt {
        background-color:  #ce85ce;
    border: 1px solid  #ce85ce;
    transition: background-color .5s;
    }
    .btn-volt:hover {
       background-color: #fff;
    border: 1px solid  #ce85ce;
    color:  #ce85ce;
    }
    .form {
        display: flex;
        flex-direction: column;
        width: 55%;
         margin: auto; 
        

    }
    .form input {
        height: 45px;
        width: 100%;
        border: none;
        background-color: #ecf0f1; /* #ecf0f1 */
    }
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #ecf0f1 inset !important;
        -webkit-text-fill-color: #000 !important;
    }
    .label-input {
        background-color: #ecf0f1; /* #ecf0f1 */
        display: flex;
        align-items: center;
        margin: 8px;
    }
    .icon-modify {
        color: #000;
        padding: 0 5px;
    }

    .second-content {
        position: absolute;
        display: flex;
    }
    .second-content .first-column {
        order: 2;
        z-index: -1;
    }
    .second-content .second-column {
        order: 1;
        z-index: -1;
    }
    a{
        text-decoration:none;
        color: #fff;
    }
                       </style> 

    <label class="label-input" for="">
    <i class="far fa-user icon-modify"></i>
        <input class="icon-modify "type="text" name="nome_contato" placeholder="Seu Nome" required>
    </label>

    <label class="label-input" for="">
        <i class="far fa-envelope icon-modify"></i>
        <input type="email" name="email_contato" placeholder="Seu E-mail" required>
    </label>

    <label class="label-input" for="">
        <i class="fas fa-comment icon-modify"></i>
        <textarea name="mensagem_contato" placeholder="Sua Mensagem" required></textarea>
    </label>

    <label class="label-input" for="">
        <i class="fas fa-phone icon-modify"></i>
        <input type="text" name="telefone" maxlength="14" size="12" placeholder="(99)99999-9999" onkeypress="return MascaraTelefone(window.event.keyCode)"  required>
                    </label>
    <label class="label-input" for="">
        <i class="fas fa-phone icon-modify"></i>
        (<input type="text" name="cod-reg" size="1" maxlength="2" placeholder="DDD" required onkeypress="return blokletras(window.event.keyCode)">)
        <input type="text" name="prefixo" size="2" maxlength="5" placeholder="Prefixo" required onkeypress="return blokletras(window.event.keyCode)">
         - 
        <input type="text" name="sufixo" size="2" maxlength="4" placeholder="Sufixo" required onkeypress="return blokletras(window.event.keyCode)">
    </label>
         
    <button class="btn btn-second" name="btn_contato"  onclick="return enviarFormulario(window.event.keyCode)"  required>Enviar Mensagem</button>
    <button class= "btn btn-volt"><a href="menu.html">Voltar</a></button>
</form>
</div>
<div class="second-column">
<!-- Seu código para a segunda coluna da seção "Fale Conosco" vai aqui, se necessário -->
</div>
</div>
