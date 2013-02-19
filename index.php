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

      <hr>

      <div class="row-fluid">
        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="question">Frage</label>
            <div class="controls">
              <textarea rows="3" id="question" class="span8"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="answer">Antwort</label>
            <div class="controls">
              <textarea rows="3" id="answer" class="span8"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="answer">Kategorie</label>
            <div class="controls">
              <input type="text" class="span8" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
            </div>
          </div>
        </form>

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
    <script>
      $("a").tooltip({placement: "bottom"});
    </script>

  </body>
</html>
