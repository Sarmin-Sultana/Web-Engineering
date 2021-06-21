<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
     <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link href="./css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./customcss/side_nev.css">
    
    <title>officer_form</title>
    <style>
 * {box-sizing: border-box;}
        body{
            background-color:white;
            text-align: left;
        }
        
        
#regForm {
  background-color: gainsboro;
  margin: 0px auto;
  font-family: Raleway;
  padding: 50px;
  width: 60%;
  min-width: 600px;
}
        
 
input[type=text], textarea {
  width: 90%;
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 4x;
  box-sizing: border-box;
  margin-top:4px;
  margin-bottom: 2px;
  resize: vertical;
}
        /* The container must be positioned relative: */


.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color:white;
    
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 16px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: black transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent black transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: white;
    color: black;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

        
label {
  padding: 0px 0px 0px 0;
  display: inline-block;
     font-family: Arial,sans-serif;
      font-size:small; 
}

         .side-button ul {
        list-style:none;
      }

      .btn-custom {
            color: black;
            background-color: #f7f7f9;
            width: 150px;
            text-align: center;
            font-size: 15px;
            padding: 10px;
            float: left;
         }
        
        .remove{
    max-width: 100px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #305A72;
          float: right;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 20px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
    h1,p,h3{
        text-align: center;
    }
  .container {
  border-radius: 20px;
  background-color: gray!important;
  padding: 0px;
}
        

         
       
    </style>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="./fontawesome-free-5.6.1-web/css/all.css">
     <link rel="stylesheet" type="text/css" href="./bootstrap/all.css"> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/javascript" src="./bootstrap/jquery_331_jquery.min.js"></script>
     <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="./bootstrap/ui_1112_jquery-ui.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="./bootstrap/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="customjs/form.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script> 
    <script type="text/javascript" src="./bootstrap/feather.min.js"></script>


 
  
    
</head>

<body>

  <div class="container">
 <form id="regForm"   action="connectofficers.php" method="POST" enctype="multipart/form-data">
 
 
 <h1>বাংলাদেশ উন্মুক্ত বিশ্ববিদ্যালয়</h1>
    <p ><b> <strong>গাজীপুর-১৭০৫</strong></b></p>
       <hr>
       <h3> কর্মকর্তা পদের জন্য আবেদনপত্র</h3>
   <br><br>
  <table text align:left>
  
     <tr>
     <td>  <label for="pname">পদের নামঃ</label></td>
     <td>  <select id="pname" name="pname"  style="width: 700px;height: 40px;">
            <option value="">Select</option>
            
            <option value="">Deputy Director</option>
            <option value="Manager">Manager</option>
            <option value="">Assistant Director</option>
            <option value="Engineer">Engineer</option>
            <option value="Sub-Assistant Engineer">Sub-Assistant Engineer</option>
            <option value="Genaral Manager">Genaral Manager</option>
            <option value="Chairman">Chairman</option>
            <option value="Vice Chairman">Vice Chairman</option>
            <option value="Cheif Dirrector">Cheif Dirrector</option>
            <option value="Dirrector"> Dirrector</option>
            <option value="Documentation Officer">Documentation Officer </option>
             <option value="Assistant Hardware Maintenance Engineer"> Assistant Hardware Maintenance Engineer</option>
              <option value="Co-ordinating Officer"> Co-ordinating Officer</option>
               <option value="Producer ">Producer </option>
                <option value="Assistant Programmer"> Assistant Programmer</option>
                 <option value="Nurse">Nurse </option>
                  <option value="Webmaster"> Webmaster</option>
                   <option value="Hardware Maintenance Engineer"> Hardware Maintenance Engineer</option>
                  <option value="Administrative Officer">Administrative Officer </option>
                  <option value="Technical Officer"> Technical Officer</option>
                  <option value="Regional Director">Regional Director </option>
                  <option value=" Cameraman"> Cameraman</option>
                  <option value="Programmer"> Programmer</option>
                  <option value=""> </option>
                  <option value=""> </option>
                  <option value=""> </option>
                  <option value=""> </option>
     </select>
     
     </td></tr>
      <tr >
     <td>  <label for="bno">বিজ্ঞপ্তি নংঃ</label></td>
      <td> <input type="text" id="bno" name="bno"  style="width: 400px;height: 15px;">
       <label for="date">তারিখ</label>
       <input type="date" id="date" name="date"  style="width: 258px;height: 40px;"></td></tr>
      <tr>
     <td>  <label for="bname">  নামঃ(বাংলায়):</label></td>
    <td>  <input type="text" id="bname" name="bname"   style="width: 700px;height: 20px;"></td></tr>
    <tr>
       <td> <label for="ename">(ইংরেজিতে):</label></td>
       <td>  <input type="text" id="ename" name="ename"  style="width: 700px;height: 20px;"></td></tr>
      <tr>  
     <td> <label for="fathername"> পিতা/স্বামীর নামঃ</label></td>
     <td>  <input type="text" id="father" name="father"  style="width: 700px;height: 20px;"></td></tr>
      <tr>
     <td>  <label for="mothername">মাতার নামঃ</label></td>
     <td> <input type="text" id="mother" name="mother"  style="width: 700px;height: 20px;"></td></tr>
      <tr> 
    <td>   <label for="birthdate"> জন্ম তারিখ </label></td>
  
     <td>  
     <input type="date" id="birth" name="birth"  style="width: 245px;height: 40px;">
     
     
     <label for="birtharea"> জন্মস্থানঃ</label>
       <input type="text" id="barea" name="barea"  style="width: 395px;height: 20px;">
     </td></tr>
	
     
        <tr> 
    <td>   <label for="birthdate">  বর্তমান বয়সঃ(মাধ্যমিক পরীক্ষার সার্টিফিকেট অনুযায়ী)</label></td>
     <td>  <input type="text" id="age" name="age"  style="width: 700px;height: 20px;"></td></tr>
     
      
      </table> <br>
      
      
      <fieldset >
      <legend  style="color: black";>স্থায়ী ঠিকানা</legend>
      <table text align:left>
    
       <tr>  
       <td> <label for="paddress"> গ্রাম/মহল্লাঃ</label> </td>
      <td><input type="text" id="paddress" name="paddress"   style="width: 350px;height: 20px;"> 
      
     <label for="poffice"> পোঃ </label> 
          <input type="text" id="post" name="post"  style="width: 370px;height: 20px;"></td></tr>
      <tr>
     <td>  <label for="toffice">টেলিগ্রাম অফিসঃ</label> </td>
      <td><input type="text" id="toffice" name="toffice" style="width: 755px;height: 20px;"> </td></tr>
      <tr>
      <td> <label for="upo"> উপজেলাঃ</label> </td>
      <td><input type="text" id="upo" name="upo"  style="width: 350px;height: 20px;">
      <label for="zella">জেলাঃ </label>
      <input type="text" id="zella" name="zella"  style="width:358px;height: 20px;"> </td></tr>
          </table>
      </fieldset><br>
      
      
      <fieldset >
     <legend  style="color: black";>বর্তমান ঠিকানা</legend>  
       <table text align:left>
      <tr>
      <td> <label for="presentadd">পূর্ণ ঠিকানা</label></td>
     <td>  <textarea id="presentadd" name="presentadd" placeholder=""  style="height:50px; width: 700px"></textarea></td></tr>
     <tr> <td> <label for="teleohhice">টেলিগ্রাম অফিসের নামসহঃ</label></td>
     <td> <input type="text" id="teleohhice" name="teleohhice" style="width: 700px;height: 20px;"></td></tr>
      <tr>
      <td> <label for="phone">টেলিফোনঃ  </label></td>
     <td> <input type="text" id="phone" name="phone" style="width:295px;height: 20px;">
     
       <label for="mobile">মোবাইল নম্বরঃ </label>
      <input type="number" id="mobile" name="mobile"  style="width: 315px;height: 40px;"></td></tr>
      <tr>
       <td><label for="email">ই-মেইলঃ</label></td>
     <td> <input type="text" id="email" name="email"  style="width: 700px;height: 15px;"></td></tr>
          </table>
      </fieldset><br>
      
      
      <table text align:left>
      <tr>
      <td><label for="merrige">বৈবাহিক অবস্থাঃ</label></td>
     
      
   <td> 
          

     <select id="merrige" name="merrige"   style="width: 500px;height: 40px;">
     <option value="">Select</option>
      <option value="বিবাহিত">বিবাহিত</option>
      <option value="অবিবাহিত">অবিবাহিত</option>
      
    </select></td>
      <tr>
       <td><label for="nationality">জাতীয়তাঃ </label></td>
      <td><input type="text" id="nationality" name="nationality"  style="width: 500px;height: 15px;"></td></tr>
      <tr>
       <td><label for="nid">জাতীয় পরিচয়পত্র নংঃ</label></td>
      <td><input type="text" id="nid" name="nid"  style="width:500px;height: 15px;"></td></tr>
      <tr>
       <td><label for="relegion"> ধর্মঃ</label></td>
       
       <td>
    
                                    <select class="form-control" name="religion" id="religion"  style="width: 500px;height: 40px;"> <option value=""> Select </option><option value="Islam">Islam</option><option value="Hinduism">Hinduism</option><option value="Christianity">Christianity</option><option value="Buddhism">Buddhism</option><option value="Others">Others</option>
										</select></td>
       

      </table><br>
      
     
      
        <fieldset style="background-color: gray";>
      <label for=""> <legend style="color: white";>শিক্ষাগত যোগ্যতা</legend></label>      
    </fieldset><br>
       
     <fieldset >
             <legend style="color: black";>এস.এস.সি/সমমান</legend> <br>
      <table>
      <tr>
       <td><label for="t1"> স্কুল/কলেজ/ বিশ্ববিদ্যালয়ের নাম </label></td> 
       <td>
       <input type="text" id="t1" name="t1"  style="width: 700px;height: 20px;"> </td> 
      </tr>
      <tr>
       <td><label for=""> বৎসর অতিবাহিত </label></td> 
       <td><input type="number" id="t2" name="t2" placeholder="হইতে "  style="width: 350px;height: 40px;">
       <input type="number" id="t3" name="t3" placeholder="পর্যন্ত "  style="width: 345px;height: 40px;">
       </td>  
      </tr>
      <tr>
        <td><label for="t4">পরীক্ষার নাম </label></td> 
       <td>
     
       <select class="form-control" name="xm_name" id="xm_name"  style="width: 350px;height: 40px;"> <option value=""> Select </option><option value="S.S.C">S.S.C</option><option value="Dakhil">Dakhil</option><option value="S.S.C Vocational">S.S.C Vocational</option><option value="O Level/Cambridge">O Level/Cambridge</option><option value="S.S.C Equivalent">S.S.C Equivalent</option><option value="Trade Certificate">Trade Certificate</option>
														</select>	
   
    <label for="t5">বিভাগ/ শ্রেণী/ জিপিএ/সিজিপিএ</label>
       
       <select class="form-control" name="ssc_result" id="ssc_result"   style="width: 170px;height: 40px;"> <option value=""> Select </option><option value="1st Division">1st Division</option><option value="2nd Division">2nd Division</option><option value="3rd Division">3rd Division</option><option value="GPA(Out of 4)">GPA(Out of 4)</option><option value="GPA(Out of 5)">GPA(Out of 5)</option>
				</select>
     	 <div> <input type="text" id="other" name="other" placeholder="GPA" style="width: 170px;height: 40px; float: right; display: none; " />	</div>
      
      
        
          </td>  
      </tr>
      <tr>
          <td><label for="t6">পাসের সন</label></td>
          <td> 
                                                    
        <select class="form-control" name="passed_year" id="passed_year"   style="width: 100px;height:40px;"> <option value=""> Select </option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
					</select>
            
     
          <label for="t7">বোর্ড/ বিশ্ববিদ্যালয়</label>
         
          <select class="form-control" name="ssc_board" id="ssc_board"   style="width: 300px;height:40px;"> <option value=""> Select </option><option value="Dhaka">Dhaka</option><option value="Cumilla">Cumilla</option><option value="Rajshahi">Rajshahi</option><option value="Jashore">Jashore</option><option value="Chittagong">Chittagong</option><option value="Barishal">Barishal</option><option value="Sylhet">Sylhet</option><option value="Dinajpur">Dinajpur</option><option value="Madrasah">Madrasah</option><option value="Technical">Technical</option><option value="Cambridge International - IGCE">Cambridge International - IGCE</option><option value="Edexcel International">Edexcel International</option><option value="Bangladesh Technical Education Board (BTEB)">Bangladesh Technical Education Board (BTEB)</option><option value="Others">Others</option>
				</select>	
   
       <label for="">পাঠ্য বিষয়</label>
      
       <select class="form-control" name="sub" id="sub"  style="width: 125px;height: 40px;"> <option value=""> Select </option><option value="Science">Science</option><option value="Humanities">Humanities</option><option value="Business Studies">Business Studies</option><option value="Agriculture Technology">Agriculture Technology</option><option value="Architecture and Interior Design Technology">Architecture and Interior Design Technology</option><option value="Automobile Technology">Automobile Technology</option><option value="Civil Technology">Civil Technology</option><option value="Computer Science & Technology">Computer Science & Technology</option><option value="Chemical Technology">Chemical Technology</option><option value="Electrical Technology">Electrical Technology</option><option value="Data Telecommunication and Network Technology">Data Telecommunication and Network Technology</option><option value="Electrical and Electronics Technology">Electrical and Electronics Technology</option><option value="Environmental Technology">Environmental Technology</option><option value="Instrumentation & Process Control Technology">Instrumentation & Process Control Technology</option><option value="Mechanical Technology">Mechanical Technology</option><option value="Mechatronics Technology">Mechatronics Technology</option><option value="Power Technology">Power Technology</option><option value="Refregeration & Air Conditioning Technology">Refregeration & Air Conditioning Technology</option><option value="Telecommunication Technology">Telecommunication Technology</option><option value="Electronics Technology">Electronics Technology</option><option value="Library Science">Library Science</option><option value="Survey">Survey</option><option value="General Mechanics">General Mechanics</option><option value="Firm Machinery">Firm Machinery</option><option value="Others">Others</option>
          </select>	
        </td> 
      </tr>
     </table> 
    </fieldset><br>
     <script type="text/javascript">
  $(document).ready(function () {
        $('#ssc_result').change(function () {
            if( ($('#ssc_result').val() ==  'GPA(Out of 4)' )|| ($('#ssc_result').val() == 'GPA(Out of 5)') ){
                $('#other').show();
            }
            else {
                $('#other').hide();
            }
        });
    });
    
  </script>
       
    
    <fieldset>
       <legend style="color: black";>এইচ.এস.সি/সমমান</legend><br>
      <table>
      <tr>
       <td><label for="t1"> স্কুল/কলেজ/ বিশ্ববিদ্যালয়ের নাম </label></td> 
       <td><input type="text" id="hscName" name="hscName"  style="width: 700px;height: 20px;"> </td> 
      </tr>
      <tr>
       <td><label for=""> বৎসর অতিবাহিত </label></td> 
       <td><input type="number" id="hsc_start" name="hsc_start" placeholder="হইতে "  style="width: 350px;height: 40px;">
       <input type="number" id="hsc_end" name="hsc_end" placeholder="পর্যন্ত "  style="width: 345px;height: 40px;">
       </td>  
      </tr>
      <tr>
        <td><label for="t4">পরীক্ষার নাম </label></td> 
       <td>
       <select class="form-control" name="hscxmName" id="hscxmName"   style="width: 350px;height: 40px;"> <option value=""> Select </option><option value="H.S.C">H.S.C</option><option value="Alim">Alim</option><option value="Business Management">Business Management</option><option value="Diploma Engineering">Diploma Engineering</option><option value="A Level/Sr. Cambridge">A Level/Sr. Cambridge</option><option value="H.S.C Equivalent">H.S.C Equivalent</option>
														</select>
       
     <label for="t5">বিভাগ/ শ্রেণী/ জিপিএ/সিজিপিএ</label>
       <select class="form-control" name="hsc_result" id="hsc_result"    style="width: 170px;height: 40px;"> <option value=""> Select </option><option value="1st Division ">1st Division </option><option value="2nd Division">2nd Division</option><option value="3rd Division">3rd Division</option><option value="GPA(Out of 4)">GPA(Out of 4)</option><option value="GPA(Out of 5)">GPA(Out of 5)</option>
														</select>
      	<div><input type="text" id="other1" name="other1" placeholder="GPA" style="width: 150px;height: 30px; float: right; display: none;" /></div>
         </td>  
      </tr>
      <tr>
          <td><label for="t6">পাসের সন</label></td> 
       <td>
        <select class="form-control" name="hscpassedyear" id="hscpassedyear"  style="width: 100px;height:40px;"> <option value=""> Select </option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
       </select>
		
         <label for="t7">বোর্ড/ বিশ্ববিদ্যালয়</label>
         <select class="form-control" name="hsc_board" id="hsc_board"   style="width: 300px;height: 40px;"> <option value=""> Select </option><option value="Dhaka">Dhaka</option><option value="Cumilla">Cumilla</option><option value="Rajshahi">Rajshahi</option><option value="Jashore">Jashore</option><option value="Chittagong">Chittagong</option><option value="Barishal">Barishal</option><option value="Sylhet">Sylhet</option><option value="Dinajpur">Dinajpur</option><option value="Madrasah">Madrasah</option><option value="Technical">Technical</option><option value="Cambridge International - IGCE">Cambridge International - IGCE</option><option value="Edexcel International">Edexcel International</option><option value="Bangladesh Technical Education Board (BTEB)">Bangladesh Technical Education Board (BTEB)</option><option value="Others">Others</option>
														</select>	
         
      
       <label for="">পাঠ্য বিষয়</label>
        <select class="form-control" name="hscsub" id="hscsub"  style="width: 125px;height: 40px;"> <option value=""> Select </option><option value="Science">Science</option><option value="Humanities">Humanities</option><option value="Business Studies">Business Studies</option><option value="Agriculture Technology">Agriculture Technology</option><option value="Architecture and Interior Design Technology">Architecture and Interior Design Technology</option><option value="Automobile Technology">Automobile Technology</option><option value="Civil Technology">Civil Technology</option><option value="Computer Science & Technology">Computer Science & Technology</option><option value="Chemical Technology">Chemical Technology</option><option value="Electrical Technology">Electrical Technology</option><option value="Data Telecommunication and Network Technology">Data Telecommunication and Network Technology</option><option value="Electrical and Electronics Technology">Electrical and Electronics Technology</option><option value="Environmental Technology">Environmental Technology</option><option value="Instrumentation & Process Control Technology">Instrumentation & Process Control Technology</option><option value="Mechanical Technology">Mechanical Technology</option><option value="Mechatronics Technology">Mechatronics Technology</option><option value="Power Technology">Power Technology</option><option value="Refregeration & Air Conditioning Technology">Refregeration & Air Conditioning Technology</option><option value="Telecommunication Technology">Telecommunication Technology</option><option value="Electronics Technology">Electronics Technology</option><option value="Library Science">Library Science</option><option value="Survey">Survey</option><option value="General Mechanics">General Mechanics</option><option value="Firm Machinery">Firm Machinery</option><option value="Others">Others</option>
														</select>	
       
        </td> 
      </tr>
     </table> 
    </fieldset><br>
       <script type="text/javascript">
  $(document).ready(function () {
        $('#hsc_result').change(function () {
            if(  ($('#hsc_result').val() =='GPA(Out of 4)') || ($('#hsc_result').val() =='GPA(Out of 5)') ){
                $('#other1').show();
            }
            else {
                $('#other1').hide();
            }
        });
    });
    
  </script>
         
    
    <fieldset>
       <legend style="color: black";>অনার্স/সমমান</legend><br>
      <table>
      <tr>
       <td><label for="t1"> স্কুল/কলেজ/ বিশ্ববিদ্যালয়ের নাম </label></td> 
       <td>
        <select class="form-control" name="graduation_equivalent_level_university_institute" id="graduation_equivalent_level_university_institute"  style="width: 700px;height: 40px;"> <option value="" > Select </option><option value="Bangabandhu Sheikh Mujib Medical University">Bangabandhu Sheikh Mujib Medical University</option><option value="Bangabandhu Sheikh Mujibur Rahman Agricultural University">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="Bangladesh Agricultural University,Mymensingh">Bangladesh Agricultural University,Mymensingh</option><option value="Bangladesh Open University">Bangladesh Open University</option><option value="Bangladesh University of Engineering & Technology">Bangladesh University of Engineering & Technology</option><option value="Bangladesh University of Professionals">Bangladesh University of Professionals</option><option value="Chittagong University of Engineering & Technology">Chittagong University of Engineering & Technology</option><option value="Chittagong Veterinary and Animal Sciences University">Chittagong Veterinary and Animal Sciences University</option><option value="Comilla University">Comilla University</option><option value="Dhaka University">Dhaka University</option><option value="Dhaka University of Engineering & Technology">Dhaka University of Engineering & Technology</option><option value="Hajee Mohammad Danesh Science & Technology University">Hajee Mohammad Danesh Science & Technology University</option><option value="Islamic University, Kushtia ">Islamic University, Kushtia </option><option value="Jagannath University">Jagannath University</option><option value="Jahangirnagar University">Jahangirnagar University</option><option value="Jatiya Kabi Kazi Nazrul Islam University">Jatiya Kabi Kazi Nazrul Islam University</option><option value="Jessore Science & Technology University">Jessore Science & Technology University</option><option value="Khulna University">Khulna University</option><option value="Khulna University of Engineering and Technology">Khulna University of Engineering and Technology</option><option value="Mawlana Bhashani Science & Technology University">Mawlana Bhashani Science & Technology University</option><option value="National University">National University</option><option value="Noakhali Science & Technology University">Noakhali Science & Technology University</option><option value="Pabna University of Science and Technology">Pabna University of Science and Technology</option><option value="Patuakhali Science And Technology University">Patuakhali Science And Technology University</option><option value="Rajshahi University">Rajshahi University</option><option value="Rajshahi University of Engineering & Technology">Rajshahi University of Engineering & Technology</option><option value="Rangpur University">Rangpur University</option><option value="Shahjalal University of Science & Technology">Shahjalal University of Science & Technology</option><option value="Sher-e-Bangla Agricultural University">Sher-e-Bangla Agricultural University</option><option value="Sylhet Agricultural University">Sylhet Agricultural University</option><option value="University of Chittagong">University of Chittagong</option><option value="Ahsanullah University of Science and Technology">Ahsanullah University of Science and Technology</option><option value="America Bangladesh University">America Bangladesh University</option><option value="American International University Bangladesh">American International University Bangladesh</option><option value="ASA University Bangladesh">ASA University Bangladesh</option><option value="Asian University of Bangladesh">Asian University of Bangladesh</option><option value="Atish Dipankar University of Science & Technology">Atish Dipankar University of Science & Technology</option><option value="Bangladesh Islami University">Bangladesh Islami University</option><option value="Bangladesh University">Bangladesh University</option><option value="Bangladesh University of Business & Technology (BUBT)">Bangladesh University of Business & Technology (BUBT)</option><option value="BGC Trust University Bangladesh, Chittagong">BGC Trust University Bangladesh, Chittagong</option><option value="BRAC University">BRAC University</option><option value="Central Women's University">Central Women's University</option><option value="City University">City University</option><option value="Daffodil International University">Daffodil International University</option><option value="Darul Ihsan University">Darul Ihsan University</option><option value="Dhaka International University">Dhaka International University</option><option value="East Delta University , Chittagong">East Delta University , Chittagong</option><option value="East West University">East West University</option><option value="Eastern University">Eastern University</option><option value="Gono Bishwabidyalay">Gono Bishwabidyalay</option><option value="Green University of Bangladesh">Green University of Bangladesh</option><option value="IBAIS University">IBAIS University</option><option value="Independent University, Bangladesh">Independent University, Bangladesh</option><option value="International Islamic University, Chittagong">International Islamic University, Chittagong</option><option value="International University of Business Agriculture & Technology">International University of Business Agriculture & Technology</option><option value="Leading University, Sylhet">Leading University, Sylhet</option><option value="Manarat International University">Manarat International University</option><option value="Metropolitan University, Sylhet">Metropolitan University, Sylhet</option><option value="North South University">North South University</option><option value="Northern University Bangladesh">Northern University Bangladesh</option><option value="Premier University, Chittagong">Premier University, Chittagong</option><option value="Presidency University">Presidency University</option><option value="Prime University">Prime University</option><option value="Primeasia University">Primeasia University</option><option value="Queens University">Queens University</option><option value="Royal University of Dhaka">Royal University of Dhaka</option><option value="Shanto Mariam University of Creative Technology">Shanto Mariam University of Creative Technology</option><option value="Southeast University">Southeast University</option><option value="Southern University of Bangladesh , Chittagong">Southern University of Bangladesh , Chittagong</option><option value="Stamford University, Bangladesh">Stamford University, Bangladesh</option><option value="State University Of Bangladesh">State University Of Bangladesh</option><option value="Sylhet International University, Sylhet">Sylhet International University, Sylhet</option><option value="The Millenium University">The Millenium University</option><option value="The Peoples University of Bangladesh">The Peoples University of Bangladesh</option><option value="The University of Asia Pacific">The University of Asia Pacific</option><option value="United International University">United International University</option><option value="University of Development Alternative">University of Development Alternative</option><option value="University of Information Technology & Sciences">University of Information Technology & Sciences</option><option value="University of Liberal Arts Bangladesh">University of Liberal Arts Bangladesh</option><option value="University of Science & Technology, Chittagong">University of Science & Technology, Chittagong</option><option value="University of South Asia">University of South Asia</option><option value="Uttara University">Uttara University</option><option value="Victoria University of Bangladesh">Victoria University of Bangladesh</option><option value="World University of Bangladesh">World University of Bangladesh</option><option value="Asian University for Women">Asian University for Women</option><option value="Islamic University of Technology">Islamic University of Technology</option><option value="South Asian University">South Asian University</option><option value="Dhaka Medical College">Dhaka Medical College</option><option value="Sir Salimullah Medical College">Sir Salimullah Medical College</option><option value="Mymensingh Medical College">Mymensingh Medical College</option><option value="Chittagong Medical College">Chittagong Medical College</option><option value="Rajshahi Medical College">Rajshahi Medical College</option><option value="MAG Osmani Medical College">MAG Osmani Medical College</option><option value="Sher-E-Bangla Medical College">Sher-E-Bangla Medical College</option><option value="Rangpur Medical College">Rangpur Medical College</option><option value="Comilla Medical College">Comilla Medical College</option><option value="Khulna Medical College">Khulna Medical College</option><option value="Shaheed Ziaur Rahman Medical College">Shaheed Ziaur Rahman Medical College</option><option value="Dinajpur Medical College">Dinajpur Medical College</option><option value="Faridpur Medical College">Faridpur Medical College</option><option value="Shaheed Suhrawardy Medical College">Shaheed Suhrawardy Medical College</option><option value="Pabna Medical College">Pabna Medical College</option><option value="Noakhali Medical College">Noakhali Medical College</option><option value="Cox`s Bazar Medical College">Cox`s Bazar Medical College</option><option value="Jessore Medical College">Jessore Medical College</option><option value="Shaheed Nazrul Islam Medical College">Shaheed Nazrul Islam Medical College</option><option value="Kushtia Medical College">Kushtia Medical College</option><option value="Satkhira Medical College">Satkhira Medical College</option><option value="Sheikh Sayera Khatun Medical College, Gopalganj">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="Feni Medical College,Feni">Feni Medical College,Feni</option><option value="Gono Bishwabidyalay, Savar, Dhaka">Gono Bishwabidyalay, Savar, Dhaka</option><option value="Ad-din Womens Medical College, Dhaka">Ad-din Womens Medical College, Dhaka</option><option value="Anwer Khan Modern Medical College, Dhaka">Anwer Khan Modern Medical College, Dhaka</option><option value="Bangladesh Medical College">Bangladesh Medical College</option><option value="Jalalabad Rageb-Rabeya Medical College,Sylhet">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="BGC Trust Medical College, Chittagong">BGC Trust Medical College, Chittagong</option><option value="Central Medical College, Comilla">Central Medical College, Comilla</option><option value="Chottagram Ma-O-Shishu Hospital Medical College">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="Community Based Medical College (cbmc), Mymensingh">Community Based Medical College (cbmc), Mymensingh</option><option value="Community Medical College, Dhaka">Community Medical College, Dhaka</option><option value="Delta Medical College, Dhaka">Delta Medical College, Dhaka</option><option value="Dhaka National Medical College">Dhaka National Medical College</option><option value="Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet">Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet</option><option value="Eastern Medical College, Comilla">Eastern Medical College, Comilla</option><option value="Enam Medical College, Savar, Dhaka">Enam Medical College, Savar, Dhaka</option><option value="Sylhet Women`s Medical College, Sylhet">Sylhet Women`s Medical College, Sylhet</option><option value="Green Life Medical College,Dhaka">Green Life Medical College,Dhaka</option><option value="Holy Family Red Crescent Medical College, Dhaka">Holy Family Red Crescent Medical College, Dhaka</option><option value="Ibrahim Medical College, Dhaka">Ibrahim Medical College, Dhaka</option><option value="Ibn Sina Medical College, Dhaka">Ibn Sina Medical College, Dhaka</option><option value="International Medical College, Gazipur">International Medical College, Gazipur</option><option value="Islami Bank Medical College, Rajshahi">Islami Bank Medical College, Rajshahi</option><option value="Jahurul Islam Medical College, Kishoregonj">Jahurul Islam Medical College, Kishoregonj</option><option value="Jalalabad Ragib-Rabeya Medical College Sylhet">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="Khawja Yunus Ali Medical College, Sirajganj">Khawja Yunus Ali Medical College, Sirajganj</option><option value="Kumudini Medical College, Tangail">Kumudini Medical College, Tangail</option><option value="Labaid Medical College[6] Dhanmondi, Dhaka">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="Maulana Bhasani Medical College">Maulana Bhasani Medical College</option><option value="Medical College for Women and Hospital, Dhaka">Medical College for Women and Hospital, Dhaka</option><option value="Nightingale Medical College, Dhaka">Nightingale Medical College, Dhaka</option><option value="North Bengal Medical College, Sirajganj">North Bengal Medical College, Sirajganj</option><option value="North East Medical College, Sylhet">North East Medical College, Sylhet</option><option value="Northern International Medical College, Dhaka">Northern International Medical College, Dhaka</option><option value="Northern Private Medical College, Rangpur">Northern Private Medical College, Rangpur</option><option value="Popular Medical College & Hospital, Dhaka">Popular Medical College & Hospital, Dhaka</option><option value="Prime Medical College, Rangpur">Prime Medical College, Rangpur</option><option value="Rangpur Community Hospital Medical College">Rangpur Community Hospital Medical College</option><option value="Sahabuddin Medical College and Hospital">Sahabuddin Medical College and Hospital</option><option value="Samaj Vittik Medical College, Mirzanagar, Savar">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="Shahabuddin Medical College, Dhaka">Shahabuddin Medical College, Dhaka</option><option value="Z. H. Sikder Women`s Medical College">Z. H. Sikder Women`s Medical College</option><option value="Southern Medical College, Chittagong">Southern Medical College, Chittagong</option><option value="Tairunnessa Memorial Medical College, Gazipur">Tairunnessa Memorial Medical College, Gazipur</option><option value="TMSS Medical College,Bogra">TMSS Medical College,Bogra</option><option value="University Of Science and Technology Chittagong. IAMS">University Of Science and Technology Chittagong. IAMS</option><option value="Uttara Adhunik Medical College,Dhaka">Uttara Adhunik Medical College,Dhaka</option><option value="Military Institute of Science and Technology (MIST)">Military Institute of Science and Technology (MIST)</option><option value="Others">Others</option><option value="Sonargaon University">Sonargaon University</option>
													</select>	
        </td> 
      </tr>
      <tr>
       <td><label for=""> বৎসর অতিবাহিত </label></td> 
       <td><input type="number" id="hstart_year" name="hstart_year" placeholder="হইতে "  style="width: 350px;height: 40px;">
       <input type="number" id="hend_year" name="hend_year" placeholder="পর্যন্ত "  style="width: 345px;height: 40px;">
       </td>  
      </tr>
      
      <tr>
        <td><label for="t4">পরীক্ষার নাম </label></td> 
       <td>
        <select class="form-control" name="graduation_equivalent_level_examination" id="graduation_equivalent_level_examination"  style="width: 350px;height: 40px;"> <option value=""> Select </option><option value="BBA">BBA</option><option value="B.S.S (Honors)">B.S.S (Honors)</option><option value="B.Sc (Honors)">B.Sc (Honors)</option><option value="B.A (Honors)">B.A (Honors)</option><option value="B.Sc">B.Sc</option><option value="Honors">Honors</option><option value="LL.B.(Honours)">LL.B.(Honours)</option><option value="B.Sc (Agricultural Science)">B.Sc (Agricultural Science)</option><option value="B.Sc (Engineering/Architecture)">B.Sc (Engineering/Architecture)</option><option value="B.Tech">B.Tech</option><option value="M.B.B.S">M.B.B.S</option><option value="B.A (Pass Course)">B.A (Pass Course)</option><option value="B.S.S (Pass Course)">B.S.S (Pass Course)</option><option value="B.Sc (Pass Course)">B.Sc (Pass Course)</option><option value="B.Com (Pass Course)">B.Com (Pass Course)</option><option value="L.L.B (Pass Course)">L.L.B (Pass Course)</option><option value="Graduation or equivalent">Graduation or equivalent</option><option value="B.Com (Honors)">B.Com (Honors)</option><option value="BBS">BBS</option><option value="BBS (Pass Course)">BBS (Pass Course)</option><option value="Fazil">Fazil</option><option value="B.D.S">B.D.S</option>
													</select>
       
        
     <label for="t5">বিভাগ/ শ্রেণী/ জিপিএ/সিজিপিএ</label>
        <select class="form-control" name="graduation_equivalent_level_result" id="graduation_equivalent_level_result"    style="width: 170px;height: 40px;"> <option value=""> Select </option><option value="1st Class">1st Class</option><option value="2nd Class">2nd Class</option><option value="3rd Class">3rd Class</option><option value="CGPA(Out of 4)">CGPA(Out of 4)</option><option value="CGPA(Out of 5)">CGPA(Out of 5)</option><option value="Others">Others</option>
													</select>
  	    <div  > <input type="text" id="other2" name="other2" placeholder="GPA" style="width: 170px;height: 40px; float: right; display: none;" /></div>
  	    
  	    	
  	    			
        </td>  
      </tr>
      <tr>
          <td><label for="t6">পাসের সন</label></td> 
       <td>
        <select class="form-control" name="graduation_equivalent_level_passing_year" id="graduation_equivalent_level_passing_year"  style="width: 100px;height: 40px;"> <option value=""> Select </option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1884">1884</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1889">1889</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
													</select>	
       

      
         <label for="t7">বোর্ড/ বিশ্ববিদ্যালয়</label>
       <input type="text" id="hBoard" name="hBoard"  style="width: 300px;height: 20px;"> 
       <label for="">পাঠ্য বিষয়</label>
        <select class="form-control" name="graduation_equivalent_level_subject_degree" id="graduation_equivalent_level_subject_degree"  style="width: 125px;height: 40px;"> <option value=""> Select </option><option value="Accounting">Accounting</option><option value="Anthropology">Anthropology</option><option value="Applied Chemistry">Applied Chemistry</option><option value="Applied Physics">Applied Physics</option><option value="Applied Mathematics">Applied Mathematics</option><option value="Arabic">Arabic</option><option value="Archaeology">Archaeology</option><option value="Bangla">Bangla</option><option value="Banking">Banking</option><option value="Biochemistry">Biochemistry</option><option value="Botany">Botany</option><option value="Business Administration">Business Administration</option><option value="Chemistry">Chemistry</option><option value="Computer Science">Computer Science</option><option value="Clinical Psychology">Clinical Psychology</option><option value="Drama & Music">Drama & Music</option><option value="Development Studies">Development Studies</option><option value="Economics">Economics</option><option value="Education">Education</option><option value="English">English</option><option value="Finance">Finance</option><option value="Fine Arts">Fine Arts</option><option value="Folklore">Folklore</option><option value="Geography">Geography</option><option value="Geology/Environment">Geology/Environment</option><option value="History">History</option><option value="Home Economics">Home Economics</option><option value="Hadith">Hadith</option><option value="International Relations">International Relations</option><option value="Islamic History and Culture">Islamic History and Culture</option><option value="Islamic Studies">Islamic Studies</option><option value="Information Com. Tech. (ICT)">Information Com. Tech. (ICT)</option><option value="Mass Comm. & Journalism">Mass Comm. & Journalism</option><option value="Law/Jurisprudence">Law/Jurisprudence</option><option value="Library Science">Library Science</option><option value="Language/Linguistic">Language/Linguistic</option><option value="Management">Management</option><option value="Marketing">Marketing</option><option value="Mathematics">Mathematics</option><option value="Microbiology">Microbiology</option><option value="Marine Science">Marine Science</option><option value="Medical Technology">Medical Technology</option><option value="Pali">Pali</option><option value="Persian">Persian</option><option value="Pharmacy">Pharmacy</option><option value="Philosophy">Philosophy</option><option value="Physics">Physics</option><option value="Political Science/Govt. and Politics">Political Science/Govt. and Politics</option><option value="Psychology">Psychology</option><option value="Public Administration">Public Administration</option><option value="Public Finance">Public Finance</option><option value="Population Science">Population Science</option><option value="Peace & Conflict">Peace & Conflict</option><option value="Pharmaceutical Chemistry">Pharmaceutical Chemistry</option><option value="Sanskrit">Sanskrit</option><option value="Social Welfare/Social Work">Social Welfare/Social Work</option><option value="Sociology">Sociology</option><option value="Soil Water and Environment Science">Soil Water and Environment Science</option><option value="Statistics">Statistics</option><option value="Tafsir">Tafsir</option><option value="Urdu">Urdu</option><option value="Urban Development">Urban Development</option><option value="World Religion">World Religion</option><option value="Women Studies">Women Studies</option><option value="Water & Environment Science">Water & Environment Science</option><option value="Zoology">Zoology</option><option value="Genetic and Breeding">Genetic and Breeding</option><option value="International Law">International Law</option><option value="Akaid">Akaid</option><option value="Graphics">Graphics</option><option value="Fikha">Fikha</option><option value="Modern Arabic">Modern Arabic</option><option value="History of Music">History of Music</option><option value="Drawing and Printing">Drawing and Printing</option><option value="Industrial Arts">Industrial Arts</option><option value="Ethics">Ethics</option><option value="Forestry">Forestry</option><option value="Agriculture">Agriculture</option><option value="Agriculture Chemistry">Agriculture Chemistry</option><option value="Agriculture Co-operatives">Agriculture Co-operatives</option><option value="Agriculture Economics">Agriculture Economics</option><option value="Agriculture Engineering">Agriculture Engineering</option><option value="Agriculture Finance">Agriculture Finance</option><option value="Agriculture Marketing">Agriculture Marketing</option><option value="Agriculture Science">Agriculture Science</option><option value="Agriculture Soil Science">Agriculture Soil Science</option><option value="Animal Husbandry">Animal Husbandry</option><option value="Agronomy & Aquaculture">Agronomy & Aquaculture</option><option value="Agronomy & Aquaculture Extension">Agronomy & Aquaculture Extension</option><option value="Anatomy & Histology">Anatomy & Histology</option><option value="Agronnomy">Agronnomy</option><option value="Anatomology">Anatomology</option><option value="Animal Breeding & Genetic">Animal Breeding & Genetic</option><option value="Animal Science">Animal Science</option><option value="Animal Nutrition">Animal Nutrition</option><option value="Agriculture Water Management">Agriculture Water Management</option><option value="Agriculture Extension">Agriculture Extension</option><option value="Agro Forestry">Agro Forestry</option><option value="Agriculture Statistics">Agriculture Statistics</option><option value="Agr.Co-operative & Marketing">Agr.Co-operative & Marketing</option><option value="Bio-Technology">Bio-Technology</option><option value="Corp Botany">Corp Botany</option><option value="Dairy Science">Dairy Science</option><option value="Doc.of Veterinary Science">Doc.of Veterinary Science</option><option value="Fisheries">Fisheries</option><option value="Fisheries & Aquaculture">Fisheries & Aquaculture</option><option value="Fisheries Biology">Fisheries Biology</option><option value="Fisheries Management">Fisheries Management</option><option value="Fisheries Technology">Fisheries Technology</option><option value="Forestry">Forestry</option><option value="Farm Power & Machinery">Farm Power & Machinery</option><option value="Food Tech. & Rural Industry">Food Tech. & Rural Industry</option><option value="Farm Structure">Farm Structure</option><option value="Horticulture">Horticulture</option><option value="Livestock">Livestock</option><option value="Microbiology & Hygenic">Microbiology & Hygenic</option><option value="Production Economics">Production Economics</option><option value="Plant Pathology">Plant Pathology</option><option value="Paratrology">Paratrology</option><option value="Poultry Science">Poultry Science</option><option value="Rural Sociology">Rural Sociology</option><option value="Surgery & Obstate">Surgery & Obstate</option><option value="Business Studies">Business Studies</option><option value="Architecture">Architecture</option><option value="Chemical">Chemical</option><option value="Civil">Civil</option><option value="Electrical">Electrical</option><option value="Electrical & Electronics">Electrical & Electronics</option><option value="Electronic">Electronic</option><option value="Genetic Engineering">Genetic Engineering</option><option value="Industrial">Industrial</option><option value="Leather Technology">Leather Technology</option><option value="Marine">Marine</option><option value="Mechanical">Mechanical</option><option value="Metallurgy">Metallurgy</option><option value="Mineral">Mineral</option><option value="Mining">Mining</option><option value="Naval Architecture">Naval Architecture</option><option value="Physical Planning">Physical Planning</option><option value="Regional Planning">Regional Planning</option><option value="Structural">Structural</option><option value="Textile Technology">Textile Technology</option><option value="Town Planning">Town Planning</option><option value="Urban Planning">Urban Planning</option><option value="Tele-Comunication Engineering">Tele-Comunication Engineering</option><option value="Computer Science">Computer Science</option><option value="Microwave Engineering">Microwave Engineering</option><option value="A & B Section of A.M.I.E">A & B Section of A.M.I.E</option><option value="Environmental Engineering">Environmental Engineering</option><option value="Aeronautical Engineering">Aeronautical Engineering</option><option value="Medicine & Surgery">Medicine & Surgery</option><option value="Dental Surgery">Dental Surgery</option><option value="B.A">B.A</option><option value="B.S.S">B.S.S</option><option value="B.Sc">B.Sc</option><option value="B.Com">B.Com</option><option value="B.B.A">B.B.A</option><option value="Others">Others</option><option value="Accounting and Information Systems">Accounting and Information Systems</option><option value="Management Information Systems">Management Information Systems</option><option value="International Business">International Business</option><option value="Tourism and Hospitality Management">Tourism and Hospitality Management</option><option value="Organization Strategy and Leadership">Organization Strategy and Leadership</option><option value="Finance and Banking">Finance and Banking</option><option value="Banking and Insurance">Banking and Insurance</option><option value="Human Resource Management">Human Resource Management</option><option value="BBS">BBS</option><option value="L.L.B">L.L.B</option>
													</select>	
       
      </td> 
      </tr>
     </table> 
    </fieldset><br>
    
     <script type="text/javascript">
  $(document).ready(function () {
        $('#graduation_equivalent_level_result').change(function () {
            if(   ($('#graduation_equivalent_level_result').val() =='CGPA(Out of 4)') || ($('#graduation_equivalent_level_result').val() =='CGPA(Out of 5)') || ($('#graduation_equivalent_level_result').val() =='Others')){
                $('#other2').show();
            }
            else {
                $('#other2').hide();
            }
        });
    });
    
  </script>
         
        
    
    
     
     <fieldset>
      <legend style="color: black";>    মাস্টার্স /সমমান</legend><br>
      <table>
      <tr>
       <td><label for="t1"> স্কুল/কলেজ/ বিশ্ববিদ্যালয়ের নাম </label></td> 
       <td>
        <select class="form-control" name="masters_equivalent_level_university_institute" id="masters_equivalent_level_university_institute"  style="width: 700px;height: 40px;"> <option value=""> Select </option><option value="Bangabandhu Sheikh Mujib Medical University">Bangabandhu Sheikh Mujib Medical University</option><option value="Bangabandhu Sheikh Mujibur Rahman Agricultural University">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="Bangladesh Agricultural University,Mymensingh">Bangladesh Agricultural University,Mymensingh</option><option value="Bangladesh Open University">Bangladesh Open University</option><option value="Bangladesh University of Engineering & Technology">Bangladesh University of Engineering & Technology</option><option value="Bangladesh University of Professionals">Bangladesh University of Professionals</option><option value="Chittagong University of Engineering & Technology">Chittagong University of Engineering & Technology</option><option value="Chittagong Veterinary and Animal Sciences University">Chittagong Veterinary and Animal Sciences University</option><option value="Comilla University">Comilla University</option><option value="Dhaka University">Dhaka University</option><option value="Dhaka University of Engineering & Technology">Dhaka University of Engineering & Technology</option><option value="Hajee Mohammad Danesh Science & Technology University">Hajee Mohammad Danesh Science & Technology University</option><option value="Islamic University, Kushtia ">Islamic University, Kushtia </option><option value="Jagannath University">Jagannath University</option><option value="Jahangirnagar University">Jahangirnagar University</option><option value="Jatiya Kabi Kazi Nazrul Islam University">Jatiya Kabi Kazi Nazrul Islam University</option><option value="Jessore Science & Technology University">Jessore Science & Technology University</option><option value="Khulna University">Khulna University</option><option value="Khulna University of Engineering and Technology">Khulna University of Engineering and Technology</option><option value="Mawlana Bhashani Science & Technology University">Mawlana Bhashani Science & Technology University</option><option value="National University">National University</option><option value="Noakhali Science & Technology University">Noakhali Science & Technology University</option><option value="Pabna University of Science and Technology">Pabna University of Science and Technology</option><option value="Patuakhali Science And Technology University">Patuakhali Science And Technology University</option><option value="Rajshahi University">Rajshahi University</option><option value="Rajshahi University of Engineering & Technology">Rajshahi University of Engineering & Technology</option><option value="Rangpur University">Rangpur University</option><option value="Shahjalal University of Science & Technology">Shahjalal University of Science & Technology</option><option value="Sher-e-Bangla Agricultural University">Sher-e-Bangla Agricultural University</option><option value="Sylhet Agricultural University">Sylhet Agricultural University</option><option value="University of Chittagong">University of Chittagong</option><option value="Ahsanullah University of Science and Technology">Ahsanullah University of Science and Technology</option><option value="America Bangladesh University">America Bangladesh University</option><option value="American International University Bangladesh">American International University Bangladesh</option><option value="ASA University Bangladesh">ASA University Bangladesh</option><option value="Asian University of Bangladesh">Asian University of Bangladesh</option><option value="Atish Dipankar University of Science & Technology">Atish Dipankar University of Science & Technology</option><option value="Bangladesh Islami University">Bangladesh Islami University</option><option value="Bangladesh University">Bangladesh University</option><option value="Bangladesh University of Business & Technology (BUBT)">Bangladesh University of Business & Technology (BUBT)</option><option value="BGC Trust University Bangladesh, Chittagong">BGC Trust University Bangladesh, Chittagong</option><option value="BRAC University">BRAC University</option><option value="Central Women's University">Central Women's University</option><option value="City University">City University</option><option value="Daffodil International University">Daffodil International University</option><option value="Darul Ihsan University">Darul Ihsan University</option><option value="Dhaka International University">Dhaka International University</option><option value="East Delta University , Chittagong">East Delta University , Chittagong</option><option value="East West University">East West University</option><option value="Eastern University">Eastern University</option><option value="Gono Bishwabidyalay">Gono Bishwabidyalay</option><option value="Green University of Bangladesh">Green University of Bangladesh</option><option value="IBAIS University">IBAIS University</option><option value="Independent University, Bangladesh">Independent University, Bangladesh</option><option value="International Islamic University, Chittagong">International Islamic University, Chittagong</option><option value="International University of Business Agriculture & Technology">International University of Business Agriculture & Technology</option><option value="Leading University, Sylhet">Leading University, Sylhet</option><option value="Manarat International University">Manarat International University</option><option value="Metropolitan University, Sylhet">Metropolitan University, Sylhet</option><option value="North South University">North South University</option><option value="Northern University Bangladesh">Northern University Bangladesh</option><option value="Premier University, Chittagong">Premier University, Chittagong</option><option value="Presidency University">Presidency University</option><option value="Prime University">Prime University</option><option value="Primeasia University">Primeasia University</option><option value="Queens University">Queens University</option><option value="Royal University of Dhaka">Royal University of Dhaka</option><option value="Shanto Mariam University of Creative Technology">Shanto Mariam University of Creative Technology</option><option value="Southeast University">Southeast University</option><option value="Southern University of Bangladesh , Chittagong">Southern University of Bangladesh , Chittagong</option><option value="Stamford University, Bangladesh">Stamford University, Bangladesh</option><option value="State University Of Bangladesh">State University Of Bangladesh</option><option value="Sylhet International University, Sylhet">Sylhet International University, Sylhet</option><option value="The Millenium University">The Millenium University</option><option value="The Peoples University of Bangladesh">The Peoples University of Bangladesh</option><option value="The University of Asia Pacific">The University of Asia Pacific</option><option value="United International University">United International University</option><option value="University of Development Alternative">University of Development Alternative</option><option value="University of Information Technology & Sciences">University of Information Technology & Sciences</option><option value="University of Liberal Arts Bangladesh">University of Liberal Arts Bangladesh</option><option value="University of Science & Technology, Chittagong">University of Science & Technology, Chittagong</option><option value="University of South Asia">University of South Asia</option><option value="Uttara University">Uttara University</option><option value="Victoria University of Bangladesh">Victoria University of Bangladesh</option><option value="World University of Bangladesh">World University of Bangladesh</option><option value="Asian University for Women">Asian University for Women</option><option value="Islamic University of Technology">Islamic University of Technology</option><option value="South Asian University">South Asian University</option><option value="Dhaka Medical College">Dhaka Medical College</option><option value="Sir Salimullah Medical College">Sir Salimullah Medical College</option><option value="Mymensingh Medical College">Mymensingh Medical College</option><option value="Chittagong Medical College">Chittagong Medical College</option><option value="Rajshahi Medical College">Rajshahi Medical College</option><option value="MAG Osmani Medical College">MAG Osmani Medical College</option><option value="Sher-E-Bangla Medical College">Sher-E-Bangla Medical College</option><option value="Rangpur Medical College">Rangpur Medical College</option><option value="Comilla Medical College">Comilla Medical College</option><option value="Khulna Medical College">Khulna Medical College</option><option value="Shaheed Ziaur Rahman Medical College">Shaheed Ziaur Rahman Medical College</option><option value="Dinajpur Medical College">Dinajpur Medical College</option><option value="Faridpur Medical College">Faridpur Medical College</option><option value="Shaheed Suhrawardy Medical College">Shaheed Suhrawardy Medical College</option><option value="Pabna Medical College">Pabna Medical College</option><option value="Noakhali Medical College">Noakhali Medical College</option><option value="Cox's Bazar Medical College">Cox's Bazar Medical College</option><option value="Jessore Medical College">Jessore Medical College</option><option value="Shaheed Nazrul Islam Medical College">Shaheed Nazrul Islam Medical College</option><option value="Kushtia Medical College">Kushtia Medical College</option><option value="Satkhira Medical College">Satkhira Medical College</option><option value="Sheikh Sayera Khatun Medical College, Gopalganj">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="Feni Medical College,Feni">Feni Medical College,Feni</option><option value="Gono Bishwabidyalay, Savar, Dhaka">Gono Bishwabidyalay, Savar, Dhaka</option><option value="Ad-din Womens Medical College, Dhaka">Ad-din Womens Medical College, Dhaka</option><option value="Anwer Khan Modern Medical College, Dhaka">Anwer Khan Modern Medical College, Dhaka</option><option value="Bangladesh Medical College">Bangladesh Medical College</option><option value="Jalalabad Rageb-Rabeya Medical College,Sylhet">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="BGC Trust Medical College, Chittagong">BGC Trust Medical College, Chittagong</option><option value="Central Medical College, Comilla">Central Medical College, Comilla</option><option value="Chottagram Ma-O-Shishu Hospital Medical College">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="Community Based Medical College (cbmc), Mymensingh">Community Based Medical College (cbmc), Mymensingh</option><option value="Community Medical College, Dhaka">Community Medical College, Dhaka</option><option value="Delta Medical College, Dhaka">Delta Medical College, Dhaka</option><option value="Dhaka National Medical College">Dhaka National Medical College</option><option value="Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet">Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet</option><option value="Eastern Medical College, Comilla">Eastern Medical College, Comilla</option><option value="Enam Medical College, Savar, Dhaka">Enam Medical College, Savar, Dhaka</option><option value="Sylhet Women`s Medical College, Sylhet">Sylhet Women`s Medical College, Sylhet</option><option value="Green Life Medical College,Dhaka">Green Life Medical College,Dhaka</option><option value="Holy Family Red Crescent Medical College, Dhaka">Holy Family Red Crescent Medical College, Dhaka</option><option value="Ibrahim Medical College, Dhaka">Ibrahim Medical College, Dhaka</option><option value="Ibn Sina Medical College, Dhaka">Ibn Sina Medical College, Dhaka</option><option value="International Medical College, Gazipur">International Medical College, Gazipur</option><option value="Islami Bank Medical College, Rajshahi">Islami Bank Medical College, Rajshahi</option><option value="Jahurul Islam Medical College, Kishoregonj">Jahurul Islam Medical College, Kishoregonj</option><option value="Jalalabad Ragib-Rabeya Medical College Sylhet">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="Khawja Yunus Ali Medical College, Sirajganj">Khawja Yunus Ali Medical College, Sirajganj</option><option value="Kumudini Medical College, Tangail">Kumudini Medical College, Tangail</option><option value="Labaid Medical College[6] Dhanmondi, Dhaka">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="Maulana Bhasani Medical College">Maulana Bhasani Medical College</option><option value="Medical College for Women and Hospital, Dhaka">Medical College for Women and Hospital, Dhaka</option><option value="Nightingale Medical College, Dhaka">Nightingale Medical College, Dhaka</option><option value="North Bengal Medical College, Sirajganj">North Bengal Medical College, Sirajganj</option><option value="North East Medical College, Sylhet">North East Medical College, Sylhet</option><option value="Northern International Medical College, Dhaka">Northern International Medical College, Dhaka</option><option value="Northern Private Medical College, Rangpur">Northern Private Medical College, Rangpur</option><option value="Popular Medical College & Hospital, Dhaka">Popular Medical College & Hospital, Dhaka</option><option value="Prime Medical College, Rangpur">Prime Medical College, Rangpur</option><option value="Rangpur Community Hospital Medical College">Rangpur Community Hospital Medical College</option><option value="Sahabuddin Medical College and Hospital">Sahabuddin Medical College and Hospital</option><option value="Samaj Vittik Medical College, Mirzanagar, Savar">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="Shahabuddin Medical College, Dhaka">Shahabuddin Medical College, Dhaka</option><option value="Z. H. Sikder Women`s Medical College">Z. H. Sikder Women`s Medical College</option><option value="Southern Medical College, Chittagong">Southern Medical College, Chittagong</option><option value="Tairunnessa Memorial Medical College, Gazipur">Tairunnessa Memorial Medical College, Gazipur</option><option value="TMSS Medical College,Bogra">TMSS Medical College,Bogra</option><option value="University Of Science and Technology Chittagong. IAMS">University Of Science and Technology Chittagong. IAMS</option><option value="Uttara Adhunik Medical College,Dhaka">Uttara Adhunik Medical College,Dhaka</option><option value="Military Institute of Science and Technology (MIST)">Military Institute of Science and Technology (MIST)</option><option value="Others">Others</option><option value="Sonargaon University">Sonargaon University</option>
													</select>	
       </td> 
      </tr>
      <tr>
       <td><label for=""> বৎসর অতিবাহিত </label></td> 
       <td><input type="number" id="mstart_year" name="mstart_year" placeholder="হইতে "  style="width: 350px;height: 40px;">
       <input type="number" id="mend_year" name="mend_year" placeholder="পর্যন্ত "  style="width: 345px;height: 40px;">
       </td>  
      </tr>
      
      <tr>
        <td><label for="t4">পরীক্ষার নাম </label></td> 
       <td>
        <select class="form-control" name="masters_equivalent_level_examination" id="masters_equivalent_level_examination"  style="width: 350px;height: 40px;"> <option value=""> Select </option><option value="MBA">MBA</option><option value="M.S.S">M.S.S</option><option value="M.Sc">M.Sc</option><option value="M.A">M.A</option><option value="Masters">Masters</option><option value="LL.M">LL.M</option><option value="M.Sc (Agricultural Science)">M.Sc (Agricultural Science)</option><option value="M.Sc (Engineering/Architecture)">M.Sc (Engineering/Architecture)</option><option value="ME/Mtech">ME/Mtech</option><option value="Mmed">Mmed</option><option value="Masters or equivalent">Masters or equivalent</option><option value="M.Com">M.Com</option><option value="Kamil">Kamil</option><option value="MBM">MBM</option>
													</select>
         
     <label for="t5">বিভাগ/ শ্রেণী/ জিপিএ/সিজিপিএ</label>
     
               
 <select class="form-control" name="masters_equivalent_level_result" id="masters_equivalent_level_result"                 
style="width: 170px;height: 40px;"> <option value=""> Select </option><option value="1st Class">1st Class</option><option value="2nd Class">2nd Class</option><option value="3rd Class">3rd Class</option><option class="editable" value="CGPA(Out of 4)"  >CGPA(Out of 4) </option><option value="CGPA(Out of 5)">CGPA(Out of 5)</option><option value="Others">Others</option>
                                                
													</select>
                 
                  <div  > <input type="text" id="other3" name="other3" placeholder="GPA" style="width: 170px;height: 40px; float: right; display: none;" /></div>	
         </td>  
      </tr>
      <tr>
          <td><label for="t6">পাসের সন</label></td> 
       <td>
       <select class="form-control" name="masters_equivalent_level_passing_year" id="masters_equivalent_level_passing_year"  style="width: 100px;height: 40px;"> <option value=""> Select </option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
													</select>	
      

      
         <label for="t7">বোর্ড/ বিশ্ববিদ্যালয়</label>
       <input type="text" id="mBoard" name="mBoard"  style="width: 300px;height: 20px;"> 
       <label for="">পাঠ্য বিষয়</label>
        <select class="form-control" name="masters_equivalent_level_subject_degree" id="masters_equivalent_level_subject_degree"  style="width: 125px;height: 40px;"> <option value=""> Select </option><option value="Accounting">Accounting</option><option value="Anthropology">Anthropology</option><option value="Applied Chemistry">Applied Chemistry</option><option value="Applied Physics">Applied Physics</option><option value="Applied Mathematics">Applied Mathematics</option><option value="Arabic">Arabic</option><option value="Archaeology">Archaeology</option><option value="Bangla">Bangla</option><option value="Banking">Banking</option><option value="Biochemistry">Biochemistry</option><option value="Botany">Botany</option><option value="Business Administration">Business Administration</option><option value="Chemistry">Chemistry</option><option value="Computer Science">Computer Science</option><option value="Clinical Psychology">Clinical Psychology</option><option value="Drama & Music">Drama & Music</option><option value="Development Studies">Development Studies</option><option value="Economics">Economics</option><option value="Education">Education</option><option value="English">English</option><option value="Finance">Finance</option><option value="Fine Arts">Fine Arts</option><option value="Folklore">Folklore</option><option value="Geography">Geography</option><option value="Geology/Environment">Geology/Environment</option><option value="History">History</option><option value="Home Economics">Home Economics</option><option value="Hadith">Hadith</option><option value="International Relations">International Relations</option><option value="Islamic History and Culture">Islamic History and Culture</option><option value="Islamic Studies">Islamic Studies</option><option value="Information Com. Tech. (ICT)">Information Com. Tech. (ICT)</option><option value="Mass Comm. & Journalism">Mass Comm. & Journalism</option><option value="Law/Jurisprudence">Law/Jurisprudence</option><option value="Library Science">Library Science</option><option value="Language/Linguistic">Language/Linguistic</option><option value="Management">Management</option><option value="Marketing">Marketing</option><option value="Mathematics">Mathematics</option><option value="Microbiology">Microbiology</option><option value="Marine Science">Marine Science</option><option value="Medical Technology">Medical Technology</option><option value="Pali">Pali</option><option value="Persian">Persian</option><option value="Pharmacy">Pharmacy</option><option value="Philosophy">Philosophy</option><option value="Physics">Physics</option><option value="Political Science/Govt. and Politics">Political Science/Govt. and Politics</option><option value="Psychology">Psychology</option><option value="Public Administration">Public Administration</option><option value="Public Finance">Public Finance</option><option value="Population Science">Population Science</option><option value="Peace & Conflict">Peace & Conflict</option><option value="Pharmaceutical Chemistry">Pharmaceutical Chemistry</option><option value="Sanskrit">Sanskrit</option><option value="Social Welfare/Social Work">Social Welfare/Social Work</option><option value="Sociology">Sociology</option><option value="Soil Water and Environment Science">Soil Water and Environment Science</option><option value="Statistics">Statistics</option><option value="Tafsir">Tafsir</option><option value="Urdu">Urdu</option><option value="Urban Development">Urban Development</option><option value="World Religion">World Religion</option><option value="Women Studies">Women Studies</option><option value="Water & Environment Science">Water & Environment Science</option><option value="Zoology">Zoology</option><option value="Genetic and Breeding">Genetic and Breeding</option><option value="International Law">International Law</option><option value="Akaid">Akaid</option><option value="Graphics">Graphics</option><option value="Fikha">Fikha</option><option value="Modern Arabic">Modern Arabic</option><option value="History of Music">History of Music</option><option value="Drawing and Printing">Drawing and Printing</option><option value="Industrial Arts">Industrial Arts</option><option value="Ethics">Ethics</option><option value="Forestry">Forestry</option><option value="Agriculture">Agriculture</option><option value="Agriculture Chemistry">Agriculture Chemistry</option><option value="Agriculture Co-operatives">Agriculture Co-operatives</option><option value="Agriculture Economics">Agriculture Economics</option><option value="Agriculture Engineering">Agriculture Engineering</option><option value="Agriculture Finance">Agriculture Finance</option><option value="Agriculture Marketing">Agriculture Marketing</option><option value="Agriculture Science">Agriculture Science</option><option value="Agriculture Soil Science">Agriculture Soil Science</option><option value="Animal Husbandry">Animal Husbandry</option><option value="Agronomy & Aquaculture">Agronomy & Aquaculture</option><option value="Agronomy & Aquaculture Extension">Agronomy & Aquaculture Extension</option><option value="Anatomy & Histology">Anatomy & Histology</option><option value="Agronnomy">Agronnomy</option><option value="Anatomology">Anatomology</option><option value="Animal Breeding & Genetic">Animal Breeding & Genetic</option><option value="Animal Science">Animal Science</option><option value="Animal Nutrition">Animal Nutrition</option><option value="Agriculture Water Management">Agriculture Water Management</option><option value="Agriculture Extension">Agriculture Extension</option><option value="Agro Forestry">Agro Forestry</option><option value="Agriculture Statistics">Agriculture Statistics</option><option value="Agr.Co-operative & Marketing">Agr.Co-operative & Marketing</option><option value="Bio-Technology">Bio-Technology</option><option value="Corp Botany">Corp Botany</option><option value="Dairy Science">Dairy Science</option><option value="Doc.of Veterinary Science">Doc.of Veterinary Science</option><option value="Fisheries">Fisheries</option><option value="Fisheries & Aquaculture">Fisheries & Aquaculture</option><option value="Fisheries Biology">Fisheries Biology</option><option value="Fisheries Management">Fisheries Management</option><option value="Fisheries Technology">Fisheries Technology</option><option value="Forestry">Forestry</option><option value="Farm Power & Machinery">Farm Power & Machinery</option><option value="Food Tech. & Rural Industry">Food Tech. & Rural Industry</option><option value="Farm Structure">Farm Structure</option><option value="Horticulture">Horticulture</option><option value="Livestock">Livestock</option><option value="Microbiology & Hygenic">Microbiology & Hygenic</option><option value="Production Economics">Production Economics</option><option value="Plant Pathology">Plant Pathology</option><option value="Paratrology">Paratrology</option><option value="Poultry Science">Poultry Science</option><option value="Rural Sociology">Rural Sociology</option><option value="Surgery & Obstate">Surgery & Obstate</option><option value="Business Studies">Business Studies</option><option value="Architecture">Architecture</option><option value="Chemical">Chemical</option><option value="Civil">Civil</option><option value="Electrical">Electrical</option><option value="Electrical & Electronics">Electrical & Electronics</option><option value="Electronic">Electronic</option><option value="Genetic Engineering">Genetic Engineering</option><option value="Industrial">Industrial</option><option value="Leather Technology">Leather Technology</option><option value="Marine">Marine</option><option value="Mechanical">Mechanical</option><option value="Metallurgy">Metallurgy</option><option value="Mineral">Mineral</option><option value="Mining">Mining</option><option value="Naval Architecture">Naval Architecture</option><option value="Physical Planning">Physical Planning</option><option value="Regional Planning">Regional Planning</option><option value="Structural">Structural</option><option value="Textile Technology">Textile Technology</option><option value="Town Planning">Town Planning</option><option value="Urban Planning">Urban Planning</option><option value="Tele-Comunication Engineering">Tele-Comunication Engineering</option><option value="Computer Science">Computer Science</option><option value="Microwave Engineering">Microwave Engineering</option><option value="A & B Section of A.M.I.E">A & B Section of A.M.I.E</option><option value="Environmental Engineering">Environmental Engineering</option><option value="Aeronautical Engineering">Aeronautical Engineering</option><option value="Medicine & Surgery">Medicine & Surgery</option><option value="Dental Surgery">Dental Surgery</option><option value="B.A">B.A</option><option value="B.S.S">B.S.S</option><option value="B.Sc">B.Sc</option><option value="B.com">B.com</option><option value="L.L.B">L.L.B</option><option value="B.B.A">B.B.A</option><option value="Others">Others</option><option value="Accounting and Information Systems">Accounting and Information Systems</option><option value="Management Information Systems">Management Information Systems</option><option value="International Business">International Business</option><option value="Tourism and Hospitality Management">Tourism and Hospitality Management</option><option value="Organization Strategy and Leadership">Organization Strategy and Leadership</option><option value="Finance and Banking">Finance and Banking</option><option value="Banking and Insurance">Banking and Insurance</option><option value="Human Resource Management">Human Resource Management</option><option value="MBM">MBM</option>
													</select>
													  
       
        </td> 
      </tr>
     </table> 
    </fieldset><br><br>
     
         <script type="text/javascript">
  $(document).ready(function () {
        $('#masters_equivalent_level_result').change(function () {
            if( ($('#masters_equivalent_level_result').val() =='Others') || ($('#masters_equivalent_level_result').val() =='CGPA(Out of 4)') || ($('#masters_equivalent_level_result').val() =='CGPA(Out of 5)') ){
                $('#other3').show();
            }
            else {
                $('#other3').hide();
            }
        });
    });
    
  </script>
      
      
       
       
       <li> <label for="a">  কোন বিশেষ প্রতিষ্ঠানে অধ্যয়ন এবং বিশেষ বিষয়ে পাঠ গ্রহনঃ </label></li>
        <textarea id="otherEdu" name="otherEdu"   style="height:70px; width: 800px"></textarea><br><br><br>
      
 
      <li> <label for="c">  দক্ষতা অনুসারে বিভিন্ন ভাষা জ্ঞানের বিবরনঃ</label><br>
        <textarea id="language_performance" name="language_performance"   style="height:70px; width: 800px"></textarea><br></li><br><br>
      
      <li> <label for=""> কর্মে অভিজ্ঞতাঃ</label>
      <br>
      
       <label for="d">ক)  চাকুরীর পূর্বপদঃ(চাকুরীর কাল ও বেতন)</label><br>
        <textarea id="previous_job" name="previous_job"    style="height:70px; width: 800px"></textarea><br><br><br>
      
       <label for="e">      (খ) বর্তমান পদ ,বেতন ও চাকুরীকালঃ</label><br>
       <textarea id="present_job" name="present_job"   style="height:70px; width: 800px"></textarea><br><br><br>
      
       <label for="f">      (গ) অভিজ্ঞতার বিবরণ এবং প্রতিষ্ঠানের নাম,ঠিকানা উল্লেখঃঃ</label><br>
       <textarea id="job_experience" name="job_experience"   style="height:70px; width: 800px"></textarea><br><br><br></li>
      
       <li><label for="g"> কোন বিশ্ববিদ্যালয় অথবা কোন শিক্ষা প্রতিষ্ঠান অথবা অন্য কোন সংস্থায়     নির্ধারিত সময়ের জন্য চাকুরী করিতে বাধ্য কিনা?</label><br>
      <input type="text" id="job_agreement" name="job_agreement"  style="width: 800px;height: 25px;"><br><br><br></li>
      
      <li> <label for="h"> চাকুরী গ্রহনে ইস্পিত বেতনের নিম্নতম পরিমাণঃ</label><br>
      <input type="text" id="expected_salary" name="expected_salary"  style="width: 800px;height: 25px;"><br><br><br></li>
      
      <li> <label for="i"> আপনার পরিচিত কিন্তু জ্ঞাতি অথবা বৈবাহিক সম্পর্ক নাই এমন দুইজন বাক্তির নাম ও ঠিকানা যাহাদের নিকট আপনার যোগ্যতা</label> </li><label for="">সম্মন্ধে তথ্য পাওয়া যাবেঃ</label><br>
        <textarea id="reference" name="reference"   style="height:70px; width: 800px"></textarea><br><br><br>
      
      <li> <label for="j"> কখনও চাকুরী হইতে বরখাস্ত/পদচ্যুত করা হইয়া থাকিলে তাহার বিবরনঃ </label><br>
      <input type="text" id="suspention_details" name="	suspention_details"  style="width: 800px;height: 25px;"><br><br><br></li>
      
      <li> <label for="k">  পেনশন প্রাপ্ত হইলে উহার পরিমাণ এবং কোন সংস্থা থেকে প্রাপ্ত তাহার বিবরনঃ </label><br>
  <textarea id="pension_details" name="pension_details"   style="height:70px; width: 800px"></textarea><br><br> <br></li>  
     
     <li> <label for="k"> কোন খ্যাতিসম্পন্ন প্রতিষ্ঠান/সংস্থা/সমিতির সহিত জড়িত থাকিলে তাহার নাম ও বিবরনঃ</label><br>
  <textarea id="other_info" name="other_info"   style="height:70px; width: 800px"></textarea><br><br> <br></li> 
      
      <fieldset style="background-color: gainsboro";>
      
       <legend>সংযুক্তঃ ব্যাংক বিবরণী </legend>
       <table text align:left>
       <tr>
       <td> <label for="l">ব্যাংক দ্রাফট/পে-অর্ডার নংঃ  </label></td>                                    
      <td><input type="text" id="pay_order_no" name="pay_order_no"  style="width:450px;height: 25px;">
      
     
      <label for="m">তারিখঃ</label>
      <input type="date" id="date" name="date"  style="width: 200px;height: 40px;"></td>
      </tr>
      <tr>
      <td> <label for="n">টাকার পরিমাণঃ</label></td>
      <td> <input type="text" id="amount" name="amount"  style="width: 700px;height: 25px;"></td>
      </tr>
      </table>
      </fieldset><br><br>
      
      
      <table>
      <tr>
          <th> আবেদনকারীর ছবি </th>
          <th>আবেদনকারীর সাক্ষরঃ  </th>
          <th>তারিখঃ </th>
         </tr>
      <tr >
    <td rowspan="3"> 
         <input type="file" id="image" name="image"  style="width: 400px;"></td>
   
     <td> 
    <input type="file" id="signature" name="signature"  style="width: 300px;"></td>
       
      <td>  
   <input type="date" id="signdate" name="signdate"  style="width: 150px;height: 40px;"></td>
      </tr>
    </table>
      
      <hr>
      
        <input type="submit" value="জমা দিন ">
        
        
        
  </form> 
 </div>

 <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>


<link rel="stylesheet" type="text/css" href="./plugin/datepicker/css/jquery.datepick.css"> 
<script type="text/javascript" src="./plugin/datepicker/js/jquery.plugin.js"></script> 
<script type="text/javascript" src="./plugin/datepicker/js/jquery.datepick.js"></script>
<script type="text/javascript" src="./calandar/js/moment.min.js"></script>
<script type="text/javascript" src="./calandar/js/moment-with-locales.min.js"></script>
<script type="text/javascript" src="./calandar/js/ion.calendar.js"></script>



	
	
		<br>
		<br>
		
		
		
		
 
</body>
</html> 