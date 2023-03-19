<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <title>上機測驗-物件&演算法</title>
</head>

<body>
    <div class="container">
        <h3>一、物件導向-繼承/介面</h3>
        <p>今有車輛「汽車」和「機車」，請使用物件的繼承/介面描述二者相同與差異，及二物件的執行程式碼</p>
        <hr class="w-50">
        <?php include_once "./quiz_1.php"; ?>
    </div>
    <hr>
    <div class="container">
        <h3>二、資料處理-字串</h3>
        <p>請寫出將字串「人易科技: 上 機 測 驗 - 演算法」中的：</p>
        <ol>
            <li>字元「:」改成全型</li>
            <li>去掉中文字間的空白(保留-號二側空白)</li>
            <li>列印出符號：到-之間的字元</li>
        </ol>
        <hr class="w-50">
        <?php include_once "./quiz_2.php"; ?>
    </div>
    <hr>
    <div class="container">
        <h3>三、資料處理－陣列</h3>
        <p>
            今有陣列資料 0,1,2,3,4,5,6,7,8,9 請寫出資料處理程式碼
        </p>
        <ol>
            <li>計算出「奇數值總和」減去「偶數值總和」</li>
            <li>分割成二陣列，分別存放「偶數值」及「奇數值」</li>
        </ol>
        <hr class="w-50">
        <?php include_once "./quiz_3.php"; ?>
    </div>
    <hr>
    <div class="container">
        <h3>四、資料排序-正序</h3>
        <p>
            今有一陣列資料77,5,5,22,13,55,97,4,796,1,0,9請寫出正序排列處理程式碼
        </p>
        <hr class="w-50">
        <?php include_once "./quiz_4.php"; ?>
    </div>
    <hr>
    <div class="container">
        <h3>五、邏輯處理-交集丶差集丶聯集</h3>
        <p>
            今有二陣列，請寫出資料處理程式碼<br>
            陣列a：77,5,5,22,13,55,97,4,796,1,0,9<br>
            陣列b：0,1,2,3,4,5,6,7,8,9<br>
        </p>
        <ol>
            <li>陣列c = 陣列a 交集 陣列b</li>
            <li>陣列d = 陣列a 差集 陣列b</li>
            <li>陣列e = 陣列a 聯集 陣列b</li>
        </ol>
        <hr class="w-50">
        <?php include_once "./quiz_5.php"; ?>
    </div>
    <hr>
    <div class="container">
        <h3>六、兩數總和</h3>
        <ul>
            <li>給定一個整數陣列nums和一個整數target，兩數總和為target時，返回兩數的索引。</li>
            <li>您可以假設每個輸入都只有一個解決方案，並且您可能不會兩次使用相同的元素。</li>
            <li>您可以按任何順序返回答案。</li>
            <li>限制條件：
                <ul>
                    <li>2 <=nums.length <=103</li>
                    <li>-109 <= nums[i] <=109</li>
                    <li>-109 <= target <=109</li>
                    <li>僅存在一個有效答案。</li>
                </ul>
            </li>
        </ul>
        <hr class="w-50">
        <?php include_once "./quiz_6.php"; ?>
    </div>
</body>

</html>