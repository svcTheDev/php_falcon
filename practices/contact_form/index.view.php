<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div>
            <form class="wrap_container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <input type="text" name="name" id="name" placeholder="Write your name" value="<?php echo $name;?>">
                <span class="alert"><?php echo $name_error;?></span>
                <input type="email" name="email" id="email" placeholder="Write your email" value="<?php echo $email;?>">
                <span class="alert"><?php echo $email_error;?></span>
                <textarea name="message" id="message" cols="10" rows="5" placeholder="Write a message" value="<?php echo $message;?>"></textarea>
                <span class="alert"><?php echo $message_error;?></span>

<!-- 
                <?php if (!empty($errors)): ?>
                    <div class="alert error">
                        <?php echo $errors; ?>
                    </div>
                <?php elseif($sent): ?>
                    <div class="alert success">
                        <p>Sent correctly</p>
                    </div>
                <?php endif ?>  -->

                <input type="submit" name="submit" value="Send email">
            </form>
        </div>
    </main>
</body>
</html>