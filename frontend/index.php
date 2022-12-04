<?php

include('../utils/obfuscate.php');

// read config
$info = json_decode(file_get_contents('../info.json'), true);

// set values
$email    = obfuscate($info['email']);
$github   = obfuscate($info['github']);
$linkedin = obfuscate($info['linkedin']);
$rlsrl    = obfuscate($info['rlsrl']);
$rlsrl2   = obfuscate($info['rlsrll']);
$fullname = obfuscate(strtolower($info['fullname']));

// set random quotes
$quotes = array(
    "among the top 2 billion best websites of all time"
  , "one of the websites ever made"
  , "my mom says i'm special"
  , "let's-a go"
  , "graphic design is my passion"
  , "please hire me"
);

// generate random quote key
$key = array_rand($quotes);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>lars | homepage</title>
    <meta name="description" content="homepage of <?= $fullname ?>">
    <link rel="stylesheet" href="frontend_light.css">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="frontend.js"></script>
  </head>
  <body>
    <div id="main">
      <div class="section">
        <h2>welcome to my website</h2>
        <button id="header">mystery button</button>
        <img id="drawing" src="img/drawing_light.png">
        <p>&quot;<?= $quotes[$key] ?>&quot;</p>
      </div>
      <div class="section">
        <h4>ALSO</h4>
        <p>
            email:
            <a href="mailto:<?= $email ?>">
                <?= $email ?>
            </a>
            |
            name: <?= $fullname ?>
            |
            interests: functional programming, coffee, sushi, retro anime
            |
            education: m.sc. in computer science
            |
            linkedin: <a href="<?= $linkedin ?>" target='_blank'>link</a>
            |
            github: <a href="<?= $github ?>" target='_blank'>link</a>
        </p>
      </div>
      <div class="section">
        <h4>OTHER STUFF</h4>
        <p><a href="<?= $rlsrl ?>" target="_blank">rl/srl playground (haskell)</a></p>
        <p><a href="<?= $rlsrl2 ?>" target="_blank">rl/srl playground (php)</a></p>
        <p><a href="<?= $github ?>/AP-Exam" target="_blank">ap exam solution</a></p>
        <p><a href="misc/resume.pdf" target="_blank">resume.pdf</a></p>
      </div>
      <hr size="1" width="70%"/>
      <div class="section">sincerely,<img src="img/signature_light.png" style="width: 30%"><?= $fullname ?></div>
    </div>
  </body>
</html>

<!-- If you are a recruiter; I'm so sorry -->
<!-- Sincerely, Lars -->
