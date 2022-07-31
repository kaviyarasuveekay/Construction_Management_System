var rows = 0;

function getInvoiceNumber() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById("invoice_number").value = xhttp.responseText;
  };
  xhttp.open("GET", "php/add_new_invoice.php?action=current_invoice_number", true);
  xhttp.send();
}







