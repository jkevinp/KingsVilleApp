<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>KingsVille HomeOwners Association</title>
   <style type="text/css">
   	a {color: #4A72AF;}
	body, #header h1, #header h2, p {margin: 0; padding: 0;}
	#main {border: 1px solid #cfcece;}
	img {display: block;}
	#top-message p, #bottom-message p {color: #3f4042; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
	#header h1 {color: #ffffff !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; font-size: 24px; margin-bottom: 0!important; padding-bottom: 0; }
	#header h2 {color: #ffffff !important; font-family: Arial, Helvetica, sans-serif; font-size: 24px; margin-bottom: 0 !important; padding-bottom: 0; }
	#header p {color: #ffffff !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; font-size: 12px;  }
	h1, h2, h3, h4, h5, h6 {margin: 0 0 0.8em 0; color: #ffffff;}
	h3 {font-size: 28px; color: #444444 !important; font-family: Arial, Helvetica, sans-serif; }
	h4 {font-size: 22px; color: #4A72AF !important; font-family: Arial, Helvetica, sans-serif; }
	h5 {font-size: 18px; color: #444444 !important; font-family: Arial, Helvetica, sans-serif; }
	p {font-size: 12px; color: #444444 !important; font-family: "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif; line-height: 1.5;}
   .violet{
    color:#79589F;
}

.btn-theme {
  color: #fff;
  background-color: #79589F;
  border-color: #48bcb4;
}
   </style>
</head>



<body>


<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#79589F"><tr><td>

<table id="main" width="600" align="center" cellpadding="0" cellspacing="15" bgcolor="#e4e4e4">
		<tr>
			<td>
				<table id="header" cellpadding="10" cellspacing="0" align="center" bgcolor="#9b59b6">
					<tr>
						<td width="570" bgcolor="#9b59b6"><h1>KingsVille Homeowner's Association</h1></td>
					</tr>
					<tr>
						<td width="570"><h2 style="color:#ffffff!important">Password Reminder</h2></td>
					</tr>
					<tr>
						<td width="570" align="right" bgcolor="#9b59b6"><p><?php echo date('Y-m-d');?></p></td>
					</tr>
				</table><!-- header -->
			</td>
		</tr><!-- header -->

		<tr>
			<td></td>
		</tr>
		<tr>
			<td>
				<table id="content-1" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td width="170" valign="top">
							<table cellpadding="5" cellspacing="0">
								<tr><td bgcolor="d0d0d0"><img src="" width="170" /></td></tr></table>
						</td>
						<td width="15"></td>
						<td width="375" valign="top" colspan="3">
							<h3>Forgot Password</h3>
						</td>
					</tr>
				</table><!-- content 1 -->
			</td>
		</tr><!-- content 1 -->
		<tr>
			<td>
				<table id="content-2" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td width="570">
						<p>
							Someone requested a password reset for your account:<b>{{$param['email']}} </b><br/>
							If you didn't request this password reset, Please ignore this Email.<br/><br/>

							Click the link below to reset your password.
							{!! Html::linkRoute('User.account.verify' ,'Reset Now!' , $param['linktoken'] , ['class' => ' btn-theme violet']) !!}<br/>
						</p></td>
					</tr>
				</table><!-- content-2 -->
			</td>
		</tr><!-- content-2 -->
		<tr>
			<td height="30"><img src="http://dummyimage.com/570x30/fff/fff" /></td>
		</tr>
		<tr>
			<td>
				<table id="content-3" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td width="170" valign="top" bgcolor="d0d0d0" style="padding:5px;">
							<img src="" width="170" />
						</td>
						<td width="15"></td>
						<td width="170" valign="top" bgcolor="d0d0d0" style="padding:5px;">
							<img src="" />
						</td>
						<td width="15"></td>
						<td width="170" valign="top" bgcolor="d0d0d0" style="padding:5px;">
							<img src="" />
						</td>
					</tr>
				</table><!-- content-3 -->
			</td>
		</tr><!-- content-3 -->
		
		<tr>
			<td height="30"><img src="" /></td>
		</tr>
		<tr>
			<td>
				<table id="content-6" cellpadding="0" cellspacing="0" align="center"><strong>Please do not share your login information.</strong></p>
					<tr>
						<td align="center">
							<p>You are receiving this email because someone requested a password reset on your account.</p>
							<p><a href="{{route('Guest.home')}}" class="btn-theme violet">KingsVille Homeowner's Association</a></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>

	</table><!-- main -->
	<table id="bottom-message" cellpadding="20" cellspacing="0" width="600" align="center">
		
	</table><!-- top message -->
</td></tr></table><!-- wrapper -->



</body>
</html>