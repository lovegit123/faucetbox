<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="libs/styles.css">
  <script src="//cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
  <script type="text/javascript" src="libs/mmc.js"></script>
</head>

<body>

  <header class="site-menu">
    <a href="/">
      <img src="libs/logo.png" alt="aifaucet.com logo">
    </a>
    <a class="mail-adress" href="mailto:hello@aifaucet.com">hello@aifaucet.com</a>
  </header>

  <section class="flex-grid">
    <div class="flex-item">
      <div class="text-header">
        <h5>
          <strong>Balance:
            <?php echo $data["balance"]." ".$data["unit"]; ?>
          </strong>
        </h5>
        <h5>Free
          <?php echo $data["rewards"]." ".$data["unit"]; ?> every 1234 minutes.</h5>
      </div>
      <div class="main-item">
        <div class="ad1"></div>

        <?php if($data["error"]) echo $data["error"]; ?>
        <?php switch($data["page"]):
          case "disabled": ?>
          FAUCET DISABLED. Go to <a href="?p=admin">admin page</a> and fill all required data!
        <?php break; case "paid":
          echo $data["paid"];
          break; case "eligible": ?>

          <form method="POST">
            <?php if(!$data["captcha_valid"]): ?>
              <p class="alert" role="alert">Invalid Captcha!</p>
              <?php endif; ?>
                <div class="form-group">
                  <lable>
                    <strong>Your address:</strong>
                  </lable>
                  <input type="text" name="address" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                  <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                  <input type="text" name="<?php echo $data[" address_input_name "]; ?>" class="form-control" value="<?php echo $data[" address "]; ?>" placeholder="Paste your BTC Adress" autocomplete="off">
                </div>
                <div class="captcha">
                  <?php echo $data["captcha"]; ?>
                    <?php
                  if (count($data['captcha_info']['available']) > 1) {
                      foreach ($data['captcha_info']['available'] as $c) {
                          if ($c == $data['captcha_info']['selected']) {
                              echo '<b>' .$c. '</b> ';
                          } else {
                              echo '<a href="?cc='.$c.'">'.$c.'</a> ';
                          }
                      }
                  }
                  ?>
                </div>
                <input type="submit" value="Get reward!">
          </form>
          <?php break; case "visit_later": ?>
            <p>You have to wait
              <?php echo $data["time_left"]; ?>
            </p>
          <?php break; case "user_page": ?>
          <?php echo $data["user_page"]["html"]; ?>
          <?php break; endswitch; ?>
          <?php if($data["referral"]): ?>
            <blockquote class="text-reflink">
              <p>
                <strong>Reflink: </strong>
                <code>
                  <?php echo $data["reflink"]; ?>
                </code>
              </p>
              <footer>Share this link with your friends and earn
                <?php echo $data["referral"]; ?>% referral commission</footer>
            </blockquote>
            <?php endif; ?>
      </div>
    </div>
    <aside class="flex-item">
      <div class="ad2">
        <iframe data-aa='453804' src='//ad.a-ads.com/453804?size=300x250' scrolling='no' style='width:300px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
      </div>
      <div class="ad3"></div>
    </aside>
  </section>

  <?php if($data['button_timer']): ?>
  <script type="text/javascript" src="libs/button-timer.js"></script>
  <script>
    startTimer(<?php echo $data['button_timer']; ?>);
  </script>
  <?php endif; ?>
  <?php if($data['block_adblock'] == 'on'): ?>
  <script type="text/javascript" src="libs/advertisement.js"></script>
  <script type="text/javascript" src="libs/check.js"></script>
  <?php endif; ?>
</body>

</html>
