<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鋼材価格見積集積</title>
</head>
<body>

<form action="write.php" method="get" onsubmit="return validateForm()" id="priceData">
            見積取得日 <input type="date" name="date"><br>
            鋼種            
            <input type="radio" name="material" value="st">鉄
            <input type="radio" name="material" value="sus">ステンレス
            <input type="radio" name="material" value="al">アルミ<br>
            
            材種
            <input type="radio" name="form" value="sheetMetal">板
            <input type="radio" name="form" value="flatBar">フラットバー
            <input type="radio" name="form" value="squarePipe">角パイプ
            <input type="radio" name="form" value="roundPipe">丸パイプ
            <input type="radio" name="form" value="others">その他<br>

            板厚<input type="text" name="thickness"> t <br>

            サイズ<input type="text" name="size"><br>    
            
            金額<input type="text" name="price">円<br>    
            
            <input type="submit" value="送信">
        </form>
        <br>
        <a href="read.php">記録を見る</a>

        <script>
        function validateForm() {
            let priceData = document.getElementById("priceData");
            let date = priceData.elements["date"].value;
            let material = priceData.elements["material"].value;
            let form = priceData.elements["form"].value;
            let thickness = priceData.elements["thickness"].value;
            let size = priceData.elements["size"].value;
            let price = priceData.elements["price"].value;

            if (date == "") {
                alert("見積取得日を入力してください");
                return false;
            }

            if (material == "") {
                alert("鋼種を選択してください");
                return false;
            }

            if (form == "") {
                alert("材種を選択してください");
                return false;
            }

            if (thickness == "") {
                alert("板厚を入力してください");
                return false;
            }

            if (size == "") {
                alert("サイズを入力してください");
                return false;
            }

            if (price == "") {
                alert("金額を入力してください");
                return false;
            }

            return true;
            }
        </script>
    
</body>
</html>
