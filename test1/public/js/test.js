function AllChecked() {
  var all = document.form.all.checked;
  for (var i = 0; i < document.form.delete_names.length; i++) {
    document.form.delete_names[i].checked = all;
  }
}


//   一つでもチェックを外すと「全て選択」のチェック外れる
function 　DisChecked() {
  var checks = document.form.delete_names;
  var checksCount = 0;
  for (var i = 0; i < checks.length; i++) {
    if (checks[i].checked == false) {
      document.form.all.checked = false;
    } else {
      checksCount += 1;
      if (checksCount == checks.length) {
        document.form.all.checked = true;
      }
    }
  }
}


