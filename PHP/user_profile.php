<!DOCTYPE html>
<html>
<head>

<style>
body{
    background:#eee;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;

}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#F5CEB5;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#CB5307;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}

.container {

  width: auto;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%)
}

.fonts{
    font-size:15px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#CB5307;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #CB5307 !important;
       color:#CB5307;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #CB5307 !important;
       color:#fff;
       height:40px;
       background-color:#CB5307;
}

.buttons button:nth-child(2){
       border:1px solid #CB5307 !important;
       background-color:#CB5307;
       color:#fff;
        height:40px;
}
</style>
</head>
<body>
<div class="container mt-0">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-5">
            
            <div class="card p-12 py-4 mx-auto">

                <div class="text-center">
                    <img src="../assets/favicon.ico" width="100">
                </div>
                
                <div class="text-center mt-3">
                    <h5 class="mt-0 mb-0" style="font-size:25px;">Username</h5>
                    <div class="px-2 mt-2">

                        <span style="font-size:20px; -top:5px;">Student/Teacher</span>
         
                        <p class="fonts mt-2">School</p>
                        <p class="fonts">City</p>
                    
                    </div>
                    
                    <div class="buttons mt-5">
                        
                        <button class="btn btn-outline-primary px-4">Back</button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>

</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
