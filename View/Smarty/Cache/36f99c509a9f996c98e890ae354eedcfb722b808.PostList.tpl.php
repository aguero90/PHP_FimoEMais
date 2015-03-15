<?php /*%%SmartyHeaderCode:3080554735e06532bc5-84454497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36f99c509a9f996c98e890ae354eedcfb722b808' => 
    array (
      0 => 'C:\\wamp\\www\\Fimo&Mais\\View\\smarty\\templates\\front\\PostList.tpl',
      1 => 1416844575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3080554735e06532bc5-84454497',
  'variables' => 
  array (
    'app_name' => 0,
    'name' => 0,
    'SCRIPT_NAME' => 0,
    'FirstName' => 0,
    'LastName' => 0,
    'contacts' => 0,
    'option_values' => 0,
    'option_selected' => 0,
    'option_output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54735e066b4244_48617682',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54735e066b4244_48617682')) {function content_54735e066b4244_48617682($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Fimo & Mais</title>
    </head>
    <body>
        

        Hello Alessandro, welcome to Smarty!


        <PRE>

            
                            
Title: 
                
The current date and time is 2014-11-24 16:34:14

The value of global assigned variable $SCRIPT_NAME is /Fimo&Mais/index.php

Example of accessing server environment variable SERVER_NAME: localhost

The value of {$Name} is <b>Alessandro</b>

variable modifier example of {$Name|upper}

<b>ALESSANDRO</b>


An example of a section loop:

            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: FirstName in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>84</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>84</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
	none
                
An example of section looped key values:

                    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: contacts in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>125</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>125</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<p>

testing strip tags
                        <table border=0><tr><td><A HREF="/Fimo&Mais/index.php"><font color="red">This is a  test     </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
                    <select name="Date_Month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11" selected="selected">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24" selected="selected">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</form>

This is an example of the html_select_time function:

<form>
                    <select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04" selected="selected">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34" selected="selected">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14" selected="selected">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Meridian">
<option value="am">AM</option>
<option value="pm" selected="selected">PM</option>
</select>
</form>

This is an example of the html_options function:

<form>
<select name=states>
                        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_values in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_selected in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_output in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code on line <i>180</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>247744</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342312</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Fimo&Mais\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0250</td><td bgcolor='#eeeeec' align='right'>1342536</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>377</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1213</td><td bgcolor='#eeeeec' align='right'>4861848</td><td bgcolor='#eeeeec'>content_54735e066746c0_43187919(  )</td><td title='C:\wamp\www\Fimo&Mais\Lib\Smarty-3.1.17\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>182</td></tr>
</table></font>

</select>
</form>
    </body>
</html><?php }} ?>
