<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>書き込み入力画面</title>
  <link rel="icon" href="assets/favicon.ico.png">
    <!--リセットCSS-->
    <link rel="canonical" href="#">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- あらかじめcssを読み込んでいるので設定しなくてOK-->

</head>

<body>
  <form action="VT_create.php" method="POST">
    <fieldset>
      <legend>キャラクター入力</legend>
      <a href="VT_read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        性別: <input type="text" name="sexual">
      </div>
<!--
      <div>
        姿: <input type="file" id="imageFile" accept="image/*" name="image">
      </div>
-->
      <div class="side_line">
        <div>こうげき:</div>
        <select name="attack">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="side_line">
        <div>たふねす:</div>
        <select name="toughness">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="side_line">
        <div>すばやさ:</div>
        <select name="speed">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="side_line">
        <div>きようさ:</div>
        <select name="technic">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="side_line">
        <div>そうぞう:</div>
        <select name="create">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="side_line">
        <div>ついせき:</div>
        <select name="chase">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3" selected>3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>

      <div>
        <button>作成</button>
      </div>
    </fieldset>
  </form>

</body>

</html>

