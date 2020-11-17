<?='<!DOCTYPE html>';?>
<?='<html lang="en">';?>
<?='<head>';?>
<?='<meta charset="UTF-8">';?>
<?='<meta name="viewport" content="width=device-width, initial-scale=1">';?>
<?php foreach(["https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css","https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css","https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css","https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css","https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/theme/ayu-mirage.min.css","style.css"] as $link):?><?='<link rel="stylesheet" href="'.$link.'">';?><?php endforeach; ?>
<?='<title>pp-collection.js</title>';?></head><body><section class="section" ><div class="container" ><?='<h1 class="title">pp-collection.js</h1>';?>
<?='<p class="subtitle">Simple Collection of <strong><a href="https://github.com/carlos-sweb/pp-model">pp-model.js</a></strong></p>';?>
<?='<p>Data generate by&nbsp;<a href="https://www.json-generator.com">https://www.json-generator.com</a></p><hr>';?>
<p class="title is-3" >Initialize</p>
<textarea code >//Here declare model
var model = new ppModel();
// Here declare collection and defined model use
var modelCollection = ppCollection({
  "model" : model
});
// Created model using data array
var mc = new modelCollection(data);
</textarea><hr>

<p class="title is-4 underline" >forEach:<span class="has-text-info" >&nbsp;[Function]</span></p>
<div class="notification is-info is-light">Native Function&nbsp;<a target="_BLANK" href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/forEach">[Check]</a></div><hr>

<p class="title is-4 underline" >filter:<span class="has-text-info" >&nbsp;[Function]</span></p>
<div class="notification is-info is-light">Native Function&nbsp;<a target="_BLANK" href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/filter">[Check]</a></div><hr>


<p class="title is-4 underline" >at:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>


<p class="title is-4 underline" >getAll:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>

<p class="title is-4 underline" >push:<span class="has-text-info" >&nbsp;[Function]</span></p>
<div class="notification is-info is-light">Native Function&nbsp;<a target="_BLANK" href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/push">[Check]</a></div><hr>


<p class="title is-4 underline" >pop:<span class="has-text-info" >&nbsp;[Function]</span></p>
<div class="notification is-info is-light">Native Function&nbsp;<a target="_BLANK" href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/pop">[Check]</a></div><hr>


<p class="title is-4 underline" >unshift:<span class="has-text-info" >&nbsp;[Function]</span></p>
<div class="notification is-info is-light">Native Function&nbsp;<a target="_BLANK" href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/unshift">[Check]</a></div><hr>




<p class="title is-4 underline" >shift:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>
<p class="title is-4 underline" >length:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>
<p class="title is-4 underline" >sort:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>
<p class="title is-4 underline" >pluck:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>
<p class="title is-4 underline" >where:<span class="has-text-info" >&nbsp;[Function]</span></p>
<p>Native Function.</p><hr>
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
<hr>
<p class="title is-3 underline" >Results</p>
<form >
  <div class="field">
    <input placeholder="search" id="search" class="input" type="text" autocomplete="off" >
  </div>  
  <div class="field">
    <label for="">Search only for:</label><br>
<label for=""><input name="filterBy" type="radio" value="name,email,balance" checked="checked" >&nbsp;All</label>&nbsp;&nbsp;
<label for=""><input name="filterBy" type="radio" value="name"    >&nbsp;Name</label>&nbsp;&nbsp;
<label for=""><input name="filterBy" type="radio" value="email"   >&nbsp;Email</label>&nbsp;&nbsp;
<label for=""><input name="filterBy" type="radio" value="balance" >&nbsp;Balance</label>  
  </div>
</form>
<table class="table is-bordered" style="width:100%;" >
  <thead>
    <tr>
      <td>&nbsp;</td>
      <td clickSortBy="name" >Name</td>
      <td clickSortBy="email" >Mail</td>
      <td clickSortBy="balance" >Balance</td>
    </tr>
  </thead>
  <tbody id="tableRows" >         
  </tbody>
</table>
</div>



<hr>
<div class="columns is-vcentered" style="padding-left:22px;" >
  <div class="column " >
    <figure class="image is-128x128">
<img class="is-rounded elevation"  src="https://avatars3.githubusercontent.com/u/15951745?s=128&u=8a6fe8190c3b8f8827026a051fc5c5523a0b92a5&v=4" alt=""> 
</figure>

  </div>
  <div class="column is-four-fifths" >
    <p>You can contact me by e-mail <a href="mailto:c4rl0sill3sc4@gmail.com">c4rl0sill3sc4@gmail.com</a></p>
  </div>
</div>



</section><?php foreach( ['https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.js','https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/mode/javascript/javascript.min.js','https://cdn.jsdelivr.net/npm/pp-model.js@1.0.4/pp-model.min.js','data.js','pp-collection.min.js','index.js'] as $js ): ?>
<?='<script type="text/javascript" src="'.$js.'" ></script>';?>
<?php endforeach; ?></body></html>