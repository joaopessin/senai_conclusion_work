document.getElementById('mostrarDivBtn').addEventListener('click', function() {
    var obra1 = document.getElementById('obra1');
    var obra2 = document.getElementById('obra2');
    var obra3 = document.getElementById('obra3');
  
  
    // Verifica se a div está visível
    if (obra1.style.display === 'none' || obra1.style.display === '') {
      // Se estiver invisível, torna visível
      obra1.style.display = 'block';
    } else {
      // Se estiver visível, torna invisível
      obra1.style.display = 'none';
    }

    if (obra2.style.display === 'none' || obra2.style.display === '') {
        // Se estiver invisível, torna visível
        obra2.style.display = 'block';
      } else {
        // Se estiver visível, torna invisível
        obra2.style.display = 'none';
      }

    if (obra3.style.display === 'none' || obra3.style.display === '') {
      // Se estiver invisível, torna visível
      obra3.style.display = 'block';
    } else {
      // Se estiver visível, torna invisível
      obra3.style.display = 'none';
    }
  });


 