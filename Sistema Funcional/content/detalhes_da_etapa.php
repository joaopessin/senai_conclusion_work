<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/detalhes_da_etapa.css">
  </head>
  <body>
  <header>
    <div class="page">
      <nav class="page__menu menu">
        <ul class="menu__list r-list">
          <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
          <li class="menu__group"><a href="detalhes_obras.php" class="menu__link r-link text-underlined">Detalhes</a></li>
          <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Andamento</a></li>
          <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Funcionários</a></li>
          <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Mensagens</a></li>
          <li id="logout" class="menu__group menu__logout"><a href="tela_principal_construtora.php" class="menu__link r-link text-underlined">Sair</a></li>
        </ul>
      </nav>
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
        <h3>DETALHES DA ETAPA</h3>
        </div>
    <div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><i class="material-icons">&#xE145;</i></a>
        </div>
    
    <!--   End cont_todo_list_top  -->  </div>
    <div class="cont_crear_new">
      <table class="table">
    <tr>
      <th>Action</th>
      <th>Title</th>
    <th>Date</th>
        </tr>
        <tr>
        <td><select name="" id="action_select">
    <option value="SHOPPING">SHOPPING</option>
    <option value="WORK">WORK</option> <option value="SPORT">SPORT</option> <option value="MUSIC">MUSIC</option> 
          </select>
    <!-- End td 1 -->
          </td>
          <td>
    <input type="text" class="input_title_desc" />      

            <!-- End td 2 -->
          </td>
        <td>
    <select name="" class="input_description_title"  id="date_select">
    <option value="TODAY">TODAY</option>
    <option value="TOMORROW">TOMORROW</option>       </select>

          <!-- End td 3 -->
          </td>
        </tr>
    <tr>
      <th class="titl_description" >Description</th>
        </tr>
    <tr>

      <td colspan="3">
      <input type="text" class="input_description" required />
      </td>
        </tr>
        <tr>
        <td colspan="3">
      <button class="btn_add_fin"  onclick="add_to_list()">ADD</button>
      </td>
        </tr>
      </table>
      <!--   End cont_crear_new  --> 
      </div>
      
      
    <div class="cont_princ_lists">
    <ul>
      <li class="list_shopping li_num_0_1">
      <div class="col_md_1_list">
        <p>SHOPPIGN</p>
        </div>
    <div class="col_md_2_list">
        <h4>BUY COFFEE BEANS</h4>
    <p>DODIDONE COFFEE STORE</p>
        </div>
        <div class="col_md_3_list">
    <div class="cont_text_date">
    <p>TODAY</p>      
          </div>    
    <div class="cont_btns_options">
      <ul>
    
        <li><a href="#" onclick="finish_action('0','0_1');"><i class="material-icons">&#xE5CA;</i></a></li>
      </ul>    
          </div>
        </div>
      </li>
    <!-- <li class="list_work"></li>
      <li class="list_sport"></li>
      <li class="list_music"></li>
    -->  </ul>
    <!--   End cont_todo_list_top  -->   </div>
      
      
      <!--   End cont_central  -->
      </div>
    </div>

    <script src="../script/detalhes_da_etapa.js"></script>
  </body>
</html>