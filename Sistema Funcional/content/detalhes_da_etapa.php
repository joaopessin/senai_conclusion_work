<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/detalhes_da_etapa.css">
  </head>
  <body>
    <!-- Cabeçalho -->
    <header>
      <div class="page">
        <nav class="page__menu menu">
          <ul class="menu__list r-list">
            <!-- Logo e links do menu -->
            <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
            <li class="menu__group"><a href="detalhes_obras.php" class="menu__link r-link text-underlined">Detalhes</a></li>
            <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Andamento</a></li>
            <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Funcionários</a></li>
            <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Mensagens</a></li>
            <li id="logout" class="menu__group menu__logout"><a href="tela_principal_construtora.php" class="menu__link r-link text-underlined">Sair</a></li>
          </ul>
        </nav>
        <!-- Script para confirmação de logout -->
        <script>
          document.getElementById('logout').onclick = function() {
            return confirm("Você realmente deseja sair?");
          }
        </script>
      </div>
    </header>

    <div class="cont_principal">
      <div class="cont_centrar">

        <div class="cont_todo_list_top">
          <div class="cont_titulo_cont">
            <!-- Título da Página -->
            <h3>DETALHES DA ETAPA</h3>
          </div>
          <div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4" /><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" /></a>
          </div>
          <!-- Fim cont_todo_list_top  -->
        </div>

        <div class="cont_crear_new">
          <table class="table">
            <tr>
              <!-- Cabeçalhos da tabela -->
              <th>Periodicidade</th>
              <th>Nome</th>
              <th>Data de conclusão</th>
            </tr>
            <tr>
              <td>
                <!-- Dropdown para a periodicidade -->
                <select name="" id="periodicidade_select">
                  <option value="DIARIO">Diário</option>
                  <option value="SEMANAL">Semanal</option>
                  <option value="QUINZENAL">Quinzenal</option>
                  <option value="MENSAL">Mensal</option>
                </select>
                <!-- End td 1 -->
              </td>
              <td>
                <!-- Input para o nome -->
                <input type="text" class="input_title_desc" />      
                <!-- End td 2 -->
              </td>
              <td>
                <input type="date" class="input_description_title" id="date_input">
              </td>
            </tr>
            <tr>
              <th class="titl_description" >Descrição</th>
            </tr>
            <tr>
              <td colspan="3">
                <!-- Input para a descrição -->
                <input type="text" class="input_description" required />
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <!-- Botão para adicionar à lista -->
                <button class="btn_add_fin"  onclick="add_to_list()">ADICIONAR ETAPA</button>
              </td>
            </tr>
          </table>
          <!-- Fim cont_crear_new  -->
        </div>

        <div class="cont_princ_lists">
          <ul>
            <li class="list_diario li_num_0_1">
              <div class="col_md_1_list">
                <p>MENSAL</p>
              </div>
              <div class="col_md_2_list">
                <h4>CHECAGEM DE EPIs</h4>
                <p>A checagem deve ser feita em cada equipamento de proteção individual dos participantes da obra</p>
              </div>
              <div class="col_md_3_list">
                <div class="cont_text_date">
                  <p>2023-03-20</p>      
                </div>    
                <div class="cont_btns_options">
                  <ul>
                    <li><a href="#" onclick="finish_action('0','0_1');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" /></a></li>
                  </ul>    
                </div>
              </div>
            </li>
            <!-- <li class="list_semanal"></li>
            <li class="list_quinzenal"></li>
            <li class="list_mensal"></li>
            -->  
          </ul>
          <!-- Fim cont_todo_list_top  -->
        </div>

        <!-- Fim cont_central  -->
      </div>

      

      
    </div>

    <script src="../script/detalhes_da_etapa.js"></script>
  </body>
</html>
