<?php
error_reporting(0);
?>
<script type="text/javascript">
    var custo = "0";
    var descricao_chk = "Cʜᴇᴄᴋᴇʀ | 𝙰𝚖𝚊𝚣𝚘𝚗  𝙰𝚞𝚍𝚒𝚋𝚕𝚎 | SʀMᴀx";
    var audio = new Audio('live.mp3'); // Carrega o som ao início
</script>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cʜᴇᴄᴋᴇʀ | 𝙰𝚖𝚊𝚣𝚘𝚗  𝙰𝚞𝚍𝚒𝚋𝚕𝚎 | SʀMᴀx | SrMax</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <style>
        body {
            background-color: #0a1f44; /* Fundo do corpo: azul escuro */
            color: #fff; /* Texto geral: branco */
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #172b4d; /* Contêiner principal: azul ainda mais escuro */
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Sombra do contêiner */
            color: #fff; /* Texto no contêiner principal: branco */
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h3 {
            color: #fff; /* Texto branco para o cabeçalho */
            font-weight: bold;
        }
        .stats-box {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background-color: #343a40; /* Fundo da caixa de estatísticas: cinza escuro */
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .stats-box .badge-success {
            background-color: #28a745; /* Badge Aprovado: verde */
        }
        .stats-box .badge-danger {
            background-color: #dc3545; /* Badge Recusado: vermelho */
        }
        .stats-box .badge-warning {
            background-color: #ffc107; /* Badge Erros: amarelo */
        }
        .stats-box .badge-light {
            background-color: #f8f9fa; /* Badge Total: cinza claro */
            color: #333; /* Texto do Badge Total: cinza escuro */
        }
        textarea, input[type="text"] {
            width: 100%;
            background-color: #e9ecef; /* Fundo dos campos de entrada */
            color: #333;
            border: 2px solid #dee2e6; /* Borda dos campos de entrada */
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.2s;
        }
        textarea:focus, input[type="text"]:focus {
            background-color: #fff;
            border-color: #6f42c1; /* Foco dos campos de entrada */
            box-shadow: 0 0 5px rgba(111, 66, 193, 0.25);
        }
        .btn-custom {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.2s;
        }
        .btn-primary.btn-custom {
            background-color: #6f42c1; /* Botão "Iniciar": roxo */
            color: #fff;
        }
        .btn-secondary.btn-custom {
            background-color: #dc3545; /* Botão "Parar": vermelho */
            color: #fff;
        }
        .btn-custom:hover {
            opacity: 0.8; /* Botões de ação principal (hover) */
        }
        .nav-link {
            color: #007bff; /* Links de navegação */
        }
        .nav-link.active {
            background-color: #FF69B4 !important; /* Background das abas de navegação ativas: rosa brilhante */
            color: #fff !important; /* Texto branco nas abas ativas */
            border-radius: 8px;
        }
        .tab-content {
            background-color: #172b4d; /* Fundo do conteúdo da aba: azul ainda mais escuro */
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            color: #fff; /* Texto do conteúdo da aba: branco */
        }
        .tab-pane h5 {
            margin-bottom: 15px;
            color: #fff; /* Texto do cabeçalho da aba: branco */
        }
        .checked-approved {
            color: #7CFC00; /* Aprovado: Verde claro florescente */
            font-weight: bold;
        }
        .checked-rejected {
            color: #FF4500; /* Reprovado: Vermelho claro brilhante */
            font-weight: bold;
        }
        .checked-error {
            color: #FFD700; /* Erro: Amarelo */
            font-weight: bold;
        }
        .text-recused {
            color: #FF0000; /* Cartão Recusado: Vermelho */
        }
        .text-approved {
            color: #00FF00; /* Cartão Aprovado para Transações: Verde */
        }
        .copy-button {
            float: right;
            margin-top: -40px;
            margin-right: 10px;
            cursor: pointer;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h3><i class="fas fa-cogs"></i> Cʜᴇᴄᴋᴇʀ | 𝙰𝚖𝚊𝚣𝚘𝚗  𝙰𝚞𝚍𝚒𝚋𝚕𝚎 | SʀMᴀx</h3>
        </div>

        <!-- Status Summary -->
        <div class="stats-box">
            <div>
                Aprovado: <span class="badge badge-success val-lives">0</span> 
            </div>
            <div>
                Recusado: <span class="badge badge-danger val-dies">0</span> 
            </div>
            <div>
                Verificado: <span class="badge badge-warning val-errors">0</span> 
            </div>
            <div>
                Total: <span class="badge badge-light val-total">0</span>
            </div>
        </div>

        <!-- Input for Cookies -->
        <input type="text" id="cookie-input-2" placeholder="COOKIE: ᴀᴍᴀᴢᴏɴ.ᴄᴏᴍ OU ᴀᴜᴅɪʙʟᴇ.ᴄᴏᴍ">

        <!-- Input Area -->
        <textarea id="lista_cartoes" placeholder="𝙰𝚍𝚒𝚌𝚒𝚘𝚗𝚎 𝚊𝚜 𝙶𝙶..."></textarea>

        <!-- Action Buttons -->
        <button class="btn btn-primary btn-custom" id="chk-start"><i class="fas fa-play"></i> Começar</button>
        <button class="btn btn-secondary btn-custom" id="chk-stop" disabled><i class="fas fa-stop"></i> Parar</button>
    </div>

    <!-- Result Tabs -->
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#chk-home" role="tab" aria-controls="home" aria-selected="true">Aprovados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#chk-lives" role="tab" aria-controls="profile" aria-selected="false">Recusados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="errors-tab" data-toggle="tab" href="#chk-errors" role="tab" aria-controls="errors" aria-selected="false">Erros</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="chk-home" role="tabpanel" aria-labelledby="home-tab">
                <h5>Aprovados</h5>
                <i class="fas fa-copy copy-button" id="copyAprovados" title="Copiar Aprovados"></i>
                <div id="lives" class="mt-3">
                </div>
            </div>
            <div class="tab-pane fade" id="chk-lives" role="tabpanel" aria-labelledby="profile-tab">
                <h5>Recusados</h5>
                <i class="fas fa-copy copy-button" id="copyRecusados" title="Copiar Recusados"></i>
                <div id="dies" class="mt-3">
                </div>
            </div>
            <div class="tab-pane fade" id="chk-errors" role="tabpanel" aria-labelledby="errors-tab">
                <h5>Erros</h5>
                <i class="fas fa-copy copy-button" id="copyErros" title="Copiar Erros"></i>
                <div id="errors" class="mt-3">
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            let stopped = true;
            let lista = [];
            let index = 0;
            
            $('#chk-start').click(function() {
                if ($('#lista_cartoes').val().trim() == "") {
                    toastr["error"]("Por favor, insira uma lista de cartões.");
                    return;
                }
                
                stopped = false;
                $('#chk-start').attr('disabled', true);
                $('#chk-stop').removeAttr('disabled');
                toastr["success"]("Checker iniciado!");
                
                lista = $('#lista_cartoes').val().trim().split('\n');
                index = 0;
                $(".val-total").text(lista.length);
                $(".val-lives").text(0);
                $(".val-dies").text(0);
                $(".val-errors").text(0);

                checkCard();
            });

            $('#chk-stop').click(function() {
                stopped = true;
                $('#chk-start').removeAttr('disabled');
                $('#chk-stop').attr('disabled', true);
                toastr["info"]("Checker parado!");
            });

            $('#copyAprovados').click(function() {
                var aprovados = $('#lives').find('p').map(function() {
                    return $(this).text().trim();
                }).get().join('\n\n');

                navigator.clipboard.writeText(aprovados).then(function() {
                    toastr["success"]("Cartões aprovados copiados para a área de transferência no formato correto!");
                }).catch(function(err) {
                    toastr["error"]("Erro ao copiar os cartões: " + err);
                });
            });

            $('#copyRecusados').click(function() {
                var recusados = $('#dies').find('p').map(function() {
                    return $(this).text().trim();
                }).get().join('\n\n');

                navigator.clipboard.writeText(recusados).then(function() {
                    toastr["success"]("Cartões recusados copiados para a área de transferência no formato correto!");
                }).catch(function(err) {
                    toastr["error"]("Erro ao copiar os cartões: " + err);
                });
            });

            $('#copyErros').click(function() {
                var erros = $('#errors').find('p').map(function() {
                    return $(this).text().trim();
                }).get().join('\n\n');

                navigator.clipboard.writeText(erros).then(function() {
                    toastr["success"]("Erros copiados para a área de transferência no formato correto!");
                }).catch(function(err) {
                    toastr["error"]("Erro ao copiar os erros: " + err);
                });
            });

            function checkCard() {
                if (stopped || index >= lista.length) {
                    return; // Se estiver parado ou todos os cartões foram verificados, não continua
                }

                var cartao = lista[index];
                var token_api = 'SEU_TOKEN_API'; // Certifique-se de que isso seja definido corretamente.
                var cookieValue = $('#cookie-input-2').val().trim();

                $.ajax({
                    url: 'api.php',
                    type: 'GET',
                    data: { lista: cartao, token_api: token_api, cookie: cookieValue },
                    success: function(response) {
                        if (response.includes("Aprovada")) {
                            $(".val-lives").text(parseInt($(".val-lives").text()) + 1);
                            $("#lives").append("<p><span class='checked-approved'>Aprovado ➔</span> " + cartao + " ➔ <span class='text-approved'>Cartão aprovado para transações</span>. (ᏟᎻᎬᏟᎪᎠϴ:✅️) ➔ @SenhorMAX<br><br>");
                            toastr["success"]("Aprovada: " + cartao);
                            audio.play(); // Toca o som quando o cartão é aprovado
                        } else if (response.includes("Reprovada")) {
                            $(".val-dies").text(parseInt($(".val-dies").text()) + 1);
                            $("#dies").append("<p><span class='checked-rejected'>Reprovado ➔</span> " + cartao + " ➔ <span class='text-recused'>Cartão recusado.</span>(Rᴇᴍᴏᴠɪᴅᴏ:❌️) ➔ @SenhorMAX<br>");
                            toastr["error"]("Reprovada: " + cartao);
                        } else {
                            $(".val-errors").text(parseInt($(".val-errors").text()) + 1);
                            $("#errors").append("<p><span class='checked-error'>Erro ➔</span> " + cartao + " ➔ Detalhes do erro...<br>");
                            toastr["warning"]("Erro com: " + cartao);
                        }

                        // Remove o cartão testado da lista
                        lista.splice(index, 1);
                        $('#lista_cartoes').val(lista.join('\n'));

                        // Verifica o próximo cartão após o sucesso ou falha
                        if (!stopped) {
                            checkCard();
                        }
                    },
                    error: function() {
                        $(".val-errors").text(parseInt($(".val-errors").text()) + 1);
                        $("#errors").append("<p><span class='checked-error'>Erro ➔</span> " + cartao + " ➔ Erro de conexão. @SenhorMAX<br>");
                        toastr["error"]("Erro de conexão ao verificar: " + cartao);

                        // Verifica o próximo cartão após erro de conexão
                        if (!stopped) {
                            checkCard();
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>