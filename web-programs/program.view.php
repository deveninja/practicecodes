<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks Page</title>
</head>
<body>
    
<?php foreach($tasks as $task) : ?>
    <ul>
        <li>
            <?php if ($task->completed) : ?>
                <strike>
                    <?php echo $task->title; ?><br />
                    <?php echo $task->desc; ?><br />
                    <?php echo $task->duedate; ?><br />
                </strike>
            <?php else: ?>   
                    <?php echo $task->title; ?><br />
                    <?php echo $task->desc; ?><br />
                    <?php echo $task->duedate; ?><br />
            <?php endif; ?>
        </li>
    </ul>
<?php endforeach; ?>
        
    
   
</body>
</html>