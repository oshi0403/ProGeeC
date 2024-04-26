<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $required_fields = ['which','name','email','tel','content','agree'];//必須のフィールドをリスト化

    $errors = [];//エラーメッセージを格納 

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {

            $readable_field = convertFieldToReadable($field);
            $errors[] = "{$readable_field}が入力されていません。";
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "$error . <br>";
        }
    } 
    else {
        
        echo "お問い合わせありがとうございます。";

        
       
    }
}
else{
    echo "無効なリクエストです";
}
function convertFieldToReadable($field) {
    switch ($field) {
        case 'which':
            return '転職をお考えの方/企業の方';
        case 'name':
            return '名前';
        case 'email':
            return 'メールアドレス';
        case 'tel':
            return '電話番号';
        case 'content':
            return 'お問い合わせ内容';
        case 'agree':
            return '個人情報の取り扱い同意';
        default:
            return '未知のフィールド';
    }
}
?>