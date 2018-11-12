<!DOCTYPE html>
<html>
  <head>
    <title>Farming Twitter's past</title>
    <meta charset="utf-8"/>
  </head>
  <body>
    <p>wip</p>
    <?php
      echo "<p>php is working</p>";

      $old_wd = getcwd () ;
      chdir ("/home/rade-mathis/prog/tests/Ls_tweeter/") ;
      $output  = shell_exec ("./test.sh") ;
      $output2 = shell_exec ("./test.py") ;
      chdir ("GetOldTweets-python/") ;
      $output3 = shell_exec ('python2 Exporter.py --querysearch "asoiaf" --maxtweets 2') ;
      chdir ($old_wd) ;

      echo ("<p>" . $output  . "</p>") ;
      echo ("<p>" . $output2 . "</p>") ;
      echo ("<p>" . $output3 . "</p>") ;
      
      ?>
  </body>
</html>
