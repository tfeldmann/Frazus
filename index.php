<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Frazus</title>
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
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="wysihtml5/bootstrap-wysihtml5.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript">

      function add_question(event) {
        // set button to loading state
        var button = $("#add_question");
        button.button("loading");
        var button_text = button.text();

        $.ajax({
          url: "ajax/add_question.php",
          data: {
            category: $("#category").val(),
            question: $("#question").val(),
            answer: $("#answer").val()
          },
          datatype: "json",
          type: "POST",
          success: function(data) {
            console.log(data);
            var response = $.parseJSON(data);
            var done = response.done;
            var message = response.message;

            // show checkmark on button
            if (done) {
              button.append(" <i class='icon-ok'></i>");
            }
            else {
              bootstrap_alert.error(message);
            }

            // after 2 seconds
            window.setTimeout(function() {
              // reset button
              button.text(button_text);
              button.button("reset");

              // clear question and answer
              if (done) {
                $("#question").data("wysihtml5").editor.clear();
                $("#answer").data("wysihtml5").editor.clear();
              }
            }, 2000);
          }
        });
      }

      bootstrap_alert = function() {}
      bootstrap_alert.error = function(message) {
        $('#alert_placeholder').html('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
      }
    </script>
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#" title="Frage hinzufügen"><i class="icon-plus"></i></a></li>
          <li><a href="#" title="Offene Fragen"><i class="icon-warning-sign"></i></a></li>
          <li><a href="#" title="Fragenkatalog"><i class="icon-check"></i></a></li>
        </ul>
        <h3 class="muted">Frazus <i class="icon-lightbulb"></i></h3>
      </div>
      <div class="row-fluid">
        <div id="alert_placeholder"></div>
        <div class="well">
          <input type="text" id="category" class="input-xxlarge" placeholder="Kategorie" data-provide="typeahead" data-items="4">
          <textarea rows="5" id="question" class="input-xxlarge" placeholder="Frage"></textarea>
          <textarea rows="5" id="answer" class="input-xxlarge" placeholder="Antwort"></textarea>
        </div>
        <div class="form-actions">
          <button type="button" class="btn btn-primary" id="add_question" data-loading-text="Wird hinzugefügt..." onclick="add_question(event)">Hinzufügen</button>
          <p class="pull-right muted">&copy;2013 Thomas Feldmann</p>
        </div>
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
          return $.get('ajax/categories.php', { query: query }, function (data) {
            return process(data.options);
          });
        }
      });
    </script>

  </body>
</html>
