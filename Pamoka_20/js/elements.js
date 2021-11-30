function myFunction1() {
    var para = document.createElement("P");
    para.innerHTML = "This is a paragraph.";
    document.getElementById("myDIV").appendChild(para);
}
function myFunction(name,value) {
    if (document.getElementById('no_goods')) {no_goods.remove();}
    if (!document.getElementById('goods_table'))
        { var body = document.getElementById('goods_list');
          var tbl = document.createElement('table');
              tbl.style.width = '100%';
              tbl.setAttribute('border', '1');
              tbl.setAttribute('id', 'goods_table');
              body.appendChild(tbl);
        }
    if (document.getElementById('goods_table')) {
        var table = document.getElementById("goods_table");
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
          cell1.innerHTML = "NEW CELL1";
          cell2.innerHTML = "NEW CELL2";
    }


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