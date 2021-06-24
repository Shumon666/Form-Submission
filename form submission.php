<!DOCTYPE html>
<html>
    <head>
        <title>Form Submission</title>
</head>
        <body>
                <h1> Form Submission</h1>
<form>
<h3> Basic Information</h3>
    <table>
        <tr>
            <td>
                Full Name:
            </td>
            <td>
                <input type="text">
            </td>
        </tr>  
        <tr>
            <td>
                Last Name: 
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        
       
        <tr>
              <td> 
                   Gender: 
              </td>
               <td>   
                        <input type="radio" name= "gender">Female
                        <input type="radio" name="gender">Male
                        <input type="radio" name="gender">Other
               </td>
               
        </tr>
        <tr>
              <td>  
                   Dath of Birth:
                </td>
                <td> 
                        <input type="date" name= "date">
                        
                </td>
                
        </tr>
		
		
        <tr>
              <td> 
                   Religion: 
              </td>
               <td> <select>			   
                        <option type="dropdown" name= "Religion">Islam
                        <option type="dropdown" name="Religion">Hindu
                        <option type="dropdown" name="Religion">Crishan
               </select></td>
               
        </tr>
		
		
		
		
        
    </table>
        </form>
		
		<form>
<h3> Contact Information</h3>
    <table>
        <tr>
            <td>
                Present Address:
            </td>
            <td>
                <input type="textarea">
            </td>
        </tr>  
        <tr>
            <td>
                Permanent Address: 
            </td>
            <td>
                <input type="textarea">
            </td>
        </tr>
        
       
        <tr>
              <td> 
                   Phone: 
              </td>
               <td>   
                        <input type="tel" name= "tel">
                        
               </td>
               
        </tr>
        <tr>
              <td>  
                   Email:
                </td>
                <td> 
                        <input type="email" name= "email">
                        
                </td>
                
        </tr>
		
		
        <tr>
              <td> 
                   Personal Website Link: 
              </td>
               <td> 			   
                        <option type="url" name= "url">
                        
               </td>
               
        </tr>
		
    </table>
        </form>
		
		
		
		<form>
<h3> Account Information</h3>
    <table>
        <tr>
            <td>
                Username:
            </td>
            <td>
                <input type="text">
            </td>
        </tr>  
        <tr>
            <td>
                Password: 
            </td>
            <td>
                <input type="password">
            </td>
        </tr>
        
       
  
		
    </table>
        </form>
		
		
        
             <tr>
        
                <td> 
                     <br>   <input type="submit" value="Submit">
                           
                </td>
           
 
         </tr>
    </body>
</html>