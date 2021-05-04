<?php
/*
 * This file is a part of Mibew Messenger.
 *
 * Copyright 2005-2014 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$page['title'] = "Reply Notification";//getlocal("notification.title");

function tpl_content() { 
global $page, $mibewroot, $errors;
$notification = $page['notification'];
?>

<?php //echo getlocal("notification.intro") ?>

<br/><br/>

<div id="content-wrapper">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idm" value="<?php echo $notification['id']; ?>"/>
    <input type="hidden" name="to" value="<?php echo $notification['email']; ?>"/>
    <table cellspacing="1" cellpadding="5" border="0" >
    <tr>
				<td><strong>To Email</strong></td>
                                <td><input type="text" name="mailpen" size="50" value="<?php echo $notification['email']; ?>" class="username" disabled="true"/></td>
			</tr>
    <tr>
				<td><strong>From Email</strong></td>
                                <td><input type="text" name="frommail" size="50" value="<?php echo $_SESSION["operator"]["vcemail"];?>" class="username" disabled="true"/></td>
			</tr>
			<tr>
				<td><strong>Subject</strong></td>
				<td><input type="text" name="subject" size="50" value="" class="username"/></td>
			</tr>
			<tr>
				<td><strong>Message</strong></td>
				<td valign="top">
					<textarea name="message" tabindex="0" cols="51" rows="17"></textarea>
				</td>
			</tr>    
                        <tr>
                            <td>Select File to Send:</td>
                            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Send" name="submit"></td>
                        </tr>
    </table>
</form>

</div>

<br />
<br />


<?php

//print_r($notification);
//print_r($_SESSION["operator"]);
} /* content */

require_once('inc_main.php');


?>

