var codes = document.querySelectorAll("[code]");

codes.forEach(( code )=>{
    CodeMirror.fromTextArea(code, {
         lineNumbers: true,
         mode:'javascript',
         theme:'ayu-mirage',     
         readOnly:true,
         gutters:{
           className:"mdc-elevation--z2"
         }
    });
});

var model = new ppModel();

var modelCollection = ppCollection({
  "model" : model
});

var mc = new modelCollection(data);

var element = document.getElementById("tableRows");

var printTableRows = function( el ){

  var tableRows = "";

  mc.forEach((Model)=>{
    tableRows+="<tr>";
    tableRows+="<td><img src='"+Model.get("picture")+"' ></td>";
    tableRows+="<td>"+Model.get("name")+"</td><td>"+Model.get("email")+"</td>";
    tableRows+="<td>"+Model.get("balance")+"</td>";
    tableRows+="</tr>";
  });

  el.innerHTML = tableRows;

}

printTableRows( element );