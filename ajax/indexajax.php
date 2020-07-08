<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ajax</title>
        <script src="jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet" />
        </head>
        <body>
            <div class="container">
                <br />
                <h2 align="center"ajax </h2> 
<div class="form-group">
    <div class="=input-group">
        <span class="input-group-addon">search</span>  
    <input type="text" name="name" id="search_text" placeholder="" class="form-control" />
    </div>
    </div>
</br>
<div id="result"></div>
            </div>
                </body>
</html>

<script>
    $(document).ready(function(){
        $('#search_text').keyup(function){
        var text = $(this).val();
        if (text !='')
        {

        }
        else
        {
            $('#result').html('');
            $.ajax({
                url:fetch.php,
                method:"post",
                datatype="Text",
                success:function(data)
                {
                    $('#result').html(data);
                }

            })
        }

    });
    });
    </script>
