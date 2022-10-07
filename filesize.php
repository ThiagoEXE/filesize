<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>
    
</body>

<script>
$('form[data-toggle="validator"]').validator({ // o fom tem que ter esse datatoogle
  custom: {
    filesize: function($el) {
      var maxKilobytes = $el.data('filesize') * 1024
      if ($el[0].files[0].size > maxKilobytes) {
        return "File must be smaller than " + $el.data('filesize') + " kB."
      }
    },

    //custom file type validation
    filetype: function($el) {
      var acceptableTypes = $el.prop('accept').split(',');
      var fileType = $el[0].files[0].type;

      if (!$.inArray(fileType, acceptableTypes)) {
        return "Invalid file type"
      }

    }
  }
})
</script>
</html>