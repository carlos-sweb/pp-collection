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

var modelCollection = ppCollection({ "model" : model });

var mc = new modelCollection(data);

var element = document.getElementById("tableRows");

$("codehtml").nextSibling.style.display = "none";

var setting = {
  search:'',
  filterBy:'name,email,balance',
  data : mc.getAll(),
  sortBy:{}
};

["keyup","keydown","keypress"].forEach((eventKey)=>{

  document.querySelector("#search").addEventListener(eventKey,(event)=>{

    
    if( event.target.value != setting.search ){      
      
      setting.search = event.target.value;
        
      
      var sortBy = Object.keys( setting.sortBy ).shift();
      
      setting.filterBy = document.querySelector("input[name='filterBy']:checked").value;

      setting.data = mc.filterBy( setting.filterBy.split(",") , setting.search ) ;
      
      
      if( typeof sortBy != "undefined" ){
        setting.data = mc.sortBy( sortBy , setting.sortBy[sortBy] , setting.data ) ;  
      }
      
     
      printTableRows( element , setting.data );


    }

  });  
});


document.querySelectorAll("[clickSortBy]").forEach(( elem )=>{

  elem.addEventListener("click",()=>{

      Array.from(elem.parentElement.children).forEach((children)=>{
          children.style = {};
          children.classList.remove("active");
      });

      elem.classList.add("active");

      elem.style.fontWeight = "bold";

      elem.style.textDecoration = "underline";  

      var sortBy = elem.getAttribute("clickSortBy");

      if( setting.sortBy[sortBy] == undefined ){
        setting.sortBy = {};
        setting.sortBy[sortBy] = true;
      }else{
        setting.sortBy[sortBy] = !setting.sortBy[sortBy];
      }

          
      setting.filterBy = document.querySelector("input[name='filterBy']:checked").value;

      setting.data = mc.filterBy( setting.filterBy.split(",") , setting.search ) ;

      setting.data = mc.sortBy( sortBy , setting.sortBy[sortBy] , setting.data ) ;
     
      printTableRows( element , setting.data );
     

  });
});

document.querySelectorAll("input[name='filterBy']").forEach(( input )=>{

  input.addEventListener("click",()=>{
      
      setting.filterBy = document.querySelector("input[name='filterBy']:checked").value;

      setting.data = mc.filterBy( setting.filterBy.split(",") , setting.search ) ;

      printTableRows( element , setting.data );

  });

});


var printTableRows = function( el , _model ){

  var tableRows = "";  
 
 
  if( _model.length > 0 ){
    _model.forEach((Model)=>{    
      tableRows+="<tr>";
      tableRows+="<td><img src='"+Model.get("picture")+"' ></td>";
      tableRows+="<td>"+Model.get("name")+"</td><td>"+Model.get("email")+"</td>";
      tableRows+="<td>"+Model.get("balance")+"</td>";
      tableRows+="</tr>";
    });
  }else{

    tableRows+="<tr>";
    tableRows+="<td colspan='4' style='text-align:center;' ><strong><i>No found</i></strong></td>";
    tableRows+="</tr>";

  } 
  
  el.innerHTML = tableRows;

}

printTableRows( element , setting.data );