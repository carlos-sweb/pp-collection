<section class="section">
	<div class="container">
	{% for key,func in functions %}
		<p class="title is-4 underline" >{{key}}:<span class="has-text-info" >&nbsp;[Function]</span></p>
		<div class="notification is-info is-light">{{func}}&nbsp;</div>
		<hr>
	{% endfor %}
	</div>
</section>	