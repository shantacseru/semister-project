
<!DOCTYPE html>
<html>
   <head>
   	
      <meta charset="utf-8">
      <title> Upload File   </title>

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


   </head>

  <body>
  	
       <div class="container">
       	
             <div class="row">

                  <br>



             	
                 <form action="{{route('file.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

                     {{csrf_field()}} 





                     

                 	  <input type="file" name="file">

                      <input type="submit" class="btn btn-info">

                 </form>




             </div>


              <div class="row">
                
                 <h2>show files</h2>

                 <img src="{{  asset('storage/upload/Img_20140729_122827.jpg') }}" alt="">



              </div>







       </div>






  </body>


</html>