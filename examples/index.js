var $ = function(id){
  return document.getElementById(id);
}

var showCodejs = function(){
  $("codejs").nextSibling.style.display   = "block";
  $("codehtml").nextSibling.style.display = "none";
}

var showCodehtml = function(){
  $("codehtml").nextSibling.style.display   = "block";
  $("codejs").nextSibling.style.display = "none";
}


var codes = document.querySelectorAll("[code]");

codes.forEach(( code )=>{
    CodeMirror.fromTextArea(code, {
         lineNumbers: true,
         mode:'javascript',
         theme:'ayu-mirage',     
         readOnly:true         
    });
});


var model = new ppModel();

var modelCollection = ppCollection({
  "model" : model
});

var mc = new modelCollection(data);

var element = document.getElementById("tableRows");



$("codehtml").nextSibling.style.display = "none";
var search = '';
["keyup","keydown","keypress"].forEach((eventKey)=>{
  document.querySelector("#search").addEventListener(eventKey,(event)=>{
    
    if( event.target.value != search ){      
      
      search = event.target.value;

      printTableRows( element , mc.filterBy( 'name' , search ) );

    }

  });  
});




var printTableRows = function( el , _model ){

  var tableRows = "";

  _model.forEach((Model)=>{
    tableRows+="<tr>";
    tableRows+="<td><img src='"+Model.get("picture")+"' ></td>";
    tableRows+="<td>"+Model.get("name")+"</td><td>"+Model.get("email")+"</td>";
    tableRows+="<td>"+Model.get("balance")+"</td>";
    tableRows+="</tr>";
  });

  el.innerHTML = tableRows;

}

printTableRows( element , mc);