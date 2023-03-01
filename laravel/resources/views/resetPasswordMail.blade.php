<!DOCTYPE html>
<html lang="en"> 
<title>{{ $data['title'] }}</title>

<head>

</head>

<body>

<p>Dear Member,</p>
<p>{{ $data['body'] }}</p>

<a href="{{ $data['url'] }}">Click here to reset password</a>
<p>Thank You.</p>
<p>(OR)</p>


<table style="width:75%">
<tr style="background-color:#F7C8E0;">
<th style="padding:1rem;border:1px solid #cc2290;"><img src="http://127.0.0.1:8000/assets/C_img/forget-pin.PNG" alt="image" width="10px" class="img-logo"></th>
</tr>
<tr>
<td style="padding:2rem 3rem;border-left:1px solid #cc2290;border-right:1px solid #cc2290;">

<p>Dear <b>{{  $data['name'] }},</b>
<br><br>We getting forgot password request for username : <i><b>{{  $data['name'] }}</b></i>
<br><br>and your email : <i><b>{{ $data['email'] }}</b></i>.
<br>Please change your password to proceed with below link to access.
<br><br><span>
<button  style="position: fixed;left: 20%;border-color:#cc2290;background-color:#cc2290;border-radius:5px;padding: 10px;" id="btnhome" class="btn btn-info" name="submitbtn"><a style="text-decoration:none;color:#fff;font-weight:600;" id="homebtn" href="{{ $data['url'] }}">Change Password link</a></button>
</span>
<br><br><br>Please ignore if you not requsting to forgot password.
<br><br><strong>Yours Sincerely,<br><i>Company Web Team</i>.</p></strnog>

<br>
</td>
</tr>
<tr style="background-color:#F7C8E0;">
    <th style="padding:1rem;border:1px solid #cc2290;">
        <p style="color:#8f5137;">Copyright <i class="bx bx-copyright"></i> 2023 <a href="#" style="text-decoration:none;font-weight:600;"> Company Web ltd</a>. All rights reserved</p>
    </th>
</tr>
</table>
                     

</body>
</html>