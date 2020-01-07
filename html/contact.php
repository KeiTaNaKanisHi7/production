<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" charset="UTF-8"></script>
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="css/send.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
  function chkHissu(frm){
    var hissu=Array("subject","name","mail","message");
    var hissu_nm = Array("subject","name","mail","Text");
    var len= hissu.length;
    for(i=0; i<len; i++){
      var obj=frm.elements[hissu[i]];
      if(obj.type=="text" || obj.type=="textarea"){
        if(obj.value==""){
          alert(hissu_nm[i]+"は必須入力項目です");
          frm.elements[hissu[i]].focus();
          return false;
        }
      }
    }
    return true;
  }
</script>
</head>

<body>
  <div class="mail-form">
    <form action="send1.php" class="form_check" method="post" onsubmit="return chkHissu(this)">
      Subject<br />
    <input type="text" name="subject" size="30" class="jq_error_check[required]" /><br /><br>
      Your Name<br />
    <input type="text" name="name" size="30" class="jq_error_check[required]"/><br /><br>
      Mail Address<br />
    <input type="email" name="mail" size="30" class="jq_error_check[required mail]"/><br /><br>
      Text<br />
    <textarea name="message" cols="30" rows="5" class="jq_error_check[required]"></textarea><br />
      <br />
    <input id="submit_button" type="submit" value="Send"/>
    </form>



  </div>
</body>
</html>
