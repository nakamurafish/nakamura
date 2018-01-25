function CheckedDelete() {


    var res = confirm("本当に削除してもよろしいですか");

    if (res == true) {
        var all = "";
        // チェックボックスの数だけ判定を繰り返す（ボタンを表すインプットタグがあるので１引く）
        for (var i = 0; i < document.form.delete_names.length; i++) {

            // i番目のチェックボックスがチェックされているかを判定
            if (document.form.delete_names[i].checked) {
                flag = true;
                // allの中にIDデータが入っている
                all += document.form.delete_names[i].value + ',';

                // document.getElementById("test5").textContent = all;
                // document.form.action = all;
                // alert(all);

            }

        }

        document.form.checked_names.value = all;

        // var all = document.form.delete_name[i].checked;
        alert(all);

    } else {

        alert("実行を取り消しました");

    }
}

// function funcBtn() {
//     // エレメントを作成
//     var ele = document.createElement('input');
//     // データを設定
//     ele.setAttribute('type', 'hidden');
//     ele.setAttribute('name', 'hoge');
//     ele.setAttribute('value', 'テスト');
//     // 要素を追加
//     document.form.appendChild(ele);
// }



    // function myCheck(){
    //     var flag = false; // 選択されているか否かを判定する変数

    //     // チェックボックスの数だけ判定を繰り返す（ボタンを表すインプットタグがあるので１引く）
    //     for(var i=0; i<document.form.delete_name.length-1;i++){

    //         // i番目のチェックボックスがチェックされているかを判定
    //         if(document.form.delete_name[i].checked){
    //             flag = true;    
    //             alert(document.form.delete_name[i].value + "が選択されました。"  );
    //         }
    //     }

    //     // 何も選択されていない場合の処理   
    //     if(!flag){
    //         alert("項目が選択されていません。");
    //     }
    // }