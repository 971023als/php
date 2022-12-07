<?php require('lib/top.php'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>회원가입</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<script class= "loginaction">
   function check_input()
   {
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
<body> 
 <section class="login">
        <div id="main_content">
      		<div id="join_box">
              <div class="container">
              <div class="row">
                 <div class="col-lg-12">
                 <div class="tbl_section">
          	<form  name="member_form" method="post" action="member_insert.php">
						<table cellspacing="0" cellpadding="0" width="100%">
							<colgroup>
								<col width="120px" />
								<col width="*" />
							</colgroup>
							<tbody>
                            <span><br></span>
								<tr>
									<th scope="row"><label for="join_id">아이디</label></th>
									<td>
                                    <div class="col1"><input type="text" name="id">
				        	        <a href="#"><img src="./img/check_id.gif"
				        		        onclick="check_id()"></a><br><br>
									</td>
								</tr>
								<tr>
                                <th scope="row"><label for="joinPwd">비밀번호</label></th>
									<td>
                                    <div class="form">
				                    <div class="col1"><input type="password" name="pass"><br><br>
				                     </div>
									</td>
								</tr>
								<tr class="botb">
									<th scope="row"><label for="joinPwd2">비밀번호확인</label></th>
									<td>
                                        <div class="form">
				                        <div class="col1"><input type="password" name="pass_confirm"><br><br>
				                        </div>     
									</td>
								    </tr>
								<tr class="topb">
									<th scope="row"><label for="joinName">이름</label></th>
									<td>
										<div class="form">
				                        <div class="col1"><input type="text" name="name"><br><br>
				                        </div> 
                                    </td>
                                    </tr>
									<th scope="row"><label for="email">이메일</label></th>
									<td>
                                    <div class="form email">
				                        <div class="col1"><input type="text" name="email1">@<input type="text" name="email2">
				                        </div>    
                                        <div class="clear"></div>
			       	                    <div class="bottom_line"> </div>
			                	<div class="buttons">
	                	            <img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  		            <img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			            onclick="reset_form()">     
									</td>
								</tr>
							</tbody>
						</table>

           	</form>
               </div>
            </div>
        </div>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
    <span><br></span> 
<?php require('lib/bottom.php'); ?>