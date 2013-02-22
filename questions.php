<?php

include_once("model.php");
$model = new Model;
$questions = $model->list_questions();

?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Frazus - Fragenkatalog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An easy to use question management system">
    <meta name="author" content="Thomas Feldmann">
    <link rel="shortcut icon" href="favicon.ico">

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
      .well {
        cursor: pointer;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .well:hover {
        border: 1px solid #CCC;
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
          <li><a href="index.php" title="Frage hinzufügen"><i class="icon-plus"></i></a></li>
          <li class="active"><a href="" title="Fragenkatalog"><i class="icon-check"></i></a></li>
        </ul>
        <h3 class="muted">Frazus <i class="icon-lightbulb"></i></h3>
      </div>
      <div class="row-fluid">

        <div class="category">
          <h2>
            <div class="pull-right expand_retract">
              <a onclick="retract_all()" class="muted"><i class="icon-chevron-down"></i></a>
              <a onclick="expand_all()" class="muted"><i class="icon-chevron-up"></i></a>
            </div>
            Schadenanalyse
          </h2>
          <?php foreach ($questions as $question): ?>
          <div class="well">
            <div class="question">
              <?php echo $question['question'] ?>
            </div>
            <div class="answer hide">
              <hr>
              <?php echo $question['answer'] ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div> <!-- /container -->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      // Tooltips
      $("a").tooltip({placement: "bottom"});

      $('.well').click(function() {
        // $(this).addClass('visited');
        $(this).children('.answer').toggle('fast');
      });

      function expand_all()
      {
        $('.well').children('.answer').hide('slow');
      }

      function retract_all()
      {
        $('.well').children('.answer').show('slow');
      }
    </script>

  </body>
</html>
