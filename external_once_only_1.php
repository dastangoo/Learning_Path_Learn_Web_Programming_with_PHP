<?php // Managing the Code -- External Libraries: Loading Code Once Only ?>


<?php require_once './includes/constants.php';?>
<?php include_once './includes/Library.php';?>
<?php echo docType(5); ?>
<?php $title = titleTag('Once Only'); ?>
<?php $meta ?>
<?php  $meta = metaTag(array('http-equiv' => 'content-type', 'content' => 'text/html;charset=urf-8')); ?>
<?php echo headTag($title, $meta); ?>
<body>
<!--   use include_once or require_once when you want to load a file -->
<!--   but are not sure if it has not already been loaded somewhere else in the program -->
<?php require_once './includes/Library.php' ?>
<div style="width: 635px; height: 650px;">
  <h1><?php echo SITE_HEADER; ?></h1>
  <hr>
  <div style="width: 110px; height: 600px; float: left;">
    <?php include './includes/ad_block.html'; ?>
    <?php include './includes/ad_block.html'; ?>
  </div>
  <div style="border: solid blue 1px; width: 500px; height: 410px; float: left; font: 12px arial, sans-serif; padding: 5px">
    <h3><?php echo CONTENT_HEADER; ?></h3>
    <p>
      Lorem ipsum dolor sit amet, simul animal nostrud cu qui, eu sed aliquid blandit nominati, ea eum nulla congue. Cu quidam electram patrioque vel, decore ubique insolens per ex. Sit sonet volumus ea, ad modo corpora mea. Ne sea mucius recusabo.
      Vis elit prodesset te, cu eos aperiam euripidis, alii natum repudiare est cu. Ullum nihil per id. Ex duo alterum liberavisse suscipiantur. An hinc accommodare mediocritatem mea, et lorem consul recteque sea. Te cum ridens voluptaria, essent cetero per et.
      Ne sit integre ancillae, ei alienum singulis his. Alterum dissentiunt duo eu, mei at aeterno perpetua. Ut quando atomorum per, iriure sanctus maiestatis duo ei, ex vis summo gubergren. Vel nusquam efficiantur ut, nostro instructior his at, ei ridens ceteros salutatus duo. Vim feugiat delectus incorrupte id. An quo doctus tractatos.
      Eum nobis dictas no, ne quas putant officiis ius. Ius stet suavitate dissentiet ad, scaevola mnesarchum ut eum, in duis error dissentias usu. Essent alterum eu per. Ad cetero consetetur vix, sed aperiri adipisci lobortis ea.
      Affert albucius cu nec. Eos cu impedit voluptua pericula. Sea et graece offendit, erat possit tamquam ei nec. Pro possit admodum suscipit ea, utamur mnesarchum ea eum. Eam soleat lucilius id, ut vel efficiendi interesset, feugait omnesque mel eu. Ut tale elitr eruditi eum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, simul animal nostrud cu qui, eu sed aliquid blandit nominati, ea eum nulla congue. Cu quidam electram patrioque vel, decore ubique insolens per ex. Sit sonet volumus ea, ad modo corpora mea. Ne sea mucius recusabo.
      Vis elit prodesset te, cu eos aperiam euripidis, alii natum repudiare est cu. Ullum nihil per id. Ex duo alterum liberavisse suscipiantur. An hinc accommodare mediocritatem mea, et lorem consul recteque sea. Te cum ridens voluptaria, essent cetero per et.
      Ne sit integre ancillae, ei alienum singulis his. Alterum dissentiunt duo eu, mei at aeterno perpetua. Ut quando atomorum per, iriure sanctus maiestatis duo ei, ex vis summo gubergren. Vel nusquam efficiantur ut, nostro instructior his at, ei ridens ceteros salutatus duo. Vim feugiat delectus incorrupte id. An quo doctus tractatos.
      Eum nobis dictas no, ne quas putant officiis ius. Ius stet suavitate dissentiet ad, scaevola mnesarchum ut eum, in duis error dissentias usu. Essent alterum eu per. Ad cetero consetetur vix, sed aperiri adipisci lobortis ea.
      Affert albucius cu nec. Eos cu impedit voluptua pericula. Sea et graece offendit, erat possit tamquam ei nec. Pro possit admodum suscipit ea, utamur mnesarchum ea eum. Eam soleat lucilius id, ut vel efficiendi interesset, feugait omnesque mel eu. Ut tale elitr eruditi eum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, simul animal nostrud cu qui, eu sed aliquid blandit nominati, ea eum nulla congue. Cu quidam electram patrioque vel, decore ubique insolens per ex. Sit sonet volumus ea, ad modo corpora mea. Ne sea mucius recusabo.
      Vis elit prodesset te, cu eos aperiam euripidis, alii natum repudiare est cu. Ullum nihil per id. Ex duo alterum liberavisse suscipiantur. An hinc accommodare mediocritatem mea, et lorem consul recteque sea. Te cum ridens voluptaria, essent cetero per et.
      Ne sit integre ancillae, ei alienum singulis his. Alterum dissentiunt duo eu, mei at aeterno perpetua. Ut quando atomorum per, iriure sanctus maiestatis duo ei, ex vis summo gubergren. Vel nusquam efficiantur ut, nostro instructior his at, ei ridens ceteros salutatus duo. Vim feugiat delectus incorrupte id. An quo doctus tractatos.
      Eum nobis dictas no, ne quas putant officiis ius. Ius stet suavitate dissentiet ad, scaevola mnesarchum ut eum, in duis error dissentias usu. Essent alterum eu per. Ad cetero consetetur vix, sed aperiri adipisci lobortis ea.
      Affert albucius cu nec. Eos cu impedit voluptua pericula. Sea et graece offendit, erat possit tamquam ei nec. Pro possit admodum suscipit ea, utamur mnesarchum ea eum. Eam soleat lucilius id, ut vel efficiendi interesset, feugait omnesque mel eu. Ut tale elitr eruditi eum.
    </p>

  </div>

</div>
</body>
