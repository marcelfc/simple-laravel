<h1> Hello,  Marker</h1>
<form action="/hello" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name">
    <input type="submit" value="Enviar">

</form>