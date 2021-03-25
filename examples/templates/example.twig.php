<section class="section">
  <div class="container">
    
<p class="title is-2 underline" >Example:</p>
<div class="tabs">
  <ul>
    <li tab="js" class="is-active" onclick="showCodejs()"><a>Javascript</a></li>
    <li tab="html" onclick="showCodehtml()" ><a>HTML</a></li>    
  </ul>
</div>

<script>  
  var tabs = document.querySelectorAll("[tab]");
  tabs.forEach((tab)=>{
    tab.addEventListener("click",( ETab )=>{      
      Array.from(ETab.currentTarget.parentElement.children).forEach(function(li){
        if( li.classList.contains("is-active") ){
          li.classList.remove("is-active");
        }       
      });
      ETab.currentTarget.classList.add("is-active");
    });
  });
</script>

<textarea code id="codejs" >//...........

var mc = new modelCollection(data);

let element = document.getElementById("tableRows");

let tableRows = "";

var printTableRows = function( el ){
  
  // You could also use mc.forEach
  mc.getAll().forEach((Model)=>{

    tableRows +="&#60;tr&#62;";

    tableRows +="&#60;td&#62;&#60;img src='"+Model.get("picture")+"' >&#60;&#47;td&#62;";

    tableRows +="&#60;td&#62;"+Model.get("name")+"&#60;&#47;td&#62;&#60;td&#62;"+Model.get("email")+"&#60;&#47;td&#62;";

    tableRows +="&#60;td&#62;"+Model.get("balance")+"&#60;&#47;td&#62;";

    tableRows +="&#60;&#47;tr&#62;";

  });

  el.innerHTML = tableRows;

}

printTableRows( element );
//...........</textarea><br>
<textarea code id="codehtml" >&#60;table class="table" &#62;
  &#60;tbody id="tableRows" &#62;         
  &#60;/tbody&#62;
&#60;/table&#62;</textarea>

</div>
</section>