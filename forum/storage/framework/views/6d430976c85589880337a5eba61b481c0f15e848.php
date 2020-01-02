<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esi Web System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('sass/app.scss')); ?>" rel="stylesheet"/>
    </head>
    <body>
        <div id="app"></div>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH D:\projects\esi-web-system\forum\resources\views/welcome.blade.php ENDPATH**/ ?>