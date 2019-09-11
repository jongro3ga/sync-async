<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form 
        method="post"
        action="async/post.php"
    >
        <div>
            <input value="foo" name="name" type="text">
        </div>
        <div>
            <input value="30" name="age" type="text">
        </div>
        <button type="submit">submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $('form').on('submit', function (e) {
            var form = e.target;
            var url = form.action;
            var method = form.method;
            var data = $(form).serialize();
            e.preventDefault();
            
            $.ajax({
                url: url,
                method: method,
                data: data
            })
                .done(function (res) {
                    console.log(res);
                });
        });
    </script>
</body>
</html>