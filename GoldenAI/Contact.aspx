<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage.master" AutoEventWireup="false" CodeFile="Contact.aspx.vb" Inherits="Contact" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Contact</h1></div>
        <div class="pagenation">&nbsp;<a href="Default.aspx">Home</a> <i>/</i> Contact</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="container">

	<div class="content_fullwidth">
        	
        <div class="one_half">
        <p>Please be patient while waiting for response. (24/7 Support!)</p>
        <p><strong>Phone General Inquiries: +46 (739) 723 718</strong></p>
        <br/>
        <h3><i>Contact Form</i></h3>

        <form action="" method="post">
    
            <fieldset>
        
                
            <label class="blocklabel" for="name">Your Name*</label>
            <p><input name="yourname" class="input_bg" id="name" type="text" value=""></p>
        
        
            <label class="blocklabel" for="email">E-Mail*</label>
            <p><input name="email" class="input_bg" id="email" type="text" value=""></p>
        
        
            <label class="blocklabel" for="website">Website</label>
            <p><input name="website" class="input_bg" id="website" type="text" value=""></p>
        
        
            <label class="blocklabel" for="message">Your Message*</label>
            <p><textarea name="message" class="textarea_bg" id="message" rows="7" cols="20"></textarea></p>
        
        
            <p>
            <input name="myemail" id="myemail" type="hidden" value="gsrthemes9@gmail.com">
            <input name="myblogname" id="myblogname" type="hidden" value="yourcompanyname.com">
            </p><div class="clearfix"></div>
            <input name="Send" class="comment_submit" id="send" type="submit" value="SUBMIT"><p></p>
                
            </fieldset>
        
            </form> 
    
        </div>
               
        <div class="one_half last">
    
            <div class="address-info">
                <h3><i>Address Info</i></h3>
                    <ul>
                    <li>
                    <strong>GoldenAI</strong><br/>
                    Sorögatan 55, BV, Kista , 16447, Stockholm, Sweden<br/>
                    Telephone: +46 (739) 723 718<br/>
                    E-mail: <a href="mailto:mail@ContactUS@GoldenAI.com">ContactUS@GoldenAI.com</a><br/>
                    Website: <a href="Default.aspx">www.GoldenAI.com</a>
                    </li>
                </ul>
            </div>

             <h3><i>Find the Address</i></h3>
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2030.698563673642!2d17.935154115632198!3d59.40474148168533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9eee1e6cfdf1%3A0x74a846228c13cac2!2sSor%C3%B6gatan+55%2C+164+47+Kista!5e0!3m2!1sen!2sse!4v1522444092064">View Larger Map</a></small>
        
        </div>
            
    </div>

</div>

<div class="bottom_section">

	<div class="waves_graph2"></div>
   
    <div class="container">
    	<div class="big_text2"><i>Best Small Business IT Services.</i> YOUR E-BUSINESS IS OUR JOB!</div>
    </div>
    
    <div class="clearfix mar_top3"></div>
    
</div>
</asp:Content>

