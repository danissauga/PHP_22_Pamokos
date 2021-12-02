function validate_elements() {
    var goods = document.getElementById('GoodsName').value;
    var values = document.getElementById('GoodsCount').value;

    if ((goods.trim() !== '') && (goods.length >= 3) && (values.trim() !== '')) {
         if ((!isNaN(values))){
              document.getElementById("addToCart").disabled = false;
         } else {
             alert('Netinkamas kiekio formatas, turi bûti tik skaèiai');
             document.getElementById("addToCart").disabled = true;
         }
    } else {
        if ((goods.length <= 3)){
           alert('Pavadinimas ne trumpesnis nei 3 raidës!');
           document.getElementById('GoodsName').focus();
           document.getElementById('GoodsName').select();
        }
       //
    }
}

function myFunction(name,value) {
    if (document.getElementById('no_goods')) {no_goods.remove();}
    if (!document.getElementById('goods_table'))
        { var body = document.getElementById('goods_list');
          var tbl = document.createElement('table');
              tbl.style.width = '100%';
              tbl.style.display = 'table';
              tbl.setAttribute('class', 'table');
              tbl.setAttribute('id', 'goods_table');
              body.appendChild(tbl);
        }
    if (document.getElementById('goods_table')) {
        var table = document.getElementById("goods_table");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
          cell1.innerHTML = name;
          cell2.innerHTML = value;
    }
    document.getElementById("GoodsName").value ="";
    document.getElementById("GoodsCount").value = "";
    document.getElementById("addToCart").disabled = true;


    //document.getElementById("goods-list").appendChild(btn);
}


/*let id_area = document.createElement("TEXTAREA");
           let id_text = document.createTextNode("");
           id_area.id = elem_name;
           id_area.name = elem_name;
           id_area.placeholder = "Iveskite priezasti...";
           id_area.rows = "5";
           id_area.cols = "30";
           id_area.appendChild(id_text);
  return id_area;*/
 /*  var parent_div = document.getElementById('goods_list');
    var divas = document.createElement("DIV");
    divas.setAttribute("class", "col-sm-9");
    var inputas1 = document.createElement("INPUT");
        inputas1.setAttribute("type", "text");
        inputas1.setAttribute("id", "pavadinimas[]");
        inputas1.setAttribute("name", "pavadinimas[]");
        inputas1.setAttribute("value", name);
    var inputas2 = document.createElement("INPUT");
        inputas2.setAttribute("type", "number");
        inputas2.setAttribute("id", "kiekis[]");
        inputas2.setAttribute("name", "kiekis[]");
        inputas2.setAttribute("value", value);
        divas.appendChild(inputas1);
        parent_div.appendChild(divas);*/