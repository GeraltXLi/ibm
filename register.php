<!DOCTYPE <html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=gbk" /> 
  <title>ע�� | ��������������վ</title> 
  <meta name="keywords" content="" /> 
  <meta name="description" content="" /> 
  <link type="text/css" rel="stylesheet" href="css/style.css" /> 
 </head> 
 <body> 
  <div id="topBar"> 
   <div class="wrapper"> 
    <div class="l">
      ���ã���ӭ���ʴ�������������վ�� 
    </div> 
    <div class="r"> 
     <a href="#" onclick="window.external.AddFavorite(location.href,'');">�����ղ�</a> 
     <a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(location.href);">��Ϊ��ҳ</a> 
     <span> <a href="login.php" target="_blank">��¼</a>| <a href="register.php" target="_blank">ע��</a>| <a href="manager.html" target="_blank">����Ա���</a> </span> 
    </div> 
   </div> 
  </div> 
  <div id="header"> 
   <div class="wrapper"> 
    <div class="logo"> 
     <a href="/"><img src="images/logo3.png" alt="��������������վ" /></a> 
    </div> 
   </div> 
  </div> 
  <div id="nav"> 
   <ul> 
    <li><a href="index.php" class="a1">��ҳ</a></li> 
    <li><a href="recent.php" class="a2">�Ƽ���Ѷ</a></li> 
    <li><a href="technology.php" class="a3">��������</a></li> 
    <li><a href="medias.php" class="a4">������԰</a></li> 
    <li><a href="q_a.php" class="a5">֪ʶ�ʴ�</a></li> 
    <form class="search" method="get" action="" target="_blank"> 
     <p> <input class="searchTxt" value="" maxlength="30" name="wd" type="text" style="background-image:url('images/search_bg.png') " /> <input src="images/search_icon.png" class="search_icon" name="" type="image" /> </p> 
    </form> 
   </ul> 
  </div> 
  <script src="js/jquery-1.11.2.min.js">
  </script>
  <script type="text/javascript">
function select_search_type(n){
	document.getElementById('search_type1').className='';
	document.getElementById('search_type2').className='';
	document.getElementById('search_type3').className='';
	document.getElementById('search_type'+n).className='current';
	document.getElementById('search_type').value=n;
}
</script>
<script>
function usernamecommit(){
	var username = document.getElementById('username');
	if(username.value == ''){
		alert('�û�������Ϊ��');
	}
	$.post("usernamecheck.php",{username:username.value},function(msg){
		if(msg == 1){
			alert('���û����Ѵ���');
			username.value = '';
		}
	});
}
function emailcommit(){
	var email = document.getElementById('email');
	if(email.value == ''){
		alert('���䲻��Ϊ��');
	}
	$.post("emailcheck.php",{email:email.value},function(msg){
		if(msg == 1){
			alert('�������Ѵ���');
			email.value = '';
		}
	});
}
function pwdcommit(){
	var pwd = document.getElementById('pwd');
	if(pwd.value.length < 6 || pwd.value.length > 20){
		alert('�����볤��Ϊ6��20λ������');
		pwd.value = '';
	}
}
function repwdcommit(){
	var repwd = document.getElementById('repwd');
	var pwd = document.getElementById('pwd');
	if(repwd.value != pwd.value){
		alert('�����������벻һ��');
		repwd.value = '';
	}
}
</script>
  <div id="main"> 
   <div id="page"> 
    <div class="pageLeft"> 
     <div id="bmMenu"> 
     </div> 
	 <div class="map2">
	 <a target="_blank" href="http://j.map.baidu.com/f_v1z" ><img src="images/ditu.png" /></a>
	 </div>
    </div> 
    <div class="pageRight"> 
      <div class="title_pic"> 
       <img src="images/bm_pic.png" /> 
      </div> 
<div id="current">
   ����λ�ã�&nbsp;&nbsp;
   <a href="index.php" class="curr">��ҳ</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
   <a href="" class="curr">ע��</a>
  </div>
      <div id="bmMain"> 
<div class="m-form">
    <form name="frm" action="registercheck.php" method="get">
        <fieldset>
            <div class="formitm">
                <label class="lab">�û�����</label>
                <div class="ipt">
                    <input type="text" class="u-ipt" name="username" id="username" onBlur="usernamecommit();"/>
                </div>
            </div>
            <div class="formitm">
                <label class="lab">���䣺</label>
                <div class="ipt">
                    <input type="text" class="u-ipt" name="email" id="email" onBlur="emailcommit();"/>
                </div>
            </div>
            <div class="formitm">
                <label class="lab">���룺</label>
                <div class="ipt">
                    <input type="password" class="u-ipt" name="pwd" id="pwd" onBlur="pwdcommit();"/><br/>
                    <b>(�����볤��Ϊ6��20λ������)</b>
                </div>
            </div>
            <div class="formitm">
                <label class="lab">�ٴ��������룺</label>
                <div class="ipt">
                    <input type="password" class="u-ipt" name="repwd" id="repwd" onBlur="repwdcommit();"/>
                </div>
            </div>
            <div class="formitm formitm-1"><button class="u-btn" type="submit" name="submit" id="submit">ע��</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="u-btn" type="reset">����</button>
            </div>
        </fieldset>
        </form>
</div>
      </div> 
    </div> 
    <div class="clearit"></div> 
   </div> 
  </div> 
  <div id="footer"> 
   <div class="nav"> 
    <ul> 
     <li class="jianjie"><a href="#" class="a1">����IBM���ļ��</a></li> 
     <li><a href="#" class="a2">��վ���</a></li> 
     <li><a href="#" class="a3">��ϵ����</a></li> 
     <li><a href="message.php" class="a4">���Խ���</a></li> 
     <li><a href="#" class="a5">��������</a></li> 
    </ul> 
   </div> 
   <!-- 		<div class="friendlink">
		<ul>
		<li><a href="#" class="a1">��ѧ�����</a></li>
		<li><a href="#" class="a2">���������</a></li>
		<li><a href="#" class="a3">�й�������</a></li>
		<li><a href="#" class="a4"></a></li>
		</ul>
		</div> --> 
   <!-- 		<div class="copyright">
			<div class="l">&copy; Copyright &copy; 2014.</div>
		</div> --> 
  </div> 
  <a href="#" title="���ض���" id="goTop"></a>   
 </body>
</html>