<html class="full" lang="fr">
<?php include('meta.php'); ?>

<body>
  <?php include('nav_top.php'); ?>

  <div id="engines"></div>
  <div id="container">
    <form id="form" onsubmit="return doSearch()">
      <div id="input"><input id="i" type="text" autocomplete="off" spellcheck="false" placeholder="Search" results="0" /></div>
      <a onclick="nextLanguage()" id="lang"></a>
      <ul id="sugs"></ul>
    </form>
    <p id="method"></p>
  </div>

  <div id="poqsfbqtzideqq"><div class="adBanner">.</div></div>

  <?php include('nav_bottom.php'); ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/typingcarousel.js"></script>
  <script>
    setTimeout(function() {
    $('#donatemodal').modal();
    }, 30000);
  </script>
</body>


<!-- Modal -->
<div class="modal fade" id="donatemodal" tabindex="-1" role="dialog" aria-labelledby="donatemodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="donatemodalTitle">Aidez moi à payer le serveur</h2>
      </div>
      <div class="modal-body">
        <h5>Pour tout don supérieur à 5€, j'ajoute le truc que vous voulez à cette page</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <a class="btn btn-primary" href="https://www.paypal.com/paypalme2/huntervcx" role="button">Je veux être généreux !</a>
      </div>
    </div>
  </div>
</div>

</html>