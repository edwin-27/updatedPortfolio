            function InitLogin(){
            
            
            const form = document.getElementById('login');
          const email = document.getElementById('email');
          const password = document.getElementById('password');

          form.addEventListener('submit' , e => {
            document.getElementById('erremail').textContent = "";
            document.getElementById('errpassword').textContent = "";

            if(email.value ==="" || email.value === null){
                document.getElementById('erremail').textContent = "Please enter your email";
              e.preventDefault();
            }
            if(password.value ==="" || password.value === null){
                document.getElementById('errpassword').textContent = "Please enter your password";
              e.preventDefault();
            }



          });

        }


        function InitAddBlog(){
            
            
            const form = document.getElementById('form');
          const title = document.getElementById('title');
          const desc = document.getElementById('desc');
          const reset = document.getElementById('reset');
          //alert("This is a test js");
          console.log("this is from cosnole");


          form.addEventListener('submit' , e => {
            document.getElementById('errtitle').textContent = "";
            document.getElementById('errdesc').textContent = "";

            if(title.value ==="" || title.value === null){
                document.getElementById('errtitle').textContent = "Please enter title";
              e.preventDefault();
            }
            if(desc.value ==="" || desc.value === null){
                document.getElementById('errdesc').textContent = "Please enter description";
              e.preventDefault();
            }



          });

          reset.addEventListener("click", e =>{
            title.value = "";
            desc.value = "";
        });

        }


        
        function sortbymonth()
        {
          document.getElementById("viewblog").submit();
        }
        