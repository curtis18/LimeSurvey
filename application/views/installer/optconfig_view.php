<?php $this->load->view("installer/header_view",array('progressValue' => $progressValue)); ?>

<form action="<?php echo base_url().'index.php/installer/optional'; ?>" method="post">

<div class="container_6">

<?php $this->load->view('installer/sidebar_view', array(
       'progressValue' => $progressValue,
       'classesForStep' => $classesForStep
    ));
?>

<div class="grid_4 table">

<p class="title">&nbsp;<?php echo $title; ?></p>



<div style="-moz-border-radius:15px; border-radius:15px;" >
<p>&nbsp;<?php echo $descp; ?></p>
<hr />
&nbsp;<?php echo $confirmation; ?><br />
&nbsp;You can leave these settings blank and change them later
<br />

<fieldset class="content-table">
<legend class="content-table-heading">Optional settings</legend>
<table style="width: 640px;">
<tr>
<td><b>Admin Login Name</b><br />
<div class="description-field">This will be the userid by which admin of board will login.</div>
</td>
<td align="right"><input type="text" name="adminLoginName"/></td>
</tr>
<tr>
<td><b>Admin Login Password</b><br />
<div class="description-field">This will be the password of admin user.</div>
</td>
<td align="right" ><input type="password" name="adminLoginPwd"/></td>
</tr>
<tr>
<td><b>Confirm Password</b><br />
<div class="description-field">Confirm your admin password.</div>
</td>
<td align="right"><input type="password" name="confirmPwd"/></td>
</tr>
<tr>
<td><b>Site Name </b><br />
<div class="description-field">This name will appear in the survey list overview and in the administration header.</div>
</td>
<td align="right"><input type="text" name="siteName"/></td>
</tr>
<tr>
<td><b>Admin Email</b><br />
<div class="description-field">This is the default email address of the site administrator and used for system messages and contact options.</div>
</td>
<td align="right"><input type="text" name="adminEmail"/></td>
</tr>
<tr>
<td><b>Default Language</b><br />
<div class="description-field">This will be your default language. Select "<b>en</b>" without double quotes for english.</div>
</td>
<td align="right">

<select id='surveylang' name='surveylang' style='width:156px;'>
<?php
    $langauges = getlanguagedata(true,true);
    foreach($langauges as $langkey => $languagekind)
    {
        $selected = $langkey === 'en';
        $value = $langkey;
        $label = sprintf('%s - %s', $languagekind['nativedescription'], $languagekind['description']);
        echo '<option value="', htmlspecialchars($langkey), '"', $selected ? ' selected="selected"' : '', ">",
            $label, '</option>', "\n";
    }
?>
</select>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</fieldset>

</div>
</div>
</div>

<div class="container_6">
<div class="grid_2">&nbsp;</div>
<div class="grid_4 demo">
 <br/>
 <table style="font-size:11px; width: 694px; background: #ffffff;">
  <tbody>
   <tr>
    <td align="left" style="width: 227px;"><input class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button" value="Previous" onclick="javascript: window.open('<?php echo site_url("installer/install/1"); ?>', '_top')" /></td>
    <td align="center" style="width: 227px;"></td>
    <td align="right" style="width: 227px;"><input class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only' type="submit" value="Next" /></td>
   </tr>
  </tbody>
 </table>
</div>
</div>



</form>
<?php $this->load->view("installer/footer_view"); ?>