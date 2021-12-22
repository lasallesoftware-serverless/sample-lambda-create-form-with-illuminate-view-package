<!DOCTYPE html>
<html lang="en" xmlns:font-family="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Sample Blade Template</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    </head>

    <body style="font-family: 'Nunito', sans-serif; background-color: #450508;">
        <div style="text-align: center; color: #fff; margin-top: 100px; margin-left: 25px; margin-right: 25px; padding: 25px; border: 5px solid purple; border-radius: 12px;">
            <h1>{{ $text }}</h1>
        </div>

        <div style="text-align: center; color: #fff; margin-top: 100px; margin-left: 25px; margin-right: 25px; padding: 25px; border: 5px solid purple; border-radius: 12px;">
            Please note: this Lambda function is running in the "{{ $_ENV['AWS_REGION'] }}" region.
        </div>
    </body>

</html>