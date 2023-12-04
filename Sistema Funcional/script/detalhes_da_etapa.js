var contador = 0,
  select_opt = 0;

function add_to_list() {
  var periodicidade = document.querySelector('#periodicidade_select').value,
    descricao = document.querySelector('.input_description').value,
    nome = document.querySelector('.input_title_desc').value,
    data = document.getElementById('date_input').value;

  switch (periodicidade) {
    case "DIARIO":
      select_opt = 0;
      break;
    case "SEMANAL":
      select_opt = 1;
      break;
    case "QUINZENAL":
      select_opt = 2;
      break;
    case "MENSAL":
      select_opt = 3;
      break;
  }

  var class_li = ['list_diario list_dsp_none', 'list_semanal list_dsp_none', 'list_quinzenal list_dsp_none', 'list_mensal list_dsp_none'];

  var cont = '<div class="col_md_1_list"><p>' + periodicidade + '</p></div><div class="col_md_2_list"><h4>' + nome + '</h4><p>' + descricao + '</p></div><div class="col_md_3_list"><div class="cont_text_date"><p>' + data + '</p></div><div class="cont_btns_options"><ul><li><a href="#finish" onclick="finish_action(' + select_opt + ',' + contador + ');" >' + '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" />' + '</a></li></ul></div></div>';

  var li = document.createElement('li');
  li.className = class_li[select_opt] + " li_num_" + contador;

  li.innerHTML = cont;
  document.querySelectorAll('.cont_princ_lists > ul')[0].appendChild(li);

  setTimeout(function () {
    document.querySelector('.li_num_' + contador).style.display = "block";
  }, 100);

  setTimeout(function () {
    document.querySelector('.li_num_' + contador).className = "list_dsp_true " + class_li[select_opt] + " li_num_" + contador;
    contador++;
  }, 200);
}

function finish_action(num, num2) {
  var class_li = ['list_diario list_dsp_true', 'list_semanal list_dsp_true', 'list_quinzenal list_dsp_true', 'list_mensal list_dsp_true'];
  console.log('.li_num_' + num2);
  document.querySelector('.li_num_' + num2).className = class_li[num] + " list_finish_state";
  setTimeout(function () {
    del_finish();
  }, 500);
}

function del_finish() {
  var li = document.querySelectorAll('.list_finish_state');
  for (var e = 0; e < li.length; e++) {
    li[e].style.opacity = "0";
    li[e].style.height = "0px";
    li[e].style.margin = "0px";
  }

  setTimeout(function () {
    var li = document.querySelectorAll('.list_finish_state');
    for (var e = 0; e < li.length; e++) {
      li[e].parentNode.removeChild(li[e]);
    }
  }, 500);
}

var t = 0;

function add_new() {
  if (t % 2 == 0) {
    document.querySelector('.cont_crear_new').className = "cont_crear_new cont_crear_new_active";
    document.querySelector('.cont_add_titulo_cont').className = "cont_add_titulo_cont cont_add_titulo_cont_active";
    t++;
  } else {
    document.querySelector('.cont_crear_new').className = "cont_crear_new";
    document.querySelector('.cont_add_titulo_cont').className = "cont_add_titulo_cont";
    t++;
  }
}
