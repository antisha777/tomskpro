function calc() {
            //получаем ссылку на элемент Select (Бренд)
            let type_design = document.getElementById("type_design").value;
            type_design = parseInt(type_design);
  
            let is_html2 = document.getElementById("is_html2").value;
            is_html2 = parseInt(is_html2);
 
            result = type_design + is_html2;

            document.getElementById("out").innerHTML = result;

        }