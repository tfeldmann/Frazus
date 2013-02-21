<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Frazus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Thomas Feldmann">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="wysihtml5/bootstrap-wysihtml5.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#" title="Frage hinzufügen"><i class="icon-plus"></i></a></li>
          <li><a href="#" title="Offene Fragen"><i class="icon-warning-sign"></i></a></li>
          <li><a href="#" title="Fragenkatalog"><i class="icon-check"></i></a></li>
        </ul>
        <h3 class="muted">Frazus</h3>
      </div>
      <div class="row-fluid">
        <div class="well">
          <input type="text" id="category" class="input-xxlarge" placeholder="Kategorie" data-provide="typeahead" data-items="4">
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Hinzufügen</button>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Roboterfabrik 2013</p>
      </div>

    </div> <!-- /container -->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <script src="wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="wysihtml5/locales/bootstrap-wysihtml5.de-DE.js"></script>
    <script>
      // Tooltips
      $("a").tooltip({placement: "bottom"});

      // Text Editor
      $('textarea').wysihtml5({locale: "de-DE"});

      // category type-ahead
      $('#category').typeahead({
        source: function (query, process) {
          return $.get('api/categories.php', { query: query }, function (data) {
            return process(data.options);
          });
        }
      });
    </script>

  </body>
</html>
