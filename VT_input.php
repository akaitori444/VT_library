<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>書き込み入力画面</title>
</head>

<body>
  <form action="VT_create.php" method="POST">
    <fieldset>
      <legend>キャラクター入力</legend>
      <a href="VT_read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="name">
      </div>
      <!-- ここから記述しよう 
      <div>
        見た目: <input type="file" id="imageFile" accept="image/*" name="image">
      </div>
      -->
      <div>level:</div>
      <div>
      <input type="radio" id="1" name="level" value="1"
      checked>
        <label for="1">1</label>
      </div>
      <div>
        <input type="radio" id="2" name="level" value="2">
        <label for="2">2</label>
      </div>
      <div>
        <input type="radio" id="3" name="level" value="3">
        <label for="3">3</label>
      </div>

      <div>
        HP: <input type="text" name="HP">
      </div>

      <div>
        攻撃力: <input type="text" name="attack">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>

