<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <title>Projeto Dois - UFAC</title>
    <!-- Required meta tags -->
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap Script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Ícone UFAC -->
    <link rel="shortcut icon" type="image/x-icon" href="https://sistemas.ufac.br/home/wp-content/themes/sistemas/staticIndex/imagens/logo_ufac.gif">

    <style>
      * {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        transition: all 0.15s;
      }

      html {
        height: 100%;
      }

      body {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: radial-gradient(circle, #34495e 0%, #333 100%);
        padding-top: 50px;
      }

      .container {
        margin: 0px auto;
        text-align: center;
        perspective: 600px;
      }

      button {
        font-size: 30px;
        font-family: Raleway;
        line-height: 30px;
        padding: .618em 1em;
        border-radius: 10px 10px 12px 12px;
        box-shadow:
          0px 8px 0px 0px #2980b9,
          /* button thickness */
          0px 0 20px rgba(255, 255, 255, .2) inset,
          /* inner glow */
          2px 30px 0px rgba(255, 255, 255, .1) inset,
          /* sublte reflection */
          5px 15px 30px -10px #000;
        /* dark shadow underneath */
        border: 1px solid #2980b9;
        cursor: pointer;
        background: #3498db;
        color: #ecf0f1;
        text-shadow: 1px 1px 1px #34495e;
        transform: rotateX(5deg);
        margin: 10px 10px;
        width: 280px;
        text-align: left;
      }

      button i {
        padding-right: 17px;
        transform: scale(1.1) translate(0, -1px);
      }

      button:hover {
        margin-top: 15px;
        margin-bottom: 5px;
        box-shadow:
          0px 5px 0px 0px #2980b9,
          /* button thickness */
          0px 0 50px rgba(134, 243, 255, 1) inset,
          /* inner glow */
          5px 28px 0px rgba(255, 255, 255, .15) inset,
          /* sublte reflection */
          0px 0px 30px rgba(134, 243, 255, .2),
          /* outer glow */
          5px 15px 30px -10px #000;
        /* dark shadow underneath */
        color: #fff;
        filter: saturate(1.5);
      }

      button:hover i {
        transform: rotate(-12deg) translate(1px, -3px) scale(1.2);
      }

      button:active {
        margin-top: 18px;
        margin-bottom: 2px;
        box-shadow:
          0px 2px 0px 0px #2980b9,
          /* button thickness */
          0px 0 100px 10px rgba(134, 243, 255, 1) inset,
          /* inner glow */
          5px 25px 0px rgba(255, 255, 255, .1) inset,
          /* sublte reflection */
          0px 0px 30px rgba(134, 243, 255, .5),
          /* outer glow */
          5px 15px 30px -10px #000;
        /* dark shadow underneath */
        filter: saturate(1.7);
      }

      button:active i {
        transform: rotate(-22deg) translate(2px, -5px) scale(1.3);
      }

      .red {
        filter: hue-rotate(155deg);
      }

      .red:hover {
        filter: hue-rotate(155deg) saturate(1.5);
      }

      .red:active {
        filter: hue-rotate(155deg) saturate(1.7);
      }

      .green {
        filter: hue-rotate(255deg) saturate(.8);
      }

      .green:hover {
        filter: hue-rotate(255deg) saturate(1);
      }

      .green:active {
        filter: hue-rotate(255deg) saturate(1.2);
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
      <div id="content">
        <a href="./transparencia/">Transparencia</a>
        <br>
        <a href="./mural/">Mural</a>
      </div>
    </div>
  </body>
  <!-- Bootstrap Script -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- FontAwesome Scripts -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</html>