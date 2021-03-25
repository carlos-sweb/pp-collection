<section class="section">
	<div class="container">
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
</section>