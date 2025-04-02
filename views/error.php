{{ include('layouts/header.php', {title:'404 not found'})}}
<div class="flex-block titres rosarivo-regular-italic">
        <h1>Error 404!</h1>
        <h2>Page not found</h2>
       <h3>{{ msg }}</h3> 
</div>
{{ include('layouts/footer.php')}}